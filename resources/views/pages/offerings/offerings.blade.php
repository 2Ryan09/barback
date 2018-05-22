@extends('layouts.app')

@section('content')

@include('inc.inventory.sidebar')

<div style="padding: 10px; padding-top: 150px; overflow: auto;">
	<h1 style="font-family: 'Muli', serif; font-weight: normal;"></i>Offerings</h1>
    <offerings-vuetable></offerings-vuetable>
</div>

@endsection