@extends('layouts.backend')

@section('section-one')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Total student <span class="badge badge-success mx-1">{{ $students->count() }}</span>in Class Six</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="myTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Mother Name</th>
                            <th>Gender</th>
                            <th>Roll</th>
                            <th>Class</th>
                            <th>Section</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <div class="table-responsive">
                        <tbody>
                            @php($i=1)
                            @foreach($students as $student)
                            <tr>
                                <th>{{ $i++ }}</th>
                                <td>{{ $student->sname }}</td>
                                <td>{{ $student->sfname }}</td>
                                <td>{{ $student->smname }}</td>
                                <td>{{ $student->gender }}</td>
                                <td>{{ $student->roll }}</td>
                                <td>{{ $student->class }}</td>
                                <td>{{ $student->section == 1 ? 'Section A' : 'Section B' }}</td>
                                <td>
                                    <a href="{{ url('/student/edit/'.$student->id) }}" class="btn btn-outline-success"> <i class="fas fa-eye"></i> View</a>
                                    <a onclick="return confirm('Are You Sure to Deleted Student Data')" href="{{ url('/student/delete/'.$student->id) }}" class="btn btn-outline-danger"> <i class="fas fa-trash-alt"></i> Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </div>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
@endsection
