@extends('layouts.frontend')

@section('announcement-section')
<div id="annaounce" class="container">
   <div class="row mt-3">
     <div class="">
       <p class="btn ann-title bg-success-one text-light">বিজ্ঞপ্তি :: </p>
     </div>
     <div class="col pt-2">
      <marquee scrollamount='2' direction="Left" onmouseover="this.stop()" onmouseout="this.start()">
        @foreach ($data as $item)
        <span class="mr-3"><a href="{{ asset($item->notice_file) }}"><i class="icofont-hand-right"></i> {{ $item->notice_title }}</a></span>             
        @endforeach
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
         <img src="frontend/assets/img/carousel/slider1.jpg" alt="Los Angeles">
       </div>
       <div class="carousel-item">
         <img src="frontend/assets/img/carousel/slider2.jpg" alt="Chicago">
       </div>
       <div class="carousel-item">
         <img src="frontend/assets/img/carousel/slider3.jpg" alt="New York">
       </div>
       <div class="carousel-item">
         <img src="frontend/assets/img/carousel/slider4.jpg" alt="New York">
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
          <p> কালের সাক্ষী হয়ে দাঁড়িয়ে আছে দামকুড়া হাট উচ্চ বিদ্যালয়। </p>
          <p>এই বিদ্যালয়ে প্রত্যক্ষ করেছে ব্রিটিশ ভারত আমল, পাকিস্তান আমল স্বাধীন এবং স্বাধীন বাংলাদেশ।  দামকুড়া হাট প্রাইমারি স্কুল প্রতিষ্ঠার মধ্যে দিয়ে যাত্রা শুরু হলেও কালক্রমে মাইনর ইংলিশ স্কুল (ME SCHOLL) এবং পরবর্তীতে এই উচ্চ বিদ্যাপীঠ প্রতিষ্ঠিত হয়। অতঃপর দামকুড়া হাট পাবলিক বিদ্যালয় , কলেজ , কারিগরি বিদ্যালয় , মাদ্রাসা, এবং মর্নিংসান পাবলিক স্কুল, ইসলামী একাডেমি, এমআর প্রভাত বিদ্যালয় ও রিভারডেল নামে চারটি স্কুল হয়েছে।  এই এলাকায় এই সকল প্রতিষ্টানে অস্তিত্ব মানুষের সচেতনতা ও আলোকিত মানুষের তৈরির প্রচেষ্টার নির্দেশক।  কিন্তু প্রসঙ্গ দামকুড়া হাট উচ্চ বিদ্দ্যালয় প্রতিষ্ঠার ইতিবৃত্ত। আর এ জন্যই আমাদের একটু পিছনে যেতে হবে। </p>
          <p>শতাধিক বছের পূর্বে এলাকার সর্ব শ্রেণীর মানুষ একটা বদ্ধ হয়ে বর্তমানে (CMES) কারিগরি বিদ্যালয় এর স্থানে প্রাচীন এর বিশাল আমি গাছের নিচে দামকুড়া হাত প্রাইমারি স্কুল প্রতিষ্ঠা করেন।  নিজেদের ওই অর্থয়নে কাঠের খুঁটি বাসের বেড়া দিয়ে কোনো রকম স্কুল যাত্রা শুরু হয়। অতঃপর কাশিয়াডাঙ্গার জমিদার রাম রঞ্জন মল্লিক এই স্কুলের পৃষ্ঠপোষকতায় এগিয়ে আসেন। তিনি সরল মনের এলাকাবাসীর সামনে চাহিদা অনুযায়ী কাঠের জন্য অনেক গাছ দেন করেন।  ১৯২৩ সালে স্কুলের নাম করণ করা হয় (রামরঞ্জন মাইনর ইংলিশ স্কুল). এরপর নামকরণ (ME SCHOOL) এবং পরবর্তীতে দামকুড়া হাট সরকারি প্রাথমিক বিদ্যালয়। ছাত্ররা প্রাইমারি স্কুলের কোর্স পাঠ শেষ করার পর উচ্চ বিদ্যালয়ে পড়ার জন্য এলাকায় উচ্চ বিদ্যালয়ের অভাব এক নতুন সমস্যা হিসাবে আবির্ভুত হয়। এই অবস্থায় হাতে গোনা কয়েক জন ছাত্র রাজশাহী লোকনাথ উচ্চ বিদ্যালয়ে ভর্তি হতে বাধ্য হয়। এসকল ছাত্রের মধ্যে জনাব হানিফ উদ্দিন চৌধুরী, আব্দুল আজিজ সরকার ও জনাব বশির উদ্দিনের নাম তথ্য হিসেবে পাওয়া  যাই। শুরু হলো দামকুড়া হাট উচ্চ বিদ্যালয় প্রতিষ্ঠার জন্য অক্লান্ত প্ররিশ্রম। এ প্রচেষ্টা এবং আয়োজন আগে থেকেই শুরু হলেও ১৯৪৭ সালের ২রা ফেব্রুয়ারী কাগজে কলমে স্কুল প্রতিষ্ঠত হয় বলে নথি পত্রে পরিলক্ষিত হয়।</p>
          <p>মাইনর স্কুল এবং হাই স্কুল প্রতিষ্ঠার জন্য এলাকার সর্ব শ্রেণীর মানুষের পাশাপাশি বিশেষ করে যারা সংগঠন ও পথ প্রদর্শক ছিলেন তাদের অনেক জন্ম যন্ত্রনা সইতে হয়েছে। মাইনর স্কুল পুরোটাই ব্রিটিস আমলে এবং হাই স্কুল ব্রিটিস আমলে শেষ মুহূর্তে এবং পাকিস্তানী আমলের সূচনা লগ্নে প্রতিষ্ঠত হয়। সুতরাং এই স্কুল সেসময় বিশেষ কোনো সরকারি সহযোগিতা পাইনি। ভরসা এলাকাবাসির দানখয়রাত। তবুও থেমে থাকেনি অগ্রযাত্রা-বয়ে চলেছে নিরন্তর। </p>
          <p>দামকুড়া বিদ্যালয় প্রতিষ্টা কালকে দুটি গুরুত্বপূর্ণ ধাপে বিবেচনা করলে প্রথম ধাপ মাইনর স্কুল এবং দ্বিতীয় ধাপ উচ্চ বিদ্যালয়। প্রথম এবং দ্বিতীয়ধাপে এলাকায় যে সকল অগ্রপথিক বিশেষ ভূমিকা ও অবদান রেখেছেন তাদের প্রতি সশ্রদ্ধ সালাম। </p>
          <span><a class="text-danger" href="{{ url('/about') }}">বিস্তারিত <i class="icofont-arrow-right"></i></a></span>
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
              <p class="card-text"> এই যে পবিত্র ভূমি, সবুজ চত্বর সারি সারি বৃক্ষরাজি, ছায়া সুনিবিড় শ্যামল মায়াবী এক আভরণ ছড়িয়ে বিরাজমান , পূর্বে মহাসড়ক রাজশাহী শহর থেকে কাঁকন হাট হয়ে চলে গেছে আরো বহুদূর। পশ্চিম পাস দিয়ে বয়ে চলেছে খাড়ি এক সময় স্রোতস্বীনি জুয়াখালি নদী দক্ষিণ দিকে দৃষ্টিনন্দন সবুজ খেলার মাঠ ও আম্রকানন, উত্তর পূর্বাংশে রয়েছে......</p>
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
          @foreach ($data as $item)
          <p class="card-text"><a href="{{ asset($item->notice_file) }}">{{ $item->notice_title }} <i class="icofont-arrow-right"></i></a></p><hr>
          @endforeach
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