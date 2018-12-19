<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">

        <meta name="viewport"
              content="width=device-width, initial-scale=1">

        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="{{ config('app.name') }}">
        <meta itemprop="description" content="A community learning platform inspired by professional life and experience by Yesaya.">
        <meta itemprop="image" content="https://s3.us-east-1.amazonaws.com/yesayasoftware/public/post-thumbnails/s0Jzejo31zw33nFMfwhGSKItZ3zUBD3waFP0BNMS.jpeg">

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="https://s3.us-east-1.amazonaws.com/yesayasoftware/public/post-thumbnails/s0Jzejo31zw33nFMfwhGSKItZ3zUBD3waFP0BNMS.jpeg">
        <meta name="twitter:site" content="@yesayasoftware">
        <meta name="twitter:title" content="Yesaya Software">
        <meta name="twitter:description" content="A community learning platform inspired by professional life and experience by Yesaya.">
        <meta name="twitter:creator" content="@yesayasoftware">

        <!-- Twitter summary card with large image must be at least 280x150px -->
        <meta name="twitter:image:src" content="https://s3.us-east-1.amazonaws.com/yesayasoftware/public/post-thumbnails/s0Jzejo31zw33nFMfwhGSKItZ3zUBD3waFP0BNMS.jpeg">

        <!-- Open Graph data -->
        <meta property="og:title" content="{{ config('app.name') }}" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="https://www.yesaya.software/" />
        <meta property="og:image" content="https://s3.us-east-1.amazonaws.com/yesayasoftware/public/post-thumbnails/s0Jzejo31zw33nFMfwhGSKItZ3zUBD3waFP0BNMS.jpeg" />
        <meta property="og:description" content="A community learning platform inspired by professional life and experience by Yesaya." />
        <meta property="og:site_name" content="{{ config('app.name') }}" />

        <!-- CSRF Token -->
        <meta name="csrf-token"
              content="{{ csrf_token() }}">

        <title>
            {{ config('app.name') }}
        </title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

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
