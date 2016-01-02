<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('dashboard');
});

// This is a helper function that creates multiple routes.
// It creates.
// GET /players
// GET /players/create
// POST /players
// GET /players/{id}
// GET /players/{id}/edit
// PUT /players/{id}
// DELETE /players/{id}
// If you want to put them individual you  can use the helper functions
// get('players', 'PlayerController@index');
// the @ is used to say which method in the controller to call
resource('players', 'PlayerController');

resource('teams', 'TeamController');

resource('dashboard', 'DashboardController');

resource('matches', 'MatchController');