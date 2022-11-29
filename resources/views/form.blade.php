<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="cache-control" content="no-cache"/>
    <meta name="expires" content="0"/>
    <meta name="pragma" content="no-cache"/>

    <title>Maja Jurkiewicz Fotografia - Formularz Ślubny</title>

    <link rel="shortcut icon" href="public/favicon.png">
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <link href='https://fonts.googleapis.com/css?family=Glass Antiqua:400,500,600,700,300' rel='stylesheet' type='text/css'>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('public/js/app.js') }}" defer></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    @stack('scripts')
    @livewireStyles
</head>
<body style="font-family: 'Glass Antiqua';">
@livewire('components.toast')

<div class="min-h-screen bg-gray-100 p-4 sm:p-12">
    <div class="sm:grid sm:grid-cols-3 sm:gap-4 items-center bg-white shadow rounded p-4">
        <div class="flex justify-center">
            <img class=" h-24 sm:h-32" src="public/logo.png">
        </div>
        <div class="text-2xl sm:text-4xl text-green-700 text-center font-medium mt-3 sm:mt-0">Formularz ślubny</div>
    </div>
    @livewire('weeding-forms.weeding-form')
</div>

@livewireScripts
@stack('livewireStack')
</body>
</html>

