<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeedingForm extends Model
{
    public $table = 'weeding_forms';

    protected $fillable
        = [
            'para_mloda',
            'termin_slubu',
            'rodzaj_reportazu',
            'przygotowania',
            'ceremonia',
            'wesele',
            'oczepiny',
            'imiona_swiadkow',
            'telefon_panny_mlodej',
            'telefon_pana_mlodego',
            'imiona_rodzicow_panny_mlodej',
            'imiona_rodzenstwa_panny_mlodej',
            'imiona_rodzicow_pana_mlodego',
            'imiona_rodzenstwa_pana_mlodego',
            'alternatywny_telefon_panny_mlodej',
            'alternatywny_telefon_pana_mlodego',
            'miejsce_ceremonii',
            'godzina_rozpoczecia_ceremonii',
            'miejsce_wesela',
            'przygotowania_info',
            'miejsce_przygotowan_panny_mlodej',
            'miejsce_przygotowan_pana_mlodego',
            'wejscie_na_ceremonie',
            'wejscie_na_ceremonie_inaczej',
            'miejsce_podpisow_slub_konkordatowy',
            'miejsce_zyczen',
            'miejsce_zyczen_inne',
            'liczba_gosci',
            'nazwa_zespolu',
            'nazwa_kamerzysty',
            'zdjecie_grupowe',
            'zdjecie_grupowe_inne_miejsce',
            'pierwszy_taniec',
            'zdjecia_pozowane',
            'zdjecia_pozowane_godzina',
            'plan_wesela',
            'niespodzianki',
            'szczegolna_uwaga',
            'sytuacja_rodzinna',
            'haslo_do_galerii',
            'dodatkowe_uwagi',
            'zgoda_rodo',
        ];

    public static $fields
        = [
            'para_mloda'                         => [
                'label'    => 'Para Młoda',
                'type'     => 'input',
                'rules'    => 'required',
                'category' => 'ogolne',
            ],
            'termin_slubu'                       => [
                'label'    => 'Data ślubu',
                'type'     => 'date',
                'rules'    => 'required',
                'category' => 'ogolne',
            ],
            'rodzaj_reportazu'                   => [
                'label'         => 'Rodzaj reportażu',
                'type'          => 'select',
                'rules'         => 'required|gt:0',
                'default_value' => 0,
                'values'        => [
                    0 => 'Wybierz',
                    1 => 'Pełny',
                    2 => 'Częściowy',
                ],
                'category'      => 'ogolne',
            ],
            'przygotowania'                      => [
                'label'       => 'Przygotowania',
                'type'        => 'radio',
                'rules'       => 'required',
                'values'      => [
                    1 => 'Tak',
                    2 => 'Nie',
                ],
                'constraints' => [
                    'rodzaj_reportazu' => [2],
                ],
                'category'    => 'ogolne',
            ],
            'ceremonia'                          => [
                'label'       => 'Ceremonia',
                'type'        => 'radio',
                'rules'       => 'required',
                'values'      => [
                    1 => 'Tak',
                    2 => 'Nie',
                ],
                'constraints' => [
                    'rodzaj_reportazu' => [2],
                ],
                'category'    => 'ogolne',
            ],
            'wesele'                             => [
                'label'       => 'Wesele',
                'type'        => 'radio',
                'rules'       => 'required',
                'values'      => [
                    1 => 'Tak',
                    2 => 'Nie',
                ],
                'constraints' => [
                    'rodzaj_reportazu' => [2],
                ],
                'category'    => 'ogolne',
            ],
            'oczepiny'                           => [
                'label'       => 'Oczepiny',
                'type'        => 'radio',
                'rules'       => 'required',
                'values'      => [
                    1 => 'Tak',
                    2 => 'Nie',
                ],
                'constraints' => [
                    'rodzaj_reportazu' => [2],
                ],
                'category'    => 'ogolne',
            ],
            'przygotowania'                      => [
                'label'       => 'Przygotowania',
                'type'        => 'radio',
                'rules'       => 'required',
                'values'      => [
                    1 => 'Tak',
                    2 => 'Nie',
                ],
                'constraints' => [
                    'rodzaj_reportazu' => [2],
                ],
                'category'    => 'ogolne',
            ],
            'imiona_swiadkow'                    => [
                'label'    => 'Imiona świadków',
                'type'     => 'input',
                'rules'    => 'required',
                'category' => 'ogolne',
            ],
            'telefon_panny_mlodej'               => [
                'label'    => 'Telefon Panny Młodej',
                'type'     => 'input',
                'rules'    => 'required',
                'category' => 'ogolne',
            ],
            'telefon_pana_mlodego'               => [
                'label'    => 'Telefon Pana Młodego',
                'type'     => 'input',
                'rules'    => 'required',
                'category' => 'ogolne',
            ],
            'imiona_rodzicow_panny_mlodej'       => [
                'label'    => 'Imiona rodziców Panny Młodej',
                'type'     => 'input',
                'rules'    => 'required',
                'category' => 'ogolne',
            ],
            'imiona_rodzenstwa_panny_mlodej'     => [
                'label'    => 'Imiona rodzeństwa Panny Młodej',
                'type'     => 'input',
                'rules'    => 'required',
                'category' => 'ogolne',
            ],
            'imiona_rodzicow_pana_mlodego'       => [
                'label'    => 'Imiona rodziców Pana Młodego',
                'type'     => 'input',
                'rules'    => 'required',
                'category' => 'ogolne',
            ],
            'imiona_rodzenstwa_pana_mlodego'     => [
                'label'    => 'Imiona rodzeństwa Pana Młodego',
                'type'     => 'input',
                'rules'    => 'required',
                'category' => 'ogolne',
            ],
            'alternatywny_telefon_panny_mlodej'  => [
                'label'       => 'Alternatywny telefon Panny Młodej',
                'placeholder' => 'np. świadkowa lub jeden z rodziców',
                'type'        => 'input',
                'rules'       => 'required',
                'category'    => 'ogolne',
            ],
            'alternatywny_telefon_pana_mlodego'  => [
                'label'       => 'Alternatywny telefon Pana Młodego',
                'placeholder' => 'np. świadek lub jeden z rodziców',
                'type'        => 'input',
                'rules'       => 'required',
                'category'    => 'ogolne',
            ],
            'miejsce_ceremonii'                  => [
                'label'       => 'Miejsce ceremonii',
                'placeholder' => 'dokładny adres',
                'type'        => 'input',
                'rules'       => 'required',
                'constraints' => [
                    'ceremonia' => [1],
                ],
                'category'    => 'ceremonia',
            ],
            'godzina_rozpoczecia_ceremonii'      => [
                'label'       => 'Godzina rozpoczęcia ceremonii',
                'type'        => 'input',
                'rules'       => 'required',
                'constraints' => [
                    'ceremonia' => [1],
                ],
                'category'    => 'ceremonia',
            ],
            'miejsce_wesela'                     => [
                'label'       => 'Miejsce przyjęcia weselnego',
                'placeholder' => 'dokładny adres',
                'type'        => 'input',
                'rules'       => 'required',
                'constraints' => [
                    'wesele' => [1],
                ],
                'category'    => 'wesele',
            ],
            'przygotowania_info'                 => [
                'label'       => 'Dodatkowe informacje związane z przygotowaniami/błogosławieństwem',
                'placeholder' => 'np. o której godzinie planowana jest kosmetyczka/fryzjer lub inne sprawy, na które mam zwrócić uwagę',
                'type'        => 'textarea',
                'rules'       => 'nullable',
                'constraints' => [
                    'przygotowania' => [1],
                ],
                'category'    => 'przygotowania',
            ],
            'miejsce_przygotowan_panny_mlodej'   => [
                'label'       => 'Miejsce przygotowań Panny Młodej',
                'placeholder' => 'dokładny adres',
                'type'        => 'input',
                'rules'       => 'required',
                'constraints' => [
                    'przygotowania' => [1],
                ],
                'category'    => 'przygotowania',
            ],
            'miejsce_przygotowan_pana_mlodego'   => [
                'label'       => 'Miejsce przygotowań Pana Młodego',
                'placeholder' => 'dokładny adres',
                'type'        => 'input',
                'rules'       => 'required',
                'constraints' => [
                    'przygotowania' => [1],
                ],
                'category'    => 'przygotowania',
            ],
            'wejscie_na_ceremonie'               => [
                'label'         => 'W jaki sposób wejdziecie na ceremonię?',
                'pdf_label'     => 'Sposób wejścia na ceremonię',
                'type'          => 'select',
                'rules'         => 'required|gt:0',
                'default_value' => 0,
                'values'        => [
                    0 => 'Wybierz',
                    1 => 'Razem',
                    2 => 'Osobno',
                    3 => 'Inaczej',
                ],
                'constraints'   => [
                    'ceremonia' => [1],
                ],
                'category'      => 'ceremonia',
            ],
            'wejscie_na_ceremonie_inaczej'       => [
                'label'       => 'Inne wejście na ceremonię',
                'type'        => 'input',
                'rules'       => 'nullable',
                'constraints' => [
                    'wejscie_na_ceremonie' => [3],
                ],
                'constraints' => [
                    'ceremonia' => [1],
                ],
                'category'    => 'ceremonia',
            ],
            'miejsce_podpisow_slub_konkordatowy' => [
                'label'         => 'Gdzie składane będą podpisy w przypadku ślubu konkordatowego?',
                'pdf_label'     => 'Miejsce składania podpisów - ślub konkordatowy',
                'type'          => 'select',
                'rules'         => 'nullable',
                'default_value' => 0,
                'values'        => [
                    0 => 'Wybierz',
                    1 => 'Przed mszą w zakrystii',
                ],
                'constraints'   => [
                    'ceremonia' => [1],
                ],
                'category'      => 'ceremonia',
            ],
            'miejsce_zyczen'                     => [
                'label'         => 'Gdzie będą składane życzenia?',
                'pdf_label'     => 'Miejsce składania życzeń',
                'type'          => 'select',
                'rules'         => 'required|gt:0',
                'default_value' => 0,
                'values'        => [
                    0 => 'Wybierz',
                    1 => 'Zaraz po ceremonii (przed kościołem/USC)',
                    2 => 'Inne miejsce',
                ],
                'category'      => 'ogolne',
            ],
            'miejsce_zyczen_inne'                => [
                'label'       => 'Inne miejsce składania życzeń',
                'type'        => 'input',
                'rules'       => 'nullable',
                'constraints' => [
                    'miejsce_zyczen' => [2],
                ],
                'category'    => 'ogolne',
            ],
            'liczba_gosci'                       => [
                'label'    => 'Przewidywana liczba gości',
                'type'     => 'input',
                'rules'    => 'required',
                'category' => 'ogolne',
            ],
            'nazwa_zespolu'                      => [
                'label'       => 'Nazwa zespołu/DJ-a',
                'type'        => 'input',
                'rules'       => 'required',
                'constraints' => [
                    'wesele' => [1],
                ],
                'category'    => 'wesele',
            ],
            'nazwa_kamerzysty'                   => [
                'label'       => 'Nazwa kamerzysty',
                'type'        => 'input',
                'rules'       => 'required',
                'constraints' => [
                    'wesele' => [1],
                ],
                'category'    => 'wesele',
            ],
            'zdjecie_grupowe'                    => [
                'label'         => 'Czy i gdzie zrobimy zdjęcie grupowe?',
                'pdf_label'     => 'Zdjęcia grupowe',
                'type'          => 'select',
                'rules'         => 'required|gt:0',
                'default_value' => 0,
                'values'        => [
                    0 => 'Wybierz',
                    1 => 'Tak - zaraz po ceremonii (przed kościołem/USC)',
                    2 => 'Inne miejsce',
                    3 => 'Nie',
                ],
                'category'      => 'ogolne',
            ],
            'zdjecie_grupowe_inne_miejsce'       => [
                'label'       => 'Zdjęcie grupowe - inne miejsce',
                'type'        => 'input',
                'rules'       => 'nullable',
                'constraints' => [
                    'zdjecie_grupowe' => [2],
                ],
                'category'    => 'ogolne',
            ],
            'pierwszy_taniec'                    => [
                'label'         => 'Jak wykonacie pierwszy taniec?',
                'pdf_label'     => 'Pierwszy taniec',
                'type'          => 'select',
                'rules'         => 'required|gt:0',
                'default_value' => 0,
                'values'        => [
                    0 => 'Wybierz',
                    1 => 'Na spontanie',
                    2 => 'Nie będzie pierwszego tańca',
                ],
                'constraints'   => [
                    'wesele' => [1],
                ],
                'category'      => 'wesele',
            ],
            'zdjecia_pozowane'                   => [
                'label'         => 'Czy podczas wesela robimy zdjęcia pozowane?',
                'pdf_label'     => 'Zdjęcia pozowane',
                'type'          => 'select',
                'rules'         => 'required|gt:0',
                'default_value' => 0,
                'values'        => [
                    0 => 'Wybierz',
                    1 => 'Tak',
                    2 => 'Nie',
                ],
                'constraints'   => [
                    'wesele' => [1],
                ],
                'category'      => 'wesele',
            ],
            'zdjecia_pozowane_godzina'           => [
                'label'       => 'O której godzinie wykonamy zdjęcia pozowane?',
                'pdf_label'   => 'Godzina zdjęć pozowanych',
                'placeholder' => 'Proszę ustalcie ten punkt z zespołem/DJ-em',
                'type'        => 'input',
                'rules'       => 'nullable',
                'constraints' => [
                    'zdjecia_pozowane' => [1],
                ],
                'constraints' => [
                    'wesele' => [1],
                ],
                'category'    => 'wesele',
            ],
            'plan_wesela'                        => [
                'label'       => 'Plan wesela (godziny posiłków, wjazd tortu itd.)',
                'pdf_label'   => 'Plan wesela',
                'placeholder' => 'jeśli macie e-maila z ustaleniami od sali weselnej, możecie mi go przesłać w wiadomości poza formularzem',
                'type'        => 'textarea',
                'rules'       => 'nullable',
                'constraints' => [
                    'wesele' => [1],
                ],
                'category'    => 'wesele',
            ],
            'niespodzianki'                      => [
                'label'       => 'Czy zaplanowaliście podczas wesela jakieś niespodzianki dla gości, o których powinnam wcześniej wiedzieć?',
                'pdf_label'   => 'Niespodzianki dla gości',
                'placeholder' => 'np. specjalny koncert/pokaz',
                'type'        => 'textarea',
                'rules'       => 'nullable',
                'constraints' => [
                    'wesele' => [1],
                ],
                'category'    => 'wesele',
            ],
            'szczegolna_uwaga'                   => [
                'label'       => 'Czy są jakieś kwestie, na których zależy Wam, abym zwróciła szczególną uwagę?',
                'pdf_label'   => 'Na co zwrócić szczególną uwagę',
                'placeholder' => 'np. osoby, dekoracje, momenty',
                'type'        => 'textarea',
                'rules'       => 'nullable',
                'category'    => 'ogolne',
            ],
            'sytuacja_rodzinna'                  => [
                'label'       => 'Czy jest jakaś "wyjątkowa" sytuacja rodzinna, o której powinnam wiedzieć?',
                'pdf_label'   => 'Wyjątkowa sytuacja rodzinna',
                'placeholder' => 'np. rozwiedzeni rodzice',
                'type'        => 'textarea',
                'rules'       => 'nullable',
                'category'    => 'ogolne',
            ],
            'haslo_do_galerii'                   => [
                'label'       => 'Śmieszne hasło dla Waszych gości do galerii zdjęć :)',
                'pdf_label'   => 'Hasło do galerii',
                'placeholder' => 'krótkie, bez polskich znaków',
                'type'        => 'input',
                'rules'       => 'required',
                'category'    => 'ogolne',
            ],
            'dodatkowe_uwagi'                    => [
                'label'     => 'Dodatkowe uwagi, które nie były wspomniane powyżej, a uważacie je za ważne',
                'pdf_label' => 'Dodatkowe uwagi',
                'type'      => 'textarea',
                'rules'     => 'nullable',
                'category'  => 'ogolne',
            ],
            'zgoda_rodo'                         => [
                'label'     => 'Wyrażamy zgodę na przetwarzanie naszych danych osobowych zgodnie z ustawą o ochronie danych osobowych. Podanie danych osobowych jest dobrowolne. Zostaliśmy poinformowani, że przysługuje nam prawo dostępu do naszych danych, możliwości ich poprawiania i żądania do zaprzestania ich przetwarzania. Dane nie będą wykorzystywane w żaden inny sposób poza wartością informacyjną na potrzeby fotografowania ślubu i wesela. Administratorem danych jest Maja Jurkiewicz Fotografia.',
                'pdf_label' => 'Zgoda RODO',
                'type'      => 'checkbox',
                'rules'     => 'required',
                'category'  => 'ogolne',
            ],
        ];

    public static $categories
        = [
            'ogolne'        => [
                'name' => 'Informacje ogólne',
            ],
            'przygotowania' => [
                'name' => 'Przygotowania',
            ],
            'ceremonia'     => [
                'name' => 'Ceremonia',
            ],
            'wesele'        => [
                'name' => 'Wesele',
            ],
        ];

    public static function getDataForPdf($weedingForm)
    {
        $weedingFormData = [];
        $inputsToSkip = ['id', 'created_at', 'updated_at'];

        if (count($weedingForm) > 0)
        {
            foreach ($weedingForm as $key => $value)
            {
                if ( ! in_array($key, $inputsToSkip))
                {
                    $fieldValue = null;

                    if (WeedingForm::$fields[$key]['type'] == 'input' || WeedingForm::$fields[$key]['type'] == 'textarea'
                        || WeedingForm::$fields[$key]['type'] == 'date'
                    )
                    {
                        $fieldValue = $value;
                    }
                    elseif (WeedingForm::$fields[$key]['type'] == 'select' || WeedingForm::$fields[$key]['type'] == 'radio')
                    {
                        if ($value && (int) $value > 0)
                        {
                            $fieldValue = WeedingForm::$fields[$key]['values'][$value];
                        }
                        else
                        {
                            $fieldValue = null;
                        }
                    }
                    elseif (WeedingForm::$fields[$key]['type'] == 'checkbox')
                    {
                        if ($value && (int) $value > 0)
                        {
                            $fieldValue = 'Tak';
                        }
                        else
                        {
                            $fieldValue = 'Nie';
                        }
                    }

                    if (isset(WeedingForm::$fields[$key]['pdf_label']))
                    {
                        $weedingFormData[$key] = [
                            'label' => WeedingForm::$fields[$key]['pdf_label'],
                            'value' => $fieldValue,
                        ];
                    }
                    else
                    {
                        $weedingFormData[$key] = [
                            'label' => WeedingForm::$fields[$key]['label'],
                            'value' => $fieldValue,
                        ];
                    }
                }
            }
        }

        return $weedingFormData;
    }
}
