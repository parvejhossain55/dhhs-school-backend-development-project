@extends('layouts.frontend')
{{-- School Welcome Message --}}
@section('onlybody')
<div class="student-of-six">
    <div class="card mt-3 mt-lg-0">
        <div class="card-header bg-success-one">
            <p class="h5 text-light">অস্টম শ্রেণী ছাত্রছাত্রী</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="myTable" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Sl</th>
                            <th scope="col">ছাত্রের নাম </th>
                            <th scope="col">পিতার নাম </th>
                            <th scope="col">মাতার নাম </th>
                            <th scope="col">রোল</th>
                            <th scope="col">ঠিকানা</th>
                        </tr>
                    </thead>
                    <tbody>
                      @php($i=1)
                        @foreach ($students as $item)
                        <tr>
                          <td>{{ $i++ }}</td>
                          <td>{{ $item->sname }}</td>
                          <td>{{ $item->sfname }}</td>
                          <td>{{ $item->smname }}</td>
                          <td>{{ $item->roll }}</td>
                          <td>{{ $item->address }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
