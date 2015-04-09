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
	
	public function getUpcomingFixtures($id, $matchday)
	{
		$fixtures = $this->client->get("soccerseasons/{$id}/fixtures/?matchday={$matchday}")->json();
		
		return $fixtures;
	}
	
	public function getLastFixtures($id, $matchday)
	{
		$fixtures = $this->client->get("soccerseasons/{$id}/fixtures/?matchday={$matchday}")->json();
		
		return $fixtures;
	}
	
	public function getLeagueTable($id)
	{
		$league = $this->client->get("soccerseasons/{$id}/leagueTable")->json();
		
		return $league;		
	}
	
	public function getLeagueTeams($id)
	{
		$teams = $this->client->get("soccerseasons/{$id}/teams")->json();
		
		return $teams;		
	}
	
	public function getTeam($id)
	{
		$team = $this->client->get('teams/'. $id)->json();

		return $team;		
	}
	
	public function getTeamPlayers($id)
	{
		$players = $this->client->get('teams/'. $id .'/players')->json();
		
		return $players;
	}
	
	public function getTeamFixtures($id)
	{
		$team_fixtures = $this->client->get('teams/'. $id .'/fixtures')->json();
		
		return $team_fixtures;
	}
}