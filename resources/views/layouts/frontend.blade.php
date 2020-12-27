<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Damkura Hat High School</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="frontend/assets/img/favicon.png" rel="icon">
  <link href="frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="frontend/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <!-- <link href="frontend/assets/vendor/aos/aos.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="frontend/assets/css/style.css" rel="stylesheet">

</head>

<body>

    <main class="container shaddow-container border border-light mt-10">

        <!-- ======= Top Header Background Image and School Name ======= -->
        <div class="row mt-3">
            <div class="col">
                <img src="frontend/assets/img/headbg.jpg" width="100%" height="150" alt="">
            </div>
        </div>

        <!-- ===== Start Header Navigation Bar -->
        <header id="header" class="d-none d-lg-block mb-3">
            <div class="">
                <nav class="nav-menu ">
                    <ul class="mx-auto">
                        <li class="active"><a href="{{ url('/') }}">হোম</a></li>
                        <li class="drop-down"><a href="">আমাদের সম্পর্কে </a>
                            <ul>
                                <li><a href="{{ url('/about') }}">বিদ্যালয় সম্পর্ক </a></li>
                                <li><a href="{{ url('/head-message') }}">প্রধান শিক্ষকের বানী</a></li>
                            </ul>
                        </li>
                        <li class="drop-down"><a href="">ভর্তি আবেদন</a>
                            <ul>
                                <li><a href="{{ url('/admission-details') }}">আবেদনের নিয়মাবলী</a></li>
                                <li><a href="{{ url('/admission') }}">আবেদনের ফরম</a></li>
                            </ul>
                        </li>
                        <li class="drop-down"><a href="">একাডেমিক </a>
                            <ul>
                                <li><a href="#">সিলেবাস </a></li>
                                <li><a href="#">রেজাল্ট </a></li>
                                <li><a href="#">ক্লাস রুটিন</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/teacher-info') }}">শিক্ষক ও কর্মচারী</a></li>
                        <li><a href="{{ url('/notice-board') }}">নোটিশ </a></li>
                        <li><a href="{{ url('/photo-gallery') }}">ফটো গ্যালারি </a></li>
                        <li><a href="{{ url('/contact') }}">যোগাযোগ </a></li>
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
                </div>
            </div>
            {{-- admission page --}}
            @yield('onlybody')
        </section>

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
                            <h4>ইউসফুল লিংক </h4>
                            <ul>
                                <li><i class="icofont-double-right"></i><a target="_blank"
                                        href="https://bangladesh.gov.bd/index.php">বাংলাদেশ জাতীয় তথ্য বাতায়ন</a></li>
                                <li><i class="icofont-double-right"></i><a target="_blank"
                                        href="https://moedu.gov.bd">শিক্ষা মন্ত্রণালয়</a></li>
                                <li><i class="icofont-double-right"></i><a target="_blank"
                                        href="www.shed.gov.bd">মাধ্যমিক ও উচ্চ শিক্ষা বিভাগ</a></li>
                                <li><i class="icofont-double-right"></i><a target="_blank" href="www.dshe.gov.bd">
                                        মাধ্যমিক ও উচ্চশিক্ষা অধিদপ্তর</a></li>
                                <li><i class="icofont-double-right"></i><a target="_blank"
                                        href="http://www.rajshahieducationboard.gov.bd">মাধ্যমিক ও উচ্চ মাধ্যমিক শিক্ষা
                                        বোর্ড রাজশাহী</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>মেনু </h4>
                            <ul>
                                <li><i class="icofont-double-right"></i><a target="_blank" href="#">হোম</a></li>
                                <li><i class="icofont-double-right"></i><a target="_blank" href="#">ভর্তির আবেদন</a>
                                </li>
                                <li><i class="icofont-double-right"></i><a target="_blank" href="#">রেজাল্ট</a></li>
                                <li><i class="icofont-double-right"></i><a target="_blank" href="#">বিদ্যালয়
                                        সম্পর্কে</a></li>
                                <li><i class="icofont-double-right"></i><a target="_blank" href="#">নোটিশ বোর্ড</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-newsletter">
                            <div class="text-left">
                                <img src="frontend/assets/img/logo2.png" width="150" height="150" alt="">
                            </div>
                            <!-- <h4>Follow Us</h4> -->
                            <div class="social-links pt-4">
                                <a target="_blank" href="#" class="facebook"><i class="icofont-facebook"></i></a>
                                <a target="_blank" href="#" class="twitter"><i class="icofont-twitter"></i></a>
                                <a target="_blank" href="#" class="instagram"><i class="icofont-instagram"></i></a>
                                <a target="_blank" href="#" class="linkedin"><i class="icofont-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-block py-4 align-items-center" id="footer-text">
                <div class="text-center">
                    <div class="copyright" style="font-size: 15px;">
                        &copy; Copyright 2020 - All Rights Reserved | <span>Developed by : <a class="text-danger"
                                href="#">Parvej Hossain</a></span>
                    </div>
                </div>

            </div>
        </footer><!-- End Footer -->


        @yield('contact')
    </main><!-- End #main -->

    <a href="#" class="back-to-top"><i class="icofont-arrow-up"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="frontend/assets/vendor/jquery/jquery.min.js"></script>
    <script src="frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/assets/vendor/jquery.easing/jquery.easing.min.js"></script>

    <!-- Template Main JS File -->
    <script src="frontend/assets/js/app.js"></script>

</body>

</html>
