<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageRequestController extends Controller
{
    public function viewLanding(){
        return view('pages.landing');
    }

    public function viewBusinessCase(){
        return view('pages.business-case');
    }
    public function viewPreEvent(){
        return view('pages.pre-event');
    }
    public function viewSummit(){
        return view('pages.summit');
    }
}
