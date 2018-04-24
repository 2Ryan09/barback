<nav class="navbar navbar-expand-lg navbar-light bg-light" id="main-nav">
  <div class="navbar-brand">
    <img src="/img/dhgc.png" height="200" width="200" style="width:100px;height:100px;">
  </div>

  <div class="navbar-brand">
    {{ env('CLUB_NAME') }} {{ env('APP_NAME', 'BarBack') }}
  </div>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/welcome">Inventory</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Reporting
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

      @auth @else
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
      @endauth
    </ul>
  </div>

  <div class="top-right text" id="welcome-user">
    @auth
    <a class="nav-text">Welcome, {{ Auth::user()->name }}.</a>
    @endauth
  </div>
</nav>