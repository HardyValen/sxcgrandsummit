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

Route::get('/', function() {return redirect()->to("/landing");});
Route::get('/landing', 'PageRequestController@viewLanding');
Route::post('/register', 'RegisController@store'); //storing page
Route::get('/register', 'RegisController@view'); //view form


// For debugging purpose only
Route::get('/footer', function(){return view("blocks.footer");});
// Route::get('/navbar', function(){return view("blocks.navbar");});
// Route::get('/sidebar', function(){return view("blocks.sidebar");});