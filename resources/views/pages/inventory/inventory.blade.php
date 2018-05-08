@extends('layouts.app')

@section('content')
<div class="sidenav" style="float: left;">
  <div class="col-lg-6" style="padding-top: 150px; position: fixed;">
    Hello.
  </div>
</div>

<div style="padding: 10px; padding-top: 150px; overflow: auto;">
  <h1 style="font-family: 'Bellefair', serif; font-weight: normal;">Inventory</h1>
    <filter-bar></filter-bar>
    <vuetable ref="vuetable"
    api-url="https://vuetable.ratiw.net/api/users"
    :fields="['name', 'email', 'birthdate', 'address.line1', 'address.line2', 'address.zipcode']"
    ></vuetable>
</div>
@endsection

@section('scripts')
// vuetable-2 dependencies
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.6/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.1/axios.min.js"></script>
// vuetable-2
<script src="https://unpkg.com/vuetable-2@1.6.0"></script>
@endsection