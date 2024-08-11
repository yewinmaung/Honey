<?php

namespace App\Http\Controllers;

use App\Models\Pagoda;
use App\Http\Requests\StorePagodaRequest;
use App\Http\Requests\UpdatePagodaRequest;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\DB;

class PagodaController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePagodaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(\Illuminate\Http\Request $request)
    {
        $id=$request->id;


        if ($id==1){
            $pagoda=Pagoda::findorfail($id);
            return view("user/pagodadetail",compact("pagoda"));
        }
        elseif ($id==2){
            $pagoda=Pagoda::findorfail($id);
            return view("user/pagodadetail2",compact("pagoda"));
        }
        elseif ($id==3){
            $pagoda=Pagoda::findorfail($id);
            return view("user/pagodadetail3",compact("pagoda"));
        }
        elseif ($id==4){
            $pagoda=Pagoda::findorfail($id);
            return view("user/pagodadetail4",compact("pagoda"));
        }


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pagoda $pagoda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePagodaRequest $request, Pagoda $pagoda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pagoda $pagoda)
    {
        //
    }
}
