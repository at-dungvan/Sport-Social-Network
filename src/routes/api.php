<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:api'])->group(function () {
    /**
     * Users
     */
    Route::resource('users', 'UserController', ['only' => ['update', 'destroy']]);
});

/**
 * Players
 */
Route::resource('players', 'PlayerController', ['only' => ['index', 'show']]);

/**
 * Substitutes
 */
Route::resource('substitutes', 'SubstituteController', ['only' => ['index', 'show']]);

/**
 * Matches
 */
Route::resource('matches', 'MatchController', ['only' => ['index', 'show']]);

/**
 * Teams
 */
Route::resource('teams', 'TeamController', ['except' => ['create', 'edit']]);

/**
 * Users
 */
Route::resource('users', 'UserController', ['only' => ['index', 'show', 'store']]);

/**
 * Login
 */
Route::post('users/login', 'UserController@login');
