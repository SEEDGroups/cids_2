<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// tutorial routes
Route::get('/laracast', function(){
	return view('laracast');
});

// frontend routes
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/people', function () {
    return view('people');
});
Route::get('/research', function () {
    return view('research');
});
Route::get('/researchTopic', function(){
	return view('researchPaper');
});
Route::get('/gallery', function(){
	return view('gallery');
});
Route::get('/contact', function(){
	return view('contact');
});

/*
	 Admin routes
*/

	 //Home Management

	 	//dashboard

			Route::get('/dashboard', function(){
				return view('cms.pages.dashboard');
			});

		//info of cids

			Route::resource('/babout', 'AboutController');

		//type of employment
			Route::resource('/emp','EmploymentsController');

		//research
			Route::resource('/bresearch', 'ResearchController');



//Default routes
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
