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
    	return view('pages.registration.form');
    }

    public function store(Request $request){
    	$hold = new RegisData([
			"nama" => $request->nama,
			"gender" => $request->gender,
			"email" => $request->email,
			"usia" => $request->usia,
			"line" => $request->line,
			"univ" => $request->univ,
			"jurusan" => $request->jurusan,
			"domisili" => $request->domisili,
		]);

    	$hold->save();

    	$user = new User();
    	$user->email = request('email');
    	$user->notify(new EmailNotif());

    	$email_name = request('email');
    	return view('pages.registration.success')->with(
    		'email_name', $email_name
    	);
    }
}
