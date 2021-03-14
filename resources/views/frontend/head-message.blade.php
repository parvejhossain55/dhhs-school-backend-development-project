@extends('layouts.frontend')

@section('announcement-section')
<div id="annaounce" class="mt-3 container">
   <div class="row">
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

{{-- Left Sidebar First Block --}}
{{-- School Welcome Message --}}
@section('left-section-one')
<div class="head-teacher">
   <div class="card">
      <div class="card-header bg-success-one">
        <h5>প্রধান শিক্ষক মোঃ ফেরদৌশ আলী</h5>
      </div>
      <div class="card-body">
        <div class="row no-gutters">
          <div class="col">
            <img style="width: 250px;" src="{{ asset('frontend/assets/img/head-teacher.jpg') }}" class="img-thumbnail d-block float-left text-sm-center mr-4 mb-2 mb-sm-0 mb-md-1" alt="...">
            <!-- <div class="card-body"> -->
            <p class="text-center">বিসমিল্লাহির রাহমানির রাহিম</p>  
            <p>আ<span style="margin-right: .5px;margin-top:.5px">স্</span>সালামুআলাইকুম, প্রিয় শিক্ষার্থী, অভিভাবক অভিনন্দন ও শুভেচ্ছা। এই যে পবিত্র ভূমি,এই সবুজ চত্বর সারি সারি বৃক্ষরাজি, ছায়া সুনিবিড় শ্যামল মায়াবী এক আভরণ ছড়িয়ে বিরাজমান, পূর্বে মহাসড়ক রাজশাহী শহর থেকে কাঁকন হাট হয়ে চলে গেছে আরো বহুদূর। পশ্চিম পাস দিয়ে বয়ে চলেছে খাড়ি এক সময় স্রোতস্বীনি জুয়াখালি নদী, দক্ষিণ দিকে দৃষ্টিনন্দন সবুজ খেলার মাঠ ও আম্রকানন, উত্তর পূর্বাংশে রয়েছে দামকুড়া হাট (যা এই অঞ্চলের মানুষের ভাগ্যোন্নয়নের বাণিজ্যিক প্রাণ কেন্দ্র ) এর মধ্যেই তিন দিকে ঘেরা ইংরেজি 'U' অক্ষরের মত এলাকার মানুষের ভালোবাসা, দানে, শ্রমে, ঘামে, অর্থে গড়ে ওঠা নয়নাভিরাম দ্বিতল ভবন, প্রাণের শিক্ষাগৃহ- সুরম্য অট্রালিকা এ অঞ্চলের অক্সফোর্ড দামকুড়া হাট উচ্চ বিদ্যালয়।আমি এ পবিত্র বিদ্যালয়ের প্রধান শিক্ষক হিসেবে দায়িত্ব পালন করতে পেরে সত্যি গর্ব অনুভুব করি।</p>
            <p>এই বিদ্যালয়ের ছাত্র-ছাত্রী দেশে-বিদেশে ছড়াচ্ছে জ্ঞানের আলো, হয়ে উঠেছে দৃষ্টান্ত, আলোকবর্তিকা, জ্ঞান ভিত্তিক সমাজ, মহান মুক্তিযুদ্ধের চেতনায় দেশ গঠনে অন্তপ্রাণ, গড়ে তুলেছে সমৃদ্ধ অর্থনৈতিক কার্যক্রম, বিজ্ঞান ভিত্তিক দক্ষ মানব সম্পদ সরবরাহে হচ্ছে গৌরবান্বিত, শ্রেণিভিত্তিক ফলাফল, খেলাধুলা (২০১৮ খ্রিস্টাব্দে স্কুল পর্যায়ে মহিলা হকিতে বাংলাদেশ চ্যাম্পিয়ন হয়) শিল্প, সংস্কৃতি সকল বিষয় প্রানপ্রিয় এই বিদ্যালয়ের রয়েছে অভূতপূর্ব সাফল্য গাঁথা। আলোয় আলোয় ভোরে উঠুক স্বপ্ন আর সাহসে বুক বেঁধে এগিয়ে যাক প্রিয় এ বিদ্যাপীঠ। </p>
            <p>শ্রদ্ধাবনত <br>
              প্রধান শিক্ষক <br>
              দামকুড়াহাট উচ্চ বিদ্যালয়, দামকুড়া(আরএমপি), পবা, রাজশাহী
              </p>
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
   <div class="card">
       <div class="card-header bg-success-one">
           <h5 class="text-light text-center">নোটিশ বোর্ড </h5>
       </div>
       <div class="card-body pb-4" id="notice-board">
          @foreach ($data as $item)
          <p class="card-text">
            <a href="{{ asset($item->notice_file) }}">{{ $item->notice_title }} <i class="icofont-arrow-right"></i>
            <span class="float-right text-info"><i class="icofont-calendar mx-2"></i>{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</span></a>
          </p><hr>
          @endforeach
       </div>
   </div>
</div>
@endsection
