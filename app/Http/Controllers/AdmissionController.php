<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;
use PDF;

class AdmissionController extends Controller
{
    //
    public function index()
    {
        $all_admission = Admission::latest()->get();
        return view('backend.total-admission', compact('all_admission'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'sname_bangla' => 'required',
            'sname_english' => 'required',
            'date_of_birth' => 'required',
            'religion' => 'required',
            'nationality' => 'required',
            'gender' => 'required',
            // father info
            'fname_bangla' => 'required',
            'fname_english' => 'required',
            'father_mobile' => 'required',
            'father_year_income' => 'required',
            'father_absence_gurdian' => 'required',
            // mother info
            'mname_bangla' => 'required',
            'mname_english' => 'required',
            // other info
            'which_class_admit' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,png',
            'signature' => 'required|mimes:jpg,jpeg,png',
            // present address
            'present_village' => 'required',
            'present_post_office' => 'required',
            'present_thana' => 'required',
            'present_zila' => 'required',
            // parmanent address
            'parmanent_village' => 'required',
            'parmanent_post_office' => 'required',
            'parmanent_thana' => 'required',
            'parmanent_zila' => 'required',
            // payment info
            'bkash_no' => 'required',
            'tranx_id' => 'required',
        ],[
            'sname_bangla.required' => 'Student Bangla Name is Must Be Required',
            'sname_english.required' => 'Student English Name is Must Be Required',
            'date_of_birth.required' => 'Student Date of Birth is Must Be Required',
            'religion.required' => 'Student Religion is Must Be Required',
            'nationality.required' => 'Student Nationality is Must Be Required',
            'gender.required' => 'Student Gender is Must Be Required',
            'fname_bangla.required' => 'Student Father Bangla Name is Must Be Required',
            'fname_bangla.required' => 'Student Father English Name is Must Be Required',
            'mname_bangla.required' => 'Student Mother Bangla Name is Must Be Required',
            'mname_english.required' => 'Student Mother English Name is Must Be Required',
            'which_class_admit.required' => 'Field is Must Be Required',
            'photo.required' => 'Student Photo is Must Be Required',
            'signature.required' => 'Student Signature Field is Must Be Required',
            'present_village.required' => 'Field is Must Be Required',
            'present_post_office.required' => 'Field is Must Be Required',
            'present_thana.required' => 'Field is Must Be Required',
            'present_zila.required' => 'Field is Must Be Required',
            'parmanent_village.required' => 'Field is Must Be Required',
            'parmanent_post_office.required' => 'Field is Must Be Required',
            'parmanent_thana.required' => 'Field is Must Be Required',
            'parmanent_zila.required' => 'Field is Must Be Required',
            'bkash_no.required' => 'Field is Must Be Required',
            'tranx_id.required' => 'Field is Must Be Required',
        ]);
        // Student Photo Upload Code
        $student_photo = $request->file('photo');
        $photo_name_gen = hexdec(uniqid());
        $photo_image_ext = strtolower($student_photo->getClientOriginalExtension());
        $photo_img_name = $photo_name_gen.'.'.$photo_image_ext;
        $photo_up_location = 'uploads/student-photo/';
        $photo_final_img = $photo_up_location.$photo_img_name;
        $student_photo->move(public_path($photo_up_location), $photo_img_name);
        
        // Student Signature Upload Code
        $signature = $request->file('signature');
        $signature_name_gen = hexdec(uniqid());
        $signature_ext = strtolower($signature->getClientOriginalExtension());
        $signature_name = $signature_name_gen.'.'.$signature_ext;
        $signature_up_location = 'uploads/student-signature/';
        $signature_final = $signature_up_location.$signature_name;
        $signature->move(public_path($signature_up_location), $signature_name);
        
        $datas = Admission::create([
            'app_id' => mt_rand(111111, 999999),
            'sname_bangla' => $request->sname_bangla,
            'sname_english' => $request->sname_english,
            'date_of_birth' => $request->date_of_birth,
            'religion' => $request->religion,
            'nationality' => $request->nationality,
            'gender' => $request->gender,
            'fname_bangla' => $request->fname_bangla,
            'fname_english' => $request->fname_english,
            'father_mobile' => $request->father_mobile,
            'father_year_income' => $request->father_year_income,
            'father_absence_gurdian' => $request->father_absence_gurdian,
            'mname_bangla' => $request->mname_bangla,
            'mname_english' => $request->mname_english,
            'which_class_admit' => $request->which_class_admit,
            'photo' => $photo_final_img,
            'signature' => $signature_final,
            'present_village' => $request->present_village,
            'present_post_office' => $request->present_post_office,
            'present_thana' => $request->present_thana,
            'present_zila' => $request->present_zila,
            'parmanent_village' => $request->parmanent_village,
            'parmanent_post_office' => $request->parmanent_post_office,
            'parmanent_thana' => $request->parmanent_thana,
            'parmanent_zila' => $request->parmanent_zila,
            'bkash_no' => $request->bkash_no,
            'tranx_id' => $request->tranx_id,
        ]);

        

        $pdf = PDF::loadView('frontend.receipt', compact('datas'));   
        return $pdf->stream();



        // $options = PDF::getOptions();
        // $options->setDefaultFont('SolaimanLipi');

        // $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'SolaimanLipi'])->loadView('frontend.receipt', compact('datas'));

        // $pdf->set('SolaimanLipi');
        // dd($students->sname_bangla);
        // die();
    }
    
    public function edit($id)
    {
        $data = Admission::find($id);
        return view('backend.edit-admission', compact('data'));
    }
}
