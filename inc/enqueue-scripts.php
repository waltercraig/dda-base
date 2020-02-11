<?php
/**
 * Enqueue scripts and styles.
 */
function dda_scripts() {
	wp_enqueue_style( 'dda-style', get_stylesheet_uri() );

	wp_enqueue_style( 'dda-style-main', get_template_directory_uri() . '/assets/css/main-min.css' );

	//Bootstrap
	wp_enqueue_script( 'dda-bootstrap-jquery','https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'dda-bootstrap-popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'dda-bootstrap-js','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ),'',true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dda_scripts' );

/**
 * Custom Image Sizes
 */
require get_template_directory() . '/inc/cleanup.php';

/**
 * Custom Image Sizes
 */
require get_template_directory() . '/inc/required-plugins.php';

/**
 * Custom Image Sizes
 */
require get_template_directory() . '/inc/custom-image-sizes.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Bootstrap 4 Nav Walker
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Admin / Dashboard Modifications
 */
require get_template_directory() . '/inc/admin.php';

/**
 * Custom Dashboard Login form
 */
require get_template_directory() . '/inc/login.php';

/**
 * Add in some default pages
 */
require get_template_directory() . '/inc/starter-content.php';

/**
 * Woocommerce.
 */
// require get_template_directory() . '/inc/woo.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}