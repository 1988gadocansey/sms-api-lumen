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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
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
Route::post('messages/{id}', 'MessagesController@destroy')->name('allMessages');