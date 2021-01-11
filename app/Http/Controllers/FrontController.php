<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\Gallery;
use App\Models\Notice;
use App\Models\Student;
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
        $students = Student::where('class', 6)->get();   
        return view('frontend.student.six', compact('students'));
    }    
    // Class Seven Student Data
    public function getClassSeven()
    {
        $students = Student::where('class', 7)->get();   
        return view('frontend.student.seven', compact('students'));
    }
    // Class Eight Student Data
    public function getClassEight()
    {
        $students = Student::where('class', 8)->get();   
        return view('frontend.student.eight', compact('students'));
    }
    // Class Nine Student Data
    public function getClassNine()
    {
        $students = Student::where('class', 9)->get();   
        return view('frontend.student.nine', compact('students'));
    }
    // Class Ten Student Data
    public function getClassTen()
    {
        $students = Student::where('class', 10)->get();   
        return view('frontend.student.ten', compact('students'));
    }
    
}

