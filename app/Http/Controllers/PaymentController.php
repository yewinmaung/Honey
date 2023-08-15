<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    {   $book=Book::findorfail($id);
        $aut=Auth::user()->id;
        $users=User::findorfail($aut);
        $use=$users->type;
        $bookU=Book::count();
       return view('admin.bookingUpdate',compact('bookU','book','use'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            "name"=>"required",
            "nic"=>"required|unique:books,nic,$id",
            "email"=>"required|unique:books,email,$id",
            "nop"=>"required",
            "trip"=>"required",
            "package"=>"required",
            "phone"=>"required|gte:14",
            "date"=>"required",
            "hour"=>"required",
            "dp"=>"required",
            "minute"=>"required",
            "paym"=>"required",

        ]);
        $book=Book::findorfail($id);
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
        $book->isclear=$request->paym;
        $book->admins_id=Auth::user()->id;
        $book->admins_name=Auth::user()->name;
        $book->update();

        $aut=Auth::user()->id;
        $users=User::findorfail($aut);
        $use=$users->type;
        return redirect()->route('book-user',compact('use'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
