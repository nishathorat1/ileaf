<!-- FOOTER
        ================================================== -->
<footer class="bg-dark pt-6 pt-lg-8">
    <div class="container">
        <div class="row mt-n5 pb-6 pb-lg-8">
            <div class="col-sm-6 col-md-6 col-xl-3 mt-5">
                <div class="footer-logo mb-1-9">
                    <a href="index.html"><img src="{{ asset('assets/images/logos/logo.png') }}" alt="..." width="50%" height="50%"></a>
                    <p class="mb-0 text-white opacity6 display-30 font-weight-300">iLeaf Information Technology Pvt. Ltd.</p>
                </div>

            </div>
            <div class="col-sm-6 col-md-6 col-xl-3 mt-5">
                <div class="footer-contact-info ps-sm-5 ps-xl-0">
                    <div class="mb-4">
                        <p class="text-white opacity6 display-29 font-weight-400 mb-1">Need live support?</p>
                        <a href="mailto:info@yourdomain.com" class="text-white text-primary-hover font-weight-500 mb-0">info@ileaf.in</a>
                    </div>
                    <div class="mb-0">
                        <p class="text-white opacity6 display-29 font-weight-400 mb-1">Toll free customer care</p>
                        <a href="tel:+44123456789" class="text-white text-primary-hover font-weight-500 mb-0">+91 7507679192</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-xl-3 mt-5">
                <div>
                    <h3 class="text-white mb-3 font-weight-600 display-28">Sign up for the newsletter</h3>
                    <form class="quform newsletter-form mb-3 w-md-80 w-xl-100" action="quform/newsletter-two.php" method="post" enctype="multipart/form-data" onclick="">

                        <div class="quform-elements">
                            <div class="row">

                                <!-- Begin Text input element -->
                                <div class="col-md-12">
                                    <div class="quform-element mb-0">
                                        <div class="quform-input">
                                            <input class="form-control" id="email_address" type="text" name="email_address" placeholder="Subscribe with us">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Submit button -->
                                <div class="col-md-12">
                                    <div class="quform-submit-inner">
                                        <button class="btn btn-white text-white m-0" type="submit"><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                    <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                </div>
                                <!-- End Submit button -->
                            </div>

                        </div>

                    </form>
                    <div class="d-flex align-items-center w-lg-100 w-xl-80">
                        <div class="me-3">
                            <img src="{{ asset('assets/images/icons/42.png') }}" class="w-35px opacity6" alt="...">
                        </div>
                        <div>
                            <p class="mb-0 text-white opacity6 display-30 font-weight-300">Protecting your privacy</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-2 offset-xl-1 mt-5">
                <div class="ps-sm-5 ps-xl-0">
                    <h3 class="text-white mb-3 font-weight-600 display-28">Social connect</h3>
                    <ul class="list-unstyled d-flex mb-0">
                        <li class="me-3">
                            <a href="https://www.facebook.com/ileaf.in" class="text-white text-primary-hover display-28" target=_blank><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="me-3">
                            <a href="https://www.instagram.com/ileaf_tech/" class="text-white text-primary-hover display-28" target=_blank><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="me-3">
                            <a href="https://twitter.com/ileaftechnology" class="text-white text-primary-hover display-28" target=_blank><i class="fab fa-x-twitter"></i></a>
                        </li>
                        <li class="me-0">
                            <a href="https://www.youtube.com/@mustafakothawala2138" class="text-white text-primary-hover display-28" target=_blank><i class="fab fa-youtube" target=_blank></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div>
        <div class="border-color-light-black border-top pt-8" style="background-color:rgba(255,255,255,0.05);">
            <div class="mt-n5 pb-2 pb-lg-8 footer-bar d-flex justify-content-between align-items-center position-relative">
                <p class="mb-0 text-white opacity7 ps-3" >All Rights Reserved&nbsp;&copy;<span class="current-year pe-1 text-white opacity7"></span>
                <a href="#" class="text-white">Terms of Use</a>&nbsp;&nbsp;
                <a href="{{ url('/privacy-policy') }}" class="text-white">Privacy Policy</a></p>
                <p class="mb-0 text-white opacity7 position-absolute start-50 translate-middle-x text-center">ileaf Information Technology Pvt. Ltd.</p>
            </div>
        </div>
    </div>
</footer>