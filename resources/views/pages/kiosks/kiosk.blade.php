@extends('layouts.kiosk')

@section('title')
	Kiosk Home
@endsection

@section('content')
	<h1 style="padding-top: 30px;">Choose a location:</h1>

	{{ $locations = axios.get('/api/locations') }}
	<div class="btn-group" style="height: 500px;">
		@foreach($location as $locations)
			<button type="button" class="btn btn-outline-secondary" style="width: 500px; font-size: 56pt;">
				{{ $location.name }}
			</button>
		@endforeach
	</div>
@endsection