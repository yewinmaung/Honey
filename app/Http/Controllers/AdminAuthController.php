<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Message;
use App\Models\Town;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    //
    public function index(){
        return view("adminauth.login");
    }
    public function customLogin(Request $request){

        $request->validate([
            'email'=>"required",
            'password'=>"required"
        ]);


        $credential = $request->only('email', 'password');

       if (Auth::attempt($credential)) {
           $aut=Auth::user()->id;
           $users= \Illuminate\Foundation\Auth\User::findorfail($aut);

           $use=$users->type;

               if ($use==1){
                   return redirect()->route("dashboard",compact("request"))->withSuccess("Sigin");
               }
               else{
                   return redirect()->route("admin-login")->withSuccess("Your not Admin");
               }



               }
       else {
               return redirect()->route('admin-login')->withSuccess("Your account is invalid");
           }

    }

    public function Registration(){

        }
    public function cusRegistration(Request $request){

        return $request;
    }


    public function homeView(){
        if(Auth::check()){
            return view('welcome');
        }
        else{
            return redirect('login')->withSuccess('You are not allowed to access');
        }
    }
    public function signout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('admin-login');
    }
}
