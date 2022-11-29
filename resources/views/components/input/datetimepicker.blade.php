@props(['options' => "{dateFormat:'Y-m-d', enableTime: false, time_24hr: true, defaultHour: 10,
locale: {
firstDayOfWeek: 1,
weekdays: {
shorthand: ['Nd','Pn','Wt','Śr','Czw','Pt','Sb'],
longhand: ['Niedziela','Poniedziałek','Wtorek','Środa','Czwartek','Piątek','Sobota'],
},
months: {
shorthand: ['Sty', 'Lut', 'Mar', 'Kwi', 'Маj', 'Cze', 'Lip', 'Sie', 'Wrz', 'Paź', 'Lis', 'Gru'],
longhand: ['Styczeń','Luty','Marzec','Kwiecień','Maj','Czerwiec','Lipiec','Sierpień','Wrzesień','Październik','Listopad','Grudzień'],
},
}}"])

<div wire:ignore class="rounded-md">
    <input
        x-data
        x-init="flatpickr($refs.input, {{ $options }} );"
        x-ref="input"
        type="text"
        data-input
        {{ $attributes->merge(['class' => 'w-full block no-shadow appearance-none border border-green-600 bg-white rounded py-2 px-3 text-gray-700 leading-tight']) }}
    />
</div>
