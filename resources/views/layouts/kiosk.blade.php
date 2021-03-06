<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    </head>

    <title>@yield('title')</title>

    <body>
        
        <div class="container-fluid" id="app" style="text-align: center;">
            @yield('content')

        </div>

        <footer class="mastfoot mt-auto" style="position: fixed; bottom: 0; width: 100%; padding: 20px;">
            <div class="footer py-3 text-right">
                <a href="{{ route('inventory.home') }}">Exit</a>
            </div>
        </footer>

        <script src="{{ asset('js/app.js') }}"></script>

        @yield('scripts')
    </body>
</html>