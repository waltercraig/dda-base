<?php
/**
 * Template Name: Landing
 *
 * @package dda
 */
get_header();?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="conotainer">
            <div class="row">
                <div class="col-xs-12">
                <?php
                    while ( have_posts() ) :
                        the_title( '<h1 class="">', '</h1>' )
                        the_content();

                    endwhile; // End of the loop.
                ?>
                </div>
            </div>
        </div>
    </main>
</div>

<?php get_footer()?>