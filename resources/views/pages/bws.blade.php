@extends('layouts.inventory')

@section('content')

<div class="sidenav">
  <div class="container" style="padding-top: 150px; position: fixed;">
    <form action="{{ action('LCBOController@getQueried') }}" method="post">

  	  {{ csrf_field() }}

      Keywords: <input type="text" name="query" style="width: 40%"><br>
      <input type="submit">
    </form>
  </div>
</div>



<div class="container-fluid" style="padding-top: 150px; float: right; width: 80%;">
  <div class="card-group">
  	@if (!empty($items))
	  	@for ($i = 0; $i < count($items); $i++)
			<div class="col-sm-2">
				<div class="card" style="width: 175px; height: 400px">
				  <img class="card-img-top" src="{{ $items[$i]->image_url }}" alt="">

				  <div class="card-body">
				    <p>{{ substr($items[$i]->name, 0, 40) }}</p>
				  </div>

					<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalCenter">
					  Add!
					</button>

					<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">{{ $items[$i]->name }}</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        <div class="col-sm-6" style="float: left;">
					            <img src="{{ $items[$i]->image_url }}" width="300" align="left">
					        </div>
					        <div class="col-sm-6 ml-auto" style="float: right;">
					        	{!! Form::model(['action' => 'WineController@store']) !!}

								    <div class="form-group">
								      {!! Form::label('name', 'Name') !!}
								      {!! Form::text('name', $items[$i]->name, ['class' => 'form-control']) !!}
								    </div>

								    <div class="form-group">
								      {!! Form::label('origin', 'Origin') !!}
								      {!! Form::text('origin', $items[$i]->origin, ['class' => 'form-control']) !!}
								    </div>
					        </div>
					    </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
					        <button class="btn btn-secondary btn-success" type="submit">Add!</button>
					      </div>

						  {!! Form::close() !!}

					    </div>
					  </div>
					</div>
				</div>
		    </div>
		@endfor
	@endif
  </div>
</div>
@endsection