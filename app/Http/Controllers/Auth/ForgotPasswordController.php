<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\User;
use Mail;
use Hash;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function showForgetPasswordForm()
    {
        return view('cusAuth.forgotpassword');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForgetPasswordForm(Request $request)
    {


        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);
        DB::table('password_resets')->insert([
                  'email' => $request->email,
                  'token' => $token,

                  'created_at' => Carbon::now()
              ]);



        $mailData = [
            'title' =>"Forgot Password",
            'body' =>"Are you sure Your Password Remove?",
            'name'=>"User"
        ];

        \Illuminate\Support\Facades\Mail::to($request->email)->send(new SendEmail($mailData));



//        \Illuminate\Support\Facades\Mail::send('email.forgetPassword', ['token' => $token], function($message) use($request){
//            $message->to($request->email);
//            $message->subject('Reset Password');
//        });

      return view('cusAuth.resetpassword',compact('token'));
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function showResetPasswordForm($token) {
        return view('cusAuth.resetpassword', ['token' => $token]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();


        if(!$updatePassword){
            return back()->withInput()->with( "error",'Invalid token!');
        }

        $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        //DB::table('password_resets')->where(['email'=> $request->email])->delete();

        return redirect()->route('login')->with('message', 'Your password has been changed!');
    }
}
