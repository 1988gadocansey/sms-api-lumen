<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api', 'middleware' => 'auth'], function () use ($router) {
  $router->get('authors',  ['uses' => 'AuthorController@showAllAuthors']);

  $router->get('authors/{id}', ['uses' => 'AuthorController@showOneAuthor']);

  $router->post('authors', ['uses' => 'AuthorController@create']);

  $router->delete('authors/{id}', ['uses' => 'AuthorController@delete']);

  $router->put('authors/{id}', ['uses' => 'AuthorController@update']);
});

use App\Messages;
use App\Http\Resources\MessagesCollection;

Route::get('/messages', function () {
    return new MessagesCollection(Messages::all());
});

//list all Messages
Route::get('messages', 'MessagesController@index')->name('allMessages');

//list single Message
Route::get('messages/{id}', 'MessagesController@show')->name('singleMessage');

//create new Message
Route::post('message', 'MessagesController@store')->name('saveMessage');

//update Messages
Route::put('message/{id}', 'MessagesController@store')->name('updateMessages');

//delete Messages
Route::delete('messages/{id}', 'MessagesController@destroy')->name('allMessages');