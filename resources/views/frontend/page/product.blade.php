<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.pusat.header')
</head>
<body>
    @include('frontend.pusat.navbar')
    <section>
        <!-- ======= Product Section ======= -->
        <section id="product" class="product">
        <div class="container" data-aos="fade-up">

            <div class="section-title mt-5">
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