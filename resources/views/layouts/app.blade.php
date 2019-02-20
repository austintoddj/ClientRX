<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Title -->
        <title>{{ config('app.name') }} ― @yield('title')</title>

        <!-- Application scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

        <!-- Animate style sheets -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">

        <!-- Application style sheets -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body data-ma-theme="blue">
        @auth()
            <div id="app">
                <main class="main">
                    @yield('content')
                </main>
            </div>
        @else
            <div class="login">
                @yield('content')
            </div>
        @endauth

        <!-- Additional scripts -->
        @stack('scripts')
    </body>
</html>
