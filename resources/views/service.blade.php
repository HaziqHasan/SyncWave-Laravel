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
					<h4>Services</h4>
					<ul class="breadcumb-list">
						<li><a href="#">Home</a></li>
						<li class="list-arrow">&lt;</li>
						<li>Services</li>
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
<!-- start solutek service Area style-two-->
<!--==================================================-->

<div class="sservice-area style-two">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h5 class="section-sub-title">SOLUTEK COMPANY</h5>
					<h1 class="section-main-title">How Professional IT Services</h1>
					<h1 class="section-main-title">Can Drive <span>Success.</span></h1>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-service-box">
					<div class="service-thumb">
						<img src="{{ asset('assets/images/inner/service-thumb1.png') }}" alt="thumb">
					</div>
					<div class="service-icon">
						<img src="{{ asset('assets/images/inner/service-icon.png') }}" alt="icon">
					</div>
					<div class="service-content">
						<h3 class="service-title"><a href="{{ route('servicedetails.cybersecurity') }}">CyberSecurity</a></h3>
						<p class="service-text">We secure your systems, data, and network with proactive monitoring, risk assessment.</p>
						<div class="service-btn">
							<a href="{{ route('servicedetails.cybersecurity') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
						<div class="services-shape bounce-animate-3">
							<img src="{{ asset('assets/images/inner/serice-shape.png') }}" alt="shape">
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-service-box">
					<div class="service-thumb">
						<img src="{{ asset('assets/images/inner/service-thumb1.png') }}" alt="thumb">
					</div>
					<div class="service-icon">
						<img src="{{ asset('assets/images/inner/service-icon.png') }}" alt="icon">
					</div>
					<div class="service-content">
						<h3 class="service-title"><a href="{{ route('servicedetails.agenticai') }}">Agentic AI Solutions</a></h3>
						<p class="service-text">Build smart AI agents that automate complex tasks and run your business processes intelligently</p>
						<div class="service-btn">
							<a href="{{ route('servicedetails.agenticai') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
						<div class="services-shape bounce-animate-3">
							<img src="{{ asset('assets/images/inner/serice-shape.png') }}" alt="shape">
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-service-box">
					<div class="service-thumb">
						<img src="{{ asset('assets/images/inner/service-thumb2.png') }}" alt="thumb">
					</div>
					<div class="service-icon">
						<img src="{{ asset('assets/images/inner/service-icon.png') }}" alt="icon">
					</div>
					<div class="service-content">
						<h3 class="service-title"><a href="{{route('servicedetails.digital') }}">Digital Marketing</a></h3>
						<p class="service-text">Boost your online visibility with targeted digital strategies built for conversions</p>
						<div class="service-btn">
							<a href="{{ route('servicedetails.digital') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
						<div class="services-shape bounce-animate-3">
							<img src="{{ asset('assets/images/inner/serice-shape.png') }}" alt="shape">
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-service-box">
					<div class="service-thumb">
						<img src="{{ asset('assets/images/inner/service-thumb3.png') }}" alt="thumb">
					</div>
					<div class="service-icon">
						<img src="{{ asset('assets/images/inner/service-icon.png') }}" alt="icon">
					</div>
					<div class="service-content">
						<h3 class="service-title"><a href="{{ route('servicedetails.webdev') }}">Web Development</a></h3>
						<p class="service-text">End-to-end web development with clean code, smooth navigation, and premium design.</p>
						<div class="service-btn">
							<a href="{{ route('servicedetails.webdev') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
						<div class="services-shape bounce-animate-3">
							<img src="{{ asset('assets/images/inner/serice-shape.png') }}" alt="shape">
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-service-box">
					<div class="service-thumb">
						<img src="{{ asset('assets/images/inner/service-thumb4.png') }}" alt="thumb">
					</div>
					<div class="service-icon">
						<img src="{{ asset('assets/images/inner/service-icon.png') }}" alt="icon">
					</div>
					<div class="service-content">
						<h3 class="service-title"><a href="{{ route('servicedetails.appdev')}}">App Development</a></h3>
						<p class="service-text">We develop intuitive, scalable apps that deliver amazing user experiences and real business value.</p>
						<div class="service-btn">
							<a href="{{ route('servicedetails.appdev') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
						<div class="services-shape bounce-animate-3">
							<img src="{{ asset('assets/images/inner/serice-shape.png') }}" alt="shape">
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-service-box">
					<div class="service-thumb">
						<img src="{{ asset('assets/images/inner/service-thumb1.png') }}" alt="thumb">
					</div>
					<div class="service-icon">
						<img src="{{ asset('assets/images/inner/service-icon.png') }}" alt="icon">
					</div>
					<div class="service-content">
						<h3 class="service-title"><a href="{{ route('servicedetails.erp') }}">ERP Solutions</a></h3>
						<p class="service-text">Centralize your business operations with a fully integrated ERP system tailored to your needs</p>
						<div class="service-btn">
							<a href="{{ route('servicedetails.erp') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
						<div class="services-shape bounce-animate-3">
							<img src="{{ asset('assets/images/inner/serice-shape.png') }}" alt="shape">
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-service-box">
					<div class="service-thumb">
						<img src="{{ asset('assets/images/inner/service-thumb1.png') }}" alt="thumb">
					</div>
					<div class="service-icon">
						<img src="{{ asset('assets/images/inner/service-icon.png') }}" alt="icon">
					</div>
					<div class="service-content">
						<h3 class="service-title"><a href="{{ route('servicedetails.robotic') }}">Robotic Automation</a></h3>
						<p class="service-text">Our bots work 24/7, reduce errors, speed up processes, and free your team to focus on high-value work.</p>
						<div class="service-btn">
							<a href="{{ route('servicedetails.robotic') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
						<div class="services-shape bounce-animate-3">
							<img src="{{ asset('assets/images/inner/serice-shape.png') }}" alt="shape">
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-service-box">
					<div class="service-thumb">
						<img src="{{ asset('assets/images/inner/service-thumb1.png') }}" alt="thumb">
					</div>
					<div class="service-icon">
						<img src="{{ asset('assets/images/inner/service-icon.png') }}" alt="icon">
					</div>
					<div class="service-content">
						<h3 class="service-title"><a href="{{ route('servicedetails.data') }}">Data Engineering</a></h3>
						<p class="service-text">We build robust data pipelines, optimize storage, secure dataflows for decision-making at scale.</p>
						<div class="service-btn">
							<a href="{{ route('servicedetails.data') }}"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
						<div class="services-shape bounce-animate-3">
							<img src="{{ asset('assets/images/inner/serice-shape.png') }}" alt="shape">
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
<!-- end solutek service Area style-two-->
<!--==================================================-->





<!--==================================================-->
<!--start solutek team Area style-two-->
<!--==================================================-->
<!-- <div class="team-area style-two">
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
						<img src="{{ asset('assets/images/home-two/team-thu.png') }}" alt="thumb">
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
						<img src="{{ asset('assets/images/home-two/team-thu2.png') }}" alt="thumb">
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
						<img src="{{ asset('assets/images/home-two/team-thu3.png') }}" alt="thumb">
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
						<img src="{{ asset('assets/images/home-two/team-thu4.png') }}" alt="thumb">
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
</div> -->

<!--==================================================-->
<!-- end solutek team Area style-two-->
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