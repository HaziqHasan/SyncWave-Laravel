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
					<h4>Project</h4>
					<ul class="breadcumb-list">
						<li><a href="#">Home</a></li>
						<li class="list-arrow">&lt;</li>
						<li>Project</li>
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
	<!-- Start solutek case-study-area -->
<!--==================================================-->
	<div class="case-study-area">
		<div class="container">
			<div class="row case-study-bg">
				<div class="col-lg-12 col-sm-12">
					<div class="case_study_nav">
						<div class="case_study_menu">
							<ul class="menu-filtering">
								<li data-filter="*" class="current_menu_item">SEE ALL</li>
								<li data-filter=".technology">TECHNOLOGY</li>
								<li data-filter=".helpdesk">HELPDESK</li>
								<li data-filter=".analysis">ANALYSIS</li>
								<li data-filter=".marketing">MARKETING</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row image_load">
				<div class="col-lg-6 col-sm-6 grid-item technology">
					<div class="case-study-single-box">
						<div class="case-study-thumb">
							<img src="assets/images/inner/case-thumb.png" alt="thumb">
						</div>
						<div class="case-study-content">
							<div class="case-study-title">
								<h5>Marketing , Software</h5>
								<h3><a href="{{ route('projectdetails') }}">Software Management</a></h3>
							</div>
							<div class="case-study-icon">
								<i class="bi bi-arrow-right"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 grid-item helpdesk">
					<div class="case-study-single-box">
						<div class="case-study-thumb"><img src="assets/images/inner/case-thumb2.png" alt="thumb"></div>
						<div class="case-study-content">
							<div class="case-study-title">
								<h5>Marketing , Software</h5>
								<h3><a href="{{ route('projectdetails') }}">Web Development</a></h3>
							</div>
							<div class="case-study-icon">
								<i class="bi bi-arrow-right"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 grid-item analysis helpdesk">
					<div class="case-study-single-box">
						<div class="case-study-thumb"><img src="assets/images/inner/case-thumb3.png" alt="thumb"></div>
						<div class="case-study-content">
							<div class="case-study-title">
								<h5>Marketing , Software</h5>
								<h3><a href="{{ route('projectdetails') }}">Platform Integration</a></h3>
							</div>
							<div class="case-study-icon">
								<i class="bi bi-arrow-right"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 grid-item technology analysis">
					<div class="case-study-single-box">
						<div class="case-study-thumb"><img src="assets/images/inner/case-thumb4.png" alt="thumb"></div>
						<div class="case-study-content">
							<div class="case-study-title">
								<h5>Marketing , Software</h5>
								<h3><a href="{{ route('projectdetails') }}">Network Security</a></h3>
							</div>
							<div class="case-study-icon">
								<i class="bi bi-arrow-right"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 grid-item marketing technology">
					<div class="case-study-single-box">
						<div class="case-study-thumb"><img src="assets/images/inner/case-thumb5.png" alt="thumb"></div>
						<div class="case-study-content">
							<div class="case-study-title">
								<h5>Marketing , Software</h5>
								<h3><a href="{{ route('projectdetails') }}">digital marketing</a></h3>
							</div>
							<div class="case-study-icon">
								<i class="bi bi-arrow-right"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 grid-item technology marketing">
					<div class="case-study-single-box">
						<div class="case-study-thumb"><img src="assets/images/inner/case-thumb6.png" alt="thumb"></div>
						<div class="case-study-content">
							<div class="case-study-title">
								<h5>Marketing , Software</h5>
								<h3><a href="{{ route('projectdetails') }}">product & design</a></h3>
							</div>
							<div class="case-study-icon">
								<i class="bi bi-arrow-right"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--==================================================-->
	<!--End solutek case-study-area -->
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