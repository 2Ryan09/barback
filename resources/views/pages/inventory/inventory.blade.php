@extends('layouts.app')

@section('title')
	{{ env('APP_NAME') }} Inventory
@endsection

@section('content')

@include('inc.inventory.sidebar')

<div style="padding: 10px; padding-top: 150px; overflow: auto;">
    <inv-vuetable
    	api-url="/api/v1.0/inventory"
    ></inv-vuetable>
</div>
@endsection