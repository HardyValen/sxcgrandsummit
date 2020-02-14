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

Route::get('/business-case', 'PageRequestController@viewBusinessCase');
Route::get('/business-case/register', 'BusinessCaseController@view'); //view form
Route::post('/business-case/register', 'BusinessCaseController@store'); //storing page

// For debugging purpose only
// Route::get('/footer', function(){return view("blocks.footer");});
// Route::get('/navbar', function(){return view("blocks.navbar");});
// Route::get('/sidebar', function(){return view("blocks.sidebar");});