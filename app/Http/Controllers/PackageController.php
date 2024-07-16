<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Package;
use App\Http\Requests\StorePackageRequest;
use App\Http\Requests\UpdatePackageRequest;
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
      return view("admin/staff");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePackageRequest $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        //
    }
}
