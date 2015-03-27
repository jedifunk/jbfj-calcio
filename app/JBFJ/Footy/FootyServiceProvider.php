<?php namespace JBFJ\Footy;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class FootyServiceProvider extends ServiceProvider {
	
	public function register()
	{
		$this->app->bind('footy', function()
		{
			$client = new Client([
				'base_url'	=>	['http://api.football-data.org/{version}/soccerseasons', ['version' => 'alpha']],
				'defaults'	=>	[
					'headers'	=>	['X-Auth-Token' => getenv('API_KEY')]
				]
			]);
			
			return new FootyAPI($client);
			
		});
		
	}
}