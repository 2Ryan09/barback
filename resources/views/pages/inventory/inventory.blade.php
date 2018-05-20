@extends('layouts.app')

@section('title')
	{{ env('APP_NAME') }} Inventory
@endsection

@section('content')

@include('inc.inventory.sidebar')

<div style="padding: 10px; padding-top: 150px; overflow: auto;">
	<h1 style="font-family: 'Muli', serif; font-weight: normal;">Bottles</h1>
    <inv-vuetable></inv-vuetable>
</div>

@endsection