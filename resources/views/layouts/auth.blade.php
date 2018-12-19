<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">

        <meta name="viewport"
              content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token"
              content="{{ csrf_token() }}">

        <title>
            {{ config('app.name', 'Yesaya Software') }}
        </title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield('head')
    </head>

    <body class="bg-grey-light text-base text-grey-darkest font-normal relative">
        <div class="h-2 bg-primary"></div>

        <div class="container mx-auto p-8">
            <div class="mx-auto max-w-sm">
                <div class="py-10 text-center">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('svg/logo-rounded.svg') }}" class="h-12 w-12" alt="Yesaya Software">
                    </a>
                </div>

                @yield('content')

                <div class="text-center mt-4">
                    <p>&copy; Yesaya Software 2018</p>
                </div>
            </div>
        </div>
    </body>
</html>
