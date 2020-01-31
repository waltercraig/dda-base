<?php
// https://make.wordpress.org/core/2016/11/30/starter-content-for-themes-in-4-7/

add_theme_support( 'starter-content', array(
    // Content Section for Posts/Pages/CPT
    'posts' => array(
      // Post Symbol -> for internal use
      'kitchen-sink' => array(
          'post_type' => 'page', 
          'post_title' => _x( 'Kitchen', 'Kitchen Sink' ),
          'post_content' => file_get_contents(get_template_directory_uri() . 'content/pages/sink.html'),
      ),
    )
));