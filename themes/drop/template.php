<?php

/**
 * Implements template_preprocess_page().
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

/**
 * Overrides theme_breadcrumb().
 * Removing raquo from markup
 */
function drop_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  $output = '';
  if (!empty($breadcrumb)) {
    $output .= '<nav role="navigation" class="breadcrumb">';
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output .= '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    $output .= '<ol><li>' . implode('</li><li>', $breadcrumb) . '</li></ol>';
    $output .= '</nav>';
  }
  return $output;
}
