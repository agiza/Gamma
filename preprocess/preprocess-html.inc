<?php
// $Id: preprocess-html.inc,v 1.1 2011/01/07 16:10:59 himerus Exp $
/**
 * @file
 * preprocess-block.inc is an alternate location for storage on items
 * to be ran during hook_preprocess_html.
 */
 
// add jQuery UI elements to make the primary menu pop
drupal_add_js('misc/ui/jquery.effects.core.min.js');
drupal_add_js('misc/ui/jquery.effects.bounce.min.js');

// responsive grid css
if (theme_get_setting('omega_responsive_grid') == 'enabled') {
  // 720px grid (if enabled)
  if(omega_theme_get_setting('omega_responsive_medium')) {
    drupal_add_css(drupal_get_path('theme', 'gamma') . '/css/720gs.css', array(
      'group' => CSS_THEME, 
      'every_page' => TRUE, 
      'weight', 20,
      )
    );
  }
  if(omega_theme_get_setting('omega_responsive_default')) {
    drupal_add_css(drupal_get_path('theme', 'gamma') . '/css/960gs.css', array(
      'group' => CSS_THEME, 
      'every_page' => TRUE, 
      'weight', 21,
      )
    );
  }
  if(omega_theme_get_setting('omega_responsive_large')) {
    drupal_add_css(drupal_get_path('theme', 'gamma') . '/css/1200gs.css', array(
      'group' => CSS_THEME, 
      'every_page' => TRUE, 
      'weight', 21,
      )
    );
  }
}