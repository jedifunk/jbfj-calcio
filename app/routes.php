<?php

//Route::resource('users', 'UsersController');
//Route::get('login', 'SessionsController@create');
//Route::get('logout', 'SessionsController@destroy');
//Route::resource('sessions', 'SessionsController');

Route::get('/', 'CalcioController@index');

Route::post('/', 'CalcioController@leagueChoice');

Route::get('/league/{choice}', [
	'as' => 'league',
	'uses' => 'CalcioController@showLeagueDetails'
]);

Route::get('/team/{id}', [
	'as' => 'team',
	'uses' => 'CalcioController@showTeam'
]);

Route::get('test', function()
{
	$league = Footy::getLeagueTable(354);
	
	$params = array(
	    'q'             => $league['leagueCaption'] . 'Highlights',
	    'type'          => 'video',
	    'part'          => 'id, snippet',
	    'maxResults'    => 3
	);

	$videoList = Youtube::searchAdvanced($params);

	return View::make('calcio.test', compact('videoList'));

});