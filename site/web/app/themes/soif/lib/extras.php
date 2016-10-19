<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
* Add typescript
*/
function soif_typekit() {
  wp_enqueue_script('soif_typekit', '//use.typekit.net/axl4hyh.js', array(), '1.0.0');
}
add_action( 'wp_enqueue_scripts',  __NAMESPACE__ . '\\soif_typekit');

function soif_typekit_inline() {
    if (wp_script_is('soif_typekit', 'enqueued' )) {
       echo '<script type="text/javascript">try{Typekit.load();}catch(e){}</script>';
    }
}
add_action( 'wp_head', __NAMESPACE__ . '\\soif_typekit_inline');

