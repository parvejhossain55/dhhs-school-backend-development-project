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

    <!-- ===== Start Header Navigation Bar -->
    <header id="header" class="d-none d-lg-block">
        <div class="container">
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
    {{-- Contact Body --}}
    <main id="main">
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div data-aos="fade-up">
                <iframe width="100%" height="350px"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1080.1947154433424!2d88.52159191732743!3d24.40468895262074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbe976b1df3f83%3A0xca2adcd895ffb2ac!2sDamkura%20Hat%20High%20School!5e0!3m2!1sen!2sbd!4v1608554608390!5m2!1sen!2sbd"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>

            <div class="container" data-aos="fade-up">
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>ঠিকানা :</h4>
                                <p>দামকুড়া হাট - ৬০০০, পবা, রাজশাহী</p>
                            </div>
                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>ইমেইল :</h4>
                                <p>info@example.com</p>
                            </div>
                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>মোবাইল :</h4>
                                <p>+৮৮ ০১৭৫২-২৫৪৬৯৫</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="ফুল নাম *" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="ইমেইল অ্যাড্রেস *" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="সাবজেক্ট *" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" name="mobile" id="mobile"
                                        placeholder="মোবাইল *" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required"
                                    data-msg="Please write something for us" placeholder="বিস্তারিত *"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">সেন্ড ম্যাসেজ</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->

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
                            <li><i class="icofont-double-right"></i><a target="_blank" href="www.shed.gov.bd">মাধ্যমিক ও
                                    উচ্চ শিক্ষা বিভাগ</a></li>
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
