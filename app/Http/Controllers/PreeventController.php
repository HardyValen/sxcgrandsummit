<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Preevent2Member;
use App\User;
use App\Notifications\EmailPreevent;
use App\Notifications;

class PreeventController extends Controller
{
    public function view(){
    	return view('pages.registration.preevent-form');
    }

    public function store(Request $request){
        
		$member = new Preevent2Member([
            "fullname" => $request->input("name"),
            "gender" => $request->input("gender"), 
            "email" => $request->input("email"), 
            "phone" => $request->input("phone"), 
            "major" => $request->input("major"), 
            "university" => $request->input("university"), 
            "hometown" => $request->input("hometown"),
        ]);
        $member->save();

        $user = new User();
    	$user->email = request('email');
        $user->notify(new EmailPreevent());
        
		return view('pages.registration.success_preevent')->with('data', $member);
    }
}
