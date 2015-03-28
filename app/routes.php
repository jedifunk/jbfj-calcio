<?php

//Route::resource('users', 'UsersController');

//Route::get('login', 'SessionsController@create');

//Route::get('logout', 'SessionsController@destroy');

//Route::resource('sessions', 'SessionsController');

Route::get('/', 'CalcioController@index');
//Route::post('/', 'CalcioController@showLeagueTable');
//Route::post('/', 'CalcioController@showFixtures');
Route::post('/', 'CalcioController@leagueDetails');
Route::get('/team/{id}', [
	'as' => 'team',
	'uses' => 'CalcioController@showTeam'
]);

Route::get('test', function()
{

	$team = Footy::getTeam(19);
	dd($team);

});