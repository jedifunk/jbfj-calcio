@extends('calcio.output')
	
@section('table')
	
	<table class="table table-striped">
		<tr>
			<th>Position</th>
			<th>Club</th>
			<th>Games Played</th>
			<th>Points</th>
			<th>Goals For</th>
			<th>Goals Against</th>
			<th>Goal Difference</th>
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

@stop