<!doctype html>
<html>
    <head>
        @include('inc.head')
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