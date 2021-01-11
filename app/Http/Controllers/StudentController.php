<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // view all student
    public function index()
    {
        $students = Student::all();
        return view('backend.student.total-student', compact('students'));
    }
    // form view
    public function create()
    {
        return view('backend.student.add-student');
    }
    // store student data
    public function store(Request $request)
    {
        $request->validate([
            'sname' => 'required',
            'sfname' => 'required',
            'smname' => 'required',
            'gender' => 'required',
            'roll' => 'required',
            'class' => 'required',
            'section' => 'required',
            'address' => 'required'
        ]);

        Student::create([
            'sname' => $request->sname,
            'sfname' => $request->sfname,
            'smname' => $request->smname,
            'gender' => $request->gender,
            'roll' => $request->roll,
            'class' => $request->class,
            'section' => $request->section,
            'address' => $request->address
        ]);

        return redirect()->route('total.student')->with('notice_publish', 'Student Successfully Added');
    }
    // student edit
    public function edit($id)
    {
        $student = Student::find($id);
        return view('backend.student.edit-student', compact('student'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'sname' => 'required',
            'sfname' => 'required',
            'smname' => 'required',
            'gender' => 'required',
            'roll' => 'required',
            'class' => 'required',
            'section' => 'required',
            'address' => 'required'
        ]);
        Student::find($request->edit_id)->update([
            'sname' => $request->sname,
            'sfname' => $request->sfname,
            'smname' => $request->smname,
            'gender' => $request->gender,
            'roll' => $request->roll,
            'class' => $request->class,
            'section' => $request->section,
            'address' => $request->address
        ]);
        return redirect()->back()->with('notice_publish', 'Student Successfully Edited');
    }
    // student delete
    public function delete($id)
    {
        Student::find($id)->delete();
        return redirect()->back()->with('notice_delete', 'Student Successfully Deleted');
    }

    // class six
    public function class_six()
    {
        $students = Student::where('class', '=', 6)->get();
        return view('backend.student.class-six', compact('students'));
    }
    // class seven
    public function class_seven()
    {
        $students = Student::where('class', '=', 7)->get();
        return view('backend.student.class-seven', compact('students'));
    }
    // class eight
    public function class_eight()
    {
        $students = Student::where('class', '=', 8)->get();
        return view('backend.student.class-eight', compact('students'));
    }
    // class nine
    public function class_nine()
    {
        $students = Student::where('class', '=', 9)->get();
        return view('backend.student.class-nine', compact('students'));
    }
    // class nine
    public function class_ten()
    {
        $students = Student::where('class', '=', 10)->get();
        return view('backend.student.class-ten', compact('students'));
    }
}
