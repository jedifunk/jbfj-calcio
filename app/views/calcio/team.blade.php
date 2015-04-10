@extends('layouts.default')
	
@section('content')
	
	<header class="row v-sp-sm">
		<div class="col-sm-2">
			{{ HTML::image($team['crestUrl'], $team['name'], ['class' => 'img-responsive']) }}
		</div>
		<div class="col-sm-10">
			<h1>{{ $team['name'] }}</h1>
			<strong>Current Market Value: {{ $team['squadMarketValue'] }}</strong>
		</div>
	</header>
	
	<div class="row">
		<div class="col-sm-8">			
			<table class="table table-striped">
				<tr>
					<th>Name</th>
					<th>Position</th>
					<th>Number</th>
					<th>Nationality</th>
					<th>Birth Date</th>
					<th>Contract Expires</th>
					<th>Market Value</th>
				</tr>
				
				@foreach ($players as $player)
				
					<tr>
						<td>{{ $player['name'] }}</td>
						<td>{{ $player['position'] }}</td>
						<td>{{ $player['jerseyNumber'] }}</td>
						<td>{{ $player['nationality'] }}</td>
						<td>{{ $player['dateOfBirth'] }}</td>
						<td>{{ $player['contractUntil'] }}</td>
						<td>{{ $player['marketValue'] }}</td>
					</tr>
					
				@endforeach
				
			</table>		
		</div>
		
		<div class="col-sm-4">		
			<table class="table table-bordered">
				<tr>
					<th>Fixtures</th>
				</tr>
				
				@foreach ($fixtures as $fixture)
		
					<tr>						
						<td>
							{{ $fixture['homeTeamName'] }} {{ $fixture['result']['goalsHomeTeam'] }} : {{ $fixture['result']['goalsAwayTeam'] }} {{ $fixture['awayTeamName'] }}
						</td>			
					</tr>	
				
				@endforeach
				
			</table>		
		</div>		
	</div>

@stop