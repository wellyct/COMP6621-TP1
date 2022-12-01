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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/trainer', function () {
    return view('/trainer', [
        "title" => "Trainer"
    ]);
});

Route::get('/course', function () {
    return view('course', [
        "title" => "Course"
    ]);
});

Route::get('/fleet', function () {
    return view('fleet', [
        "title" => "Fleet"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about',
        'nim'=> '2402005584',
        'name' => "Welly Yanto",
        'email' => 'welly.yanto001@binus.ac.id',
        'image' => 'welly.jpg'
    ]);
});

