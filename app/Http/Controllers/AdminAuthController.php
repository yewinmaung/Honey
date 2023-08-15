<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
           if ($use){
               if ($use=='1'){
                   return redirect()->route("dashboard",compact("request"))->withSuccess("Sigin");
               }
               elseif ($use='2'){
                   return redirect()->route("book-user",compact("request"))->withSuccess("Sigin");
               }
               elseif ($use=='3'){
                   return redirect()->route("book-user",compact("request"))->withSuccess("Sigin");

               }
           }
           else
           {
               return redirect()->route('admin-login')->withSuccess("Login details are not valid");
           }
               }
       else {
               return redirect()->route('admin-login')->withSuccess("Login details are not valid");
           }

    }

    public function Registration(){
        $aut=Auth::user()->id;
        $users= \Illuminate\Foundation\Auth\User::findorfail($aut);
        $use=$users->type;
        return view("adminauth.registration",compact('use'));
    }
    public function cusRegistration(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'type'=>'required'
        ]);

        $aut=Auth::user()->id;
        $users= \Illuminate\Foundation\Auth\User::findorfail($aut);
        $use=$users->type;
        $admin=new User();
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->password=$request->password;
        $admin->type=$request->type;
        $admin->save();
        return redirect()->route('dashboard',compact('use'));
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
