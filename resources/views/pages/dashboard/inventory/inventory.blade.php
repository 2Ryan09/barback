@extends('layouts.app')

@section('content')
<div class="sidenav">
  <div class="col-lg-6" style="padding-top: 150px; position: fixed;">
    <form class="form-inline" method="GET" action="{{ action('InventoryController@search') }}" accept-charset="UTF-8">
      <div class="form-group">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </form>
  </div>
</div>

<div class="col-sm-6">
  <div class="main">
    <h1 style="font-family: 'Bellefair', serif;">Inventory</h1>

  </div>    
</div>
@endsection