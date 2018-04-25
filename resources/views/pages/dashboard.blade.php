@extends('layouts.dashboard')

@section('content')
<div class="container" id="app">
  <div class="row">
    <div class="col-12">
      <h1 class="my-4"> Dashboard </h1>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/img/winebottles.jpg" alt="">
        
        <div class="card-body">
          <h5 class="card-title">Inventory (Coming Soon!)</h5>

          <p class="card-text">View the active inventory of {{ env('CLUB_NAME', 'Druid Hills Golf Club') }}.</p>

          <a href="#" class="btn btn-primary">Go!</a>
        </div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/img/chartsandgraphs.jpg" alt="">

        <div class="card-body">
          <h5 class="card-title">Reporting (Coming Soon!)</h5>

          <p class="card-text">View trends and statistics about the inventory.</p>

          <a href="#" class="btn btn-primary">Go!</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection