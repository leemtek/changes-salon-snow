<?php
/*
    Template Name: Woocommerce
*/

get_header(); ?>

<section class="container padding-bottom-40">
	<div class="row">
		<div class="col-lg-12">
			<?php woocommerce_content(); ?>
		</div><!-- /col -->
	</div><!-- /row -->
</section>

<?php get_footer(); ?>