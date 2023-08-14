<?php

namespace App\Http\Controllers;

use App\Models\Admin;
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


        if(Auth::attempt(['email' => $request->input('email'),  'password' => $request->input('password')])){
            $user = auth()->guard('admin')->user();

            if($user->type == 'admin'){
                return redirect()->route('dashboard')->with('success','You are Logged in sucessfully.');
            }
        }else {
            return back()->with('error','Whoops! invalid email and password.');
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
        auth()->guard('admin')->logout();
        Session::flush();
        Session::put('success', 'You are logout sucessfully');
        return redirect(route('admin-login'));
    }
}
