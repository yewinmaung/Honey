<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Room;
use App\Models\Town;
use App\Http\Requests\StoreTownRequest;
use App\Http\Requests\UpdateTownRequest;
use http\Env\Request;
use Illuminate\Support\Facades\DB;

class TownController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $towns=Town::all();
        $rooms=DB::select("select * from `rooms`");
        $hotels=Hotel::all();
        return view("admin/addtown",['towns'=>Town::paginate(3)],compact("rooms",'hotels'));
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
    public function store(\Illuminate\Http\Request $request)
    {

      $request->validate([
          'img'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
          "hotel"=>"required",
          "rtype"=>"required",
          'price'=>"required",

      ]);
      $hotel=new Town();
       if ($image = $request->file('img'))
        {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $hotel['img'] = "$profileImage";
        }
      $hotel->name=$request->hotel;
        $hotel->rtype=$request->rtype;
        $hotel->price=$request->price;


        $hotel->save();
        return redirect("admin/hotellist");

    }

    /**
     * Display the specified resource.
     */
    public function show(Town $town)
    {
        $towns=Town::all();
        $rooms=DB::select("select * from `rooms`");
        $hotels=Hotel::all();
       return view("admin/addtown",['towns'=>Town::paginate(3)],compact('rooms','hotels'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $town=Town::findorfail($id);
        $rooms=DB::select("select * from `rooms`");
        $hotels=Hotel::all();
        return view("admin/hoteldetail",compact("town","rooms",'hotels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(\Illuminate\Http\Request $request)
    {
        $request->validate([
            'img'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            "hotel"=>"required",
            "rtype"=>"required",
            'price'=>"required",

        ]);
        $hotel=Town::findorfail($request->id);

        if ($image = $request->file('img'))
        {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $hotel['img'] = "$profileImage";
        }
        $hotel->name=$request->hotel;
        $hotel->rtype=$request->rtype;
        $hotel->price=$request->price;

        $hotel->update();

      return redirect("admin/addtown")->withSuccess("Successful");
    }
   public function gust(){


        return view("admin/hotel",['hotels'=>Hotel::paginate(10)]);
   }
   public function gustInfo(\Illuminate\Http\Request $request){
        $request->validate([
            'img'=>"required",
            'hotel'=>"required",
            'loc'=>"required",
        ]);
       $hotel=new Hotel();
       if ($image = $request->file('img'))
       {
           $destinationPath = 'images/';
           $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
           $image->move($destinationPath, $profileImage);
           $hotel['img'] = "$profileImage";
       }
       $hotel->name=$request->hotel;
       $hotel->location=$request->loc;
       $hotel->save();
       return redirect()->back();
   }
   public function room(\Illuminate\Http\Request $request){
        $request->validate([
            "img"=>"required",
            'room'=>"required",
        ]);
        $room=new Room();
       if ($image = $request->file('img'))
       {
           $destinationPath = 'images/';
           $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
           $image->move($destinationPath, $profileImage);
           $room['img'] = "$profileImage";
       }
        $room->name=$request->room;
        $room->save();
       return redirect("admin/gust");
   }
    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
      $dtown=Town::findorfail($id);
      $dtown->delete();
       return redirect()->back();
    }
    public function gustroom(){
        $rooms=Room::all();
        $hotels=Hotel::all();
        return view("admin/room",["rooms"=>Room::paginate(5)]);
    }
    public function rdel($id){
        $rdel=Room::findorfail($id);
        $rdel->delete();
        return redirect("admin/room");
    }
    public function hotdel($id){
        $hotdel=Hotel::findorfail($id);
        $hotdel->delete();
        return redirect("admin/gust");
    }
}
