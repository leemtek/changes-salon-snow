<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Changes_Salon
 */

get_header(); ?>

<section class="container space-bottom-40">
	<div class="row">
		<div class="col-md-9">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<?php 
					$intCounter = 0;
					
					if ( have_posts() ) : 
						if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
						<?php endif; ?>
					
						<div class="row">
							<!-- Blog Post -->
							<?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();
									?>
									<div class="col-md-6 col-sm-12">
										<div class="panel panel-default">
											<div class="panel-body">
											<?php
												/*
												 * Include the Post-Format-specific template for the content.
												 * If you want to override this in a child theme, then include a file
												 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
												 */
												get_template_part( 'template-parts/content', get_post_format() );	
											?>
											</div><!-- /panel-body -->
										</div><!-- /panel -->
									</div><!-- /col -->
							
									<?php // This inserts clearfix every 2 posts.
										if ($intCounter % 2) {
											?> <div class="clearfix"></div> <?php
										} // if

										$intCounter++;
									?>
							
								<?php
								endwhile;
								the_posts_navigation();
							else :
								get_template_part( 'template-parts/content', 'none' );
							endif; ?>
						</div><!-- /row -->
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- /col -->
		
		<!-- Right Side | Widgets -->
		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div><!-- /col -->
	</div><!-- /row -->
</section><!-- /container -->

<?php
get_footer();
