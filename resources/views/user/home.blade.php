<!DOCTYPE html>
<html lang="en">
<head>
	
@include('user.head')

</head>
<body id="home" data-spy="scroll" data-target=".navbar-collapse">

	<!-- start navigation -->

	@include('user.navigation')
	
	<!-- end navigation -->

	<!-- start flexslider -->
	
   @include('user.flexslider')


	<!-- end flexslider -->

	<!-- start about -->


	@include('user.aboutUs')
	
	<!-- end about -->

	<!-- start gallery -->
	

	@include('user.galery')

	<!-- end gallery -->

	<!-- start reservation-->

	@include('user.ourChefs')
	
	@include('user.reservation')
	<!-- end reservation -->

	<!-- start footer -->
	

	@include('user.footer')

	<!-- end footer -->

	<!--Scripts -->

	@include('user.script')

</body>
</html>