<?php

namespace App\Http\Controllers;

use App\Models\Achivement;
use Illuminate\Http\Request;

class AchivementController extends Controller
{
    //
    public function index()
    {
        $achives = Achivement::all();
        return view('backend.achive.all-achive', compact('achives'));
    }

    public function create()
    {
        return view('backend.achive.add-achive');
    }

    public function store(Request $request)
    {
        $request->validate([
            'achive_photo' => 'required|mimes:jpg,jpeg,png',
            'achive_desc' => 'required'
        ]);

        $achive_file = $request->file('achive_photo');
        $unique_name = hexdec(uniqid());
        $file_ext = strtolower($achive_file->getClientOriginalExtension());
        $file_name = $unique_name.'.'.$file_ext;
        $up_location = 'uploads/achive/';
        $final_file = $up_location.$file_name;
        $achive_file->move(public_path($up_location), $file_name);

        Achivement::create([
            'achive_desc' => $request->achive_desc,
            'achive_photo' => $final_file
        ]);

        return redirect()->route('all.achivement')->with('success', 'You Are Successfully Add Achivement Photo');
    }

    public function edit(Request $request, $id)
    {
        $achive = Achivement::find($id);
        return view('backend.achive.edit-achive', compact('achive'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'achive_desc' => 'required',
            'achive_photo' => 'mimes:jpg,jpeg,png',
        ]);

        $achive_file = $request->file('achive_photo');
        $old_photo = $request->old_achive_photo;

        if ($achive_file) {

            $unique_name = hexdec(uniqid());
            $file_ext = strtolower($achive_file->getClientOriginalExtension());
            $file_name = $unique_name.'.'.$file_ext;
            $up_location = 'uploads/achive/';
            $final_file = $up_location.$file_name;
            $achive_file->move(public_path($up_location), $file_name);

            unlink($old_photo);
    
            Achivement::find($id)->update([
                'achive_desc' => $request->achive_desc,
                'achive_photo' => $final_file
            ]);
    
            return redirect()->route('all.achivement')->with('success', 'You Are Successfully Update Achivement Photo');
        } else {
            Achivement::find($id)->update([
                'achive_desc' => $request->achive_desc,
            ]);
    
            return redirect()->route('all.achivement')->with('success', 'You Are Successfully Update Achivement Photo');
        }
    }

    public function destroy($id)
    {
        $old_photo = Achivement::find($id);
        unlink($old_photo->achive_photo);
        Achivement::find($id)->delete();
        return redirect()->back()->with('error', 'Successfully Deleted Achivement Photo');
    }

}
