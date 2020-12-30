<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function index()
    {
        $gallaries = Gallery::latest()->get();
        return view('backend.show-gallery', compact('gallaries'));
    }

    public function create()
    {
        return view('backend.add-gallery');
    }

    // store gallery
    public function store(Request $request)
    {
        $request->validate([
            'gallery_desc' => 'required',
            'gallery_photo' => 'required|mimes:jpg,jpeg,png',
        ]);

        $gallery_file = $request->file('gallery_photo');
        $unique_name = hexdec(uniqid());
        $file_ext = strtolower($gallery_file->getClientOriginalExtension());
        $file_name = $unique_name.'.'.$file_ext;
        $up_location = 'uploads/gallery/';
        $final_file = $up_location.$file_name;
        $gallery_file->move(public_path($up_location), $file_name);

        Gallery::create([
            'gallery_desc' => $request->gallery_desc,
            'gallery_photo' => $final_file
        ]);

        return redirect()->route('all.photo')->with('photo', 'You Are Successfully Add Photo in Photo Gallery');
    }

    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('backend.edit-gallery', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gallery_desc' => 'required',
            'gallery_photo' => 'mimes:jpg,jpeg,png',
        ]);

        $gallery_file = $request->file('gallery_photo');
        $old_photo = $request->old_gallery_photo;

        if ($gallery_file) {

            $unique_name = hexdec(uniqid());
            $file_ext = strtolower($gallery_file->getClientOriginalExtension());
            $file_name = $unique_name.'.'.$file_ext;
            $up_location = 'uploads/gallery/';
            $final_file = $up_location.$file_name;
            $gallery_file->move(public_path($up_location), $file_name);

            unlink($old_photo);
    
            Gallery::find($id)->update([
                'gallery_desc' => $request->gallery_desc,
                'gallery_photo' => $final_file
            ]);
    
            return redirect()->route('all.photo')->with('photo', 'You Are Successfully Update Photo in Photo Gallery');
        } else {
            Gallery::find($id)->update([
                'gallery_desc' => $request->gallery_desc,
            ]);
    
            return redirect()->route('all.photo')->with('photo', 'You Are Successfully Update Photo in Photo Gallery');
        }
    }
    
    public function destroy($id)
    {
        $img = Gallery::find($id);
        unlink($img->gallery_photo);
        Gallery::find($id)->delete();
        return redirect()->route('all.photo')->with('photo', 'You Are Successfully Deleted Photo in Photo Gallery');
    }
}
