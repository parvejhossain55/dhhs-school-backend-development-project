<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    // Show All Notice
    public function index()
    {
        $notices = Notice::latest()->get();
        return view('backend.show-notice', compact('notices'));
    }
    
    // Show Notice upload page in Admin panel
    public function create()
    {
        return view('backend.add-notice');
    }

    // Store Notice 
    public function store(Request $request)
    {
        $request->validate([
            'notice_title' => 'required',
            'notice_file' => 'required|mimes:jpg,jpeg,pdf,png'
        ]);

        $notice_file = $request->file('notice_file');
        $unique_name = hexdec(uniqid());
        $file_ext = strtolower($notice_file->getClientOriginalExtension());
        $file_name = $unique_name.'.'.$file_ext;
        $up_location = 'uploads/notice/';
        $final_file = $up_location.$file_name;
        $notice_file->move(public_path($up_location), $file_name);

        Notice::create([
            'notice_title' => $request->notice_title,
            'notice_file' => $final_file,
        ]);

        return redirect()->route('all.notice')->with('success', 'You Are Successfully Notice Published');
    }

    public function edit($id)
    {
        $notices = Notice::find($id);
        return view('backend.edit-notice', compact('notices'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'notice_title' => 'required',
        ]);

        $notice_file = $request->file('notice_file');
        $old_file = $request->old_notice_file;
        // $unique_name = hexdec(uniqid());
        // $file_ext = strtolower($notice_file->getClientOriginalExtension());
        // $file_name = $unique_name.'.'.$file_ext;
        // $up_location = 'uploads/notice/';
        // $final_file = $up_location.$file_name;
        // $notice_file->move(public_path($up_location), $file_name);

        // $notice_file = $request->file('notice_file');

        if ($notice_file) {
            $unique_name = hexdec(uniqid());
            $file_ext = strtolower($notice_file->getClientOriginalExtension());
            $file_name = $unique_name.'.'.$file_ext;
            $up_location = 'uploads/notice/';
            $final_file = $up_location.$file_name;
            $notice_file->move(public_path($up_location), $file_name);
            
            // dd();
            // die();

            unlink($old_file);
    
            Notice::find($id)->update([
                'notice_title' => $request->notice_title,
                'notice_file' => $final_file
            ]);
                
            return redirect()->route('all.notice')->with('success', 'You Are Successfully Update in Your School Notice');
        } else {
            Notice::find($id)->update([
                'notice_title' => $request->notice_title
            ]);
    
            return redirect()->route('all.notice')->with('success', 'You Are Successfully Update Your School Notice');
        }
    }

    // Destroy Notice File
    public function destroy($id)
    {
        $old_file = Notice::find($id);
        unlink($old_file->notice_file);
        Notice::find($id)->delete();
        return redirect()->back()->with('error', 'You Are Succesfully Notice Deleted');
    }
}
