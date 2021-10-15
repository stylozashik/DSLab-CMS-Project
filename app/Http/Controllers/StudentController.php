<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class StudentController extends SuperAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->AdminCheckAuth();

        $students = DB::table('our_students')->get()->all();
        return view('backend.student' , compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->AdminCheckAuth();

        return view('backend.student.add');
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

        $student = new \App\Models\OurStudent ;

        //validate form data field
        $validatedData = $request->validate([
            'Name' => 'required',
            'Facebook' => 'required',
            'Twitter' => 'required',
            'Linkedin' => 'required',
            'Image' => 'required',
        ]);

        $student->Name = request('Name');
        $student->Facebook = request('Facebook');
        $student->Twitter = request('Twitter');
        $student->Linkedin = request('Linkedin');

        $image_file = $request->file('Image');
        if($image_file){
            $imagename = request('Name') . time() . '.' . $image_file->getClientOriginalExtension();
            $image_path = $image_file->storeAs('media',$imagename);
            $student->Image = $image_path ;
        }
        

        $student->save();

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
