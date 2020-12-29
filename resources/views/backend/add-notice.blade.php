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
         <form>
               <div class="card-body">
                  <div class="form-group">
                     <label>Notice Title</label>
                     <input type="text" class="form-control" placeholder="Enter Notice Title">
                  </div>
                  <div class="form-group">
                     <label for="exampleInputFile">Select Your Notice File (pdf)</label>
                     <div class="input-group">
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                           </div>
                           <div class="input-group-append">
                              <span class="input-group-text">Upload</span>
                           </div>
                     </div>
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
