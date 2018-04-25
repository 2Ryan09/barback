@extends('layouts.dashboard')

@section('content')
<div class="container" id="app">
  <div class="row">
    <div class="col-12">
      <h1 class="my-4">Dashboard</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      @component('../inc/card', ['imgpath'    => '/img/winebottles.jpg',
                                 'cardtitle'  => 'Inventory', 
                                 'cardtext'   => 'Keep track of the current stock.', 
                                 'buttonname' => 'Go!'])

      @endcomponent
    </div>

    <div class="col-sm-6">
      @component('../inc/card', ['imgpath'    => '/img/chartsandgraphs.jpg',
                                 'cardtitle'  => 'Reporting', 
                                 'cardtext'   => 'View trends and statistics about the inventory.', 
                                 'buttonname' => 'Go!'])

      @endcomponent
    </div>
  </div>
</div>
@endsection