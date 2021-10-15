<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class HomeController extends Controller
{
    public function home(){
        $brand = DB::table('logos')->latest()->first();
        $banner = DB::table('home_banner_content_table')->latest()->first();
        $banner_image = DB::table('home_banner_image_table')->latest()->first();
        $about_one = DB::table('home_about_ones')->latest()->first();
        $about_one_image = DB::table('home_about_one_images')->latest()->first();
        $about_two = DB::table('home_about_twos')->latest()->first();
        $about_two_image = DB::table('home_about_two_images')->latest()->first();
        $works = DB::table('work_counters')->latest()->first();


        
        return view('frontend.home' , compact(
            'brand',
            'banner',
            'banner_image',
            'about_one',
            'about_one_image',
            'about_two',
            'about_two_image',
            'works',
        ));
    }

    public function about(){
        $brand = DB::table('logos')->latest()->first();
        return view('frontend.about' , compact('brand'));
    }


    
    public function research_topic(){
        $brand = DB::table('logos')->latest()->first();
        $topics = \App\Models\ResearchTopic::orderBy('id', 'DESC')->get()->all();
        return view('frontend.research_topic' , compact('brand' , 'topics'));
    }

    public function research_publication(){
        $brand = DB::table('logos')->latest()->first();
        return view('frontend.research_publication' , compact('brand'));
    }

    public function team(){
        $brand = DB::table('logos')->latest()->first();
        $teachers = DB::table('our_teachers')->get()->all();
        $teams = DB::table('teams')->get()->all();
        $students = DB::table('our_students')->get()->all();
        return view('frontend.team' , compact('brand' , 'teams' , 'teachers' , 'students'));
    }

    public function events(){
        $brand = DB::table('logos')->latest()->first();
        return view('frontend.events' , compact('brand'));
    }

    public function resources(){
        $brand = DB::table('logos')->latest()->first();
        return view('frontend.resources' , compact('brand'));
    }

    public function contact(){
        $brand = DB::table('logos')->latest()->first();
        return view('frontend.contact' , compact('brand'));
    }

    public function contact_store(Request $request){
        $contact = new \App\Models\Contact ;

        //validate form data field
        $validatedData = $request->validate([
            'Name' => 'required',
            'Email' => 'required',
            'Subject' => 'required',
            'Phone' => 'required',
            'Message' => 'required',
        ]);

        $contact->Name = request('Name');
        $contact->Email = request('Email');
        $contact->Subject = request('Subject');
        $contact->Phone = request('Phone');
        $contact->Message = request('Message');

        $contact->save();
        Session::put('notify','Message send successfully.');
        return Redirect::to('/contact');
    }

    
}
