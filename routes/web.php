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

//Contacts
Route::get('/contacts', 'ContactsController@index')->name('contacts.index');
Route::get('/contacts/create', 'ContactsController@create')->name('contacts.create');
Route::post('/contacts/store', 'ContactsController@store')->name('contacts.store');
Route::get('/contacts/{id}/show', 'ContactsController@show')->name('contacts.show');

//Entreprises
Route::get('/entreprises', 'EntreprisesController@index')->name('entreprises.index');
Route::get('/entreprises/create', 'EntreprisesController@create')->name('entreprises.create');
Route::post('/entreprisess/store', 'EntreprisesController@store')->name('entreprises.store');
Route::get('/entreprises/{id}/show', 'EntreprisesController@show')->name('entreprises.show');
Route::get('/entreprises/{id}/delete', 'EntreprisesController@delete')->name('entreprises.delete');
Route::get('/entreprises/{id}/edit', 'EntreprisesController@edit')->name('entreprises.edit');
Route::post('/enterprises/{id}/update', 'EntreprisesController@update')->name('entreprises.update');

//Demandes
Route::get('/demandes', 'DemandesController@index')->name('demandes.index');
Route::get('/demandes/create', 'DemandesController@create')->name('demandes.create');
Route::post('/demandes/store', 'DemandesController@store')->name('demandes.store');
Route::get('/demandes/{id}/show', 'DemandesController@show')->name('demandes.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
