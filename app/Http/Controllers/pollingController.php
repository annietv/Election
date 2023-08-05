<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\polling_unit;

class pollingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $polling_unit=DB::select("SELECT * FROM polling_units");
        return view("src.polling-unit",["polling_unit"=>$polling_unit]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("src.addPolling");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post=new polling_unit();
        $post->polling_unit_id=$request->polling_unit_id;
        $post->ward_id=$request->ward_id;
        $post->lga_id=$request->lga_id;
        $post->uniquewardid=$request->uniquewardid;
        $post->polling_unit_number=$request->polling_unit_number;
        $post->polling_unit_name=$request->polling_unit_name;
        $post->polling_unit_description=$request->polling_unit_description;
        $post->lat=$request->lat;
        $post->long=$request->long;
        $post->save();
        return redirect()->back()->with('successs', 'Polling Unit Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}