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
    <link rel="shortcut icon" href="{{ asset('assets/images/logos/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/logos/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/logos/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/logos/apple-touch-icon-114x114.png') }}">

    <!-- plugins -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">

    <!-- search css -->
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">

    <!-- quform css -->
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">

    <!-- theme core css -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

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
        <header class="header-style3">
            @include('layout.header')
        </header>

        <!-- BANNER
        ================================================== -->
        <section class="full-screen top-position1 p-0">
            <div class="slider-fade3 owl-carousel owl-theme w-100 min-vh-100">
                
                <div class="item bg-img cover-background left-overlay-dark-three" data-overlay-dark="90" data-background="{{ asset('assets/images/banner/slider-07.jpg') }}">
                    <div class="container d-flex flex-column">
                        <div class="row align-items-center min-vh-100 pt-6 pt-md-0">
                            <div class="col-md-11 col-lg-9 col-xl-8 col-xxl-7 mb-1-9 mb-lg-0 pt-6 pb-12 py-sm-6">
                                <div class="section-title01">
                                    <div class="mb-2-1">
                                        <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-3 font-weight-700 small-title">BUILDING SMART &amp; IMPACTFUL DIGITAL SOLUTIONS</span>
                                        <h1 class="display-3 font-weight-800 mb-4 text-white">Empowering Businesses with Cutting-Edge Web Solutions</h1>
                                    </div>
                                    <p class="mb-1-9 font-weight-500 display-28 text-white opacity7 w-md-80 d-none d-sm-block">Delivering scalable, secure, and user-centric websites to fuel your digital growth.</p>
                                </div>
                                <div class="banner-button">
                                    <a href="about.html" class="butn-style2 white m-2">
                                        <span>Explore Our Services</span>
                                    </a>
                                    <div class="button-text d-inline-block m-2">
                                        <a href="contact.html" class="text-white text-primary-hover">Request a Free Quote</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item bg-img cover-background left-overlay-dark-three" data-overlay-dark="90" data-background="{{ asset('assets/images/banner/slider-08.jpg') }}">
                    <div class="container d-flex flex-column">
                        <div class="row align-items-center min-vh-100 pt-6 pt-md-0">
                            <div class="col-md-11 col-lg-9 col-xl-8 col-xxl-7 mb-1-9 mb-lg-0 pt-6 pb-12 py-sm-6">
                                <div class="section-title01">
                                    <div class="mb-2-1">
                                        <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-3 font-weight-700 small-title">TRANSFORMING IDEAS INTO POWERFUL DIGITAL REALITIES</span>
                                        <h1 class="display-3 font-weight-800 mb-4 text-white">Innovative Mobile App Development for the Modern World</h1>
                                    </div>
                                    <p class="mb-1-9 font-weight-500 display-28 text-white opacity7 w-md-80 d-none d-sm-block">We build seamless, scalable, and intuitive apps for iOS, Android, and cross-platform.</p>
                                </div>
                                <div class="banner-button">
                                    <a href="about.html" class="butn-style2 white m-2">
                                        <span>Build Your App</span>
                                    </a>
                                    <div class="button-text d-inline-block m-2">
                                        <a href="contact.html" class="text-white text-primary-hover">Schedule a Consultation</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item bg-img cover-background left-overlay-dark-three" data-overlay-dark="90" data-background="{{ asset('assets/images/banner/slider-09.jpg') }}">
                    <div class="container d-flex flex-column">
                        <div class="row align-items-center min-vh-100 pt-6 pt-md-0">
                            <div class="col-md-11 col-lg-9 col-xl-8 col-xxl-7 mb-1-9 mb-lg-0 pt-6 pb-12 py-sm-6">
                                <div class="section-title01">
                                    <div class="mb-2-1">
                                        <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-3 font-weight-700 small-title">CLOUD-FIRST STRATEGIES FOR AGILE, FUTURE-READY ENTERPRISES</span>
                                        <h1 class="display-3 font-weight-800 mb-4 text-white">Smarter Cloud Solutions to Accelerate Your Business</h1>
                                    </div>
                                    <p class="mb-1-9 font-weight-500 display-28 text-white opacity7 w-md-80 d-none d-sm-block">Harness the power of AWS, Azure &amp; GCP to scale faster, smarter, and safer.</p>
                                </div>
                                <div class="banner-button">
                                    <a href="about.html" class="butn-style2 white m-2">
                                        <span>Get Cloud-Ready</span>
                                    </a>
                                    <div class="button-text d-inline-block m-2">
                                        <a href="contact.html" class="text-white text-primary-hover">Talk to an Expert</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- ABOUT
        ================================================== -->
        <section class="about-style-04 pb-4">
            <div class="container">
                <div class="border-bottom border-color-light-black mb-6 mb-lg-10 pb-6 pb-lg-10">
                    <div class="row mt-n2-9">
                        <div class="col-lg-6 mt-2-9 wow fadeIn" data-wow-delay="200ms">
                            <div class="pe-xl-5">
                                <div class="about-image position-relative">
                                    <img src="{{ asset('assets/images/content/about8.jpg') }}" alt="..." class="rounded">
                                    <div class="about-img-text row g-0">
                                        <div class="col-sm-6">
                                            <div class="d-flex p-3 p-xxl-4 h-100 bg-secondary rounded-sm-start">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ asset('assets/images/icons/37.png') }}" alt="..." class="w-50px">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h3 class="mb-0 text-white"><span class="countup">3</span>K</h3>
                                                    <p class="mb-0 text-white opacity9">Design Staff</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="d-flex p-3 p-xxl-4 h-100 bg-primary rounded-sm-end">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ asset('assets/images/icons/36.png') }}" alt="..." class="w-50px">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h3 class="mb-0 text-white"><span class="countup">12</span>k</h3>
                                                    <p class="mb-0 text-white opacity9">Project Completed</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-2-9">
                            <div class="ps-lg-1-9 ps-xl-0">
                                <!-- <div class="mb-4 wow fadeInUp" data-wow-delay="100ms">
                                    <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">About Us.</span>
                                    <h2 class="h1 mb-0">Making the world advanced design work for you</h2>
                                </div> -->
                                <div class="section-title mb-1-9 mb-md-6 text-center wow fadeIn" data-wow-delay="200ms">
                                    <span class="sm-title">About Us.</span>
                                    <h2 class="h1 mb-0">Making the world advanced design work for you</h2>
                                </div>
                                <p class="mb-2-5 wow fadeInUp" data-wow-delay="200ms">We’re top notch award winning agency. We are experienced in providing innovative creative services to our clients worldwide.</p>
                                <div class="steps-item-wrap wow fadeInUp" data-wow-delay="300ms">
                                    <div class="steps-wrap">
                                        <div class="steps-number"><span class="text-white">01</span></div>
                                        <div class="steps-line-wrap">
                                            <div class="steps-line"></div>
                                        </div>
                                    </div>
                                    <div class="steps-content">
                                        <h4>Advanced Innovative Agency</h4>
                                        <p class="mb-0 w-lg-95">Web design advanced innovative agency is one of the world's leading creative agencies and consultancy.</p>
                                    </div>
                                </div>
                                <div class="steps-item-wrap wow fadeInUp" data-wow-delay="400ms">
                                    <div class="steps-wrap">
                                        <div class="steps-number"><span class="text-white">02</span></div>
                                        <div class="steps-line-wrap">
                                            <div class="steps-line"></div>
                                        </div>
                                    </div>
                                    <div class="steps-content">
                                        <h4>Professional Problem Solutions</h4>
                                        <p class="mb-0 w-lg-95">Professional problem solutions for web agency business and marketing companies to a customer.</p>
                                    </div>
                                </div>
                                <div class="steps-item-wrap wow fadeInUp" data-wow-delay="500ms">
                                    <div class="steps-wrap">
                                        <div class="steps-number"><span class="text-white">03</span></div>
                                        <div class="steps-line-wrap">
                                            <div class="steps-line last"></div>
                                        </div>
                                    </div>
                                    <div class="steps-content mb-0">
                                        <h4>Web Architect and Development</h4>
                                        <p class="mb-0 w-lg-95">Web modeler and improvement for site planning and devOps, graduate degree in web programming.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- SERVICES
        ================================================== -->
        <section class="pt-0">
            <div class="section-title mb-1-9 mb-md-6 text-center wow fadeIn" data-wow-delay="200ms">
                <span class="sm-title">Our Services.</span>
                <!-- <h2 class="h1 mb-0">Our professional team</h2> -->
            </div>
            <div class="container-fluid px-xxl-5">
                <div class="row mt-n4 justify-content-center">
                    <div class="col-sm-6 col-xl-3 mt-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="card card-style-13 border-0 rounded">
                            <img class="w-100" src="{{ asset('assets/images/service/service-07.jpg') }}" alt="...">
                            <div class="opacity-light bg-extra-dark-gray"></div>
                            <div class="card-overlay"></div>
                            <div class="card-body p-0 position-absolute top-0 start-0 w-100 h-100">
                                <div class="card-custom-1">
                                    <span class="text-primary d-block mb-2 position-relative z-index-1">01</span>
                                    <h3 class="font-weight-800 text-primary position-relative z-index-1 mb-0 w-75"><a href="information-security.html" class="text-white">Web Application Development</a></h3>
                                    <span class="card-hover-icon">
                                        <img src="{{ asset('assets/images/icons/41.png') }}" alt="..." class="w-50px">
                                    </span>
                                </div>
                                <div class="card-data align-items-end d-flex">
                                    <div class="card-custom-2">
                                        <p class="card-text">We focus on the best practices for it solutions and services.</p>
                                        <a href="information-security.html" class="btn btn-link-1 px-0">Explore services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 mt-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="card card-style-13 border-0 rounded">
                            <img class="w-100" src="{{ asset('assets/images/service/service-08.jpg') }}" alt="...">
                            <div class="opacity-light bg-extra-dark-gray"></div>
                            <div class="card-overlay"></div>
                            <div class="card-body p-0 position-absolute top-0 start-0 w-100 h-100">
                                <div class="card-custom-1">
                                    <span class="text-primary d-block mb-2 position-relative z-index-1">02</span>
                                    <h3 class="font-weight-800 text-primary position-relative z-index-1 mb-0 w-75"><a href="mobile-platforms.html" class="text-white">Mobile Application Development</a></h3>
                                    <span class="card-hover-icon">
                                        <img src="{{ asset('assets/images/icons/40.png') }}" alt="..." class="w-50px">
                                    </span>
                                </div>
                                <div class="card-data align-items-end d-flex">
                                    <div class="card-custom-2">
                                        <p class="card-text">We focus on the best practices for it solutions and services.</p>
                                        <a href="mobile-platforms.html" class="btn btn-link-1 px-0">Explore services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 mt-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="card card-style-13 border-0 rounded">
                            <img class="w-100" src="{{ asset('assets/images/service/service-09.jpg') }}" alt="...">
                            <div class="opacity-light bg-extra-dark-gray"></div>
                            <div class="card-overlay"></div>
                            <div class="card-body p-0 position-absolute top-0 start-0 w-100 h-100">
                                <div class="card-custom-1">
                                    <span class="text-primary d-block mb-2 position-relative z-index-1">03</span>
                                    <h3 class="font-weight-800 text-primary position-relative z-index-1 mb-0 w-75"><a href="data-synchronization.html" class="text-white">IoT Development</a></h3>
                                    <span class="card-hover-icon">
                                        <img src="{{ asset('assets/images/icons/39.png') }}" alt="..." class="w-50px">
                                    </span>
                                </div>
                                <div class="card-data align-items-end d-flex">
                                    <div class="card-custom-2">
                                        <p class="card-text">We focus on the best practices for it solutions and services.</p>
                                        <a href="data-synchronization.html" class="btn btn-link-1 px-0">Explore services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 mt-4 wow fadeInUp" data-wow-delay="400ms">
                        <div class="card card-style-13 border-0 rounded">
                            <img class="w-100" src="{{ asset('assets/images/service/service-10.jpg') }}" alt="...">
                            <div class="opacity-light bg-extra-dark-gray"></div>
                            <div class="card-overlay"></div>
                            <div class="card-body p-0 position-absolute top-0 start-0 w-100 h-100">
                                <div class="card-custom-1">
                                    <span class="text-primary d-block mb-2 position-relative z-index-1">04</span>
                                    <h3 class="font-weight-800 text-primary position-relative z-index-1 mb-0 w-75"><a href="process-automation.html" class="text-white">Cloud Tranformation</a></h3>
                                    <span class="card-hover-icon">
                                        <img src="{{ asset('assets/images/icons/38.png') }}" alt="..." class="w-50px">
                                    </span>
                                </div>
                                <div class="card-data align-items-end d-flex">
                                    <div class="card-custom-2">
                                        <p class="card-text">We focus on the best practices for it solutions and services.</p>
                                        <a href="process-automation.html" class="btn btn-link-1 px-0">Explore services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TESTIMONIALS
        ================================================== -->
        <section class="pt-0">
            <div class="container">
                <div class="row align-items-center justify-content-center mt-n1-9">
                    <div class="col-lg-4 mt-1-9">
                        <div class="wow fadeInUp" data-wow-delay="100ms">
                            <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Loved by Our Customers.</span>
                            <h2 class="h1 mb-0">What our clients are saying about our services</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-7 offset-xl-1 mt-1-9">
                        <div class="testimonial-carousel-one owl-carousel owl-theme">
                            <div class="d-sm-flex align-items-center">
                                <div class="flex-shrink-0 mb-4 mb-sm-0 me-sm-5">
                                    <img src="{{ asset('assets/images/avatars/avatar-08.jpg') }}" alt="..." class="rounded-circle">
                                </div>
                                <div class="flex-grow-1">
                                    <p class="w-lg-85 mb-1-9">Man, this thing is getting better and better as I learn more about it. We were treated like royalty. IT solution should be nominated for service of the year.</p>
                                    <h4 class="text-extra-dark-gray alt-font text-uppercase mb-0 h6">Tyson Perivolaris</h4>
                                    <span class="text-uppercase display-31">Intranet Developer</span>
                                </div>
                            </div>
                            <div class="d-sm-flex align-items-center">
                                <div class="flex-shrink-0 mb-4 mb-sm-0 me-sm-5">
                                    <img src="{{ asset('assets/images/avatars/avatar-09.jpg') }}" alt="..." class="rounded-circle">
                                </div>
                                <div class="flex-grow-1">
                                    <p class="w-lg-85 mb-1-9">IT solution is the most valuable business resource we have EVER purchased. I am completely blown away. I love your system. It's exactly what I've been looking for.</p>
                                    <h4 class="text-extra-dark-gray alt-font text-uppercase mb-0 h6">Gemma Krischock</h4>
                                    <span class="text-uppercase display-31">Web Designer</span>
                                </div>
                            </div>
                            <div class="d-sm-flex align-items-center">
                                <div class="flex-shrink-0 mb-4 mb-sm-0 me-sm-5">
                                    <img src="{{ asset('assets/images/avatars/avatar-10.jpg') }}" alt="..." class="rounded-circle">
                                </div>
                                <div class="flex-grow-1">
                                    <p class="w-lg-85 mb-1-9">It's the perfect solution for our business. Just what I was looking for. We were treated like royalty. Absolutely wonderful!</p>
                                    <h4 class="text-extra-dark-gray alt-font text-uppercase mb-0 h6">Daniel Hester</h4>
                                    <span class="text-uppercase display-31">Web Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- EXTRA SECTION
        ================================================== -->
        <section class="bg-img cover-background bg-gradient-dark-primary py-8 extra-style01" data-background="{{ asset('assets/images/bg/bg-10.jpg') }}">
            <div class="container">
                <div class="row align-items-center justify-content-center text-start position-relative mt-n1-9">
                    <div class="col-lg-6 col-xl-5 mt-1-9">
                        <div>
                            <div class="display-5 font-weight-800 mb-2 ls-minus-1px text-shadow lh-1 text-white font-weight-800">Let's discuss your now <div class="cd-headline clip font-weight-500 display-22 display-sm-18 display-md-16 display-lg-5 mb-0 font-weight-800 ls-minus-1px text-shadow text-primary d-inline-block">
                                    <span class="cd-words-wrapper p-0">
                                        <b class="is-visible">project!</b>
                                        <b>idea!</b>
                                        <b>solutions!</b>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 mt-1-9">
                        <div class="right-content d-flex align-items-center">
                            <div class="flex-shrink-0 right-icon">
                                <img src="{{ asset('assets/images/icons/27.png') }}" alt="..." class="w-50px">
                            </div>
                            <div class="flex-grow-1 right-text">
                                <span class="display-26 display-sm-24 lh-1 text-white">Looking for any enquiry? <a href="#!" class="font-weight-500 text-white text-primary-hover text-decoration-underline">info@ileaf.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- OUR TEAM
        ================================================== -->
        <section class="border-color-light-black border-top pt-5">
            <div class="container pt-5">
                <!-- <div class="mb-5 text-center wow fadeInUp" data-wow-delay="200ms">
                    <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Our Team.</span>
                    <h2 class="h1 mb-0">Our professional team</h2>
                </div> -->

                <div class="section-title mb-1-9 mb-md-6 text-center wow fadeIn" data-wow-delay="200ms">
                    <span class="sm-title">Our Team.</span>
                    <h2 class="h1 mb-0">Our professional team</h2>
                </div>

                <div class="row mt-n1-9">
                    <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeInUp" data-wow-delay="100ms">
                        <div class="card card-style-12 border-0">
                            <div class="card-body p-0">
                                <a href="team-details.html"><img src="{{ asset('assets/images/team/team-09.jpg') }}" alt="..."></a>
                                <div class="card-social-icons">
                                    <i class="fas fa-share-alt card-share"></i>
                                    <ul class="card-social-links list-unstyled">
                                        <li><a href="#" target="_blank" class="fab fa-twitter"></a></li>
                                        <li><a href="#" target="_blank" class="fab fa-facebook-f"></a></li>
                                        <li><a href="#" target="_blank" class="fab fa-linkedin-in"></a></li>
                                        <li><a href="#" target="_blank" class="fab fa-instagram"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <h3 class="card-title mb-0"><a href="team-details.html">Hamish French</a></h3>
                                <span class="display-30 font-weight-500 lh-base d-block">Computer Scientist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeInUp" data-wow-delay="200ms">
                        <div class="card card-style-12 border-0">
                            <div class="card-body p-0">
                                <a href="team-details.html"><img src="{{ asset('assets/images/team/team-10.jpg') }}" alt="..."></a>
                                <div class="card-social-icons">
                                    <i class="fas fa-share-alt card-share"></i>
                                    <ul class="card-social-links list-unstyled">
                                        <li><a href="#" target="_blank" class="fab fa-twitter"></a></li>
                                        <li><a href="#" target="_blank" class="fab fa-facebook-f"></a></li>
                                        <li><a href="#" target="_blank" class="fab fa-linkedin-in"></a></li>
                                        <li><a href="#" target="_blank" class="fab fa-instagram"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <h3 class="card-title mb-0"><a href="team-details.html">Zara Matheson</a></h3>
                                <span class="display-30 font-weight-500 lh-base d-block">CEO</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeInUp" data-wow-delay="300ms">
                        <div class="card card-style-12 border-0">
                            <div class="card-body p-0">
                                <a href="team-details.html"><img src="{{ asset('assets/images/team/team-11.jpg') }}" alt="..."></a>
                                <div class="card-social-icons">
                                    <i class="fas fa-share-alt card-share"></i>
                                    <ul class="card-social-links list-unstyled">
                                        <li><a href="#" target="_blank" class="fab fa-twitter"></a></li>
                                        <li><a href="#" target="_blank" class="fab fa-facebook-f"></a></li>
                                        <li><a href="#" target="_blank" class="fab fa-linkedin-in"></a></li>
                                        <li><a href="#" target="_blank" class="fab fa-instagram"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <h3 class="card-title mb-0"><a href="team-details.html">Dylan Bonney</a></h3>
                                <span class="display-30 font-weight-500 lh-base d-block">Process Analyst</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeInUp" data-wow-delay="400ms">
                        <div class="card card-style-12 border-0">
                            <div class="card-body p-0">
                                <a href="team-details.html"><img src="{{ asset('assets/images/team/team-12.jpg') }}" alt="..."></a>
                                <div class="card-social-icons">
                                    <i class="fas fa-share-alt card-share"></i>
                                    <ul class="card-social-links list-unstyled">
                                        <li><a href="#" target="_blank" class="fab fa-twitter"></a></li>
                                        <li><a href="#" target="_blank" class="fab fa-facebook-f"></a></li>
                                        <li><a href="#" target="_blank" class="fab fa-linkedin-in"></a></li>
                                        <li><a href="#" target="_blank" class="fab fa-instagram"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <h3 class="card-title mb-0"><a href="team-details.html">Skye Finney</a></h3>
                                <span class="display-30 font-weight-500 lh-base d-block">Web Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- EXTRA SECTION
        ================================================== -->
        <!-- <section class="bg-img cover-background pt-24 pb-0 extra-style03 dark-overlay" data-overlay-dark="3" data-background="{{ asset('assets/images/bg/bg-14.jpg') }}">
            <div class="container">
                <div class="extra-content-box">
                    <ul class="inner-box">
                        <li class="one">
                            <h4 class="countup">426</h4>
                            <h5 class="mb-0">Succeeded Projects &amp; More</h5>
                        </li>
                        <li class="two">
                            <div class="pe-4">
                                <i class="fa-solid fa-phone-volume text-white display-22"></i>
                            </div>
                            <div>
                                <small class="text-white display-28">Toll Free call</small>
                                <h5 class="mb-0 text-white">(+44) 123 456 789</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section> -->

        <!-- PRICING PLAN
        ================================================== -->
        <!-- <section>
            <div class="container">
                <div class="row align-items-center mt-n2-9">
                    <div class="col-lg-4 mt-2-9 wow fadeInUp" data-wow-delay="100ms">
                        <div class="mb-1-6 wow fadeInUp" data-wow-delay="100ms">
                            <span class="text-primary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-700">Our Pricing.</span>
                            <h2 class="h1 mb-0">Our flexible pricing</h2>
                        </div>
                        <p class="mb-0 w-90">We are experienced in providing innovative creative services to our clients worldwide.</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-2-9 wow fadeInUp" data-wow-delay="100ms">
                        <div class="card card-style10 py-2-9 primary-shadow position-relative">
                            <div class="position-relative overflow-hidden text-center">
                                <div class="position-relative mb-3">
                                    <span class="price-title text-secondary text-uppercase">Basic</span>
                                </div>
                                <div class="text-center">
                                    <h4 class="card-title display-7 font-weight-800 mb-0">$59</h4>
                                    <span class="mb-0 display-31 text-uppercase">Per Month</span>
                                </div>
                            </div>
                            <div class="p-1-9 p-sm-2-3 pb-0">                                         
                                <ul class="list-unstyled mb-2-2 display-28 text-center">
                                    <li class="border-bottom pb-3">30 Analytics Campaign</li>
                                    <li class="border-bottom pb-3 pt-3">Branded Reports</li>
                                    <li class="border-bottom pb-3 pt-3">700 Keywords</li>
                                    <li class="pt-3">100 Social Account</li>
                                </ul>                                         
                                <div class="text-center">
                                    <a href="contact.html" class="butn-style2 w-100"> Get Started </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-2-9 wow fadeInUp" data-wow-delay="200ms">
                        <div class="card card-style10 py-2-9 primary-shadow position-relative ">
                            <div class="card-style">
                                <p class="card-text">Popular</p>
                            </div>
                            <div class="position-relative overflow-hidden text-center">
                                <div class="position-relative mb-3">
                                    <span class="price-title text-secondary text-uppercase">Standard</span>
                                </div>
                                <div class="text-center">
                                    <h4 class="card-title display-7 font-weight-800 mb-0">$99</h4>
                                    <span class="mb-0 display-31 text-uppercase">Per Month</span>
                                </div>
                            </div>
                            <div class="p-1-9 p-sm-2-3 pb-0">                                         
                                <ul class="list-unstyled mb-2-2 display-28 text-center">
                                    <li class="border-bottom pb-3">30 Analytics Campaign</li>
                                    <li class="border-bottom pb-3 pt-3">Branded Reports</li>
                                    <li class="border-bottom pb-3 pt-3">700 Keywords</li>
                                    <li class="pt-3">100 Social Account</li>
                                </ul>                                         
                                <div class="text-center">
                                    <a href="contact.html" class="butn-style2 w-100"> Get Started </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- PORTFOLIO
        ================================================== -->
        <section class="portfolio-style02 py-0">
            <div class="pt-6 pb-16 pt-sm-10 pb-sm-20 pb-xl-22 portfolio-bg bg-primary">
                <div class="container position-relative z-index-9">
                    <div class="row mt-n1-9">
                        <div class="col-sm-6 col-lg-3 mt-1-9 text-center wow fadeInUp" data-wow-delay="100ms">
                            <h3 class="h1 text-white"><span class="countup">15</span>k</h3>
                            <span class="text-white text-uppercase letter-spacing-2">Customers</span>
                        </div>
                        <div class="col-sm-6 col-lg-3 mt-1-9 text-center wow fadeInUp" data-wow-delay="200ms">
                            <h3 class="h1 text-white"><span class="countup">78</span>+</h3>
                            <span class="text-white text-uppercase letter-spacing-2">Branches</span>
                        </div>
                        <div class="col-sm-6 col-lg-3 mt-1-9 text-center wow fadeInUp" data-wow-delay="300ms">
                            <h3 class="h1 text-white"><span class="countup">3</span>k</h3>
                            <span class="text-white text-uppercase letter-spacing-2">Employees</span>
                        </div>
                        <div class="col-sm-6 col-lg-3 mt-1-9 text-center wow fadeInUp" data-wow-delay="400ms">
                            <h3 class="h1 text-white"><span class="countup">8</span>+</h3>
                            <span class="text-white text-uppercase letter-spacing-2">Countries</span>
                        </div>
                    </div>
                </div>
                <div class="position-absolute top-0 end-0">
                    <img src="{{ asset('assets/images/content/shape-07.png') }}" alt="...">
                </div>
            </div>
            <div class="mt-n10">
                <div class="container-fluid px-xxl-10">
                    <div class="row g-0 portfolio-gallery">
                        <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="200ms" data-src="{{ asset('assets/images/portfolio/01.jpg') }}" data-sub-html="<h4 class='text-white'>SEO & Content Writing</h4><p>XD Design</p>">
                            <div class="portfolio-box position-relative">
                                <img src="{{ asset('assets/images/portfolio/01.jpg') }}" alt="...">
                                <div class="position-absolute top-0 left-0 w-100">
                                    <div class="portfolio-inner">
                                        <div class="py-1-6 py-xxl-1-9 px-1-6 px-xxl-2-9 position-relative z-index-9">
                                            <span class="display-28"><a href="portfolio-details.html" class="text-white">XD Design</a></span>
                                            <h4 class="mb-0 mt-2 h5"><a href="portfolio-details.html" class="text-white portfolio-link">SEO & Content Writing</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="400ms" data-src="{{ asset('assets/images/portfolio/02.jpg') }}" data-sub-html="<h4 class='text-white'>Business Analytics</h4><p>Business</p>">
                            <div class="portfolio-box position-relative">
                                <img src="{{ asset('assets/images/portfolio/02.jpg') }}" alt="...">
                                <div class="position-absolute top-0 left-0 w-100">
                                    <div class="portfolio-inner">
                                        <div class="py-1-6 py-xxl-1-9 px-1-6 px-xxl-2-9 position-relative z-index-9">
                                            <span class="display-28"><a href="portfolio-details.html" class="text-white">Business</a></span>
                                            <h4 class="mb-0 mt-2 h5"><a href="portfolio-details.html" class="text-white portfolio-link">Business Analytics</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="600ms" data-src="{{ asset('assets/images/portfolio/03.jpg') }}" data-sub-html="<h4 class='text-white'>Web Development</h4><p>Figma Design</p>">
                            <div class="portfolio-box position-relative">
                                <img src="{{ asset('assets/images/portfolio/03.jpg') }}" alt="...">
                                <div class="position-absolute top-0 left-0 w-100">
                                    <div class="portfolio-inner">
                                        <div class="py-1-6 py-xxl-1-9 px-1-6 px-xxl-2-9 position-relative z-index-9">
                                            <span class="display-28"><a href="portfolio-details.html" class="text-white">Figma Design</a></span>
                                            <h4 class="mb-0 mt-2 h5"><a href="portfolio-details.html" class="text-white portfolio-link">Web Development</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="800ms" data-src="{{ asset('assets/images/portfolio/04.jpg') }}" data-sub-html="<h4 class='text-white'>Market Research</h4><p>Business Consulting</p>">
                            <div class="portfolio-box position-relative">
                                <img src="{{ asset('assets/images/portfolio/04.jpg') }}" alt="...">
                                <div class="position-absolute top-0 left-0 w-100">
                                    <div class="portfolio-inner">
                                        <div class="py-1-6 py-xxl-1-9 px-1-6 px-xxl-2-9 position-relative z-index-9">
                                            <span class="display-28"><a href="portfolio-details.html" class="text-white">Business Consulting</a></span>
                                            <h4 class="mb-0 mt-2 h5"><a href="portfolio-details.html" class="text-white portfolio-link">Market Research</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="border-color-light-black border-top pt-5">
            <div class="container">
                <div class="section-title mb-1-9 mb-md-6 text-center wow fadeIn" data-wow-delay="200ms">
                    <span class="sm-title">Our Clientele</span>
                    <!-- <h2 class="mb-0 h1">Read Our Latest Insights</h2> -->
                </div>
                <div class="row align-items-center" style="margin-bottom: 30px;">
                    <div class="col-md-12">
                        <div class="clients04-carousel owl-carousel owl-theme text-center">
                            <div>
                                <div class="clients position-relative">
                                    <div class="client-img">
                                        <img src="{{ asset('assets/images/clients/06.png') }}" alt="...">
                                    </div>
                                    <div class="client-hover-img text-center">
                                        <img src="{{ asset('assets/images/clients/10.png') }}" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="clients position-relative">
                                    <div class="client-img">
                                        <img src="{{ asset('assets/images/clients/07.png') }}" alt="...">
                                    </div>
                                    <div class="client-hover-img">
                                        <img src="{{ asset('assets/images/clients/11.png') }}" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="clients position-relative">
                                    <div class="client-img">
                                        <img src="{{ asset('assets/images/clients/08.png') }}" alt="...">
                                    </div>
                                    <div class="client-hover-img">
                                        <img src="{{ asset('assets/images/clients/12.png') }}" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="clients position-relative">
                                    <div class="client-img">
                                        <img src="{{ asset('assets/images/clients/09.png') }}" alt="...">
                                    </div>
                                    <div class="client-hover-img">
                                        <img src="{{ asset('assets/images/clients/13.png') }}" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- BLOG
        ================================================== -->
        <section class="bg-light pt-5 pt-sm-14 pt-lg-18 pt-xl-20">
            <div class="container">
                <div class="section-title mb-1-9 mb-md-6 text-center wow fadeIn" data-wow-delay="200ms">
                    <span class="sm-title">Our Blog</span>
                    <h2 class="mb-0 h1">Read Our Latest Insights</h2>
                </div>
                <div class="row g-xl-5 mt-n2-2 position-relative z-index-9">
                    <div class="col-md-6 col-lg-4 mt-2-2 wow fadeInUp" data-wow-delay="300ms">
                        <article class="card card-style-04 h-100 rounded-0">
                            <div class="blog-img position-relative overflow-hidden">
                                <img src="{{ asset('assets/images/blog/blog-01.jpg') }}" alt="...">
                                <div class="card-list">
                                    <a href="#!">Solutions</a>
                                </div>
                            </div>
                            <div class="card-body p-1-6 p-sm-1-9">
                                <span class="text-primary d-block mb-2 font-weight-600">June 01, 2022</span>
                                <h3 class="h4 mb-0"><a href="blog-details.html">10 reliable sources to learn about IT solution.</a></h3>
                            </div>
                            <div class="d-flex fw-bold border-top px-1-6 px-sm-1-9 py-3 border-color-light-black justify-content-between">
                                <a href="blog-details.html">Read more</a>
                                <a href="blog-details.html"><i class="ti-arrow-right"></i></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-2-2 wow fadeInUp" data-wow-delay="450ms">
                        <article class="card card-style-04 h-100 rounded-0">
                            <div class="blog-img position-relative overflow-hidden">
                                <img src="{{ asset('assets/images/blog/blog-02.jpg') }}" alt="...">
                                <div class="card-list">
                                    <a href="#!">Marketing</a>
                                </div>
                            </div>
                            <div class="card-body p-1-6 p-sm-1-9">
                                <span class="text-primary d-block mb-2 font-weight-600">May 29, 2022</span>
                                <h3 class="h4 mb-0"><a href="blog-details.html">How digital marketing can increase your profit!</a></h3>
                            </div>
                            <div class="d-flex fw-bold border-top px-1-6 px-sm-1-9 py-3 border-color-light-black justify-content-between">
                                <a href="blog-details.html">Read more</a>
                                <a href="blog-details.html"><i class="ti-arrow-right"></i></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-2-2 wow fadeInUp" data-wow-delay="600ms">
                        <article class="card card-style-04 h-100 rounded-0">
                            <div class="blog-img position-relative overflow-hidden">
                                <img src="{{ asset('assets/images/blog/blog-03.jpg') }}" alt="...">
                                <div class="card-list">
                                    <a href="#!">Development</a>
                                </div>
                            </div>
                            <div class="card-body p-1-6 p-sm-1-9">
                                <span class="text-primary d-block mb-2 font-weight-600">May 25, 2022</span>
                                <h3 class="h4 mb-0"><a href="blog-details.html">Simple guidance for you in web development.</a></h3>
                            </div>
                            <div class="d-flex fw-bold border-top px-1-6 px-sm-1-9 py-3 border-color-light-black justify-content-between">
                                <a href="blog-details.html">Read more</a>
                                <a href="blog-details.html"><i class="ti-arrow-right"></i></a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="position-absolute bottom-0 right-n5 ani-left-right d-none d-lg-block">
                <img src="{{ asset ('assets/images/content/shape-10.png') }}" alt="...">
            </div>
        </section>


        <!-- ANIMATION LINE
        ================================================== -->
        <section class="bg-img cover-background scrolling-main primary-overlay" data-overlay-dark="9" data-background="{{ asset('assets/images/bg/bg-11.jpg') }}">
            <div class="position-relative z-index-2">
                <div class="scrolling-text scrolling-left-text">
                    <div class="scrolling-marquee">
                        <h4 class="ms-2 circle-marquee">Web Application Development </h4>
                        <h4 class="ms-2 circle-marquee"> Mobile Application Development </h4>
                        <h4 class="ms-2 circle-marquee"> IoT Development </h4>
                        <h4 class="ms-2 circle-marquee"> Cloud Tranformation </h4>
                        <h4 class="ms-2 circle-marquee"> Collaborative Environment </h4>
                        <h4 class="ms-2 circle-marquee"> Flexible Pricing </h4>
                    </div>
                </div>
            </div>
        </section>

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