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
                    <h4>Cybersecurity Services</h4>
                    <ul class="breadcumb-list">
                        <li><a href="#">Home</a></li>
                        <li class="list-arrow">&lt;</li>
                        <li>Cybersecurity</li>
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
<!--start solutek cybersecurity details area -->
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
                            <h4 class="services-details-title">Comprehensive Cybersecurity Services</h4>

                            <p class="services-details-desc">Protect your business from evolving cyber threats with our full-spectrum cybersecurity services. We combine industry best practices, advanced tooling, and expert analysts to secure your assets, data, and operations.</p>

                            <p class="services-details-desc">Our services are tailored to meet compliance requirements and reduce risk — from proactive assessments to 24/7 detection and rapid incident response.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="service-detalis-text-box">
                                    <div class="service-details-content">
                                        <h4>Core Offerings</h4>
                                        <p>We deliver a layered security program including assessment, detection, and response — built to your business needs.</p>
                                    </div>
                                    <div class="service-details-list">
                                        <ul>
                                            <li><i class="bi bi-arrow-right"></i>Risk & Vulnerability Assessments</li>
                                            <li><i class="bi bi-arrow-right"></i>Penetration Testing </li>
                                            <li><i class="bi bi-arrow-right"></i>Managed Detection & Response</li>
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
                                        <h3>Incident Response & Forensics</h3>
                                        <p>Rapid containment, root-cause analysis, and remediation guidance to get you back to business and harden systems against repeat incidents.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="tab_container">
                                <div class="feq-content">
                                    <h3 class="faq-title">Frequently Asked Questions</h3>
                                    <p class="faq-description">Find answers about our approach, timelines, and how we integrate with your teams and technology stack.</p>
                                </div>
                                <div id="tab" class="tab_content">
                                    <ul class="accordion">
                                        <li>
                                            <a>01<span>How long does a penetration test take?</span></a>
                                            <p style="display: none;">Timelines vary by scope — typical engagements run 1–4 weeks depending on environment size and test depth.</p>
                                        </li>
                                        <li>
                                            <a>02<span>Do you provide 24/7 monitoring?</span></a>
                                            <p style="display: none;">Yes — our MDR offering includes continuous monitoring, threat hunting, and alert triage.</p>
                                        </li>
                                        <li>
                                            <a>03<span>Can you help with compliance (ISO/PCI/GDPR)?</span></a>
                                            <p style="display: none;">We assist with gap assessments, controls implementation, and evidence collection to support audits.</p>
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
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">Risk Assessment<i class="bi bi-arrow-right"></i></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">Penetration Testing<i class="bi bi-arrow-right"></i></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">Managed Detection<i class="bi bi-arrow-right"></i></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">Incident Response<i class="bi bi-arrow-right"></i></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">Security Architecture<i class="bi bi-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>                        
                        <div class="widget-sidber">
                            <div class="widget-sidber-content">
                                <!-- <h4>Downloads</h4> -->
                            </div>
                            <div class="widget-sidber-download-button">
                                <a href="#"><i class="bi bi-file-earmark-pdf"></i>Security Whitepaper<span></span></a>

                                <a class="active" href="#"><i class="bi bi-file-earmark-pdf"></i>Compliance Checklist<span></span></a>
                            </div>
                        </div>
                        <div class="widget-sidber-contact-box">
                            <div class="widget-sidber-contact">
                                <img src="{{ asset('assets/images/inner-images/sidber-cont-icon.png') }}" alt="">
                            </div>
                            <p class="widget-sidber-contact-text">Contact Our Security Team</p>
                            <h3 class="widget-sidber-contact-number">+123 (4567) 890</h3>
                            <span class="widget-sidber-contact-gmail"><i class="bi bi-envelope-fill"></i>security@example.com</span>
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
<!-- end solutek cybersecurity details area  -->
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
