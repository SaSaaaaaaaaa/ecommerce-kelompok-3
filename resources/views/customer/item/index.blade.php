<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from caketheme.com/html/ruper/{{route('item')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Sep 2023 01:39:42 GMT -->
    <head>
        @include('layout.head')
        <title>Product</title>
    </head>
	<body class="shop">
		<div id="page" class="hfeed page-wrapper">
			@include('customer.item.header')

			<div id="site-main" class="site-main">
				<div id="main-content" class="main-content">
					@include('customer.item.content')
				</div><!-- #main-content -->
			</div>

			@include('layout.footer')
		</div>

		<!-- Back Top button -->
		<div class="back-top button-show">
			<i class="arrow_carrot-up"></i>
		</div>

		<!-- Search -->
		@include('layout.search')

		<!-- Wishlist -->
		@include('layout.wishlist')

		<!-- Compare -->
		@include('layout.compare')

		<!-- Page Loader -->
		@include('layout.loader')

		<!-- Dependency Scripts -->
		@include('layout.js')
	</body>

<!-- Mirrored from caketheme.com/html/ruper/{{route('item')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Sep 2023 01:39:43 GMT -->
</html>