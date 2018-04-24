<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>

    </head>
    <body>
    <div class="container">

        <header class="row">
            @include('inc.navbar')
        </header>

        <div id="main" class="row">

            @yield('content')

        </div>

        <footer class="row">
            @include('inc.footer')
        </footer>

    </div>
    </body>
</html>