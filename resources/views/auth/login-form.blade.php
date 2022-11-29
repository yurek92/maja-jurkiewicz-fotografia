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

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('public/js/app.js') }}" defer></script>

    @stack('scripts')
    @livewireStyles
</head>
<body class>
<div class="lg:flex lg:items-center">
    <div class="lg:w-1/2 xl:max-w-screen-sm">
        <div class="px-12 sm:px-24 md:px-48 lg:px-12 xl:px-24 xl:max-w-2xl">
            <div class="flex items-center justify-center">
                <div>
                    <img src="{{ asset('public/logo.png') }}" class="object-scale-down">
                </div>
            </div>
        </div>
        <div class="mt-5 lg:hidden lg:flex items-center justify-center flex-1 lg:h-screen bg-indigo-50">
            <img src="{{ asset('public/login-page.jpg') }}">
        </div>
        <div class="mt-10 px-12 sm:px-24 md:px-48 lg:px-12 lg:mt-16 xl:px-24 xl:max-w-2xl">
            @if ($errors->hasBag('invalidData'))
                <div class="rounded-lg bg-red-500 text-white text-center p-1">
                    {{ $errors->invalidData->first() }}
                </div>
            @endif
            <div class="mt-12">
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <div class="text-md font-bold text-gray-700 px-2 tracking-wide">Adres e-mail</div>
                        <input type="text" name="email" class="w-full text-lg p-2 border-b border-gray-300 focus:outline-none focus:border-green-800">
                        @if ($errors->has('email'))
                            <span class="text-red-500">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="mt-8">
                        <div class="flex justify-between items-center">
                            <div class="text-md font-bold text-gray-700 px-2 tracking-wide">
                                Hasło
                            </div>
                            {{--                            <div>--}}
                            {{--                                <a class="text-xs font-display font-semibold text-indigo-600 hover:text-indigo-800--}}
                            {{--                                        cursor-pointer">--}}
                            {{--                                    Zapomniałeś/aś hasła?--}}
                            {{--                                </a>--}}
                            {{--                            </div>--}}
                        </div>
                        <input type="password" name="password" class="w-full text-lg p-2 border-b border-gray-300 focus:outline-none focus:border-green-800">
                        @if ($errors->has('password'))
                            <span class="text-red-500">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="mt-10 flex justify-end">
                        <button type="submit" class="bg-green-800 text-gray-100 p-2 w-1/2 rounded-full tracking-wide
                                font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-green-600
                                shadow-lg">
                            Zaloguj
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="hidden lg:flex items-center justify-center flex-1 h-screen bg-green-50">
        <img src="{{ asset('public/login-page.jpg') }}">
    </div>
</div>
</body>
</html>
