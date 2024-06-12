<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')MindSparx.Tch</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/tempt/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/tempt/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="tempt/vendor/aos/aos.css" rel="stylesheet">
    <link href="tempt/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="tempt/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="tempt/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="tempt/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="tempt/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="tempt/css/style.css" rel="stylesheet">
    <style>
        .profile-img {
            width: 40px;
            /* Atur ukuran lebar gambar */
            height: 40px;
            /* Atur ukuran tinggi gambar */
            object-fit: cover;
            /* Memastikan gambar tidak terdistorsi */
        }
    </style>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="/user" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span>Mindsparx</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#hero">Analisis Tingkat Stress</a></li>
                    <li><a class="nav-link scrollto" href="#chatbot">Chatbot</a></li>
                    <li><a class="nav-link scrollto" href="#ToDoList">ToDoList</a></li>
                    <li><a class="nav-link scrollto" href="#ctc">Cari Teman Cerita</a></li>
                    <li class="nav-item dropdown pe-3">
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                            data-bs-toggle="dropdown">
                            <img src="https://th.bing.com/th/id/OIP.ymEUbl8s2t2yzvdNqwOCyAHaHa?rs=1&pid=ImgDetMain"
                                alt="" class="rounded-circle profile-img">
                            <span class="d-none d-md-block dropdown-toggle ps-2"></span>
                        </a><!-- End Profile Image Icon -->
                        @auth
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                <li class="dropdown-header">
                                    <a href="/profilemahasiswa"><h6>{{ auth()->user()->nama }}</h6></a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <a class="dropdown-item" href="/actionlogout"><span>Logout</span></a>
                                </li>
                            </ul>
                        @endauth
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->


        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">Analisis Tingkat Stress</h1>
                        <h2 data-aos="fade-up" data-aos-delay="400"> analisis tingkat stres sendiri dengan menjawab
                            pertanyaan dengan opsi Ya/Tidak yang sesuai.
                            Berdasarkan tanggapan pengguna, sistem mengklasifikasikan tingkat stres ke dalam 4 kategori
                            yaitu
                            kategori gangguan mood, Depresi ringan, depresi sedang, dan depresi berat
                        </h2>
                        <div data-aos="fade-up" data-aos-delay="600">
                            <div class="text-center text-lg-start">
                                <a href="{{ route('cl.form') }}"
                                    class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Get Started</span>

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
        <section id="chatbot" class="chatbot">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <header class="section-header">
                                <p>Chatbot</p>
                            </header>
                            <p>Chatbot adalah asisten virtual yang menyediakan interaksi antara pengguna dan sistem
                                melalui pesan teks.
                                Pengguna dapat bertanya tentang berbagai topik, dan mendapatkan saran,
                                Setelah memilih topik, pengguna dapat menjelajahi sub topik yang relevan untuk
                                mendapatkan informasi dan rekomendasi
                            </p>
                            <div data-aos="fade-up" data-aos-delay="600">
                                <div class="row justify-content-center">
                                    <a href="/cht"
                                        class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                        <span><a href="https://character.ai/">Get Started</a></span>
                                    </a>
                                </div>
                            </div>
                        </div class="col-lg-6">
                    </div>
                    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/hero-img.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

        </section><!-- End About Section -->

        <!-- ======= Team Section ======= -->
        <section id="ToDoList" class="ToDoList">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>ToDo List</p>
                </header>

                <div class="row gy-4" style="display: flex; justify-content: center;">

                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <div class="member-info">
                                <p>Dengan memiliki semua tugas tercatat dalam todo list, pengguna dapat merasa lebih
                                    tenang dan terorganisir, karena mereka tahu apa yang perlu dilakukan dan kapan harus
                                    melakukannya. Dengan menggunakan todo list secara efektif, pengguna dapat
                                    meningkatkan produktivitas mereka, mengurangi stres, dan mencapai tujuan mereka
                                    dengan lebih efisien.</p>
                            </div>
                            <div data-aos="fade-up" data-aos-delay="600">
                                <div class="row justify-content-center">
                                    <a href="/ToDoList"
                                        class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                        <span>Get Started</span>

                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                                <img src="assets/img/hero-img.png" class="img-fluid" alt="">
                            </div>
                        </div class="col-lg-6">
                    </div>


        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="ctc" class="ctc">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Cari Teman Cerita</p>
                </header>

                <div class="row gy-4" style="display: flex; justify-content: center;">

                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <div class="member-info">
                                <p>Fitur ini memungkinkan pengguna menemukan teman dengan minat yang sama dan berbagi
                                    cerita serta pengalaman terkait minat, hobi, atau kesehatan mentalnya. Dengan cara
                                    ini,
                                    lingkungan yang menggembirakan tercipta untuk menjaga kesehatan mental Anda</p>
                            </div>
                            <div data-aos="fade-up" data-aos-delay="600">
                                <div class="row justify-content-center">
                                    <a href="https://t.me/+Az7-5pfdbpM2NTE1"
                                        class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                        <span>Get Started</span>

                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                                <img src="assets/img/hero-img.png" class="img-fluid" alt="">
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
                            kampus. Dapatkan wawasan, tips, dan saran-saran bermanfaat dari tim kami.</p>
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
                            <li><i class="bi bi-chevron-right"></i> <a href="/hero">Analisis Tingkat Stress</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="chatbot">Chatbot</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="ToDoList">ToDo List</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="crt">Cari Teman Cerita</a></li>
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
    <script src="tempt/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="tempt/vendor/aos/aos.js"></script>
    <script src="tempt/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="tempt/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="tempt/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="tempt/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="tempt/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="tempt/js/main.js"></script>

</body>

</html>
