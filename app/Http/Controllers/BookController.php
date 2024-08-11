<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Book;
use App\Models\Package;
use App\Models\Post;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $package=Package::all();
        $blog=Post::paginate(3);
  return view("welcome",compact("package","blog"));
    }
 public function trip(){
        $restaurants=Restaurant::paginate(4);
        return view("user/bagan",compact("restaurants"));
 }
    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        if(!Auth::user()){
            return redirect()->route("login");
        }
        $package=Package::findorfail($id);
        $spackage=Package::all();
        return view("user.booking",compact("package","spackage"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Auth::user()){
            return redirect()->route("login");
        }

        $check=DB::table("books")->where("isclear",0)->first();
        if ($check){
            $request->validate([
                "name"=>"required",
                "nic"=>"required|unique:books,nic",
                "email"=>"required|unique:books,email",
                "nop"=>"required",
                "splace"=>"required",
                "package"=>"required",
                "phone"=>"required|gte:14",
                "date"=>"required",
                "rb"=>"required"
            ]);

        }
        $request->validate([
            "name"=>"required",
            "nic"=>"required",
            "email"=>"required",
            "nop"=>"required",
            "splace"=>"required",
            "package"=>"required",
            "phone"=>"required|gte:14",
            "date"=>"required",
            "rb"=>"required"
        ]);

        $book=new Book();
        $book->name=$request->name;
        $book->nic=$request->nic;
        $book->email=$request->email;
        $book->nop=$request->nop;
        $book->date=$request->date;

        $book->gender=$request->rb;
        $book->location=$request->splace;
        $book->package=$request->package;
        $book->phone=$request->phone;
        $book->users_id=Auth::user()->id;
        $book->save();
        return redirect()->route('user.ticket');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

        if (!Auth::user()){
            return redirect("login");
        }
        $id=Auth::user()->id;
        $users=DB::select('select * from users,books where users.id=books.users_id and users.id=:id',['id'=>$id]);

        return view('user.index',['books'=>$users]);


//        dd($id);


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
      return view("user/package");
    }
   public function blog(Request $request){
       $request->validate([
           "img"=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
           'title'=>"required",
           'dec'=>"required",
       ]);
       $post=new Post();
       if ($image = $request->file('img'))
       {
           $destinationPath = 'images/';
           $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
           $image->move($destinationPath, $profileImage);
           $post['img'] = "$profileImage";
       }
       $post->title=$request->title;
       $post->dec=$request->dec;
       $post->author=Auth::user()->name;
       $post->save();
       return redirect()->back();
   }
   public function pedit($id){
       $book=Post::findorfail($id);
      return view("admin/blogedit",compact("book"));
   }
   public function pupdate(Request $request){
        $request->validate([
            "img"=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'title'=>"required",
            'dec'=>"required",
        ]);
        $post=Post::findorfail($request->id);
       if ($image = $request->file('img'))
       {
           $destinationPath = 'images/';
           $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
           $image->move($destinationPath, $profileImage);
           $post['img'] = "$profileImage";
       }

       $post->title=$request->title;
       $post->dec=$request->dec;
       $post->author=Auth::user()->name;
       $post->update();
       return redirect()->route("dashboard");
   }
   public function postdelete($id){
       $book=Post::findorfail($id);
       $book->delete();
      return redirect("admin/dashboard");
   }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      $book=Book::findorfail($id);
      $book->delete();
      return redirect()->back();
    }
}
