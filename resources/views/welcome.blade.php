<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CV. AGUS JAYA TAILOR | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('LandingPage') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('LandingPage') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('LandingPage') }}/assets/css/slicknav.css">
    <link rel="stylesheet" href="{{ asset('LandingPage') }}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('LandingPage') }}/assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="{{ asset('LandingPage') }}/assets/css/gijgo.css">
    <link rel="stylesheet" href="{{ asset('LandingPage') }}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('LandingPage') }}/assets/css/animated-headline.css">
    <link rel="stylesheet" href="{{ asset('LandingPage') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('LandingPage') }}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('LandingPage') }}/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('LandingPage') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ asset('LandingPage') }}/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('LandingPage') }}/assets/css/style.css">
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('LandingPage') }}/assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->
    <header>
        <!-- Header Start -->
        <div class="header-area header_area">
            <div class="main-header">
                <div class="header-bottom header-sticky">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html"><span style="color: #BE9278;font-weight:bold;font-size:18px;">CV. AGUS JAYA TAILOR</span></a>
                    </div>
                    <div class="header-left  d-flex f-right align-items-center">
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    @include('menu')
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider position-relative hero-overly slider-height d-flex align-items-center"
                    data-background="{{ asset('LandingPage') }}/assets/img/hero/h1_hero.png">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="hero-caption">
                                    <img class="rotateme"
                                        src="{{ asset('LandingPage') }}/assets/img/hero/hero-icon.png" alt=""
                                        data-animation="zoomIn" data-delay="1s" />
                                    <h1 data-animation="fadeInLeft" data-delay=".4s">
                                        Kami membuat pakaian yang cocok untuk anda
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay=".6s">
                                        Menerima jasa jahit model pakaian untuk semua kalangan
                                    </p>
                                    <!-- Hero Btn -->
                                    <a href="#produk" class="btn" data-animation="fadeInLeft" data-delay=".8s">Lihat Produk Kami</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Left img -->
                    <div class="hero-img">
                        <img src="{{ asset('LandingPage') }}/assets/img/hero/h1_hero1.png" alt=""
                            data-animation="fadeInRight" data-transition-duration="5s" />
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!--? Clients Offers Start -->
        <div id="produk" class="clients-area section-padding40">
            <div class="container">
                <div class="row">
                    @foreach ($pakaian as $item)
                    <div class="col-lg-3">
                        <div class="card fadeInUp shadow" data-wow-delay=".2s">
                            <div class="card-body">
                                <img src="{{ asset('images') }}/{{ $item->foto_path }}" width="100%" height="250px" alt="">
                            </div>
                            <div class="card-footer">
                                <h2>{{ $item->nama_pakaian }}</h2>
                               
                                <h4 style="color:#BE9278">Rp. {{ number_format($item->harga) }}</h4>
                                  
                                <h6>Estimasi Pengerjaan ({{ $item->estimasi_selesai }} Hari)</h6>
                                <a href="{{ url('pesan',$item->id_pakaian) }}"  class="btn btn-primary" style="height: 40px;padding: 10px 20px !important">Pesan</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Clients Offers End -->
    </main>

    <footer>
        <div
            class="footer-wrapper section-bg2 pl-100"
            data-background="{{ asset('LandingPage') }}/assets/img/gallery/footer-bg.png">
        
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row align-items-center">
                            <div class="col-xl-12">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;
                                        <script>
                                            document.write(
                                                new Date().getFullYear()
                                            );
                                        </script>
                                        CV. AGUS JAYA TAILOR | This template
                                        is made with
                                        <i
                                            class="fa fa-heart"
                                            aria-hidden="true"
                                        ></i>
                                        by
                                        <a
                                            href="https://colorlib.com"
                                            target="_blank"
                                            >Colorlib</a
                                        >
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </div>
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    <script src="{{ asset('LandingPage') }}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('LandingPage') }}/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('LandingPage') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('LandingPage') }}/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('LandingPage') }}/assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('LandingPage') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('LandingPage') }}/assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('LandingPage') }}/assets/js/wow.min.js"></script>
    <script src="{{ asset('LandingPage') }}/assets/js/animated.headline.js"></script>
    <script src="{{ asset('LandingPage') }}/assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="{{ asset('LandingPage') }}/assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="{{ asset('LandingPage') }}/assets/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('LandingPage') }}/assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="{{ asset('LandingPage') }}/assets/js/jquery.barfiller.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="{{ asset('LandingPage') }}/assets/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('LandingPage') }}/assets/js/waypoints.min.js"></script>
    <script src="{{ asset('LandingPage') }}/assets/js/jquery.countdown.min.js"></script>
    <script src="{{ asset('LandingPage') }}/assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="{{ asset('LandingPage') }}/assets/js/contact.js"></script>
    <script src="{{ asset('LandingPage') }}/assets/js/jquery.form.js"></script>
    <script src="{{ asset('LandingPage') }}/assets/js/jquery.validate.min.js"></script>
    <script src="{{ asset('LandingPage') }}/assets/js/mail-script.js"></script>
    <script src="{{ asset('LandingPage') }}/assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('LandingPage') }}/assets/js/plugins.js"></script>
    <script src="{{ asset('LandingPage') }}/assets/js/main.js"></script>
</body>
