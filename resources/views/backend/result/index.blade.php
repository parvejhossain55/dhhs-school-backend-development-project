@extends('layouts.backend')

@section('section-one')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All Published Result</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="myTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Result Title</th>
                            <th>Publish Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <div class="table-responsive">
                        <tbody>
                           @php($i=1)
                           @foreach ($results as $result)
                              <tr>
                                 <td>{{ $i++ }}</td>
                                 <td>{{ $result->result_title }}</td>
                                 <td>{{ $result->created_at->format('d-m-Y') }}</td>
                                 <td>
                                    <a href="{{ asset($result->result_file) }}" class="btn btn-outline-info"> <i class="fas fa-eye"></i> View</a>
                                    <a href="{{ url('/result/edit/'.$result->id) }}" class="btn btn-outline-success"> <i class="fas fa-pen"></i> Edit</a>
                                    <a onclick="return confirm('Are You Sure to Delete')" href="{{ url('/result/delete/'.$result->id) }}" class="btn btn-outline-danger"> <i class="fas fa-trash-alt"></i> Delete</a>
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
