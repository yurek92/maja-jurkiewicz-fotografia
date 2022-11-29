@component('mail::layout')
    @slot('header')
        @component('mail::header', ['url' => ''])

        @endcomponent
    @endslot

    <div>
        Nowy formularz ślubny został wysłany.<br>
        Znajdziesz go w załączniku lub <a href="https://www.formularz.bajamorukphoto.pl/logowanie">po zalogowaniu</a>.
    </div>

    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} Maja Jurkiewicz Fotografia - Baja Moruk Photo. @lang('Wszystkie prawa zastrzeżone.')
        @endcomponent
    @endslot
@endcomponent
