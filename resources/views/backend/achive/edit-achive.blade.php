@extends('layouts.backend')

@section('section-one')
   <div class="col-md-10 ">
      <!-- general form elements -->
      <div class="card card-primary">
         <div class="card-header">
               <h3 class="card-title">Update Your School Gallery Photo</h3>
         </div>
         <!-- /.card-header -->
         <!-- form start -->
         
         <form action="{{ url('update/achive/'.$achive->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
               <div class="card-body">    
                  <input type="hidden" name="old_achive_photo" value="{{ $achive->achive_photo }}">              
                  <div class="form-group">
                     <label for="photoDescription">Textarea</label>
                     <textarea class="form-control @error('achive_desc') is-invalid @enderror" name="achive_desc" rows="3" id="photoDescription">{{ $achive->achive_desc }}</textarea>
                  </div>
                  @error('achive_desc')
                        <div class="text-danger">{{ $message }}</div>
                  @enderror

                  <div class="form-group">
                     <label for="exampleInputFile">Select Your Notice File</label>
                     <div class="input-group">
                           <div class="custom-file">
                              <input type="file" name="achive_photo" class="custom-file-input @error('achive_photo') is-invalid @enderror" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                           </div>
                           <div class="input-group-append">
                              <span class="input-group-text">Upload</span>
                           </div>
                     </div>
                     @error('achive_photo')
                         <div class="text-danger">{{ $message }}</div>
                     @enderror
                  </div>
                  <div class="form-group">
                     <div class="form-control-label my-2"><b>Old Photo</b></div>
                     <img src="{{ asset($achive->achive_photo) }}" width="120" alt="Gallery Photo">
                  </div>
               </div>
               <!-- /.card-body -->

               <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
               </div>
         </form>
      </div>
      <!-- /.card -->
   </div>
@endsection
