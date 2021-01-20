<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Damkura Hat High School</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" /> --}}
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/css/adminlte.min.css') }}">
    {{-- Customizeing css --}}
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
            </ul>
            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>                    
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ url('/backends') }}" class="brand-link">
                {{-- <img src="{{ asset('backend/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8"> --}}
                <i class="nav-icon fas fa-tachometer-alt mx-3 mb-3"></i>
                <span class="brand-text font-weight-light">Dashboard</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
                <a href="javascript:void(0)" class="nav-link">
                    <i class="nav-icon fas fa-address-card"></i>
                    <p>
                        Student Info
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview ml-3">
                    <li class="nav-item">
                        <a href="{{ route('add.student') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Student</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('total.student') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Total Student</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                    <i class="nav-icon fas fa-list"></i>
                    <p>
                        Student List
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview ml-3">
                    <li class="nav-item">
                        <a href="{{ route('class.six') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Class Six</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('class.seven') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Class Seven</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('class.eight') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Class Eight</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('class.nine') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Class Nine</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('class.ten') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Class Ten</p>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- <li class="nav-item menu-open">
                <a href="javascript:void(0)" class="nav-link">
                    <i class="nav-icon fas fa-address-card"></i>
                    <p>
                        Admission Info
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview ml-3">
                    <li class="nav-item">
                        <a href="{{ route('total.admission') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Total Admission</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('today.admission') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Today Admission</p>
                        </a>
                    </li>
                </ul>
            </li> --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-bell"></i>
                    <p>
                        Notice Board
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview ml-3">
                    <li class="nav-item">
                        <a href="{{ route('all.notice') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Notice</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('add.notice') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Notice</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chalkboard-teacher"></i>
                    <p>
                        Online Class
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview ml-3">
                    <li class="nav-item">
                        <a href="{{ route('all.class') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Class</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('add.class') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Class</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-images"></i>
                    <p>
                        Photo Gallery
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview ml-3">
                    <li class="nav-item">
                        <a href="{{ route('all.photo') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Photo</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('add.photo') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Photo</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-trophy"></i>
                    <p>
                        Achivement
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview ml-3">
                    <li class="nav-item">
                        <a href="{{ route('all.achivement') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Achivement</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('add.achivement') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Achivement</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-poll-h nav-icon"></i>
                    <p>
                        Syllabus
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview ml-3">
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Syllabus</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Syllabus</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-hand-peace nav-icon"></i>
                    <p>
                        Result
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview ml-3">
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Result</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Result</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-calendar-alt nav-icon"></i>
                    <p>
                        Class Routine
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview ml-3">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Routine</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Routine</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-envelope-open-text"></i>
                    <p>
                        Mailbox
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview ml-3">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Inbox</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Photo</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-cogs nav-icon"></i>
                    <p>Setting
                        {{-- <span class="right badge badge-danger">New</span> --}}
                    </p>
                </a>
            </li>
            <li class="nav-item">
                {{-- <a href="#" class="nav-link">
                    <i class="fas fa-sign-out-alt nav-icon"></i>
                    <p>Logout</p>
                </a> --}}
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt nav-icon"></i>
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header Page header -->
        {{-- <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Starter Page</h1>
                        </div><!-- /.col -->
                        <div class="col-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div> --}}
        <!-- /.content-header -->
    
       <!-- Main content -->
        <div class="content mt-3">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-border-all"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Student</span>
                                <span class="info-box-number">
                                    @php
                                        $student = \App\Models\Student::all();
                                    @endphp
                                    {{ $student->count() }}
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-clock"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Notice</span>
                                <span class="info-box-number">
                                    @php
                                        $notice = \App\Models\Notice::all();
                                    @endphp
                                    {{ $notice->count() }}
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i
                                    class="fas fa-calendar-check"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Photo Gallery</span>
                                <span class="info-box-number">
                                    @php
                                        $photo = \App\Models\Gallery::all();
                                    @endphp
                                    {{ $photo->count() }}
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-trophy"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Achivement</span>
                                <span class="info-box-number">
                                    @php
                                        $achive = \App\Models\Achivement::all();
                                    @endphp
                                    {{ $achive->count() }}
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

    {{-- Ekhan theke Code Paste Korte Hobe --}}
                            
            {{-- section add korte hobe .row er moddhe --}}
            @yield('section-one')


            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    {{-- <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside> --}}
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        {{-- <div class="float-right d-none d-sm-inline">
            Anything you want
        </div> --}}
        <!-- Default to the left -->
        <strong>Copyright &copy; @php($date = date('Y')){{ $date }} <a href="https://damkura-hhs.edu.bd">DHHS</a>.</strong> All rights reserved. | Design & Developed by : <a href="https://facebook.com/parvej.hossain.155">Parvej Hossain</a>
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>
    <!-- DataTables  & Plugins -->
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    {{-- Sweet Alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('backend/js/adminlte.min.js') }}"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
    
    @if (Session::get('success'))
    <script>
        swal("Greet!", "{{ Session::get('success') }}", "success");
    </script>
    @endif
    @if (Session::get('error'))
     <script>
         swal("!", "{{ Session::get('error') }}", "error");
     </script>
    @endif

</body>

</html>
