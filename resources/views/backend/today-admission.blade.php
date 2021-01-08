@extends('layouts.backend')

@section('section-one')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Total Admission Candidate List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="myTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>App Id</th>
                            <th>Name</th>
                            <th>Father Number</th>
                            <th>Village</th>
                            <th>Payment Number</th>
                            <th>TranxId</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <div class="table-responsive">
                        <tbody>
                            @php($i=1)
                            @foreach($data as $admission)
                            <tr>
                                <th>{{ $i++ }}</th>
                                <td>{{ $admission->app_id }}</td>
                                <td>{{ $admission->sname_bangla }}</td>
                                <td>{{ $admission->father_mobile }}</td>
                                <td>{{ $admission->present_village }}</td>
                                <td>{{ $admission->bkash_no }}</td>
                                <td>{{ $admission->tranx_id }}</td>
                                <td>
                                    <a href="{{ url('/admission/edit/'.$admission->id) }}" class="btn btn-outline-success"> <i class="fas fa-eye"></i> View</a>
                                    <a href="{{ url('/admission/delete/'.$admission->id) }}" class="btn btn-outline-danger"> <i class="fas fa-trash-alt"></i> Delete</a>
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
