@extends('layouts.app')

@section('title')
	{{ env('APP_NAME') }} BWS
@endsection

@section('content')
<div class="sidenav" style="float: left;">
  <div class="col-lg-6" style="padding-top: 150px; position: fixed;">
  	<h1 style="font-family: 'Bellefair', serif; font-weight: normal;">BWS</h1>
  	<ul class="list-unstyled components">
		<li><a href="/inventory/bws/create">New Bottle</a></li>
    </ul>
  </div>
</div>

<div style="padding: 10px; padding-top: 150px; overflow: auto;">
    <inv-vuetable
    	api-url="/api/bottles"
    ></inv-vuetable>
</div>
@endsection