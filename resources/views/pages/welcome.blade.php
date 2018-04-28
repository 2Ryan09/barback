@extends('layouts.dashboard')

@section('content')
<div class="container">
  <h1 style="font-family: 'Bellefair', serif; font-size: light; text-align: center">
    Welcome to {{ env('CLUB_NAME') }} {{ env('APP_NAME', 'Barback') }}.
  </h1>
    <p style="font-family: 'Cormorant Garamond', serif;">
      Barback is your place to look beyond the bar.
    </p>

    <a href="#" class="btn btn-lg btn-outline-secondary">Enter.</a>
  </p>
</div>
@endsection