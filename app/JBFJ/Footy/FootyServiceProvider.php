<?php namespace JBFJ\Footy;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;

class FootyServiceProvider extends ServiceProvider {
	
	public function register()
	{
		$this->app->bind('footy', function()
		{
			$client = new Client([
				'base_url'	=>	['http://api.football-data.org/{version}/', ['version' => 'alpha']],
				'defaults'	=>	[
					'headers'	=>	['X-Auth-Token' => getenv('API_KEY')]
				]
			]);
			
			return new FootyAPI($client);
			
		});
		
	}
}