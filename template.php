<?php

function tweme_css_alter(&$css) {
  // reference https://friendlymachine.net/posts/how-remove-core-and-module-css-drupal-7-theme

  //dpm($css);

  $exclude = array(
    'modules/system/system.menus.css' => FALSE,
    '//cdn.jsdelivr.net/bootstrap/3.3.5/css/bootstrap.css' => FALSE,
    'https://cdn.jsdelivr.net/npm/bootstrap@3.4.0/dist/css/bootstrap.css' => FALSE,
    'sites/all/themes/bootstrap/css/3.3.5/overrides.min.css' => FALSE,
    'sites/all/themes/bootstrap/css/3.4.0/overrides.min.css' => FALSE,
    'misc/ui/jquery.ui.core.css' => FALSE,
    'sites/all/modules/views/css/views.css' => FALSE,
    'modules/node/node.css' => FALSE,
    'modules/field/theme/field.css' => FALSE,
    'sites/all/modules/date/date_api/date.css' => FALSE,
    'misc/ui/jquery.ui.theme.css' => FALSE,
    'misc/ui/jquery.ui.core.css' => FALSE,
  );
  $css = array_diff_key($css, $exclude);
}

/**
 * Render select_or_other fields.
 *
 * @param $variables
 *
 * @return string
 */
function tweme_select_or_other($variables) {
  $element = $variables['element'];

  // Render the "other" textfield directly succeeding the "other" radio button.
  $element['select']['select_or_other']['#suffix'] = drupal_render($element['other']);

  $output = "<div class=\"select-or-other\">\n";
  $output .= drupal_render_children($element) . "\n";
  $output .= "</div>\n";
  return $output;
}

?>
