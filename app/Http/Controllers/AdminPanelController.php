<?php

namespace App\Http\Controllers;

use App\Models\Admin;

use App\Models\Blog;
use App\Models\Book;
use App\Models\Hotel;
use App\Models\Message;
use App\Models\Package;
use App\Models\Post;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Auth::user()){
            return redirect("admin/login");
        }


        $bookU=Book::count();
        $IU=User::count();
        $rep=Message::count();
        $hotel=Hotel::count();
        $res=Restaurant::count();

         return view('admin.dashboard',compact('rep','IU',"bookU",'hotel','res'),["blog"=>Post::paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::user()){
        return redirect("admin/login");
        }
        $aut=Auth::user()->id;
        $users=User::findorfail($aut);
        $use=$users->type;
        $bookU=Book::count();
        return view('admin.staff-upload',compact('bookU',"use"));
    }


    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        if (!Auth::user()){
            return redirect("admin/login");
        }
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
   }
public function adminProfileProcess(Request $request){
        $request->validate([
            'img'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            "name"=>"required",
            "email"=>"required",
            "pwd"=>"required",
            'cpwd'=>"required"
        ]);
        $pwd=$request->pwd;
        $cpwd=$request->cpwd;
        if($pwd!=$cpwd){
            return redirect()->back()->withSuccess("Passowrd are not Match!Try Again");
        }
        else {
            $aut=Auth::user()->id;
            $user=User::findorfail($aut);
            if ($image = $request->file('img'))
            {
                $destinationPath = 'images/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $user['img'] = "$profileImage";
            }
            $user->name=$request->name;
            $user->email=$request->email;
            $user->password=Hash::make($pwd);
            //$user->cpwd=$cpwd;
            $user->update();
            return redirect()->back()->withSuccess("Success");
        }

}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {  $aut=Auth::user()->id;
        $users=User::findorfail($aut);
        $use=$users->type;

         $admin=Admin::findorfail($id);
         return view('admin.staff-detail',compact('admin','use'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        if (!Auth::user()){
            return redirect("admin/login");
        }

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

        $aut=Auth::user()->id;
        $users=User::findorfail($aut);
        $use=$users->type;
        return redirect()->route('admin-staff',compact('use'))->with('success');

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
        if (!Auth::user()){
            return redirect("admin/login");
        }
        $aut=Auth::user()->id;
        $users=User::findorfail($aut);
        $use=$users->type;
        $bookU=Book::count();
        $package=Package::all();
        return view('admin.adminadduser',compact('bookU','use',"package"));
    }
    public function report(Message $messages){

        $aut=Auth::user()->id;
        $users=User::findorfail($aut);
        $use=$users->type;
        $bookU=Book::count();
        return view('admin.report',["messages"=>Message::paginate(10)],compact('bookU','use'));
    }
    public function reportdetail($id){
        if (!Auth::user()){
            return redirect("admin/login");
        }
        $aut=Auth::user()->id;
        $users=User::findorfail($aut);
        $use=$users->type;
        $message=Message::findorfail($id);
       return view('admin.reportdetail',compact('use','message'));
    }
    public function bookingUser(){
        if (!Auth::user()){
            return redirect("admin/login");
        }
        $aut=Auth::user()->id;
        $users=User::findorfail($aut);
        $use=$users->type;
        $books=Book::paginate(5);
        $bookU=Book::count();

        return view('admin.booking',compact('bookU','use'),["books"=>Book::paginate(5)]);
    }
public function adminbooking(Request $request){
    if (!Auth::user()){
        return redirect("admin/login");
    }
    $check=DB::table("books")->where("isclear",1)->first();
    if(!$check){
        $request->validate([
            "name"=>"required",
            "nic"=>"required|unique:books,nic",
            "email"=>"required|unique:books,email",
            "nop"=>"required",
            "package"=>"required",
            "phone"=>"required|gte:14",
            'splace'=>"required",
            "date"=>"required",
            'rb'=>"required"
        ]);
    }
    $request->validate([
        "name"=>"required",
        "nic"=>"required",
        "email"=>"required",
        "nop"=>"required",
        "package"=>"required",
        "phone"=>"required|gte:14",
        'splace'=>"required",
        "date"=>"required",
        'rb'=>"required"
    ]);


    $book=new Book();
    $book->name=$request->name;
    $book->nic=$request->nic;
    $book->email=$request->email;
    $book->nop=$request->nop;
    $book->date=$request->date;
    $book->location=$request->splace;
    $book->package=$request->package;
    $book->phone=$request->phone;
    $book->gender=$request->rb;
    $book->admins_id=Auth::user()->id;
    $book->admins_name=Auth::user()->name;
    $book->save();
    $aut=Auth::user()->id;
    $users=User::findorfail($aut);
    $use=$users->type;
    return redirect()->route('book-user',compact('use'));

}
public function forAdminformat(){
    if (!Auth::user()){
        return redirect("admin/login");
    }
    $aut=Auth::user()->id;
    $users=User::findorfail($aut);
    $use=$users->type;
    return view('format.adminmaster',compact('use'));
}
public function staffAccount(){
        $admins=DB::select('select * from `users` where type=1 or type=2 or type =3');

        $aut=Auth::user()->id;
        $users=User::findorfail($aut);
        $use=$users->type;

    if($use=='1'){
        $staffacc=User::all();
    }
    return view("admin.staffaccount",compact('staffacc',"use","admins"));

}
public function adminProfile(){
        return view("admin/adminprofile");
}
public function staffAccEdit(Request $request,$id){

       $user=User::findorfail($id);

        $aut=Auth::user()->id;
        $users=User::findorfail($aut);
        $use=$users->type;

       return view('admin.staffaccountdetail',compact('user',"use"));


}
public function staffupdate(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>"required",
            "type"=>"required",
        ]);
        $user=User::findorfail($request->id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->type=$request->type;
        $user->update();
       return redirect()->route('staff-account');

}
public function staffAccDelete($id){
     $user=User::findorfail($id);
     $user->delete();
     return redirect()->back();

}
}
