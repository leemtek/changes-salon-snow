<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Changes_Salon
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<style>
	/* Modifies Search Form */
	#search-2 form {
		padding: 10px 0px 10px 15px;
	}
</style>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
