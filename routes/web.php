<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticeController;
use App\Models\Gallery;

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
Route::get('/admission', function () {
    return view('frontend.admission');
});
Route::post('admission/submit', [AdmissionController::class, 'store'])->name('admission.submit');
Route::view('/teacher-info', 'frontend.teacher-info');
Route::view('/notice-board', 'frontend.notice');
Route::view('/photo-gallery', 'frontend.photo-gallery');
Route::view('/contact', 'frontend.contact');


Route::get('/receipt', [FrontController::class, 'getReceive']);
// Route::get('/test', function () {
//     return view('frontend.receive');
// });

Route::get('rand', function(){
    return 0;
});


// Bakcend Route Start
// Route::get('/backends', function(){
    //     return view('layouts.backend');
    // });
    Auth::routes();
    
    Route::middleware('auth')->group(function() {
        // Admin Page View 
        // Route::get('/add/photo/', [HomeController::class, 'addPhoto'])->name('add.photo');
        
        // Admision Related Route
        Route::get('/total/admission', [AdmissionController::class, 'index'])->name('total.admission');
        Route::get('/admission/edit/{id}', [AdmissionController::class, 'edit']);
        
        
        // Notice Publish
        Route::get('/add/notice', [NoticeController::class, 'create'])->name('add.notice');
        Route::get('/all/notice', [NoticeController::class, 'index'])->name('all.notice');
        Route::post('/notice/publish', [NoticeController::class, 'store'])->name('notice.publish');
        Route::get('/notice/edit/{id}', [NoticeController::class, 'edit']);
        Route::post('/notice/update/{id}', [NoticeController::class, 'update']);
        Route::get('/notice/delete/{id}', [NoticeController::class, 'destroy']);
        
        // Photo Gallery 
        Route::get('/add/photo/', [GalleryController::class, 'create'])->name('add.photo');
        Route::get('/all/gallery/', [GalleryController::class, 'index'])->name('all.photo');
        Route::post('/add/gallery/', [GalleryController::class, 'store'])->name('add.gallery');
        Route::get('/photo-gallery/edit/{id}', [GalleryController::class, 'edit']);
        Route::post('/update/gallery/{id}', [GalleryController::class, 'update']);
        Route::get('/photo-gallery/delete/{id}', [GalleryController::class, 'destroy']);
        
    });
    