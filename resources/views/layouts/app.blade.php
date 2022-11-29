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

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('public/js/app.js') }}" defer></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    @stack('scripts')
    @livewireStyles
</head>
<body>
<div class="sticky top-0 z-30">
    @livewire('components.toast')

    <div class="bg-green-800 py-2 px-1 mt-0 h-auto w-full">
        <div class="flex flex-wrap items-center justify-between">
            <div class="flex items-center justify-between md:w-1/3 text-white font-medium px-2">

            </div>
            <div class="flex w-full content-center justify-between md:w-1/3 md:justify-end text-white font-medium">
                <ul class="list-reset flex-1 md:flex-none items-center">
                    <li class="flex justify-end items-center md:flex-none md:mr-3">
                        @if(Auth::check())
                            <div class="dropdown inline-block relative">
                                <div class="flex items-center py-2 px-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 pr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                    <div>{{ Auth::user()->name }} {{ Auth::user()->surname }}</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 pl-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                                    </svg>
                                </div>
                                <ul class="dropdown-menu absolute hidden w-full z-30">
                                    <li>
                                        <a class="w-full flex justify-center items-center py-2 border border-transparent text-xs font-medium no-underline text-gray-900 bg-green-50 hover:bg-green-200"
                                           href="{{ route('change-password-form') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 pr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            </svg>
                                            Zmień hasło
                                        </a>
                                    </li>
                                    <li>
                                        <a class="w-full flex justify-center items-center py-2 border border-transparent text-xs font-medium no-underline text-gray-900 bg-green-50 hover:bg-green-200"
                                           href="{{ route('logout') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 pr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                            </svg>
                                            Wyloguj
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @yield('breadcrumb')
</div>
@yield('content')

@livewireScripts
@stack('livewireStack')
</body>
</html>
