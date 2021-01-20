<?php

namespace App\Http\Controllers;

use App\Models\OnlineClass;
use Illuminate\Http\Request;

class OnlineClassController extends Controller
{
    //
    public function index()
    {
        $online_class = OnlineClass::all();
        return view('backend.online.online-class', compact('online_class'));
    }

    public function create()
    {
        return view('backend.online.add-online-class');
    }

    public function store(Request $request)
    {
        $request->validate([
            'iframe' => 'required'
        ]);

        OnlineClass::create([
            'iframe' => $request->iframe
        ]);

        return redirect()->route('all.class')->with('success', 'Successfully Added School Online Class');
    }

    public function edit($id)
    {
        $class = OnlineClass::find($id);
        return view('backend.online.online-class-edit', compact('class'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'iframe' => 'required'
        ]);

        OnlineClass::find($request->o_class_id)->update([
            'iframe' => $request->iframe
        ]);

        return redirect()->route('all.class')->with('success', 'Online Class Successfully Updated');
    }

    public function delete($id)
    {
        OnlineClass::find($id)->delete();
        return redirect()->route('all.class')->with('error', 'Successfully Deleted Online Class video');
    }
}
