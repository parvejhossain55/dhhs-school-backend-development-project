@extends('layouts.frontend')

@section('onlybody')
   <div class="row">
      <div class="col">
         <div class="admission-section">
            <div class="card mb-3">
               <div class="card-header bg-success-one">
                  <p class="h5">বিদ্যালয়ে ভর্তির ফরম </p>
               </div>
               <div class="px-3 pb-4">
                  <form action="{{ route('admission.submit') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <!-- Student Information -->
                     <div class="form-block my-4">
                        <fieldset class="custom-border">
                           <legend class="custom-border">ছাত্র/ছাত্রীর তথ্য </legend>
                           <div class="form-group row mt-3">
                              <div class="col-md-6">
                                 <label>ছাত্রের নাম (বাংলা) </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="sname_bangla" placeholder="বাংলায় নাম লিখুন">
                              </div>
                              <div class="col-md-6 mt-3 mt-md-0">
                                 <label>ছাত্রের নাম (ইংরেজি) </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="sname_english" placeholder="ইংরেজিতে নাম লিখুন">
                              </div>
                           </div>
                           <div class="form-group row mt-4">
                              <div class="col-md-4">
                                 <label>জন্ম তারিখ </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="date_of_birth" placeholder='dd-mm-yy'>
                              </div>
                              <div class="col-md-4 mt-3 mt-md-0">
                                 <label>ধর্ম </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="religion" placeholder="আপনার ধর্মের নাম">
                              </div>
                              <div class="col-md-4 mt-3 mt-md-0">
                                 <label>জাতীয়তা </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="nationality" placeholder="জাতীয়তা">
                              </div>
                           </div>
                           <div class="container">
                              <div class="form-group row mt-4">
                                 <p class="mr-3">লিঙ্গঃ</p>
                                 <!-- Default inline 1-->
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="gender" class="custom-control-input" value="পুরুষ" id="defaultInline1">
                                    <label class="custom-control-label" for="defaultInline1">পুরুষ</label>
                                 </div>
            
                                 <!-- Default inline 2-->
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="gender" class="custom-control-input" value="মহিলা" id="defaultInline2">
                                    <label class="custom-control-label" for="defaultInline2">মহিলা</label> 
                                 </div>
            
                                 <!-- Default inline 3-->
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="gender" class="custom-control-input" value="অন্যান্য" id="defaultInline3">
                                    <label class="custom-control-label" for="defaultInline3">অন্যান্য</label>
                                 </div>
                                 <!-- <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline2">Or toggle this other custom radio</label>
                                  </div> -->
                              </div>
                           </div>
                        </fieldset>
                     </div>
            
                     <!-- Gurdian Information -->
                     <div class="form-block my-4">
                        <fieldset class="custom-border">
                           <legend class="custom-border">পিতা-মাতার তথ্য </legend>
                           <div class="form-group row mt-3">
                              <div class="col-md-6">
                                 <label>পিতার নাম (বাংলা) </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="fname_bangla" placeholder="বাংলায় নাম লিখুন">
                              </div>
                              <div class="col-md-6 mt-3 mt-md-0">
                                 <label>পিতার নাম (ইংরেজি) </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="fname_english" placeholder="ইংরেজিতে নাম লিখুন">
                              </div>
                           </div>
                           <div class="form-group row mt-4">
                              <div class="col-md-6">
                                 <label>মাতার নাম (বাংলা) </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="mname_bangla" placeholder="বাংলায় নাম লিখুন">
                              </div>
                              <div class="col-md-6 mt-3 mt-md-0">
                                 <label>মাতার নাম (ইংরেজি) </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="mname_english" placeholder="ইংরেজিতে নাম লিখুন">
                              </div>
                           </div>
                           <div class="form-group row mt-4">
                              <div class="col-md-4">
                                 <label>পিতার মোবাইল নাম্বার</label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="father_mobile" placeholder='মোবাইল নাম্বার'>
                              </div>
                              <div class="col-md-4 mt-3 mt-md-0">
                                 <label>অভিভাবকের বার্ষিক আয় </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="father_year_income" placeholder='বার্ষিক আয় '>
                              </div>
                              <div class="col-md-4 mt-3 mt-md-0">
                                 <label>পিতার অবর্তমানে অভিভাবক </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="father_absence_gurdian" placeholder="অভিভাবকের নাম">
                              </div>
                           </div>
                        </fieldset>
                     </div>
            
                     <!-- Other Information -->
                     <div class="form-block my-4">
                        <fieldset class="custom-border">
                           <legend class="custom-border">অন্যান্য তথ্য</legend>
                           <div class="form-group row mt-3">
                              <div class="col-md-4">
                                 <label for="inputState">যেই শ্রেণিতে ভর্তি হতে ইচ্ছুক </label><span
                                    class="text-danger ml-2">*</span>
                                 <select id="inputState" class="form-control" name="which_class_admit">
                                    <option>শ্রেণী সিলেক্ট করুন....</option>
                                    <option>ষষ্ঠ শ্র্রেণী</option>
                                    <option>সপ্তম শ্রেণী</option>
                                    <option>অষ্টম শ্রেণী</option>
                                 </select>
                              </div>
                              <div class="col-md-4 mt-3 mt-md-0">
                                 <label>ছবি</label><span class="text-danger ml-2">*</span>
                                 <input type="file" class="form-control" name="photo"
                                    aria-describedby="profilePhoto">
                                 <small id="profilePhoto" class="form-text text-muted">
                                    ছবি ৩০০x৩০০ পিক্সেল এবং ফাইল সাইজ সর্বোচ্চ ৫১২কেবি.
                                 </small>
                              </div>
                              <div class="col-md-4 mt-3 mt-md-0">
                                 <label>স্বাক্ষর </label><span class="text-danger ml-2">*</span>
                                 <input type="file" id="inputPassword5" class="form-control" name="signature" aria-describedby="signaturePhoto">
                                 <small id="signaturePhoto" class="form-text text-muted">
                                    স্বাক্ষর ৩০০x৮০ পিক্সেল এবং ফাইল সাইজ সর্বোচ্চ ৫১২কেবি.
                                 </small>
                              </div>
                           </div>
                        </fieldset>
                     </div>
                     <!-- Present Address -->
                     <div class="form-block my-4">
                        <fieldset class="custom-border">
                           <legend class="custom-border">বর্তমান ঠিকানা </legend>
                           <div class="form-group row mt-3">
                              <div class="col-md-6">
                                 <label>গ্রামঃ </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="present_village" placeholder="গ্রামের নাম">
                              </div>
                              <div class="col-md-6 mt-3 mt-md-0">
                                 <label>ডাকঘরঃ </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="present_post_office" placeholder="ডাকঘর">
                              </div>
                           </div>
                           <div class="form-group row mt-4">
                              <div class="col-md-6">
                                 <label>থানাঃ </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="present_thana" placeholder="থানা ">
                              </div>
                              <div class="col-md-6 mt-3 mt-md-0">
                                 <label>জেলাঃ </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="present_zila" placeholder="জেলা ">
                              </div>
                           </div>
                        </fieldset>
                     </div>
                     <!-- Parmanent Address -->
                     <div class="form-block my-4">
                        <fieldset class="custom-border">
                           <legend class="custom-border">স্থায়ী ঠিকানা </legend>
                           <div class="form-group row mt-3">
                              <div class="col-md-6">
                                 <label>গ্রামঃ </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="parmanent_village" placeholder="গ্রামের নাম">
                              </div>
                              <div class="col-md-6 mt-3 mt-md-0">
                                 <label>ডাকঘরঃ </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="parmanent_post_office" placeholder="ডাকঘর">
                              </div>
                           </div>
                           <div class="form-group row mt-4">
                              <div class="col-md-6">
                                 <label>থানাঃ </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="parmanent_thana" placeholder="থানা ">
                              </div>
                              <div class="col-md-6 mt-3 mt-md-0">
                                 <label>জেলাঃ </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="parmanent_zila" placeholder="জেলা ">
                              </div>
                           </div>
                        </fieldset>
                     </div>
                     <!-- Payment Information -->
                     <div class="form-block my-4">
                        <fieldset class="custom-border">
                           <legend class="custom-border">পেমেন্ট ইনফরমেশন </legend>
                           <div class="form-group row mt-3">
                              <div class="col-md-6">
                                 <label>মোবাইল নাম্বার </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="bkash_no"
                                    placeholder="যেই নাম্বার থেকে টাকা পাঠিয়েছেন">
                              </div>
                              <div class="col-md-6 mt-3 mt-md-0">
                                 <label>ট্রান্সাকশন আইডি </label><span class="text-danger ml-2">*</span>
                                 <input type="text" class="form-control" name="tranx_id" placeholder="ট্রান্সাকশন আইডি যেটি পেয়েছেন">
                              </div>
                           </div>
                        </fieldset>
                     </div>
                     <div class="text-center mt-4">
                        <button type="submit" class="btn btn-lg form-button">সাবমিট</button>
                     </div>
                  </form>
               </div>
            </div>
         </div> 
      </div>
   </div>
@endsection