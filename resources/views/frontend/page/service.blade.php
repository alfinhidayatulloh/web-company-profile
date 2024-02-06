<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.pusat.header')
</head>
<body>
    @include('frontend.pusat.navbar')
    <section>
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title mt-5">
            <h2>Services</h2>
            <p>Kami melayani dengan sepenuh hati, sesuai request kamu. ekspresikan perhiasan yang kamu inginkan disini. sudah  terbukti Kualitas, Terpercaya & Amanah</p>
            </div>

            <div class="row">
            <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box">
                <i class="bi bi-check2-circle"></i>
                <h4><a href="#">Produk Berkualitas</a></h4>
                <p>produk dari bahan titanium asli dengan lapisan Emas 24k terjamin tidak mudah berkarat, tidak mudah luntur dan tahan lama.</p>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                <i class="bi bi-shield-check"></i>
                <h4><a href="#">Garansi</a></h4>
                <p>Tersedia Garansi toko warna pudar dan rantai putus sampai dengan 1 tahun, S&K berlaku.</p>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                <i class="bi bi-whatsapp"></i>
                <h4><a href="#">Pusat Bantuan Pelanggan</a></h4>
                <p>Hubungi / Wa admin langsung untuk jawaban pertanyaan-pertanyaan selanjutnya </p>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                <i class="bi bi-cash-coin"></i>
                <h4><a href="#">Bayar & Beli Online</a></h4>
                <p>Pembayaran via Transfer bank, indomaret, shopeepay dengan proses lebih mudah dan cepat </p>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                <i class="bi bi-person-add"></i>
                <h4><a href="#">Gabung RESELLER dapat banyak Keuntungan</a></h4>
                <p>Free bahan promosi, foto dan video real pick update setiap hari. Dapatkan keuntungan 5-20 rb per produk</p>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="600">
                <div class="icon-box">
                <i class="bi bi-valentine"></i>
                <h4><a href="#">Paket Kemasan Cantik</a></h4>
                <p>Paket kemasan premium meliputi BOX + Tatakan Kalung + Thanks Card + Gift + SEGEL </p>
                </div>
            </div>
            </div>

        </div>
        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
        <div class="container">

            <div class="row" data-aos="zoom-in">
            <div class="col-lg-9 text-center text-lg-start">
                <h3>Kunjungi Etalase Produk Lengkap kami</h3>
                <p>langsung lihat Etalase produk lengkap kami di Shopee. temukan perhiasan favorit yang kamu inginkan. harga terjangkau kualitas premium.</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
                <a class="cta-btn align-middle" href="https://shopee.co.id/pusatperhiasanxuping?shopCollection=158216295#product_list">Selengkapnya</a>
            </div>
            </div>

        </div>
        </section><!-- End Cta Section -->
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