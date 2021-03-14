@extends('layouts.frontend')
{{-- Online Class --}}
@section('onlybody')
<div class="online-class">
    <div class="card mt-3 mt-lg-0">
        <div class="card-header bg-success-one">
            <p class="h5 text-light">অনলাইন লাইভ ক্লাস</p>
        </div>
        <div class="card-body">
         <div class="row">
             @foreach ($online_class as $item)
             <div class="col-md-4 mb-3">
                <iframe width="100%" height="220px" src="https://youtube.com/embed/{{ $item->iframe }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             </div>
             @endforeach
         </div>
      </div>
   </div>
</div>
@endsection
