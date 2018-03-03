<?php
/*
    Template Name: Contact Form 7
*/

/* ================================================================================
    WordPress Post Fields | Content
================================================================================ */
$objThePost = get_post();

get_header(); ?>

<style>
	
	/* ================================================================================
    Spa Services
	================================================================================ */
	@media only screen and (min-width: 769px) {
		.spa-services-box { 
			height: 434px;
		}
	}
	
	@media only screen and (min-width: 992px) {
		.spa-services-box { 
			height: 342px;
		}
	}
	
	@media only screen and (min-width: 1200px) {
		.spa-services-box { 
			height: 320px;
		}
	}
	
	.su-box-title-hover { background-color: rgba(255, 255, 255, 0) !important; color: #000 !important; }
	.su-box-content { background-color: rgba(255, 255, 255, 0) !important; }
	
	/* Massage */
	.massage:hover {
  	background: linear-gradient( rgba(255, 255, 255, 0.48), rgba(255, 255, 255, 0.48) ),
    url('https://changessalon.leemtek.com/wp-content/uploads/2017/09/massage.jpg');
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	
	/* Spa Body Therapies */
	.spa-body-therapies:hover {
  	background: linear-gradient( rgba(255, 255, 255, 0.48), rgba(255, 255, 255, 0.48) ),
    url('https://changessalon.leemtek.com/wp-content/uploads/2017/09/body.jpg');
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	
	/* Skin Care */
	.skin-care:hover {
  	background: linear-gradient( rgba(255, 255, 255, 0.48), rgba(255, 255, 255, 0.48) ),
    url('https://changessalon.leemtek.com/wp-content/uploads/2017/09/skin.jpg');
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	
	/* Medi Treatment */
	.medi-treatments:hover {
  	background: linear-gradient( rgba(255, 255, 255, 0.48), rgba(255, 255, 255, 0.48) ),
    url('https://changessalon.leemtek.com/wp-content/uploads/2017/09/medi.jpg');
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	
	/* Nails */
	.nails:hover {
  	background: linear-gradient( rgba(255, 255, 255, 0.48), rgba(255, 255, 255, 0.48) ),
    url('https://changessalon.leemtek.com/wp-content/uploads/2017/09/nails.jpg');
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	
	/* Hair Removal */
	.hair-removal:hover {
  	background: linear-gradient( rgba(255, 255, 255, 0.48), rgba(255, 255, 255, 0.48) ),
    url('https://changessalon.leemtek.com/wp-content/uploads/2017/09/removal.jpg');
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	
	/* Packages */
	.packages:hover {
  	background: linear-gradient( rgba(255, 255, 255, 0.48), rgba(255, 255, 255, 0.48) ),
    url('https://changessalon.leemtek.com/wp-content/uploads/2017/09/packages.jpg');
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	
	/* Memberships */
	.memberships:hover {
  	background: linear-gradient( rgba(255, 255, 255, 0.48), rgba(255, 255, 255, 0.48) ),
    url('https://changessalon.leemtek.com/wp-content/uploads/2017/09/membership.jpg');
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	
	/* Group Events */
	.group-events:hover {
  	background: linear-gradient( rgba(255, 255, 255, 0.48), rgba(255, 255, 255, 0.48) ),
    url('https://changessalon.leemtek.com/wp-content/uploads/2017/09/event-spa.jpg');
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	
	/* ================================================================================
    Salon Services
	================================================================================ */
	@media only screen and (min-width: 769px) {
		#salon-services .spa-services-box { 
			height: 434px;
		}
	}
	
	@media only screen and (min-width: 992px) {
		#salon-services .spa-services-box { 
			height: 367px;
		}
	}
	
	@media only screen and (min-width: 1200px) {
		#salon-services .spa-services-box { 
			height: 345px;
		}
	}
	
	.su-box-title-hover { background-color: rgba(255, 255, 255, 0) !important; color: #000 !important; }
	.su-box-content { background-color: rgba(255, 255, 255, 0) !important; }
	
	/* Hair Services */
	.massage:hover {
  	background: linear-gradient( rgba(255, 255, 255, 0.48), rgba(255, 255, 255, 0.48) ),
    url('https://changessalon.leemtek.com/wp-content/uploads/2017/09/hair.jpg');
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	
	/* Weddings & Special Events */
	.spa-body-therapies:hover {
  	background: linear-gradient( rgba(255, 255, 255, 0.48), rgba(255, 255, 255, 0.48) ),
    url('https://changessalon.leemtek.com/wp-content/uploads/2017/09/weddings.jpg');
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	
	/* Nails */
	.skin-care:hover {
  	background: linear-gradient( rgba(255, 255, 255, 0.48), rgba(255, 255, 255, 0.48) ),
    url('https://changessalon.leemtek.com/wp-content/uploads/2017/09/nails.jpg');
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	
	/* Make-Up */
	.medi-treatments:hover {
  	background: linear-gradient( rgba(255, 255, 255, 0.48), rgba(255, 255, 255, 0.48) ),
    url('https://changessalon.leemtek.com/wp-content/uploads/2017/09/makeup.jpg');
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	
	/* Hair Removal */
	.nails:hover {
  	background: linear-gradient( rgba(255, 255, 255, 0.48), rgba(255, 255, 255, 0.48) ),
    url('https://changessalon.leemtek.com/wp-content/uploads/2017/09/removal.jpg');
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	
	/* Especially For Men */
	.hair-removal:hover {
  	background: linear-gradient( rgba(255, 255, 255, 0.48), rgba(255, 255, 255, 0.48) ),
    url('https://changessalon.leemtek.com/wp-content/uploads/2017/09/men.jpg');
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	
	/* Packages */
	.packages:hover {
  	background: linear-gradient( rgba(255, 255, 255, 0.48), rgba(255, 255, 255, 0.48) ),
    url('https://changessalon.leemtek.com/wp-content/uploads/2017/09/packages.jpg');
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	
	/* VIP Program */
	.memberships:hover {
  	background: linear-gradient( rgba(255, 255, 255, 0.48), rgba(255, 255, 255, 0.48) ),
    url('https://changessalon.leemtek.com/wp-content/uploads/2017/09/vip.jpg');
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	
	/* Group Events */
	.group-events:hover {
  	background: linear-gradient( rgba(255, 255, 255, 0.48), rgba(255, 255, 255, 0.48) ),
    url('https://changessalon.leemtek.com/wp-content/uploads/2017/09/events-salon.jpg');
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
</style>

<script>
	// Forwards to a thank you page when email is sent.
	document.addEventListener( 'wpcf7mailsent', function( event ) {
		location = "/email-sent";
	}, false );
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
	$(document) .ready(function() {
		
		// Massage
		$(".massage") .hover(function() {
			$(".massage > .su-box-title") .addClass("su-box-title-hover");
		},             
			function() {
			$(".massage > .su-box-title") .removeClass("su-box-title-hover");
		});
		
		// Spa Body Therapies
		$(".spa-body-therapies") .hover(function() {
			$(".spa-body-therapies > .su-box-title") .addClass("su-box-title-hover");
		},             
			function() {
			$(".spa-body-therapies > .su-box-title") .removeClass("su-box-title-hover");
		});
		
		// Skin Care
		$(".skin-care") .hover(function() {
			$(".skin-care > .su-box-title") .addClass("su-box-title-hover");
		},             
			function() {
			$(".skin-care > .su-box-title") .removeClass("su-box-title-hover");
		});
		
		// Medi Treatments
		$(".medi-treatments") .hover(function() {
			$(".medi-treatments > .su-box-title") .addClass("su-box-title-hover");
		},             
			function() {
			$(".medi-treatments > .su-box-title") .removeClass("su-box-title-hover");
		});
		
		// Nails
		$(".nails") .hover(function() {
			$(".nails > .su-box-title") .addClass("su-box-title-hover");
		},             
			function() {
			$(".nails > .su-box-title") .removeClass("su-box-title-hover");
		});
		
		// Hair Removal
		$(".hair-removal") .hover(function() {
			$(".hair-removal > .su-box-title") .addClass("su-box-title-hover");
		},             
			function() {
			$(".hair-removal > .su-box-title") .removeClass("su-box-title-hover");
		});
		
		// Packages
		$(".packages") .hover(function() {
			$(".packages > .su-box-title") .addClass("su-box-title-hover");
		},             
			function() {
			$(".packages > .su-box-title") .removeClass("su-box-title-hover");
		});
		
		// Memberships
		$(".memberships") .hover(function() {
			$(".memberships > .su-box-title") .addClass("su-box-title-hover");
		},             
			function() {
			$(".memberships > .su-box-title") .removeClass("su-box-title-hover");
		});
		
		// Group Events
		$(".group-events") .hover(function() {
			$(".group-events > .su-box-title") .addClass("su-box-title-hover");
		},             
			function() {
			$(".group-events > .su-box-title") .removeClass("su-box-title-hover");
		});
	});
</script>

<section class="container padding-bottom-40">
	<div class="row">
		<div class="col-lg-12">
            <?php echo apply_filters('the_content', $objThePost->post_content); ?>
		</div><!-- /col -->
	</div><!-- /row -->
</section>

<?php get_footer();