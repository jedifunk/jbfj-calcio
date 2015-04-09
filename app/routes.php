<?php

//Route::resource('users', 'UsersController');

//Route::get('login', 'SessionsController@create');

//Route::get('logout', 'SessionsController@destroy');

//Route::resource('sessions', 'SessionsController');

Route::get('/', 'CalcioController@index');
//Route::post('/', 'CalcioController@showLeagueTable');
//Route::post('/', 'CalcioController@showFixtures');
Route::post('/', 'CalcioController@showleagueDetails');
/*
Route::post('/league', [
	'as' => 'league',
	'uses' => 'CalcioController@showleagueDetails'
]);
*/

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
	
	//$today = date(DATE_ATOM);
	//$week = date(DATE_ATOM, strtotime('+7 days'));
	//dd($fixtures['fixtures'][0]['date']);

	
});