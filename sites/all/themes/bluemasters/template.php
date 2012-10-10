<?php 


/**
 * Add javascript files for front-page jquery slideshow.
 */
if (drupal_is_front_page()) {
drupal_add_js(drupal_get_path('theme', 'bluemasters') . '/js/bluemasters.js');
}

/**
 * Implements theme_menu_tree().
 */
function bluemasters_menu_tree($variables) {
  return '<div class="menu-1"><div class="menu-2"><div class="menu-3"><ul class="menu">' . $variables['tree'] . '</ul></div></div></div>';
}
?>

