@extends('layouts.app')

@section('title')
	{{ env('APP_NAME') }} Admin
@endsection

@section('content')
<div class="container" style="padding-top: 150px">
	<div class="row"> 
      @component('inc.card', ['imgpath'    => '/img/locations.png',
                                 'cardtitle'  => 'Location Settings', 
                                 'cardtext'   => 'Configure locations.', 
                                 'buttonname' => 'Go!',
                                 'cardlink'   => '/admin/locations'])

      @endcomponent
    </div>
</div>
@endsection