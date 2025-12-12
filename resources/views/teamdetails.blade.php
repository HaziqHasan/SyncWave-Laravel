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
					<h4>Team Details</h4>
					<ul class="breadcumb-list">
						<li><a href="#">Home</a></li>
						<li class="list-arrow">&lt;</li>
						<li>Team Details</li>
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
<!-- Start solutek Team Details Area-->
<!--==================================================-->
<div class="team-details-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="team-thumb">
					<img src="assets/images/inner/team-details.png" alt="thumb">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="team-details-right">
					<div class="team-details-content">
						<div class="team-member-title">
							<h4>Anowar Hossin Omio</h4>
							<p>Dream-IT Founder &amp; CEO</p>
						</div>
						<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor creative
                         labore et dolore magna aliqua ipsum suspendisse ultrices gravida commodo viverra accu
                         eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="row add-bg">
						<div class="col-lg-6 col-md-6">
							<div class="contact-info-box">
					            <div class="contact-info-icon">
					            	<i class="fas fa-phone"></i>
					            </div>
					            <div class="contact-info-content">
					            	<h4>Call us Any time</h4>
					            	<p>+123 (4567) 890</p>
					            </div>
				            </div>
						</div>					
						<div class="col-lg-6 col-md-6">
							<div class="contact-info-box">
					            <div class="contact-info-icon">
					            	<i class="far fa-envelope"></i>
					            </div>
					            <div class="contact-info-content">
					            	<h4>Send E-Mail</h4>
					            	<p>info@gmail.com</p>
					            </div>
				            </div>
						</div>
					</div>
					<div class="team-details-social-icon">
						<ul>
							<li>Social Media</li>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
						</ul>
					</div>
					<div class="team-details-location-box">
                       <div class="contact-info-icon">
						<i class="fas fa-map-marker-alt"></i>
			            </div>
			            <div class="contact-info-content">
			            	<h4>Location</h4>
			            	<p>21 King Street 5th Floor Hamilton, Ontario Canada</p>
			            </div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
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
			<div class="col-lg-6">
				<div class="team-details-skills">
					<h4>My Skills</h4>
					<div class="wrapper">
			            <div class="skill">
			                <p>SEO Optimization</p>
			                <div class="skill-bar skill1 wow slideInLeft animated animated animated animated" style="visibility: visible; animation-name: slideInLeft;">
			                    <span class="skill-count1">95%</span>
			                </div>
			            </div>
			            <div class="skill">
			                <p>Web Development</p>
			                <div class="skill-bar skill2 wow slideInLeft animated animated animated animated" style="visibility: visible; animation-name: slideInLeft;">
			                     <span class="skill-count2">99%</span>
			                </div>
			            </div>
						<div class="skill">
			                <p>Data Optimization</p>
			                <div class="skill-bar skill1 wow slideInLeft animated animated animated animated" style="visibility: visible; animation-name: slideInLeft;">
			                    <span class="skill-count1">85%</span>
			                </div>
			            </div>
				     </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- end solutek Team Details Area Area -->
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