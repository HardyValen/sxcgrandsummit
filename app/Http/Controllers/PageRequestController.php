<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageRequestController extends Controller
{
    public function viewLanding(){
        return view('pages.landing');
    }
}
