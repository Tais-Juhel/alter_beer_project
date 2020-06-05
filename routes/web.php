<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', 'ContactsController@index')->name('contacts.index');
Route::get('/contacts/create', 'ContactsController@create')->name('contacts.create');
Route::post('/contacts/store', 'ContactsController@store')->name('contacts.store');
Route::get('/contacts/{id}/show', 'ContactsController@show')->name('contacts.show');

Route::get('/entreprises', 'EntreprisesController@index')->name('entreprises.index');
Route::get('/entreprises/create', 'EntreprisesController@create')->name('entreprises.create');
Route::post('/entreprisess/store', 'EntreprisesController@store')->name('entreprises.store');
Route::get('/entreprises/{id}/show', 'EntreprisesController@show')->name('entreprises.show');
