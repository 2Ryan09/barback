@extends('layouts.mail')

@section('content')
<div class="container-fluid">
	<div>
		Hi!
	</div>
	<br style="clear:both;"/>
	<div>
      <b>Name:</b>>{{ $data["name"] }}<br>
      <b>Varietal:</b>>{{ $data.varietal }}<br>
      <b>Description:</b>>{{ $data.description }}<br> 
      <b>Pairing:</b>>{{ $data.pairing }}<br>
      <b>Release Date:</b>>{{ $data.release_date }}<br>
      <b>Producer:</b>>{{ $data.producer_name }}<br>
      <b>Origin:</b>>{{ $data.origin }}<br>
      <b>Unit Type:</b>>{{ $data.unit_type }}<br>
      <b>Unit Volume:</b>>{{ $data.unit_volume }}<br>
      <b>Alcohol Content:</b>>{{ $data.alcohol_content }}<br>
      <b>Sugar Content:</b>>{{ $data.sugar_content }}<br>
      <b>Style:</b>>{{ $data.style }}<br>
      <b>UPC:</b>{{ $data.upc }}<br>
	</div>
</div>
@endsection('content')