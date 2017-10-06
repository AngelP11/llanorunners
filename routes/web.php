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

Route::get('/', function () {
    return view('welcome');
})->name('root');

Route::post('/competitor/add', [
	'uses' => 'CompetitorController@store',
	'as' => 'user.competitor.store'
]);

Route::get('/competitor/registered', function () {
	return view('inscrito');
})->name('inscrito');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::resource('competitor', 'CompetitorController');
    Route::get('/competitor/{id}/destroy', [
    	'uses' => 'CompetitorController@destroy',
    	'as' => 'competitor.destroy'
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
