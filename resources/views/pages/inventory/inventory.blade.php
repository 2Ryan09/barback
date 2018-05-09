@extends('layouts.app')

@section('content')
<div class="sidenav" style="float: left;">
  <div class="col-lg-6" style="padding-top: 150px; position: fixed;">
    <h1 style="font-family: 'Bellefair', serif; font-weight: normal;">Inventory</h1>
  </div>
</div>

<div style="padding: 10px; padding-top: 150px; overflow: auto;">
    <inv-vuetable></inv-vuetable>
</div>
@endsection