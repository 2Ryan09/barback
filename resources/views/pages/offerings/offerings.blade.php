@extends('layouts.app')

@section('content')

@include('inc.inventory.sidebar')

<div style="padding: 10px; padding-top: 150px; overflow: auto;">
    <inv-vuetable
    	api-url={{ route('offerings.index') }}
    ></inv-vuetable>
</div>

@endsection