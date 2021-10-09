<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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

    public function research_area(){
        $brand = DB::table('logos')->latest()->first();
        return view('frontend.research_area' , compact('brand'));
    }
    
    public function research_topic(){
        $brand = DB::table('logos')->latest()->first();
        return view('frontend.research_topic' , compact('brand'));
    }

    public function research_publication(){
        $brand = DB::table('logos')->latest()->first();
        return view('frontend.research_publication' , compact('brand'));
    }

    public function team(){
        $brand = DB::table('logos')->latest()->first();
        $teams = DB::table('teams')->get()->all();
        return view('frontend.team' , compact('brand' , 'teams'));
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

    
}
