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
	
	public function getFixtures($id)
	{		
		$fixtures = $this->client->get("soccerseasons/{$id}/fixtures")->json();
		
		return $fixtures;
	}
	
	public function getLeagueTable($id)
	{
		$league = $this->client->get("soccerseasons/{$id}/leagueTable")->json();

		return $league;		
	}
	
}