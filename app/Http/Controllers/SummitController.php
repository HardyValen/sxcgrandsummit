<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SummitTeam;
use App\SummitMember;
use App\User;
use App\Notifications\EmailNotif;
use App\Notifications;

class SummitController extends Controller
{
    public function view(){
    	return view('pages.registration.summit-form');
    }

    public function store(Request $request){
        $team = new SummitTeam([
            "team_name" => $request->team_name,
            "posted" => date("l, d F Y")
        ]);
        $team->save();

        $id = \App\SummitTeam::where('team_name', $request->team_name)->first()->summit_team_id;
        $threshold = $request->members; //nyimpen banyaknya member dari form

        for($i = 1; $i <= $threshold; $i++){
            $member = new SummitMember([
                "summit_team_id" => $id,
                "fullname" => $request->input("name".$i),
                "gender" => $request->input("gender".$i), 
                "age" => $request->input("age".$i), 
                "email" => $request->input("email".$i), 
                "line" => $request->input("line".$i),
                "phone" => $request->input("phone".$i), 
                "major" => $request->input("major".$i), 
                "batch" => $request->input("batch".$i), 
                "university" => $request->input("university".$i), 
                "ch_selection" => $request->input("ch_selection".$i),
            ]);
            $member->save();
        }

        $user = new User();
    	$user->email = request('email1');
        $user->notify(new EmailNotif());
        
        $team->id = $id;
        $team->email = $request->email1;
		return view('pages.registration.success_summit')->with('data', $team);
    }
}
