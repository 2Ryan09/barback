@extends('layouts.inventory')

@section('content')
<nav id="sidenav" style="padding-top: 150px;">
  <form action="{{ action('LCBOController@getQueried') }}" method="post">
    Keywords: <input type="text" name="query"><br>
    <input type="submit">
  </form>
</nav>
@endsection