<!DOCTYPE html>
<html lang="en">
<head>
<title>Share Travel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Njoy Travels Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="{{ asset('assets/user/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="{{ asset('assets/user/css/font-awesome.css') }}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="{{ asset('assets/user/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets/user/js/bootstrap.js') }}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	@include('partialuser.navall')
		
	<!-- //newsletter -->
	 @yield('content')
	<!-- footer -->
	 @include('partialuser.footer')
	<!-- //copyright -->
	<script src="{{ asset('assets/user/js/responsiveslides.min.js') }}"></script>
	<script src="{{ asset('assets/user/js/SmoothScroll.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/user/js/move-top.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/user/js/easing.js') }}"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<script src="{{ asset('assets/user/js/jarallax.js') }}"></script>
	<script type="text/javascript">
			/* init Jarallax */
			$('.jarallax').jarallax({
				speed: 0.5,
				imgWidth: 1366,
				imgHeight: 768
			})
	</script>
</body>	
</html>