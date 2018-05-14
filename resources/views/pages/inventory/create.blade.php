@extends('layouts.app')

@section('title')
	New Bottle
@endsection

@section('content')

@include('inc.inventory.sidebar')

<div class="container" style="padding-top: 150px;">
	<h1 style="font-family: 'Bellefair', serif; font-weight: normal;">Create New Bottle</h1>
	<new-bws-form></new-bws-form>
</div>
@endsection