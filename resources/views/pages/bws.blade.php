@extends('layouts.inventory')

@section('content')

<nav id="sidenav" style="padding-top: 150px;">
  <form action="{{ route('queryReturn') }}" method="post">

  	 {{ csrf_field() }}

    Keywords: <input type="text" name="query"><br>
    <input type="submit">
  </form>
</nav>

{{ route('queryReturn') }}

<div class="container" style="padding-top: 150px;">
  <div class="card-group">
  	@if (!empty($items))
	  	@for ($i = 0; $i < count($items); $i++)
			<div class="col-sm-2">
				<div class="card" style="width: 150px;">
				  <img class="card-img-top" src="{{ $items[$i]->image_url }}" alt="">

				  <div class="card-body">
				    <p>{{ $items[$i]->name }}</p>

				    <form action="{{ route('addItem', ['item' => $item[$i] ]) }}" method="post">
				    	<input type="submit">
				    </form>

				  </div>
				</div>
		    </div>
		@endfor
	@endif
  </div>
</div>
@endsection