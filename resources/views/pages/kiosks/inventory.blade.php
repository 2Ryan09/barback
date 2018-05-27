@extends('layouts.kiosk')

@section('title')
	Location Inventory
@endsection

@section('content')
	<h1 style="font-size: 56pt;">Current Inventory at Location</h1>

	<a class="btn btn-lg btn-primary" href="'/kiosk/reqSheet' + location_id" style="position: fixed; top: 20px; right: 20px;">New Req Sheet</a>

	<kiosk-vuetable></kiosk-vuetable>
@endsection