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
                            <th>Photo</th>
                            <th style="width:162px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @foreach ($gallaries as $gallery)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $gallery->gallery_desc }}</td>
                                <td><img src="{{ asset($gallery->gallery_photo) }}" width="100" alt="Gallery Photo"></td>
                                {{-- <td>{{ $gallery->created_at->format('d-m-Y') }}</td> --}}
                                <td>
                                <a href="{{ url('/photo-gallery/edit/'.$gallery->id) }}" class="btn btn-outline-success"> <i class="fas fa-eye"></i> Edit</a>
                                <a href="{{ url('/photo-gallery/delete/'.$gallery->id) }}" class="btn btn-outline-danger"> <i class="fas fa-trash-alt"></i> Delete</a>
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
