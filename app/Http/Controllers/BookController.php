<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Book;
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

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("user.booking");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required",
            "nic"=>"required|unique:books,nic",
            "email"=>"required|unique:books,email",
            "nop"=>"required",
           "trip"=>"required",
            "package"=>"required",
            "phone"=>"required|gte:14",
            "date"=>"required",
            "hour"=>"required",
            "dp"=>"required",
            "minute"=>"required"

        ]);


        $book=new Book();
        $book->name=$request->name;
        $book->nic=$request->nic;
        $book->email=$request->email;
        $book->nop=$request->nop;
        $book->date=$request->date;
        $book->hour=$request->hour;
        $book->minute=$request->minute;
        $book->am_or_pm=$request->dp;
        $book->trip=$request->trip;
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
        $id=Auth::user()->id;
        $users=DB::select('select * from users,books where users.id=books.users_id and users.id=:id',['id'=>$id]);
      return view('user.index',['books'=>$users]);


//        dd($id);


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
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
