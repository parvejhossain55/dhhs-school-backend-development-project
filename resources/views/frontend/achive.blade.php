@extends('layouts.frontend')
{{-- School Welcome Message --}}
@section('onlybody')
<div class="student-of-six">
    <div class="card mt-3 mt-lg-0">
        <div class="card-header bg-success-one">
            <p class="h5 text-light">বিদ্যালয়ের সকল অর্জন সমূহ </p>
        </div>
        <div class="card-body">
         {{-- school achivement --}}
         <div class="row">
           @foreach ($achive as $item)
           <div class="col-md-6">
            <div class="card mb-4">
              <img src="{{ asset($item->achive_photo) }}" class="card-img-top" alt="achivement photo" height="350" width="100%">
              <div class="card-body">
                <p class="card-text">{{ $item->achive_desc }}</p>
              </div>
            </div>
           </div>               
           @endforeach
         </div>
        </div>
    </div>
</div>
@endsection
