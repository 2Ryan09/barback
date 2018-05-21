@extends('layouts.app')

@section('title')
	New Product
@endsection

@section('content')

@include('inc.inventory.sidebar')

<div class="container" style="padding-top: 150px;">
	<h1 style="font-family: 'Muli', serif; font-weight: normal;">Create New Product</h1>
	<new-bws-form></new-bws-form>
</div>
@endsection