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

Route::get('/gojek', function () {
    $user = App\User::find(1);

    return (new App\Notifications\EmailNotif($user))
                ->toMail($user)
                ->view('emails.gojek');
});

Route::get('/mail', function () {
    $user = App\User::find(1);

    return (new App\Notifications\EmailNotif($user))
                ->toMail($user)
                ->view('emails.registrationSuccess');
});