<?php namespace JBFJ\Footy;
	
use GuzzleHttp\Client;

class FootyAPI {
	
	protected $client;
	
	public function __construct(Client $client)
	{	
		$this->client = $client;	
	}
	
	public function getLeagues()
	{
		$leagues = $this->client->get('/soccerseasons')->json();
		
		return $leagues;
	}
	
	public function getLeagueFixtures($id)
	{		
		$fixtures = $this->client->get("soccerseasons/{$id}/fixtures")->json();
		
		return $fixtures;
	}
	
	public function getLeagueTable($id)
	{
		$league = $this->client->get("soccerseasons/{$id}/leagueTable")->json();

		return $league;		
	}
	
	public function getTeam()
	{
		$team = $this->client->get("teams/19")->json();
		//dd($team);
		return $team;		
	}
	
	public function getTeamPlayers()
	{
		$players = $this->client->get("teams/19/players")->json();
		
		return $players;
	}
	
	public function getTeamFixtures()
	{
		$team_fixtures = $this->client->get("teams/19/fixtures")->json();
		
		return $team_fixtures;
	}
}