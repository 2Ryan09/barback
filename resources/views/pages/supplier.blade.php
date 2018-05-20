@extends('layouts.app')

@section('title')
	{{ env('APP_NAME') }} Inventory
@endsection

@section('content')

@include('inc.inventory.sidebar')

<div style="padding: 10px; padding-top: 150px; overflow: auto;">
	<h1 style="font-family: 'Bellefair', serif; font-weight: normal;">Suppliers</h1>
    <supplier-vuetable
    my-detail-row=""
    ></supplier-vuetable>
</div>

@endsection