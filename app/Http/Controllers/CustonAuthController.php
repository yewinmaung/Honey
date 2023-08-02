<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;


class CustonAuthController extends Controller
{
    //
    public function index(){
        return view("cusAuth.login");
    }
    public function customLogin(Request $request){
        $request->validate([
            'email'=>"required",
            'password'=>"required"
        ]);
        $credential=$request->only('email','password');
        if(Auth::attempt($credential)){
            return redirect()->route("home")->withSuccess("Sigin");
        }
        else{
            return redirect('login')->withSuccess("Login details are not valid");
        }
    }

    public function Registration(){
        return view("cusAuth.registration");
    }
    public function cusRegistration(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);
return redirect()->route('home');
    }
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
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
     return redirect()->route('home');
    }
}
