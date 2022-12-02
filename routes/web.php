<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FleetController;
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

Route::get('/trainer', [TrainerController::class, 'index']);
Route::get('/course', [CourseController::class, 'index']);
Route::get('/fleet', [FleetController::class, 'index']);

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

