<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Changes_Salon
 */

?>

<style>
	.comments-link  { display: block; }
	time.updated { display: none; }
	.entry-content { margin-top: 20px; }
</style>

<article id="post-<?php the_ID(); ?>" <?php post_class(""); ?>>
	<!-- ======================================================================
		Thumbnail
	====================================================================== -->
	<?php if(has_post_thumbnail()) { ?>
		<?php the_post_thumbnail('post-thumbnail', array( 'class' => "img-responsive full-img")); ?>
	<?php } ?>

	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php snow_theme_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php snow_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
