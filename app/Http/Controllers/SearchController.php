<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
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
        $aut=Auth::user()->id;
        $users= \Illuminate\Foundation\Auth\User::findorfail($aut);
        $use=$users->type;
         if($request){
             $search_text=$request->search;
             $books=Book::where('nic','Like',"%".$search_text."%")->get();
             return view('admin.booking',compact('books',"bookU",'use'))->with("Found");
         }
         else{
             return view('admin.booking',['books'=>Book::all()],compact("bookU",'use'));
         }
       }
       public function staffaccsearch(Request $request){
           $aut=Auth::user()->id;
           $users= \Illuminate\Foundation\Auth\User::findorfail($aut);
           $use=$users->type;

           if($request->filled('search')){

               $search_text=$request->search;
               $admins=User::where('id','Like',"%".$search_text."%")->get();
           }
           else{
               $admins=DB::select('select * from `users` where type=1 or type=2 or type =3');
           }
           return view('admin.staffaccount', compact('admins', 'use'));
       }

       public function staffsearch(Request $request){
           $bookU=Book::count();
           $aut=Auth::user()->id;
           $users= \Illuminate\Foundation\Auth\User::findorfail($aut);
           $use=$users->type;
           if($request->filled("search")){
               $search_text=$request->search;
               $admins=Admin::where('nic','Like',"%".$search_text."%")->paginate(3);
           }
           else{
              $admins=Admin::paginate(5);
                }
           return view('admin.staff',compact('admins',"bookU",'use'))->with("Found");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$id)
    {

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
