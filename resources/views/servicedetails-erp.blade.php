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
                    <h4>ERP Solutions</h4>
                    <ul class="breadcumb-list">
                        <li><a href="#">Home</a></li>
                        <li class="list-arrow">&lt;</li>
                        <li>ERP Development</li>
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
<!--start solutek ERP details area -->
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
                            <h4 class="services-details-title">Enterprise Resource Planning (ERP) Solutions</h4>

                            <p class="services-details-desc">
                                Streamline and automate your business operations with our powerful ERP solutions. We design and develop custom ERP systems that integrate all your business processes into a single, centralized platform.
                            </p>

                            <p class="services-details-desc">
                                From finance and HR to inventory, CRM, and workflow automation, our ERP platforms help you improve efficiency, reduce costs, and gain real-time visibility across all departments.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="service-detalis-text-box">
                                    <div class="service-details-content">
                                        <h4>Core Modules</h4>
                                        <p>We build modular ERP systems tailored to your organization’s needs.</p>
                                    </div>
                                    <div class="service-details-list">
                                        <ul>
                                            <li><i class="bi bi-arrow-right"></i>Inventory & Supply Chain Management</li>
                                            <li><i class="bi bi-arrow-right"></i>Finance & Accounting</li>
                                            <li><i class="bi bi-arrow-right"></i>HR & Employee Management</li>
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
                                        <h3>Centralized Business Control</h3>
                                        <p>
                                            Our ERP solutions provide unified dashboards, reporting tools, and automation features that help you manage operations efficiently and make smarter decisions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="tab_container">
                                <div class="feq-content">
                                    <h3 class="faq-title">Frequently Asked Questions</h3>
                                    <p class="faq-description">Find answers about ERP development, customization, and deployment.</p>
                                </div>
                                <div id="tab" class="tab_content">
                                    <ul class="accordion">
                                        <li>
                                            <a>01<span>How long does it take to build an ERP system?</span></a>
                                            <p style="display: none;">
                                                Small ERP setups take 4–8 weeks, while larger enterprise-level systems may take 3–6 months depending on complexity.
                                            </p>
                                        </li>
                                        <li>
                                            <a>02<span>Can you integrate the ERP with existing software?</span></a>
                                            <p style="display: none;">
                                                Yes — we integrate ERPs with CRM, POS, HRM, accounting tools, inventory systems, and custom APIs.
                                            </p>
                                        </li>
                                        <li>
                                            <a>03<span>Do you provide training and support?</span></a>
                                            <p style="display: none;">
                                                Absolutely — we offer complete onboarding, training sessions, documentation, and long-term support.
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
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">ERP Customization<i class="bi bi-arrow-right"></i></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">Process Automation<i class="bi bi-arrow-right"></i></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">Workflow Management<i class="bi bi-arrow-right"></i></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">Data Analytics & Reporting<i class="bi bi-arrow-right"></i></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">System Integration<i class="bi bi-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget-sidber">
                            <div class="widget-sidber-content">
                                <!-- <h4>Downloads</h4> -->
                            </div>
                            <div class="widget-sidber-download-button">
                                <a href="#"><i class="bi bi-file-earmark-pdf"></i>ERP Overview Document<span></span></a>

                                <a class="active" href="#"><i class="bi bi-file-earmark-pdf"></i>ERP Module Checklist<span></span></a>
                            </div>
                        </div>

                        <div class="widget-sidber-contact-box">
                            <div class="widget-sidber-contact">
                                <img src="{{ asset('assets/images/inner-images/sidber-cont-icon.png') }}" alt="">
                            </div>
                            <p class="widget-sidber-contact-text">Talk to Our ERP Experts</p>
                            <h3 class="widget-sidber-contact-number">+123 (4567) 890</h3>
                            <span class="widget-sidber-contact-gmail"><i class="bi bi-envelope-fill"></i>erp@example.com</span>
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
<!-- end solutek ERP details area  -->
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
