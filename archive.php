<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dda
 */

get_header();
?>
	<div id="primary" class="section">
	<?php 
		if ( have_posts() ) : 
	?>
		<div class="container">
			<div class="row">
				<header class="col-12">
					<?php
					the_archive_title( '<h1 class="display-4">', '</h1>' );
					the_archive_description( '<div class="lead">', '</div>' );
					?>
				</header><!-- .page-header -->
			</div>
			<div class="row">
				<main id="main" class="col-md-8">

				<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

					dda_page_navi(); 
					// the_posts_navigation();
				?>
					
				</main>
				<div class="col-md-4">
					<?php
						get_sidebar();
					?>
				</div>
			</div>
		</div><!--/-container-->
	<?php
		else :

		get_template_part( 'template-parts/content', 'none' );

		endif;
	?>
	</div>

<?php
get_footer();
