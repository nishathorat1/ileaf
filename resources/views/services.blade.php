<!DOCTYPE html>
<html lang="en">

<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Website Design Templates">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="IT Solutions and Services HTML Template">
    <meta name="description" content="Solutic - IT Solutions and Services HTML Template">

    <!-- title  -->
    <title>Solutic - IT Solutions and Services HTML Template</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logos/favicon..png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/logos/apple-touch-icon-57x57..png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/logos/apple-touch-icon-72x72..png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/logos/apple-touch-icon-114x114..png') }}">

    <!-- plugins -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">

    <!-- search css -->
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">

    <!-- quform css -->
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">

    <!-- theme core css -->
    <link href="{{ asset('cssstyles.css') }}" rel="stylesheet">

</head>

<body>

    <!-- PAGE LOADING
    ================================================== -->
    <div id="preloader"></div>

    <!-- MAIN WRAPPER
    ================================================== -->
    <div class="main-wrapper">

        <!-- HEADER
        ================================================== -->
       <header class="header-style2">
          
         @include('layout.header')
           
      </header> 

        <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section bg-img cover-background mx-lg-1-6 mx-xl-2-5 mx-xxl-2-9 left-overlay-dark" data-overlay-dark="8" data-background="{{ asset('assets/images/banner/page-title.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="position-relative">
                            <h1>Services</h1>
                        </div>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#!">Services</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="line-animated">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </section>

        <!-- SERVICES
        ================================================== -->
        <section>
            <div class="container">
                <div class="section-title mb-1-9 mb-md-6 text-center wow fadeInUp" data-wow-delay="200ms">
                    <span class="sm-title">Our Services</span>
                    <h2 class="mb-0 h1">We Provide The Best Services</h2>
                </div>
                <div class="row mt-n2-9">
                    <div class="col-md-6 col-xl-4 mt-2-9 wow fadeInUp" data-wow-delay="200ms">
                        <div class="card-style-02 h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="card-icon">
                                        <img src="{{ asset('assets/images/icons/01.png') }}" alt="...">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3 ms-lg-4">
                                    <h3 class="h5 mb-3"><a href="information-security.html">Information Security</a></h3>
                                    <p class="mb-3">We focus on the best practices for it solutions and services.</p>
                                    <a href="#!">Read more <i class="ti-arrow-right align-middle ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 mt-2-9 wow fadeInUp" data-wow-delay="300ms">
                        <div class="card-style-02 h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="card-icon">
                                        <img src="{{ asset('assets/images/icons/02.png') }}" alt="...">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3 ms-lg-4">
                                    <h3 class="h5 mb-3"><a href="mobile-platforms.html">Mobile Platforms</a></h3>
                                    <p class="mb-3">We focus on the best practices for it solutions and services.</p>
                                    <a href="#!">Read more <i class="ti-arrow-right align-middle ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 mt-2-9 wow fadeInUp" data-wow-delay="400ms">
                        <div class="card-style-02 h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="card-icon">
                                        <img src="{{ asset('assets/images/icons/03.png') }}" alt="...">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3 ms-lg-4">
                                    <h3 class="h5 mb-3"><a href="data-synchronization.html">Data Synchronization</a></h3>
                                    <p class="mb-3">We focus on the best practices for it solutions and services.</p>
                                    <a href="#!">Read more <i class="ti-arrow-right align-middle ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 mt-2-9 wow fadeInUp" data-wow-delay="500ms">
                        <div class="card-style-02 h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="card-icon">
                                        <img src="{{ asset('assets/images/icons/04.png') }}" alt="...">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3 ms-lg-4">
                                    <h3 class="h5 mb-3"><a href="process-automation.html">Process Automation</a></h3>
                                    <p class="mb-3">We focus on the best practices for it solutions and services.</p>
                                    <a href="#!">Read more <i class="ti-arrow-right align-middle ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 mt-2-9 wow fadeInUp" data-wow-delay="600ms">
                        <div class="card-style-02 h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="card-icon">
                                        <img src="{{ asset('assets/images/icons/05.png') }}" alt="...">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3 ms-lg-4">
                                    <h3 class="h5 mb-3"><a href="event-processing.html">Event Processing</a></h3>
                                    <p class="mb-3">We focus on the best practices for it solutions and services.</p>
                                    <a href="#!">Read more <i class="ti-arrow-right align-middle ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 mt-2-9 wow fadeInUp" data-wow-delay="700ms">
                        <div class="card-style-02 h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="card-icon">
                                        <img src="{{ asset('assets/images/icons/06.png') }}" alt="...">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3 ms-lg-4">
                                    <h3 class="h5 mb-3"><a href="content-management.html">Content Management</a></h3>
                                    <p class="mb-3">We focus on the best practices for it solutions and services.</p>
                                    <a href="#!">Read more <i class="ti-arrow-right align-middle ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CALL TO ACTION
        ================================================== -->
        <section class="jarallax dark-overlay" data-overlay-dark="65" style="background-image: url(img/content/vide-bg-img.jpg);" data-jarallax data-speed="0.8" data-video-src="https://www.youtube.com/watch?v=pDWUf_g2zsc">
            <div class="container">
                <div class="row text-center justify-content-center">
                    <div class="col-xl-11 wow fadeIn" data-wow-delay="200ms">
                        <h2 class="mb-1-9 display-13 display-sm-8 display-md-6 display-lg-3 text-white">Mission is to Growth Your Business & More</h2>
                        <a href="contact.html" class="btn-style1 white-border"><span>Contact Us</span></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER
        ================================================== -->
        @include('layout.footer')

    </div>

    <!-- BUY TEMPLATE
    ================================================== -->
    <div class="buy-theme alt-font d-none d-lg-inline-block"><a href="https://themeforest.net/item/solutic-it-solutions-and-services-html-template/39778713" target="_blank"><i class="fas fa-cart-plus"></i><span>Buy Template</span></a></div>

    <div class="all-demo alt-font d-none d-lg-inline-block"><a href="https://themeforest.net/user/websitedesigntemplates" target="_blank"><i class="far fa-envelope"></i><span>Quick Question?</span></a></div>

    <!-- SCROLL TO TOP
    ================================================== -->
    <a href="#!" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>

    <!-- all js include start -->

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- popper js -->
    <script src="{{ asset('js/popper.min.js') }}"></script>

    <!-- bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- jquery -->
    <script src="{{ asset('js/core.min.js') }}"></script>

    <!-- search -->
    <script src="{{ asset('js/search.js') }}"></script>

    <!-- custom scripts -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- form plugins js -->
    <script src="{{ asset('js/plugins.js') }}"></script>

    <!-- form scripts js -->
    <script src="{{ asset('js/scripts.js') }}"></script>

    <!-- all js include end -->

</body>

</html>