<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dda
 */

get_header();
?>

	<div id="primary" class="section">
		<div class="container">
			<div class="row">
				<main id="main" class="col-xs-12 col-md-6 offset-md-1">
					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

						the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</main><!-- #main -->
				<aside class="col-xs-12 col-md-4 offset-md-1">
					<?php get_sidebar(); ?>
				</aside>
			</div><!--/-row-->
		</div><!--/-container-->
	</div><!-- #primary -->

<?php

get_footer();
