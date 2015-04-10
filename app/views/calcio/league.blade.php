@extends('layouts.default')
	
@section('content')
	
	<header class="row v-sp-sm">
		<div class="col-sm-12">
			<h1>{{ $league_table['leagueCaption'] }}</h1>
		</div>
	</header>
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
					<?php 
						// this needs to get massively cleaned up, shouldn't belong in the output
						$url = $club['_links']['team']['href'];
						$remove = 'http://api.football-data.org/alpha/teams/';
						$team_id = str_replace($remove, '', $url); 
					?>
					<tr>
						<td>{{ $club['position'] }}</td>
						<td><a href="/team/{{ $team_id }}">{{ $club['teamName'] }}</a></td>
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
					<th>Upcoming Fixtures</th>
				</tr>
				@foreach ($fixtures as $fixture)
					<?php 
						// clean this up as well
						$home_url = $fixture['_links']['homeTeam']['href'];
						$away_url = $fixture['_links']['awayTeam']['href'];
						$strip = 'http://api.football-data.org/alpha/teams/';
						$home_id = str_replace($strip, '', $home_url);
						$away_id = str_replace($strip, '', $away_url);
					?>
					<tr>
						
						<td>
							<a href="/team/{{ $home_id }}">{{ $fixture['homeTeamName'] }}</a> v <a href="/team/{{ $away_id }}">{{ $fixture['awayTeamName'] }}</a>
						</td>
					
					</tr>	
				
				@endforeach
				
			</table>
			
			<table class="table table-bordered">
				<tr>
					<th>Last Round Fixtures</th>
				</tr>
				@foreach ($results as $result)
					<?php 
						$home_url = $result['_links']['homeTeam']['href'];
						$away_url = $result['_links']['awayTeam']['href'];
						$strip = 'http://api.football-data.org/alpha/teams/';
						$home_id = str_replace($strip, '', $home_url);
						$away_id = str_replace($strip, '', $away_url);
					?>
					<tr>
						
						<td>
							<a href="/team/{{ $home_id }}">{{ $result['homeTeamName'] }}</a> {{ $result['result']['goalsHomeTeam'] }} : {{ $result['result']['goalsAwayTeam'] }} <a href="/team/{{ $away_id }}">{{ $result['awayTeamName'] }}</a>
						</td>
					
					</tr>	
				
				@endforeach
				
			</table>
		
		</div>
	</div>

@stop