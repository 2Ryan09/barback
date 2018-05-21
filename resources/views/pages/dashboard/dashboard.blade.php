@extends('layouts.app')

@section('title')
  {{ env('APP_NAME', 'Barback') }}
@endsection

@section('content')
<div class="container" id="app" style="padding-top: 150px;">
  <div class="row">
    <div class="col-12">
      <h1 class="my-4">Dashboard</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      @component('inc.card', ['imgpath'    => '/img/winebottles.jpg',
                                 'cardtitle'  => 'Inventory', 
                                 'cardtext'   => "Keep track of what's here.", 
                                 'buttonname' => 'Go!',
                                 'cardlink'   => '/inventory'])

      @endcomponent
    </div>

    <div class="col-sm-6">
      @component('inc.card', ['imgpath'    => '/img/chartsandgraphs.jpg',
                                 'cardtitle'  => 'Reporting', 
                                 'cardtext'   => 'Keep track of what was.', 
                                 'buttonname' => 'Go!',
                                 'cardlink'   => '#'])

      @endcomponent
    </div>
  </div>
</div>
@endsection