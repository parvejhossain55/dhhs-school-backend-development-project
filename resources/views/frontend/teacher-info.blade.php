@extends('layouts.frontend')

@section('onlybody')
   <div class="row">
      <div class="col">
         <div class="teacher-list">
            <div class="table-responsive">
               <table class="table table-bordered">
                  <thead class="bg-success-one">
                    <tr>
                      <th>শিক্ষক ফটো</th>
                      <th>শিক্ষকের নাম</th>
                      <th>পদবী </th>
                      <th>মোবাইল</th>
                    </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td><img src="frontend/assets/img/trainers/trainer-3.jpg" alt=""></td>
                        <td><h4>মোঃ নজরুল ইসলাম</h4></td>
                        <td>সহকারী শিক্ষক </td>
                        <td>০১৭৫৪৬৮৯৫৫</td>
                      </tr>
                    <tr>
                      <td><img src="frontend/assets/img/trainers/trainer-1.jpg" alt=""></td>
                      <td><h4>মোঃ মেরাজুল ইসলাম</h4></td>
                      <td>শিক্ষক </td>
                      <td>০১৬০২১৫৪২৮৫</td> 
                    </tr>
                    <tr>
                     <td><img src="frontend/assets/img/trainers/trainer-2.jpg" alt=""></td>
                      <td><h4>মোঃ শাহিন আলম </h4></td>
                      <td>শিক্ষক </td>
                      <td>০১৫০১২৪৫৭৫৫</td>
                    </tr>
                    <tr>
                      <td><img src="frontend/assets/img/trainers/trainer-3.jpg" alt=""></td>
                      <td><h4>মোঃ নজরুল ইসলাম</h4></td>
                      <td>সহকারী শিক্ষক </td>
                      <td>০১৭৫৪৬৮৯৫৫</td>
                    </tr>
                  </tbody>
                </table>
            </div>
         </div>
      </div>
   </div>
@endsection