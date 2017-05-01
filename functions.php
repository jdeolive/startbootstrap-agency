<?php

// deactivate built-in jquery
function dequeue_jquery_migrate( &$scripts){
  if(!is_admin()){
    $scripts->remove( 'jquery');
  }
}
add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );

// scripts and stylesheets
function camba_scripts() {
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '3.3.7' );
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css', array(), '4.6.3' );
  wp_enqueue_style( 'owl', get_template_directory_uri() . '/vendor/owl/assets/owl.carousel.min.css', array(), '2.2.0' );
  wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/vendor/owl/assets/owl.theme.default.min.css', array(), '2.2.0' );
  wp_enqueue_style( 'animate', get_template_directory_uri() . '/vendor/animate.css/animate.min.css', array(), '3.5.2' );
  
  wp_enqueue_style( 'camba', get_template_directory_uri() . '/css/camba.min.css', array(), '0.0.2' );

  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array(), '1.11.3', true);
  wp_enqueue_script( 'tether', get_template_directory_uri() . '/vendor/tether/tether.min.js', array(), '1.4.0', true);
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array(), '3.3.7', true);
  wp_enqueue_script( 'jquery-easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array(), '1.3', true);
  wp_enqueue_script( 'jquery-visible', get_template_directory_uri() . '/js/jquery.visible.js', array(), '0.0.1', true);
  wp_enqueue_script( 'owl', get_template_directory_uri() . '/vendor/owl/owl.carousel.min.js', array(), '2.2.0', true);
  wp_enqueue_script( 'jqBootstrapValidation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', array(), '0.0.1', true);
  wp_enqueue_script( 'contact_me', get_template_directory_uri() . '/js/contact_me.js', array(), '0.0.1', true);
  wp_enqueue_script( 'agency', get_template_directory_uri() . '/js/agency.min.js', array(), '0.0.1', true);
  wp_enqueue_script( 'camba', get_template_directory_uri() . '/js/camba.min.js', array(), '0.0.1', true);

}
add_action( 'wp_enqueue_scripts', 'camba_scripts' );

// google fonts
function camba_google_fonts() {
    wp_register_style('Montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:100,200,400,700');
    wp_register_style('Droid Serif', 'https://fonts.googleapis.com/css?family=Droid+Serif:100,200,400,700,400italic,700italic');
    wp_register_style('Roboto Slab', 'https://fonts.googleapis.com/css?family=Roboto+Slab:100,400,300,700');
    
    wp_enqueue_style( 'Montserrat');
    wp_enqueue_style( 'Droid Serif');
    wp_enqueue_style( 'Roboto Slab');
}
add_action('wp_print_styles', 'camba_google_fonts');

function camba_img($path) {
  echo get_template_directory_uri() . '/img/' . $path;
}
?>
