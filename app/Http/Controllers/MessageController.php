<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         $request->validate([
             "cname"=>"required",
             "cemail"=>"required",

         ]);
        $complain=new Message();
        $complain->cname=$request->cname;
        $complain->cemail=$request->cemail;
        $complain->cmessage=$request->cmessage;
        $complain->title=$request->title;
        $complain->save();
        return redirect()->back()->withSuccess("Send Message");

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $id=$request->id;
        $detail=DB::select("select * from `messages`where messages.id=:id",['id'=>$id]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function reply(Request $message){
        //$rp=DB::select("select * from `messages` where messages.id=:id",['id'=>$message->id]);
        $to_email = $message->cemail;
        $subject = $message->title;
        $reply=$message->cmessage;
        //$body = "Hello,nn It is a testing email sent by PHP Script";
        $headers = "From: sender\'s email";

        if (mail($to_email, $subject, $reply, $headers)) {
            echo "Email successfully sent to $to_email...";
            return redirect()->route("dashboard")->withSuccess("Sent Succefully...");
        }
        else {
            return redirect()->back()->withSuccess("error");
        }

    }
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
