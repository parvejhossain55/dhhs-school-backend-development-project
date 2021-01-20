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
                  {{-- @foreach ($data as $item)    
                  <div class="col-md-6 col-lg-4">
                     <div class="card mb-4">
                        <img height="360px" src="{{ asset($item->gallery_photo) }}" class="card-img-top bordered" alt="...">
                        <div class="card-body">
                          <p class="card-text">{{ $item->gallery_desc }}</p>
                        </div>
                      </div>
                  </div>
                  @endforeach --}}

                  {{-- <div class="col-md-4">
                     <a href="image_2.jpg" data-fancybox="gallery" data-caption="Caption #2">
                        <img src="thumbnail_2.jpg" alt="" />
                     </a>
                  </div> --}}
                  <div class="row">
                     @foreach ($data as $item) 
                        <div class="col-md-3 mb-4">
                           <a href="{{ asset($item->gallery_photo) }}" data-fancybox="images" data-caption="{{ $item->gallery_desc }}">
                              <img class="img-fluid" src="{{ asset($item->gallery_photo) }}" />
                           </a>
                        </div>
                     @endforeach
                  </div>
                  {{-- {{ $data->links() }} --}}
               </div>
            </div>
          </div>
      </div>
   </div>
@endsection