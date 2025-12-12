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
                    <h4>Agentic AI Services</h4>
                    <ul class="breadcumb-list">
                        <li><a href="#">Home</a></li>
                        <li class="list-arrow">&lt;</li>
                        <li>Agentic Ai</li>
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
<!--start solutek Agentic AI details area -->
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
                            <h4 class="services-details-title">Advanced Agentic AI Solutions</h4>

                            <p class="services-details-desc">
                                Empower your business with next-generation Agentic AI systems that autonomously plan, reason, and execute tasks. Our AI agents reduce manual work, improve efficiency, and handle complex operations with intelligent decision-making.
                            </p>

                            <p class="services-details-desc">
                                From workflow automation to real-time analysis, our Agentic AI framework is built to scale and adapt to your business needs — enabling smarter processes and higher productivity.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="service-detalis-text-box">
                                    <div class="service-details-content">
                                        <h4>Core Capabilities</h4>
                                        <p>Our AI agents autonomously perform tasks, streamline workflows, and deliver actionable insights.</p>
                                    </div>
                                    <div class="service-details-list">
                                        <ul>
                                            <li><i class="bi bi-arrow-right"></i>Process Automation with AI Agents</li>
                                            <li><i class="bi bi-arrow-right"></i>Autonomous Decision-Making</li>
                                            <li><i class="bi bi-arrow-right"></i>AI-Powered Workflow Optimization</li>
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
                                        <h3>Multi-Agent Collaboration</h3>
                                        <p>
                                            Our AI systems coordinate multiple agents to handle complex task flows, enabling parallel execution, faster results, and higher operational accuracy.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="tab_container">
                                <div class="feq-content">
                                    <h3 class="faq-title">Frequently Asked Questions</h3>
                                    <p class="faq-description">Learn more about how Agentic AI works, implementation timelines, and integration capability.</p>
                                </div>
                                <div id="tab" class="tab_content">
                                    <ul class="accordion">
                                        <li>
                                            <a>01<span>What is Agentic AI?</span></a>
                                            <p style="display: none;">
                                                Agentic AI refers to autonomous AI agents capable of planning, reasoning, and executing tasks without constant human intervention.
                                            </p>
                                        </li>
                                        <li>
                                            <a>02<span>Can AI agents integrate with my existing systems?</span></a>
                                            <p style="display: none;">
                                                Yes — our agents integrate seamlessly with CRMs, ERPs, APIs, and custom business applications.
                                            </p>
                                        </li>
                                        <li>
                                            <a>03<span>How long does implementation take?</span></a>
                                            <p style="display: none;">
                                                Most deployments take 2–6 weeks depending on complexity, workflows, and integration requirements.
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
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">AI Workflow Automation<i class="bi bi-arrow-right"></i></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">Knowledge-Based Agents<i class="bi bi-arrow-right"></i></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">Task-Oriented Agents<i class="bi bi-arrow-right"></i></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">Multi-Agent Systems<i class="bi bi-arrow-right"></i></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/inner/category-icon.png') }}" alt="">Autonomous Decision Engines<i class="bi bi-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget-sidber">
                            <div class="widget-sidber-content">
                                <!-- <h4>Downloads</h4> -->
                            </div>
                            <div class="widget-sidber-download-button">
                                <a href="#"><i class="bi bi-file-earmark-pdf"></i>Agentic AI Whitepaper<span></span></a>

                                <a class="active" href="#"><i class="bi bi-file-earmark-pdf"></i>AI Integration Checklist<span></span></a>
                            </div>
                        </div>

                        <div class="widget-sidber-contact-box">
                            <div class="widget-sidber-contact">
                                <img src="{{ asset('assets/images/inner-images/sidber-cont-icon.png') }}" alt="">
                            </div>
                            <p class="widget-sidber-contact-text">Contact Our AI Specialists</p>
                            <h3 class="widget-sidber-contact-number">+123 (4567) 890</h3>
                            <span class="widget-sidber-contact-gmail"><i class="bi bi-envelope-fill"></i>ai-team@example.com</span>
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
<!-- end solutek Agentic AI details area  -->
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
