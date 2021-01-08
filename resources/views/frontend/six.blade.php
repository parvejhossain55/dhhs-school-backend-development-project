@extends('layouts.frontend')
{{-- School Welcome Message --}}
@section('onlybody')
<div class="student-of-six">
   <div class="card">
      <div class="card-header bg-success-one">
        <p class="h5 text-light">ষষ্ঠ শ্রেণী (ছাত্র)</p>
      </div>
      <div class="card-body">
         <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col">Sl</th>
                <th scope="col">ছাত্রের নাম </th>
                <th scope="col">পিতার নাম </th>
                <th scope="col">মাতার নাম </th>
                <th scope="col">এড্রেস </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
      </div>
   </div>
</div>
@endsection

