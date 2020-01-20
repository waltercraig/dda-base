<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package dda
 */

get_header();
?>
	<div id="primary" class="section four-0-4">
		<main id="main" class="container">
			<div class="row justify-content-md-center">
				<section class="col col-lg-4">
					<div class="card">
						<header class="card-header">
							<h1 class="h3 text-center"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'dda' ); ?></h1>
						</header>
						<div class="card-body">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'dda' ); ?></p>
						</div>
						<div class="card-body">
							<?php
								get_search_form();
							?>
						</div>
					</div><!--/-card-->
				</section><!--/-col--> 
			</div><!--/-row-->
		</main>
	</div>
<?php
get_footer();
