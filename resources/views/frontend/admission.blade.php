@extends('layouts.frontend')

@section('onlybody')
   <div class="row">
      <div class="col">
         <div class="admission-section">
            <div class="card mb-3">
               <div class="card-header bg-success-one">
                  <p class="h5">Admission Form </p>
               </div>
               <div class="px-3 pb-4">
                  <form action="{{ route('admission.submit') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <!-- Student Information -->
                     <div class="form-block my-4">
                        <fieldset class="custom-border">
                           <legend class="custom-border">Student Information </legend>
                           <div class="form-group row mt-3">
                              <div class="col-md-6">
                                 <label>Student Name (bangla)</label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="sname_bangla" placeholder="Enter Your Bangla Name">
                              </div>
                              <div class="col-md-6 mt-3 mt-md-0">
                                 <label>Student Name (english)</label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="sname_english" placeholder="Enter Your English Name">
                              </div>
                           </div>
                           <div class="form-group row mt-4">
                              <div class="col-md-4">
                                 <label>Date of Birth</label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="date_of_birth" placeholder='dd-mm-yy'>
                              </div>
                              <div class="col-md-4 mt-3 mt-md-0">
                                 <label>Religious </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="religion" placeholder="Enter Your Religious">
                              </div>
                              <div class="col-md-4 mt-3 mt-md-0">
                                 <label>Nationality </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="nationality" placeholder="Enter Your Nationality">
                              </div>
                           </div>
                           <div class="container">
                              <div class="form-group row mt-4">
                                 <p class="mr-3">Gender</p>
                                 <!-- Default inline 1-->
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="gender" class="custom-control-input" value="Male" id="defaultInline1">
                                    <label class="custom-control-label" for="defaultInline1">Male</label>
                                 </div>
            
                                 <!-- Default inline 2-->
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="gender" class="custom-control-input" value="Female" id="defaultInline2">
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
                                 <input type="text" class="form-control" name="fname_bangla" placeholder="Enter Your Father Name">
                              </div>
                              <div class="col-md-6 mt-3 mt-md-0">
                                 <label>Ftaher Nmae (english) </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="fname_english" placeholder="Enter Your Father English Name">
                              </div>
                           </div>
                           <div class="form-group row mt-4">
                              <div class="col-md-6">
                                 <label>Mother Name (bangla)</label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="mname_bangla" placeholder="Enter Your Mother Bangla Name">
                              </div>
                              <div class="col-md-6 mt-3 mt-md-0">
                                 <label>Mothe Name (english) </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="mname_english" placeholder="Enter Your Mothe English Name">
                              </div>
                           </div>
                           <div class="form-group row mt-4">
                              <div class="col-md-4">
                                 <label>Father Mobile Number</label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="father_mobile" placeholder='Enter Your Father Mobile Number'>
                              </div>
                              <div class="col-md-4 mt-3 mt-md-0">
                                 <label>Parent's Annual Income </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="father_year_income" placeholder="Parent's Annual Income ">
                              </div>
                              <div class="col-md-4 mt-3 mt-md-0">
                                 <label>Guardian Absence of the Father </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="father_absence_gurdian" placeholder="Guardian Absence of the Father ">
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
                                    <option>Select Once....</option>
                                    <option value="6th">6th</option>
                                    <option value="7th">7th</option>
                                    <option value="8th">8th</option>
                                 </select>
                              </div>
                              <div class="col-md-4 mt-3 mt-md-0">
                                 <label>Photo</label><span class="text-danger ml-2">*</span>
                                 <input type="file" class="form-control" name="photo"
                                    aria-describedby="profilePhoto">
                                 <small id="profilePhoto" class="form-text text-muted">
                                    Image size 300x300 pixels and file size smaller than 512 KB
                                 </small>
                              </div>
                              <div class="col-md-4 mt-3 mt-md-0">
                                 <label>Signature </label><span class="text-danger ml-2">*</span>
                                 <input type="file" id="inputPassword5" class="form-control" name="signature" aria-describedby="signaturePhoto">
                                 <small id="signaturePhoto" class="form-text text-muted">
                                    Image size 300x80 pixels and file size smaller than 512 KB
                                 </small>
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
                                 <input type="text" class="form-control" name="present_village" placeholder="Your Village Name">
                              </div>
                              <div class="col-md-6 mt-3 mt-md-0">
                                 <label>Post Office </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="present_post_office" placeholder="Your Post Office">
                              </div>
                           </div>
                           <div class="form-group row mt-4">
                              <div class="col-md-6">
                                 <label>Thana </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="present_thana" placeholder="Your Thana ">
                              </div>
                              <div class="col-md-6 mt-3 mt-md-0">
                                 <label>Zila </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="present_zila" placeholder="Your Present Zila ">
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
                                 <input type="text" class="form-control" name="parmanent_village" placeholder="Your Village Name">
                              </div>
                              <div class="col-md-6 mt-3 mt-md-0">
                                 <label>Post Office </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="parmanent_post_office" placeholder="Your Post Office">
                              </div>
                           </div>
                           <div class="form-group row mt-4">
                              <div class="col-md-6">
                                 <label>Thana </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="parmanent_thana" placeholder="Your Thana ">
                              </div>
                              <div class="col-md-6 mt-3 mt-md-0">
                                 <label>Zila </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="parmanent_zila" placeholder="Your Zila ">
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
                                 <input type="text" class="form-control" name="bkash_no"
                                    placeholder="bKash Mobile Number">
                              </div>
                              <div class="col-md-6 mt-3 mt-md-0">
                                 <label>Tranxaction Id </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="tranx_id" placeholder="Tranxaction Id">
                              </div>
                           </div>
                        </fieldset>
                     </div>
                     <div class="text-center mt-4">
                        <button type="submit" class="btn btn-lg form-button">Submit</button>
                     </div>
                  </form>
               </div>
            </div>
         </div> 
      </div>
   </div>
@endsection