<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'             => ':attribute musi zostać zaakceptowany.',
    'active_url'           => ':attribute jest nieprawidłowym adresem URL.',
    'after'                => ':attribute musi być datą późniejszą od :date.',
    'after_or_equal'       => ':attribute musi być datą nie wcześniejszą niż :date.',
    'alpha'                => ':attribute może zawierać jedynie litery.',
    'alpha_dash'           => ':attribute może zawierać jedynie litery, cyfry i myślniki.',
    'alpha_num'            => ':attribute może zawierać jedynie litery i cyfry.',
    'array'                => ':attribute musi być tablicą.',
    'before'               => ':attribute musi być datą wcześniejszą od :date.',
    'before_or_equal'      => ':attribute musi być datą nie późniejszą niż :date.',
    'between'              => [
        'numeric' => ':attribute musi zawierać się w granicach :min - :max.',
        'file'    => ':attribute musi zawierać się w granicach :min - :max kilobajtów.',
        'string'  => ':attribute musi zawierać się w granicach :min - :max znaków.',
        'array'   => ':attribute musi składać się z :min - :max elementów.',
    ],
    //    'boolean'              => ':attribute musi mieć wartość prawda albo fałsz',
    'boolean'              => 'Pole :attribute jest wymagane.',
    'confirmed'            => 'Potwierdzenie :attribute nie zgadza się.',
    'date'                 => ':attribute nie jest prawidłową datą.',
    'date_equals'          => ':attribute musi być datą równą :date.',
    'date_format'          => ':attribute nie jest w formacie :format.',
    'different'            => ':attribute oraz :other muszą się różnić.',
    'digits'               => ':attribute musi składać się z :digits cyfr.',
    'digits_between'       => ':attribute musi mieć od :min do :max cyfr.',
    'dimensions'           => ':attribute ma niepoprawne wymiary.',
    'distinct'             => ':attribute ma zduplikowane wartości.',
    'email'                => 'Format :attribute jest nieprawidłowy.',
    'exists'               => ':attribute jest nieprawidłowy.',
    'file'                 => ':attribute musi być plikiem.',
    'filled'               => 'Pole :attribute jest wymagane.',
    'gt'                   => [
        //        'numeric' => ':attribute musi być większy niż :value.',
        'numeric' => 'Pole :attribute jest wymagane.',
        'file'    => ':attribute musi być większy niż :value kilobajtów.',
        'string'  => ':attribute musi być dłuższy niż :value znaków.',
        'array'   => ':attribute musi mieć więcej niż :value elementów.',
    ],
    'gte'                  => [
        'numeric' => ':attribute musi być większy lub równy :value.',
        'file'    => ':attribute musi być większy lub równy :value kijobajtów.',
        'string'  => ':attribute musi być dłuższy lub równy :value znaków.',
        'array'   => ':attribute musi mieć :value lub więcej elementów.',
    ],
    'image'                => ':attribute musi być obrazkiem.',
    'in'                   => 'Zaznaczony :attribute jest nieprawidłowy.',
    'in_array'             => ':attribute nie znajduje się w :other.',
    'integer'              => ':attribute musi być liczbą całkowitą.',
    'ip'                   => ':attribute musi być prawidłowym adresem IP.',
    'ipv4'                 => ':attribute musi być prawidłowym adresem IPv4.',
    'ipv6'                 => ':attribute musi być prawidłowym adresem IPv6.',
    'json'                 => ':attribute musi być poprawnym ciągiem znaków JSON.',
    'lt'                   => [
        'numeric' => ':attribute musi być mniejszy niż :value.',
        'file'    => ':attribute musi być mniejszy niż :value kijobajtów.',
        'string'  => ':attribute musi być krótszy niż :value znaków.',
        'array'   => ':attribute musi mieć mniej niż :value elementów.',
    ],
    'lte'                  => [
        'numeric' => ':attribute musi być mniejszy lub równy :value.',
        'file'    => ':attribute musi być mniejszy lub równy :value kijobajtów.',
        'string'  => ':attribute musi być krótszy lub równy :value znaków.',
        'array'   => ':attribute musi mieć :value lub mniej elementów.',
    ],
    'max'                  => [
        'numeric' => ':attribute nie może być większy niż :max.',
        'file'    => ':attribute nie może być większy niż :max kilobajtów.',
        'string'  => ':attribute nie może być dłuższy niż :max znaków.',
        'array'   => ':attribute nie może mieć więcej niż :max elementów.',
    ],
    'mimes'                => ':attribute musi być plikiem typu :values.',
    'mimetypes'            => ':attribute musi być plikiem typu :values.',
    'min'                  => [
        'numeric' => ':attribute musi być nie mniejszy od :min.',
        'file'    => ':attribute musi mieć przynajmniej :min kilobajtów.',
        'string'  => ':attribute musi mieć przynajmniej :min znaków.',
        'array'   => ':attribute musi mieć przynajmniej :min elementów.',
    ],
    'not_in'               => 'Zaznaczony :attribute jest nieprawidłowy.',
    'not_regex'            => 'Format :attribute jest nieprawidłowy.',
    'numeric'              => ':attribute musi być liczbą.',
    'present'              => 'Pole :attribute musi być obecne.',
    'regex'                => 'Format :attribute jest nieprawidłowy.',
    'required'             => 'Pole :attribute jest wymagane.',
    'required_if'          => 'Pole :attribute jest wymagane gdy :other jest :value.',
    'required_unless'      => ':attribute jest wymagany jeżeli :other nie znajduje się w :values.',
    'required_with'        => 'Pole :attribute jest wymagane gdy :values jest obecny.',
    'required_with_all'    => 'Pole :attribute jest wymagane gdy :values jest obecny.',
    'required_without'     => 'Pole :attribute jest wymagane gdy :values nie jest obecny.',
    'required_without_all' => 'Pole :attribute jest wymagane gdy żadne z :values nie są obecne.',
    'same'                 => 'Pole :attribute i :other muszą się zgadzać.',
    'size'                 => [
        'numeric' => ':attribute musi mieć :size.',
        'file'    => ':attribute musi mieć :size kilobajtów.',
        'string'  => ':attribute musi mieć :size znaków.',
        'array'   => ':attribute musi zawierać :size elementów.',
    ],
    'starts_with'          => ':attribute musi się zaczynać jednym z wymienionych: :values',
    'string'               => ':attribute musi być ciągiem znaków.',
    'timezone'             => ':attribute musi być prawidłową strefą czasową.',
    'unique'               => ':attribute już istnieje.',
    'uploaded'             => 'Nie udało się wgrać pliku :attribute.',
    'url'                  => 'Format :attribute jest nieprawidłowy.',
    'uuid'                 => ':attribute musi być poprawnym identyfikatorem UUID.',
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [

    ],
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'email'                                   => 'e-mail',
        'password'                                => 'hasło',
        'current_password'                        => 'obecne hasło',
        'new_password'                            => 'nowe hasło',
        'new_confirm_password'                    => 'powtórz nowe hasło',
        'form.para_mloda'                         => 'para młoda',
        'form.termin_slubu'                       => 'data ślubu',
        'form.rodzaj_reportazu'                   => 'rodzaj reportażu',
        'form.przygotowania'                      => 'przygotowania',
        'form.ceremonia'                          => 'ceremonia',
        'form.wesele'                             => 'wesele',
        'form.oczepiny'                           => 'oczepiny',
        'form.imiona_swiadkow'                    => 'imiona świadków',
        'form.telefon_panny_mlodej'               => 'telefon panny młodej',
        'form.telefon_pana_mlodego'               => 'telefon pana młodego',
        'form.imiona_rodzicow_panny_mlodej'       => 'imiona rodziców panny młodej',
        'form.imiona_rodzenstwa_panny_mlodej'     => 'imiona rodzeństwa panny młodej',
        'form.imiona_rodzicow_pana_mlodego'       => 'imiona rodziców pana młodego',
        'form.imiona_rodzenstwa_pana_mlodego'     => 'imiona rodzeństwa pana młodego',
        'form.alternatywny_telefon_panny_mlodej'  => 'alternatywny telefon panny młodej',
        'form.alternatywny_telefon_pana_mlodego'  => 'alternatywny telefon pana młodego',
        'form.miejsce_ceremonii'                  => 'miejsce ceremonii',
        'form.godzina_rozpoczecia_ceremonii'      => 'godzina rozpoczęcia ceremonii',
        'form.miejsce_wesela'                     => 'miejsce wesela',
        'form.przygotowania_info'                 => 'informacje o przygotowaniach',
        'form.miejsce_przygotowan_panny_mlodej'   => 'miejsce przygotowań panny młodej',
        'form.miejsce_przygotowan_pana_mlodego'   => 'miejsce przygotowań pana młodego',
        'form.wejscie_na_ceremonie'               => 'wejście na ceremonię',
        'form.wejscie_na_ceremonie_inaczej'       => 'wejście na ceremonię - inaczej',
        'form.miejsce_podpisow_slub_konkordatowy' => 'miejsce podpisów',
        'form.miejsce_zyczen'                     => 'miejsce życzeń',
        'form.miejsce_zyczen_inne'                => 'inne miejsce życzeń',
        'form.liczba_gosci'                       => 'przewidywana liczba gości',
        'form.nazwa_zespolu'                      => 'nazwa zespołu/dj-a',
        'form.nazwa_kamerzysty'                   => 'nazwa kamerzysty',
        'form.zdjecie_grupowe'                    => 'miejsce zdjęcia grupowego',
        'form.zdjecie_grupowe_inne_miejsce'       => 'inne miejsce zdjęcia grupowego',
        'form.pierwszy_taniec'                    => 'pierwszy taniec',
        'form.zdjecia_pozowane'                   => 'zdjęcia pozowane',
        'form.zdjecia_pozowane_godzina'           => 'godzina zdjęć pozowanych',
        'form.plan_wesela'                        => 'plan wesela',
        'form.niespodzianki'                      => 'niespodzianki',
        'form.szczegolna_uwaga'                   => 'szczególna uwaga',
        'form.sytuacja_rodzinna'                  => 'sytuacja rodzinna',
        'form.haslo_do_galerii'                   => 'hasło do galerii',
        'form.dodatkowe_uwagi'                    => 'dodatkowe uwagi',
        'form.zgoda_rodo'                         => 'zgoda rodo',
    ],
];
