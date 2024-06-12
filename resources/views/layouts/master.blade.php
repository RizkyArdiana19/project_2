<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title') MindSparx.Tch</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/theme/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/theme/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="theme/vendor/aos/aos.css" rel="stylesheet">
    <link href="theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="theme/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="theme/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="theme/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="theme/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="theme/css/style.css" rel="stylesheet">

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span>MindSparx</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="/">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="/login">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">MindSparx : Teman Sehat Mental Remaja</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Mindsparx adalah sebuah sistem yang dirancang untuk
                        membantu mahasiswa mengelola dan mengatasi stres dalam kehidupan kampus.</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="login"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Get Started</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <header class="section-header">
                                <p>Who We Are</p>
                            </header>
                            <p>Mindsparx adalah sebuah sistem yang dirancang untuk membantu mahasiswa mengelola dan
                                mengatasi stres dalam kehidupan kampus. Dengan Mindsparx, mahasiswa dapat melakukan
                                registrasi, login, dan menggunakan berbagai fitur yang disediakan, seperti analisis
                                tingkat stres, rekomendasi kegiatan penghilang stres, chatbot untuk konsultasi, serta
                                fitur cari teman cerita untuk berinteraksi dengan sesama mahasiswa.
                            </p>
                        </div class="col-lg-6">
                    </div>
                    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/hero-img.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

        </section><!-- End About Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Team</h2>
                    <p>Our hard working team</p>
                </header>

                <div class="row gy-4" style="display: flex; justify-content: center;">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Yuniarsih Rahmawati Nur</h4>
                                <span>Project Manager</span>
                                <p>Mengkoordinasikan tim pengembangan aplikasi web, termasuk Programmer yang menggunakan
                                    bahasa pemrograman seperti PHP dan JavaScript, serta framework seperti Laravel.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Arya Hadi</h4>
                                <span>UI/UX</span>
                                <p>Merancang tampilan dan interaksi pengguna menggunakan HTML dan CSS. Desain ini
                                    diimplementasikan oleh Programmer ke dalam kode aplikasi.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="600">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Rizky Ardiana Julianto</h4>
                                <span>PROGRAMMER</span>
                                <p>Menggunakan bahasa pemrograman seperti PHP dan JavaScript, serta framework seperti
                                    Laravel, untuk mengimplementasikan fungsionalitas aplikasi yang telah dirancang oleh
                                    UI/UX Designer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </header>

                <div class="row gy-4" style="display: flex; justify-content: center;">
                    <div class="col-lg-6">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>Kampus 2 Politeknik Negeri Subang,<br>Subang, Jawa Barat,<br>Indonesia</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>+62 812 2278 3328</p>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>MindSparx@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h4>Our Newsletter</h4>
                        <p>Selamat datang di Mindsparx Newsletter! Kami hadir kembali dengan berita dan informasi
                            terbaru untuk membantu Anda mengelola stres dan meraih kesejahteraan mental di lingkungan
                            kampus.
                            Dapatkan wawasan, tips, dan saran-saran bermanfaat dari tim kami.</p>
                    </div>
                    <div class="col-lg-6">
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="assets/img/logo.png" alt="">
                            <span>MindSparx</span>
                        </a>
                        <p>Ikuti kami di media sosial untuk mendapatkan konten-konten yang bermanfaat, tips-tips
                            praktis, dan berita terbaru dari Mindsparx.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">About</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Team</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Analisi Tingkat Stress</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Chatbot</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">ToDo List</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Cari Teman Cerita</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            Kampus 2 Politeknik Negeri Subang <br>
                            Subang, Jawa Barat<br>
                            Indonesia <br><br>
                            <strong>Phone:</strong> +62 812 2278 3328<br>
                            <strong>Email:</strong> MindSparx@gmail.com<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>MindSparx</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">MindSparx</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="theme/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="theme/vendor/aos/aos.js"></script>
    <script src="theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="theme/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="theme/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="theme/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="theme/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="theme/js/main.js"></script>

</body>

</html>
