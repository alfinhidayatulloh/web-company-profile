<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.pusat.header')
</head>
<body>
    @include('frontend.pusat.navbar')
    <section>
    @section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Annisa Jewelry</span></h2>
            <p class="animate__animated animate__fadeInUp">Pusat Perhiasan Titanium Custom. Kalung Nama, Gelang Nama, Bross/NIP, Cincin Nama, Anting Nama, dll.</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Selengkapnya</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Perhiasan Titanium</h2>
            <p class="animate__animated animate__fadeInUp">Terbuat dari bahan stainless still dengan lapisan emas 24k. Warna Sangat Awet Bertahun - tahun, Tahan lama & Anti Karat bagi yang Pandai Merawat.</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Melayani Setulus Hati</h2>
            <p class="animate__animated animate__fadeInUp">Anda butuh perhiasan custom ? disini kami akan melayani anda dengan sepenuh hati sesuai request / desain yang di inginkan</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        </a>

        </div>
    </section>
    <!-- End Hero -->
    <main id="main">
        <!-- ======= Icon Boxes Card Product Section ======= -->
        <section id="icon-boxes" class="icon-boxes">
        <div class="container">

            <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                <!-- card -->
                <div class="card border-light">
                    <img src="{{asset('frontend/img/produk/kalung1.jpg')}}" alt="product-image">
                    <div class="card-footer border-top border-light p-4">
                        <a href="#product" class="h4">Kalung</a>
                        <div class="mt-2">Rp. 48.000</div>
                    </div>
                </div>
                <!-- / card -->
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                <!-- card -->
                <div class="card border-light">
                    <img src="{{asset('frontend/img/produk/gelang2.jpg')}}" alt="product-image">
                    <div class="card-footer border-top border-light p-4">
                        <a href="#product" class="h4">Gelang</a>
                        <div class="mt-2">Rp. 60.000</div>
                    </div>
                </div>
                <!-- / card -->
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                <!-- card -->
                <div class="card border-light">
                    <img src="{{asset('frontend/img/produk/cincin1.jpg')}}" alt="product-image">
                    <div class="card-footer border-top border-light p-4">
                        <a href="#product" class="h4">Cincin</a>
                        <div class="mt-2">Rp. 45.000</div>
                    </div>
                </div>
                <!-- / card -->
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                <!-- card -->
                <div class="card border-light">
                    <img src="{{asset('frontend/img/produk/anting2.jpg')}}" alt="product-image">
                    <div class="card-footer border-top border-light p-4">
                        <a href="#product" class="h4">Anting</a>
                        <div class="mt-2">Rp. 50.000</div>
                    </div>
                </div>
                <!-- / card -->
            </div>
            </div>

            </div>

        </div>
        </section><!-- End Icon Boxes Section -->

        </section>

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
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

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
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

        <!-- ======= Product Section ======= -->
        <section id="product" class="product">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
            <h2>Product</h2>
            <p> Expresikan Nama kamu dalam bentuk perhiasan Kalung, Gelang, Bross/ NIP, Cincin, Anting, dll.</p>
            </div>

            <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="product-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-kalung">Kalung</li>
                <li data-filter=".filter-gelang">Gelang</li>
                <li data-filter=".filter-Bross">Bross</li>
                <li data-filter=".filter-cincin">Cincin</li>
                <li data-filter=".filter-anting">Anting</li>
                </ul>
            </div>
            </div>

            <div class="row product-container">

            <div class="col-lg-4 col-md-6 product-item filter-kalung">
                <img src="{{asset('frontend/img/produk/kalung1.jpg')}}" class="img-fluid" alt="">
                <div class="product-info">
                <h4>kalung Nama Nadia</h4>
                <p>Rp. 48.000</p>
                <a href="{{asset('frontend/img/produk/kalung1.jpg')}}" data-gallery="productGallery" class="product-lightbox preview-link" title="kalung Nama Model Nadia Gold"><i class="bx bx-plus"></i></a>
                <!--<a href="/frontend/showproduk" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
                </div>
            </div>

            <div class="col-lg-4 col-md-6 product-item filter-kalung">
                <img src="{{asset('frontend/img/produk/kalung2.jpg')}}" class="img-fluid" alt="">
                <div class="product-info">
                <h4>Kalung 2 nama cantik</h4>
                <p>Rp. 82.000</p>
                <a href="{{asset('frontend/img/produk/kalung2.jpg')}}" data-gallery="productGallery" class="product-lightbox preview-link" title="Kalung titanium model 2 nama cantik"><i class="bx bx-plus"></i></a>
                <a href="product-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 product-item filter-kalung">
                <img src="{{asset('frontend/img/produk/kalung3.jpg')}}" class="img-fluid" alt="">
                <div class="product-info">
                <h4>Kalung Nama jedar / huruf pisah</h4>
                <p>Rp. 50.000</p>
                <a href="{{asset('frontend/img/produk/kalung3.jpg')}}" data-gallery="productGallery" class="product-lightbox preview-link" title="kalung Nama model jedar / huruf pisah"><i class="bx bx-plus"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 product-item filter-kalung">
                <img src="{{asset('frontend/img/produk/kalung4.jpg')}}" class="img-fluid" alt="">
                <div class="product-info">
                <h4>Kalung nama mini simple</h4>
                <p>Rp. 48.000</p>
                <a href="{{asset('frontend/img/produk/kalung4.jpg')}}" data-gallery="productGallery" class="product-lightbox preview-link" title="kalung nama mini simple terbaru"><i class="bx bx-plus"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 product-item filter-gelang">
                <img src="{{asset('frontend/img/produk/gelang1.jpg')}}" class="img-fluid" alt="">
                <div class="product-info">
                <h4>Gelang bangle nama ukir</h4>
                <p>Rp. 60.000</p>
                <a href="{{asset('frontend/img/produk/gelang1.jpg')}}" data-gallery="productGallery" class="product-lightbox preview-link" title="gelang bangle nama ukir"><i class="bx bx-plus"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 product-item filter-gelang">
                <img src="{{asset('frontend/img/produk/gelang2.jpg')}}" class="img-fluid" alt="">
                <div class="product-info">
                <h4>Gelang nama serut titanium</h4>
                <p>Rp. 55.0000</p>
                <a href="{{asset('frontend/img/produk/gelang2.jpg')}}" data-gallery="productGallery" class="product-lightbox preview-link" title="gelang nama serut titanium model Liam"><i class="bx bx-plus"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 product-item filter-gelang">
                <img src="{{asset('frontend/img/produk/gelang3.jpg')}}" class="img-fluid" alt="">
                <div class="product-info">
                <h4>Gelang nama variasi mickey</h4>
                <p>Rp. 50.000</p>
                <a href="{{asset('frontend/img/produk/gelang3.jpg')}}" data-gallery="productGallery" class="product-lightbox preview-link" title="gelang nama variasi micke"><i class="bx bx-plus"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 product-item filter-Bross">
                <img src="{{asset('frontend/img/produk/bros1.jpg')}}" class="img-fluid" alt="">
                <div class="product-info">
                <h4>Bross Nama</h4>
                <p>Bross</p>    
                <a href="{{asset('frontend/img/produk/bros1.jpg')}}" data-gallery="productGallery" class="product-lightbox preview-link" title="Bross 1"><i class="bx bx-plus"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 product-item filter-cincin">
                <img src="{{asset('frontend/img/produk/cincin1.jpg')}}" class="img-fluid" alt="">
                <div class="product-info">
                <h4>cincin 1</h4>
                <p>cincin</p>
                <a href="{{asset('frontend/img/produk/cincin1.jpg')}}" data-gallery="productGallery" class="product-lightbox preview-link" title="cincin 1"><i class="bx bx-plus"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 product-item filter-anting">
                <img src="{{asset('frontend/img/produk/anting1.jpg')}}" class="img-fluid" alt="">
                <div class="product-info">
                <h4>Anting 1</h4>
                <p>Anting</p>
                <a href="{{asset('frontend/img/produk/anting1.jpg')}}" data-gallery="productGallery" class="product-lightbox preview-link" title="anting 1"><i class="bx bx-plus"></i></a>
                <a href="product-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            </div>

        </div>
        </section><!-- End Product Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
            <h2>yang sering di tanyakan</h2>
            </div>

            <div class="faq-list">
            <ul>
                <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Bagaimana tentang produk ini?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                    <p>
                    Terbuat dari bahan titanium asli dengan lapisan emas 24k terjamin kualitas, tidak mudah berkarat, tidak mudah luntur, aman digunakan sehari-hari tanpa khawatir terjadi iritasi kulit.
                    </p>
                </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">bagaimana cara pesannya?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                    <p>
                    bisa langsung chat wa admin, atau bisa chekout di tiktok / shopee hanya dengan mengklik icon nya.
                    </p>
                </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">apa bisa kirim ke luar Pulau JAWA ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                    <p>
                    bisa dong, pengiriman kami terjangkau ke seluruh Indonesia dengan pilihan jasa expedisi lengkap, J&T, JNE, POS, SiCepat, Anteraja, TIKI, ID Express, dst.
                    </p>
                </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">apa saya bisa request desain sendiri?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                    <p>
                    Bisa banget. kami melayani sepenuh hati sesuai permintaan customer. bisa siapkan desain yang kakak inginkan kemudian kirim ke admin via Whatsapp.
                    </p>
                </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="500">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Pengiriman dari mana?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                    <p>
                    Pengiriman dari KALINYAMATAN-JEPARA JAWA TENGAH
                    </p>
                </div>
                </li>

            </ul>
            </div>

        </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
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
                <a href="https://www.tiktok.com/@annisajewelry"><i class="bi bi-tiktok"></i></a>
                <a href="https://www.facebook.com/annisajewelry"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/annisajewelry/?hl=id"><i class="bi bi-instagram"></i></a>
            </div>

            <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.5831468936519!2d110.72013306956745!3d-6.729214399579163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70dd750d915573%3A0xadbe0888df535569!2sAnnisaJewelry!5e0!3m2!1sid!2sid!4v1706587125047!5m2!1sid!2sid" width="100%" height="350px" style="border:0;" frameborder="0" allowfullscreen=""></iframe>
            </div>

            </div>

            </div>

        </div>
        </section><!-- End Contact Section -->


    </main>

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