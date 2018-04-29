@extends('layouts.inventory')

@section('content')
<nav id="sidenav" style="padding-top: 150px;">
  <form action="{{ route('queryReturn') }}" method="post">

  	 {{ csrf_field() }}

    Keywords: <input type="text" name="query"><br>
    <input type="submit">
  </form>
</nav>
@endsection