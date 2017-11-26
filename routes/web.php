<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['uses' => 'WelcomeController@index', 'as' => 'Accueil']);
Route::get('/interdit', function() {
        return view('notAccess');
    }
);

// Routes pour la partie user
Auth::routes();

Route::get('ajout-planning', ['uses' => 'StreamersController@showPlanningForm', 'as' => 'showPlanningForm']);
Route::post('ajout-planning', ['uses' => 'StreamersController@addPlanning', 'as' => 'addPlanning']);