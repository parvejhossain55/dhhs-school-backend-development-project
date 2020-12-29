<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

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
    return view('frontend.home');
});
    
Route::view('/about', 'frontend.about');
Route::view('/head-message', 'frontend.head-message');
Route::view('/admission-details', 'frontend.admission-details');
Route::view('/admission', 'frontend.admission');
Route::view('/teacher-info', 'frontend.teacher-info');
Route::view('/notice-board', 'frontend.notice');
Route::view('/photo-gallery', 'frontend.photo-gallery');
Route::view('/contact', 'frontend.contact');



// Bakcend Route Start
Route::get('/backends', function(){
    return view('layouts.backend');
});

Auth::routes();


Route::middleware('auth')->group(function() {

    // Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/total/admission', [HomeController::class, 'create'])->name('total.admission');
    Route::get('/add/notice', [HomeController::class, 'addNotice'])->name('add.notice');
    Route::get('/add/photo', [HomeController::class, 'addPhoto'])->name('add.photo');

});
