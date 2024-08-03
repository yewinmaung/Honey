<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateRestaurantRequest;



class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view("admin/restaurant",["restaurants"=>Restaurant::paginate(10)]);
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
        $request->validate([
            'img'=>"required",
            'name'=>"required",
            'link'=>"required",
        ]);
        $hotel=new Restaurant();
        if ($image = $request->file('img'))
        {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $hotel['img'] = "$profileImage";
        }
        $hotel->name=$request->name;
        $hotel->loc=$request->link;
        $hotel->save();

        return redirect()->route("restau")->withSuccess("Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
       return $request;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $restaurant=Restaurant::findorfail($id);
        return view("admin/editrestaurant",compact("restaurant"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'img'=>"required",
            'name'=>"required",
            'link'=>"required",
        ]);
        $hotel=Restaurant::findorfail($request->id);
        if ($image = $request->file('img'))
        {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $hotel['img'] = "$profileImage";
        }
        $hotel->name=$request->name;
        $hotel->loc=$request->link;
        $hotel->update();
        return redirect()->route("restau");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      $rest=Restaurant::findorfail($id);
      $rest->delete();
      return redirect()->back();
    }
}
