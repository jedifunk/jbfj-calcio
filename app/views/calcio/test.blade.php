@extends('layouts.default')
	
@section('content')
	
	<div class="row v-sp-sm">
		<div class="col-sm-12">
		
			@foreach ($videoList as $video)
			
			<iframe id="player" type="text/html" width="640" height="390" src="http://www.youtube.com/embed/{{ $video->id->videoId }}" frameborder="0"></iframe>
  
  			@endforeach
  			
		</div>
	</div>
	
@stop