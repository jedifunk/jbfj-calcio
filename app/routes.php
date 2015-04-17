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
	$matchday = $league['matchday'];
	$upcoming = $matchday+1;
	
	$fixtures = Footy::getUpcomingFixtures(357, $matchday);
	
	dd($league);
});