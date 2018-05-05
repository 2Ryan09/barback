<!doctype html>
<html lang="en">
  <head>
  	@include('inc.head')

    <title>{{ env('APP_NAME', 'Barback') }}</title>
    
  </head>

  <body class="text-center" style="background: url('/img/hangingglasses.jpg'); background-size: cover; height: 100%;>

    <div class="cover-container d-flex h-100 mx-auto flex-column">
      <header class="masthead mb-auto">
      	@include('inc.navbar')
      </header>

      <main role="main" class="inner cover" style="padding-top: 150px;">
        <h1 class="cover-heading">
          Welcome to {{ env('CLUB_NAME') }} {{ env('APP_NAME', 'Barback') }}.
        </h1>

        <p class="lead" style="font-family: 'Bellefair', serif; color: white; text-shadow: 2px 2px black;">
          Peek beyond the bar.
        </p>

        <p class="lead">
          <a href="#" class="btn btn-lg btn-secondary" style="font-family: 'Bellefair', serif; color: #006600; background-color: white;">
            Enter.
          </a>
        </p>

      </main>

      <footer class="mastfoot mt-auto" style="background-color: #F0F0F0; opacity: 0.9; position: fixed; bottom: 0; width: 100%; text-align: center;">
		    @include('inc.footer')
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
