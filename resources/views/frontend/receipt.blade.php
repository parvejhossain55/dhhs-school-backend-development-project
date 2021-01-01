<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Download Applicant Form ! </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: 'SolaimanLipi';
            /* src: url('{{storage_path()}}/storage/fonts/SolaimanLipi_20-04-07.ttf') format('truetype')  */
            src: url({{ storage_path('fonts/SolaimanLipi_20-04-07.ttf') }}) format('truetype'); 
        }
        body{
            font-family: 'SolaimanLipi', sans-serif;
        }
        .table td, .table th {
          padding: 10px;
          /* vertical-align: top; */
          border-top: 0px;
        }
        /* table, td {
          border: 1px solid black;
        } */
    </style>
  </head>
  <body style="border: 1px solid black; padding: 15px 10px;">
    <div class="container-fluid">
      {{-- page header --}}
      <div class="row my-3">
        <div class="col">
          <img src="{{ asset($datas->photo) }}" width="88" height="88" alt="Profile Photo" class="d-block float-left mr-2">
          <div class="text-center">
            <h2>Damkura Hat High School </h2>
              <div style="font-weight: 600">
                <span>Post Office : Damkura Hat</span>
                <span>, Thana : Damkura</span>
                <span>, Zila : Rajshahi</span>
              </div>
          </div>
        </div>
      </div>
      {{-- end page header --}}
      <div class="row" style="margin-top: 50px">
        <div class="col">
          <table>
            <tbody>
              <tr>
                <td width="160">Application ID </td>
                <td width="50"> : </td>
                <td>{{ $datas->app_id }}</td>
              </tr>
              <tr>
                <td width="150">Students Name</td>
                <td> : </td>
                <td>{{ $datas->sname_english }}</td>
              </tr>
              <tr>
                <td>Students Father Name</td>
                <td> : </td>
                <td>{{ $datas->fname_english }}</td>
              </tr>
              <tr>
                <td>Students Mother Name</td>
                <td> : </td>
                <td>{{ $datas->mname_english }}</td>
              </tr>
              <tr>
                <td>Date of Birth</td>
                <td> : </td>
                <td>{{ $datas->date_of_birth }}</td>
              </tr>
              {{-- <tr>
                <td>Students Name</td>
                <td> : </td>
                <td>Parvej Hossain</td>
              </tr> --}}
            </tbody>
          </table>
        </div>
      </div>
      {{-- payment info --}}
      <div class="row">
        <div class="col">
          <h5>Payment Information</h5>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col">
          <table>
            <tbody>
              <tr>
                <td width="150">bKash Mobile Number </td>
                <td width="30"> : </td>
                <td>{{ $datas->bkash_no }}</td>
              </tr>
              <tr>
                <td width="150">Transaction ID</td>
                <td> : </td>
                <td>{{ $datas->tranx_id }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <img src="{{ asset($datas->signature) }}" width="300px" height="80px" alt="student signature">
        </div>
      </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>