<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('backend.total-admission');
    }

    // Add notice page view
    public function addNotice()
    {
        return view('backend.add-notice');
    }

    // Add photo page view
    public function addPhoto()
    {
        return view('backend.add-photo');
    }
}
