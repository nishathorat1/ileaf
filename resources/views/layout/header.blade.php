           <div class="navbar-default border-bottom border-color-light-white">

                <!-- start top search -->
                <div class="top-search bg-primary">
                    <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
                        <form class="search-form" action="search.html" method="GET" accept-charset="utf-8">
                            <div class="input-group">
                                <span class="input-group-addon cursor-pointer">
                                    <button class="search-form_submit fas fa-search text-white" type="submit"></button>
                                </span>
                                <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">
                                <span class="input-group-addon close-search mt-1"><i class="fas fa-times"></i></span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end top search -->

                <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-12">
                            <div class="menu_area alt-font">
                                <nav class="navbar navbar-expand-lg navbar-light p-0">
                                    <div class="navbar-header navbar-header-custom">
                                        <!-- start logo -->
                                        <a href="{{ url('/') }}" class="navbar-brand"><img id="logo" src="{{ asset('assets/images/logos/logo.png') }}" alt="logo" /></a>
                                        <!-- end logo -->
                                    </div>

                                    <div class="navbar-toggler bg-primary"></div>

                                    <!-- start menu area -->
                                    <ul class="navbar-nav ms-auto" id="nav" style="display: none;">
                                        <li>
                                            <a href="{{ url('/') }}">Home</a>
                                           
                                        </li>
                                         <li>
                                            <a href="{{url('/services') }}">Service</a>
                                               <ul class="row megamenu" style="left:0; width:80%">
                                                <li class="col-lg-3">
                                                   <ul>
                                                        <li><a href="{{ route('services.web') }}"><i class="fas fa-globe me-3"></i>Web Application Development</a></li>
                                                   </ul>
                                                </li>
                                                <li class="col-lg-3">
                                                   <ul>
                                                        <li><a href="{{ route('services.mobileapp') }}"><i class="fas fa-mobile-screen-button me-3"></i>Mobile Application Development</a></li>
                                                   </ul>
                                                </li>
                                                <li class="col-lg-3">
                                                   <ul>
                                                        <li><a href="{{ route('services.iot') }}"><i class="fas fa-satellite-dish me-3"></i>IoT Development</a></li>
                                                   </ul>
                                                </li>   
                                                <li class="col-lg-3">
                                                   <ul>
                                                        <li><a href="{{ route('services.cloud') }}"><i class="fas fa-cloud me-3"></i>Cloud Transformation</a></li>
                                                   </ul>
                                                </li>
                                                                                                 
                                              </ul>

                                        </li>
                                         <li>
                                            <a href="{{ url('/solutions') }}">Solutions</a>                                           
                                        </li>
                                         <li>
                                            <a href="{{ url('/about-us') }}">About Us</a>
                                           
                                        </li>
                                        <li>
                                            <a href="{{ url('/portfolio') }}">Portfolio</a>
                                            <!-- <ul>
                                                <li><a href="#!">Portfolio Grid</a>
                                                    <ul>
                                                        <li><a href="portfolio-two-columns.html">2 Columns</a></li>
                                                        <li><a href="portfolio.html">3 Columns - Standard</a></li>
                                                        <li><a href="portfolio-four-columns.html">4 Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                            </ul> -->
                                        </li>
                                        <li>
                                            <a href="{{ url('/blogs') }}">Blog</a>
                                            <!-- <ul>
                                                <li><a href="#!">Blog Grid</a>
                                                    <ul>
                                                        <li><a href="blog-grid-two-columns.html">2 Columns</a></li>
                                                        <li><a href="blog-grid-two-columns-left-sidebar.html">2 Col – Left Sidebar</a></li>
                                                        <li><a href="blog-grid-two-columns-right-sidebar.html">2 Col – Right Sidebar</a></li>
                                                        <li><a href="blog-grid.html">3 Columns - Standard</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul> -->
                                        </li>
                                          <li>
                                            <a href="#!">Pages</a>
                                            <ul>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="how-we-work.html">How We Work</a></li>
                                                <li><a href="faq.html">FAQ's</a></li>
                                                <li>
                                                    <a href="#!">Our Team</a>
                                                    <ul>
                                                        <li><a href="team.html">Our Team</a></li>
                                                        <li><a href="team-details.html">Team Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="pricing.html">Pricing Plans</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                <li><a href="404-page.html">404 Page</a></li>
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                            </ul>
                                        </li>                                     
                                      
                                        <li>
                                            <a href="#!">Elements</a>
                                            <ul class="row megamenu">
                                                <li class="col-lg-3">
                                                    <span class="mb-0 mb-lg-2 d-block py-2 p-lg-0 px-4 px-lg-0 text-uppercase sub-title font-weight-700 display-30">Elements 01</span>
                                                    <ul>
                                                        <li><a href="accordion.html"><i class="fas fa-sliders-h me-3"></i>Accordions</a></li>
                                                        <li><a href="alerts.html"><i class="far fa-bell me-2"></i>Alerts</a></li>
                                                        <li><a href="blockquotes.html"><i class="fas fa-vector-square me-2"></i>Blockquote</a></li>
                                                        <li><a href="buttons.html"><i class="fas fa-link me-2"></i>Buttons</a></li>
                                                        <li><a href="call-to-action.html"><i class="far fa-square me-2"></i>Call to Action</a></li>
                                                        <li><a href="carousel-slider.html"><i class="far fa-images me-2"></i>Carousel Slider</a></li>
                                                        <li><a href="count-down.html"><i class="far fa-flag me-2"></i>Count Down</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-lg-3">
                                                    <span class="mb-0 mb-lg-2 d-block py-2 p-lg-0 px-4 px-lg-0 text-uppercase sub-title font-weight-700 display-30">Elements 02</span>
                                                    <ul>
                                                        <li><a href="counter.html"><i class="fas fa-compress me-2"></i>Counters</a></li>
                                                        <li><a href="dropcaps.html"><i class="far fa-closed-captioning me-2"></i>Dropcaps</a></li>
                                                        <li><a href="forms.html"><i class="fab fa-wpforms me-2"></i>Forms</a></li>
                                                        <li><a href="form-elements.html"><i class="fas fa-cubes me-2"></i>Form Elements</a></li>
                                                        <li><a href="font-icons.html"><i class="far fa-check-square me-2"></i>Font Icons</a></li>
                                                        <li><a href="google-map.html"><i class="fas fa-map-marker-alt me-2"></i>Google Map</a></li>
                                                        <li><a href="grid-system.html"><i class="fas fa-th me-2"></i>Grid System</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-lg-3">
                                                    <span class="mb-0 mb-lg-2 d-block py-2 p-lg-0 px-4 px-lg-0 text-uppercase sub-title font-weight-700 display-30">Elements 03</span>
                                                    <ul>
                                                        <li><a href="highlights.html"><i class="fas fa-highlighter me-2"></i>Highlights</a></li>
                                                        <li><a href="header-1.html"><i class="fas fa-compress me-2"></i>Header Style 01</a></li>
                                                        <li><a href="header-2.html"><i class="fas fa-compress-arrows-alt me-2"></i>Header Style 02</a></li>
                                                        <li><a href="header-3.html"><i class="fa-solid fa-arrows-to-eye me-2"></i>Header Style 03</a></li>
                                                        <li><a href="icon-with-text.html"><i class="fab fa-fonticons-fi me-2"></i>Icon With Text</a></li>
                                                        <li><a href="list-styles.html"><i class="fas fa-list-ul me-2"></i>List Styles</a></li>
                                                        <li><a href="media-object.html"><i class="fas fa-photo-video me-2"></i>Media Object</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-lg-3">
                                                    <span class="mb-0 mb-lg-2 d-block py-2 p-lg-0 px-4 px-lg-0 text-uppercase sub-title font-weight-700 display-30">Elements 04</span>
                                                    <ul>
                                                        <li><a href="modal.html"><i class="fas fa-expand me-2"></i>Modal</a></li>
                                                        <li><a href="pagination.html"><i class="far fa-caret-square-right me-2"></i>Pagination</a></li>
                                                        <li><a href="progress-bar.html"><i class="fas fa-tasks me-2"></i>Progress Bars</a></li>
                                                        <li><a href="tables.html"><i class="fas fa-table me-2"></i>Tables</a></li>
                                                        <li><a href="tabs.html"><i class="fas fa-sliders-h me-2"></i>Tabs</a></li>
                                                        <li><a href="typography.html"><i class="fas fa-text-height me-2"></i>Typography</a></li>
                                                        <li><a href="video.html"><i class="fas fa-video me-2"></i>Videos</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- end menu area -->

                                    <!-- start attribute navigation -->
                                    <div class="attr-nav align-items-xl-center ms-xl-auto main-font">
                                        <ul>
                                            <li class="search"><a href="{{ url('/search') }}"><i class="fas fa-search"></i></a></li>
                                            <li class="d-none d-xl-inline-block"><a href="{{ url('/contact-us') }}" class="butn-style2 md text-white"><span>Free Quote</span></a></li>
                                        </ul>
                                    </div>
                                    <!-- end attribute navigation -->

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 