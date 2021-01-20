@extends('layouts.backend')

@section('section-one')
   <div class="col-md-10 ">
      <!-- general form elements -->
      <div class="card card-primary">
         <div class="card-header">
               <h3 class="card-title">Add Your School Notice</h3>
         </div>
         <!-- /.card-header -->
         <!-- form start -->
         <form action="{{ route('online.class.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
               <div class="card-body">
                  <input type="hidden" name="o_class_id" value="{{ $class->id }}">
                  <div class="form-group">
                     <label>Youtube Video Id</label>
                     <input type="text" name="iframe" class="form-control @error('iframe')is-invalid @enderror" value="{{ $class->iframe }}">
                     @error('iframe')
                         <div class="text-danger">{{ $message }}</div>
                     @enderror
                  </div>
                  <div class="form-group mt-5">
                     <iframe width="350" height="300" src="https://youtube.com/embed/{{ $class->iframe }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
               </div>
               <!-- /.card-body -->

               <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
               </div>
         </form>
      </div>
      <!-- /.card -->
   </div>
@endsection
