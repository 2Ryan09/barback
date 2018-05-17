@extends('layouts.app')

@section('title')
	{{ env('APP_NAME') }} BWS
@endsection

@section('content')

@include('inc.inventory.sidebar')

<div style="padding: 10px; padding-top: 150px; overflow: auto;">
    <inv-vuetable
    	api-url="/api/products"
    ></inv-vuetable>
</div>
@endsection