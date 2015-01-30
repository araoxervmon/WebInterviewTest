<?

$page = 'home';

?>
<html>
	<head>
		<link rel="shortcut icon" href="images/favicon.ico">
		<title>Loop</title>
		<? include('partials/head.php'); ?>
		
		
		<!-- Magnify CSS -->
		<link href="css/magnify/bootstrap-magnify.min.css" rel="stylesheet" media="screen">
	</head>
	<body>
	

		<? include('partials/nav.php'); ?>
		<!-- Main jumbotron for a primary marketing message or call to action -->

	    <div class="jumbotron header-jumbotron">
	      <div class="container">
	      	<div class="row">
	      		<div id="cta-title" class="col-sm-6 col-lg-5 col-lg-offset-1">
			        <div class="text">
						<img src="images/LoopLogoWords.png" class="img-responsive" alt="Loop">
						<br><br>
						<h3>Yes. No.<br> Get an answer. <br> Close the loop.</h3>
						<br>
					</div>

				    
					<p class="button-row">
				      	<a href="https://itunes.apple.com/us/app/loop-by-eko/id931539244?mt=8", target="itunes_store" button type="button" class="btn btn-default btn-store"><img src="images/badge-store-ios.svg" height="30" width="30"> App Store</a>
				      	<a href="https://play.google.com/store/apps/details?id=com.ekoapp.loop&hl=en" target="_blank" button type="button" class="btn btn-default btn-store pull-right"><img src="images/badge-store-play.svg" height="30" width="30"> Play Store</a>
				    </p>
				    </p>
		        </div>

		        
		         <div class="col-sm-6 screenshot-device">
		        	<img src="images/landing.png" data-toggle="magnify" class="img-responsive" alt="Responsive image">
		        </div>
		        

		      </div>
	    	</div>
	    </div>


		<? include('partials/features.php'); ?>
		<? include('partials/gallery.php'); ?>
		
		<? include('partials/contactus.php'); ?>
		<? include('partials/information.php'); ?>
	<!-- ======================= JQuery libs =========================== -->
		<script src="js/jquery.min.js"></script>
        <!-- Magnify -->
        <script src="js/magnify/bootstrap-magnify.min.js" type="text/javascript"></script>
	<!-- ======================= End JQuery libs ======================= -->
		
		<? include('partials/footer.php'); ?>
		<? include('partials/scripts.php'); ?>
	</body>
</html>
