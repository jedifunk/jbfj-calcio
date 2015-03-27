<?php

//Route::resource('users', 'UsersController');

//Route::get('login', 'SessionsController@create');

//Route::get('logout', 'SessionsController@destroy');

//Route::resource('sessions', 'SessionsController');

//Route::get('spotify', 'SpotifyController@index');
//Route::post('spotify', 'SpotifyController@search');

Route::get('calcio', 'CalcioController@index');
Route::post('calcio', 'CalcioController@getLeagueTable');

Route::get('calcio/test/{query}', function($query)
{
	//dd(getenv('API_KEY'));
	
	$leagues = Footy::get($query);
	dd($leagues);
	//dd(Footy::$league_uri);
});