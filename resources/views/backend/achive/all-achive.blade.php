@extends('layouts.backend')

@section('section-one')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All Published Achivement Photo</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="myTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Achivement Description</th>
                            <th>Photo</th>
                            <th style="width:200px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @foreach ($achives as $achive)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $achive->achive_desc }}</td>
                                <td><img src="{{ asset($achive->achive_photo) }}" width="100" alt="achive Photo"></td>
                                {{-- <td>{{ $achive->created_at->format('d-m-Y') }}</td> --}}
                                <td>
                                <a href="{{ url('/achivement/edit/'.$achive->id) }}" class="btn btn-outline-success"> <i class="fas fa-eye"></i> Edit</a>
                                <a onclick="return confirm('Are You Sure to Delete !')" href="{{ url('/achivement/delete/'.$achive->id) }}" class="btn btn-outline-danger"> <i class="fas fa-trash-alt"></i> Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
@endsection
