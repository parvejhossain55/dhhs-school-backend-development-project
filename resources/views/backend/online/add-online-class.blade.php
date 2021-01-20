@extends('layouts.backend')

@section('section-one')
   <div class="col-md-10 ">
      <!-- general form elements -->
      <div class="card card-primary">
         <div class="card-header">
               <h3 class="card-title">Add Your School Online Class</h3>
         </div>
         <!-- /.card-header -->
         <!-- form start -->
         
         <form action="{{ route('add.online.class') }}" method="POST">
            @csrf
               <div class="card-body">
                  <div class="form-group">
                     <label for="photoDescription">Youtbe Video Id</label>
                     <textarea class="form-control @error('iframe') is-invalid @enderror" name="iframe" rows="4" id="photoDescription" placeholder="Example  k5OWJ7d21SY"></textarea>
                  </div>
                  @error('iframe')
                        <div class="text-danger">{{ $message }}</div>
                  @enderror
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
