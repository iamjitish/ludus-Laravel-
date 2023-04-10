<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function dashboard(){
        return view('frontend.Dashboard.userDashboard');
    }
}
