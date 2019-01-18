<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include ('partials._meta')

        <title>
            {{ config('app.name') }}
        </title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link rel="icon" type="image/png" href="https://s3.amazonaws.com/yesayasoftware/public/logo.png">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/trix.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <!-- Scripts -->
        <script>
            window.App = {!! json_encode([
                'csrfToken' => csrf_token(),
                'user' => Auth::user(),
                'signedIn' => Auth::check()
            ]) !!};
        </script>

        @yield('head')
    </head>

    <body class="bg-grey-light font-sans">
        <div id="app">
            @include ('layouts.nav')

            <main class="container mx-auto flex flex-col lg:flex-row mt-3 text-sm leading-normal">
                @yield('content')
            </main>

            <flash message="{{ session('flash') }}"></flash>
        </div>
    </body>
</html>
