<?php
// Register menus
register_nav_menus(
	array(
		'main-nav'		=> __( 'The Main Menu', 'dda' ), // Main nav in header
		// 'offcanvas-nav'	=> __( 'The Off-Canvas Menu', 'dda-base' ),	// Off-Canvas nav
		// 'footer-links'	=> __( 'Footer Links', 'dda-base' )	// Secondary nav in footer
	)
);

// The Footer Menu
function dda_footer_links() {
	wp_nav_menu(array(
		'container'			=> 'false',				// Remove nav container
		'menu_id'			=> 'footer-links',		// Adding custom nav id
		'menu_class'		=> 'menu',				// Adding custom nav class
		'theme_location'	=> 'footer-links',		// Where it's located in the theme
		'depth'				=> 0,					// Limit the depth of the nav
		'fallback_cb'		=> ''					// Fallback function
	));
} /* End Footer Menu */