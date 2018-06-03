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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
})->name('uebersicht');

Route::get('/account', 'UserController@index')->name('account');

Route::get('/account/bearbeiten', 'UserController@edit')->name('bearbeiten');

Route::post('/account/bearbeiten', 'UserController@update')->name('bearbeiten');

Route::post('/account', 'UserController@update_avatar');

Route::get('/bewerten', function () {
    return view('bewerten');
})->name('bewerten')->middleware('auth');

Route::get('/aktivitaeten', 'dbController@aktivitaeten')->name('aktivitaeten');

Route::get('/aktivitaet/{id}', 'dbController@informationenAk');

Route::get('/ranking', 'dbController@ranking')->name('ranking');

Route::get('/hochschulen', 'dbController@hochschulen')->name('hochschulen');

Route::get('/hochschule/{id}', 'dbController@informationenHs');

Route::get('/vorlesung/{id}', function () {
    return view('vorlesung');
});

Route::post('/live', 'searchController@livesearch')->name('live');
Route::get('/search', function () {
    return view('searchresults');
})->name('search');

Route::group(['prefix' => 'question'], function () {

    Route::get('post', [
        'as' => 'get_post',
        'uses' => 'ForumController@get_post'
    ]);

    Route::post('post', [
        'as' => 'post_question',
        'uses' => 'ForumController@postQuestion'
    ]);
});
Route::get('/forum/release', 'PagesController@home');