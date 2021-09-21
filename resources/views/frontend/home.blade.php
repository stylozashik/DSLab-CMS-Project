@extends('frontend.lib.layout')

@section('main_content_frontend')

   @include('frontend.lib.homepage.hero_section')
   @include('frontend.lib.homepage.companies_section')
   @include('frontend.lib.homepage.about_section')
   @include('frontend.lib.homepage.service_section')
   @include('frontend.lib.homepage.choose_section')
   @include('frontend.lib.homepage.video_section')
   @include('frontend.lib.homepage.contact_section')
   @include('frontend.lib.homepage.event_section')
   @include('frontend.lib.homepage.motivational_section')

@endsection