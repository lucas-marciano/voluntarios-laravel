<?php



/*
-------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('sobre', ['as' => 'sobre', 'uses' => 'Institucional\InstitucionalController@sobre']);
Route::get('contato', ['as' => 'contato', 'uses' => 'Institucional\InstitucionalController@contato']);
Route::post('contato', ['as' => 'contato.send', 'uses' => 'Institucional\InstitucionalController@contatoSend']);

Route::resource('vonlunteer', 'VonlunteersController');