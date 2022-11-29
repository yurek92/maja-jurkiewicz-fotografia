<?php

namespace App\Models;

use Mpdf\HTMLParserMode;
use mikehaertl\wkhtmlto\Pdf as WkPdf;

class Pdf
{
    public static function renderPdf($weedingForm, $attachment = false)
    {
        $mPdf = Pdf::getMpdf();

        $mPdf->SetTitle('Formularz Ślubny '.$weedingForm['para_mloda']);

        $docTemplate = base_path('resources/pdf/weeding-form.pdf');
        $stylesheetPath = base_path('resources/pdf/weeding-form.css');

        $mPdf->SetDocTemplate($docTemplate, true);

        $stylesheet = file_get_contents($stylesheetPath);
        $mPdf->WriteHTML($stylesheet, HTMLParserMode::HEADER_CSS);

        $weedingFormData = WeedingForm::getDataForPdf($weedingForm);

        $html = \View::make('pdf.weeding-form', ['weedingFormData' => $weedingFormData])->render();
        $mPdf->WriteHTML($html, HTMLParserMode::HTML_BODY);

        if ($attachment)
        {
            return $mPdf->Output($weedingForm['para_mloda'].'_'.$weedingForm['termin_slubu'].'.pdf', 'S');
        }
        else
        {
            $mPdf->Output($weedingForm['para_mloda'].'_'.$weedingForm['termin_slubu'].'.pdf', 'I');
        }
    }

    public static function getMpdf()
    {
        $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new \Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        $mpdf_config = array_merge([
            'mode'     => 'utf - 8',
            'format'   => 'A4',
            'tempDir'  => base_path(' / temp / '),
            'fontDir'  => array_merge($fontDirs, [
                base_path('resources / views / pdf / fonts'),
            ]),
            'fontdata' => $fontData + [
                    'glass - antiqua' => [
                        'R' => 'GlassAntiqua - Regular.ttf',
                    ],
                ],
        ]);

        $mpdf = new \Mpdf\Mpdf($mpdf_config);

        $mpdf->SetDisplayMode('fullpage');

        return $mpdf;
    }
}
