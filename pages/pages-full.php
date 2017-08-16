<?php
/*
    Template Name: Full Page
*/

/* ================================================================================
    WordPress Post Fields | Content
================================================================================ */
$objThePost = get_post();

get_header(); ?>

<style>
	@media screen and (min-width: 1200px) {
		.spa-services-box { 
			height: 320px;
		}
	}
	
	.spa-services-box { border: thin solid #a7a7a7 !important; }
	.su-box-title { background-color: #676767 !important; }
</style>

<section class="container padding-bottom-40">
	<div class="row">
		<div class="col-lg-12">
            <?php echo apply_filters('the_content', $objThePost->post_content); ?>
		</div><!-- /col -->
	</div><!-- /row -->
</section>

<?php get_footer();