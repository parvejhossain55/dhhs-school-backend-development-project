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
<div class="admission-details">
   <div class="card">
      <div class="card-header bg-success-one">
        <p class="h5 text-light">অনলাইনে আবেদনের নিয়মাবলীঃ- </p>
      </div>
      <div class="card-body">

        <ul class="list-unstyled px-3">
          <p> <span class="mr-1">১ ।</span> অনলাইনা আবেদন করার জন্য প্রথমে যেকোনো বিকাশ নম্বর থেকে ০১৭৪৫৪৫১২৪১(পার্সোনাল) নাম্বারে ভর্তি ফি ২১০ টাকা সেন্ড মানি করতে হবে। </p>
          <p><span class="mr-1">২ ।</span>টাকা পাঠানোর পর <a target="_blank" href="admission.html" class="btn btn-sm bg-success-one">ক্লিক করুন</a> প্রবেশ করে ছাত্র/ছাত্রীর সকল তথ্য সঠিক ভাবে পুরণ করতে হবে। </p>
          <p><span class="mr-1">৩ ।</span>পেমেন্ট ইনফরমেশন এর ফিল্ড এ মোবাইল নম্বর এর ঘরে যেই নম্বর থেকে টাকা পাঠাবেন সেই নম্বর বসাতে হবে এবং ট্রানসাকশান আইডি ফিল্ড এ টাকা পাঠানোর পর যেই ট্রানসাকশান আইডি পাবেন সেই আইডি বসাতে হবে।</p>
          <p><span class="mr-1">৪ ।</span>সকল তথ্য সঠিক ভাবে পূরণ করে সাবমিট বাটন ক্লিক করতে হবে। </p>
          <p><span class="mr-1">৫ ।</span>সাবমিট করার পর রিসিপ্ট কপি প্রিন্ট করে সাথে রাখতে হবে।</p>
        </ul>
        <!-- <p>রাজশাহী সরকারি স্কুল দেশের প্রথম ও অতি প্রাচীন ঐতিহ্যবাহী শিক্ষা প্রতিষ্ঠান। সম্ভাবনাময় প্রতিভার
          সুপ্তবীজ সম্বলিত এই বিদ্যাপীঠ তার স্বীয় অস্তিত্বের ইতিহাস। ঐশ্বর্য্যও ঐতিহ্যকে স্বযত্নে লালন করে আসছে
          সুদীর্ঘ পৌনে দুইশতাধিককালব্যাপী। দেশের ইংরেজী শিক্ষার প্রসার লাভের জন্য লর্ড ইউলিয়াম বেন্টিং তার
          ব্যক্তিগত প্রচেষ্টা ও উৎসাহে ১৮২৮ সালে “বউলিয়া ইংলিশ স্কুল” নামে সর্বপ্রথম এই স্কুলটি প্রতিষ্ঠা করেন।
          পদ্মানদীর তীরে বড়কুঠির কাছাকাছি খড়ের দোচালা ঘরে টাইল নির্মিত বারান্দায় এর প্রথম কার্যক্রম শুরু হয়।
          প্রথমদিকে এটি ছিল একটি অবৈতনিক প্রাইভেট স্কুল। সেসময় স্কুলের জন্য কোন সরকারী সাহায্য বরাদ্দ ছিলনা।
          সুতরাং রাজশাহীতে বসবাসকারী ইংরেজ কর্মকর্তা, আইনব্যবসায়ী এবং নাটোর দিঘাপতিয়া, দুবলহাটি, পুঠিয়া ও বলিহারের
          জমিদারদের সাহায্য ও সহযোগিতায় স্কুলটি চলতে থাকে। এদেশের তৎকালীন শিক্ষা বিস্তারের ভারপ্রাপ্ত কর্মকর্তা
          ইউলিয়াম অ্যাডাম ১৮৩৫. <a class="text-danger" href="">বিস্তারিত <i class="bx bx-right-arrow-alt"></i></a>
        </p> -->
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
