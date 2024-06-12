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
                <span>MindSparx</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="/user">Analisis Tingkat Stress</a></li>
                    <li><a class="nav-link scrollto" href="/user">Chatbot</a></li>
                    <li><a class="nav-link scrollto" href="/user">ToDoList</a></li>
                    <li><a class="nav-link scrollto" href="/user">Cari Teman Cerita</a></li>
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

    <!-- ======= EndHero Section ======= -->

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
