@extends('layouts.app')

@section('title')
	{{ env('APP_NAME') }} Inventory
@endsection

@section('content')
<div class="sidenav" style="float: left;">
  <div class="col-lg-6" style="padding-top: 150px; position: fixed;">
  	<h1 style="font-family: 'Bellefair', serif; font-weight: normal;">Inventory</h1>
    <ul class="list-unstyled components">
        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">BWS</a>
        <ul class="collapse list-unstyled" id="homeSubmenu">
            <li><a href="/inventory/bws/overview">Overview</a></li>
            <li><a href="#">Beer</a></li>
            <li><a href="#">Wine</a></li>
            <li><a href="#">Sprits</a></li>
            <li><a href="#">Non Alcoholics</a></li>
            <li><a href="#">Extraneous</a></li>
        </ul>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
  </div>
</div>

<div style="padding: 10px; padding-top: 150px; overflow: auto;">
    <inv-vuetable
    	api-url="/api/v1.0/inventory"
    ></inv-vuetable>
</div>
@endsection