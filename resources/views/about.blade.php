@extends('layout.layout4')

@section('content4')


<!--==================================================-->
<!-- Start solutek breadcumb Area -->
<!--==================================================-->
<div class="breadcumb-area about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcumb-content">
					<h4>About Us</h4>
					<ul class="breadcumb-list">
						<li><a href="#">Home</a></li>
						<li class="list-arrow">&lt;</li>
						<li>About Us</li>
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
<!-- end solutek about us Area -->
<!--==================================================-->
<div class="about-us-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="section-title text-left">
					<h5 class="section-sub-title">SYNCWAVE CORPORATION</h5>
					<h1 class="section-main-title">We Can Clients With The</h1>
					<h1 class="section-main-title">About <span>Solution.</span></h1>
					<p class="section-title-descr">Where your interests international networks intersect provide
							custom software solutions for any value software.
					</p>
				</div>
				<div class="about-us-content">
					<div class="about-us-list">
						<ul>
							<li><span>Best IT Solutions & Service</span></li>
							<li><span>24 Hour's Customer Service</span></li>
						</ul>
					</div>
					<div class="solutek-btn">
						<a href="{{ route('about') }}">EXPLORE MORE
							<div class="solutek-hover-btn hover-bx"></div>
							<div class="solutek-hover-btn hover-bx2"></div>
							<div class="solutek-hover-btn hover-bx3"></div>
							<div class="solutek-hover-btn hover-bx4"></div>
						</a>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-counter-box">
							<div class="counter-icon">
								<img src="assets/images/inner/counter-icon.png" alt="icon">
							</div>
							<div class="counter-content">
								<h4 class="counter">826</h4>
								<span>+</span>
								<p>Satisfied Clients</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="about-us-thumb">
					<div class="about-us-img">
						<img src="assets/images/inner/about-us-thu.png" alt="thumb">
					</div>
					<div class="about-us-video-icon">	
						<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://www.youtube.com/watch?v=Wx48y_fOfiY"><i class="bi bi-play"></i><span>WATCH VIDEO</span></a>
					</div>
					<div class="about-us-shape">
						<img src="assets/images/inner/us-shape.png" alt="shape">
					</div>
				</div>
			</div>
		</div>
		<div class="about2-us-shape">
			<img src="assets/images/inner/about-us-sh.png" alt="shape">
		</div>
		<div class="about-us-shape2">
			<img src="assets/images/inner/about-us-she.png" alt="shape">
		</div>
	</div>
</div>

<!--==================================================-->
<!-- end solutek about us Area -->
<!--==================================================-->





<!--==================================================-->
<!-- start solutek project Area style-two -->
<!--==================================================-->

<!-- <div class="project-area style-two">
	<div class="container-fluid">
		<div class="row project align-items-center">
			<div class="col-lg-6">
				<div class="section-title text-left">
					<h5 class="section-sub-title">SOLUTEK PROJECT</h5>
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
							<img src="assets/images/project1.png" alt="project1">
						</div>
						<div class="project-content">
							<h3 class="project-title"><a href="{{ route('project') }}">Project for Marketing</a></h3>
							<p class="project-text">Software</p>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="project-single-box">
						<div class="project-thumb">
							<img src="assets/images/project2.png" alt="project1">
						</div>
						<div class="project-content">
							<h3 class="project-title"><a href="{{ route('project') }}">Digital Product Design</a></h3>
							<p class="project-text">Software</p>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="project-single-box">
						<div class="project-thumb">
							<img src="assets/images/project1.png" alt="project1">
						</div>
						<div class="project-content">
							<h3 class="project-title"><a href="{{ route('project') }}">Project for Marketing</a></h3>
							<p class="project-text">Software</p>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="project-single-box">
						<div class="project-thumb">
							<img src="assets/images/project2.png" alt="project1">
						</div>
						<div class="project-content">
							<h3 class="project-title"><a href="{{ route('project') }}">Digital Product Design</a></h3>
							<p class="project-text">Software</p>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="project-single-box">
						<div class="project-thumb">
							<img src="assets/images/project3.png" alt="project1">
						</div>
						<div class="project-content">
							<h3 class="project-title"><a href="{{ route('project') }}">Software Development</a></h3>
							<p class="project-text">Software</p>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="project-single-box">
						<div class="project-thumb">
							<img src="assets/images/project4.png" alt="project1">
						</div>
						<div class="project-content">
							<h3 class="project-title"><a href="{{ route('project') }}">CMC Softwar Solution</a></h3>
							<p class="project-text">Software</p>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="project-single-box">
						<div class="project-thumb">
							<img src="assets/images/project3.png" alt="project1">
						</div>
						<div class="project-content">
							<h3 class="project-title"><a href="{{ route('project') }}">Software Development</a></h3>
							<p class="project-text">Software</p>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="project-single-box">
						<div class="project-thumb">
							<img src="assets/images/project5.png" alt="project1">
						</div>
						<div class="project-content">
							<h3 class="project-title"><a href="{{ route('project') }}">App Development</a></h3>
							<p class="project-text">Software</p>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="project-single-box">
						<div class="project-thumb">
							<img src="assets/images/project4.png" alt="project1">
						</div>
						<div class="project-content">
							<h3 class="project-title"><a href="{{ route('project') }}">CMC Softwar Solution</a></h3>
							<p class="project-text">Software</p>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="project-single-box">
						<div class="project-thumb">
							<img src="assets/images/project3.png" alt="project1">
						</div>
						<div class="project-content">
							<h3 class="project-title"><a href="{{ route('project') }}">Software Development</a></h3>
							<p class="project-text">Software</p>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="project-single-box">
						<div class="project-thumb">
							<img src="assets/images/project2.png" alt="project1">
						</div>
						<div class="project-content">
							<h3 class="project-title"><a href="{{ route('project') }}">Digital Product Design</a></h3>
							<p class="project-text">Software</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->

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
<!-- Start solutek blog Area -->
<!--==================================================-->

<!-- Blog section removed -->






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