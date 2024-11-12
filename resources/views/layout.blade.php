<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ __('Твой сервис - Услуги по разработке 1С') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="mailru-domain" content="JC1hWfA5wZGt6bAj"/>
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css?v1') }}" rel="stylesheet">
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span></span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>

                <li>
                    @auth
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Настройки
                            </button>
                            {!! menu('main', 'my_menu') !!}
                        </div>
                    @endauth
                </li>

                {!! menu('site', 'site_menu') !!}
{{--                <li><a class="nav-link scrollto active" href="#hero">Главная</a></li>--}}
{{--                <li><a class="nav-link scrollto" href="#about">О нас</a></li>--}}
{{--                <li><a class="nav-link scrollto" href="#values">Услуги</a></li>--}}
{{--                <li><a class="nav-link scrollto" href="#testimonials">Отзывы</a></li>--}}
{{--                <li><a class="nav-link scrollto" href="#contact">Контакты</a></li>--}}
{{--                <li><a class="getstarted scrollto" href="tel:+77083961428">+7 708 396 1428 </a></li>--}}
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

@include('content.banner')


<main id="main">
    @include('content.about')
    @include('content.service')
    @include('content.pricing')

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="container">
        <div class="copyright">
            &copy; Все права защищены 2024
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
<div class="whatsapp-icon"><a href="https://api.whatsapp.com/send?phone=+77083961428&amp;text=Здравствуйте%20👋"
                              target="_blank"><img src="assets/img/whatsapp.png"></a></div>
<!-- Vendor JS Files -->

<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
