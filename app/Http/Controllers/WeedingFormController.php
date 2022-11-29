<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pdf;
use App\Models\WeedingForm;

class WeedingFormController extends Controller
{
    public function showThanks()
    {
        return view('thanks');
    }

    public function generatePdf($id)
    {
        $weedingForm = WeedingForm::find($id)->toArray();

        return Pdf::renderPdf($weedingForm);
    }

    public function edit($id)
    {
        return view('edit-form', [
            'weedingFormId' => $id,
        ]);
    }
}
