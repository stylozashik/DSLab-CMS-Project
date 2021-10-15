<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class HomeAboutOneController extends SuperAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $this->AdminCheckAuth();
        return view('backend.about_one.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $about_one = new \App\Models\HomeAboutOne ;

        //validate form data field
        $validatedData = $request->validate([
            'home_about_one_title' => 'required',
            'home_about_one_description' => 'required',
        ]);

        $about_one->home_about_one_title = request('home_about_one_title');
        $about_one->home_about_one_description = request('home_about_one_description');

        $about_one->save();

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
    public function edit()
    {
        $this->AdminCheckAuth();
        $about_one = DB::table('home_about_ones')->latest()->first();
        return view('backend.about_one.edit',compact('about_one'));
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
        $this->AdminCheckAuth();
        $about_one = DB::table('home_about_ones')->latest()->first();
        $find_about_one = \App\Models\HomeAboutOne::findOrFail($about_one->home_about_one_id) ;

        //validate form data field
        $validatedData = $request->validate([
            'home_about_one_title' => 'required',
            'home_about_one_description' => 'required',
        ]);

        $find_about_one->home_about_one_title = request('home_about_one_title');
        $find_about_one->home_about_one_description = request('home_about_one_description');

        $find_about_one->save();

        return Redirect::to('/dashboard');
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

    // Funtions for image
    public function about_one_image(){
        $this->AdminCheckAuth();
        $b_image = DB::table('home_about_one_images')->latest()->first();
        return view('backend.about_one.image',compact('b_image'));
    }

    public function about_one_image_store(Request $request){
        $this->AdminCheckAuth();
        $image = new \App\Models\HomeAboutOneImage ;

        //validate form data field
        $validatedData = $request->validate([

            'home_about_one_image' => 'required', 
        ]);

        $image_file = $request->file('home_about_one_image');
        if($image_file){
            $imagename = 'About_one_Image' . time() . '.' . $image_file->getClientOriginalExtension();
            $image_path = $image_file->storeAs('media',$imagename);
            $image->home_about_one_image = $image_path ;
        }
        $image->save();

        return Redirect::to('/dashboard');
    }
}
