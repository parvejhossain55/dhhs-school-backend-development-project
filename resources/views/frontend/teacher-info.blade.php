@extends('layouts.frontend')

@section('onlybody')
  <div class="card mt-3 mt-lg-0">
    <div class="card-header bg-success-one">
      <h5>শিক্ষক ও কর্মচারী </h5>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col">
           <div class="teacher-list">
              <div class="table-responsive">
                 <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>শিক্ষক ফটো</th>
                        <th>শিক্ষকের নাম</th>
                        <th>পদবী</th>
                        <th>বিষয়</th>
                        <th>মোবাইল</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><img src="{{ asset('frontend/assets/img/teacher/mannan.jpg') }}" alt=""></td>
                        <td><h4>আলহাজ্ব মোঃ আব্দুল মান্নান</h4></td>
                        <td>সহকারি প্রধান শিক্ষক</td>
                        <td></td>
                        <td>০১৭২৫০২০৮০৯</td>
                      </tr>
                      <tr>
                        <td><img src="{{ asset('frontend/assets/img/teacher/najmul.jpg') }}" alt=""></td>
                        <td><h4>মোঃ নজমুল আলম</h4></td>
                        <td>সহকারি শিক্ষক</td>
                        <td>ইংরেজি (ENGT)</td>
                        <td>০১৭৮৫৪০৯১৮০</td> 
                      </tr>
                      <tr>
                        <td><img src="{{ asset('frontend/assets/img/teacher/nurnahar.jpg') }}" alt=""></td>
                        <td><h4>মোসাঃ নূরুন্নাহার</h4></td>
                        <td>সহকারি শিক্ষক</td>
                        <td>বাংলা (BANT)</td>
                        <td>০১৭৮৯৮৭৬৯২১</td> 
                      </tr>
                      <tr>
                        <td><img src="{{ asset('frontend/assets/img/teacher/nazrul.jpg') }}" alt=""></td>
                        <td><h4>মোঃ নজরুল ইসলাম</h4></td>
                        <td>সহকারি শিক্ষক</td>
                        <td>সামাজিক বিজ্ঞান (SST(S))</td>
                        <td>০১৭৪০৮২৭০১০</td> 
                      </tr>
                      <tr>
                        <td><img src="{{ asset('frontend/assets/img/teacher/mahabubur.jpg') }}" alt=""></td>
                        <td><h4>মোঃ মাহাবুবুর রহমান</h4></td>
                        <td>সহকারি শিক্ষক</td>
                        <td>বাংলা (BANT(S))</td>
                        <td>০১৭৪০৮১৫৫৫৬</td> 
                      </tr>
                      <tr>
                        <td><img src="{{ asset('frontend/assets/img/teacher/jhorna.jpg') }}" alt=""></td>
                        <td><h4>মোসাঃ খালেদা পারভীন</h4></td>
                        <td>সহকারি শিক্ষক</td>
                        <td>কম্পিউটার</td>
                        <td>০১৬০২১৫৪২৮৫</td> 
                      </tr>
                      <tr>
                        <td><img src="{{ asset('frontend/assets/img/teacher/sahin.jpg') }}" alt=""></td>
                        <td><h4>মোঃ শাহীনূর ইসলাম (শাহীন)</h4></td>
                        <td>সহকারি শিক্ষক</td>
                        <td>উদ্ভিদ বিদ্যা(AGT)</td>
                        <td>০১৭৪০৮৪১৩৩৩</td> 
                      </tr>
                      <tr>
                        <td><img src="{{ asset('frontend/assets/img/teacher/atiya.jpg') }}" alt=""></td>
                        <td><h4>মোসাঃ আতিয়া পারভীন</h4></td>
                        <td>সহকারি শিক্ষক</td>
                        <td>সামাজিক বিজ্ঞান(SST(S))</td>
                        <td>০১৭৭৬৭২৯১৪২</td> 
                      </tr>
                      <tr>
                        <td><img src="{{ asset('frontend/assets/img/teacher/badsha.jpg') }}" alt=""></td>
                        <td><h4>মোঃ গোলাম মুর্ত্তজা বাদশা</h4></td>
                        <td>সহকারি শিক্ষক</td>
                        <td>শরীর চর্চা(PHT)</td>
                        <td>০১৭৪০৮৩৬৬৮৮</td> 
                      </tr>
                      <tr>
                        <td><img src="{{ asset('frontend/assets/img/teacher/meraj.jpg') }}" alt=""></td>
                        <td><h4>মোঃ মেরাজুল ইসলাম</h4></td>
                        <td>সহকারি শিক্ষক</td>
                        <td>গণিত ও বিজ্ঞান(MGST)</td>
                        <td>০১৭৪৫৫৩২০৪৪</td> 
                      </tr>
                      <tr>
                        <td><img src="{{ asset('frontend/assets/img/teacher/dulal.jpg') }}" alt=""></td>
                        <td><h4>দুলাল চন্দ্র পাল</h4></td>
                        <td>সহকারি শিক্ষক</td>
                        <td>হিন্দু ধর্ম(HRT)</td>
                        <td>০১৭৩১২৩৮৪৮৬</td> 
                      </tr>
                      <tr>
                        <td><img src="{{ asset('frontend/assets/img/teacher/mijan.jpg') }}" alt=""></td>
                        <td><h4>মোঃ মিজানুর রহমান</h4></td>
                        <td>সহকারি শিক্ষক</td>
                        <td>বিজ্ঞান(ST)</td>
                        <td>০১৭১৩৭২১৫৪৫</td> 
                      </tr>
                      <tr>
                        <td><img src="{{ asset('frontend/assets/img/teacher/miyarul.jpg') }}" alt=""></td>
                        <td><h4>মোঃ মিয়ারুল ইসলাম</h4></td>
                        <td>সহকারি শিক্ষক</td>
                        <td>ব্যবসায় শিক্ষা(BST)</td>
                        <td>০১৭৬৫০২৫৫১০</td> 
                      </tr>
                      <tr>
                        <td><img src="{{ asset('frontend/assets/img/teacher/vobes.jpg') }}" alt=""></td>
                        <td><h4>ভবেশ সরেন</h4></td>
                        <td>সহকারি শিক্ষক</td>
                        <td>খ্রিস্টান ধর্ম(CRT)</td>
                        <td>০১৯৩১৫৩৪২১৬</td> 
                      </tr>
                      <tr>
                        <td><img src="{{ asset('frontend/assets/img/teacher/mehedi.jpg') }}" alt=""></td>
                        <td><h4>মোঃ মেহদী হাসান</h4></td>
                        <td>সহকারি শিক্ষক</td>
                        <td>সামাজিক বিজ্ঞান(SST(S))</td>
                        <td>০১৭১৭৭৩০০২৩</td> 
                      </tr>
                      <tr>
                        <td><img src="{{ asset('frontend/assets/img/teacher/monoware.png') }}" alt=""></td>
                        <td><h4>মুহাম্মাদ মনোয়ার হুসাইন</h4></td>
                        <td>সহকারি শিক্ষক</td>
                        <td>ইসলাম শিক্ষা(MRT)</td>
                        <td>০১৭১৭০১২৮৫০</td> 
                      </tr>
                      <tr>
                        <td><img src="{{ asset('frontend/assets/img/teacher/rafiqul.jpg') }}" alt=""></td>
                        <td><h4>মোঃ রফিকুল ইসলাম</h4></td>
                        <td>সহকারি গ্রন্থাগারিক/ ক্যাটালগার</td>
                        <td>গ্রন্থাগার বিজ্ঞান(AL)</td>
                        <td>০১৭১৩৮৬০৫৩০</td> 
                      </tr>
                      <tr>
                        <td><img src="{{ asset('frontend/assets/img/teacher/tuhin.jpg') }}" alt=""></td>
                        <td><h4>মোঃ সানোয়ার পারভেজ তুহীন(খন্ডকালীন)</h4></td>
                        <td>সহকারি শিক্ষক</td>
                        <td>ইংরেজি (ENGT)</td>
                        <td>০১৭৭৭৯৫১৭৪৭</td> 
                      </tr>
                      <tr>
                        <td><img src="{{ asset('frontend/assets/img/teacher/masum.jpg') }}" alt=""></td>
                        <td><h4>মোঃ মাসুম বিল্লাহ</h4></td>
                        <td>অফিস সহকারি কাম কম্পিউটার অপারেটর</td>
                        <td></td>
                        <td>০১৭৬৭৪০০৩৬৬</td> 
                      </tr>
                      <tr>
                        <td><img src="{{ asset('frontend/assets/img/teacher/jamal.jpg') }}" alt=""></td>
                        <td><h4>মোঃ জামাল উদ্দিন</h4></td>
                        <td>অফিস সহায়ক</td>
                        <td></td>
                        <td>০১৬০২১৫৪২৮৫</td> 
                      </tr>
                      <tr>
                        <td><img src="{{ asset('frontend/assets/img/teacher/nasir.jpg') }}" alt=""></td>
                        <td><h4>মোঃ নাসিরুল আওয়াল</h4></td>
                        <td>অফিস সহায়ক</td>
                        <td></td>
                        <td>০১৭৯৮১১৩৫৩১</td> 
                      </tr>
                      {{-- <tr>
                        <td><img src="{{ asset('frontend/assets/img/teacher/1.jpg') }}" alt=""></td>
                        <td><h4>মোসাঃ নাদিরা বেগম</h4></td>
                        <td>আয়া/অফিস সহায়ক</td>
                        <td>০১৭৫৩৫২১৫৩৭</td> 
                      </tr> --}}
                    </tbody>
                  </table>
              </div>
           </div>
        </div>
     </div>
    </div>
  </div>
@endsection