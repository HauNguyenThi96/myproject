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
Route::get('/','HomeController@index')->name('homepage');

// Route::get('/', function () {
//     return view('homepage');
// })->name('homepage');
Route::get('tour',function(){
	return view('tour');
})->name('tour');
Route::get('hotel',function(){
	return view('hotel');
})->name('hotel');
Route::get('details-tour',function(){
	return view('details-tour');
})->name('details-tour');
Route::get('contact',function(){
	return view('contact');
})->name('contact');
Route::get('details',function(){
	return view('details');
})->name('details');
Route::get('login',function(){
	return view('login');
})->name('login');
Route::get('register',function(){
	return view('register');
})->name('register');
Route::get('promotion',function(){
	return view('promotion');
})->name('promotion');
Route::get('tour-region',function(){
	return view('tour-region');
})->name('tour-region');
Route::get('new',function(){
	return view('new');
})->name('new');
Route::get('new-details',function(){
	return view('news-details');
})->name('news.details');
Route::get('hotel-details',function(){
	return view('hotel-details');
})->name('hotel.details');