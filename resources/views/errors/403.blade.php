@extends('layouts.app')

@section('content')

<h2 style="padding-top: 150px;">{{ $exception->getMessage() }}</h2>

@endsection