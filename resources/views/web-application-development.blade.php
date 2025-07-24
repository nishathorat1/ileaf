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
                            <h1>Web Application Development</h1>
                        </div>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/web-application-development') }}">Web Application Development</a></li>
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

         <section>
            <div class="container">
                <div class="row">                   
                    <div class="col-xl-12 mb-2-9 mb-xl-0 order-1 order-xl-2">
                        <div>
                            <div class="mb-5 text-center wow fadeIn" data-wow-delay="200ms">
                                <img src="{{ asset('assets/images/service/service-details-1.jpg') }}" alt="...">
                            </div>
                            <div class="wow fadeIn" data-wow-delay="20ms">
                                <h2 class="h4 mb-3">Web App Development Services</h2>
                                <p class="mb-5">TechnoYuga offers comprehensive web app development services, specializing in creating custom, responsive, and user-friendly web applications. Our expert web app developers leverages the latest technologies to deliver innovative solutions tailored to clients' specific needs.</p>
                            </div>
                            <div class="row mb-1-9">
                                <div class="col-lg-6 mb-4 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('assets/images/service/service-details-2.jpg') }}" class="rounded-circle" alt="...">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h4 class="h5">Strategy</h4>
                                            <p class="mb-0">We focus on the best practices for it solutions and services.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeIn" data-wow-delay="200ms">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('assets/images/service/service-details-3.jpg') }}" class="rounded-circle" alt="...">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h4 class="h5">Restructuring</h4>
                                            <p class="mb-0">We focus on the best practices for it solutions and services.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-2-3 wow fadeIn" data-wow-delay="200ms">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                            <div id="accordion" class="accordion-style wow fadeIn" data-wow-delay="200ms">
                                <div class="card mb-3">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">1. Why we are best company?</button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            We are committed to providing our customers with exceptional service while offering our employees the best training. There are many variations of passages of lorem ipsum is simply free text.
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">2. How the template process works?</button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            We are committed to providing our customers with exceptional service while offering our employees the best training. There are many variations of passages of lorem ipsum is simply free text.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">3. What should be listed on a business card?</button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            We are committed to providing our customers with exceptional service while offering our employees the best training. There are many variations of passages of lorem ipsum is simply free text.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

          <!-- Services Section Start -->
        <section class="pt-0">
              <div class="container">
                <div class="ty-heading-center">
                    <h2 class="ty-section-title ty-title-border">Professional Web App Development Services</h2>
                    <p class="ty-section-description">Get ready to avail expert web <a href="mobile-app-development.html">app development services</a> to create
                        tailored, efficient, and user-friendly solutions for your business needs. Contact us for a
                        competitive edge in the digital landscape.</p>
                </div>
                <div class="ty-service-content mb-0">
                    <div class="row">
                        <div class="col col-12 col-md-6 col-lg-4">
                            <div class="ty-service-card">
                                <a href="#" class="ty-service-card-link">
                                    <h3 class="ty-service-card-title">Front-end Development</h3>
                                    <div class="ty-service-card-logo-list">
                                        <div class="ty-service-card-logo-item">
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.00337 1.19174L4.3047 31.0827C4.33925 31.5315 4.6385 31.9143 5.06125 32.0504L17.1709 35.9483C17.385 36.0172 17.6149 36.0172 17.8291 35.9483L29.9387 32.0504C30.3615 31.9143 30.6607 31.5315 30.6953 31.0827L32.9966 1.19174C33.0461 0.549104 32.5459 0 31.911 0H3.08906C2.45421 0 1.95396 0.549104 2.00337 1.19174ZM27.095 10.4659H12.0968L12.5494 14.7036H26.7688L25.8386 26.7846L17.5 29.4687L9.16144 26.7846L8.67548 20.473H13.0522V23.5689L17.617 24.8128L22.1545 23.5689L22.5065 18.6349H8.53394L7.60629 6.58552H27.3937L27.095 10.4659Z"
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
                                    <h3 class="ty-service-card-title">Back-end Development</h3>
                                    <div class="ty-service-card-logo-list">
                                        <div class="ty-service-card-logo-item">
                                            <svg width="36" height="37" viewBox="0 0 36 37" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_4606_21305)">
                                                    <path
                                                        d="M17.9996 36.5C17.506 36.5 17.0413 36.372 16.6068 36.1351L12.2014 33.5216C11.5395 33.1567 11.8655 33.0287 12.0733 32.9591C12.9718 32.6631 13.1303 32.5942 14.0584 32.0619C14.1569 31.993 14.2858 32.0324 14.3943 32.0914L17.7722 34.1129C17.9004 34.1818 18.0687 34.1818 18.1672 34.1129L31.3826 26.47C31.5107 26.4011 31.5804 26.2724 31.5804 26.1051V10.8677C31.5804 10.7004 31.5114 10.5717 31.3826 10.5028L18.1672 2.89923C18.0391 2.83032 17.8708 2.83032 17.7722 2.89923L4.55687 10.5028C4.42871 10.5717 4.359 10.7299 4.359 10.8677V26.1149C4.359 26.2429 4.42801 26.4109 4.55687 26.4798L8.17213 28.5611C10.1276 29.5574 11.3529 28.3937 11.3529 27.2392V12.1896C11.3529 11.992 11.5205 11.7951 11.7479 11.7951H13.4373C13.6351 11.7951 13.8323 11.9625 13.8323 12.1896V27.2392C13.8323 29.8527 12.4099 31.3714 9.92131 31.3714C9.16079 31.3714 8.56788 31.3714 6.87926 30.5432L3.39287 28.5611C2.53377 28.0682 2 27.1408 2 26.1451V10.9071C2 9.91076 2.53306 8.99388 3.39287 8.49115L16.6068 0.847518C17.4363 0.384161 18.5623 0.384161 19.3918 0.847518L32.6071 8.49045C33.4662 8.98334 34 9.91076 34 10.9064V26.1536C34 27.1499 33.4669 28.0668 32.6071 28.5695L19.3918 36.2124C18.958 36.4009 18.4637 36.5 17.9996 36.5ZM22.0691 26.0165C16.2709 26.0165 15.0759 23.3734 15.0759 21.1248C15.0759 20.9273 15.2435 20.7304 15.4709 20.7304H17.2096C17.4074 20.7304 17.575 20.8584 17.575 21.0658C17.8419 22.8215 18.6024 23.6793 22.1085 23.6793C24.8936 23.6793 26.0794 23.0479 26.0794 21.5587C26.0794 20.7009 25.7435 20.0695 21.4072 19.6455C17.7919 19.2806 15.54 18.4916 15.54 15.6117C15.54 12.9293 17.7919 11.3416 21.5649 11.3416C25.802 11.3416 27.8863 12.8013 28.1532 15.9667C28.1532 16.0652 28.1236 16.1643 28.0546 16.2628C27.9856 16.3317 27.887 16.3907 27.7877 16.3907H26.0695C25.9019 16.3907 25.7336 16.2628 25.7041 16.0947C25.309 14.28 24.2816 13.6788 21.5656 13.6788C18.5236 13.6788 18.1581 14.7342 18.1581 15.5329C18.1581 16.4899 18.5926 16.7852 22.6916 17.3181C26.761 17.8504 28.687 18.6098 28.687 21.4504C28.6673 24.3592 26.2766 26.0165 22.0691 26.0165Z"
                                                        fill="#003262" fill-opacity="1" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_4606_21305">
                                                        <rect width="36" height="36" fill="white"
                                                            transform="translate(0 0.5)" />
                                                    </clipPath>
                                                </defs>
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
                                <a href="#" class="ty-service-card-link">
                                    <h3 class="ty-service-card-title">Full Stack Development</h3>
                                    <div class="ty-service-card-logo-list">
                                        <div class="ty-service-card-logo-item">
                                            <svg width="36" height="37" viewBox="0 0 36 37" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M30.8007 16.7102L32.6299 17.808C32.7428 17.8756 32.8362 17.9713 32.9011 18.0858C32.9659 18.2002 33 18.3296 33 18.4612C33 18.5928 32.9659 18.7221 32.9011 18.8366C32.8362 18.9511 32.7428 19.0468 32.6299 19.1144L18.5 27.5953L4.37006 19.1144C4.25722 19.0468 4.16381 18.9511 4.09895 18.8366C4.03409 18.7221 4 18.5928 4 18.4612C4 18.3296 4.03409 18.2002 4.09895 18.0858C4.16381 17.9713 4.25722 17.8756 4.37006 17.808L6.19927 16.7102L18.5 24.0948L30.8007 16.7102ZM30.8007 23.8664L32.6299 24.9642C32.7428 25.0318 32.8362 25.1275 32.9011 25.242C32.9659 25.3565 33 25.4858 33 25.6174C33 25.749 32.9659 25.8784 32.9011 25.9928C32.8362 26.1073 32.7428 26.203 32.6299 26.2706L19.2837 34.2826C19.047 34.4248 18.7761 34.5 18.5 34.5C18.2239 34.5 17.953 34.4248 17.7163 34.2826L4.37006 26.2706C4.25722 26.203 4.16381 26.1073 4.09895 25.9928C4.03409 25.8784 4 25.749 4 25.6174C4 25.4858 4.03409 25.3565 4.09895 25.242C4.16381 25.1275 4.25722 25.0318 4.37006 24.9642L6.19927 23.8664L18.5 31.2511L30.8007 23.8664ZM19.2822 2.71592L32.6299 10.7279C32.7428 10.7955 32.8362 10.8912 32.9011 11.0056C32.9659 11.1201 33 11.2495 33 11.3811C33 11.5127 32.9659 11.642 32.9011 11.7565C32.8362 11.871 32.7428 11.9667 32.6299 12.0343L18.5 20.5152L4.37006 12.0358C4.25722 11.9682 4.16381 11.8725 4.09895 11.758C4.03409 11.6435 4 11.5142 4 11.3826C4 11.251 4.03409 11.1216 4.09895 11.0072C4.16381 10.8927 4.25722 10.797 4.37006 10.7294L17.7163 2.71744C17.953 2.57517 18.2239 2.5 18.5 2.5C18.7761 2.5 19.047 2.57517 19.2837 2.71744L19.2822 2.71592Z"
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
                                <a href="#" class="ty-service-card-link">
                                    <h3 class="ty-service-card-title">MERN Stack</h3>
                                    <div class="ty-service-card-logo-list">
                                        <div class="ty-service-card-logo-item">
                                            <svg width="36" height="37" viewBox="0 0 36 37" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M30.8007 16.7102L32.6299 17.808C32.7428 17.8756 32.8362 17.9713 32.9011 18.0858C32.9659 18.2002 33 18.3296 33 18.4612C33 18.5928 32.9659 18.7221 32.9011 18.8366C32.8362 18.9511 32.7428 19.0468 32.6299 19.1144L18.5 27.5953L4.37006 19.1144C4.25722 19.0468 4.16381 18.9511 4.09895 18.8366C4.03409 18.7221 4 18.5928 4 18.4612C4 18.3296 4.03409 18.2002 4.09895 18.0858C4.16381 17.9713 4.25722 17.8756 4.37006 17.808L6.19927 16.7102L18.5 24.0948L30.8007 16.7102ZM30.8007 23.8664L32.6299 24.9642C32.7428 25.0318 32.8362 25.1275 32.9011 25.242C32.9659 25.3565 33 25.4858 33 25.6174C33 25.749 32.9659 25.8784 32.9011 25.9928C32.8362 26.1073 32.7428 26.203 32.6299 26.2706L19.2837 34.2826C19.047 34.4248 18.7761 34.5 18.5 34.5C18.2239 34.5 17.953 34.4248 17.7163 34.2826L4.37006 26.2706C4.25722 26.203 4.16381 26.1073 4.09895 25.9928C4.03409 25.8784 4 25.749 4 25.6174C4 25.4858 4.03409 25.3565 4.09895 25.242C4.16381 25.1275 4.25722 25.0318 4.37006 24.9642L6.19927 23.8664L18.5 31.2511L30.8007 23.8664ZM19.2822 2.71592L32.6299 10.7279C32.7428 10.7955 32.8362 10.8912 32.9011 11.0056C32.9659 11.1201 33 11.2495 33 11.3811C33 11.5127 32.9659 11.642 32.9011 11.7565C32.8362 11.871 32.7428 11.9667 32.6299 12.0343L18.5 20.5152L4.37006 12.0358C4.25722 11.9682 4.16381 11.8725 4.09895 11.758C4.03409 11.6435 4 11.5142 4 11.3826C4 11.251 4.03409 11.1216 4.09895 11.0072C4.16381 10.8927 4.25722 10.797 4.37006 10.7294L17.7163 2.71744C17.953 2.57517 18.2239 2.5 18.5 2.5C18.7761 2.5 19.047 2.57517 19.2837 2.71744L19.2822 2.71592Z"
                                                    fill="#003262" />
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
                                    <h3 class="ty-service-card-title">React js</h3>
                                    <div class="ty-service-card-logo-list">
                                        <div class="ty-service-card-logo-item">
                                            <svg width="40" height="37" viewBox="0 0 40 37" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_4606_21342)">
                                                    <path
                                                        d="M16.4329 18.4599C16.4329 16.4651 18.0349 14.8447 20.0071 14.8447C21.9794 14.8447 23.5813 16.4651 23.5813 18.4599C23.5813 20.4548 21.9794 22.0752 20.0071 22.0752C18.0349 22.0752 16.4329 20.4548 16.4329 18.4599ZM40 18.4599C40 20.9445 37.1022 23.4579 32.4315 25.0206C32.1894 25.0998 31.9402 25.1791 31.6839 25.2583C31.7764 25.6256 31.8548 25.9856 31.926 26.3385C32.3603 28.571 32.4315 30.6451 32.1253 32.3303C31.7978 34.1235 31.0573 35.3982 29.9893 36.0247C29.4553 36.3416 28.8216 36.5 28.1168 36.5C26.1801 36.5 23.7237 35.3189 21.1606 33.0864C20.7974 32.7696 20.4414 32.4383 20.0783 32.0854C19.8006 32.3591 19.523 32.6183 19.2453 32.8632C17.5507 34.3611 15.8063 35.4558 14.2115 36.0247C13.3784 36.3272 12.5952 36.4784 11.8975 36.4784C11.1712 36.4784 10.5304 36.32 9.98932 36.0031C7.94589 34.8076 7.23389 31.3652 8.09541 26.7922C8.18085 26.3241 8.28765 25.8416 8.40869 25.3519C8.03133 25.2439 7.66821 25.1286 7.31933 25.0062C5.19046 24.2717 3.38199 23.2922 2.09327 22.176C0.726237 20.9949 0 19.7058 0 18.4599C0 16.069 2.59167 13.7285 6.94197 12.2017C7.41901 12.0361 7.91741 11.8777 8.43005 11.7264C8.31613 11.2727 8.21645 10.8262 8.13101 10.3869C7.71093 8.21204 7.63261 6.21719 7.90317 4.61123C8.20221 2.86123 8.90708 1.61535 9.95372 1.00322C12.0755 -0.242663 15.6853 1.03923 19.3592 4.34477C19.5799 4.54641 19.8006 4.75526 20.0285 4.97131C20.3631 4.64724 20.6978 4.33757 21.0253 4.0423C22.6771 2.58757 24.3503 1.52173 25.8597 0.960007C27.5045 0.34787 28.9284 0.34787 29.968 0.952806C32.0968 2.19148 32.8017 5.99394 31.8049 10.8622C31.748 11.1575 31.6768 11.4528 31.6056 11.7552C32.047 11.8849 32.4742 12.0217 32.8871 12.1657C34.9591 12.8859 36.7035 13.8221 37.9423 14.8591C39.288 15.997 40 17.2429 40 18.4599ZM21.2246 6.20279C22.3638 7.44146 23.503 8.88179 24.5995 10.4661C26.4863 10.6462 28.2876 10.9343 29.9537 11.3231C30.0178 11.0495 30.0819 10.783 30.1317 10.5166C31.0644 5.92912 30.2599 3.12049 29.1136 2.45074C28.5297 2.11227 27.5828 2.15548 26.4436 2.58037C25.1264 3.07008 23.6383 4.0279 22.1431 5.34579C21.837 5.61225 21.5308 5.90032 21.2246 6.20279ZM10.5233 24.106C11.6625 24.3581 12.8943 24.5597 14.2043 24.7037C13.7771 24.0268 13.3571 23.3354 12.9512 22.6297C12.5525 21.9383 12.1752 21.2398 11.8192 20.5412C11.3136 21.7511 10.8722 22.9538 10.5233 24.106ZM12.9512 14.3766C13.3499 13.6853 13.7558 13.0011 14.1759 12.3386C12.9085 12.497 11.691 12.713 10.5447 12.9651C10.8936 14.103 11.3208 15.2768 11.8192 16.4723C12.1752 15.7737 12.5525 15.0752 12.9512 14.3766ZM14.4322 21.7655C15.0516 22.8457 15.7067 23.8972 16.3902 24.8982C17.5507 24.9702 18.7611 25.0134 20.0071 25.0134C21.2602 25.0134 22.4849 24.9702 23.6668 24.8838C24.3147 23.8972 24.9555 22.8529 25.5892 21.7511C26.2157 20.6564 26.7925 19.5546 27.3122 18.4743C26.7925 17.4157 26.2229 16.3355 25.5892 15.2336C24.9697 14.1462 24.3218 13.1091 23.6597 12.1153C22.4706 12.0217 21.246 11.9785 20.0071 11.9785C18.7825 11.9785 17.5578 12.0289 16.3617 12.1225C15.6924 13.1163 15.0374 14.1606 14.4251 15.2408C13.8127 16.3139 13.2431 17.4085 12.7234 18.5032C13.2431 19.5906 13.8127 20.6852 14.4322 21.7655ZM25.8455 24.6749C27.1627 24.5165 28.4158 24.3005 29.5764 24.034C29.2204 22.9033 28.7718 21.7079 28.2307 20.4692C27.8676 21.1822 27.476 21.9023 27.0701 22.6153C26.6643 23.321 26.2585 24.0124 25.8455 24.6749ZM29.4909 12.9867C28.3375 12.7203 27.1129 12.5042 25.8384 12.3386C26.2513 12.9939 26.6572 13.6709 27.0559 14.3622C27.4617 15.0752 27.8462 15.7809 28.2093 16.4723C28.7148 15.2768 29.1492 14.103 29.4909 12.9867ZM17.6504 10.3077C18.4265 10.2717 19.2097 10.2501 20 10.2501C20.8046 10.2501 21.5949 10.2717 22.3852 10.3077C21.6091 9.26348 20.8188 8.29846 20.0285 7.43426C19.2239 8.30566 18.4265 9.27068 17.6504 10.3077ZM9.81132 10.0557C9.88964 10.4661 9.9822 10.8766 10.089 11.3015C11.748 10.9198 13.5493 10.639 15.4361 10.4589C16.5326 8.89619 17.6789 7.46307 18.8394 6.19558C18.6401 6.00114 18.4407 5.8139 18.2414 5.64106C14.7668 2.52996 11.9616 1.8314 10.8152 2.50115C10.2314 2.83963 9.79708 3.69662 9.5906 4.90649C9.35564 6.30361 9.42684 8.08961 9.81132 10.0557ZM10.8366 18.5104C10.0463 16.7676 9.38412 15.0464 8.88573 13.3972C8.40869 13.534 7.95301 13.6781 7.51157 13.8365C3.51015 15.248 1.71591 17.1781 1.71591 18.4671C1.71591 19.8066 3.64543 21.9167 7.87469 23.3786C8.19509 23.4867 8.52261 23.5947 8.86436 23.6955C9.36988 22.0175 10.032 20.2748 10.8366 18.5104ZM18.8822 30.8539C17.7074 29.5864 16.5539 28.1389 15.4503 26.5618C13.4995 26.4033 11.691 26.1369 10.0676 25.7696C9.95372 26.2305 9.86116 26.677 9.77572 27.1091C8.9854 31.322 9.74724 33.857 10.8437 34.4979C11.99 35.1677 14.7597 34.534 18.1274 31.5525C18.3695 31.3364 18.6258 31.0988 18.8822 30.8539ZM22.4208 26.6842C21.6305 26.7202 20.8188 26.7418 20.0071 26.7418C19.2097 26.7418 18.4336 26.7274 17.6718 26.6986C18.4621 27.75 19.2666 28.7222 20.0783 29.608C20.8544 28.7367 21.6447 27.7644 22.4208 26.6842ZM30.2599 26.677C30.1958 26.3529 30.1246 26.0288 30.0392 25.6904C28.3873 26.0793 26.5646 26.3601 24.628 26.533C23.5244 28.1533 22.3923 29.6008 21.2745 30.8395C21.6091 31.1708 21.9509 31.4805 22.2784 31.7685C25.4895 34.5628 28.0384 35.1677 29.142 34.5196C30.2884 33.857 31.1285 31.1132 30.2599 26.677ZM38.2983 18.4599C38.2983 17.7758 37.7857 16.9692 36.853 16.1842C35.7779 15.2768 34.2115 14.4486 32.3389 13.7933C31.9544 13.6637 31.5557 13.534 31.1499 13.4116C30.6586 15.0176 30.0036 16.7244 29.199 18.4671C30.0392 20.2603 30.7227 21.9815 31.2211 23.5875C31.4489 23.5155 31.6768 23.4435 31.8975 23.3714C36.2905 21.9023 38.2983 19.7922 38.2983 18.4599Z"
                                                        fill="#003262" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_4606_21342">
                                                        <rect width="40" height="36" fill="white"
                                                            transform="translate(0 0.5)" />
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
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section End -->    

         <!-- Why Choose Section Start -->
    <section class="pt-0">
        <div class="container">
            <div class="ty-heading-center">
                <h2 class="ty-section-title ty-title-border">Why Choose Us for Web App Development?</h2>
            </div>
            <div class="ty-why-choose-content">
                <div class="row align-items-center">
                    <div class="col col-12 col-md-6 col-lg-6">
                        <div class="ty-why-choose-content__inner">
                            <div class="ty-why-choose-description">
                                <p>
                                    Choose our web development services and take your business to the heights it deserves. We hold expertise in modern web technologies, innovative design, streamlined development processes, and dedication to meeting client objectives. We prioritize user-centric solutions, on-time delivery, and cost-effectiveness. With our proven track record and client-focused approach, we ensure a seamless and engaging web presence that propels your business forward. Trust us for exceptional web development services that align with your requirements.
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
                                        <h3 class="ty-why-choose-card-title">Expertise and Experience:</h3>
                                        <p class="ty-why-choose-card-desription">We have demonstrated expertise in web app development technologies, frameworks, and languages. With a proven track record, we have delivered similar projects in all domains.</p>
                                    </div>
                                </div>
                                <div class="ty-why-choose-card-item">
                                    <div class="ty-why-choose-card">
                                        <h3 class="ty-why-choose-card-title">Custom Solutions:</h3>
                                        <p class="ty-why-choose-card-desription">Our experts possess the ability to understand your specific project requirements and provide tailor-made web app development solutions aligning with your business needs.</p>
                                    </div>
                                </div>
                                <div class="ty-why-choose-card-item">
                                    <div class="ty-why-choose-card">
                                        <h3 class="ty-why-choose-card-title">Technological Proficiency:</h3>
                                        <p class="ty-why-choose-card-desription">At TechnoYuga, our professionals have proficiency in using the latest and most relevant technologies. We always ensure that your web app is modern, secure, and efficient.</p>
                                    </div>
                                </div>
                                <div class="ty-why-choose-card-item">
                                    <div class="ty-why-choose-card">
                                        <h3 class="ty-why-choose-card-title">User-Centric Approach:</h3>
                                        <p class="ty-why-choose-card-desription">We focus on creating user-friendly interfaces and seamless user experiences. We aim to enhance the web app's usability and drive user engagement within less time.</p>
                                    </div>
                                </div>
                                <div class="ty-why-choose-card-item">
                                    <div class="ty-why-choose-card">
                                        <h3 class="ty-why-choose-card-title">Transparent Communication:</h3>
                                        <p class="ty-why-choose-card-desription">We adopt clear and open communication throughout the development process. Our developers ensure that you stay informed of progress, challenges, and changes timely.</p>
                                    </div>
                                </div>
                                <div class="ty-why-choose-card-item">
                                    <div class="ty-why-choose-card">
                                        <h3 class="ty-why-choose-card-title">Agile Development Methodology:</h3>
                                        <p class="ty-why-choose-card-desription">Utilization of Agile methodologies by our experts allows for flexibility, adaptability, and incremental progress to meet evolving project needs and requirements.
                                        </p>
                                    </div>
                                </div>
                                <div class="ty-why-choose-card-item">
                                    <div class="ty-why-choose-card">
                                        <h3 class="ty-why-choose-card-title">Reasonable Assistance:</h3>
                                        <p class="ty-why-choose-card-desription">We prioritize the financial investments of every business and comprehend budget considerations. Consequently, we provide highly affordable web app development services tailored to cater to businesses of all sizes.</p>
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
                <div class="ty-heading-center">
                    <h2 class="ty-section-title ty-title-border">Drop Your Web App Development Idea Here!</h2>
                    <p class="ty-section-description">Do you want to bring your web app development idea to real life?
                        Need professional web app developers’ assistance? TechnoYuga can be your savior. Let’s connect,
                        discuss your project idea with us, and watch how we convert a revenue-generating web app for
                        you.</p>
                </div>
                <div class="text-center">
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#requestProposalModal" class="btn btn-outline-light">Discuss Your Project</a>
                </div>
            </div>
        </section>
        </section>
    <!-- Want To Discuss Section End -->


    <!-- Technology Stack Section Start -->
        <section class="ty-technology-section pt-0">
            <div class="container">
                <div class="ty-heading-center">
                    <h2 class="ty-section-title ty-title-border">Technology Stack</h2>
                    <p class="ty-section-description">At TechoYuga we use the scalable and trending frameworks and
                        technologies to <a href="mobile-app-development.html"> build Mobile
                        Apps</a> , Backend and Web applications for our clients. </p>
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
                                            framework to <a href="web-app-development.html">develop web applications</a> that meets your expectations.</p>
                                    </div>
                                </div>
                                <div class="nav-link" id="ty-stack-mobile-tab" data-bs-toggle="pill"
                                    data-bs-target="#ty-stack-mobile" role="tab" aria-controls="ty-stack-mobile"
                                    aria-selected="false">
                                    <div class="ty-technology-stack-tab-btn">
                                        <h3 class="ty-stack-tab-title">Mobile Development Stack</h3>
                                        <p class="ty-stack-tab-description">Technoyuga’s <a href="mobile-app-development.html">Mobile App Development</a>
                                            teams follow the
                                            trending tech frameworks for your dream Mobile apps.
                                        </p>
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

        <!-- Our Process Section End -->

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