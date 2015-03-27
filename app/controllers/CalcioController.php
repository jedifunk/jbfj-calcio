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
		
		return View::make('calcio.index')->withLeagueList($league_list);

	}
	
	public function getLeagues()
	{
		$this->calcio;
		
		$calcio_search = new Footy();
		
		$leagues = $calcio_search->get($uri, $header)->json();
		//dd($leagues);
		$league_name = array_fetch($leagues, 'caption');
		dd($league_name);
		
		return $league_name;
	}

	public function getFixtures()
	{
		$this->calcio;
		
		$league = $client->get($uri, $header)->json();
		dd($league);
		$fixtures = $league['fixtures'];
		
		return View::make('calcio.output')->with('fixtures', $fixtures);
	}
	
	public function getLeagueTable()
	{
		$this->calcio;
		
		$choice = Input::get('league');
		dd($choice);
		
		$league = $client->get($uri, $header)->json();
		dd($league);
		//$fixtures = $league['fixtures'];
		
		//return View::make('calcio.output')->with('fixtures', $fixtures);
	}


}
