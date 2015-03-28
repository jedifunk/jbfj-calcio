@extends('layouts.default')
	
@section('content')
	
	<div class="row">
		<div class="col-sm-12">
			<h1>{{ $league_table['leagueCaption'] }}</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-8">
			
			<table class="table table-striped">
				<tr>
					<th>Position</th>
					<th>Club</th>
					<th>Played</th>
					<th>Points</th>
					<th>GF</th>
					<th>GA</th>
					<th>GD</th>
				</tr>
				
				@foreach ($standings as $club )
				
					<tr>
						<td>{{ $club['position'] }}</td>
						<td>{{ $club['teamName'] }}</td>
						<td>{{ $club['playedGames'] }}</td>
						<td>{{ $club['points'] }}</td>
						<td>{{ $club['goals'] }}</td>
						<td>{{ $club['goalsAgainst'] }}</td>
						<td>{{ $club['goalDifference'] }}</td>
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
		
		</div>
	</div>

@stop