<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\announcedPuResult;

class partyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parties=DB::table("party")->get();
        return view("src.allParties",["parties"=>$parties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("src.storeParty");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post=new announcedPuResult();
        $post->result_id=$request->result_id;
        $post->polling_unit_uniqueid=$request->polling_unit_uniqueid;
        $post->party_abbreviation=$request->party_abbreviation;
        $post->party_score=$request->party_score;
        $post->entered_by_user=$request->entered_by_user;
        $post->save();
        return redirect()->back()->with('success', 'Post added Successfully');
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