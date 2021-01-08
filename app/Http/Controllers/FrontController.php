<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\Gallery;
use App\Models\Notice;
use Barryvdh\DomPDF\Facade as PDF;

class FrontController extends Controller
{
    //
    public function home()
    {
        $data = Notice::latest()->take(6)->get();
        return view('frontend.home', compact('data'));
    }
    
    public function about()
    {
        $data = Notice::latest()->take(6)->get();
        return view('frontend.about', compact('data'));
    }
    
    public function headMessage()
    {
        $data = Notice::latest()->take(6)->get();
        return view('frontend.head-message', compact('data'));        
    }

    public function admissionDetails()
    {
        $data = Notice::latest()->take(6)->get();
        return view('frontend.admission-details', compact('data'));        
    }

    public function noticeBoard()
    {
        $data = Notice::latest()->get();
        return view('frontend.notice', compact('data'));
    }

    public function photoGallery()
    {
        $data = Gallery::latest()->paginate(6);
        return view('frontend.photo-gallery', compact('data'));
    }

    // Class Six Student Data
    public function getClassSix()
    {
        return view('frontend/six');
    }
    
}

