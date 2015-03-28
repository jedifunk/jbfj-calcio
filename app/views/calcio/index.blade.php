@extends('layouts.default')
	
	
@section('content')
	
	<div class="row">
		<div class="col-sm-12">
			<h1>Calcio Search</h1>
			
			<div class="row form-div">
				
				{{ Form::open() }}
				
					<div class="form-group col-sm-6">
						{{ Form::select('league', array_pluck($league_list, 'caption', 'id'), 354, ['class' => 'form-control']) }}
					</div>
					
					<div class="form-group col-sm-6">
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