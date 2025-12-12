<!--==================================================-->
<!-- Start solutek Main Menu Area -->
<!--==================================================-->
<div id="sticky-header" class="solutek_nav_manu style-two">
  <div class="container-fluid">
    <div class="row d-flex align-items-center">
      <div class="col-lg-2">
        <div class="logo">
          <a class="logo_img" href="{{ route('index') }}" title="solutek">
            <img src="assets/images/logo.png" alt="logo">
          </a>
          <a class="main_sticky" href="{{ route('index') }}" title="solutek">
            <img src="assets/images/footer-logo.png" alt="astute">
          </a>
        </div>
      </div>
      <div class="col-lg-8">
        <nav class="solutek_menu">
          <ul class="nav_scroll">
            <li><a href="{{ route('index') }}">Home</a></li>
              <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('service') }}">Services</a></li>            
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('faq') }}">FAQ</a></li>
          </ul>
        </nav>
      </div>
      <div class="col-lg-2">
        <div class="header-btn">
        </div>
      </div>
    </div>
  </div>
</div>


<!-- solutek Mobile Menu Area -->
<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
  <div class="mobile-menu">
    <nav class="solutek_menu">
      <ul class="nav_scroll">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('service') }}">Services</a></li>            
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('faq') }}">FAQ</a></li>
      </ul>
    </nav>
  </div>
</div>
<!--==================================================-->
<!-- End solutek Main Menu Area -->
<!--==================================================-->