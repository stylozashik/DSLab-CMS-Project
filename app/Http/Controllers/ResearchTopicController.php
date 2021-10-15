<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ResearchTopicController extends SuperAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->AdminCheckAuth();

        $topics = \App\Models\ResearchTopic::orderBy('id', 'DESC')->get()->all();
        return view('backend.research' , compact('topics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->AdminCheckAuth();

        return view('backend.research-topic.add');
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

        #dd('I am hitting');
        $topic = new \App\Models\ResearchTopic ;

        //validate form data field
        $validatedData = $request->validate([
            'title' => 'required',
            'image' => 'required',
            'short_description' => 'required',
            'link' => 'required',
            
        ]);

        $topic->title = request('title');

        $image_file = $request->file('image');
        if($image_file){
            $imagename = 'Research_Topics' . time() . '.' . $image_file->getClientOriginalExtension();
            $image_path = $image_file->storeAs('media',$imagename);
            $topic->image = $image_path ;
        }

        $topic->short_description = request('short_description');
        $topic->link = request('link');

        $topic->save();

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
        $this->AdminCheckAuth();

        $find_topic = \App\Models\ResearchTopic::findOrFail($id) ;
        $find_topic->delete();
        return redirect('/dashboard/research-topic');
    }
}
