<?php

/**
 * Implements template_preprocess_page
 */
function drop_preprocess_layout(&$variables) {
  $theme_path = backdrop_get_path('theme', 'drop');
  $seven_theme_path = backdrop_get_path('theme', 'seven');

  if (!empty($variables['tabs'])) {
    backdrop_add_css($theme_path . '/css/admin-tabs.css');
    backdrop_add_js($seven_theme_path . '/js/script.js');
  }

  if ($variables['is_front']) {
    $variables['classes'][] = 'layout-front';
  }
}
