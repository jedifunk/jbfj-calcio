<?php

use GuzzleHttp\Client;

class SpotifyController extends \BaseController {

	protected $spotify;
	
	public function __construct(Spotify $spotify)
	{
		$this->spotify = $spotify;
	}
	
	public function index()
	{
		$this->spotify;
		
		return View::make('spotify.index');

	}

	public function search()
	{
		$this->spotify;
		
		$term = Input::get('search');		
		$url = 'api.spotify.com/v1/search?q=' . $term . '&type=artist';
		
		$client = new Client();
		
		$response = $client->get($url)->json();
		$artists = $response['artists']['items'];
		
		dd($artists);
		
		return View::make('spotify.output')->with('artists', $artists);
	}

//$session = new SpotifyWebAPI\Session('42bbd41b7016457c9cbde87b8f3c73b7', 'a02d97bd39d24ab69c840ab81d5d439c', 'http://newapp.app/spotify');

		// Request access token with optional scopes
		/*
$scopes = array(
		    'playlist-read-private',
		    'user-read-private'
		);
		
		$session->requestCredentialsToken($scopes);
		$accessToken = $session->getAccessToken(); // We're good to go!
		
		$api = new SpotifyWebAPI\SpotifyWebAPI();
		// Set the code on the API wrapper
		$api->setAccessToken($accessToken);
*/

}
