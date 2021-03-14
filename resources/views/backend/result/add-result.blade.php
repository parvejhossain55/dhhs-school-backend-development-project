@extends('layouts.backend')

@section('section-one')
   <div class="col-md-10 ">
      <!-- general form elements -->
      <div class="card card-primary">
         <div class="card-header">
               <h3 class="card-title">Add Your School Result</h3>
         </div>
         <!-- /.card-header -->
         <!-- form start -->
         <form action="{{ route('result.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
               <div class="card-body">
                  <div class="form-group">
                     <label>Result Title</label>
                     <input type="text" name="result_title" class="form-control @error('result_title')is-invalid @enderror" placeholder="Enter Result Title">
                     @error('result_title')
                         <div class="text-danger">{{ $message }}</div>
                     @enderror
                  </div>
                  <div class="form-group">
                     <label for="exampleInputFile">Select Your Result File (pdf)</label>
                     <div class="input-group">
                           <div class="custom-file">
                              <input type="file" name="result_file" class="custom-file-input @error('result_file') is-invalid @enderror" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                           </div>
                           <div class="input-group-append">
                              <span class="input-group-text">Upload</span>
                           </div>
                     </div>
                     @error('result_file')
                         <div class="text-danger">{{ $message }}</div>
                     @enderror
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
