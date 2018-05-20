@extends('layouts.app')

@section('title')
	New Offering
@endsection

@section('content')

@include('inc.inventory.sidebar')

<div class="container" style="padding-top: 150px;">
	<h1 style="font-family: 'Bellefair', serif; font-weight: normal;">Create New Offering</h1>
	<new-offer-form></new-offer-form>
</div>
@endsection