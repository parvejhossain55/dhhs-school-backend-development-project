<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {
        $results = Result::latest()->get();
        return view('backend.result.index', compact('results'));
    }

    public function create()
    {
        return view('backend.result.add-result');
    }

    public function store(Request $request)
    {
        $request->validate([
            'result_title' => 'required',
            'result_file' => 'required|mimes:jpg,jpeg,pdf,png'
        ]);

        $result_file = $request->file('result_file');
        $unique_name = hexdec(uniqid());
        $file_ext = strtolower($result_file->getClientOriginalExtension());
        $file_name = $unique_name.'.'.$file_ext;
        $up_location = 'uploads/result/';
        $final_file = $up_location.$file_name;
        $result_file->move(public_path($up_location), $file_name);

        Result::create([
            'result_title' => $request->result_title,
            'result_file' => $final_file
        ]);

        return redirect()->route('all.result')->with('success', 'You Are Successfully Result');
    }

    public function edit($id)
    {
        $result = Result::find($id);
        return view('backend.result.edit-result', compact('result'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'result_title' => 'required',
            'result_file' => 'mimes:pdf,jpg,jpeg'
        ]);

        $result_file = $request->file('result_file');
        $old_file = $request->old_result_file;
        
        if ($result_file) {
            $unique_name = hexdec(uniqid());
            $file_ext = strtolower($result_file->getClientOriginalExtension());
            $file_name = $unique_name.'.'.$file_ext;
            $up_location = 'uploads/result/';
            $final_file = $up_location.$file_name;
            $result_file->move(public_path($up_location), $file_name);

            unlink($old_file);
    
            Result::find($id)->update([
                'result_title' => $request->result_title,
                'result_file' => $final_file
            ]);
                
            return redirect()->route('all.result')->with('success', 'You Are Successfully Update in Your School Result');
        } else {
            Result::find($id)->update([
                'result_title' => $request->result_title
            ]);
    
            return redirect()->route('all.result')->with('success', 'You Are Successfully Update Your School Reuslt');
        }
    }

    public function delete($id)
    {
        $file = Result::find($id);
        unlink($file->result_file);

        Result::find($id)->delete();
        
        return redirect()->back()->with('error', 'Result Successfully Deleted');
    }
}