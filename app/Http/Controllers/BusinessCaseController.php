<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BusinessCaseTeam;
use App\BusinessCaseMember;
use App\User;
use App\Notifications\EmailNotif;
use App\Notifications;

class BusinessCaseController extends Controller
{
    public function view(){
    	return view('pages.registration.business-case-form');
    }

    public function store(Request $request){
        $team = new BusinessCaseTeam([
            "team_name" => $request->team_name, 
            "posted" => date("l, d F Y")
        ]);
        $team->save();

        $id = \App\BusinessCaseTeam::where('team_name', $request->team_name)->first()->business_case_team_id;

        for($i = 1; $i <= 3; $i++){
            $member = new BusinessCaseMember([
                "business_case_team_id" => $id,
                "name" => $request->input("name".$i), 
                "age" => $request->input("age".$i), 
                "gender" => $request->input("gender".$i), 
                "email" => $request->input("email".$i), 
                "phone" => $request->input("phone".$i), 
                "line" => $request->input("line".$i),
                "major" => $request->input("major".$i), 
                "batch" => $request->input("batch".$i), 
                "KTM" => $request->input("KTM".$i), 
                "university" => $request->input("university".$i),
            ]);
            $member->save();
        }

        $user = new User();
    	$user->email = request('email1');
        $user->notify(new EmailNotif());
        
        $team->id = $id;
        $team->email = $request->email1;
		return view('pages.registration.success')
			->with('data', $team);
    }
}
