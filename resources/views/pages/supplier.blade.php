@extends('layouts.app')

@section('title')
	{{ env('APP_NAME') }} Suppliers
@endsection

@section('content')

<div style="padding: 10px; padding-top: 150px; overflow: auto;">
	<h1 style="font-family: 'Muli', serif; font-weight: normal;">Suppliers</h1>
    <supplier-vuetable
    my_detail_row=''
    ></supplier-vuetable>
</div>

@endsection