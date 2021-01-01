<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    //
    
    public function getReceive()
    {
        $data = Admission::latest()->first();
        return view('frontend.receipt', ['datas' => $data]);
    }

    
    
}

