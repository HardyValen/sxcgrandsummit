<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SummitData
use App\User;
use App\Notifications\EmailNotif;
use App\Notifications;

class SummitController extends Controller
{
    public function view(){
    	return view('pages.registration.summit-form');
    }

    public function store(Request $req){

    }
}
