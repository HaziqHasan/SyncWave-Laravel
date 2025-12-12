@extends('layout.layout1')

@section('content')

	<!--==================================================-->
	<!-- Start solutek hero Area -->
	<!--==================================================-->

	<div class="hero-area d-flex align-items-center">
		<div class="container">
			<div class="row hero align-items-center">
				<div class="col-lg-6">
					<div class="hero-contant">
						<h5>Syncwave Corporation</h5>
						<h1>The Beauty Behind</h1>
						<h1>IT Services.</h1>
						<p>Where your interests international networks intersect provide
							custom software solutions for any value software.</p>
						<div class="solutek-btn">
							<a href="{{ route('about') }}">EXPLORE MORE
								<div class="solutek-hover-btn hover-bx"></div>
								<div class="solutek-hover-btn hover-bx2"></div>
								<div class="solutek-hover-btn hover-bx3"></div>
								<div class="solutek-hover-btn hover-bx4"></div>
							</a>
						</div>
						<div class="hero-video-icon">	
							<!-- <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://www.youtube.com/watch?v=Wx48y_fOfiY"><i class="bi bi-play"></i><span>WATCH VIDEO</span></a> -->
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="hero-thumb">
						<img src="{{ asset('assets/images/hero-thumb.png') }}" alt="hero-thumb">
					</div>
				</div>
			</div>
		</div>
	</div>

<!--==================================================-->
<!-- end solutek hero Area -->
<!--==================================================-->




<!--==================================================-->
<!-- Start solutek about Area -->
<!--==================================================-->

	<div class="feature-area">
		<div class="container">
			<div class="row about align-items-center">
				<div class="feature-box">
					<div class="feature-sinble-single-box">
						<div class="feature-icon">
							<img src="{{ asset('assets/images/feature1.png') }}" alt="feature1">
						</div>
						<div class="feature-content">
							<h3 class="feature-title">Data Security</h3>
							<p class="feature-text">Monotonectally SyncWave Corporation in
							fermentum quis</p>
						</div>
					</div>
					<div class="feature-sinble-single-box">
						<div class="feature-icon">
							<img src="{{ asset('assets/images/feature2.png') }}" alt="feature1">
						</div>
						<div class="feature-content">
							<h3 class="feature-title">Digital Marketing</h3>
							<p class="feature-text">Monotonectally SyncWave Corporation in
							fermentum quis</p>
						</div>
					</div>
					<div class="feature-sinble-single-box">
						<div class="feature-icon">
							<img src="{{ asset('assets/images/feature3.png') }}" alt="feature1">
						</div>
						<div class="feature-content">
							<h3 class="feature-title">IT Consultation</h3>
							<p class="feature-text">Monotonectally SyncWave Corporation in
							fermentum quis</p>
						</div>
					</div>
					<div class="feature-sinble-single-box">
						<div class="feature-icon">
							<img src="{{ asset('assets/images/feature4.png') }}" alt="feature1">
						</div>
						<div class="feature-content">
							<h3 class="feature-title">Cloud Services</h3>
							<p class="feature-text">Monotonectally SyncWave Corporation in
							fermentum quis</p>
						</div>
					</div>
					<div class="feature-sinble-single-box">
						<div class="feature-icon">
							<img src="{{ asset('assets/images/feature5.png') }}" alt="feature1">
						</div>
						<div class="feature-content">
							<h3 class="feature-title">Technology</h3>
							<p class="feature-text">Monotonectally SyncWave Corporation in
							fermentum quis</p>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>

<!--==================================================-->
<!-- end solutek about Area -->
<!--==================================================-->




<!--==================================================-->
<!-- start solutek about Area -->
<!--==================================================-->

	<div class="about-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-lg-6">
					<div class="about-thumb">
						<img src="{{ asset('assets/images/about-thumb.png') }}" alt="about-thumb">
						<div class="about-shape">
							<img src="{{ asset('assets/images/about1.png') }}" alt="about1">
						</div>
						<h4 class="about-title">BEST IT SOLUTION</h4>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="section-title text-left">
						<h5 class="section-sub-title">SyncWave Corporation</h5>
						<h1 class="section-main-title">Essential IT Solutions For</h1>
						<h1 class="section-main-title">Modern <span>Businesses.</span></h1>
						<p class="section-title-descr">Monotonectally repurpose maintainable infrastruct whereas Syncwave in
						fermentum quis tempo sapien maximus design.</p>
					</div>
					<div class="about-box d-flex align-items-center">
						<div class="about-icon">
							<img src="{{ asset('assets/images/about4.png') }}" alt="about4">
						</div>
						<div class="about-tiltle">
							<h3>Cloud Based Solution</h3>
						</div>
					</div>
					<div class="about-text">
						<p>Monotonectally repurpose maintainable infrastruct whereas SyncWave in
						fermentum quis tempo sapien maximus design.</p>
					</div>
					<div class="solutek-btn">
						<a href="{{ route('about') }}">EXPLORE MORE
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

<!--==================================================-->
<!-- end solutek about Area -->
<!--==================================================-->





<!--==================================================-->
<!-- start solutek service Area -->
<!--==================================================-->

<div class="sservice-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h5 class="section-sub-title">SyncWave Corporation</h5>
					<h1 class="section-main-title">How Professional IT Services</h1>
					<h1 class="section-main-title">Can Drive <span>Success.</span></h1>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="service-single-box">
					<div class="service-icon">
						<img src="{{ asset('assets/images/service1.png') }}" alt="service1">
					</div>
					<div class="service-content">
						<h3 class="service-title">Web Development</h3>
						<p class="service-text">Marketing repurpose success in
						professions whereas in services
						sapien maximus design.</p>
						<div class="service-btn">
							<a href="{{ route('servicedetails') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="service-single-box">
					<div class="service-icon">
						<img src="{{ asset('assets/images/service2.png') }}" alt="service1">
					</div>
					<div class="service-content">
						<h3 class="service-title">IT Management</h3>
						<p class="service-text">Marketing repurpose success in
						professions whereas in services
						sapien maximus design.</p>
						<div class="service-btn">
							<a href="{{ route('servicedetails') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="service-single-box">
					<div class="service-icon">
						<img src="{{ asset('assets/images/service3.png') }}" alt="service1">
					</div>
					<div class="service-content">
						<h3 class="service-title">Digital Marketing</h3>
						<p class="service-text">Marketing repurpose success in
						professions whereas in services
						sapien maximus design.</p>
						<div class="service-btn">
							<a href="{{ route('servicedetails') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="service-single-box">
					<div class="service-icon">
						<img src="{{ asset('assets/images/service4.png') }}" alt="service1">
					</div>
					<div class="service-content">
						<h3 class="service-title">App Development</h3>
						<p class="service-text">Marketing repurpose success in
						professions whereas in services
						sapien maximus design.</p>
						<div class="service-btn">
							<a href="{{ route('servicedetails') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="service-shape bounce-animate3">
			<img src="{{ asset('assets/images/service5.png') }}" alt="service5">
		</div>
		<div class="service-shape2">
			<img src="{{ asset('assets/images/service7.png') }}" alt="service5">
		</div>
		<div class="service-shape3 bounce-animate4">
			<img src="{{ asset('assets/images/service8.png') }}" alt="service5">
		</div>
	</div>
</div>

<!--==================================================-->
<!-- end solutek service Area -->
<!--==================================================-->





<!--==================================================-->
<!-- start solutek project Area -->
<!--==================================================-->

<div class="project-area">
	<div class="container-fluid">
		<div class="row project align-items-center">
			<div class="col-lg-6">
				<div class="section-title text-left">
					<h5 class="section-sub-title">SyncWave PROJECT</h5>
					<h1 class="section-main-title">Explore Our Recent <span>Projects.</span></h1>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="project-right">
					<div class="solutek-btn">
						<a href="{{ route('project') }}">VIEW  PROJECT DETAIL
							<div class="solutek-hover-btn hover-bx"></div>
							<div class="solutek-hover-btn hover-bx2"></div>
							<div class="solutek-hover-btn hover-bx3"></div>
							<div class="solutek-hover-btn hover-bx4"></div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row carousel">
			<div class="project_list owl-carousel">
				<div class="col-lg-12 col-md-12">
					<div class="project-single-box">
						<div class="project-thumb">
							<img src="{{ asset('assets/images/project1.png') }}" alt="project1">
						</div>
						<div class="project-content">
							<h3 class="project-title"><a href="{{ route('projectdetails') }}">Project for Marketing</a></h3>
							<p class="project-text">Software</p>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="project-single-box">
						<div class="project-thumb">
							<img src="{{ asset('assets/images/project2.png') }}" alt="project1">
						</div>
						<div class="project-content">
							<h3 class="project-title"><a href="{{ route('projectdetails') }}">Digital Product Design</a></h3>
							<p class="project-text">Software</p>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="project-single-box">
						<div class="project-thumb">
							<img src="{{ asset('assets/images/project1.png') }}" alt="project1">
						</div>
						<div class="project-content">
							<h3 class="project-title"><a href="{{ route('projectdetails') }}">Project for Marketing</a></h3>
							<p class="project-text">Software</p>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="project-single-box">
						<div class="project-thumb">
							<img src="{{ asset('assets/images/project2.png') }}" alt="project1">
						</div>
						<div class="project-content">
							<h3 class="project-title"><a href="{{ route('projectdetails') }}">Digital Product Design</a></h3>
							<p class="project-text">Software</p>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="project-single-box">
						<div class="project-thumb">
							<img src="{{ asset('assets/images/project3.png') }}" alt="project1">
						</div>
						<div class="project-content">
							<h3 class="project-title"><a href="{{ route('projectdetails') }}">Software Development</a></h3>
							<p class="project-text">Software</p>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="project-single-box">
						<div class="project-thumb">
							<img src="{{ asset('assets/images/project4.png') }}" alt="project1">
						</div>
						<div class="project-content">
							<h3 class="project-title"><a href="{{ route('projectdetails') }}">CMC Softwar Solution</a></h3>
							<p class="project-text">Software</p>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="project-single-box">
						<div class="project-thumb">
							<img src="{{ asset('assets/images/project3.png') }}" alt="project1">
						</div>
						<div class="project-content">
							<h3 class="project-title"><a href="{{ route('projectdetails') }}">Software Development</a></h3>
							<p class="project-text">Software</p>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="project-single-box">
						<div class="project-thumb">
							<img src="{{ asset('assets/images/project5.png') }}" alt="project1">
						</div>
						<div class="project-content">
							<h3 class="project-title"><a href="{{ route('projectdetails') }}">App Development</a></h3>
							<p class="project-text">Software</p>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="project-single-box">
						<div class="project-thumb">
							<img src="{{ asset('assets/images/project4.png') }}" alt="project1">
						</div>
						<div class="project-content">
							<h3 class="project-title"><a href="{{ route('projectdetails') }}">CMC Softwar Solution</a></h3>
							<p class="project-text">Software</p>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="project-single-box">
						<div class="project-thumb">
							<img src="{{ asset('assets/images/project3.png') }}" alt="project1">
						</div>
						<div class="project-content">
							<h3 class="project-title"><a href="{{ route('projectdetails') }}">Software Development</a></h3>
							<p class="project-text">Software</p>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="project-single-box">
						<div class="project-thumb">
							<img src="{{ asset('assets/images/project2.png') }}" alt="project1">
						</div>
						<div class="project-content">
							<h3 class="project-title"><a href="{{ route('projectdetails') }}">Digital Product Design</a></h3>
							<p class="project-text">Software</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- end solutek project Area -->
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
							<img src="{{ asset('assets/images/brand-img.png') }}" alt="brand img">
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="brand-box">
						<div class="brand-thumb">
							<img src="{{ asset('assets/images/brand-img1.png') }}" alt="brand img">
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="brand-box">
						<div class="brand-thumb">
							<img src="{{ asset('assets/images/brand-img2.png') }}" alt="brand img">
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="brand-box">
						<div class="brand-thumb">
							<img src="{{ asset('assets/images/brand-img3.png') }}" alt="brand img">
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="brand-box">
						<div class="brand-thumb">
							<img src="{{ asset('assets/images/brand-img4.png') }}" alt="brand img">
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
<!-- start solutek-pricing Area -->
<!--==================================================-->

<!-- 
	<div class="pricing-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="section-title text-left">
						<h5 class="section-sub-title">Start Business</h5>
						<h1 class="section-main-title">Choose Your Best Plan</h1>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="section-title text-left">
						<p class="section-descr">paradigms. Monotonectally extend open-source mvia competitive methods
						of empowerment dri revolutionize stand- business.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="pricing-single-box">
						<div class="pricing-head">
							<h1 class="priching-doller">$49</h1>
							<h3 class="priching-title">Standard Plan</h3>
						</div>
						<div class="pricing-body">
							<ul class="pricing-list">
								<li><i class="bi bi-check-circle"></i>30 Days Trial Features</li>
								<li><i class="bi bi-check-circle"></i>Multi-Language Content</li>
								<li><i class="bi bi-check-circle"></i> Unlimited Features</li>
								<li><i class="bi bi-check-circle"></i> Data backup and recovery</li>
								<li><i class="bi bi-check-circle"></i>Synced To Cloud Database</li>
							</ul>
							<div class="solutek-btn">
								<a href="{{ route('pricing') }}">Choose Plan
									<div class="solutek-hover-btn hover-bx"></div>
									<div class="solutek-hover-btn hover-bx2"></div>
									<div class="solutek-hover-btn hover-bx3"></div>
									<div class="solutek-hover-btn hover-bx4"></div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="pricing-single-box">
						<div class="pricing-head">
							<h1 class="priching-doller">$59</h1>
							<h3 class="priching-title">Basic Plan</h3>
						</div>
						<div class="pricing-body">
							<ul class="pricing-list">
								<li><i class="bi bi-check-circle"></i>30 Days Trial Features</li>
								<li><i class="bi bi-check-circle"></i>Multi-Language Content</li>
								<li><i class="bi bi-check-circle"></i> Unlimited Features</li>
								<li><i class="bi bi-check-circle"></i> Data backup and recovery</li>
								<li><i class="bi bi-check-circle"></i>Synced To Cloud Database</li>
							</ul>
							<div class="solutek-btn">
								<a href="{{ route('pricing') }}">Choose Plan
									<div class="solutek-hover-btn hover-bx"></div>
									<div class="solutek-hover-btn hover-bx2"></div>
									<div class="solutek-hover-btn hover-bx3"></div>
									<div class="solutek-hover-btn hover-bx4"></div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="pricing-single-box">
						<div class="pricing-head">
							<h1 class="priching-doller">$69</h1>
							<h3 class="priching-title">Beginner Plan</h3>
						</div>
						<div class="pricing-body">
							<ul class="pricing-list">
								<li><i class="bi bi-check-circle"></i>30 Days Trial Features</li>
								<li><i class="bi bi-check-circle"></i>Multi-Language Content</li>
								<li><i class="bi bi-check-circle"></i> Unlimited Features</li>
								<li><i class="bi bi-check-circle"></i> Data backup and recovery</li>
								<li><i class="bi bi-check-circle"></i>Synced To Cloud Database</li>
							</ul>
							<div class="solutek-btn">
								<a href="{{ route('pricing') }}">Choose Plan
									<div class="solutek-hover-btn hover-bx"></div>
									<div class="solutek-hover-btn hover-bx2"></div>
									<div class="solutek-hover-btn hover-bx3"></div>
									<div class="solutek-hover-btn hover-bx4"></div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="pricing-single-box">
						<div class="pricing-head">
							<h1 class="priching-doller">$79</h1>
							<h3 class="priching-title">Premium Plan</h3>
						</div>
						<div class="pricing-body">
							<ul class="pricing-list">
								<li><i class="bi bi-check-circle"></i>30 Days Trial Features</li>
								<li><i class="bi bi-check-circle"></i>Multi-Language Content</li>
								<li><i class="bi bi-check-circle"></i> Unlimited Features</li>
								<li><i class="bi bi-check-circle"></i> Data backup and recovery</li>
								<li><i class="bi bi-check-circle"></i>Synced To Cloud Database</li>
							</ul>
							<div class="solutek-btn">
								<a href="{{ route('pricing') }}">Choose Plan
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
	</div> -->



<!--==================================================-->
<!-- end solutek-pricing Area -->
<!--==================================================-->





<!--==================================================-->
<!-- start solutek-faq Area -->
<!--==================================================-->


<div class="faq-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12">
				<div class="section-title text-left">
					<h5 class="section-sub-title">SyncWave Corporation</h5>
					<h1 class="section-main-title">Keeping Your Business</h1>
					<h1 class="section-main-title">Safe and <span>Available.</span></h1>
				</div>
				<div class="faq-thumb">
					<img src="{{ asset('assets/images/faq1.png') }}" alt="faq1">
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="tab_container">
					<div class="feq-content">
						<h3 class="faq-title">A Comprehensive <span>Guide.</span></h3>
						<p class="faq-description">Alternative innovation network environmental whiteboard pursue  for premier 
						methods empowerment  go forward opportunities</p>
					</div>
					<div id="tab1" class="tab_content">
						<ul class="accordion">
							<li>
								<a class=""><span>What Medical Services Do You Provide?</span></a>
								<p style="display: none;">Appropriately promote enterprise-wide vortals throuh innovative information
								evolve go forward markets whereas synergistic applications power full
								sound quality vectors without equity invested best practices revolutionize
								enterprise-wide vortals through innovative.</p>
							</li>
							<li>
								<a><span>What is your customer geography?</span></a>
								<p>Appropriately promote enterprise-wide vortals throuh innovative information
								evolve go forward markets whereas synergistic applications power full
								sound quality vectors without equity invested best practices revolutionize
								enterprise-wide vortals through innovative.</p>
							</li>
							<li>
								<a><span>What are the main industries we serve?</span></a>
								<p> Appropriately promote enterprise-wide vortals throuh innovative information
								evolve go forward markets whereas synergistic applications power full
								sound quality vectors without equity invested best practices revolutionize
								enterprise-wide vortals through innovative.</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="faq-shape">
			<img src="{{ asset('assets/images/faq2.png') }}" alt="faq2">
		</div>
		<div class="faq-shape2">
			<img src="{{ asset('assets/images/faq3.png') }}" alt="faq2">
		</div>
	</div>
</div>



<!--==================================================-->
<!-- end solutek-faq Area -->
<!--==================================================-->






<!--==================================================-->
<!-- Start solutek testimonial Area -->
<!--==================================================-->

<div class="testimonial-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h5 class="section-sub-title">TESTIMONIALS</h5>
					<h1 class="section-main-title">What Our Customer <span>Says</span></h1>
				</div>
			</div>
			<div class="row">
				<div class="testi_list owl-carousel">
					<div class="col-lg-12 col-md-12">
						<div class="testi-box">
							<div class="testi-single-box">
								<div class="testi-icon">
									<img src="{{ asset('assets/images/testi1.png') }}" alt="testi1">
								</div>
								<div class="testi-content">
									<p class="testi-text">paradigms. Monotonectally extend open-source
									mvia competitive methods of empowerment dri
									revolutionize stand- business</p>
									<ul class="testi-rating">
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
									</ul>
									<h3 class="testi-title">Alberta Infantino <span>DEVELOPER</span></h3>
								</div>
							</div>
							<div class="testi-author">
								<img src="{{ asset('assets/images/testi4.png') }}" alt="testi4">
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="testi-box">
							<div class="testi-single-box">
								<div class="testi-icon">
									<img src="{{ asset('assets/images/testi1.png') }}" alt="testi1">
								</div>
								<div class="testi-content">
									<p class="testi-text">paradigms. Monotonectally extend open-source
									mvia competitive methods of empowerment dri
									revolutionize stand- business</p>
									<ul class="testi-rating">
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
									</ul>
									<h3 class="testi-title">Hosain Al-Amin <span>DEVELOPER</span></h3>
								</div>
							</div>
							<div class="testi-author">
								<img src="{{ asset('assets/images/testi5.png') }}" alt="testi4">
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="testi-box">
							<div class="testi-single-box">
								<div class="testi-icon">
									<img src="{{ asset('assets/images/testi1.png') }}" alt="testi1">
								</div>
								<div class="testi-content">
									<p class="testi-text">paradigms. Monotonectally extend open-source
									mvia competitive methods of empowerment dri
									revolutionize stand- business</p>
									<ul class="testi-rating">
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
									</ul>
									<h3 class="testi-title">M.Kamrul Islam <span>DEVELOPER</span></h3>
								</div>
							</div>
							<div class="testi-author">
								<img src="{{ asset('assets/images/testi6.png') }}" alt="testi4">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<!--==================================================-->
<!-- end solutek testimonial Area -->
<!--==================================================-->





<!--==================================================-->
<!-- Start solutek contact Area -->
<!--==================================================-->


	<div class="contact-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-7">
					<div class="section-title text-left">
						<h5 class="section-sub-title">CONTACT US</h5>
						<h1 class="section-main-title">Make an Online Appoinemnt Booking</h1>
						<h1 class="section-main-title">For Business Planing.</h1>
					</div>
						<div class="contact_from_box">
							<form action="https://formspree.io/f/myyleorq" method="POST" id="dreamit-form">
								<div class="row">
									<div class="col-lg-6">
										<div class="form_box">
											<input type="text" name="name" placeholder="Your Name *">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form_box">
											<input type="email" name="email" placeholder="Your E-Mail *">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form_box">
											<input type="text" name="subject" placeholder="Subject *">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form_box">
											<input type="text" name="phone" placeholder="Phone *">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form_box">
											<textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
										</div>
										<div class="quote_button">
											<button class="btn" type="submit">SENS NOW <i class="bi bi-arrow-right"></i></button>
										</div>
									</div>
								</div>
							</form>
						<div id="status" class="error"></div>
					</div>
				</div>
				<div class="col-lg-6 col-md-5">
					<div class="contact-box">
						<div class="contact-video-icon">	
							<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://www.youtube.com/watch?v=Wx48y_fOfiY">Play</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




<!--==================================================-->
<!-- end solutek contact Area -->
<!--==================================================-->






<!--==================================================-->
<!-- Start solutek blog Area -->
<!--==================================================-->

<!-- <div class="blog-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="section-title text-left">
					<h5 class="section-sub-title">OUR LATEST BLOG</h5>
					<h1 class="section-main-title">Exploring Its Potential in</h1>
					<h1 class="section-main-title">Various <span>Industries.</span></h1>
				</div>
			</div>
			<div class="col-lg-6">
                    <div class="project-right">
                    	<div class="solutek-btn">
                        	<a href="#">VIEW  all post
							<div class="solutek-hover-btn hover-bx"></div>
							<div class="solutek-hover-btn hover-bx2"></div>
							<div class="solutek-hover-btn hover-bx3"></div>
							<div class="solutek-hover-btn hover-bx4"></div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-5 col-lg-6 col-md-6">
				<div class="blog-singele-box">
					<div class="blog-thumb">
						<img src="{{ asset('assets/images/blog1.png') }}" alt="blog1">
					</div>
					<div class="blog-content">
						<div class="blog-date">
							<h4><i class="bi bi-calendar2-check"></i>20 June 2024 <span><i class="bi bi-chat-left-text"></i>Comment-05</span></h4>
						</div>
                        	<h3 class="blog-title"><a href="#">Leveraging Descriptive Solutions for Business Growth.</a></h3>
						<p class="blog-tex">Appropriatel promote enterprise-wide vortals throuh in information
						without equity best  revolutioniz</p>
                        	<div class="blog-btn">
                            <a href="#">READ MORE<i class="bi bi-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-7 col-lg-6 col-md-6">
				<div class="blog-singele-box-tow">
					<div class="blog-thumb-tow">
						<img src="{{ asset('assets/images/blog2.png') }}" alt="blog1">
					</div>
					<div class="blog-content-tow">
						<div class="blog-date-tow">
							<h4><i class="bi bi-calendar2-check"></i>20 June 2024 <span><i class="bi bi-chat-left-text"></i>Comment-05</span></h4>
						</div>
                        	<h3 class="blog-title-two"><a href="#">How to Create Modern Web Site For Your Business..</a></h3>
						<p class="blog-tex-tow">Appropriatel promote enterprise-wide throuh in information
						without best  revolutioniz</p>
                        	<div class="blog-btn-tow">
                            <a href="#">READ MORE<i class="bi bi-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="blog-singele-box-tow">
					<div class="blog-thumb-tow">
						<img src="{{ asset('assets/images/blog3.png') }}" alt="blog1">
					</div>
					<div class="blog-content-tow">
						<div class="blog-date-tow">
							<h4><i class="bi bi-calendar2-check"></i>20 June 2024 <span><i class="bi bi-chat-left-text"></i>Comment-05</span></h4>
						</div>
                        	<h3 class="blog-title-two"><a href="#">How to Create Modern Web Site For Your Business..</a></h3>
						<p class="blog-tex-tow">Appropriatel promote enterprise-wide throuh in information
						without best  revolutioniz</p>
                        	<div class="blog-btn-tow">
                            <a href="#">READ MORE<i class="bi bi-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->




<!--==================================================-->
<!-- end solutek blog Area -->
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