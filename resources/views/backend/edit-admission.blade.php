@extends('layouts.backend')

@section('section-one')
   <div class="row">
      <div class="col">
         <div class="admission-section">
            <div class="card mb-3">
               <div class="card-header bg-success-one">
                  <p class="h3">Update Admission Form </p>
               </div>
               <div class="px-3 pb-4">
                  <form action="{{ route('admission.update') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <!-- Student Information -->
                     {{-- <input type="hidden" name="student_signature" value="{{ $data->signature }}"> --}}
                     <input type="hidden" name="id" value="{{ $data->id }}">
                     <div class="form-block my-4">
                        <fieldset class="custom-border">
                           <legend class="custom-border">Student Information </legend>
                           <div class="form-group row mt-3">
                              <div class="col-md-6">
                                 <label>Student Name (bangla)</label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="sname_bangla" value="{{ $data->sname_bangla }}">
                              </div>
                              <div class="col-md-6 mt-3 mt-md-0">
                                 <label>Student Name (english)</label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="sname_english" value="{{ $data->sname_english }}">
                              </div>
                           </div>
                           <div class="form-group row mt-4">
                              <div class="col-md-4">
                                 <label>Date of Birth</label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="date_of_birth" value='{{ $data->date_of_birth }}'>
                              </div>
                              <div class="col-md-4 mt-3 mt-md-0">
                                 <label>Religious </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="religion" value="{{ $data->religion }}">
                              </div>
                              <div class="col-md-4 mt-3 mt-md-0">
                                 <label>Nationality </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="nationality" value="{{ $data->nationality }}">
                              </div>
                           </div>
                           <div class="container">
                              <div class="form-group row mt-4">
                                 <p class="mr-3">Gender</p>
                                 <!-- Default inline 1-->
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" {{ $data->gender == 'Male' ? 'checked' : '' }} name="gender" class="custom-control-input" value="Male" id="defaultInline1">
                                    <label class="custom-control-label" for="defaultInline1">Male</label>
                                 </div>
            
                                 <!-- Default inline 2-->
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="gender" {{ $data->gender == 'Female' ? 'checked' : '' }} class="custom-control-input" value="Female" id="defaultInline2">
                                    <label class="custom-control-label" for="defaultInline2">Female</label> 
                                 </div>
            
                                 <!-- Default inline 3-->
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="gender" class="custom-control-input" value="Others" id="defaultInline3">
                                    <label class="custom-control-label" for="defaultInline3">Others</label>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                     </div>
            
                     <!-- Gurdian Information -->
                     <div class="form-block my-4">
                        <fieldset class="custom-border">
                           <legend class="custom-border">Parent Information</legend>
                           <div class="form-group row mt-3">
                              <div class="col-md-6">
                                 <label>Father Name (bangla) </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="fname_bangla" value="{{ $data->fname_bangla }}">
                              </div>
                              <div class="col-md-6 mt-3 mt-md-0">
                                 <label>Ftaher Nmae (english) </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="fname_english" value="{{ $data->fname_english }}">
                              </div>
                           </div>
                           <div class="form-group row mt-4">
                              <div class="col-md-6">
                                 <label>Mother Name (bangla)</label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="mname_bangla" value="{{ $data->mname_bangla }}">
                              </div>
                              <div class="col-md-6 mt-3 mt-md-0">
                                 <label>Mothe Name (english) </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="mname_english" value="{{ $data->mname_english }}">
                              </div>
                           </div>
                           <div class="form-group row mt-4">
                              <div class="col-md-4">
                                 <label>Father Mobile Number</label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="father_mobile" value='{{ $data->father_mobile }}'>
                              </div>
                              <div class="col-md-4 mt-3 mt-md-0">
                                 <label>Parent's Annual Income </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="father_year_income" value="{{ $data->father_year_income }}">
                              </div>
                              <div class="col-md-4 mt-3 mt-md-0">
                                 <label>Guardian Absence of the Father </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="father_absence_gurdian" value="{{ $data->father_absence_gurdian }}">
                              </div>
                           </div>
                        </fieldset>
                     </div>
            
                     <!-- Other Information -->
                     <div class="form-block my-4">
                        <fieldset class="custom-border">
                           <legend class="custom-border">Another Information</legend>
                           <div class="form-group row mt-3">
                              <div class="col-md-4">
                                 <label for="inputState">Which Class Admitted to You Want </label><span
                                    class="text-danger ml-2">*</span>
                                 <select id="inputState" class="form-control" name="which_class_admit">
                                    <option {{ $data->which_class_admit == '6th' ? 'selected' : '' }} value="6th">6th</option>
                                    <option {{ $data->which_class_admit == '7th' ? 'selected' : '' }} value="7th">7th</option>
                                    <option {{ $data->which_class_admit == '8th' ? 'selected' : ''}} value="8th">8th</option>
                                 </select>
                              </div>
                              <div class="col-md-4 mt-3 mt-md-0">
                                 <label>Photo</label><span class="text-danger ml-2">*</span>
                                 <div>
                                    <img src="{{ asset($data->photo) }}" width="150" height="140" alt="">
                                 </div>
                              </div>
                              <div class="col-md-4 mt-3 mt-md-0">
                                 <label>Signature </label><span class="text-danger ml-2">*</span>
                                 <div>
                                    <img src="{{ asset($data->signature) }}" width="300" height="80" alt="">
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                     </div>
                     <!-- Present Address -->
                     <div class="form-block my-4">
                        <fieldset class="custom-border">
                           <legend class="custom-border">Present Address</legend>
                           <div class="form-group row mt-3">
                              <div class="col-md-6">
                                 <label>Village</label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="present_village" value="{{ $data->present_village }}">
                              </div>
                              <div class="col-md-6 mt-3 mt-md-0">
                                 <label>Post Office </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="present_post_office" value="{{ $data->present_post_office }}">
                              </div>
                           </div>
                           <div class="form-group row mt-4">
                              <div class="col-md-6">
                                 <label>Thana </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="present_thana" value="{{ $data->present_thana }}">
                              </div>
                              <div class="col-md-6 mt-3 mt-md-0">
                                 <label>Zila </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="present_zila" value="{{ $data->present_zila }}">
                              </div>
                           </div>
                        </fieldset>
                     </div>
                     <!-- Parmanent Address -->
                     <div class="form-block my-4">
                        <fieldset class="custom-border">
                           <legend class="custom-border">Parmanent Address</legend>
                           <div class="form-group row mt-3">
                              <div class="col-md-6">
                                 <label>Village </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="parmanent_village" value="{{ $data->parmanent_village }}">
                              </div>
                              <div class="col-md-6 mt-3 mt-md-0">
                                 <label>Post Office </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="parmanent_post_office" value="{{ $data->parmanent_post_office }}">
                              </div>
                           </div>
                           <div class="form-group row mt-4">
                              <div class="col-md-6">
                                 <label>Thana </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="parmanent_thana" value="{{ $data->parmanent_thana }}">
                              </div>
                              <div class="col-md-6 mt-3 mt-md-0">
                                 <label>Zila </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="parmanent_zila" value="{{ $data->parmanent_zila }}">
                              </div>
                           </div>
                        </fieldset>
                     </div>
                     <!-- Payment Information -->
                     <div class="form-block my-4">
                        <fieldset class="custom-border">
                           <legend class="custom-border">Payment Information </legend>
                           <div class="form-group row mt-3">
                              <div class="col-md-6">
                                 <label>bKash Mobile Number </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="bkash_no" value="{{ $data->bkash_no }}">
                              </div>
                              <div class="col-md-6 mt-3 mt-md-0">
                                 <label>Tranxaction Id </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="tranx_id" value="{{ $data->tranx_id }}">
                              </div>
                           </div>
                        </fieldset>
                     </div>
                     <div class="text-center mt-4">
                        <button type="submit" class="btn btn-lg form-button">Update</button>
                     </div>
                  </form>
               </div>
            </div>
         </div> 
      </div>
   </div>
@endsection