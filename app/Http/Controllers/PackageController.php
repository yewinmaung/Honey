<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Package;
use App\Http\Requests\StorePackageRequest;
use App\Http\Requests\UpdatePackageRequest;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Auth::user()){
            return redirect("admin/login");
        }
        $aut=Auth::user()->id;
        $users= \Illuminate\Foundation\Auth\User::findorfail($aut);
        $use=$users->type;
        $rooms=DB::select("select * from `rooms`");
        $hotels=Hotel::all();
        return view("adminauth.registration",compact('use','rooms','hotels'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


       $request->validate([
           'name'=>"required",
           'img'=>"required",
           'price'=>'required',
           'hotel'=>'required',
           'rtype'=>'required',
           'nop'=>"required",
           'dec'=>'required'
       ]);
        $package=new Package();
        $package->name=$request->name;
        if ($image = $request->file('img'))
        {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $package['img'] = "$profileImage";
        }
        $package->price=$request->price;
        $package->hotel=$request->hotel;
        $package->room=$request->rtype;
        $package->nop=$request->nop;
        $package->dec=$request->dec;
        $package->save();
        return redirect("admin/packages")->withSuccess("Successful");
    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        if (!Auth::user()){
            return redirect("admin/login");
        }
      $packages=Package::all();
        $aut=Auth::user()->id;
        $users= \Illuminate\Foundation\Auth\User::findorfail($aut);
        $use=$users->type;

      return view("admin/staff",compact("packages"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if (!Auth::user()){
            return redirect("admin/login");
        }
        $package=Package::findorfail($id);
        $hotel=Hotel::all();
        $room=Room::all();
        return view("admin/packagedetail",compact("package","hotel","room"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if (!Auth::user()){
            return redirect("admin/login");
        }
    $request->validate([
       "name"=>"required",
       "img"=>"required",
       "price"=>"required",
       "hotel"=>"required",
        "rtype"=>"required",
        "nop"=>"required",
        "dec"=>"required",

    ]);

    $package=Package::findorfail($request->id);
        if ($image = $request->file('img'))
        {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $package['img'] = "$profileImage";
        }
        $package->name=$request->name;
        $package->price=$request->price;
        $package->hotel=$request->hotel;
        $package->room=$request->rtype;
        $package->nop=$request->nop;
        $package->dec=$request->dec;
        $package->update();
        return redirect("admin/packagelist");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function pdel($id){
        $package=Package::findorfail($id);
        $package->delete();
        return redirect("admin/packagelist");
    }

    public function destroy(Package $package)
    {
        //
    }
}
