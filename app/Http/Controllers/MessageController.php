<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
            "cname" => "required",
            "cemail" => "required",

        ]);
        $complain = new Message();
        $complain->cname = $request->cname;
        $complain->cemail = $request->cemail;
        $complain->cmessage = $request->cmessage;
        $complain->title = $request->title;
        $complain->userid=Auth::user()->id;
        $complain->save();
        return redirect()->back()->withSuccess("Send Message");

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $id = $request->id;
        $detail = DB::select("select * from `messages`where messages.id=:id", ['id' => $id]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function reply(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'name'=>"required"
        ]);

        try {
            // send email
            $mailData = [
                'title' => $request->title,
                'body' => $request->message,
                'name'=>$request->name
                ];

            Mail::to($request->email)->send(new SendEmail($mailData));
            $message=Message::findorfail($request->id);
            $message->type="1";
            $message->update();
            return redirect('admin/report')->with('success','email was sent to successfully!');
        } catch (\Exception $e) {
            return redirect('admin/message/'.$request->id)->with('error', $e->getMessage());
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
