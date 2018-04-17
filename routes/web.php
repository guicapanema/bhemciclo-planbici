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
    return view('home');
});

Route::get('/planbici', function () {
    return view('planbici');
});

Route::get('/participe', function () {
    return view('participe');
});

Route::get('/contato', function () {
    return view('contato');
});

/* API Routes */
Route::get('/api/eixos', 'AxisController@list');

Route::get('/api/acoes', 'ActionController@list');

Route::get('/api/news', 'NewsController@list');
