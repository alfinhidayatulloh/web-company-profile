<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.pusat.header')
</head>
<body>
    @include('frontend.pusat.navbar')
    <section>
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title mt-5">
            <h2>About Us</h2>
            <p>ANNISA JEWELRY merupakan UMKM yang bergerak dibidang Aksesoris & Perhiasan titanium. melayani berbagai macam pembuatan perhiasan custom seperti Kalung nama, Gelang nama, bross/NIP, Cincin, Anting, Dll. dibuat dengan bahan lapisan emas 24k, dijamin tidak mudah luntur, tahan lama aman digunakan sehari-hari. kami sudah melayani Puluhan Ribu Pesanan ke seluruh Indonesia dengan pelayanan yang ramah dan tulus.</p>
            </div>

            <div class="row content">
            <div class="col-lg-6">
                <p>
                Keunggulan di Toko kami
                </p>
                <ul>
                <li><i class="ri-check-double-line"></i>Pelayan Kilat Dan Pembuatan Cepat Tidak Perlu Menunggu Mingguan Hingga Bulanan</li>
                <li><i class="ri-check-double-line"></i>Custom design sepuasnya</li>
                <li><i class="ri-check-double-line"></i>Warna Sangat Kinclong Karena dilapisi Emas Murni 24 K</li>
                <li><i class="ri-check-double-line"></i>Warna Sangat Awet Bertahun - tahun, Tahan lama & Anti Karat bagi yang Pandai Merawat</li>
                <li><i class="ri-check-double-line"></i>Bisa Pilih Font dan Aksen Tambahan, Cek Font Dll di Profil Toko Kami</li>
                <li><i class="ri-check-double-line"></i>Bisa Ganti Rantai Tersedia 20+ Rantai Pilihan</li>
                <li><i class="ri-check-double-line"></i> Dipakai Sangat Cantik Seperti Emas Asli</li>
                </ul>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <p>
                Tidak perlu ragu lagi, buruan pesan sekarang dapatkan diskon & promo menarik hanya di ANNISA JEWELRY. Harga murah kualitas terjamin bisa custom sesuai selera buruan lihat etalase lengkap kami di SHOPEE / TIKTOK dengan mengklik icon dibawah ini
                </p>
                <a href="https://www.tiktok.com/@annisajewelry" class="logo"><img src="{{asset('frontend/img/logo/tiktokshop.png')}}" alt="" class="img-fluid" style="width: 80px;"></a>
                <a href="https://shopee.co.id/pusatperhiasanxuping?categoryId=100633&entryPoint=ShopByPDP&itemId=4636837100"class="logo"><img src="{{asset('frontend/img/logo/shopee.png')}}" alt="" class="img-fluid" style="width: 80px;"></i></a>
            </div>
            </div>

        </div>
        </section><!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-5 align-items-stretch position-relative video-box" style='background-image: url("../frontend/img/intro.jpg");' data-aos="fade-right">
                <a href="{{asset('frontend/video/videoproduk.mp4')}}" class="glightbox play-btn mb-4"></a>
            </div>
            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">

                <div class="content">
                <h3>Hai Selamat datang di toko kami ☺️ Anda sudah menemukan Supplier <strong>Tempat Pembuatan Perhiasan Custom</strong></h3>
                <p>
                Pelayan Kilat Dan Pembuatan Cepat Tidak Perlu Menunggu Mingguan Hingga Bulanan.
                Tersedia 3 varian warna
                </p>
                </div>

                <div class="accordion-list">
                <ul>
                    <li data-aos="fade-up" data-aos-delay="100">
                    <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Gold (Warna Kuning Emas) <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                        <p>
                        ♥️RANTAI KALUNG : TITANIUM.  
                        ♥️LIONTIN :KUNINGAN LAPIS EMAS 24K ( KUALITAS IMPORT)
                        </p>
                    </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Lapis Emas Putih  (Warna Emas Putih Kinclong)<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                        <p>
                        ♥️RANTAI KALUNG : TITANIUM.  
                        ♥️LIONTIN :KUNINGAN LAPIS EMAS 24K ( KUALITAS IMPORT)
                        </p>
                    </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Silver (Warna Logam besi) <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                        <p>
                        ♥️RANTAI KALUNG: TITANIUM
                        ♥️LIONTIN :STAINLEES STEEL 
                        </p>
                    </div>
                    </li>
                </ul>
                </div>
            </div>
            </div>

        </div>
        </section><!-- End Why Us Section -->
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