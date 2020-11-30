<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body style="background-color:#D5E7E4;">
<div id="app">
    <section class = "px-8 pt-2 mb-6 pl-12">
        <header class = "container mx-auto">
            <h1>
                <img src="/images/logo.png" alt="Tweety" width="190" height="100" >
            </h1>
        </header>
    </section>

   {{$slot}}
</div>
</body>
</html>
