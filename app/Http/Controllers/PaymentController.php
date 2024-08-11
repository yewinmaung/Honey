<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Package;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
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

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)

    {
        if (!Auth::user()){
            return redirect("admin/login");
        }
        $book=Book::findorfail($id);
        $aut=Auth::user()->id;
        $users=User::findorfail($aut);
        $use=$users->type;
        $bookU=Book::count();
        $packages=Package::all();
       return view('admin.bookingUpdate',compact('bookU','book','use','packages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {

        if (!Auth::user()){
            return redirect("admin/login");
        }
        $check=DB::table("books")->where("isclear",1)->first();
    if(!$check){
    $request->validate([
        "name"=>"required",
        "nic"=>"required|unique:books,nic,$id",
        "email"=>"required|unique:books,email,$id",
        "nop"=>"required",
        "splace"=>"required",
        "package"=>"required",
        "phone"=>"required|gte:14",
        "date"=>"required",
        "paym"=>"required",
        ]);

}
        $request->validate([
            "name"=>"required",

            "nop"=>"required",
            "splace"=>"required",
            "package"=>"required",
            "phone"=>"required|gte:14",
            "date"=>"required",
            "paym"=>"required",

        ]);


        $book=Book::findorfail($id);
        $book->name=$request->name;
        $book->nic=$request->nic;
        $book->email=$request->email;
        $book->nop=$request->nop;
        $book->date=$request->date;
        $book->location=$request->splace;
        $book->package=$request->package;
        $book->phone=$request->phone;
        $book->isclear=$request->paym;
        $aut=Auth::user()->id;

        $book->admins_id=$aut;
        $book->admins_name=Auth::user()->name;
        $book->update();
        return redirect()->route('book-user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
