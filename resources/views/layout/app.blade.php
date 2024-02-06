<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.pusat.header')
</head>
<body>
    @include('frontend.pusat.navbar')
    
    @yield('content')

    <section id="footer">
    @include('frontend.pusat.footer')
    </section>

</body>
    <!-- Vendor JS Files -->
    <script src="{{asset('frontend/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('frontend/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('frontend/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
</html>