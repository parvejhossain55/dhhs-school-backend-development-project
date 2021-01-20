@extends('layouts.backend')

@section('section-one')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All School Online Class</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="myTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                           <th>Sl</th>
                           <th>Youtube Video Id</th>
                           <th>Class Video</th>
                           <th>Publish Date</th>
                           <th>Action</th>
                        </tr>
                    </thead>
                    <div class="table-responsive">
                        <tbody>
                           @php($i=1)
                           @foreach ($online_class as $class)
                              <tr>
                                 <th>{{ $i++ }}</th>
                                 <td>{{ $class->iframe }}</td>
                                 <td>
                                     <iframe width="180" height="100" src="https://youtube.com/embed/{{ $class->iframe }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                 </td>
                                 <td>{{ $class->created_at->format('d-m-Y') }}</td>
                                 <td>
                                    <a href="{{ url('/on-class/edit/'.$class->id) }}" class="btn btn-outline-success"> <i class="fas fa-eye"></i> Edit</a>
                                    <a onclick="return confirm('Are You Sure to Delete')" href="{{ url('/on-class/delete/'.$class->id) }}" class="btn btn-outline-danger"> <i class="fas fa-trash-alt"></i> Delete</a>
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
