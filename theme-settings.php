<?php

/**
 * @file
 * Custom theme settings for Pluraltheme.
 */

use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function pluraltheme_form_system_theme_settings_alter(&$form, FormStateInterface $form_state) {
  $theme = 'pluraltheme';

  $form['pluraltheme'] = [
    '#type' => 'details',
    '#title' => t('Pluraltheme custom settings'),
    '#open' => TRUE,
  ];

  $form['pluraltheme']['width_style'] = array(
    '#type' => 'select',
    '#title' => t('Fixed/Fluid'),
    '#default_value' => theme_get_setting('width_style', $theme),
    '#options' => array (
      0 => t('Fixed Width'),
      1 => t('Fluid Width'),
    ),
  );
  
  $form['pluraltheme']['fixedwidth'] = array(
    '#type' => 'textfield',
    '#title' => t('Fixed Width Size'),
    '#default_value' => theme_get_setting('fixedwidth', $theme),
    '#size' => 4,
    '#maxlength' => 4,
  ); 
    
  $form['pluraltheme']['layout_style'] = array(
    '#type' => 'select',
    '#title' => t('Layout Style'),
    '#default_value' => theme_get_setting('layout_style', $theme),
    '#options' => array (
      0 => t('Portal Style'),
      1 => t('News Style'),
	    2 => t('Blog Style'),
    ),
  );
  
  $form['pluraltheme']['leftwidth'] = array(
    '#type' => 'textfield',
    '#title' => t('Left Sidebar Width'),
    '#default_value' => theme_get_setting('leftwidth', $theme),
    '#size' => 5,
    '#maxlength' => 5,
  );

  $form['pluraltheme']['rightwidth'] = array(
    '#type' => 'textfield',
    '#title' => t('Right Sidebar Width'),
    '#default_value' => theme_get_setting('rightwidth', $theme),
    '#size' => 5,
    '#maxlength' => 5,
  );
  
  $form['pluraltheme']['color'] = array(
    '#type' => 'select',
    '#title' => t('Color'),
    '#default_value' => theme_get_setting('color', $theme),
    '#options' => array(
      0 => t('Default'),
      1 => t('Blue'),
	    2 => t('Green'),
    ),
  );
  
  $form['pluraltheme']['font_family'] = array(
    '#type' => 'select',
    '#title' => t('Font Family'),
    '#default_value' => theme_get_setting('font_family', $theme),
    '#options' => array (
      'Arial, Helvetica, sans-serif' => t('Arial, Helvetica, Sans-serif'),
      '"Times New Roman", Times, serif' => t('Times New Roman, Times, Serif'),
	    '"Courier New", Courier, monospace' => t('"Courier New", Courier, Monospace'),
	    'Georgia, "Times New Roman", Times, serif' => t('Georgia, "Times New Roman", Times, Serif'),
      'Verdana, Arial, Helvetica, sans-serif' => t('Verdana, Arial, Helvetica, Sans-serif'),
	    'Geneva, Arial, Helvetica, sans-serif' => t('Geneva, Arial, Helvetica, Sans-serif'),
    ),
  );
  
  $form['pluraltheme']['font_size'] = array(
    '#type' => 'select',
    '#title' => t('Font Size'),
    '#default_value' => theme_get_setting('font_size', $theme),
    '#options' => array (
      '0.7' => t('Smallest'),
	    '0.8' => t('Small'),
	    '1.0' => t('Default'),
	    '1.1' => t('Large'),
	    '1.2' => t('Largest'),	  
    ),
  );
  
  $form['pluraltheme']['menu_style'] = array(
    '#type' => 'select',
    '#title' => t('Menu Style'),
    '#default_value' => theme_get_setting('menu_style', $theme),
    '#options' => array (
      0 => t('Regular Suckerfish'),
	    1 => t('Enhanced Superfish'),
    ),
  );
  
  $form['pluraltheme']['show_breadcrumb'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Breadcrumbs'),
    '#default_value' => theme_get_setting('show_breadcrumb', $theme),
  );

  $form['pluraltheme']['use_default_banner'] = array(
    '#type' => 'checkbox',
    '#title' => t('Use default topbanner'),
    '#default_value' => theme_get_setting('use_default_banner', $theme),
  );

  return $form;
}
