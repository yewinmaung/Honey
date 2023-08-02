<?php

namespace App\Http\Controllers;

use App\Models\Admin;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dashboard',["admins"=>Admin:: all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.staff-upload');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            "sname"=>"required",
            "snic"=>"required",
            "semail"=>"required",
            "sphone"=>"required",
            "scity"=>"required",
            "job"=>"required",
            "squar"=>"required",
            "desc"=>"required",
        ]);

              $admin=new Admin();
        if ($image = $request->file('image'))
        {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $admin['image'] = "$profileImage";
        }
              $admin->name=$request->sname;
              $admin->nic=$request->snic;
              $admin->email=$request->semail;
              $admin->phone=$request->sphone;
              $admin->city=$request->scity;
              $admin->job=$request->job;
              $admin->quar=$request->squar;
              $admin->desc=$request->desc;
              $admin->save();
              return redirect()->route('dashboard')->with('success','Product created successfully.') ;


    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
       return view('admin.staff',['admins'=>Admin::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $admin=Admin::findorfail($id);
        return view('admin.staff-detail');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      $admin=Admin::findorfail($id);
      $admin->delete();
      return redirect()->back();
    }
    public function upload(){
        return view('admin.adminadduser');
    }
    public function report(Message $messages){
        return view('admin.report',["messages"=>Message:: all()]);
    }
    public function reportdetail(Request $request){
       return view('admin.reportdetail',['messages'=>Message::all()]);
    }
    public function bookingUser(){
        return view('admin.booking');
    }


}
