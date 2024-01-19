<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function (){
    return 'About Content';
});

Route::get('about/directions', function (){
    return 'About Directions';
});

Route::any('submit-form', function (){
    return 'Process Form';
});

Route::get('about/{theSubject}', function ($theSubject){
    return $theSubject.' moah here';
});

Route::get('about/classes/{theArt}/{thePrice}', function ($theArt, $thePrice){
    return "The Product: $theArt and $thePrice";
});

Route::get('where', function (){
   return \Illuminate\Support\Facades\Redirect::to('about/directions');
});
