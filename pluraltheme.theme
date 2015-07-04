<?php

/* Body class control */

function phptemplate_body_class($left, $right) {
  if ($left != '' && $right != '') {
    $class = 'sidebars';
  }
  else {
    if ($left != '') {
      $class = 'sidebar-left';
    }
    if ($right != '') {
      $class = 'sidebar-right';
    }
  }

  if (isset($class)) {
    print ' class="'. $class .'"';
  }
}

// Initialize Theme Settings

if (is_null(theme_get_setting('fixedwidth'))) {  
  global $theme_key;

  $defaults = array(            
	  'width_style' => 0,
	  'fixedwidth' => 960,
	  'layout_style' => 0,
	  'leftwidth' => 200,
	  'rightwidth' => 200,
	  'color' => 0,
	  'font_family' => 'Arial, Helvetica, sans-serif',
	  'font_size' => '0.9',
	  'menu_style' => 0,
	  'show_breadcrumb' => 0,	
  );

  variable_set(
    str_replace('/', '_', 'theme_'. $theme_key .'_settings'),
    array_merge($defaults, theme_get_settings($theme_key))
  );

  theme_get_setting('', TRUE);
}

// Javascript Includes

drupal_add_js(drupal_get_path('theme', 'pluraltheme') . '/js/jquery.pngFix.js', 'theme'); 

$menu_style = theme_get_setting('menu_style');

  if  ($menu_style == 0) {
    drupal_add_js(drupal_get_path('theme', 'pluraltheme') . '/js/suckerfish.js', 'theme'); } 
  else {
    drupal_add_js(drupal_get_path('theme', 'pluraltheme') . '/js/superfish.js', 'theme'); 
} 

// CSS Includes
  
$color = theme_get_setting('color');

  if ($color == 0) {
    drupal_add_css(drupal_get_path('theme', 'pluraltheme') . '/css/default-style.css', 'theme'); } 
  else if ($color == 1){ 
    drupal_add_css(drupal_get_path('theme', 'pluraltheme') . '/css/blue-style.css', 'theme'); } 
  else if ($color == 2){ 
    drupal_add_css(drupal_get_path('theme', 'pluraltheme') . '/css/green-style.css', 'theme'); 
  } 
  
?>
