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
    $title = "welcome";
    return view('welcome',compact('title'));
})->name('home');


Route::get('/about', function () {
    $title = "about";
    return view('welcome',compact('title'));
})->name('about');



Route::get('/contact', function () {
    $title = "contact";
    return view('welcome',compact('title'));
})->name('contact');


