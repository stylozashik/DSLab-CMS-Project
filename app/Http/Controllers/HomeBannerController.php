<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class HomeBannerController extends SuperAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->AdminCheckAuth();
        return view('backend.banner');
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
        $banner = new \App\Models\HomeBannerContent ;

        //validate form data field
        $validatedData = $request->validate([
            'home_banner_content_title_up' => 'required',
            'home_banner_content_title_middle' => 'required',
            'home_banner_content_title_down' => 'required',
            'home_banner_content_subtitle' => 'required',
        ]);

        $banner->home_banner_content_title_up = request('home_banner_content_title_up');
        $banner->home_banner_content_title_middle = request('home_banner_content_title_middle');
        $banner->home_banner_content_title_down = request('home_banner_content_title_down');
        $banner->home_banner_content_subtitle = request('home_banner_content_subtitle');

        $banner->save();

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
        $banner = DB::table('home_banner_content_table')->latest()->first();
        return view('backend.edit_banner_content',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->AdminCheckAuth();
        $banner = DB::table('home_banner_content_table')->latest()->first();
        $find_banner = \App\Models\HomeBannerContent::findOrFail($banner->home_banner_content_id) ;

        //validate form data field
        $validatedData = $request->validate([
            'home_banner_content_title_up' => 'required',
            'home_banner_content_title_middle' => 'required',
            'home_banner_content_title_down' => 'required',
            'home_banner_content_subtitle' => 'required',
        ]);

        $find_banner->home_banner_content_title_up = request('home_banner_content_title_up');
        $find_banner->home_banner_content_title_middle = request('home_banner_content_title_middle');
        $find_banner->home_banner_content_title_down = request('home_banner_content_title_down');
        $find_banner->home_banner_content_subtitle = request('home_banner_content_subtitle');

        $find_banner->save();

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

    public function banner_image(){
        $this->AdminCheckAuth();
        $b_image = DB::table('home_banner_image_table')->latest()->first();
        return view('backend.banner_image',compact('b_image'));
    }

    public function banner_image_store(Request $request){
        $this->AdminCheckAuth();

        $image = new \App\Models\HomeBannerImage ;

        //validate form data field
        $validatedData = $request->validate([

            'home_banner_image_url' => 'required', 
        ]);

        $image_file = $request->file('home_banner_image_url');
        if($image_file){
            $imagename = 'Banner_Image' . time() . '.' . $image_file->getClientOriginalExtension();
            $image_path = $image_file->storeAs('media',$imagename);
            $image->home_banner_image_url = $image_path ;
        }
        $image->save();

        return Redirect::to('/dashboard');
    }
}
