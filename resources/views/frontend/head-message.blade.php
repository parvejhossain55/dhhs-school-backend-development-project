@extends('layouts.frontend')

@section('announcement-section')
<div id="annaounce" class="mt-3 container">
   <div class="row">
     <div class="">
       <p class="btn ann-title bg-success-one text-light">বিজ্ঞপ্তি :: </p>
     </div>
     <div class="col pt-2">
       <marquee scrollamount='2' direction="Left" onmouseover="this.stop()" onmouseout="this.start()">
         <span class="mr-3"><a href="#"><i class="icofont-hand-right"></i> রাজশাহী মহানগরীর সরকারি মাধ্যমিক
             বিদ্যালয়সমূহে ২০২১ শিক্ষাবর্ষে ভর্তির </a></span>
         <span class="mr-3"><a href="#"><i class="icofont-hand-right"></i> ২০২১ শিক্ষাবর্ষে সরকারি মাধ্যমিক বিদ্যালয়ে
             শিক্ষার্থী ভর্তি বিজ্ঞপ্তি ।</a></span>
         <span class="mr-3"><a href="#"><i class="icofont-hand-right"></i> রাজশাহী সরকারি স্কুল এন্ড কলেজে
             ২০২০-২০২১ শিক্ষাবর্ষে একাদশ শ্রেণিতে ভর্তিকৃত ছাত্রদের অনলাইন ক্লাস রুটিন। </a></span>
         <span class="mr-3"><a href="#"><i class="icofont-hand-right"></i> রাজশাহী সরকারি স্কুল এন্ড কলেজে একাদশ
             শ্রেণিতে নতুন ভর্তিকৃত ছাত্রদের জন্য নোটিশ। </a></span>
         <span class="mr-3"><a href="#"><i class="icofont-hand-right"></i>রাজশাহী সরকারি স্কুল এন্ড কলেজের একাদশ
             শ্রেণির ছাত্রদের উপবৃত্তি সংক্রান্ত নোটিশ।</a></span>
       </marquee>
     </div>
   </div>
 </div>
@endsection

{{-- Left Sidebar First Block --}}
{{-- School Welcome Message --}}
@section('left-section-one')
<div class="head-teacher">
   <div class="card">
      <div class="card-header bg-success-one">
        <p class="h5 text-light">প্রধান শিক্ষকঃ মোঃ ফেরদৌস আলী</p>
      </div>
      <div class="card-body">
        <div class="row no-gutters">
          <!-- <div class="col-md-4">
                     <img src="assets/img/pic2.jpg" class="card-img" alt="...">
                  </div> -->
          <div class="col">
            <img style="width: 250px;" src="frontend/assets/img/pic2.jpg"
              class="img-thumbnail d-block float-left mr-3 mb-md-1" alt="...">
            <!-- <div class="card-body"> -->
            <!-- <h5 class="card-title">মোঃ ফেরদৌস আলী</h5> -->
            <p>রাজশাহী সরকারি স্কুল দেশের প্রথম ও অতি প্রাচীন ঐতিহ্যবাহী শিক্ষা প্রতিষ্ঠান। সম্ভাবনাময় প্রতিভার
              সুপ্তবীজ সম্বলিত এই বিদ্যাপীঠ তার স্বীয় অস্তিত্বের ইতিহাস। ঐশ্বর্য্যও ঐতিহ্যকে স্বযত্নে লালন করে
              আসছে সুদীর্ঘ পৌনে ইশতাধিককালব্যাপী। রাজশাহী সরকারি স্কুল দেশের প্রথম ও অতি প্রাচীন ঐতিহ্যবাহী শিক্ষা
              প্রতিষ্ঠান। সম্ভাবনাময় প্রতিভার সুপ্তবীজ সম্বলিত এই বিদ্যাপীঠ তার স্বীয় অস্তিত্বের ইতিহাস।</p>
            <p>রাজশাহী সরকারি স্কুল দেশের প্রথম ও অতি প্রাচীন ঐতিহ্যবাহী শিক্ষা প্রতিষ্ঠান। সম্ভাবনাময় প্রতিভার
              সুপ্তবীজ সম্বলিত এই বিদ্যাপীঠ তার স্বীয় অস্তিত্বের ইতিহাস। ঐশ্বর্য্যও ঐতিহ্যকে স্বযত্নে লালন করে
              আসছে সুদীর্ঘ পৌনে ইশতাধিককালব্যাপী। রাজশাহী সরকারি স্কুল দেশের প্রথম ও অতি প্রাচীন ঐতিহ্যবাহী শিক্ষা
              প্রতিষ্ঠান। সম্ভাবনাময় প্রতিভার সুপ্তবীজ সম্বলিত এই বিদ্যাপীঠ তার স্বীয় অস্তিত্বের ইতিহাস।</p>
            <!-- </div> -->
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

{{-- Right Sidebar First Block --}}
{{-- School Notice Board --}}
@section('right-section-one')
<div class="notice-board mt-5 mt-md-0">
   <div class="card mt-5 mt-md-0">
      <div class="card-header bg-success-one">
        <h5 class="text-light text-center">নোটিশ বোর্ড </h5>
      </div>
      <div class="card-body pb-4" id="notice-board">
        <p class="card-text"><a href="">রাজশাহী মহানগরীর সরকারি মাধ্যমিক বিদ্যালয়সমূহে ২০২১ শিক্ষাবর্ষে ভর্তির <i class="icofont-arrow-right"></i></a></p><hr>
        <p class="card-text"><a href="">২০২১ শিক্ষাবর্ষে সরকারি মাধ্যমিক বিদ্যালয়ে শিক্ষার্থী ভর্তি বিজ্ঞপ্তি । <i class="icofont-arrow-right"></i></a></p><hr>
        <p class="card-text"><a href="">রাজশাহী সরকারি স্কুল এন্ড কলেজে ২০২০-২০২১ শিক্ষাবর্ষে একাদশ শ্রেণিতে ভর্তিকৃত ছাত্রদের অনলাইন ক্লাস রুটিন। <i class="icofont-arrow-right"></i></a></p><hr>
        <p class="card-text"><a href="">রাজশাহী সরকারি স্কুল এন্ড কলেজে একাদশ শ্রেণিতে নতুন ভর্তিকৃত ছাত্রদের জন্য নোটিশ।<i class="icofont-arrow-right"></i></a></p><hr>
        <p class="card-text"><a href="">রাজশাহী সরকারি স্কুল এন্ড কলেজের একাদশ শ্রেণির ছাত্রদের উপবৃত্তি সংক্রান্ত নোটিশ।<i class="icofont-arrow-right"></i></a></p><hr>
        <p class="card-text"><a href="">রাজশাহী সরকারি স্কুল এন্ড কলেজে একাদশ শ্রেণিতে নতুন ভর্তিকৃত ছাত্রদের জন্য নোটিশ।<i class="icofont-arrow-right"></i></a></p><hr>
      </div>
    </div>
@endsection
