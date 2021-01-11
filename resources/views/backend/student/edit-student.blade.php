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
         <form action="{{ route('student.update') }}" method="POST">
            @csrf
               <div class="card-body">
                  <input type="hidden" name="edit_id" value="{{ $student->id }}">
                  <div class="form-row my-4">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Student Name</label>
                           <input type="text" name="sname" class="form-control @error('sname')is-invalid @enderror" value="{{ $student->sname }}">
                           @error('sname')
                              <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Student Father Name</label>
                           <input type="text" name="sfname" class="form-control @error('sfname')is-invalid @enderror" value="{{ $student->sfname }}">
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
                           <input type="text" name="smname" class="form-control @error('smname')is-invalid @enderror" value="{{ $student->smname }}">
                           @error('smname')
                              <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Student Roll</label>
                           <input type="text" name="roll" class="form-control @error('roll')is-invalid @enderror" value="{{ $student->roll }}">
                           @error('roll')
                              <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label for="exampleFormControlSelect2">Gender</label>
                           <select class="form-control" name="gender" id="exampleFormControlSelect2">
                             <option {{ $student->gender == 'Male' ? 'selected':'' }} value="Male">Male</option>
                             <option {{ $student->gender == 'Female' ? 'selected':'' }} value="Female">Female</option>
                             <option {{ $student->gender != 'Male' OR 'Female' ? 'selected':'' }} value="Other">Other</option>
                           </select>
                        </div>
                        @error('gender')
                           <div class="text-danger">{{ $message }}</div>
                        @enderror
                     </div>
                  </div>
                  <div class="form-row my-4">
                     <div class="col-md-3">
                        <div class="form-group">
                           <label for="exampleFormControlSelect3">Class</label>
                           <select class="form-control" name="class" id="exampleFormControlSelect3">
                             <option {{ $student->class == 6 ? 'selected' : '' }} value="Six">Six</option>
                             <option {{ $student->class == 7 ? 'selected' : '' }} value="Seven">Seven</option>
                             <option {{ $student->class == 8 ? 'selected' : '' }} value="Eight">Eight</option>
                             <option {{ $student->class == 9 ? 'selected' : '' }} value="Nine">Nine</option>
                             <option {{ $student->class == 10 ? 'selected' : '' }} value="Ten">Ten</option>
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
                             <option {{ $student->section == 1 ? 'selected' : '' }} value="1">Section A</option>
                             <option {{ $student->section == 2 ? 'selected' : '' }} value="2">Section B</option>
                           </select>
                        </div>
                        @error('section')
                           <div class="text-danger">{{ $message }}</div>
                        @enderror
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="exampleFormControlSelect5">Address</label>
                           <textarea class="form-control" name="address" id="exampleFormControlSelect5" cols="30" rows="2">{{ $student->address }}</textarea>
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
