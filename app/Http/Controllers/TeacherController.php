<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class TeacherController extends SuperAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->AdminCheckAuth();

        $teachers = DB::table('our_teachers')->get()->all();
        return view('backend.teacher' , compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->AdminCheckAuth();

        return view('backend.teacher.add');
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

        $teacher = new \App\Models\OurTeacher ;

        //validate form data field
        $validatedData = $request->validate([
            'Name' => 'required',
            'Designation' => 'required',
            'Facebook' => 'required',
            'Twitter' => 'required',
            'Linkedin' => 'required',
            'Image' => 'required',
        ]);

        $teacher->Name = request('Name');
        $teacher->Designation = request('Designation');
        $teacher->Facebook = request('Facebook');
        $teacher->Twitter = request('Twitter');
        $teacher->Linkedin = request('Linkedin');

        $image_file = $request->file('Image');
        if($image_file){
            $imagename = request('Name') . time() . '.' . $image_file->getClientOriginalExtension();
            $image_path = $image_file->storeAs('media',$imagename);
            $teacher->Image = $image_path ;
        }
        

        $teacher->save();

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
