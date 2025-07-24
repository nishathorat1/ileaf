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
                            <h1>About Us</h1>
                        </div>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#!">About Us</a></li>
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

        <!-- ABOUT
        ================================================== -->
        <section class="overflow-visible">
            <div class="container position-relative z-index-3">
                <div class="row align-items-center about-style-03">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="200ms">
                        <div class="pe-lg-1-9">
                            <div class="section-title mb-1-9">
                                <span class="sm-title">About Us</span>
                                <h2 class="mb-0 h1">We’re Delivering The Best Customer Experience</h2>
                            </div>
                            <div class="mb-1-9">
                                <div class="d-flex about-text mb-1-9">
                                    <div class="flex-shrink-0">
                                        <i class="fa-brands fa-gitter"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="h5">Our Mission</h4>
                                        <p class="mb-0">Our Mission is to be the industry's top-ratede provider issuer enterprise targeting satisfying the most to our clients.</p>
                                    </div>
                                </div>
                                <div class="d-flex about-text">
                                    <div class="flex-shrink-0">
                                        <i class="fa-brands fa-unity"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="h5">Our Vision</h4>
                                        <p class="mb-0">Our Vision is to be a top Web Design company in the IT sector and progress in our current position in the market.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="400ms">
                        <div class="ps-lg-2-9 position-relative text-center text-sm-start">
                            <img src="{{ asset('assets/images/content/about7.jpg') }}" alt="...">
                            <div class="about-img d-none d-sm-block">
                                <img src="{{ asset('assets/images/content/about6.jpg') }}" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <img src="{{ asset('assets/images/bg/bg-06.png') }}" class="position-absolute left bottom-5 opacity4" alt="..."> -->
        </section>

        <!-- WHY CHOOSE US
        ================================================== -->
        <section class="pt-1-6 pt-md-9">
            <div class="position-relative">
                <div class="background-no-repeat position-absolute h-100 w-100 bg-img d-none d-lg-block wow fadeIn" data-wow-delay="200ms" data-background="{{ asset('assets/images/content/why-choose-01.jpg') }}">
                </div>
                <div class="row g-0 justify-content-end">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="400ms">
                        <div class="bg-secondary pt-8 pt-lg-14 pt-xxl-18 pb-8 pb-xxl-13 px-2-2 px-xxl-11 position-relative z-index-9 why-chooseus">
                            <div class="me-xxl-15">
                                <div class="section-title left mb-4 white">
                                    <span class="sm-title">Why choose us</span>
                                    <h2 class="h1 mb-0 text-white">We are building a sustainable future</h2>
                                </div>
                                <p class="text-white mb-2-3 opacity9">Tremendous involvement with power departure, land master curement, liaisoning and working with state. An ideal mix of worldwide experience and skill to additional our attention on innovation.</p>
                                <div class="row position-relative mt-n4 z-index-3">
                                    <div class="col-xl-4 col-6 mt-4">
                                        <div class="why-choose-icon">
                                            <img src="{{ asset('assets/images/icons/icon-web-development.png') }}" class="mb-3" alt="...">
                                            <h5 class="mb-0 display-28 text-white">Web Development</h5>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-6 mt-4">
                                        <div class="why-choose-icon">
                                            <img src="{{ asset('assets/images/icons/icon-branding.png') }}" class="mb-3" alt="...">
                                            <h5 class="mb-0 display-28 text-white">Branding Services</h5>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-6 mt-4">
                                        <div class="why-choose-icon">
                                            <img src="{{ asset('assets/images/icons/icon-digital-marketing.png') }}" class="mb-3" alt="...">
                                            <h5 class="mb-0 display-28 text-white">Digital Marketing</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-absolute bottom-0 right z-index-1">
                                    <img src="{{ asset('assets/images/bg/bg-07.png') }}" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PROCESS
        ================================================== -->
        <section class="pt-0">
            <div class="container">
                <div class="section-title mb-1-9 mb-md-6 text-center wow fadeIn" data-wow-delay="200ms">
                    <span class="sm-title">Work Process</span>
                    <h2 class="mb-0 h1">Our Working Process</h2>
                </div>
                <div class="main-process text-center">
                    <div class="line-shape wow fadeIn" data-wow-delay="400ms">
                        <img src="{{ asset('assets/images/content/process-line.png') }}" alt="...">
                    </div>
                    <div class="row mt-n6 justify-content-center g-5">
                        <div class="process-style-01 col-lg-2 col-md-3 mt-6 wow fadeInUp" data-wow-delay="600ms">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/content/idea.png') }}" alt="...">
                                     <!-- <i class="fa-solid fa-lightbulb"></i> -->
                                    <span>01</span>
                                </div>
                                <h5>Idea</h5>
                                <p class="w-lg-80 mx-auto mb-0">We provide no obligation free consultation to discuss your project idea and help you with tech stack, budget and timelines.</p>
                            </div>
                        </div>

                        <div class="process-style-01 col-lg-2 col-md-3 mt-6 wow fadeInUp" data-wow-delay="800ms">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/content/web-design.png') }}" alt="...">
                                    <span>02</span>
                                </div>
                                <h5>UI/UX design</h5>
                                <p class="w-lg-80 mx-auto mb-0">Our clients work with our product design team to bring project concept to live. We provide prototype so you can experience the app flow.</p>
                            </div>
                        </div>

                         <div class="process-style-01 col-lg-2 col-md-3 mt-6 wow fadeInUp" data-wow-delay="600ms">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/content/web-development.png') }}" alt="...">
                                    <span>03</span>
                                </div>
                                <h5>Development</h5>
                                <p class="w-lg-80 mx-auto mb-0">Development team starts the coding. The process is divided into sprints. Our agile model allow you to assess what we’re building and provide you with weekly updates.</p>
                            </div>
                        </div>

                         <div class="process-style-01 col-lg-2 col-md-3 mt-6 wow fadeInUp" data-wow-delay="600ms">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/content/testing.png') }}" alt="...">
                                    <span>04</span>
                                </div>
                                <h5>Testing</h5>
                                <p class="w-lg-80 mx-auto mb-0">We test all use cases, critical scenarios, and all functional on real time device for IOS and Android along with Desktop</p>
                            </div>
                        </div>

                        <div class="process-style-01 col-lg-2 col-md-3 mt-6 wow fadeInUp" data-wow-delay="1000ms">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/content/launching.png') }}" alt="...">
                                    <span>05</span>
                                </div>
                                <h5>Launching</h5>
                                <p class="w-lg-80 mx-auto mb-0">Passing through a final round of QA and client approval. We manage the submission in the app and play store. Additionally we help with tech support for 30 days after going live.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TESTIMONIAL
        ================================================== -->
        <section class="bg-dark pb-19">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-9">
                        <div class="section-title text-center mb-1-9 mb-md-2-3 wow fadeIn" data-wow-delay="200ms">
                            <span class="sm-title">Testimonials</span>
                            <h2 class="mb-0 h1 text-white">What Our Clients Say</h2>
                        </div>
                        <div class="position-relative">
                            <div class="testimonial-carousel1 owl-carousel owl-theme wow fadeIn" data-wow-delay="400ms">
                                <div class="position-relative mt-4">
                                    <img src="{{ asset('assets/images/avatars/avatar-01.jpg') }}" class="rounded-circle mb-3" alt="...">
                                    <p class="mb-1-9 display-25 display-lg-23 text-white">Man, this thing is getting better and better as I learn more about it. We were treated like royalty. IT solution should be nominated for service of the year. I made back the purchase price in just 48 hours!</p>
                                    <h4 class="h5 mb-0 text-primary">Tyson Perivolaris</h4>
                                    <p class="mb-0 text-white">Intranet Developer</p>
                                </div>
                                <div class="position-relative mt-4">
                                    <img src="{{ asset('assets/images/avatars/avatar-02.jpg') }}" class="rounded-circle mb-3" alt="...">
                                    <p class="mb-1-9 display-25 display-lg-23 text-white">IT solution is the most valuable business resource we have EVER purchased. I am completely blown away. I love your system. It's exactly what I've been looking for. I love business. It really saves me time and effort.</p>
                                    <h4 class="h5 mb-0 text-primary">Gemma Krischock</h4>
                                    <p class="mb-0 text-white">Web Designer</p>
                                </div>
                                <div class="position-relative mt-4">
                                    <img src="{{ asset('assets/images/avatars/avatar-03.jpg') }}" class="rounded-circle mb-3" alt="...">
                                    <p class="mb-1-9 display-25 display-lg-23 text-white">It's the perfect solution for our business. Just what I was looking for. We were treated like royalty. Absolutely wonderful! It really saves me time and effort. business is exactly what our business has been lacking.</p>
                                    <h4 class="h5 mb-0 text-primary">Daniel Hester</h4>
                                    <p class="mb-0 text-white">Web Developer</p>
                                </div>
                            </div>
                            <h6 class="testimonial-quote">“</h6>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('assets/images/content/04.png') }}" class="position-absolute top-n10 right" alt="...">
            <img src="{{ asset('assets/images/content/06.png') }}" class="position-absolute bottom-0 left" alt="...">
        </section>

        <!-- COUNTER
        ================================================== -->
        <section class="pt-0 overflow-visible bg-transparent">
            <div class="container">
                <div class="bg-white mt-n7 p-6 primary-shadow z-index-9 position-relative">
                    <div class="row text-center mt-n1-9">
                        <div class="col-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="200ms">
                            <div class="counter-style2">
                                <h3 class="display-14 display-sm-12 display-lg-10 text-primary"><span class="countup">15</span>k</h3>
                                <span class="fw-bold text-uppercase">Customers</span>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="400ms">
                            <div class="counter-style2">
                                <h3 class="display-14 display-sm-12 display-lg-10 text-primary"><span class="countup">78</span>+</h3>
                                <span class="fw-bold text-uppercase">Branches</span>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="600ms">
                            <div class="counter-style2">
                                <h3 class="display-14 display-sm-12 display-lg-10 text-primary"><span class="countup">3</span>k</h3>
                                <span class="fw-bold text-uppercase">Employees</span>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="800ms">
                            <div>
                                <h3 class="display-14 display-sm-12 display-lg-10 text-primary"><span class="countup">8</span>+</h3>
                                <span class="fw-bold text-uppercase">Countries</span>
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