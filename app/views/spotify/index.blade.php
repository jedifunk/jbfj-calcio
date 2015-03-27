@extends('layouts.default')
	
	
@section('content')
	
	<div class="row">
		<div class="col-sm-12">
			<h1>Search</h1>
			
			<div class="form-div">
				
				{{ Form::open() }}
					<div class="form-group">
					{{ Form::text('search', null, ['placeholder' => 'Let\'s Begin', 'class' => 'form-control']) }}
					</div>
					{{ Form::submit('Search Spotify', ['class' => 'btn btn-primary'])}}
					
				{{ Form::close() }}
				
			</div>
		</div>
	</div>
	
	<div class="row">
	
		@yield('results')
		
	</div>
	
@stop