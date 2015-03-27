@extends('spotify.index')
	
	
@section('results')
	
	<div class="col-sm-12">
		<ul>
		
		@foreach ($artists as $artist)

			<li>{{ $artist['name'] }}</li>
			
		@endforeach
		
		</ul>
	</div>
@stop