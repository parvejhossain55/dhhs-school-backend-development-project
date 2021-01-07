@extends('layouts.frontend')

@section('onlybody')
   <div class="row">
      <div class="col">
         <div class="card">
            <div class="card-header bg-success-one">
              <p class="h5 text-light">ফটো গ্যালারি</p>
            </div>
            <div class="card-body">
               <div class="row">
                  @foreach ($data as $item)    
                  <div class="col-md-6 col-lg-4">
                     <div class="card mb-4">
                        <img height="360px" src="{{ asset($item->gallery_photo) }}" class="card-img-top bordered" alt="...">
                        <div class="card-body">
                          <p class="card-text">{{ $item->gallery_desc }}</p>
                        </div>
                      </div>
                  </div>
                  @endforeach
                  {{-- <div class="col-md-6 col-lg-4">
                     <div class="card mb-4">
                        <img height="360px" src="frontend/assets/img/carousel/carousel2.jpg" class="card-img-top bordered" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to .</p>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                     <div  class="card mb-4">
                        <img height="360px" src="frontend/assets/img/carousel/carousel3.jpg" class="card-img-top bordered" alt="...">
                        <div class="card-body">
                          <p class="card-text">জাতীয় শিক্ষা সপ্তাহ-২০১৮ এর জাতীয় পর্যায়ের প্রতিযোগিতায় রাজশাহী সরকারি স্কুল.</p>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                     <div class="card mb-4">
                        <img height="360px" src="frontend/assets/img/carousel/carousel1.jpg" class="card-img-top bordered" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to .</p>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                     <div class="card mb-4">
                        <img height="360px" src="frontend/assets/img/carousel/carousel2.jpg" class="card-img-top bordered" alt="...">
                        <div class="card-body">
                          <p class="card-text">জাতীয় শিক্ষা সপ্তাহ-২০১৮ এর জাতীয় পর্যায়ের প্রতিযোগিতায় রাজশাহী সরকারি স্কুল.</p>
                        </div>
                      </div>
                  </div> --}}
               </div>
            </div>
            {{-- {{ $data->links() }} --}}
          </div>
      </div>
   </div>
@endsection