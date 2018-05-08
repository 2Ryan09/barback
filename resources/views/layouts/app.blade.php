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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css" media="screen" title="no title" charset="utf-8">


    </head>

    <title>@yield('title')</title>

    <body>
        <div class="container-fluid" id="app">
            <header class="row">
              @include('inc.navbar')
            </header>

            @yield('content')

            <div class="row" style="padding-top: 50px;"></div>
            
            @include('inc.footer')

            <script src="{{ asset('js/app.js') }}"></script>

            @yield('scripts')

        </div>
    </body>
</html>