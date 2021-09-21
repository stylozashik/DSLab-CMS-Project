<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class HomeAboutTwoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.about_two.add');
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
        $about_two = new \App\Models\HomeAboutTwo ;

        //validate form data field
        $validatedData = $request->validate([
            'home_about_two_title' => 'required',
            'home_about_two_description' => 'required',
        ]);

        $about_two->home_about_two_title = request('home_about_two_title');
        $about_two->home_about_two_description = request('home_about_two_description');

        $about_two->save();

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
        $about_two = DB::table('home_about_twos')->latest()->first();
        return view('backend.about_two.edit',compact('about_two'));
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

    // Funtions for image
    public function about_two_image(){
        $b_image = DB::table('home_about_two_images')->latest()->first();
        return view('backend.about_two.image',compact('b_image'));
    }

    public function about_two_image_store(Request $request){
        $image = new \App\Models\HomeAboutTwoImage ;

        //validate form data field
        $validatedData = $request->validate([

            'home_about_two_image' => 'required', 
        ]);

        $image_file = $request->file('home_about_two_image');
        if($image_file){
            $imagename = 'About_two_Image' . time() . '.' . $image_file->getClientOriginalExtension();
            $image_path = $image_file->storeAs('media',$imagename);
            $image->home_about_two_image = $image_path ;
        }
        $image->save();

        return Redirect::to('/dashboard');
    }
}
