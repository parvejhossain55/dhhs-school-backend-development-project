<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Support\Facades\DB;

// use Barryvdh\DomPDF\Facade as PDF;

class FrontController extends Controller
{
    //
    public function home()
    {
        $this->data['data'] = DB::table('notices')->latest()->take(6)->get();
        // $this->data['data'] = Notice::latest()->take(6)->get();
        return view('frontend.home', $this->data);
    }
    
    public function about()
    {
        $this->data['data'] = DB::table('notices')->latest()->take(6)->get();
        return view('frontend.about', $this->data);
    }

    public function sriti()
    {
        $this->data['data'] = DB::table('notices')->latest()->take(6)->get();
        return view('frontend.sriti', $this->data);
    }   

    public function headMessage()
    {
        $this->data['data'] = DB::table('notices')->latest()->take(6)->get();
        return view('frontend.head-message', $this->data);        
    }

    public function admissionDetails()
    {
        $this->data['data'] = Notice::latest()->take(6)->get();
        return view('frontend.admission-details', $this->data);        
    }

    public function noticeBoard()
    {
        $this->data['data'] = DB::table('notices')->latest()->take(6)->get();
        return view('frontend.notice', $this->data);
    }

    public function photoGallery()
    {
        $this->data['data'] = DB::table('galleries')->latest()->take(20)->get();
        return view('frontend.photo-gallery', $this->data);
    }

    // Class Six Student Data
    public function getClassSix()
    {
        $students = DB::table('students')->where('class', 6)->get();   
        return view('frontend.student.six', compact('students'));
    }    
    // Class Seven Student Data
    public function getClassSeven()
    {
        $students = DB::table('students')->where('class', 7)->get();   
        return view('frontend.student.seven', compact('students'));
    }
    // Class Eight Student Data
    public function getClassEight()
    {
        $students = DB::table('students')->where('class', 8)->get();   
        return view('frontend.student.eight', compact('students'));
    }
    // Class Nine Student Data
    public function getClassNine()
    {
        $students = DB::table('students')->where('class', 9)->get();   
        return view('frontend.student.nine', compact('students'));
    }
    // Class Ten Student Data
    public function getClassTen()
    {
        $students = DB::table('students')->where('class', 10)->get();   
        return view('frontend.student.ten', compact('students'));
    }
    // achivement
    public function achivement()
    {
        // $achive = DB::table('achivements')->inRandomOrder()->take(4)->get();
        $achive = DB::table('achivements')->latest()->take(4)->get();
        return view('frontend.achive', compact('achive'));
    }
    // online class
    public function online_class()
    {
        $online_class = DB::table('online_classes')->latest()->take(12)->get();
        return view('frontend.online-class', compact('online_class'));
    }
    // syllabus
    // public function syllabus()
    // {
    //     $this->data['data'] = Notice::latest()->get();
    //     return view('frontend.syllabus',$this->data);
    // }
    // result
    public function result()
    {
        $this->data['data'] = DB::table('results')->latest()->get();
        return view('frontend.result', $this->data);
    }
    
}

