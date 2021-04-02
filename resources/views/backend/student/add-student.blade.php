@extends('layouts.backend')

@section('section-one')
   <div class="col">
      <!-- general form elements -->
      <div class="card card-primary">
         <div class="card-header">
               <h3 class="card-title">Add Student Information</h3>
         </div>
         <!-- /.card-header -->
         <!-- form start -->
         <form action="{{ route('student.store') }}" method="POST">
            @csrf
               <div class="card-body">
                  <div class="form-row my-4">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Student Name</label>
                           <input type="text" name="sname" class="form-control @error('sname')is-invalid @enderror" placeholder="Enter Student Name">
                           @error('sname')
                              <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Student Father Name</label>
                           <input type="text" name="sfname" class="form-control @error('sfname')is-invalid @enderror" placeholder="Enter Student Father Name">
                           @error('sfname')
                              <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                  </div>
                  <div class="form-row my-4">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Student Mother Name</label>
                           <input type="text" name="smname" class="form-control @error('smname')is-invalid @enderror" placeholder="Enter Student Name">
                           @error('smname')
                              <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Student Roll</label>
                           <input type="text" name="roll" class="form-control @error('roll')is-invalid @enderror" placeholder="Enter Student Father Name">
                           @error('roll')
                              <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label for="exampleFormControlSelect2">Gender</label>
                           <select class="form-control" name="gender" id="exampleFormControlSelect2">
                             <option value="Male">Male</option>
                             <option value="Female">Female</option>
                             <option value="Other">Other</option>
                           </select>
                        </div>
                        @error('gender')
                           <div class="text-danger">{{ $message }}</div>
                        @enderror
                     </div>
                  </div>
                  <div class="form-row my-4">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="exampleFormControlSelect6">Guddian Mobile</label>
                           <input type="text" class="form-control" name="gurdian_mobile" placeholder="Gurdian Mobile Number">
                         </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label for="exampleFormControlSelect3">Class</label>
                           <select class="form-control" name="class" id="exampleFormControlSelect3">
                             <option value="6">Six</option>
                             <option value="7">Seven</option>
                             <option value="8">Eight</option>
                             <option value="9">Nine</option>
                             <option value="10">Ten</option>
                           </select>
                        </div>
                        @error('class')
                           <div class="text-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label for="exampleFormControlSelect4">Section </label>
                        <select class="form-control" name="section" id="exampleFormControlSelect4">
                             <option value="1">Section A</option>
                             <option value="2">Section B</option>
                           </select>
                        </div>
                        @error('section')
                           <div class="text-danger">{{ $message }}</div>
                        @enderror
                     </div>
                  </div>
                  <div class="form-row my-4">
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="exampleFormControlSelect5">Address</label>
                           <textarea class="form-control" name="address" id="exampleFormControlSelect5" cols="30" rows="1"></textarea>
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
