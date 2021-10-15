<?php

use Illuminate\Support\Facades\Route;


#Frontend Routes
Route::get('/', "HomeController@home");
Route::get('/about', "HomeController@about");
Route::get('/research-area', "HomeController@research_area");
Route::get('/research-topic', "HomeController@research_topic");
Route::get('/research-publication', "HomeController@research_publication");
Route::get('/team', "HomeController@team");
Route::get('/events', "HomeController@events");
Route::get('/resources', "HomeController@resources");
Route::get('/contact', "HomeController@contact");
Route::post('/contact/store', "HomeController@contact_store");

// Admin login
Route::get('/admin-login','AdminController@login');
Route::post('/admin-data','AdminController@admin_data');

// Admin logout
Route::get('/admin-logout','SuperAdminController@logout');

// Admin Profile
Route::get('/dashboard/profile/admin','SuperAdminController@admin_profile');
Route::patch('/dashboard/profile/admin/update','SuperAdminController@update_admin_profile');

#Backend Routes
Route::get('/dashboard', "SuperAdminController@index");

// Manage Brand Logo
Route::get('/dashboard/logo','LogoController@index');
Route::post('/dashboard/logo/store','LogoController@store');

// Manage Hero Banner Section
Route::get('/dashboard/banner','HomeBannerController@index');
Route::post('/dashboard/banner/store','HomeBannerController@store');
Route::get('/dashboard/banner/edit','HomeBannerController@edit');
Route::patch('/dashboard/banner/update','HomeBannerController@update');

// Manage Hero Banner Image
Route::get('/dashboard/banner/image','HomeBannerController@banner_image');
Route::post('/dashboard/banner/image/store','HomeBannerController@banner_image_store');

// Manage About One Section
Route::get('/dashboard/about/one/add','HomeAboutOneController@index');
Route::post('/dashboard/about/one/store','HomeAboutOneController@store');
Route::get('/dashboard/about/one/edit','HomeAboutOneController@edit');
Route::patch('/dashboard/about/one/update','HomeAboutOneController@update');

// Manage About One Image
Route::get('/dashboard/about/one/image','HomeAboutOneController@about_one_image');
Route::post('/dashboard/about/one/image/store','HomeAboutOneController@about_one_image_store');

// Manage About Two Section
Route::get('/dashboard/about/two/add','HomeAboutTwoController@index');
Route::post('/dashboard/about/two/store','HomeAboutTwoController@store');
Route::get('/dashboard/about/two/edit','HomeAboutTwoController@edit');
Route::patch('/dashboard/about/two/update','HomeAboutTwoController@update');

// Manage About Two Image
Route::get('/dashboard/about/two/image','HomeAboutTwoController@about_two_image');
Route::post('/dashboard/about/two/image/store','HomeAboutTwoController@about_two_image_store');

// Manage Team Section
Route::get('/dashboard/team','TeamController@index');
Route::get('/dashboard/team/add','TeamController@create');
Route::post('/dashboard/team/add/store','TeamController@store');
Route::get('/dashboard/team/{brand}/edit','TeamController@edit');
Route::patch('/dashboard/team/{brand}','TeamController@update');
Route::delete('/dashboard/team/{brand}','TeamController@destroy');
Route::get('/dashboard/team/{brand}','TeamController@show');

// Manage Teachers Section
Route::get('/dashboard/teacher','TeacherController@index');
Route::get('/dashboard/teacher/add','TeacherController@create');
Route::post('/dashboard/teacher/add/store','TeacherController@store');
Route::get('/dashboard/teacher/{brand}/edit','TeacherController@edit');
Route::patch('/dashboard/teacher/{brand}','TeacherController@update');
Route::delete('/dashboard/teacher/{brand}','TeacherController@destroy');
Route::get('/dashboard/teacher/{brand}','TeacherController@show');

// Manage Students Section
Route::get('/dashboard/student','StudentController@index');
Route::get('/dashboard/student/add','StudentController@create');
Route::post('/dashboard/student/add/store','StudentController@store');
Route::get('/dashboard/student/{brand}/edit','StudentController@edit');
Route::patch('/dashboard/student/{brand}','StudentController@update');
Route::delete('/dashboard/student/{brand}','StudentController@destroy');
Route::get('/dashboard/student/{brand}','StudentController@show');

// Manage works Section
Route::get('/dashboard/works','WorkCountController@index');
Route::get('/dashboard/works/add','WorkCountController@create');
Route::post('/dashboard/works/add/store','WorkCountController@store');


// Manage contact Section
Route::get('/dashboard/messages','ContactController@index');
Route::delete('/dashboard/messages/{Contact}','ContactController@destroy');


// Manage research topics Section
Route::get('/dashboard/research-topic','ResearchTopicController@index');
Route::get('/dashboard/research-topic/add','ResearchTopicController@create');
Route::post('/dashboard/research-topic/add/store','ResearchTopicController@store');
Route::get('/dashboard/research-topic/{brand}/edit','ResearchTopicController@edit');
Route::patch('/dashboard/research-topic/{brand}','ResearchTopicController@update');
Route::delete('/dashboard/research-topic/{brand}','ResearchTopicController@destroy');
Route::get('/dashboard/research-topic/{brand}','ResearchTopicController@show');