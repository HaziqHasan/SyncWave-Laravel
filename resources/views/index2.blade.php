@extends('layout.layout2')

@section('content2')

<!--==================================================-->
	<!-- Start Main Side bar -->
<!--==================================================-->
    <div class="xs-sidebar-group info-group">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <!-- widget button -->
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">
                        <i class="far fa-times-circle"></i>
                    </a>
                </div>
                <div class="sidebar-textwidget">
                    <!-- Sidebar Info Content -->
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
								<div class="nav-logo">
								<a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"></a>
							</div>
                            <!-- widget search -->
                            <div class="widget-search">
                                <div class="widget">
                                    <form action="https://formspree.io/f/myyleorq" method="POST">
                                        <input id="search2" type="text" name="s" value="" placeholder="Search Product" title="Search for:" autocomplete="off">
                                        <button type="submit" class="icon">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!-- Widget wrapper End -->
                            <div class="product-category">
                                <!-- widget title -->
                                <h3 class="widget-title">Product Categories</h3>
                                <ul class="list-style-one">
                                    <li><a href="#">IT Solutions<span>(5)</span></a></li>
                                    <li><a href="#">Businesses<span>(6)</span></a></li>
                                    <li><a href="#">IT Service<span>(4)</span></a></li>
                                    <li><a href="#">UI/UX Design<span>(8)</span></a></li>
                                </ul>
                            </div>
                            <!-- Recent Gallery -->
                            <div class="recent-gallery">
                                <!-- widget title -->
                                <h3 class="widget-title">Recent Post</h3>
                                <ul>
                                    <li>
                                        <div class="widget-gallery-thumb">
											<a href="#"><img src="{{ asset('assets/images/inner/recent-post.png') }}" alt=""></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="widget-gallery-thumb">
											<a href="#"><img src="{{ asset('assets/images/inner/recent-post2.png') }}" alt=""></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="widget-gallery-thumb">
											<a href="#"><img src="{{ asset('assets/images/inner/recent-post3.png') }}" alt=""></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="widget-gallery-thumb">
											<a href="#"><img src="{{ asset('assets/images/inner/recent-post4.png') }}" alt=""></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="widget-gallery-thumb">
                                            <a href="#"><img src="assets/images/inner/recent-post3.png" alt=""></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="widget-gallery-thumb">
                                            <a href="#"><img src="assets/images/inner/recent-post2.png" alt=""></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- widget title -->
                            <h3 class="widget-title">Tags</h3>
                            <div class="sidebar-tag-item">
                                <ul>
                                    <li><a href="#">Developer</a></li>
                                    <li><a href="#">UI Designer</a></li>
                                    <li><a href="#">Marketing</a></li>
									<li><a href="#">Business</a></li>
                                </ul>
                            </div>
                            <!-- Social icon -->
                            <div class="category-icon">
                                <!-- widget title -->
                                <h3 class="widget-title">Social List</h3>
                                <div class="follow-company-icon style-two">
                                    <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                    <a href="#"> <i class="fab fa-pinterest"></i> </a>
                                    <a href="#"> <i class="fab fa-instagram"> </i> </a>
                                    <a href="#"> <i class="fab fa-google"></i> </a>
                                </div>
                            </div>
                            <!-- icon End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--==================================================-->
<!-- Start Main Side bar -->
<!--==================================================-->





<!--==================================================-->
<!-- Start solutek hero Area style-two-->
<!--==================================================-->


	<div class="hero-area style-two d-flex align-items-center">
		<div class="container">
			<div class="row hero align-items-center">
				<div class="col-lg-6">
					<div class="hero-contant">
						<h5>SOLUTEK IT SERVICES</h5>
						<h1>Empowering Your</h1>
						<h1>Digital Future</h1>
						<p>Where your interests international networks intersect provid custom software solutions for any value software.</p>
						<div class="solutek-btn">
							<a href="{{ route('about') }}" class="btn-2">EXPLORE MORE</a>
						</div>
							<div class="hero-btn-shape bounce-animate-3">
							<img src="{{ asset('assets/images/home-two/hero-btn-shape.png') }}" alt="shape">
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="hero-thumb">
						<img src="{{ asset('assets/images/home-two/hero2-thu.png') }}" alt="hero-thumb">

						<div class="hero-thumb-shape bounce-animate-3">
							<img src="{{ asset('assets/images/home-two/hero2-shape.png') }}" alt="shape">
						</div>
						<div class="hero-thumb-shape2 rotateme">
							<img src="{{ asset('assets/images/home-two/border-shape.png') }}" alt="shape">
						</div>
						<div class="hero-video-icon">	
							<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://www.youtube.com/watch?v=Wx48y_fOfiY"><i class="bi bi-play"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--==================================================-->
<!-- end solutek hero Area -->
<!--==================================================-->




<!--==================================================-->
	<!-- Start solutek marquee-section  -->
<!--==================================================-->
	<section class="marquee-section">
		<div class="inner-container">
			<div class="marquee">
				<div class="marquee-block"> 
					<!-- content-box -->
					<div class="content-box">
						<h6 class="title"><a href="#"><i class="fas fa-star-of-life"></i>Experience Seamless IT Solutions</a></h6>
					</div>
					<!-- content-box -->
					<div class="content-box">
						<h6 class="title"><a href="#"><i class="fas fa-star-of-life"></i>Experience Seamless IT Solutions</a></h6>
					</div>
					<!-- content-box -->
					<div class="content-box">
						<h6 class="title"><a href="#"><i class="fas fa-star-of-life"></i>Experience Seamless IT Solutions</a></h6>
					</div>
				</div>
				<div class="marquee-block"> 
					<!-- content-box -->
					<div class="content-box">
						<h6 class="title"><a href="#"><i class="fas fa-star-of-life"></i>Experience Seamless IT Solutions</a></h6>
					</div>
					<!-- content-box -->
					<div class="content-box">
						<h6 class="title"><a href="#"><i class="fas fa-star-of-life"></i>Experience Seamless IT Solutions</a></h6>
					</div>
					<!-- content-box -->
					<div class="content-box">
						<h6 class="title"><a href="#"><i class="fas fa-star-of-life"></i>Experience Seamless IT Solutions</a></h6>
					</div>
				</div>
		  	</div>
		</div>
	</section>
<!--==================================================-->
<!-- End solutek marquee-section  -->
<!--==================================================-->




<!--==================================================-->
<!-- start solutek service Area style two-->
<!--==================================================-->
<div class="service-area style-two">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h5 class="section-sub-title">SOLUTEK SERVICES</h5>
					<h1 class="section-main-title">We Provide Exclusive Service</h1>
					<h1 class="section-main-title">For Your Business</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-service-box">
					<div class="service-box-inner">
						<div class="service-content">
							<h4 class="service-title">Augmented Reality</h4>
							<p class="service-des">paradigms. Monotonectally extend open-source
								mvia competitive methods of empowerment dri
								revolutionize stand- business
							</p>
						</div>
						<div class="service-icon">
							<img src="assets/images/home-two/service-icon.png" alt="icon">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-service-box">
					<div class="service-box-inner">
						<div class="service-content">
							<h4 class="service-title">Managed IT Services</h4>
							<p class="service-des">paradigms. Monotonectally extend open-source
								mvia competitive methods of empowerment dri
								revolutionize stand- business
							</p>
						</div>
						<div class="service-icon">
							<img src="assets/images/home-two/service-icon2.png" alt="icon">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-service-box">
					<div class="service-box-inner">
						<div class="service-content">
							<h4 class="service-title">Machine Learning</h4>
							<p class="service-des">paradigms. Monotonectally extend open-source
								mvia competitive methods of empowerment dri
								revolutionize stand- business
							</p>
						</div>
						<div class="service-icon">
							<img src="assets/images/home-two/ser-icon3.png" alt="icon">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
<!--==================================================-->
<!-- end solutek service Area style two-->
<!--==================================================-->





<!--==================================================-->
<!-- start solutek about Area style two-->
<!--==================================================-->

<div class="about-area style-two">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="about-thumbail">
					<div class="about-thumb">
						<img src="assets/images/home-two/about-thu2.png" alt="about-thumb">	
					</div>
					<div class="about-shape">
						<img src="assets/images/home-two/about-shape.png" alt="about1">
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="about-section-content">
					<div class="section-title text-left">
						<h5 class="section-sub-title">SOLUTEK COMPANY</h5>
						<h1 class="section-main-title">Essential IT Solutions for</h1>
						<h1 class="section-main-title">Modern Businesses</h1>
						<p class="section-title-descr">Monotonectally repurpose maintainable infrastruct whereas solutek in
							fermentum quis tempo sapien maximus design.</p>
					</div>
					<div class="about-list-item">
						<ul>
							<li><img src="assets/images/home-two/about-icon2.png" alt="icon">Website & Mobile application design & Development</li>
							<li><img src="assets/images/home-two/about-icon2.png" alt="icon">Professional User Experince & Interface researching</li>
						</ul>
					</div>
					<div class="solutek-btn">
						<a href="{{ route('about') }}" class="btn-2">EXPLORE MORE</a>
					</div>
					<div class="about-contact-box">
						<div class="call-box">
							<div class="about-contact">
								<img src="assets/images/home-two/call-icon.png" alt="icon">
							</div>
							<div class="about-contact-content">
								<h4>Contact Us</h4>
								<p>12 345 6732 5894</p>
							</div>
						</div>
				   </div>
				</div>	
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- end solutek about Area style-two-->
<!--==================================================-->




<!--==================================================-->
<!--start solutek team Area style-two-->
<!--==================================================-->
<div class="team-area style-two">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h5 class="section-sub-title">OUR TEAM MEMBER</h5>
					<h1 class="section-main-title">Dedicated Team Members</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-team-box">
					<div class="single-team-thumb">
						<img src="assets/images/home-two/team-thu.png" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="{{ route('teamdetails') }}">Al-Amin Hossain</a></h4>
								<p>UI/UX DESIGNER</p>
							</div>
							<div class="team-social-icon">
								<ul>
									<li><a href="#">facebook</a></li>
									<li><a href="#">twitter</a></li>
									<li><a href="#">behance</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-team-box">
					<div class="single-team-thumb">
						<img src="assets/images/home-two/team-thu2.png" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="{{ route('teamdetails') }}">Al-Amin Hossain</a></h4>
								<p>UI/UX DESIGNER</p>
							</div>
							<div class="team-social-icon">
								<ul>
									<li><a href="#">facebook</a></li>
									<li><a href="#">twitter</a></li>
									<li><a href="#">behance</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-team-box">
					<div class="single-team-thumb">
						<img src="assets/images/home-two/team-thu3.png" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="{{ route('teamdetails') }}">Al-Amin Hossain</a></h4>
								<p>UI/UX DESIGNER</p>
							</div>
							<div class="team-social-icon">
								<ul>
									<li><a href="#">facebook</a></li>
									<li><a href="#">twitter</a></li>
									<li><a href="#">behance</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-team-box">
					<div class="single-team-thumb">
						<img src="assets/images/home-two/team-thu4.png" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="{{ route('teamdetails') }}">Al-Amin Hossain</a></h4>
								<p>UI/UX DESIGNER</p>
							</div>
							<div class="team-social-icon">
								<ul>
									<li><a href="#">facebook</a></li>
									<li><a href="#">twitter</a></li>
									<li><a href="#">behance</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- end solutek team Area style-two-->
<!--==================================================-->




<!--==================================================-->
<!-- start solutek project Area style-two-->
<!--==================================================-->

<div class="project-area styl-two">
	<div class="container-fluid">
		<div class="row project-section">
			<div class="col-lg-6">
				<div class="section-title text-left">
					<h5 class="section-sub-title">OUR PROJECT NOW</h5>
					<h1 class="section-main-title">Technology's Evolution</h1>
					<h1 class="section-main-title">Towards Brilliance</h1>
				</div>
			</div>
			<div class="col-lg-6">
			</div>
		</div>
		<div class="row project-carousel">
			<div class="project_item owl-carousel">
				<div class="col-xl-12 col-lg-12">
					<div class="project-single-box">
						<div class="project-thumb">
							<img src="assets/images/home-two/project-thu.png" alt="project-thumb">
						</div>
						<div class="project-content">
							<h4 class="project-title"><a href="{{ route('projectdetails') }}">Product Development</a></h4>
							<p class="project-des">Creative Theme</p>
						</div>
						<div class="project-icon">
							<span><i class="bi bi-arrow-right"></i></span>
						</div>
						<div class="project-shape">
							<img src="assets/images/home-two/border-shape.png" alt="shape">
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12">
					<div class="project-single-box">
						<div class="project-thumb style-two">
							<img src="assets/images/home-two/project-thu2.png" alt="project-thumb">
						</div>
						<div class="project-content">
							<h4 class="project-title"><a href="{{ route('projectdetails') }}">Product Development</a></h4>
							<p class="project-des">Creative Theme</p>
						</div>
						<div class="project-icon">
							<span><i class="bi bi-arrow-right"></i></span>
						</div>
						<div class="project-shape">
							<img src="assets/images/home-two/border-shape.png" alt="shape">
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12">
					<div class="project-single-box">
						<div class="project-thumb style-three">
							<img src="assets/images/home-two/project-thu3.png" alt="project-thumb">
						</div>
						<div class="project-content">
							<h4 class="project-title"><a href="{{ route('projectdetails') }}">Product Development</a></h4>
							<p class="project-des">Creative Theme</p>
						</div>
						<div class="project-icon">
							<span><i class="bi bi-arrow-right"></i></span>
						</div>
						<div class="project-shape">
							<img src="assets/images/home-two/border-shape.png" alt="shape">
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12">
					<div class="project-single-box">
						<div class="project-thumb style-four">
							<img src="assets/images/home-two/project-thu4.png" alt="project-thumb">
						</div>
						<div class="project-content">
							<h4 class="project-title"><a href="{{ route('projectdetails') }}">Product Development</a></h4>
							<p class="project-des">Creative Theme</p>
						</div>
						<div class="project-icon">
							<span><i class="bi bi-arrow-right"></i></span>
						</div>
						<div class="project-shape rotateme">
							<img src="assets/images/home-two/border-shape.png" alt="shape">
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12">
					<div class="project-single-box">
						<div class="project-thumb">
							<img src="assets/images/home-two/project-thu.png" alt="project-thumb">
						</div>
						<div class="project-content">
							<h4 class="project-title"><a href="{{ route('projectdetails') }}">Product Development</a></h4>
							<p class="project-des">Creative Theme</p>
						</div>
						<div class="project-icon">
							<span><i class="bi bi-arrow-right"></i></span>
						</div>
						<div class="project-shape">
							<img src="assets/images/home-two/border-shape.png" alt="shape">
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12">
					<div class="project-single-box">
						<div class="project-thumb style-two">
							<img src="assets/images/home-two/project-thu2.png" alt="project-thumb">
						</div>
						<div class="project-content">
							<h4 class="project-title"><a href="{{ route('projectdetails') }}">Product Development</a></h4>
							<p class="project-des">Creative Theme</p>
						</div>
						<div class="project-icon">
							<span><i class="bi bi-arrow-right"></i></span>
						</div>
						<div class="project-shape">
							<img src="assets/images/home-two/border-shape.png" alt="shape">
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12">
					<div class="project-single-box">
						<div class="project-thumb style-three">
							<img src="assets/images/home-two/project-thu3.png" alt="project-thumb">
						</div>
						<div class="project-content">
							<h4 class="project-title"><a href="{{ route('projectdetails') }}">Product Development</a></h4>
							<p class="project-des">Creative Theme</p>
						</div>
						<div class="project-icon">
							<span><i class="bi bi-arrow-right"></i></span>
						</div>
						<div class="project-shape">
							<img src="assets/images/home-two/border-shape.png" alt="shape">
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12">
					<div class="project-single-box">
						<div class="project-thumb style-four">
							<img src="assets/images/home-two/project-thu4.png" alt="project-thumb">
						</div>
						<div class="project-content">
							<h4 class="project-title"><a href="{{ route('projectdetails') }}">Product Development</a></h4>
							<p class="project-des">Creative Theme</p>
						</div>
						<div class="project-icon">
							<span><i class="bi bi-arrow-right"></i></span>
						</div>
						<div class="project-shape rotateme">
							<img src="assets/images/home-two/border-shape.png" alt="shape">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="project-bg-shape rotateme">
		<img src="assets/images/home-two/project-bg-shape.png" alt="shape">
	</div>
</div>


<!--==================================================-->
<!-- end solutek project Area style-two-->
<!--==================================================-->






<!--==================================================-->
<!-- start solutek-brand Area -->
<!--==================================================-->

<div class="brand-area">
	<div class="container">
		<div class="row">
			<div class="brand_list owl-carousel">
				<div class="col-lg-12">
					<div class="brand-box">
						<div class="brand-thumb">
							<img src="assets/images/brand-img.png" alt="brand img">
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="brand-box">
						<div class="brand-thumb">
							<img src="assets/images/brand-img1.png" alt="brand img">
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="brand-box">
						<div class="brand-thumb">
							<img src="assets/images/brand-img2.png" alt="brand img">
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="brand-box">
						<div class="brand-thumb">
							<img src="assets/images/brand-img3.png" alt="brand img">
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="brand-box">
						<div class="brand-thumb">
							<img src="assets/images/brand-img4.png" alt="brand img">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- end solutek-brand Area -->
<!--==================================================-->





<!--==================================================-->
<!-- Start solutek testimonial Area style-two-->
<!--==================================================-->

<div class="testimonial-area style-two">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h5 class="section-sub-title">CLIENTS FEEDBACK</h5>
					<h1 class="section-main-title">Perspectives and Experiences</h1>
				</div>
			</div>
			<div class="row">
				<div class="testi_list owl-carousel">
					<div class="col-lg-12 col-md-12">
						<div class="testi-box">
							<div class="testi-single-box">
								<div class="testi-box-inner">
									<div class="testi-icon">
										<img src="assets/images/testi1.png" alt="testi1">
									</div>
									<div class="testi-content">
										<p class="testi-desc">paradigms. Monotonectally extend open-source
										mvia competitive methods of empowerment dri
										revolutionize stand- business</p>
										<ul class="testi-rating">
											<li><i class="bi bi-star-fill"></i></li>
											<li><i class="bi bi-star-fill"></i></li>
											<li><i class="bi bi-star-fill"></i></li>
											<li><i class="bi bi-star-fill"></i></li>
											<li><i class="bi bi-star-fill"></i></li>
										</ul>
										<h3 class="testi-user-name">D. Hosain Al-Amin<span>DEVELOPER</span></h3>
									</div>
								</div>
								<div class="testi-author">
									<img src="assets/images/home-two/test-autor.png" alt="testi">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="testi-box">
							<div class="testi-single-box">
								<div class="testi-box-inner">
									<div class="testi-icon">
										<img src="assets/images/testi1.png" alt="testi">
									</div>
									<div class="testi-content">
										<p class="testi-desc">paradigms. Monotonectally extend open-source
										mvia competitive methods of empowerment dri
										revolutionize stand- business</p>
										<ul class="testi-rating">
											<li><i class="bi bi-star-fill"></i></li>
											<li><i class="bi bi-star-fill"></i></li>
											<li><i class="bi bi-star-fill"></i></li>
											<li><i class="bi bi-star-fill"></i></li>
											<li><i class="bi bi-star-fill"></i></li>
										</ul>
										<h3 class="testi-user-name">D. Jackline Techie<span>UI DESIGNER</span></h3>
									</div>
								</div>
								<div class="testi-author">
									<img src="assets/images/home-two/test-autor2.png" alt="testi2">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="testi-box">
							<div class="testi-single-box">
								<div class="testi-box-inner">
									<div class="testi-icon">
										<img src="assets/images/testi1.png" alt="testi1">
									</div>
									<div class="testi-content">
										<p class="testi-desc">paradigms. Monotonectally extend open-source
										mvia competitive methods of empowerment dri
										revolutionize stand- business</p>
										<ul class="testi-rating">
											<li><i class="bi bi-star-fill"></i></li>
											<li><i class="bi bi-star-fill"></i></li>
											<li><i class="bi bi-star-fill"></i></li>
											<li><i class="bi bi-star-fill"></i></li>
											<li><i class="bi bi-star-fill"></i></li>
										</ul>
										<h3 class="testi-user-name">Ms. Serana Belluci<span>MARKETING</span></h3>
									</div>
								</div>
								<div class="testi-author">
									<img src="assets/images/home-two/test-autor3.png" alt="testi3">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- end solutek testimonial Area style-two-->
<!--==================================================-->




<!--==================================================-->
<!-- start project-area styl-three -->
<!--==================================================-->

<div class="project-area style-three">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-7">
				<div class="section-title text-left">
					<h5 class="section-sub-title">OUR PROJECT NOW</h5>
					<h1 class="section-main-title">The Essence of Our Easy</h1>
					<h1 class="section-main-title">Working Process</h1>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="section-title text-left">
					<p class="section-des">paradigms monotonectally extend open-source creative design
						mvia competitive methods of empowerment dri it solutions for
						revolutionize stand- business clean.
					</p>
				</div>
			</div>
		</div>
		<div class="row project-bs">
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="project-single-box box-1">
					<div class="project-icon">
						<img src="assets/images/home-two/project-icon.png" alt="icon">
					</div>
					<div class="projects-content">
						<h4 class="project-title"><a href="{{ route('projectdetails') }}">Requirement</a></h4>
						<p class="project-des">Paradigms open-source in
							working process.
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="project-single-box box-2">
					<div class="project-icon">
						<img src="assets/images/home-two/project-icon2.png" alt="icon">
					</div>
					<div class="projects-content">
						<h4 class="project-title"><a href="{{ route('projectdetails') }}">UI/UX Design</a></h4>
						<p class="project-des">Paradigms open-source in
							working process.
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="project-single-box box-3">
					<div class="project-icon">
						<img src="assets/images/home-two/project-icon3.png" alt="icon">
					</div>
					<div class="projects-content">
						<h4 class="project-title"><a href="{{ route('projectdetails') }}">Prototype</a></h4>
						<p class="project-des">Paradigms open-source in
							working process.
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="project-single-box down box-4">
					<div class="project-icon">
						<img src="assets/images/home-two/project-icon4.png" alt="icon">
					</div>
					<div class="projects-content">
						<h4 class="project-title"><a href="{{ route('projectdetails') }}">Development</a></h4>
						<p class="project-des">Paradigms open-source in
							working process.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="project-bg-shape1 moveLeftBounce">
		<img src="assets/images/home-two/project-rs.png" alt="shpae">
	</div>
	<div class="project-bg-shape2 bounce-animate3">
		<img src="assets/images/home-two/project-ws.png" alt="shpae">
	</div>
</div>




<!--==================================================-->
<!-- Start solutek blog Area style-two-->
<!--==================================================-->

<div class="blog-area style-two">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h5 class="section-sub-title">LATEST NEWS & BLOG</h5>
					<h1 class="section-main-title">Your Source for Every Update</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-blog-box">
					<div class="single-blog-thumb">
						<img src="assets/images/home-two/blog-thu.png" alt="thumb">
						<div class="blog-meta-top">
							<a href="{{ route('blogdetails') }}">UI/UX DESIGNER</a>
						</div>
					</div>
					<div class="blog-box-content">
					   <div class="meta-blog">
						  <a href="{{ route('blogdetails') }}"><span><i class="far fa-user"></i>HOSSAIN ASIF</span></a>
						  <p><span><img src="assets/images/home-two/mesage-icon.png" alt="icon"></span>COMMENTS</p>
						</div>
						<h3><a href="{{ route('blogdetails') }}">Regional Manager limited time
							management.
						</a></h3>
						<div class="blog-button">
							<a class="btn-2" href="{{ route('blogdetails') }}">read post</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-blog-box">
					<div class="single-blog-thumb">
						<img src="assets/images/home-two/blog-thu2.png" alt="thumb">
						<div class="blog-meta-top">
							<a href="{{ route('blogdetails') }}">WEB DEVELOPER</a>
						</div>
					</div>
					<div class="blog-box-content">
					   <div class="meta-blog">
						  <a href="{{ route('blogdetails') }}"><span><i class="far fa-user"></i>HOSSAIN ASIF</span></a>
						  <p><span><img src="assets/images/home-two/mesage-icon.png" alt="icon"></span>COMMENTS</p>
						</div>
						<h3><a href="{{ route('blogdetails') }}">The Complete Guide to Tekone
							App Development
						</a></h3>
						<div class="blog-button">
							<a class="btn-2" href="{{ route('blogdetails') }}">read post</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-blog-box">
					<div class="single-blog-thumb">
						<img src="assets/images/home-two/blog-thu3.png" alt="thumb">
						<div class="blog-meta-top">
							<a href="{{ route('blogdetails') }}">WEB DESIGNER</a>
						</div>
					</div>
					<div class="blog-box-content">
					   <div class="meta-blog">
						  <a href="{{ route('blogdetails') }}"><span><i class="far fa-user"></i>HOSSAIN ASIF</span></a>
						  <p><span><img src="assets/images/home-two/mesage-icon.png" alt="icon"></span>COMMENTS</p>
						</div>
						<h3><a href="{{ route('blogdetails') }}">Easy and Most Powerful Server
							and Platform.
						</a></h3>
						<div class="blog-button">
							<a class="btn-2" href="{{ route('blogdetails') }}">read post</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- end solutek blog Area style-two-->
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
						<img src="assets/images/address1.png" alt="address1">
					</div>
					<div class="address-title">
						<h3>Elevating Customer Experience.</h3>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="address-box2">
					<div class="address-icon">
						<img src="assets/images/address2.png" alt="address1">
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