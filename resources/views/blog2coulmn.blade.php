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
					<h4>Blog 2Column</h4>
					<ul class="breadcumb-list">
						<li><a href="#">Home</a></li>
						<li class="list-arrow">&lt;</li>
						<li>Blog 2Column</li>
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
<!-- Start solutek blog list Area style-grid-->
<!--==================================================-->

<div class="blog-area style-grid">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
		    	<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="single-blog-box">
							<div class="single-blog-thumb">
								<img src="assets/images/inner/blog-grid1.png" alt="thumb">
							</div>
							<div class="blog-box-content">
							   <div class="meta-blog">
								  <a href="{{ route('blogdetails') }}"><span><i class="far fa-user"></i>By wotech</span></a>
								  <p><span><img src="assets/images/inner/grid-calen.png" alt="icon"></span>January 5, 2024</p>
								</div>
								<h3><a href="{{ route('blogdetails') }}">Supervisor Disapproved Of
									Latest Work.
								</a></h3>
								<div class="blog-button">
									<a href="{{ route('blogdetails') }}">REAM MORE<i class="bi bi-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="single-blog-box">
							<div class="single-blog-thumb">
								<img src="assets/images/inner/blog-grid2.png" alt="thumb">
							</div>
							<div class="blog-box-content">
							   <div class="meta-blog">
								  <a href="{{ route('blogdetails') }}"><span><i class="far fa-user"></i>By wotech</span></a>
								  <p><span><img src="assets/images/inner/grid-calen.png" alt="icon"></span>January 5, 2024</p>
								</div>
								<h3><a href="{{ route('blogdetails') }}">Simplify Streamline Succeed
									IT Solutions
								</a></h3>
								<div class="blog-button">
									<a class="#" href="{{ route('blogdetails') }}">REAM MORE<i class="bi bi-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="single-blog-box">
							<div class="single-blog-thumb">
								<img src="assets/images/inner/blog-grid3.png" alt="thumb">
							</div>
							<div class="blog-box-content">
							   <div class="meta-blog">
								  <a href="{{ route('blogdetails') }}"><span><i class="far fa-user"></i>By wotech</span></a>
								  <p><span><img src="assets/images/inner/grid-calen.png" alt="icon"></span>January 5, 2024</p>
								</div>
								<h3><a href="{{ route('blogdetails') }}">Unlocking Potential Through
									Technology
								</a></h3>
								<div class="blog-button">
									<a href="{{ route('blogdetails') }}">REAM MORE<i class="bi bi-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="single-blog-box">
							<div class="single-blog-thumb">
								<img src="assets/images/inner/blog-grid4.png" alt="thumb">
							</div>
							<div class="blog-box-content">
							   <div class="meta-blog">
								  <a href="{{ route('blogdetails') }}"><span><i class="far fa-user"></i>By wotech</span></a>
								  <p><span><img src="assets/images/inner/grid-calen.png" alt="icon"></span>January 5, 2024</p>
								</div>
								<h3><a href="{{ route('blogdetails') }}">Balancing AI Innovation with
									Ethical Standards
								</a></h3>
								<div class="blog-button">
									<a href="{{ route('blogdetails') }}">REAM MORE<i class="bi bi-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="single-blog-box">
							<div class="single-blog-thumb">
								<img src="assets/images/inner/blog-grid5.png" alt="thumb">
							</div>
							<div class="blog-box-content">
							   <div class="meta-blog">
								  <a href="{{ route('blogdetails') }}"><span><i class="far fa-user"></i>By wotech</span></a>
								  <p><span><img src="assets/images/inner/grid-calen.png" alt="icon"></span>January 5, 2024</p>
								</div>
								<h3><a href="{{ route('blogdetails') }}">UX/UI Designing the Future
									Web Design
								</a></h3>
								<div class="blog-button">
									<a href="{{ route('blogdetails') }}">REAM MORE<i class="bi bi-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="single-blog-box">
							<div class="single-blog-thumb">
								<img src="assets/images/inner/blog-grid6.png" alt="thumb">
							</div>
							<div class="blog-box-content">
							   <div class="meta-blog">
								  <a href="{{ route('blogdetails') }}"><span><i class="far fa-user"></i>By wotech</span></a>
								  <p><span><img src="assets/images/inner/grid-calen.png" alt="icon"></span>January 5, 2024</p>
								</div>
								<h3><a href="{{ route('blogdetails') }}">Your Business Safe & Ensure
									High Handiness
								</a></h3>
								<div class="blog-button">
									<a href="{{ route('blogdetails') }}">REAM MORE<i class="bi bi-arrow-right"></i></a>
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
						   <div class="widget_search">
						     <form action="#" method="get">
						    	<input type="text" name="s" value="" placeholder="Search Here" title="Search for:">
						    	<button type="submit" class="icons">
						    		<i class="fa fa-search"></i>
						    	</button>
						     </form>
				    	   </div>
				    	</div>
                        <div class="widget-sidber">
							<div class="widget-sidber-content">
								<h4>Main Services</h4>
							</div>
							<div class="widget-category">
								<ul>
									<li><a href="#"><img src="assets/images/inner/category-icon.png" alt="">Database Security<i class="bi bi-arrow-right"></i></a></li>
									<li><a href="#"><img src="assets/images/inner/category-icon.png" alt="">Technology Consult<i class="bi bi-arrow-right"></i></a></li>
									<li><a href="#"><img src="assets/images/inner/category-icon.png" alt="">App Development<i class="bi bi-arrow-right"></i></a></li>
									<li><a href="#"><img src="assets/images/inner/category-icon.png" alt="">UI/UX Design<i class="bi bi-arrow-right"></i></a></li>
									<li><a href="#"><img src="assets/images/inner/category-icon.png" alt="">Cyber Security<i class="bi bi-arrow-right"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="widget-sidber">
							<div class="widget-sidber-content">
								<h4>Popular Post</h4>
							</div>
							<div class="sidber-widget-recent-post">
								<div class="recent-widget-thumb">
									<img src="assets/images/inner/recent-post.png" alt="">
								</div>
								<div class="recent-widget-content">
									<a href="{{ route('blogdetails') }}">Supervisor Disapproved Of Latest Work.
										</a>	
									<p> feb, 26 2024</p>							
								</div>
							</div>							
							<div class="sidber-widget-recent-post">
								<div class="recent-widget-thumb">
									<img src="assets/images/inner/recent-post2.png" alt="">
								</div>
								<div class="recent-widget-content">
									<a href="{{ route('blogdetails') }}">Simplify Streamline Succeed IT Solutions</a>	
									<p> June, 15 2024</p>							
								</div>
							</div>							
							<div class="sidber-widget-recent-post">
								<div class="recent-widget-thumb">
									<img src="assets/images/inner/recent-post3.png" alt="">
								</div>
								<div class="recent-widget-content">
									<a href="{{ route('blogdetails') }}">Unlocking Potential Through Technology</a>	
									<p> april, 10 2024</p>							
								</div>
							</div>
						</div>						
						<div class="widget-sidber">
							<div class="widget-sidber-content">
								<h4>Tags</h4>
							</div>	
							<div class="widget-catefories-tags">
                                <a href="#">Cyber Security</a>
                                <a href="#">Learning</a>
                                <a href="#">Software</a>
                                <a href="#">Development</a>
                                <a href="#">Marketing</a>
                                <a href="#">Technology</a>
                            </div>											
						</div>
					</div>
				</div>
		    </div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- end solutek blog list Area style-grid-->
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
						<a href="contact.php">+91-9081908145
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