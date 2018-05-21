@extends('layouts.app')

@section('content')

@include('inc.inventory.sidebar')

<div style="padding: 10px; padding-top: 150px; overflow: auto;">
    <offerings-vuetable></offerings-vuetable>
</div>

@endsection