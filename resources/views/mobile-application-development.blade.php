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
                            <h1>Mobile Application Development</h1>
                        </div>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/mobile-application-development') }}">Mobile Application Development</a></li>
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

        <!-- MOBILE PLATFORM
        ================================================== -->
        <section>
            <div class="container">
                <div class="row">
                    <!-- <div class="col-xl-4 order-2 order-xl-1">
                        <div class="sidebar me-xxl-1-9">
                            <div class="widget bg-secondary mb-1-9 wow fadeIn" data-wow-delay="200ms">
                                <div class="widget-content">
                                    <h5 class="mb-4 text-white">Main Services</h5>
                                    <ul class="category-list list-unstyled mb-0">
                                        <li><a href="information-security.html"><span>Information Security</span></a></li>
                                        <li class="active"><a href="mobile-platforms.html"><span>Mobile Platforms</span></a></li>
                                        <li><a href="data-synchronization.html"><span>Data Synchronization</span></a></li>
                                        <li><a href="process-automation.html"><span>Process Automation</span></a></li>
                                        <li><a href="event-processing.html"><span>Event Processing</span></a></li>
                                        <li><a href="content-management.html"><span>Content Management</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget bg-secondary mb-1-9 wow fadeIn" data-wow-delay="400ms">
                                <div class="widget-content">
                                    <h5 class="mb-4 text-white">Brochures</h5>
                                    <p class="text-white mb-1-9">Cras enim urna, interdum nec por ttitor vitae, sollicitudin eu erosen. Praesent eget mollis nulla sollicitudin.</p>
                                    <div class="btn-wrapper">
                                        <a class="dow-btn" href="#!">Download</a>
                                        <a class="butn-or d-none d-sm-block" href="#!">Or</a>
                                        <a class="disc-btn" href="#!">Discover</a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget bg-secondary wow fadeIn" data-wow-delay="600ms">
                                <div class="widget-content">
                                    <h5 class="mb-4 text-white">Follow Us</h5>
                                    <ul class="social-icon-style2 list-unstyled ps-0">
                                        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-xl-12 mb-2-9 mb-xl-0 order-1 order-xl-2">
                        <div>
                            <div class="row mb-1-9">
                                <div class="col-6 wow fadeIn" data-wow-delay="200ms">
                                    <img src="{{ asset('assets/images/service/service-details-6.jpg') }}" alt="...">
                                </div>
                                <div class="col-6 wow fadeIn" data-wow-delay="400ms">
                                    <img src="{{ asset('assets/images/service/service-details-7.jpg') }}" alt="...">
                                </div>
                            </div>
                            <!-- <div class="wow fadeIn" data-wow-delay="200ms">
                                <h2 class="mb-3 h3">Mobile Platforms</h2>
                                <p class="mb-lg-1-9">Mobile platforms is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div> -->
                            <div class="wow fadeIn" data-wow-delay="200ms">
                                <h2 class="mb-3 h3">Cutting-Edge Mobile App Development Services with ileaf</h2>
                                <p class="mb-lg-1-9">Welcome to ileaf! We are a trailblazing mobile app development company. With our team experts in trending native and hybrid mobile app development technologies, we have help over hundred companies in transforming their businesses. We worked with startups to transform their magnificant startup idea into a market ready product, assidting mid size businesses in maintaninng and scaling up their businesses in this time of high competition. we can help you too in builing your own mobile app . Click the button below to get in touch with us.</p>
                                <p class="mb-lg-1-9">Mobile platforms is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                            <div class="row mb-1-9">
                                <div class="col-md-6 wow fadeIn" data-wow-delay="200ms">
                                    <div class="d-flex align-items-center">
                                        <i class="ti-check display-26 text-primary"></i>
                                        <span class="ms-3 text-dark fw-bold">Marketing options and rates</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-4">
                                        <i class="ti-check display-26 text-primary"></i>
                                        <span class="ms-3 text-dark fw-bold">The ability to turnaround consulting</span>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeIn" data-wow-delay="400ms">
                                    <div class="d-flex align-items-center mt-4 mt-md-0">
                                        <i class="ti-check display-26 text-primary"></i>
                                        <span class="ms-3 text-dark fw-bold">Research beyond the business plan</span>
                                    </div>
                                    <div class="d-flex align-items-center mt-4">
                                        <i class="ti-check display-26 text-primary"></i>
                                        <span class="ms-3 text-dark fw-bold">Customer engagement matters</span>
                                    </div>
                                </div>
                            </div>

                            <p class="mb-1-9 wow fadeIn" data-wow-delay="200ms">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>


                            <!-- <h3 class="mb-3 h4 wow fadeIn" data-wow-delay="200ms">Our Team</h3>
                            <div class="row mt-n1-9 mb-1-9">
                                <div class="col-sm-6 col-lg-4 mt-1-9 wow fadeInUp" data-wow-delay="200ms">
                                    <div class="team-style01">
                                        <div class="image">
                                            <div>
                                                <img src="{{ asset('assets/images/team/team-01.jpg') }}" alt="...">
                                                <ul class="mb-0 social ps-0">
                                                    <li>
                                                        <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#!"><i class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#!"><i class="fab fa-linkedin-in"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <h3 class="h5 mb-0">Hamish French</h3>
                                            <p class="mb-0 small">Computer Scientist</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 mt-1-9 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="team-style01">
                                        <div class="image">
                                            <div>
                                                <img src="{{ asset('assets/images/team/team-02.jpg') }}" alt="...">
                                                <ul class="mb-0 social ps-0">
                                                    <li>
                                                        <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#!"><i class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#!"><i class="fab fa-linkedin-in"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <h3 class="h5 mb-0">Zara Matheson</h3>
                                            <p class="mb-0 small">CEO</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 mt-1-9 wow fadeInUp" data-wow-delay="400ms">
                                    <div class="team-style01">
                                        <div class="image">
                                            <div>
                                                <img src="{{ asset('assets/images/team/team-03.jpg') }}" alt="...">
                                                <ul class="mb-0 social ps-0">
                                                    <li>
                                                        <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#!"><i class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#!"><i class="fab fa-linkedin-in"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <h3 class="h5 mb-0">Dylan Bonney</h3>
                                            <p class="mb-0 small">Process Analyst</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-style1 wow fadeIn" data-wow-delay="200ms">
                                <div class="progress-text">
                                    <div class="row">
                                        <div class="col-6">Consulting</div>
                                        <div class="col-6 text-end">65%</div>
                                    </div>
                                </div>
                                <div class="custom-progress progress rounded mb-4">
                                    <div class="animated custom-bar progress-bar slideInLeft" style="width:70%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                                </div>
                                <div class="progress-text">
                                    <div class="row">
                                        <div class="col-6">Development</div>
                                        <div class="col-6 text-end">80%</div>
                                    </div>
                                </div>
                                <div class="custom-progress progress rounded mb-4">
                                    <div class="animated custom-bar progress-bar slideInLeft" style="width:90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar"></div>
                                </div>
                                <div class="progress-text">
                                    <div class="row">
                                        <div class="col-6">Management</div>
                                        <div class="col-6 text-end">55%</div>
                                    </div>
                                </div>
                                <div class="custom-progress progress rounded">
                                    <div class="animated custom-bar progress-bar slideInLeft" style="width:80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar"></div>
                                </div>
                            </div>   -->
                        </div>
                    </div>


                </div>
            </div>
        </section>


        <!-- Services Section Start -->
        <section class="pt-0">
            <div class="container">
                <div class="section-title mb-1-9 mb-md-6 text-center wow fadeIn" data-wow-delay="200ms">
                    <span class="sm-title">
                        <h2>Mobile App Development Services</h2>
                    </span>
                    <p class="mb-lg-1-9">We provide comprehensive mobile app development services, crafting user-friendly, innovative, and secure apps for iOS and Android platforms, tailored to your unique business needs.</p>
                </div>
                <div class="ty-service-content mb-0">
                    <div class="row">
                        <div class="col col-12 col-md-6 col-lg-4">
                            <div class="ty-service-card">
                                <a href="android-application-development.html" class="ty-service-card-link">
                                    <h3 class="ty-service-card-title">Android App <br />Development</h3>
                                    <div class="ty-service-card-logo-list">
                                        <div class="ty-service-card-logo-item">
                                            <svg width="37" height="36" viewBox="0 0 37 36" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M22.7319 4.52913L24.1777 1.93125C24.1962 1.89797 24.2079 1.86138 24.2122 1.82357C24.2165 1.78577 24.2133 1.7475 24.2027 1.71094C24.1922 1.67437 24.1745 1.64024 24.1507 1.61049C24.1269 1.58073 24.0974 1.55594 24.064 1.53752C24.0306 1.51911 23.9938 1.50743 23.9559 1.50315C23.9179 1.49887 23.8795 1.50209 23.8428 1.5126C23.8061 1.52312 23.7718 1.54073 23.7419 1.56444C23.7121 1.58814 23.6872 1.61748 23.6687 1.65077L22.2078 4.27565C20.9608 3.7311 19.6139 3.44995 18.2523 3.44995C16.8906 3.44995 15.5437 3.7311 14.2967 4.27565L12.8358 1.65077C12.7985 1.58314 12.7357 1.53306 12.6613 1.51154C12.5869 1.49002 12.5069 1.49883 12.439 1.53602C12.3711 1.57322 12.3208 1.63575 12.2992 1.70987C12.2776 1.78399 12.2864 1.86363 12.3238 1.93125L13.7696 4.52913C12.394 5.20484 11.2317 6.24476 10.4103 7.53486C9.5889 8.82496 9.14004 10.3154 9.11295 11.8428H27.3916C27.3642 10.3151 26.9149 8.82442 26.0929 7.53429C25.271 6.24416 24.1081 5.20442 22.7319 4.52913ZM14.0346 8.51145C13.8836 8.51145 13.7359 8.46681 13.6103 8.38318C13.4847 8.29956 13.3868 8.1807 13.3291 8.04166C13.2713 7.90261 13.2563 7.74963 13.2859 7.60207C13.3155 7.45452 13.3883 7.31902 13.4953 7.21273C13.6022 7.10643 13.7384 7.03412 13.8866 7.00495C14.0348 6.97578 14.1884 6.99105 14.3279 7.04884C14.4674 7.10663 14.5865 7.20433 14.6702 7.32959C14.754 7.45484 14.7985 7.60202 14.7982 7.75249C14.7978 7.95391 14.7172 8.14696 14.574 8.28925C14.4309 8.43154 14.2369 8.51145 14.0346 8.51145ZM22.4714 8.51145C22.3203 8.51145 22.1726 8.46681 22.047 8.38318C21.9214 8.29956 21.8236 8.1807 21.7658 8.04166C21.7081 7.90261 21.693 7.74963 21.7226 7.60207C21.7522 7.45452 21.8251 7.31902 21.932 7.21273C22.0389 7.10643 22.1751 7.03412 22.3233 7.00495C22.4716 6.97578 22.6251 6.99105 22.7646 7.04884C22.9041 7.10663 23.0233 7.20433 23.107 7.32959C23.1907 7.45484 23.2352 7.60202 23.2349 7.75249C23.2345 7.95391 23.1539 8.14696 23.0108 8.28925C22.8676 8.43154 22.6736 8.51145 22.4714 8.51145ZM9.10994 25.7562C9.10954 26.0457 9.16655 26.3326 9.27768 26.6002C9.38882 26.8678 9.55189 27.1109 9.75757 27.3156C9.96324 27.5203 10.2075 27.6826 10.4762 27.7931C10.745 27.9036 11.033 27.9601 11.3238 27.9596H12.7892V32.4593C12.7892 33.0006 13.005 33.5196 13.3893 33.9023C13.7735 34.285 14.2947 34.5 14.8381 34.5C15.3815 34.5 15.9027 34.285 16.2869 33.9023C16.6712 33.5196 16.887 33.0006 16.887 32.4593V27.9596H19.619V32.4593C19.619 33.0004 19.8348 33.5192 20.2189 33.9018C20.603 34.2843 21.124 34.4993 21.6672 34.4993C22.2104 34.4993 22.7313 34.2843 23.1155 33.9018C23.4996 33.5192 23.7154 33.0004 23.7154 32.4593V27.9596H25.1822C25.4726 27.9597 25.7602 27.9029 26.0285 27.7923C26.2968 27.6818 26.5406 27.5196 26.746 27.3151C26.9513 27.1106 27.1142 26.8678 27.2252 26.6005C27.3362 26.3333 27.3933 26.0469 27.3931 25.7577V12.5628H9.10994V25.7562ZM6.29819 12.2118C5.75496 12.2126 5.23423 12.428 4.85025 12.8107C4.46627 13.1934 4.2504 13.7122 4.25 14.2532V22.7563C4.25 23.0242 4.30298 23.2894 4.40591 23.5369C4.50884 23.7844 4.65971 24.0093 4.8499 24.1987C5.04009 24.3881 5.26589 24.5384 5.51438 24.6409C5.76288 24.7434 6.02922 24.7962 6.29819 24.7962C6.56717 24.7962 6.8335 24.7434 7.082 24.6409C7.3305 24.5384 7.55629 24.3881 7.74648 24.1987C7.93668 24.0093 8.08754 23.7844 8.19048 23.5369C8.29341 23.2894 8.34639 23.0242 8.34639 22.7563V14.2532C8.34559 13.7124 8.12954 13.194 7.7456 12.8116C7.36167 12.4292 6.84116 12.2141 6.29819 12.2133V12.2118ZM30.2018 12.2118C29.6586 12.2126 29.1378 12.428 28.7539 12.8107C28.3699 13.1934 28.154 13.7122 28.1536 14.2532V22.7563C28.1536 23.0242 28.2066 23.2894 28.3095 23.5369C28.4125 23.7844 28.5633 24.0093 28.7535 24.1987C28.9437 24.3881 29.1695 24.5384 29.418 24.6409C29.6665 24.7434 29.9328 24.7962 30.2018 24.7962C30.4708 24.7962 30.7371 24.7434 30.9856 24.6409C31.2341 24.5384 31.4599 24.3881 31.6501 24.1987C31.8403 24.0093 31.9912 23.7844 32.0941 23.5369C32.197 23.2894 32.25 23.0242 32.25 22.7563V14.2532C32.2492 13.7124 32.0332 13.194 31.6492 12.8116C31.2653 12.4292 30.7448 12.2141 30.2018 12.2133V12.2118Z"
                                                    fill="#003262" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="ty-service-card-description">We create user-friendly and robust Android
                                        apps tailored to your business needs.</p>
                                </a>
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-4">
                            <div class="ty-service-card">
                                <a href="#" class="ty-service-card-link">
                                    <h3 class="ty-service-card-title">Cross Platform App<br /> Development</h3>
                                    <div class="ty-service-card-logo-list">
                                        <div class="ty-service-card-logo-item">
                                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.5556 33.9958C10.2734 33.9957 10.0016 33.8875 9.7954 33.6929C9.58915 33.4983 9.46374 33.232 9.4445 32.9477C9.42526 32.6633 9.51363 32.3822 9.69176 32.1611C9.86988 31.9401 10.1245 31.7955 10.4041 31.7566L10.5556 31.7461H13.1536V27.9997H6.84213C5.99527 27.9998 5.17995 27.6753 4.56094 27.0918C3.94193 26.5083 3.56539 25.7092 3.50743 24.8562L3.5 24.6252V8.8745C3.4999 8.01944 3.82128 7.19622 4.39921 6.57121C4.97714 5.94621 5.76851 5.56602 6.61338 5.5075L6.84213 5.5H29.8642C30.7111 5.49989 31.5264 5.8244 32.1454 6.40792C32.7644 6.99145 33.141 7.79048 33.1989 8.64354L33.2064 8.8745V24.6252C33.2064 25.1831 33.0727 25.7095 32.835 26.173L25.8611 18.3666C25.5093 17.9725 25.0476 17.6953 24.5366 17.5715C24.0257 17.4477 23.4896 17.4831 22.9991 17.6732C22.5085 17.8632 22.0865 18.1988 21.7886 18.6359C21.4908 19.0729 21.3311 19.5908 21.3306 20.1214L21.3277 27.9997H15.3802L15.3817 31.7461H21.3262V33.9958H10.5556ZM23.532 19.073C23.7423 18.9915 23.9721 18.9762 24.1911 19.0292C24.4102 19.0822 24.6081 19.201 24.7589 19.37L34.2135 29.9554C34.3732 30.1343 34.4718 30.3603 34.4948 30.6001C34.5178 30.8398 34.464 31.0807 34.3412 31.2872C34.2185 31.4938 34.0333 31.6551 33.813 31.7474C33.5926 31.8398 33.3488 31.8582 33.1172 31.8001L27.8634 30.4833L24.8481 35.0037C24.7146 35.2036 24.5212 35.355 24.2961 35.4354C24.0711 35.5159 23.8263 35.5213 23.598 35.4507C23.3697 35.3802 23.1699 35.2374 23.0281 35.0435C22.8862 34.8496 22.8098 34.6148 22.8101 34.3738L22.8175 20.1229C22.8174 19.8956 22.8855 19.6737 23.0128 19.4863C23.1401 19.2989 23.3206 19.1548 23.5305 19.073H23.532Z"
                                                    fill="#003262" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="ty-service-card-description">Reach a wider audience with apps that work
                                        seamlessly on iOS, Android, and Windows.</p>
                                </a>
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-4">
                            <div class="ty-service-card">
                                <a href="flutter-app-development.html" class="ty-service-card-link">
                                    <h3 class="ty-service-card-title">Flutter App <br />Development</h3>
                                    <div class="ty-service-card-logo-list">
                                        <div class="ty-service-card-logo-item">
                                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M20.3313 3.5L5.5 18.5007L10.0725 23.1255L29.4718 3.5H20.3313ZM20.3239 17.2977L12.3506 25.4281L20.3194 33.5H29.497L21.5074 25.3996L29.5 17.2992H20.3224L20.3239 17.2977Z"
                                                    fill="#003262" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="ty-service-card-description">We build visually stunning and
                                        fast-performing mobile apps for iOS and Android using Flutter.</p>
                                </a>
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-4">
                            <div class="ty-service-card">
                                <a href="ios-application-development.html" class="ty-service-card-link">
                                    <h3 class="ty-service-card-title">ios App <br />Development</h3>
                                    <div class="ty-service-card-logo-list">
                                        <div class="ty-service-card-logo-item">
                                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_4431_6784)">
                                                    <path
                                                        d="M25.0982 0.518016C25.0223 0.432516 22.2896 0.551766 19.9116 3.155C17.5336 5.75599 17.8995 8.73947 17.953 8.81597C18.0066 8.89247 21.3438 9.01172 23.4742 5.98549C25.6046 2.95925 25.174 0.605765 25.0982 0.518016ZM32.491 26.9171C32.3839 26.7011 27.3044 24.1406 27.7774 19.2177C28.2503 14.2924 31.5139 12.9425 31.5652 12.7962C31.6165 12.65 30.2334 11.0187 28.7678 10.193C27.6917 9.61079 26.5008 9.27724 25.2811 9.21647C25.0402 9.20972 24.2037 9.00272 22.4837 9.47747C21.3505 9.79022 18.7963 10.8027 18.0936 10.8432C17.3886 10.8837 15.2917 9.66872 13.0364 9.34697C11.5931 9.06572 10.0628 9.64172 8.96746 10.085C7.87438 10.526 5.7953 11.7815 4.34084 15.1182C2.88637 18.4527 3.64707 23.7356 4.19137 25.3781C4.73568 27.0184 5.58561 29.7071 7.03115 31.6691C8.31608 33.8831 10.0204 35.4198 10.732 35.9418C11.4436 36.4638 13.4513 36.8103 14.8433 36.0926C15.9632 35.3996 17.9843 35.0013 18.7829 35.0306C19.5793 35.0598 21.1497 35.3771 22.7581 36.2433C24.0319 36.6866 25.2365 36.5021 26.4434 36.0071C27.6502 35.5098 29.3969 33.6243 31.4358 29.8016C32.2099 28.0241 32.5624 27.0634 32.491 26.9171Z"
                                                        fill="#003262" />
                                                    <path
                                                        d="M25.0982 0.518016C25.0223 0.432516 22.2896 0.551766 19.9116 3.155C17.5336 5.75599 17.8995 8.73947 17.953 8.81597C18.0066 8.89247 21.3438 9.01172 23.4742 5.98549C25.6046 2.95925 25.174 0.605765 25.0982 0.518016ZM32.491 26.9171C32.3839 26.7011 27.3044 24.1406 27.7774 19.2177C28.2503 14.2924 31.5139 12.9425 31.5652 12.7962C31.6165 12.65 30.2334 11.0187 28.7678 10.193C27.6917 9.61079 26.5008 9.27724 25.2811 9.21647C25.0402 9.20972 24.2037 9.00272 22.4837 9.47747C21.3505 9.79022 18.7963 10.8027 18.0936 10.8432C17.3886 10.8837 15.2917 9.66872 13.0364 9.34697C11.5931 9.06572 10.0628 9.64172 8.96746 10.085C7.87438 10.526 5.7953 11.7815 4.34084 15.1182C2.88637 18.4527 3.64707 23.7356 4.19137 25.3781C4.73568 27.0184 5.58561 29.7071 7.03115 31.6691C8.31608 33.8831 10.0204 35.4198 10.732 35.9418C11.4436 36.4638 13.4513 36.8103 14.8433 36.0926C15.9632 35.3996 17.9843 35.0013 18.7829 35.0306C19.5793 35.0598 21.1497 35.3771 22.7581 36.2433C24.0319 36.6866 25.2365 36.5021 26.4434 36.0071C27.6502 35.5098 29.3969 33.6243 31.4358 29.8016C32.2099 28.0241 32.5624 27.0634 32.491 26.9171Z"
                                                        fill="#003262" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_4431_6784">
                                                        <rect width="36" height="36" fill="white"
                                                            transform="translate(0.5 0.5)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="ty-service-card-description">Our skilled team develops cutting-edge iOS
                                        apps that align with your business objectives.</p>
                                </a>
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-4">
                            <div class="ty-service-card">
                                <a href="#" class="ty-service-card-link">
                                    <h3 class="ty-service-card-title">Wearable App <br />Development</h3>
                                    <div class="ty-service-card-logo-list">
                                        <div class="ty-service-card-logo-item">
                                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M27.119 27.5C28.5921 27.5 29.8492 26.9875 30.8905 25.9625C31.9317 24.9375 32.4524 23.7 32.4524 22.25C32.4524 20.8 31.9317 19.5625 30.8905 18.5375C29.8492 17.5125 28.5921 17 27.119 17C25.646 17 24.3889 17.5125 23.3476 18.5375C22.3064 19.5625 21.7857 20.8 21.7857 22.25C21.7857 23.7 22.3064 24.9375 23.3476 25.9625C24.3889 26.9875 25.646 27.5 27.119 27.5ZM6.54762 33.5C5.70953 33.5 4.99181 33.206 4.39448 32.618C3.79715 32.03 3.49899 31.324 3.5 30.5V6.5C3.5 5.675 3.79867 4.9685 4.396 4.3805C4.99334 3.7925 5.71054 3.499 6.54762 3.5H18.7381C19.5762 3.5 20.2939 3.794 20.8912 4.382C21.4886 4.97 21.7867 5.676 21.7857 6.5V12.275C21.2016 12.575 20.6556 12.919 20.1476 13.307C19.6397 13.695 19.1698 14.126 18.7381 14.6V11H6.54762V26H16.3381C16.7698 27.275 17.4175 28.425 18.281 29.45C19.1444 30.475 20.173 31.325 21.3667 32C21.0873 32.475 20.713 32.844 20.2436 33.107C19.7743 33.37 19.2724 33.501 18.7381 33.5H6.54762ZM23.3095 33.5V29.6C21.8873 28.9 20.7698 27.894 19.9571 26.582C19.1444 25.27 18.7381 23.826 18.7381 22.25C18.7381 20.675 19.1444 19.231 19.9571 17.918C20.7698 16.605 21.8873 15.599 23.3095 14.9V11H30.9286V14.9C32.3508 15.6 33.4683 16.6065 34.281 17.9195C35.0937 19.2325 35.5 20.676 35.5 22.25C35.5 23.825 35.0937 25.269 34.281 26.582C33.4683 27.895 32.3508 28.901 30.9286 29.6V33.5H23.3095Z"
                                                    fill="#003262" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="ty-service-card-description">We specialize in creating custom apps for
                                        smartwatches and fitness trackers.</p>
                                </a>
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-4">
                            <div class="ty-service-card">
                                <a href="react-native-app-development.html" class="ty-service-card-link">
                                    <h3 class="ty-service-card-title">React Native App <br />Development</h3>
                                    <div class="ty-service-card-logo-list">
                                        <div class="ty-service-card-logo-item">
                                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.5 16.1504C20.033 16.1504 21.2833 17.4169 21.2833 19C21.2833 20.5077 20.033 21.7893 18.5 21.7893C16.967 21.7893 15.7167 20.5077 15.7167 19C15.7167 17.4169 16.967 16.1504 18.5 16.1504ZM11.6088 31.0619C12.5465 31.6349 14.6005 30.7604 16.967 28.4988C16.193 27.6092 15.434 26.6442 14.7195 25.6341C13.5201 25.5178 12.3277 25.3366 11.1474 25.0913C10.3884 28.3178 10.6712 30.5342 11.6088 31.0619ZM12.6656 22.4075L12.234 21.6385C12.0702 22.0758 11.9065 22.513 11.8023 22.9352C12.2042 23.0257 12.6507 23.1011 13.1121 23.1764L12.6656 22.4075ZM22.3995 21.2616L23.6051 19L22.3995 16.7384C21.953 15.9393 21.4767 15.2306 21.0451 14.522C20.2414 14.4768 19.393 14.4768 18.5 14.4768C17.607 14.4768 16.7586 14.4768 15.9549 14.522C15.5233 15.2306 15.047 15.9393 14.6005 16.7384L13.3949 19L14.6005 21.2616C15.047 22.0607 15.5233 22.7694 15.9549 23.478C16.7586 23.5232 17.607 23.5232 18.5 23.5232C19.393 23.5232 20.2414 23.5232 21.0451 23.478C21.4767 22.7694 21.953 22.0607 22.3995 21.2616ZM18.5 11.1296C18.2172 11.4613 17.9195 11.8081 17.6219 12.2152H19.3781C19.0805 11.8081 18.7828 11.4613 18.5 11.1296ZM18.5 26.8704C18.7828 26.5387 19.0805 26.1919 19.3781 25.7848H17.6219C17.9195 26.1919 18.2172 26.5387 18.5 26.8704ZM25.3763 6.93807C24.4535 6.36513 22.3995 7.23962 20.033 9.50123C20.807 10.3908 21.566 11.3558 22.2805 12.3659C23.5009 12.4866 24.7065 12.6675 25.8526 12.9087C26.6116 9.68216 26.3288 7.46578 25.3763 6.93807ZM24.3344 15.5925L24.766 16.3615C24.9298 15.9242 25.0935 15.487 25.1977 15.0648C24.7958 14.9743 24.3493 14.8989 23.8879 14.8236L24.3344 15.5925ZM26.4926 4.96293C28.6805 6.22943 28.9186 9.56154 27.9958 13.4515C31.7763 14.5823 34.5 16.4519 34.5 19C34.5 21.5481 31.7763 23.4177 27.9958 24.5485C28.9186 28.4385 28.6805 31.7706 26.4926 33.0371C24.3195 34.3036 21.3577 32.8561 18.5 30.097C15.6423 32.8561 12.6805 34.3036 10.4926 33.0371C8.31953 31.7706 8.0814 28.4385 9.00419 24.5485C5.22372 23.4177 2.5 21.5481 2.5 19C2.5 16.4519 5.22372 14.5823 9.00419 13.4515C8.0814 9.56154 8.31953 6.22943 10.4926 4.96293C12.6805 3.69642 15.6423 5.14386 18.5 7.90302C21.3577 5.14386 24.3195 3.69642 26.4926 4.96293ZM26.0609 19C26.567 20.1308 27.0135 21.2616 27.3856 22.4075C30.5112 21.4576 32.2674 20.1007 32.2674 19C32.2674 17.8993 30.5112 16.5424 27.3856 15.5925C27.0135 16.7384 26.567 17.8692 26.0609 19ZM10.9391 19C10.433 17.8692 9.98651 16.7384 9.61442 15.5925C6.48884 16.5424 4.73256 17.8993 4.73256 19C4.73256 20.1007 6.48884 21.4576 9.61442 22.4075C9.98651 21.2616 10.433 20.1308 10.9391 19ZM24.3344 22.4075L23.8879 23.1764C24.3493 23.1011 24.7958 23.0257 25.1977 22.9352C25.0935 22.513 24.9298 22.0758 24.766 21.6385L24.3344 22.4075ZM20.033 28.4988C22.3995 30.7604 24.4535 31.6349 25.3763 31.0619C26.3288 30.5342 26.6116 28.3178 25.8526 25.0913C24.7065 25.3325 23.5009 25.5134 22.2805 25.6341C21.566 26.6442 20.807 27.6092 20.033 28.4988ZM12.6656 15.5925L13.1121 14.8236C12.6507 14.8989 12.2042 14.9743 11.8023 15.0648C11.9065 15.487 12.0702 15.9242 12.234 16.3615L12.6656 15.5925ZM16.967 9.50123C14.6005 7.23962 12.5465 6.36513 11.6088 6.93807C10.6712 7.46578 10.3884 9.68216 11.1474 12.9087C12.3277 12.6634 13.5201 12.4822 14.7195 12.3659C15.434 11.3558 16.193 10.3908 16.967 9.50123Z"
                                                    fill="#003262" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="ty-service-card-description">Build high-performance mobile apps for iOS
                                        and Android using React Native's single codebase approach.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section End -->


        <!-- Why Choose Section Start -->
        <section class="pt-0">
            <div class="container">
                <div class="section-title mb-1-9 mb-md-6 text-center wow fadeIn" data-wow-delay="200ms">
                    <span class="sm-title">
                        <h2>Why Choose Us for Mobile App Development?</h2>
                    </span>
                </div>
                <div class="ty-why-choose-content">
                    <div class="row align-items-center">
                        <div class="col col-12 col-md-6 col-lg-6">
                            <div class="ty-why-choose-content__inner">
                                <div>
                                    <p style="text-align: justify;">
                                        ileaf excels in mobile app development services. We possess expertise in cutting-edge technologies, seamless user experience design, efficient project management, and a track record of delivering high-quality, tailored mobile app development solutions. Our commitment to meeting client requirements, timely delivery, and cost-effective solutions sets us apart in this competitive mobile app development industry. Choose us for a top-notch app development experience aligning with your business goals and vision.
                                    </p>
                                    <p>We add the following features that make it easy for turning your dream project
                                        into a reality.</p>
                                </div>
                                <div class="text-center ty-why-choose-btn">
                                    <!-- <a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#requestProposalModal">Schedule Interview</a> -->
                                    <!-- <a href="#ty_landing" class="btn btn-primary">Schedule Interview</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-6">
                            <div class="ty-why-choose-card-content">
                                <div class="ty-why-choose-card-list" data-scrollbar>
                                    <div class="ty-why-choose-card-item">
                                        <div class="ty-why-choose-card">
                                            <h3 class="ty-why-choose-card-title">Dedicated Developers:</h3>
                                            <p class="ty-why-choose-card-desription">We have dedicated developers with years of expertise in their specific domain. They are highly skilled and can easily turn your visionary project into a growth-driven mobile application.</p>
                                        </div>
                                    </div>
                                    <div class="ty-why-choose-card-item">
                                        <div class="ty-why-choose-card">
                                            <h3 class="ty-why-choose-card-title">Cost-effective Solutions:</h3>
                                            <p class="ty-why-choose-card-desription">We value every business's money and also understand the budget concerns. Hence, we offer very reasonable mobile app development services best suited for all-scale businesses.</p>
                                        </div>
                                    </div>
                                    <div class="ty-why-choose-card-item">
                                        <div class="ty-why-choose-card">
                                            <h3 class="ty-why-choose-card-title">Source-Code Authorization:</h3>
                                            <p class="ty-why-choose-card-desription">At ileaf, we provide complete authority of the code. Also, the source code is updated timely on your server and code repository. So, you will be the sole owner of the source code.</p>
                                        </div>
                                    </div>
                                    <div class="ty-why-choose-card-item">
                                        <div class="ty-why-choose-card">
                                            <h3 class="ty-why-choose-card-title">On-Time Delivery:</h3>
                                            <p class="ty-why-choose-card-desription">We believe on-time delivery is one of the most important factors for a project’s success. So rest assured, our developers will ensure timely delivery of milestones created by you.</p>
                                        </div>
                                    </div>
                                    <div class="ty-why-choose-card-item">
                                        <div class="ty-why-choose-card">
                                            <h3 class="ty-why-choose-card-title">Transparent Working Model:</h3>
                                            <p class="ty-why-choose-card-desription">By participating in the daily scrum meetings, you get informed about the next target the developers will work on for the day, and you can also set the order of modules to be completed.</p>
                                        </div>
                                    </div>
                                    <div class="ty-why-choose-card-item">
                                        <div class="ty-why-choose-card">
                                            <h3 class="ty-why-choose-card-title">Quality Assurance:</h3>
                                            <p class="ty-why-choose-card-desription">Our experienced quality analysts conduct rigorous quality assurance processes. They always ensure a bug-free, reliable, and robust mobile app that meets businesses’ high-quality standards.</p>
                                        </div>
                                    </div>
                                    <div class="ty-why-choose-card-item">
                                        <div class="ty-why-choose-card">
                                            <h3 class="ty-why-choose-card-title">Post-Development Support:</h3>
                                            <p class="ty-why-choose-card-desription">We provide ongoing support, maintenance, and updates to ensure the mobile application remains functional, secure, and updated with changing technologies and user needs.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Section End -->

        <!-- Want To Discuss Section Start -->
        <section class="pt-0">
            <section class="ty-want-discuss-section ty-section-spacer">
                <div class="container">
                    <div class="row align-items-center text-center">
                        <h2 class="section-title text-white">Share Your Mobile App Idea Project with Us!</h2>
                        <p class="ty-section-description">Searching for a reliable mobile app development company that can
                            convert your mobile application idea into reality? TechnoYuga can be your one-stop destination.
                            We have a team of dedicated mobile app developers who can be your perfect saviour! Drop your
                            idea now!</p>
                    </div>
                    <div class="text-center">

                        <a href="javascript:void(0)" class="btn btn-outline-light" data-bs-toggle="modal"
                            data-bs-target="#requestProposalModal">Book A Consultation</a>
                    </div>
                </div>
            </section>
        </section>

        <!-- Want To Discuss Section End -->

        <!-- Technology Stack Section Start -->
        <section class="pt-0">
            <div class="container">
                <!-- <div class="ty-heading-center">
                    <h2 class="ty-section-title ty-title-border">Technology Stack</h2>
                    <p class="ty-section-description">At TechoYuga we use the scalable and trending frameworks and
                        technologies to <a href="mobile-app-development.html"> build Mobile
                            Apps</a> , Backend and Web applications for our clients. </p>
                </div> -->
                <div class="section-title mb-1-9 mb-md-6 text-center wow fadeIn" data-wow-delay="200ms">
                    <span class="sm-title">
                        <h1>Our Technology Stack</h1>
                    </span>
                    <p class="mb-0">we use the scalable and trending frameworks and technologies to build Mobile Apps , Backend and Web applications for our clients.</p>
                </div>
                <div class="ty-technology-content">
                    <div class="row">
                        <div class="col col-12 col-md-6 col-lg-6">
                            <div class="nav flex-column nav-pills me-3" id="ty-stack-tab" role="tablist"
                                aria-orientation="vertical">
                                <div class="nav-link active" id="ty-stack-web-tab" data-bs-toggle="pill"
                                    data-bs-target="#ty-stack-web" role="tab" aria-controls="ty-stack-web"
                                    aria-selected="true">
                                    <div class="ty-technology-stack-tab-btn">
                                        <h3 class="ty-stack-tab-title">Web Development Stack</h3>
                                        <p class="ty-stack-tab-description">We follow the agile methodology and
                                            technology
                                            framework to develop web applications that meets your expectations.</p>
                                        <!-- framework to <a href="web-app-development.html">develop web applications</a> that meets your expectations.</p> -->
                                    </div>
                                </div>
                                <div class="nav-link" id="ty-stack-mobile-tab" data-bs-toggle="pill"
                                    data-bs-target="#ty-stack-mobile" role="tab" aria-controls="ty-stack-mobile"
                                    aria-selected="false">
                                    <div class="ty-technology-stack-tab-btn">
                                        <h3 class="ty-stack-tab-title">Mobile Development Stack</h3>
                                        <p class="ty-stack-tab-description">ileaf’s Mobile App Development
                                            teams follow the
                                            trending tech frameworks for your dream Mobile apps.
                                        </p>
                                        <!-- <p class="ty-stack-tab-description">ileaf’s <a href="mobile-app-development.html">Mobile App Development</a>
                                            teams follow the
                                            trending tech frameworks for your dream Mobile apps.
                                        </p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-6">
                            <div class="tab-content" id="ty-stack-tabContent">
                                <div class="tab-pane fade show active" id="ty-stack-web" role="tabpanel"
                                    aria-labelledby="ty-stack-web-tab">
                                    <div class="ty-stack-tabContent__inner">
                                        <div class="ty-stack-content-item">
                                            <h4 class="ty-stack-logo-title">Frontend</h4>
                                            <div class="ty-stack-logo-list">
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/react.png') }}" alt="React"
                                                            class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">React</h5>
                                                </div>
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/angular.png') }}" alt="Angular"
                                                            class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">Angular</h5>
                                                </div>
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/javascript.png') }}" alt="Java Script"
                                                            class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">Java Script</h5>
                                                </div>
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/html.png') }}" alt="HTML 5"
                                                            class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">HTML 5</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ty-stack-content-item">
                                            <h4 class="ty-stack-logo-title">Backend</h4>
                                            <div class="ty-stack-logo-list">
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/node.png') }}" alt="Node js"
                                                            class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">Node js</h5>
                                                </div>
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/php.png') }}" alt="PHP" class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">PHP</h5>
                                                </div>
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/csharpe.svg') }}" alt="C#" class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">C#</h5>
                                                </div>
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/python.svg') }}" alt="Python"
                                                            class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">Python</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ty-stack-content-item">
                                            <h4 class="ty-stack-logo-title">Frontend</h4>
                                            <div class="ty-stack-logo-list">
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/express.png') }}" alt="Express"
                                                            class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">Express</h5>
                                                </div>
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/laracel.png') }}" alt="Laravel"
                                                            class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">Laravel</h5>
                                                </div>
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/dotnet.png') }}" alt=".NET"
                                                            class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">.NET</h5>
                                                </div>
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/django.png') }}" alt="Django"
                                                            class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">Django</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="ty-stack-mobile" role="tabpanel"
                                    aria-labelledby="ty-stack-mobile-tab">
                                    <div class="ty-stack-tabContent__inner">
                                        <div class="ty-stack-content-item">
                                            <h4 class="ty-stack-logo-title">Languages</h4>
                                            <div class="ty-stack-logo-list">
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/swift.svg') }}" alt="swift"
                                                            class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">Swift</h5>
                                                </div>
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/kotlin.svg') }}" alt="Kotlin"
                                                            class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">Kotlin</h5>
                                                </div>
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/java.svg') }}" alt="Java" class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">Java</h5>
                                                </div>
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/dart.svg') }}" alt="dart" class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">Dart</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ty-stack-content-item">
                                            <h4 class="ty-stack-logo-title">Frameworks</h4>
                                            <div class="ty-stack-logo-list">
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/flutter.svg') }}" alt="Flutter"
                                                            class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">Flutter</h5>
                                                </div>
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/react.png') }}" alt="React Native"
                                                            class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">React Native</h5>
                                                </div>
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/rx-java.svg') }}" alt="rx-java"
                                                            class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">Rx Java</h5>
                                                </div>
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/junit.svg') }}" alt="JUnit"
                                                            class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">JUnit</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ty-stack-content-item">
                                            <h4 class="ty-stack-logo-title">Database</h4>
                                            <div class="ty-stack-logo-list">
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/firebase-stack.svg') }}" alt="Firebase"
                                                            class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">Firebase</h5>
                                                </div>
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/realm.svg') }}" alt="Realm"
                                                            class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">Realm</h5>
                                                </div>
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/sw-lite.svg') }}" alt="SW Lite"
                                                            class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">SW Lite</h5>
                                                </div>
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/mongo-db.svg') }}" alt="MongoDB"
                                                            class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">MongoDB</h5>
                                                </div>
                                                <div class="ty-stack-logo-item">
                                                    <div class="ty-stack-logo-img">
                                                        <img src="{{ asset('assets/images/content/my-sql.svg') }}" alt="My SQL"
                                                            class="img-fluid">
                                                    </div>
                                                    <h5 class="ty-stack-logo-label">My SQL</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Technology Stack Section End -->

        <section class="pt-0">
            <div class="container">
                <div class="row align-items-center text-center justify-sontent-center">
                    <div class="widget bg-secondary mb-1-9 wow fadeIn" data-wow-delay="400ms">
                        <div class="widget-content">
                            <h5 class="mb-4 text-white">Brochures</h5>
                            <p class="text-white mb-1-9">Cras enim urna, interdum nec por ttitor vitae, sollicitudin eu erosen. Praesent eget mollis nulla sollicitudin.</p>
                            <div class="btn-wrapper">
                                <a class="dow-btn" href="#!">Download</a>
                                <a class="butn-or d-none d-sm-block" href="#!">Or</a>
                                <a class="disc-btn" href="#!">Discover</a>
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

         <section class="pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-1-9 mb-lg-0">
                        <div class="pe-lg-6 wow fadeInUp" data-wow-delay="200ms">
                            <h2 class="h1 mb-2-3">We’re Delivering The Best Customer Experience!</h2>
                            <div class="row mb-2-3">
                                <div class="col-sm-5 mb-3 mb-sm-0">
                                    <img src="{{ asset('assets/images/content/05.jpg') }}" alt="...">
                                </div>
                                <div class="col-sm-7">
                                    <p class="mb-0">It was popularised in the 1960s with the release sheets. We bring the right people together.</p>
                                </div>
                            </div>
                            <div class="progress-style1">
                                <div class="progress-text">
                                    <div class="row">
                                        <div class="col-6 fw-bold">Digital Marketing</div>
                                        <div class="col-6 text-end">70%</div>
                                    </div>
                                </div>
                                <div class="custom-progress progress rounded-3">
                                    <div class="animated custom-bar progress-bar slideInLeft" style="width:70%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-delay="400ms">
                            <div id="accordion" class="accordion-style">
                                <div class="card mb-3">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">1. What is mobile app development?</button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        Mobile app development is the process of creating software applications specifically designed to run on mobile devices like smartphones and tablets. So, businesses can develop a mobile app to develop a strong online presence and reach millions of customers in just a tap. Get your mobile app developed today.

                                    </div>
                                </div>
                            </div>
                                <div class="card mb-3">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">2. Which is the best mobile app development company?</button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        TechnoYuga is recognized as a top mobile app development company known for its quality, innovation, and customer satisfaction. However, "best" may vary based on specific project requirements and preferences. Share your requirements with us today.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">3. How much does mobile app development cost?</button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        An average cost to develop a mobile app is between $8,000 to $25,000. Still, mobile app development costs vary based on factors like complexity, features, platform, and developer rates.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">4. How to hire the best mobile app developers?</button>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
                                    <div class="card-body">

                                        To hire the best mobile app developers, consider their experience, portfolio, expertise in relevant technologies, communication skills, and client reviews. Conduct interviews and assess their problem-solving abilities. At TechnoYuga, we have the best team of dedicated developers for hire. Feel free to connect with us at any hour of the day.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <div class="card-header" id="headingFive">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">5. What are the business benefits of mobile app development?</button>
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        Mobile app development offers benefits such as increased customer engagement, brand visibility, improved customer service, new revenue streams, enhanced marketing opportunities, and efficient business operations.
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </section>

        <!-- Our Process Section End -->

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