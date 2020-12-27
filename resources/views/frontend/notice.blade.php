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

@section('onlybody')
   <div class="row">
      <div class="col">
         <div class="teacher-list">
            <div class="table-responsive">
               <table class="table table-bordered">
                  <thead class="bg-success-one text-light">
                    <tr>
                      <th>নং</th>
                      <th>নোটিশের নাম</th>
                      <th>প্রকাশের তারিখ</th>
                      <th>বিস্তারিত </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>২য় হতে দ্বাদশ শ্রেণি পর্যন্ত বেতন পরিশোধ সংক্রান্ত জরুরী বিজ্ঞপ্তি।</td>
                      <td>13/12/2020</td>
                      <td><a href="#" class="btn btn-outline-successs"><i class="icofont-download"></i> ডাউনলোড </a></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>শহিদ বুদ্ধিজীবী দিবস পালন সম্পর্কিত বিজ্ঞপ্তি।</td>
                      <td>13/12/2020</td>
                      <td><a href="#" class="btn btn-outline-successs"><i class="icofont-download"></i> ডাউনলোড </a></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>দ্বিতীয় হতে দশম শ্রেণি পর্যন্ত শিক্ষার্থীদের বেতন পরিশোধ সংক্রান্ত জরুরী বিজ্ঞপ্তি ১০-১২০২০২০খ্রি.</td>
                      <td>13/12/2020</td>
                      <td><a href="#" class="btn btn-outline-successs"><i class="icofont-download"></i> ডাউনলোড </a></td>
                    </tr>
                    <tr>
                      <td>14</td>
                      <td>তৃতীয় সপ্তাহের এ্যাসাইনমেন্ট জমাদান সম্পর্কিত বিজ্ঞপ্তি ।</td>
                      <td>13/12/2020</td>
                      <td><a href="#" class="btn btn-outline-successs"><i class="icofont-download"></i> ডাউনলোড </a></td>
                    </tr>
                  </tbody>
                </table>
            </div>
         </div>
      </div>
   </div>
@endsection