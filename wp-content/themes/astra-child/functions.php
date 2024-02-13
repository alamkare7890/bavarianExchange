<?php

  add_theme_support( 'menus', 'Menu' );


/**
 * Proper way to enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
function wpdocs_theme_name_scripts() {
  wp_enqueue_style( 'theme-Style', get_stylesheet_uri() );
}
  