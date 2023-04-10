<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Session;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function homepage(){
        return view('frontend.Pages.homepage');
    }
    
    function signup(){
        return view('frontend.Pages.signup');
    }

    function signin_store(Request $request){
        $request->validate(
            [
                'fname' =>'required',
                'lname' =>'required',
                'email' =>'required|email',
                'password' =>'required'
            ]
        );
        User::create(
            [
             'firstname' => $request->fname,
             'lastname' => $request->lname,
             'gender' => $request->gender,
             'dob' => $request->dob,
             'email' => $request->email,
             'password' => bcrypt($request->password)
            ]
         );
         return redirect('/signin');
    }
    
    function signin(){
        return view('frontend.Pages.signin');
    }

    function loginCheck(Request $request){
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]
        );

        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            if(Auth::user()->role == 'admin'){
                return redirect('/adminDashboard');
                // dd("admin");
                
            }elseif(Auth::user()->role == 'user'){
                return redirect('/userDashboard');
                // dd('user');
            }

            
        }else{
            return redirect('signin')->with('error','You have not admin access');
        }
    }
    
    function lostpassword(){
        return view('frontend.Pages.lostPassword');
    }


    public function logoutlogin(Request $request) {
        Auth::logout();
        return redirect('/signin');
    }


    
}
