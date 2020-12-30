@extends('layouts.backend')

@section('section-one')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All Published Notice</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="myTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Notice Title</th>
                            <th>Publish Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <div class="table-responsive">
                        <tbody>
                           @php($i=1)
                           @foreach ($notices as $notice)
                              <tr>
                                 <th>{{ $i++ }}</th>
                                 <td>{{ $notice->notice_title }}</td>
                                 <td>{{ $notice->created_at->format('d-m-Y') }}</td>
                                 <td>
                                    <a href="{{ url('/notice/edit/'.$notice->id) }}" class="btn btn-outline-success"> <i class="fas fa-eye"></i> Edit</a>
                                    <a href="{{ url('/notice/delete/'.$notice->id) }}" class="btn btn-outline-danger"> <i class="fas fa-trash-alt"></i> Delete</a>
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
