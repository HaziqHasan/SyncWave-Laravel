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
                    <h4>Robotic Process Automation (RPA)</h4>
                    <ul class="breadcumb-list">
                        <li><a href="#">Home</a></li>
                        <li class="list-arrow">&lt;</li>
                        <li>Robotic Process Automation</li>
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
<!--start solutek RPA details area -->
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
                            <h4 class="services-details-title">Robotic Process Automation Services</h4>

                            <p class="services-details-desc">
                                Automate repetitive, rule-based tasks and streamline your business operations with our advanced RPA solutions. Our bots work tirelessly to improve productivity, reduce errors, and enhance process efficiency.
                            </p>

                            <p class="services-details-desc">
                                Whether you want to automate data entry, reporting, workflows, or backend tasks, our RPA implementation ensures accuracy, scalability, and seamless integration with your existing systems.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="service-detalis-text-box">
                                    <div class="service-details-content">
                                        <h4>Core Services</h4>
                                        <p>We build intelligent automation systems to simplify your daily operations.</p>
                                    </div>
                                    <div class="service-details-list">
                                        <ul>
                                            <li><i class="bi bi-arrow-right"></i>Workflow Automation</li>
                                            <li><i class="bi bi-arrow-right"></i>Data Extraction & Processing</li>
                                            <li><i class="bi bi-arrow-right"></i>Automated Reporting</li>
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
                                        <h3>Intelligent Automation</h3>
                                        <p>
                                            We combine traditional RPA with AI-powered decision-making to create smarter bots capable of adapting to complex tasks and dynamic workflows.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="tab_container">
                                <div class="feq-content">
                                    <h3 class="faq-title">Frequently Asked Questions</h3>
                                    <p class="faq-description">Find answers about RPA implementation, cost, and business benefits.</p>
                                </div>
                                <div id="tab" class="tab_content">
                                    <ul class="accordion">
                                        <li>
                                            <a>01<span>Which processes can be automated?</span></a>
                                            <p style="display: none;">
                                                Any repetitive, rule-based, and high-volume tasks — such as data entry, invoice processing, CRM updates, and report generation.
                                            </p>
                                        </li>
                                        <li>
                                            <a>02<span>How long does RPA implementation take?</span></a>
                                            <p style="display: none;">
                                                Most RPA setups take 1–4 weeks depending on complexity, integrations, and testing requirements.
                                            </p>
                                        </li>
                                        <li>
                                            <a>03<span>Do bots require maintenance?</span></a>
                                            <p style="display: none;">
                                                Yes — we provide ongoing monitoring, updates, and optimization to ensure continuous performance and reliability.
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
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">Bot Development<i class="bi bi-arrow-right"></i></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">Process Automation<i class="bi bi-arrow-right"></i></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">AI-Assisted Automation<i class="bi bi-arrow-right"></i></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">System Integration<i class="bi bi-arrow-right"></i></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">Performance Monitoring<i class="bi bi-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget-sidber">
                            <div class="widget-sidber-content">
                                <!-- <h4>Downloads</h4> -->
                            </div>
                            <div class="widget-sidber-download-button">
                                <a href="#"><i class="bi bi-file-earmark-pdf"></i>RPA Implementation Guide<span></span></a>

                                <a class="active" href="#"><i class="bi bi-file-earmark-pdf"></i>Automation Checklist<span></span></a>
                            </div>
                        </div>

                        <div class="widget-sidber-contact-box">
                            <div class="widget-sidber-contact">
                                <img src="{{ asset('assets/images/inner-images/sidber-cont-icon.png') }}" alt="">
                            </div>
                            <p class="widget-sidber-contact-text">Talk to Our RPA Experts</p>
                            <h3 class="widget-sidber-contact-number">+123 (4567) 890</h3>
                            <span class="widget-sidber-contact-gmail"><i class="bi bi-envelope-fill"></i>rpa@example.com</span>
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
<!-- end solutek RPA details area  -->
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
