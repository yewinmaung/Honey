<?php

namespace App\Http\Controllers;

use App\Models\Admin;

use App\Models\Book;
use App\Models\Message;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins=Admin::all();
        $admin_count=Admin::count();
        $bookU=Book::count();
        $IU=User::count();

        return view('admin.dashboard',compact('admins','admin_count','IU',"bookU"));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bookU=Book::count();
        return view('admin.staff-upload',compact('bookU'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'image'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            "sname"=>"required",
            "snic"=>"required|unique:admins,nic",
            "semail"=>"required|unique:admins,email",
            "sphone"=>"required|unique:admins,phone",
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
        $bookU=Book::count();
       return view('admin.staff',['admins'=>Admin::all()],compact('bookU'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $admin=Admin::findorfail($id);

         return view('admin.staff-detail',compact('admin'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {

        $request->validate([
            'image'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            "sname"=>"required",
            "snic"=>"required|unique:admins,nic,$id",
            "semail"=>"required|unique:admins,email,$id",
            "sphone"=>"required|unique:admins,phone,$id",
            "scity"=>"required",
            "job"=>"required",
            "squar"=>"required",
            "desc"=>"required",
        ]);
        $admin=Admin::findorfail($id);
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
        $admin->update();
        return redirect()->route('admin-staff')->with('success');

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
        $bookU=Book::count();
        return view('admin.adminadduser',compact('bookU'));
    }
    public function report(Message $messages){
        $bookU=Book::count();
        return view('admin.report',["messages"=>Message:: all()],compact('bookU'));
    }
    public function reportdetail(Request $request){
       return view('admin.reportdetail',['messages'=>Message::all()]);
    }
    public function bookingUser(){
        $books=Book::all();
        $bookU=Book::count();
        return view('admin.booking',compact('books','bookU'));
    }


}
