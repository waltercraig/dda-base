<?php
//Set up pages to be added on theme activation
$pages = array( 
  array(
      'name' => 'Kitchen',
      'title' => 'Kitchen',
      'post_content' => file_get_contents(get_template_directory_uri() . '/content/pages/sink.html'),
  ),
  array(
      'name' => 'Cookies',
      'title' => 'Cookies',
      'post_content' => file_get_contents(get_template_directory_uri() . '/content/pages/cookies.html'),
  ),
  array(
      'name' => 'Privacy Policy',
      'title' => 'Privacy Policy',
      'post_content' => file_get_contents(get_template_directory_uri() . '/content/pages/privacy-policy.html'),
  ),
);

// Global page options
$template = array(
  'post_type' => 'page',
  'post_status' => 'publish',
  'post_author' => 1
);

// Check if page exists if it doesn't add page
foreach( $pages as $page ) {
  $exists = get_page_by_title( $page['title'] );

  if( !$exists->ID ) {
    $my_page = array(
        'post_name' => $page['name'],
        'post_title' => $page['title'],
        'post_content' => $page['post_content']
    );
    $my_page = array_merge( $my_page, $template );
    $insert = wp_insert_post( $my_page );
    if( $insert ) {
          // Page was inserted ($insert = new page's ID)
      }
  } else {
      // Page already exists
  }
}