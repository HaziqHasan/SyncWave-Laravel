<!DOCTYPE HTML>
<html lang="en-US">

  <!-- Head -->
  @include('components.head')

<body>
	<!-- loder -->
	@include('components.preloader')

    <!-- Start Header Section -->
    @include('components.header1')
    <!-- End Header Section -->

	<!--==================================================-->
	<!-- Start Curser Section Here -->
	<!--==================================================-->
	<div class="curser"></div>
	<div class="curser2"></div>
	<!--==================================================-->
	<!-- Ends Curser Section Here -->
	<!--==================================================-->

    @yield('content')

    <!-- Start Footer -->
    @include('components.footer1')
    <!-- End Footer -->

    <!-- Script -->
    @include('components.script')

	
</body>
</html>