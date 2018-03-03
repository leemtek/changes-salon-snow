<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Changes_Salon
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-71667411-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-71667411-1');
	</script>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- Import font -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

	<!-- Bootstrap -->
	<link href="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Font-awesome -->
	<link rel="stylesheet" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/bower_components/font-awesome/css/font-awesome.min.css">

	<!-- LeemTek -->
	<link href="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/css/leemtek.css" rel="stylesheet">

	<!-- Facebook Pixels -->
	<!-- <script src="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/includes/facebook-pixels.html"></script> -->
	<script>
		! function(f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function() {
				n.callMethod ?
					n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = '2.0';
			n.queue = [];
			t = b.createElement(e);
			t.async = !0;
			t.src = v;
			s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window,
			document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');

		fbq('init', '322109854650003');
		fbq('track', "PageView");
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=322109854650003&ev=PageView&noscript=1" /></noscript>
	<!-- End Facebook Pixel Code -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
		<!-- include | header -->
		<header>
			<div id="social" class="text-right">
				<div class="col-md-12">
					<ul class="list-inline">
						<li><a class="btn btn-default button-black" href="https://www.facebook.com/pages/Changes-Salon-Day-Spa/172296847881" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
						<li><a class="btn btn-default button-black" href="https://twitter.com/changeswc" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
						<li><a class="btn btn-default button-black" href="https://instagram.com/changeswc/" target="_blank"><i class="fa fa-instagram fa-lg"></i></a></li>
						<li><a class="btn btn-default button-black" href="http://www.yelp.com/biz/changes-salon-and-day-spa-walnut-creek" target="_blank"><i class="fa fa-yelp fa-lg"></i></a></li>
						<li><a class="btn btn-default button-black" href="https://plus.google.com/u/0/112284510401602783718/posts" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a></li>
						<li class="hidden-xs" id="phone">925.947.1814</li>
					</ul>
				</div>
			</div>

			<a href="/"><img src="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/img/logo.png"></a>

			<div id="sminfo">
				<a href="/salon-services">Salon</a>&nbsp; | &nbsp; 
				<a href="/spa-services">Spa</a> &nbsp;| &nbsp; 
				<a href="http://saas.shopsite.com/chan13/" target="_blank">Shop / Gift Cards</a> &nbsp;| &nbsp; 
				<a href="https://bookchangessalon.com/onlinebooking2/#/" target="_blank">Make an Appointment</a>
			</div>
		</header>

		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="navbar">
					<ul class="nav navbar-nav">
						<!-- main-menu -->
						<?php wp_nav_menu(array(
							"container"         => "ul",
							"theme_location"	=> "main-menu",
							"menu_class"		=> "nav navbar-nav",
							"walker"			=> new MainNav_Walker
						)); ?>
						<!-- main-menu end -->
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>
