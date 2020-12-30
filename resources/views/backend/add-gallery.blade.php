@extends('layouts.backend')

@section('section-one')
   <div class="col-md-10 ">
      <!-- general form elements -->
      <div class="card card-primary">
         <div class="card-header">
               <h3 class="card-title">Add Your School Gallery Photo</h3>
         </div>
         <!-- /.card-header -->
         <!-- form start -->
         
         <form action="{{ route('add.gallery') }}" method="POST" enctype="multipart/form-data">
            @csrf
               <div class="card-body">
                  <div class="form-group">
                     <label for="exampleInputFile">Select Your Gallery Photo</label>
                     <div class="input-group">
                           <div class="custom-file">
                              <input type="file" name="gallery_photo" class="custom-file-input @error('gallery_photo') is-invalid @enderror" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                           </div>
                           <div class="input-group-append">
                              <span class="input-group-text">Upload</span>
                           </div>
                     </div>
                     @error('gallery_photo')
                         <div class="text-danger">{{ $message }}</div>
                     @enderror
                  </div>
                  <div class="form-group">
                     <label for="photoDescription">Textarea</label>
                     <textarea class="form-control @error('gallery_desc') is-invalid @enderror" name="gallery_desc" rows="3" id="photoDescription" placeholder="Enter ..."></textarea>
                  </div>
                  @error('gallery_desc')
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
