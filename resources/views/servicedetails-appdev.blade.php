@extends('layout.layout4')

@section('content4')


<!--==================================================-->
<!-- Start solutek breadcumb Area -->
<!--==================================================-->

<div class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcumb-content">
                    <h4>App Development Services</h4>
                    <ul class="breadcumb-list">
                        <li><a href="#">Home</a></li>
                        <li class="list-arrow">&lt;</li>
                        <li>App Development</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==================================================-->
<!-- end solutek breadcumb Area -->
<!--==================================================-->


<!--==================================================-->
<!--start solutek app development details area -->
<!--==================================================-->
<div class="services-details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="services-details-thumb">
                            <img src="{{ asset('assets/images/inner/service-details.png') }}" alt="thumb">
                        </div>
                        <div class="services-details-content">
                            <h4 class="services-details-title">Custom Mobile App Development</h4>

                            <p class="services-details-desc">
                                We build high-performance mobile applications tailored to your business goals. Our team specializes in developing intuitive, fast, and scalable apps for Android, iOS, and cross-platform environments.
                            </p>

                            <p class="services-details-desc">
                                From concept to deployment, we ensure seamless user experiences, modern UI/UX, and robust backend integrations — delivering apps that your customers will love to use.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="service-detalis-text-box">
                                    <div class="service-details-content">
                                        <h4>Core Services</h4>
                                        <p>We offer full-cycle mobile app development from planning to deployment.</p>
                                    </div>
                                    <div class="service-details-list">
                                        <ul>
                                            <li><i class="bi bi-arrow-right"></i>Android App Development</li>
                                            <li><i class="bi bi-arrow-right"></i>iOS App Development</li>
                                            <li><i class="bi bi-arrow-right"></i>Cross-Platform App Development</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="service-details-icon-box">
                                    <div class="service-det-icon">
                                        <img src="{{ asset('assets/images/inner/det-icon.png') }}" alt="icon">
                                    </div>
                                    <div class="service-det-content">
                                        <h3>Modern UI/UX & Performance</h3>
                                        <p>
                                            We create mobile apps with clean interfaces, smooth interactions, and optimized performance — ensuring exceptional user engagement and satisfaction.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="tab_container">
                                <div class="feq-content">
                                    <h3 class="faq-title">Frequently Asked Questions</h3>
                                    <p class="faq-description">Answers to common questions about our mobile development process, platforms, and delivery timelines.</p>
                                </div>
                                <div id="tab" class="tab_content">
                                    <ul class="accordion">
                                        <li>
                                            <a>01<span>How long does it take to build a mobile app?</span></a>
                                            <p style="display: none;">
                                                Simple apps take 4–8 weeks, while advanced or feature-rich apps may take 2–4 months depending on complexity.
                                            </p>
                                        </li>
                                        <li>
                                            <a>02<span>Do you provide app maintenance?</span></a>
                                            <p style="display: none;">
                                                Yes — we offer long-term maintenance, updates, performance monitoring, and feature enhancements.
                                            </p>
                                        </li>
                                        <li>
                                            <a>03<span>Will the app work on both Android and iOS?</span></a>
                                            <p style="display: none;">
                                                Absolutely — we develop native apps as well as cross-platform solutions using frameworks like Flutter and React Native.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="widget-sidber">
                            <div class="widget-sidber-content">
                                <h4>Main Services</h4>
                            </div>
                            <div class="widget-category">
                                <ul>
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">Android Apps<i class="bi bi-arrow-right"></i></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">iOS Apps<i class="bi bi-arrow-right"></i></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">Hybrid Apps<i class="bi bi-arrow-right"></i></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">UI/UX Design<i class="bi bi-arrow-right"></i></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">Backend Integration<i class="bi bi-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget-sidber">
                            <div class="widget-sidber-content">
                                <!-- <h4>Downloads</h4> -->
                            </div>
                            <div class="widget-sidber-download-button">
                                <a href="#"><i class="bi bi-file-earmark-pdf"></i>App Development Guide<span></span></a>

                                <a class="active" href="#"><i class="bi bi-file-earmark-pdf"></i>UI/UX Checklist<span></span></a>
                            </div>
                        </div>

                        <div class="widget-sidber-contact-box">
                            <div class="widget-sidber-contact">
                                <img src="{{ asset('assets/images/inner-images/sidber-cont-icon.png') }}" alt="">
                            </div>
                            <p class="widget-sidber-contact-text">Talk to Our App Development Team</p>
                            <h3 class="widget-sidber-contact-number">+123 (4567) 890</h3>
                            <span class="widget-sidber-contact-gmail"><i class="bi bi-envelope-fill"></i>apps@example.com</span>
                            <div class="widget-sidber-contact-btn">
                                <a href="{{ route('contact') }}">Contact Us <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--==================================================-->
<!-- end solutek app development details area  -->
<!--==================================================-->




<!--==================================================-->
<!-- Start solutek address Area -->
<!--==================================================-->

<div class="address-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="address-box">
                    <div class="address-icon">
                        <img src="{{ asset('assets/images/address1.png') }}" alt="address1">
                    </div>
                    <div class="address-title">
                        <h3>Elevating Customer Experience.</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="address-box2">
                    <div class="address-icon">
                        <img src="{{ asset('assets/images/address2.png') }}" alt="address1">
                    </div>
                    <div class="solutek-btn">
                        <a href="{{ route('contact') }}">+91-9081908145
                            <div class="solutek-hover-btn hover-bx"></div>
                            <div class="solutek-hover-btn hover-bx2"></div>
                            <div class="solutek-hover-btn hover-bx3"></div>
                            <div class="solutek-hover-btn hover-bx4"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==================================================-->
<!-- end solutek address Area -->
<!--==================================================-->

@endsection
