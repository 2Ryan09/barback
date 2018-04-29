<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
    </head>
    
    <body>

    <header class="row">
      @include('inc.navbar')
    </header>

    <div class="container-fluid">
        <div id="main" class="row">
            @yield('content')
        </div>

        <div class="row" style="padding-top: 50px;"></div>
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>

      @include('inc.footer')

    </body>
</html>