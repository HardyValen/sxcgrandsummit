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
// Route::get('/business-case/register', 'BusinessCaseController@view');
// Route::post('/business-case/register', 'BusinessCaseController@store');

Route::get('/summit', 'PageRequestController@viewSummit');
// Route::get('/summit/register', 'SummitController@view');
// Route::post('/summit/register', 'SummitController@store');

Route::get('/pre-event', 'PageRequestController@viewPreEvent');
// Route::get('/pre-event/register', 'PreeventController@view');
// Route::post('/pre-event/register', 'PreeventController@store');

Route::get('/pre-event3/register', 'Preevent3MemberController@view');
Route::post('/pre-event3/register', 'Preevent3MemberController@store');

// FOR DEBUGGING PURPOSE ONLY
// Route::get('/registration-cards', function(){return view("blocks.registration");});
// Route::get('/schedule', function(){return view("blocks.schedule.businessCase");});
// Route::get('/footer', function(){return view("blocks.footer");});
// Route::get('/navbar', function(){return view("blocks.navbar");});
// Route::get('/sidebar', function(){return view("blocks.sidebar");});
// Route::get('/mail', function(){return view("emails.registrationSuccess");});
Route::get('/test', function(){return view("emails.registrationSuccessPreevent3");});