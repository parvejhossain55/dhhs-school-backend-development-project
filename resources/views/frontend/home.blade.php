@extends('layouts.frontend')

@section('announcement-section')
<div id="annaounce" class="container">
   <div class="row mt-3">
     <div class="announce-left">
       <p class="btn ann-title bg-success-one text-light">বিজ্ঞপ্তি :: </p>
     </div>
     <div class="col pt-2">
      <marquee scrollamount='2' direction="Left" onmouseover="this.stop()" onmouseout="this.start()">
        @foreach ($data as $item)
        <span class="mr-3"><a target="_blank" href="{{ asset($item->notice_file) }}"><i class="icofont-hand-right"></i> {{ $item->notice_title }}</a></span>             
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
       {{-- <li data-target="#demo" data-slide-to="3"></li> --}}
       {{-- <li data-target="#demo" data-slide-to="4"></li> --}}
     </ul>

     <!-- The slideshow -->
     <div class="carousel-inner">
       <div class="carousel-item active">
         <img src="{{ asset('frontend/assets/img/carousel/slider5.jpg') }}" alt="Los Angeles">
       </div>
       <div class="carousel-item">
         <img src="{{ asset('frontend/assets/img/carousel/slider6.jpg') }}" alt="Los Angeles">
       </div>
       <div class="carousel-item">
         <img src="{{ asset('frontend/assets/img/carousel/slider1.jpg') }}" alt="Los Angeles">
       </div>
       {{-- <div class="carousel-item">
         <img src="{{ asset('frontend/assets/img/carousel/slider2.jpg') }}" alt="Chicago">
       </div> --}}
       {{-- <div class="carousel-item">
         <img src="{{ asset('frontend/assets/img/carousel/slider3.jpg') }}" alt="New York">
       </div> --}}
       {{-- <div class="carousel-item">
         <img src="{{ asset('frontend/assets/img/carousel/slider4.jpg') }}" alt="New York">
       </div> --}}
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
          <h2 class="text-light h5">দামকুড়া হাট উচ্চ বিদ্যালয়ে স্বাগতম</h2>
        </div>
        <div class="card-body">
          <p>"দোলনা থেকে কবর পর্যন্ত জ্ঞান অর্জন কর" </p>

          <p>কাশিয়াডাঙ্গার জমিদার রাম রঞ্জন মল্লিক দামকুড়া হাট উচ্চ বিদ্যালয়ের পৃষ্ঠপোষকতা করেন। ১৯২৩ সালে স্কুলের নাম করণ করা হয় RRME স্কুল (রামরঞ্জন মাইনর ইংলিশ স্কুল)। এরপর নামকরণ ME স্কুল এবং পরবর্তীতে দামকুড়া হাট সরকারি প্রাথমিক বিদ্যালয়। ছাত্ররা প্রাইমারি স্কুলের কোর্স পাঠ শেষ করার পর উচ্চ বিদ্যালয়ে পড়ার জন্য এলাকায় উচ্চ বিদ্যালয়ের অভাব এক নতুন সমস্যা হিসাবে আবির্ভুত হয়। এই অবস্থায় হাতে গোনা কয়েক জন ছাত্র রাজশাহী লোকনাথ উচ্চ বিদ্যালয়ে ভর্তি হতে বাধ্য হয়। এসকল ছাত্রের মধ্যে জনাব হানিফ উদ্দিন চৌধুরী, আব্দুল আজিজ সরকার ও জনাব বশির উদ্দিনের নাম তথ্য হিসেবে পাওয়া  যাই। শুরু হলো দামকুড়া হাট উচ্চ বিদ্যালয় প্রতিষ্ঠার জন্য অক্লান্ত প্ররিশ্রম। এ প্রচেষ্টা এবং আয়োজন আগে থেকেই শুরু হলেও ১৯৪৭ সালের ২রা ফেব্রুয়ারী কাগজে কলমে স্কুল প্রতিষ্ঠত হয় বলে নথি পত্রে পরিলক্ষিত হয়।</p>
          <p>মাইনর স্কুল এবং হাই স্কুল প্রতিষ্ঠার জন্য এলাকার সর্ব শ্রেণীর মানুষের পাশাপাশি বিশেষ করে যারা সংগঠন ও পথ প্রদর্শক ছিলেন তাদের অনেক জন্ম যন্ত্রনা সইতে হয়েছে। মাইনর স্কুল পুরোটাই ব্রিটিস আমলে এবং হাই স্কুল ব্রিটিস আমলে শেষ মুহূর্তে এবং পাকিস্তানী আমলের সূচনা লগ্নে প্রতিষ্ঠত হয়। সুতরাং এই স্কুল সেসময় বিশেষ কোনো সরকারি সহযোগিতা পাইনি। ভরসা এলাকাবাসির দানখয়রাত। তবুও থেমে থাকেনি অগ্রযাত্রা-বয়ে চলেছে নিরন্তর... <span><a target="_blank" href="{{ url('/about') }}">বিস্তারিত <i class="icofont-arrow-right"></i></a></span></p>
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
        <h5 class="text-light">প্রধান শিক্ষক <span class="text-center">মোঃ ফেরদৌশ আলী</span></h5>
      </div>
      <div class="card-body">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="{{ asset('frontend/assets/img/head-teacher.jpg') }}" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body ">
              <p class="text-center mb-1"><b>"বাণী"</b></p>
              <p class="text-center">বিসমিল্লাহির রাহমানির রাহিম</p>
              <p>আ<span style="margin-right: .5px;margin-top:.5px">স্</span>সালামুআলাইকুম, প্রিয় শিক্ষার্থী, অভিভাবক অভিনন্দন ও শুভেচ্ছা। এই যে পবিত্র ভূমি,এই সবুজ চত্বর সারি সারি বৃক্ষরাজি, ছায়া সুনিবিড় শ্যামল মায়াবী এক আভরণ ছড়িয়ে বিরাজমান, পূর্বে মহাসড়ক রাজশাহী শহর থেকে কাঁকন হাট হয়ে চলে গেছে আরো বহুদূর। পশ্চিম পাস দিয়ে বয়ে চলেছে খাড়ি এক সময় স্রোতস্বীনি জুয়াখালি নদী, দক্ষিণ দিকে দৃষ্টিনন্দন সবুজ খেলার মাঠ ও আম্রকানন, উত্তর পূর্বাংশে রয়েছে দামকুড়া হাট (যা এই অঞ্চলের মানুষের ভাগ্যোন্নয়নের বাণিজ্যিক প্রাণ কেন্দ্র ) এর মধ্যেই তিন দিকে ঘেরা ইংরেজি 'U' অক্ষরের মত এলাকার মানুষের ভালোবাসা, দানে, শ্রমে, ঘামে, অর্থে গড়ে ওঠা নয়নাভিরাম দ্বিতল ভবন, প্রাণের শিক্ষাগৃহ- সুরম্য অট্রালিকা এ অঞ্চলের....</p>
              <p class="card-text"><a target="_blank" href="{{ url('/head-message') }}">প্রধান শিক্ষকের বানী </a> <i class="icofont-arrow-right"></i></p>
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
        <iframe width="100%" height="300px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d908.3313678555003!2d88.52215570552724!3d24.404757927696625!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xca2adcd895ffb2ac!2sDamkura%20Hat%20High%20School!5e0!3m2!1sen!2sbd!4v1611151235840!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
          <p class="card-text">
            <a target="_blank" href="{{ asset($item->notice_file) }}">{{ $item->notice_title }} <i class="icofont-arrow-right"></i>
            <span class="float-right text-info"><i class="icofont-calendar mx-2"></i>{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</span></a>
          </p><hr>
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
       <h5 class="text-light text-center">ই-সেবা</h5>
   </div>
   <div class="card-body pb-4" id="notice-board">
      <ul class="list-unstyled">
        <li><i class="icofont-listine-dots mr-2 text-info"></i><a target="_blank" href="https://www.alorpathshala.org/">ই-লাইব্রেরী</a></li><hr>
        <li><i class="icofont-listine-dots mr-2 text-info"></i><a target="_blank" href="https://edutubebd.com/">ই-লার্নিং উপকরণ এবং ই-ম্যানুয়াল</a></li><hr>
        <li><i class="icofont-listine-dots mr-2 text-info"></i><a target="_blank" href="https://eboardresults.com/v2/home">পাবলিক পরীক্ষার ফলাফল</a></li><hr>
        <li><i class="icofont-listine-dots mr-2 text-info"></i><a target="_blank" href="http://www.banbeis.gov.bd/">বাংলাদেশ শিক্ষাতথ্য ও পরিসংখ্যান ব্যুরো (ব্যানবেইস)</a></li><hr>
        <li><i class="icofont-listine-dots mr-2 text-info"></i><a target="_blank" href="http://seo.paba.rajshahi.gov.bd/">উপজেলা মাধ্যমিক শিক্ষা অফিস রাজশাহী</a></li><hr>
        <li><i class="icofont-listine-dots mr-2 text-info"></i><a target="_blank" href="https://www.nctb.gov.bd/">জাতীয় শিক্ষাক্রম ও পাঠ্যপুস্তক বোর্ড (এনসিটিবি)</a></li>
      </ul>
   </div>
</div>
@endsection

{{-- Right Sidebar Third Block --}}
{{-- E-Sheba --}}
@section('right-section-three')
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

{{-- Right Sidebar Four Block --}}
{{-- Visitor Counter --}}
@section('right-section-four')
<div class="card mt-5">
   <div class="card-header bg-success-one">
       <h5 class="text-light text-center">ভিজিটর সংখ্যা</h5>
   </div>
   <div class="card-body pb-4" id="notice-board">
      {{-- website hit counter --}}
      <div class="text-center">
        {{-- <a target="_blank" href="https://www.freecounterstat.com" title="website hit counter"><img src="https://counter8.stat.ovh/private/freecounterstat.php?c=kawhzqk2sywbd7ckbub4jc6mb27q2hgh" border="0" title="website hit counter" alt="website hit counter"></a> --}}
        <!-- hitwebcounter Code START -->
        <a target="_blank" href="https://www.hitwebcounter.com" target="_blank">
        <img height="32px" src="https://hitwebcounter.com/counter/counter.php?page=7743290&style=0025&nbdigits=8&type=ip&initCount=0" title="Website Unique Visitor Counter" Alt="web counter" border="0" /></a> 
      </div>

   </div>
</div>
@endsection