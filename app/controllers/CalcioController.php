<?php

class CalcioController extends \BaseController {
	
	public function __construct(Calcio $calcio)
	{
		$this->calcio = $calcio;
	}
	
	public function index()
	{
		return View::make('calcio.index');
	}
	
	public function showLeagueTable()
	{		
		$choice = Input::get('league');
	
		$league_table = Footy::getLeagueTable($choice);
		$standings = $league_table['standing'];
		
		return View::make('calcio.table', compact('league_table', 'standings'));
	}
	
	public function showLeagueFixtures()
	{
		$choice = Input::get('league');
	
		$league_fixtures = Footy::getLeagueFixtures($choice);
		$fixtures = $league_fixtures['fixtures'];
		
		return View::make('calcio.fixtures', compact('fixtures'));
	}
	
	public function showleagueDetails()
	{
		$choice = Input::get('league');
		
		// Get League Table
		$league_table = Footy::getLeagueTable($choice);
		$standings = $league_table['standing'];
		
		// Get next set of league fixtures
		$matchday = $league_table['matchday'];
		$upcoming = $matchday+1;
		$league_fixtures = Footy::getUpcomingFixtures($choice, $upcoming);
		$fixtures = $league_fixtures['fixtures'];
		
		// Get previous round results
		$previous_fixtures = Footy::getLastFixtures($choice, $matchday);
		$results = $previous_fixtures['fixtures'];
		
		return View::make('calcio.league', compact('league_table', 'standings', 'fixtures', 'results'));
		
	}
	
	public function showTeam($id)
	{
		$team = Footy::getTeam($id);
		
		$all_players = Footy::getTeamPlayers($id);
		$players = $all_players['players'];
		
		$team_fixtures = Footy::getTeamFixtures($id);
		$fixtures = $team_fixtures['fixtures'];
		
		return View::make('calcio.team', compact('team', 'players', 'fixtures'));
	}

}
