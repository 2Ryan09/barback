<nav class="navbar navbar-expand-lg navbar-light" id="main-nav" style="background-color:  #F0F0F0; opacity: 0.9;">
  <div class="container-fluid">
    <div class="navbar-brand">
      <img src="/img/dhgc.png" href="/" style="width:100px;height:100px;">
    </div>

    <div class="navbar-text" style="color: #000000">
      {{ env('CLUB_NAME') }} {{ env('APP_NAME') }}
    </div>

    <div class="collapse navbar-collapse" id="navbarNavDropdown" style="font-family: 'Muli', serif;">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>

        @can('view inventory')
          <li class="nav-item">
            <a class="nav-link" href="/inventory">Inventory</a>
          </li>
        @endcan

        @can('view admin')
          <li class="nav-item">
            <a class="nav-link" href="/admin">Admin</a>
          </li>
        @endcan

        @auth
          <li class="nav-item">
            <a class="nav-link" href="{{ route('kiosk.home') }}">Kiosk</a>
          </li>
        @endauth
      </ul>

      <ul class="nav navbar-nav navbar-right" style="text-align: center;">
        @auth

        <li>
          <a class="navbar-text" style="font-size: 12pt;"> Welcome, {{ Auth::user()->name }}! </a>
        </li>

        <li>
          <a class="navbar-link" href="{{ route('logout') }}"> Logout</a>
        </li>

        @else

        <li>
          <a class="navbar-link" href="{{ route('login') }}">Login</a>
        </li>

        @endauth
      </ul>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>