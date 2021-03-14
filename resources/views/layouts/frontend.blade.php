<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- [ Meta Tag SEO ] -->
    <meta name='language' content='English, Bangla'/>
    <meta name='url' content="https://damkura-hhs.edu.bd"/>
    <meta name='identifier-URL' content="https://damkura-hhs.edu.bd"/>
    <meta name='type' content='education, school, institute, student, teacher'/>
    <meta name="author" content="Damkura Hat High School"/>
    <meta property="og:url" content="https://damkura-hhs.edu.bd"/>
    <meta property="og:type" content="education, school, institute, student, teacher"/>
    
    <meta name="title" content="Damkura Hat High School">
    <meta name="description" content="দামকুড়া হাট উচ্চ বিদ্যালয়ে স্বাগতম। দামকুড়া হাট রাজশাহী বিভাগের অন্যতম প্রাচীন বিদ্যালয়। দীর্ঘদিন যাবৎ সুনামের সাথে পাঠদান পরিচালনা করে আসছে। এই বিদ্যালয়ের অসংখ্য ছাত্র বর্তমানে দেশে এবং বিদেশে দক্ষতার সাথে সেবা দিয়ে আসছে।">
    <meta name="keywords" content="Damkura, Damkura Hat, Damkura Hat High School, Paba, Rajshahi, Education, School, Student, Teacher, Institution">

    <meta property="og:title" content="Damkura Hat High School"/>
    <meta property="og:description" content="দামকুড়া হাট উচ্চ বিদ্যালয়ে স্বাগতম। দামকুড়া হাট রাজশাহী বিভাগের অন্যতম প্রাচীন বিদ্যালয়। দীর্ঘদিন যাবৎ সুনামের সাথে পাঠদান পরিচালনা করে আসছে। এই বিদ্যালয়ের অসংখ্য ছাত্র বর্তমানে দেশে এবং বিদেশে দক্ষতার সাথে সেবা দিয়ে আসছে।">
    <meta property="og:keywords" content="Damkura, Damkura Hat, Damkura Hat High School, Paba, Rajshahi, Education, School, Student, Teacher, Institution"/>
    
    <title>Damkura Hat High School</title>
    <!-- Favicons -->
    <link href="frontend/assets/img/logo2.png" rel="icon">
    <!-- <link href="frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->
    <!-- Bangla Fonts -->
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">    
    {{-- FancyBox --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    {{-- DataTables --}}
    <link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">    
    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="overlay">
        
        <main class="container shaddow-container border border-light mt-10">

            <!-- ======= Top Header Background Image and School Name ======= -->
            <div class="row mt-3">
                <div class="col">
                    <img src="frontend/assets/img/header.jpg" width="100%" height="150" alt="">
                </div>
            </div>

            <!-- ===== Start Header Navigation Bar -->
            <header id="header" class="d-none d-lg-block mb-3">
                <div class="navigation">
                    <nav class="nav-menu">
                        <ul>
                            <li class="{{ Request::path() == '/' ? 'active' : '' }}"><a href="{{ url('/') }}">হোম</a></li>
                            <li class="drop-down {{ Request::path() == 'about' || Request::path() == 'head-message' || Request::path() == 'achivement' ? 'active' : '' }}"><a href="javascript:void(0)">বিদ্যালয় সম্পর্কে </a>
                                <ul>
                                    <li><a href="{{ url('/head-message') }}">প্রধান শিক্ষকের বানী</a></li>
                                    <li><a href="{{ url('/about') }}">ইতিহাস </a></li>
                                    <li><a href="{{ url('/sriti-kotha') }}">সৃতি কথা</a></li>
                                    <li><a href="{{ url('/achivement') }}">আমাদের অর্জন </a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::path() == 'teacher-info' ? 'active' : '' }}"><a href="{{ url('/teacher-info') }}">শিক্ষক ও কর্মচারী</a></li>
                            <li class="drop-down {{ Request::path() == 'result' ? 'active':'' }}"><a href="javascript:void(0)">একাডেমিক </a>
                                <ul>
                                    <li><a href="{{ route('result') }}">রেজাল্ট </a></li>
                                    <li><a href="javascript:void(0)">ক্লাস রুটিন</a></li>
                                    <li><a href="javascript:void(0)">সিলেবাস </a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::path() == 'photo-gallery' ? 'active' : '' }}"><a href="{{ url('/photo-gallery') }}">ফটো গ্যালারি </a></li>
                            <li class="drop-down {{ Request::path() == 'class-six' || Request::path() == 'class-seven' || Request::path() == 'class-eight' || Request::path() == 'class-nine' || Request::path() == 'class-ten' ? 'active' : '' }}"><a href="javascript:void(0)">ছাত্র/ছাত্রীর তথ্য</a>
                                <ul>
                                    <li><a href="{{ url('/class-six') }}">ষষ্ঠ শ্রেণী</a></li>
                                    <li><a href="{{ url('/class-seven') }}">সপ্তম শ্রেণী</a></li>
                                    <li><a href="{{ url('/class-eight') }}">অষ্টম শ্রেণী</a></li>
                                    <li><a href="{{ url('/class-nine') }}">নবম শ্রেণী</a></li>
                                    <li><a href="{{ url('/class-ten') }}">দশম শ্রেণী</a></li>
                                </ul>
                            </li>
                            {{-- <li class="drop-down"><a href="">ভর্তির আবেদন</a>
                                <ul>
                                    <li><a href="{{ url('/admission-details') }}">আবেদনের নিয়মাবলী</a></li>
                                    <li><a href="{{ url('/admission') }}">আবেদনের ফরম</a></li>
                                </ul>
                            </li> --}}
                            <li class="{{ Request::path() == 'notice-board' ? 'active' : '' }}"><a href="{{ url('/notice-board') }}">নোটিশ </a></li>
                            <li class="{{ Request::path() == 'online-class' ? 'active' : '' }}"><a href="{{ route('online.class') }}">অনলাইন ক্লাস</a></li>
                            {{-- <li><a href="{{ url('/contact') }}">যোগাযোগ </a></li> --}}
                        </ul>
                    </nav>
                </div>
                <!-- .nav-menu -->
            </header><!-- End Header Navigation Bar -->

            <!-- ======= Annaouncement Section ======= -->
            @yield('announcement-section')

            <!-- ======= Carousel Section ======= -->
            @yield('carousel-section')

            <!-- ======= Main Body In Website ======= -->
            <section id="main-body" class="main-body">
                <div class="row">
                    <div class="col-md-8">
                        <!-- Main Body Welcome Section -->
                        @yield('left-section-one')

                        <!-- Main Head Teacher Section -->
                        @yield('left-section-two')

                        <!-- Google Maps Location In Damkura Hat High School -->
                        @yield('left-section-three')
                    </div>

                    {{-- Right Sidebar of Website --}}
                    <div class="col-md-4">
                        <!-- Information for Head Teacher -->
                        <!-- <div class="card">
                            <div class="card-header bg-success-one">
                            <h5 class="text-light text-center">প্রধান শিক্ষক </h5>
                            </div>
                            <div class="card-body text-center" id="head-teacher">
                            <img src="frontend/assets/img/trainers/trainer-1.jpg" class="card-img-top" alt="...">
                            <h5 class="card-title mt-4">মোঃ ফেরদৌস আলী </h5>
                            <p class="card-text"><a href="">প্রধান শিক্ষকের বানী </a> <i class="icofont-arrow-right"></i></p>
                            </div>
                            </div> -->

                        <!-- School Notice Board -->
                        @yield('right-section-one')

                        <!-- Teacher Login Panel -->
                        @yield('right-section-two')
                        
                        <!-- Teacher Login Panel -->
                        @yield('right-section-three')
                        
                        <!-- Visitor Counter -->
                        @yield('right-section-four')
                    </div>
                </div>
                {{-- admission page --}}
                @yield('onlybody')
            </section>
            @yield('contact')
            <!-- ======= Footer ======= -->
            <footer id="footer" class="mt-3">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-3 col-md-6 footer-contact">
                                <h3>ঠিকানা </h3>
                                <p>
                                    দামকুড়া হাট - ৬০০০ <br>
                                    পবা, রাজশাহী<br><br>
                                    <strong>মোবাইল : </strong> +৮৮ ০১৭৫২-২৫৪৬৯৫<br>
                                    <strong>ইমেইল :</strong> info@example.com<br>
                                </p>
                            </div>

                            <div class="col-lg-3 col-md-6 footer-links">
                                <h4>গুরুত্বপূর্ণ লিংক</h4>
                                <ul>
                                    <li><i class="icofont-double-right"></i><a target="_blank" href="https://bangladesh.gov.bd">বাংলাদেশ জাতীয় তথ্য বাতায়ন</a></li>
                                    <li><i class="icofont-double-right"></i><a target="_blank" href="https://moedu.gov.bd">শিক্ষা মন্ত্রণালয়</a></li>
                                    <li><i class="icofont-double-right"></i><a target="_blank"  href="https://shed.gov.bd">মাধ্যমিক ও উচ্চ শিক্ষা বিভাগ</a></li>
                                    <li><i class="icofont-double-right"></i><a target="_blank" href="https://dshe.gov.bd">মাধ্যমিক ও উচ্চশিক্ষা অধিদপ্তর</a></li>
                                    <li><i class="icofont-double-right"></i><a style="line-height: 20px" target="_blank" href="https://rajshahieducationboard.gov.bd">মাধ্যমিক ও উচ্চ মাধ্যমিক শিক্ষা বোর্ড রাজশাহী</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-3 col-md-6 footer-links">
                                <h4>মেনু </h4>
                                <ul>
                                    <li><i class="icofont-double-right"></i><a href="{{ url('/') }}">হোম</a></li>
                                    <li><i class="icofont-double-right"></i><a href="{{ url('/achivement') }}">আমাদের অর্জন</a></li>
                                    <li><i class="icofont-double-right"></i><a href="#">রেজাল্ট</a></li>
                                    <li><i class="icofont-double-right"></i><a href="{{ url('/about') }}">বিদ্যালয় সম্পর্কে</a></li>
                                    <li><i class="icofont-double-right"></i><a href="{{ url('/notice-board') }}">নোটিশ বোর্ড</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-3 col-md-6 footer-newsletter">
                                <div class="text-left">
                                    <img src="frontend/assets/img/logo2.png" width="150" height="150" alt="">
                                </div>
                                <!-- <h4>Follow Us</h4> -->
                                <div class="social-links pt-4">
                                    <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                                    <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                                    <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                                    <a href="#" class="linkedin"><i class="icofont-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-block py-4 align-items-center" id="footer-text">
                    <div class="text-center">
                        <div class="copyright" style="font-size: 15px;">
                            &copy; Copyright @php($date = date('Y')){{ $date }} - All Rights Reserved | <span>Design & Developed by : <a class="text-danger" target="_blank" href="https://www.facebook.com/parvej.hossain.155">Parvej Hossain</a></span>
                        </div>
                    </div>

                </div>
            </footer><!-- End Footer -->

        </main><!-- End #main -->

        <a href="#" class="back-to-top"><i class="icofont-arrow-up"></i></a>
        {{-- <div id="preloader"></div> --}}
    </div>

    <!-- Vendor JS Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    {{-- Sweet Alert --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    {{-- FancyBox --}}
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    {{-- DataTables --}}
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/assets/js/app.js') }}"></script>
    @if (Session::get('application'))
    <script>
        swal("Greet!", "{{ Session::get('application') }}", "success");
    </script>
    @endif
    <script>
        // For DataTable
        $(document).ready( function () {
            $('#myTable').DataTable({
                "pageLength": 25
            });
            // fancy box
            $('[data-fancybox="images"]').fancybox({
                buttons : [ 
                    'slideShow',
                    'share',
                    'zoom',
                    'fullScreen',
                    'close'
                ],
                thumbs : {
                    autoStart : true
                }
            });
        });
    </script>
</body>

</html>
