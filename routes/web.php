<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great |
*/
Route::get('book',function()  {
	return view('book'); //book.blade.php
});

Route::get('create',function(){
	return view('create'); // create.blade.php
});


Route::get('/',function){
	return view('/') //asena.blade.php
};




