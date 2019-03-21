<?php 
function meteor_scripts() {
 
 wp_enqueue_style( 'style-css', get_template_directory_uri() . '/css/style.css'); 
 wp_enqueue_style( 'responcive-css', get_template_directory_uri() . '/css/responcive.css');
 wp_enqueue_style( 'fontAwesome-css', get_template_directory_uri() . '/css/fontawesome-all.min.css');
 wp_enqueue_style( 'meteor-hero-slider-css', get_template_directory_uri() . '/css/bootstrap.min.css' );


 wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/jquery.min.js', array(), '', true );
 wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
 wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), '', true );


 if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  wp_enqueue_script( 'comment-reply' );
 }
}

add_action( 'wp_enqueue_scripts', 'meteor_scripts' );
?>