<?php

class CalcioController extends \BaseController {
	
	public function __construct(Calcio $calcio)
	{
		$this->calcio = $calcio;
	}
	
	public function index()
	{
		$this->calcio;
		
		$league_list = Footy::getLeagues();
		$league_name = array_pluck($league_list, 'caption', 'id');

		return View::make('calcio.index', compact('league_list', 'league_name'));
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
		//dd($fixtures);
		
		return View::make('calcio.fixtures', compact('fixtures'));
	}
	
	public function leagueDetails()
	{
		$choice = Input::get('league');
	
		$league_table = Footy::getLeagueTable($choice);
		$standings = $league_table['standing'];
		
		$league_fixtures = Footy::getLeagueFixtures($choice);
		$fixtures = $league_fixtures['fixtures'];
		
		return View::make('calcio.output', compact('league_table', 'standings', 'fixtures'));
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
