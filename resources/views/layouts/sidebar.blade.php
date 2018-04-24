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

        <!-- sidebar content -->
        <div id="sidebar" class="col-md-4">
            @include('inc.sidebar')
        </div>

        <!-- main content -->
        <div id="content" class="col-md-8">
            @yield('content')
        </div>

    </div>

    <footer class="row">
        @include('inc.footer')
    </footer>

</div>
</body>
</html>