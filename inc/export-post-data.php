<?php
function export_posts_in_json (){

    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    );

    $query = new WP_Query( $args );

    $posts = array();

    while( $query->have_posts() ) : $query->the_post();

    // Add a car entry
    $posts[] = array(
        'title' => get_the_title(),
        'excerpt' => get_the_excerpt(),
        'author' => get_the_author(),
        'custom' => get_field('custom')
    );

    endwhile;

    wp_reset_query();

    $data = json_encode($posts);
    $upload_dir = wp_get_upload_dir();
    $file_name = date('Y-m-d') . '.json';
    $save_path = $upload_dir['basedir'] . '/' . $file_name;

    $f = fopen( $save_path , "w" ); //if json file doesn't gets saved, comment this and uncomment the one below
    //$f = @fopen( $save_path , "w" ) or die(print_r(error_get_last(),true)); //if json file doesn't gets saved, uncomment this to check for errors
    fwrite($f , $data);
    fclose($f);
}

add_action( 'save_post', 'export_posts_in_json' );