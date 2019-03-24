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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('taches', 'TacheController@store'); //Route pour ajouter une tâche

Route::get('taches', 'TacheController@index'); // Route pour la liste des tâches

Route::get('taches/{id}', 'TacheController@show'); //Route pour afficher une tâche

Route::put('taches/{id}', 'TacheController@update'); //Route pour modifier une tâche

Route::delete('taches/{id}', 'TacheController@delete'); //Route pour supprimer une tâche