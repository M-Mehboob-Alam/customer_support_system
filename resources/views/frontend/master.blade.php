
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown-content a:hover {
  background-color: #7a7a7a;

}
ul {
    display: block;
    list-style: none;
    margin: 0;
    padding: 0;
    line-height: normal;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
</style>
	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />

	<!-- DESCRIPTION -->
	<meta name="description" content="Dashboard : Web Fixes" />

	<!-- OG -->
	<meta property="og:title" content="Dashboard : Web Fixes" />
	<meta property="og:description" content="Dashboard : Web Fixes" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="{{ asset('assets/images/logo.png')}}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/wf.png')}}" style="border-radius: 15px;">

	<!-- PAGE TITLE HERE ============================================= -->
	<title>Dashboard : Next Step Solutions</title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/assets.css')}}">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/typography.css')}}">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/shortcodes/shortcodes.css')}}">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('assets/css/color/color-1.css')}}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body id="bg">
<div class="page-wraper">
	<!-- <div id="loading-icon-bx"></div> -->
	<!-- Header Top ==== -->
    <header class="header rs-nav">
		<div class="top-bar" style=" background-color:#f5faff;">
			<div class="container" >
				<div class="row d-flex justify-content-between" style="margin-bottom:-15px;">
					<div class="topbar-left">
						<ul>
								<div style="margin-top:10px; margin-bottom:-5px;">
									<a href="https://www.nextstepsols.com/" ><li><img width="100px" height="100px" src="{{ asset('assets/images/logo.png') }}"></li></a>

								</div>


							</ul>
					</div>
					<div class="topbar-right" style="margin-top: 20px;">
						<ul>
								<li ><i style="color:#1d42d9; font-size: 20px;" class="fa fa-phone"></i><span style=" margin-right: 50px; font-size: 17px; padding-left: 5px; font-family: Arial, Helvetica, sans-serif;  color: #54595f;"> +92 332 0559987</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<!-- <i class="fa fa-location-arrow" style="color:#1d42d9; font-size: 21px;"></i> -->
								<img style="color:#1d42d9; font-size: 21px; height: 16px; width: 16px;" src="{{ asset('assets/images/location.png') }}" >
								<span style=" margin-right: 50px; font-size: 17px; padding-left:5px; font-family: Arial, Helvetica, sans-serif;color: #54595f;">7-A street # 3,  New Shalimar Colony,  Bosan Road Multan</span>

								<img style="color:blue; margin-top: -19px;" src="{{ asset('assets/images/line.jpg') }}" >
								<a href="https://www.facebook.com/nextstepsolutions" class="btn-link"><i style="color:#1d42d9; font-size: 18px;" class="fa fa-facebook"></i></a>&nbsp;&nbsp;
								<a href="https://www.instagram.com/nextstepsols/" class="btn-link"><i style="color:#1d42d9; font-size: 18px;" class="fa fa-twitter"></i></a>&nbsp;&nbsp;
								<a href="https://twitter.com/NextStepSoluti3" class="btn-link"><i style="color:#1d42d9; font-size: 18px;" class="fa fa-envelope"></i></a>&nbsp;&nbsp;

							</li>

						</ul>
					</div>
			<!-- 	<a class="btn btn-primary" style=" margin-top:10px;" href="logout.php" class="btn-link">Logout</a> -->
				</div>

			</div>
			<br>
			<div style="background-color:#F47112;">
				<div class="container">
				<div class="row">
						<div style="background-color:#F47112;  width:auto;" class="col-lg-12">
					<!--	<ul >
							<li >
								<a href="home.php"><span style="color:white; font-size: 17px;">Home</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<div class="dropdown">
								  <span style="color:white; font-size: 17px;">Mouse over me</span>
								  <div class="dropdown-content">
								  <a class="mt-3" href="https://web-fixes.com/services/#website" style="height:10px; font-size: 17px;">Web Development</a><br>
								  <a class="mt-3" href="https://web-fixes.com/services/#mobile" style="height:10px; font-size: 17px;">Mobile Development</a><br>
								  <a class="mt-3" href="https://web-fixes.com/services/#designing" style="height:10px; font-size: 17px;">Graphics Design</a>
								  </div>
								</div>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="home.php"><span style="color:white;">Pricing</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="https://web-fixes.com/contact-us/"><span style="color:white; font-size: 17px;">Contact Us</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="https://web-fixes.com/free-website-review/"><span style="color:white; font-size: 17px;">Free Website Review</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="https://web-fixes.com/how-it-works/"><span style="color:white; font-size: 17px;">How it Works</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="https://web-fixes.com/my-account/"><span style="color:white; font-size: 17px;">My Account</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="home.php" class="btn btn-primary" style="float:right; background-color:#1d42d9 ;"><span ><h5 style="color:white;">Get Started</h5></span></a>

						</li>-->

						</ul>
						<br>
						<h1 style="color:white; font-size:40px;" align="center">Pricing</h1>

					</div>
				</div>
			</div>
			</div>
		</div>

    </header>

    @yield('content')


 <!-- <img src="assets/images/footer-bg.png"> -->
<style type="text/css">
	#Footer_image{
		/*background-image: url(assets/images/footer-bg.png);*/
		background-color: #181B33;
	}
</style>

<div id="Footer_image" >
	<footer >
		<br><br>
        <div class="footer-top" style="margin-top:20px;">
			<!-- <div class="pt-exebar">
				<div class="container">
					<div class="d-flex align-items-stretch">
						<div class="pt-logo mr-auto">
							<a href="index.html"><img src="assets/images/logo-white.png" alt=""/></a>
						</div>
						<div class="pt-social-link">
							<ul class="list-inline m-a0">
								<li><a href="#" class="btn-link"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
						<div class="pt-btn-join">
							<a href="#" class="btn ">Join Now</a>
						</div>
					</div>
				</div>
			</div> -->
            <div class="container" style="margin-top:20px;">

                <div class="row" style="margin-top:20px;">
					<div class="col-lg-4 col-md-12 col-sm-12 footer-col-4 mt-5">
                        <div class="widget">
                           <a href="https://web-fixes.com/"><img src="{{ asset('assets/images/logo.png') }}"></a>

                           <p class="mt-3" style="color:white;">Next Step Solutions have been helping big and small businesses and brands in leading towards success. </p>
                           <ul>
                        		<li>
                        			<!-- <img src="assets/images/facebook.jpg">
                        			<img src="assets/images/twitter.jpg">
                        			<img src="assets/images/instagram.jpg">
                        			<img src="assets/images/whatsapp.jpg">
                        			<img src="assets/images/skype.jpg"> -->
                        			<a href="https://www.facebook.com/nextstepsolutions"><i style="background-color:#1d42d9; height: 50px; width:50px; padding: 15px; color: white; border-radius: 5px; font-size: 24px;" class="fa fa-facebook" ></i>&nbsp;</a>

                        			<a href="https://www.instagram.com/nextstepsols/"><i style="background-color:#1d42d9; height: 50px; width:50px; padding: 15px; color: white; border-radius: 5px; font-size: 24px;" class="fa fa-twitter"></i>&nbsp;</a>
                        			<a href="https://www.instagram.com/webfixes12/"><i style="background-color:#1d42d9; height: 50px; width:50px; padding: 15px; color: white; border-radius: 5px; font-size: 24px;" class="fa fa-instagram"></i>&nbsp;</a>
                        			<!--<a href="https://api.whatsapp.com/send?phone=+17327980666&app=facebook&entry_point=page_cta&fbclid=IwAR3dHt_1Ik_hhKGo2NN-9xBD17TdFVOHWVvwhRo_qIwx0Nj-D_HYlgvDFo8">-->
                        			<!--	<i style="background-color:#1d42d9; height: 50px; width:50px; padding: 15px; color: white; border-radius: 5px; font-size: 24px;" class="fa fa-whatsapp"></i>&nbsp;-->
                        			<!--</a>-->
                        			<!--<a href="https://join.skype.com/invite/geIY0XButRpQ"><i style="background-color:#1d42d9; height: 50px; width:50px; padding: 15px; color: white; border-radius: 5px; font-size: 24px;" class="fa fa-skype"></i></a>-->

                        		</li>
                        	</ul>
                        	<!-- <img src="assets/images/nav.jpg" style="width:284px;"> -->
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-12 col-sm-12 footer-col-2 mt-5">
                        <div class="widget">
                            <h3 style="color:white;">Our Service</h3>
                            <hr style="background-color:white; width: 70px; margin-right: 200px;" class="mt-4">
							<ul  >
							 <li class="mt-3" ><a href="https://nextstepsols.com"><h6 style="color:white;">Website Design</h6></a></li>
							 <li class="mt-3"><a href="https://nextstepsols.com"><h6 style="color:white;">Mobile Apps</h6></a></li>
							 <li class="mt-3"><a href="https://nextstepsols.com"><h6 style="color:white;">Graphic Design</h6></a></li>
							</ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 footer-col-3 mt-5">
                        <div class="widget">
                            <h3 style="color:white;">Quick Link</h3>
                            <hr style="background-color:white; width: 70px; margin-right: 200px;"  class="mt-4">
							<ul  >
							 <li class="mt-3" ><a href="https://nextstepsols.com/contact-us/"><h6 style="color:white;">Contact Us</h6></a></li>
							 <li class="mt-3"><a href="https://nextstepsols.com/free-website-review/"><h6 style="color:white;">Free Website Review </h6></a></li>
							 <li class="mt-3"><a href="home.php"><h6 style="color:white;">Pricing</h6></a></li>

							</ul>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-12 col-sm-12 footer-col-3 mt-5">
                        <div class="widget">
                           <h3 style="color:white;">Contact Us</h3>
                            <hr style="background-color:white; width: 70px; margin-right: 200px;"  class="mt-4">
							<!-- <i class="fa fa-location-arrow" style="color:#1d42d9; font-size: 28px;  "></i>&nbsp;&nbsp;<span style="font-size: 21px; font-family: Arial, Helvetica, sans-serif; color:white; padding: 15px;"></i> -->
								<img style="  height: 30px; width: 36px; color:#1d42d9;" src="{{ asset('assets/images/location.png') }}" ><span style="font-size: 15px; font-family: Arial, Helvetica, sans-serif; color:white; padding: 15px;">7-A street # 3, New Shalimar Colony, Bosan Road Multan</span><br>
							<!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 21px; font-family: Arial, Helvetica, sans-serif; color:white; padding: 15px;">08823, New Jersey</span><br>-->
							<i class="fa fa-phone" style="background-color:#1d42d9; width: 30px; height: 30px; padding: 5px;border-radius: 3px; font-size: 24px;"></i>&nbsp;<span style="font-size: 15px; font-family: Arial, Helvetica, sans-serif; color:white; padding: 15px;">+92 332 0559987</span>
							<br>
							<i class="fa fa-envelope" style="color:#1d42d9; width: 35px; height: 35px; padding: 5px;border-radius: 3px; font-size: 24px;"></i><span style="font-size: 15px; font-family: Arial, Helvetica, sans-serif; color:white; padding: 15px;">info@nextstepsols.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr style="background-color:white; margin-top: -45px;">
        <div >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 " ><span style="color:white;">Copyright &copy; <?php echo date("Y"); ?> All Rights Reserved by Next Step Solutions</span>  </div>
                </div>
            </div>
            <br><br>
        </div>
    </footer>
    <!-- Footer END ==== -->
    <!-- <button class="back-to-top fa fa-chevron-up" ></button> -->
</div>

</div>
<!-- External JavaScripts -->
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/vendors/bootstrap/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{ asset('assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{ asset('assets/vendors/magnific-popup/magnific-popup.js')}}"></script>
<script src="{{ asset('assets/vendors/counter/waypoints-min.js')}}"></script>
<script src="{{ asset('assets/vendors/counter/counterup.min.js')}}"></script>
<script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.js')}}"></script>
<script src="{{ asset('assets/vendors/masonry/masonry.js')}}"></script>
<script src="{{ asset('assets/vendors/masonry/filter.js')}}"></script>
<script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{ asset('assets/js/functions.js')}}"></script>
<script src="{{ asset('assets/js/contact.js')}}"></script>
<!-- <script src='assets/vendors/switcher/switcher.js'></script> -->
<!-- Revolution JavaScripts Files -->
<script src="{{ asset('assets/vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ asset('assets/vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script>
jQuery(document).ready(function() {
	var ttrevapi;
	var tpj =jQuery;
	if(tpj("#rev_slider_486_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_486_1");
	}else{
		ttrevapi = tpj("#rev_slider_486_1").show().revolution({
			sliderType:"standard",
			jsFileLocation:"assets/vendors/revolution/js/",
			sliderLayout:"fullwidth",
			dottedOverlay:"none",
			delay:9000,
			navigation: {
				keyboardNavigation:"on",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
				mouseScrollReverse:"default",
				onHoverStop:"on",
				touch:{
					touchenabled:"on",
					swipe_threshold: 75,
					swipe_min_touches: 1,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				}
				,
				arrows: {
					style: "uranus",
					enable: true,
					hide_onmobile: false,
					hide_onleave: false,
					tmp: '',
					left: {
						h_align: "left",
						v_align: "center",
						h_offset: 10,
						v_offset: 0
					},
					right: {
						h_align: "right",
						v_align: "center",
						h_offset: 10,
						v_offset: 0
					}
				},

			},
			viewPort: {
				enable:true,
				outof:"pause",
				visible_area:"80%",
				presize:false
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1240,1024,778,480],
			gridheight:[768,600,600,600],
			lazyType:"none",
			parallax: {
				type:"scroll",
				origo:"enterpoint",
				speed:400,
				levels:[5,10,15,20,25,30,35,40,45,50,46,47,48,49,50,55],
				type:"scroll",
			},
			shadow:0,
			spinner:"off",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}
});
</script>
</body>

</html>


