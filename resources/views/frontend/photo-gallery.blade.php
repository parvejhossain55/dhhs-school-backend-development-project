@extends('layouts.frontend')

@section('onlybody')
   <div class="row">
      <div class="col">
         <div class="card mt-3 mt-lg-0">
            <div class="card-header bg-success-one">
              <p class="h5 text-light">ফটো গ্যালারি</p>
            </div>
            <div class="card-body">
               <div class="row">
                  @foreach ($data as $item) 
                     <div class="col-md-3 mb-1">
                        <a href="{{ asset($item->gallery_photo) }}" data-fancybox="images" data-caption="{{ $item->gallery_desc }}">
                           <img class="img-fluid" src="{{ asset($item->gallery_photo) }}" />
                        </a>
                     </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection