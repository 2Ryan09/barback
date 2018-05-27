@extends('layouts.app')

@section('title')
	{{ env('APP_NAME') }} BWS
@endsection

@section('content')

@include('inc.inventory.sidebar')

<div style="padding: 10px; padding-top: 150px; padding-bottom: 50px; overflow: auto;">
	<h1 style="font-family: 'Muli', serif; font-weight: normal;">Products</h1>
    <bws-vuetable></bws-vuetable>
</div>
@endsection