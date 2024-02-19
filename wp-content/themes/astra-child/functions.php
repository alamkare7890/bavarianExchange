<?php

  add_theme_support( 'menus', 'Menu' );


/**
 * Proper way to enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
function wpdocs_theme_name_scripts() {
  wp_enqueue_style( 'theme-Style', get_stylesheet_uri() );
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/fancybox.css' );
  wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.min.css' );
  wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.min.css' );
  wp_enqueue_style( 'fontawesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css' );


  wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', array(), 'all',true);
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jQuery'), 'all',true);
  wp_enqueue_script( 'fancybox-js', get_template_directory_uri() . '/js/fancybox.umd.js', array('jQuery'), 'all',true);
  wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array('jQuery'), 'all',true);
  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/common.js', array('jQuery'), 'all',true);
}
  


// ACF Options Page : 
  if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
      'page_title'    => 'Theme General Settings',
      'menu_title'    => 'Theme Settings',
      'menu_slug'     => 'theme-general-settings',
      'capability'    => 'edit_posts',
      'redirect'      => false
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'Theme Header Settings',
      'menu_title'    => 'Header',
      'parent_slug'   => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'Theme Footer Settings',
      'menu_title'    => 'Footer',
      'parent_slug'   => 'theme-general-settings',
  ));

}


// Register your menus
function my_custom_menus() {
  $locations = array(
      'Header'   => 'Site Header',
      'Footer'  => 'Site Footer',
  );
  register_nav_menus( $locations );
}

// Hook them into the theme-'init' action
add_action( 'init', 'my_custom_menus' );


//register a custom post using 


wp_localize_script( 'twentyfifteen-script', 'ajax_posts', array(
  'ajaxurl' => admin_url( 'admin-ajax.php' ),
  'noposts' => __('No older posts found', 'twentyfifteen'),
));

function weichie_load_more() {
  $ajaxposts = new WP_Query([
    'post_type' => 'article',
    'posts_per_page' => 6,
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $_POST['paged'],
  ]);

  $response = '';

  if($ajaxposts->have_posts()) {
    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
      $response .= get_template_part('auctions.-custom-post', 'article');
    endwhile;
  } else {
    $response = '';
  }

  echo $response;
  exit;
}
add_action('wp_ajax_weichie_load_more', 'weichie_load_more');
add_action('wp_ajax_nopriv_weichie_load_more', 'weichie_load_more');