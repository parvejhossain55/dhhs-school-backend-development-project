@extends('layouts.frontend')

@section('onlybody')
   <div class="row my-3 mt-lg-0">
      <div class="col">
         <div class="notice-list">
            <div class="table-responsive">
              <div class="card">
                <div class="card-header bg-success-one">
                  <h5>রেজাল্ট</h5>
                </div>
                {{-- <div class="card-body">
                </div> --}}
                <table class="table table-bordered" style="margin-bottom: 0">
                  <thead>
                    <tr>
                      <th width="5%">নং</th>
                      <th width="65%">শ্রেণী ও বিভাগের নাম</th>
                      <th width="15%">প্রকাশের তারিখ</th>
                      <th width="15%" style="text-align:center">বিস্তারিত</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php($i=1)
                    @foreach ($data as $item)    
                      <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $item->result_title }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</td>
                        <td align="center"><a href="{{ asset($item->result_file) }}" class="btn btn-outline-successs"><i class="icofont-download"></i> ডাউনলোড </a></td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
           </div>
         </div>
      </div>
   </div>
@endsection