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
		
		$leagues = $this->get->json();
		//dd($leagues);
		$league_name = array_fetch($leagues, 'caption');
		//dd($league_name);
		
		return $league_name;
	}
}