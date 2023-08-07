<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view("admin.booking");

        //   $search_text=$_GET['search'];
//   $products=Admin::where('name','Like',"%".$search_text."%");
//   return $products;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }
    public function search(Request $request){
        $bookU=Book::count();
         if($request){
             $search_text=$request->search;
             $books=Book::where('nic','Like',"%".$search_text."%")->get();
             return view('admin.booking',compact('books',"bookU"))->with("Found");
         }
         else{
             return view('admin.booking',['books'=>Book::all()],compact("bookU"));
         }
       }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
