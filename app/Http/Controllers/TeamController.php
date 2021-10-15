<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class TeamController extends SuperAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->AdminCheckAuth();


        $teams = DB::table('teams')->get()->all();
        return view('backend.team' , compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->AdminCheckAuth();

        return view('backend.team.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->AdminCheckAuth();

        $team = new \App\Models\Team ;

        //validate form data field
        $validatedData = $request->validate([
            'Name' => 'required',
            'Designation' => 'required',
            'Facebook' => 'required',
            'Twitter' => 'required',
            'Linkedin' => 'required',
            'Image' => 'required',
        ]);

        $team->Name = request('Name');
        $team->Designation = request('Designation');
        $team->Facebook = request('Facebook');
        $team->Twitter = request('Twitter');
        $team->Linkedin = request('Linkedin');

        $image_file = $request->file('Image');
        if($image_file){
            $imagename = request('Name') . time() . '.' . $image_file->getClientOriginalExtension();
            $image_path = $image_file->storeAs('media',$imagename);
            $team->Image = $image_path ;
        }
        

        $team->save();

        return Redirect::to('/dashboard');
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
