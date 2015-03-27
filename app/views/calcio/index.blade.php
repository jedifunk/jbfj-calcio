@extends('layouts.default')
	
	
@section('content')
	
	<div class="row">
		<div class="col-sm-12">
			<h1>Calcio Search</h1>
			
			<div class="form-div">
				
				{{ Form::open() }}
				
					<div class="form-group">
						{{ Form::select('league', $league_name, 3, ['class' => 'form-control']) }}
					</div>
					
					<div class="form-group">
						{{ Form::submit('Choose League', ['class' => 'btn btn-primary']) }}
					</div>		
					
				{{ Form::close() }}
				
			</div>
		</div>
	</div>
	
	<div class="row">
	
		@yield('results')
		
	</div>
	
@stop