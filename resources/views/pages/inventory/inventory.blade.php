@extends('layouts.app')

@section('content')
<div class="sidenav" style="float: left;">
  <div class="col-lg-6" style="padding-top: 150px; position: fixed;">
    Hello.
  </div>
</div>

<div style="padding: 10px; padding-top: 150px; overflow: auto;">
  <h1 style="font-family: 'Bellefair', serif; font-weight: normal;">Inventory</h1>
    <inv-vuetable></inv-vuetable>
</div>
@endsection