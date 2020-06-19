<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


// Route::post('register', 'Auth\RegisterController@register');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout');

// Route::get('contacts', 'ContactController@indexAPI');
// Route::get('contacts/{contact}', 'ContactController@showAPI');
// Route::post('contacts', 'ContactController@storeAPI');
// Route::put('contacts/{contact}', 'ContactController@updateAPI');
// Route::delete('contacts/{contact}', 'ContactController@deleteAPI');

Route::middleware('auth:api')->group(function(){
    Route::get('entreprisesapi', 'EntreprisesController@indexAPI')->name('api.entreprises.indexapi');
    Route::get('entreprisesapi/{id}/detail', 'EntreprisesController@detail')->name('api.entreprises.detail');
    Route::get('entreprisesapi/{id}/user', 'EntreprisesController@user')->name('api.entreprises.user');
});