@extends('layouts.frontend')

@section('announcement-section')
<div id="annaounce" class="container">
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

@section('carousel-section')
<section id="carousel" class="carousel d-none d-md-block mb-3" style="margin-top: -20px;">
   <div id="demo" class="carousel slide" data-ride="carousel">

     <!-- Indicators -->
     <ul class="carousel-indicators">
       <li data-target="#demo" data-slide-to="0" class="active"></li>
       <li data-target="#demo" data-slide-to="1"></li>
       <li data-target="#demo" data-slide-to="2"></li>
     </ul>

     <!-- The slideshow -->
     <div class="carousel-inner">
       <div class="carousel-item active">
         <img src="frontend/assets/img/carousel/carousel1.jpg" alt="Los Angeles" width="1100" height="400">
       </div>
       <div class="carousel-item">
         <img src="frontend/assets/img/carousel/carousel2.jpg" alt="Chicago" width="1100" height="400">
       </div>
       <div class="carousel-item">
         <img src="frontend/assets/img/carousel/carousel3.jpg" alt="New York" width="1100" height="400">
       </div>
     </div>

     <!-- Left and right controls -->
     <a class="carousel-control-prev" href="#demo" data-slide="prev">
       <span class="carousel-control-prev-icon"></span>
     </a>
     <a class="carousel-control-next" href="#demo" data-slide="next">
       <span class="carousel-control-next-icon"></span>
     </a>

   </div>
 </section>
@endsection

{{-- Left Sidebar First Block --}}
{{-- School Welcome Message --}}
@section('left-section-one')
  <div class="welcome-message">
    <div class="card">
        <div class="card-header bg-success-one">
          <p class="h5 text-light">দামকুড়া হাট উচ্চ বিদ্যালয়ে স্বাগতম</p>
        </div>
        <div class="card-body">
          <p>রাজশাহী সরকারি স্কুল দেশের প্রথম ও অতি প্রাচীন ঐতিহ্যবাহী শিক্ষা প্রতিষ্ঠান। সম্ভাবনাময় প্রতিভার
            সুপ্তবীজ সম্বলিত এই বিদ্যাপীঠ তার স্বীয় অস্তিত্বের ইতিহাস। ঐশ্বর্য্যও ঐতিহ্যকে স্বযত্নে লালন করে আসছে
            সুদীর্ঘ পৌনে দুইশতাধিককালব্যাপী। দেশের ইংরেজী শিক্ষার প্রসার লাভের জন্য লর্ড ইউলিয়াম বেন্টিং তার
            ব্যক্তিগত প্রচেষ্টা ও উৎসাহে ১৮২৮ সালে “বউলিয়া ইংলিশ স্কুল” নামে সর্বপ্রথম এই স্কুলটি প্রতিষ্ঠা করেন।
            পদ্মানদীর তীরে বড়কুঠির কাছাকাছি খড়ের দোচালা ঘরে টাইল নির্মিত বারান্দায় এর প্রথম কার্যক্রম শুরু হয়।
            প্রথমদিকে এটি ছিল একটি অবৈতনিক প্রাইভেট স্কুল। সেসময় স্কুলের জন্য কোন সরকারী সাহায্য বরাদ্দ ছিলনা।
            সুতরাং রাজশাহীতে বসবাসকারী ইংরেজ কর্মকর্তা, আইনব্যবসায়ী এবং নাটোর দিঘাপতিয়া, দুবলহাটি, পুঠিয়া ও বলিহারের
            জমিদারদের সাহায্য ও সহযোগিতায় স্কুলটি চলতে থাকে। এদেশের তৎকালীন শিক্ষা বিস্তারের ভারপ্রাপ্ত কর্মকর্তা
            ইউলিয়াম অ্যাডাম ১৮৩৫. <a class="text-danger" href="">বিস্তারিত <i class="icofont-arrow-right"></i></a>
          </p>
        </div>
      </div>
  </div>
@endsection

{{-- Left Sidebar Second Block --}}
{{-- Head Techer Message --}}
@section('left-section-two')
<div class="head-message mt-5">
   <div class="card">
      <div class="card-header bg-success-one">
        <p class="h5 text-light">প্রধান শিক্ষক </p>
      </div>
      <div class="card-body">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="frontend/assets/img/pic2.jpg" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">মোঃ ফেরদৌস আলী</h5>
              <p class="card-text">রাজশাহী সরকারি স্কুল দেশের প্রথম ও অতি প্রাচীন ঐতিহ্যবাহী শিক্ষা প্রতিষ্ঠান।
                সম্ভাবনাময় প্রতিভার সুপ্তবীজ সম্বলিত এই বিদ্যাপীঠ তার স্বীয় অস্তিত্বের ইতিহাস। ঐশ্বর্য্যও ঐতিহ্যকে
                স্বযত্নে লালন করে আসছে সুদীর্ঘ পৌনে দুইশতাধিককালব্যাপী। </p>
              <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
              <p class="card-text"><a href="">প্রধান শিক্ষকের বানী </a> <i class="icofont-arrow-right"></i></p>
            </div>
          </div>
        </div>
      </div>
    </div>
 </div>
@endsection

{{-- Left Sidebar Third Block --}}
{{-- Google Map --}}
@section('left-section-three')
<div class="google-maps mt-5">
   <div class="card">
      <div class="card-header bg-success-one">
        <p class="h5 text-light">গুগল ম্যাপস </p>
      </div>
      <div class="card-body">
        <iframe width="100%" height="250px"
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5138.3178611445555!2d88.52036659107763!3d24.40427369921105!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbe976b1df3f83%3A0xca2adcd895ffb2ac!2sDamkura%20Hat%20High%20School!5e0!3m2!1sen!2sbd!4v1608393511526!5m2!1sen!2sbd"
          width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
          tabindex="0"></iframe>
      </div>
   </div>
</div>
@endsection

{{-- Right Sidebar First Block --}}
{{-- School Notice Board --}}
@section('right-section-one')
<div class="notice-board mt-5 mt-md-0">
   <div class="card">
       <div class="card-header bg-success-one">
           <h5 class="text-light text-center">নোটিশ বোর্ড </h5>
       </div>
       <div class="card-body pb-4" id="notice-board">
           <p class="card-text"><a href="">রাজশাহী মহানগরীর সরকারি মাধ্যমিক বিদ্যালয়সমূহে ২০২১ শিক্ষাবর্ষে ভর্তির <i class="icofont-arrow-right"></i></a></p>
           <hr>
           <p class="card-text"><a href="">২০২১ শিক্ষাবর্ষে সরকারি মাধ্যমিক বিদ্যালয়ে শিক্ষার্থী ভর্তি বিজ্ঞপ্তি । <i class="icofont-arrow-right"></i></a></p>
           <hr>
           <p class="card-text"><a href="">রাজশাহী সরকারি স্কুল এন্ড কলেজে ২০২০-২০২১ শিক্ষাবর্ষে একাদশ শ্রেণিতে ভর্তিকৃত ছাত্রদের অনলাইন ক্লাস রুটিন। <i class="icofont-arrow-right"></i></a></p>
           <hr>
           <p class="card-text"><a href="">রাজশাহী সরকারি স্কুল এন্ড কলেজে একাদশ শ্রেণিতে নতুন ভর্তিকৃত ছাত্রদের জন্য নোটিশ।<i class="icofont-arrow-right"></i></a></p>
           <hr>
           <p class="card-text"><a href="">রাজশাহী সরকারি স্কুল এন্ড কলেজের একাদশ শ্রেণির ছাত্রদের উপবৃত্তি সংক্রান্ত নোটিশ।<i class="icofont-arrow-right"></i></a></p>
           <hr>
           <p class="card-text"><a href="">রাজশাহী সরকারি স্কুল এন্ড কলেজে একাদশ শ্রেণিতে নতুন ভর্তিকৃত ছাত্রদের জন্য নোটিশ।<i class="icofont-arrow-right"></i></a></p>
           <hr>
       </div>
   </div>
</div>
@endsection

{{-- Right Sidebar Second Block --}}
{{-- Techer Login --}}
@section('right-section-two')
<div class="card mt-5">
   <div class="card-header bg-success-one">
       <h5 class="text-light text-center">শিক্ষক লগইন </h5>
   </div>
   <div class="card-body pb-4" id="notice-board">
       <form action="{{ route('login') }}" method="POST">
        @csrf
           <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="ইমেইল অ্যাড্রেস "  autocomplete="email">
            @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
           </div>
           <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="পাসওয়ার্ড" name="password" autocomplete="current-password">

            @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
           </div>
           <button type="submit" class="btn bg-success-one text-light">সাবমিট </button>
       </form>
   </div>
</div>
@endsection