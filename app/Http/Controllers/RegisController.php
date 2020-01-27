<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegisData;
use App\User;
use App\Notifications\EmailNotif;
use App\Notifications;

class RegisController extends Controller
{
    public function view(){
    	return view('form');
    }

    public function store(){
    	$hold = new RegisData();

    	$hold->nama = request('nama');
    	$hold->gender = request('gender');
    	$hold->email = request('email');

    	$hold->save();

    	$user = new User();
    	$user->email = request('email');
    	$user->notify(new EmailNotif());

    	$email_name = request('email');
    	return view('success')->with(
    		'email_name', $email_name
    	);
    }
}
