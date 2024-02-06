<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.pusat.header')
</head>
<body>
    @include('frontend.pusat.navbar')
    <section>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title mt-5">
            <h2>Contact Us</h2>
            </div>

            <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

            <div class="section-title-divider"></div>
            <p class="section-description" style="text-align: center;">Jl. Raya Jepara Kudus, RT001/RW002, Margoyoso, Kalinyamatan,Kab. Jepara, JAWA TENGAH 
            <br>
            <strong>Phone:</strong> +62 851-5544-2424
            <br>
            <strong>Email:</strong> annisajewelry@gmail.com
            </p>

            <div class="social-media" style="text-align: center;">
                <a href="https://www.facebook.com/annisajewelry"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/annisajewelry/?hl=id"><i class="bi bi-instagram"></i></a>
                <a href="https://www.tiktok.com/@annisajewelry"><i class="bi bi-tiktok"></i></a>
            </div>

            <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.5831468936519!2d110.72013306956745!3d-6.729214399579163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70dd750d915573%3A0xadbe0888df535569!2sAnnisaJewelry!5e0!3m2!1sid!2sid!4v1706587125047!5m2!1sid!2sid" width="100%" height="350px" style="border:0;" frameborder="0" allowfullscreen=""></iframe>
            </div>

            </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

    </section>
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
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