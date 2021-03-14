@extends('layouts.frontend')

{{-- @section('announcement-section')
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
@endsection --}}

@section('onlybody')
   <div class="row my-3 mt-lg-0">
      <div class="col">
         <div class="notice-list">
            <div class="table-responsive">
              <div class="card">
                <div class="card-header bg-success-one">
                  <h5>নোটিশ</h5>
                </div>
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>নং</th>
                        <th>নোটিশের নাম</th>
                        <th>প্রকাশের তারিখ</th>
                        <th>বিস্তারিত</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php($i=1)
                      @foreach ($data as $item)    
                        <tr>
                          <td>{{ $i++ }}</td>
                          <td>{{ $item->notice_title }}</td>
                          <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</td>
                          <td><a href="{{ asset($item->notice_file) }}" class="btn btn-outline-successs"><i class="icofont-download"></i> ডাউনলোড </a></td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
           </div>
         </div>
      </div>
   </div>
@endsection