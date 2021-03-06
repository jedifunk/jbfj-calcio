@extends('calcio.output')
	
@section('fixtures')

	@foreach ($fixtures as $fixture)
	
		<div class="panel panel-default">
		
			<div class="panel-heading"><h3 class="panel-title">Matchday {{ $fixture['matchday'] }} - {{ $fixture['date'] }}</h3></div>
			
			<div class="panel-body">{{ $fixture['homeTeamName'] }} {{ $fixture['result']['goalsHomeTeam'] }} : {{ $fixture['result']['goalsAwayTeam'] }} {{ $fixture['awayTeamName'] }}
			
			</div>
		
		</div>	
	
	@endforeach

@stop