<?php

use App\Http\Controllers\AchivementController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\OnlineClassController;
use App\Http\Controllers\StudentController;
use App\Models\OnlineClass;

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
    
Route::get('/', [FrontController::class, 'home']);
Route::get('/about', [FrontController::class, 'about']);
Route::get('/head-message', [FrontController::class, 'headMessage']);
Route::get('/admission-details', [FrontController::class, 'admissionDetails']);
Route::view('/admission','frontend.admission');

Route::post('/admission/submit', [AdmissionController::class, 'store'])->name('admission.submit');
Route::get('/online-class', [FrontController::class, 'online_class'])->name('online.class');
Route::view('/teacher-info', 'frontend.teacher-info');
Route::get('/notice-board', [FrontController::class, 'noticeBoard']);
Route::get('/photo-gallery', [FrontController::class, 'photoGallery']);
Route::view('/contact', 'frontend.contact');
Route::get('/achivement', [FrontController::class, 'achivement']);
// class wise student view
Route::get('/class-six', [FrontController::class, 'getClassSix']);
Route::get('/class-seven', [FrontController::class, 'getClassSeven']);
Route::get('/class-eight', [FrontController::class, 'getClassEight']);
Route::get('/class-nine', [FrontController::class, 'getClassNine']);
Route::get('/class-ten', [FrontController::class, 'getClassTen']);


// Bakcend Route Start
Auth::routes();
Route::middleware('auth')->group(function() {
    
    Route::get('/backends', function(){
        return view('layouts.backend');
    });

    // Admision Related Route
    Route::get('/total/admission', [AdmissionController::class, 'index'])->name('total.admission');
    Route::get('/admission/edit/{id}', [AdmissionController::class, 'edit']);
    Route::post('/admission/update/', [AdmissionController::class, 'update'])->name('admission.update');
    Route::get('/admission/delete/{id}', [AdmissionController::class, 'delete']);
    Route::get('/today/admission/', [AdmissionController::class, 'todayAdmission'])->name('today.admission');
    
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

    // Student Informatin
    Route::get('/total/student/', [StudentController::class, 'index'])->name('total.student');
    Route::get('/add/student', [StudentController::class, 'create'])->name('add.student');
    Route::post('/student/store/', [StudentController::class, 'store'])->name('student.store');
    Route::get('/student/edit/{id}', [StudentController::class, 'edit']);
    Route::post('/student/update/', [StudentController::class, 'update'])->name('student.update');
    Route::get('/student/delete/{id}', [StudentController::class, 'delete']);

    // class lsit
    Route::get('/class/six/', [StudentController::class, 'class_six'])->name('class.six');
    Route::get('/class/seven/', [StudentController::class, 'class_seven'])->name('class.seven');
    Route::get('/class/eight/', [StudentController::class, 'class_eight'])->name('class.eight');
    Route::get('/class/nine/', [StudentController::class, 'class_nine'])->name('class.nine');
    Route::get('/class/ten/', [StudentController::class, 'class_ten'])->name('class.ten');

    // achivement
    Route::get('/all/achivemet/', [AchivementController::class, 'index'])->name('all.achivement');
    Route::get('/school/achivement/', [AchivementController::class, 'create'])->name('add.achivement');
    Route::post('/add/achive/', [AchivementController::class, 'store'])->name('add.achive');
    Route::get('/achivement/edit/{id}', [AchivementController::class, 'edit']);
    Route::post('/update/achive/{id}', [AchivementController::class, 'update']);
    Route::get('/achivement/delete/{id}', [AchivementController::class, 'destroy']);

    // Online Class
    Route::get('/online/class/all/', [OnlineClassController::class, 'index'])->name('all.class');
    Route::get('/online/class/add/', [OnlineClassController::class, 'create'])->name('add.class');
    Route::post('/online/class/add/', [OnlineClassController::class, 'store'])->name('add.online.class');
    Route::get('/on-class/edit/{id}', [OnlineClassController::class, 'edit']);
    Route::post('/online/class/update', [OnlineClassController::class, 'update'])->name('online.class.update');
    Route::get('/on-class/delete/{id}', [OnlineClassController::class, 'delete']);
});
    