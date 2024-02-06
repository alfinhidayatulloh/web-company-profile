    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-tiktok m-2"></i><a href="https://www.tiktok.com/@annisajewelry">Tiktok</a>
            <i class="bi bi-bag-fill m-2"></i><a href="https://www.tiktok.com/@annisajewelry">Shopee</a>
            <i class="bi bi-whatsapp" style="margin-left: 15px;"></i>  <a href="https://wa.me/6285155442424">+62 851 5544 2424</a>
        </div>
        <div class="cta d-none d-md-block">
            <a href="{{ url('/product') }}" class="scrollto">Get Started</a>
        </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center ">
        <div class="container d-flex align-items-center justify-content-between">

        <!--<img class="logo" src="{{asset('frontend/img/icon_aj.png')}}" href="#"></img>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{ url('/') }}" class="logo"><img src="{{asset('frontend/img/logo-aj.png')}}" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link scrollto {{Request::path()=='/' ? 'active':'';}}" href="{{ url('/') }}">Home</a></li>
            <li><a class="nav-link scrollto {{Request::path()=='about' ? 'active':'';}}" href="{{ url('/about') }}">About</a></li>
            <li><a class="nav-link scrollto {{Request::path()=='service' ? 'active':'';}}" href="{{ url('/service') }}">Services</a></li>
            <li><a class="nav-link scrollto {{Request::path()=='product' ? 'active':'';}}" href="{{ url('/product') }}">Product</a></li>
            <li><a class="nav-link scrollto {{Request::path()=='contact' ? 'active':'';}}" href="{{ url('/contact') }}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>

        </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->