<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
  
    return view('welcome');
});

Route::get('/about',function(){
    return view("about"); 
});

Route::get('/contactfghh',function(){
    return view("contact"); //blade file name contact
})->name('contact.us');

//using middlwaree
Route::get('/countrydasdasd',function(){
    return view("country"); 
})->middleware('country'); //middleware name registerd in karnel