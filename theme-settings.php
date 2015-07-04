<?php

function phptemplate_settings($saved_settings) {

 $defaults = array(
    'width_style' => 0,
	  'fixedwidth' => 960,
	  'layout_style' => 0,
	  'leftwidth' => 200,
	  'rightwidth' => 200,
	  'color' => 0,
	  'font_family' => 'Arial, Helvetica, sans-serif',
	  'font_size' => '0.8',
	  'menu_style' => 0,
	  'show_breadcrumb' => 0,
    'use_default_banner' > 0,
  );
  
  $settings = array_merge($defaults, $saved_settings);
  
  $form['width_style'] = array(
    '#type' => 'select',
    '#title' => t('Fixed/Fluid'),
    '#default_value' => $settings['width_style'],
    '#options' => array (
      0 => t('Fixed Width'),
      1 => t('Fluid Width'),
    ),
  );
  
  $form['fixedwidth'] = array(
    '#type' => 'textfield',
    '#title' => t('Fixed Width Size'),
    '#default_value' => $settings['fixedwidth'],
    '#size' => 4,
    '#maxlength' => 4,
  ); 
    
  $form['layout_style'] = array(
    '#type' => 'select',
    '#title' => t('Layout Style'),
    '#default_value' => $settings['layout_style'],
    '#options' => array (
      0 => t('Portal Style'),
      1 => t('News Style'),
	    2 => t('Blog Style'),
    ),
  );
  
  $form['leftwidth'] = array(
    '#type' => 'textfield',
    '#title' => t('Left Sidebar Width'),
    '#default_value' => $settings['leftwidth'],
    '#size' => 5,
    '#maxlength' => 5,
  );

  $form['rightwidth'] = array(
    '#type' => 'textfield',
    '#title' => t('Right Sidebar Width'),
    '#default_value' => $settings['rightwidth'],
    '#size' => 5,
    '#maxlength' => 5,
  );
  
  $form['color'] = array(
    '#type' => 'select',
    '#title' => t('Color'),
    '#default_value' => $settings['color'],
    '#options' => array (
      0 => t('Default'),
      1 => t('Blue'),
	  2 => t('Green'),
    ),
  );
  
  $form['font_family'] = array(
    '#type' => 'select',
    '#title' => t('Font Family'),
    '#default_value' => $settings['font_family'],
    '#options' => array (
      'Arial, Helvetica, sans-serif' => t('Arial, Helvetica, Sans-serif'),
      '"Times New Roman", Times, serif' => t('Times New Roman, Times, Serif'),
	    '"Courier New", Courier, monospace' => t('"Courier New", Courier, Monospace'),
	    'Georgia, "Times New Roman", Times, serif' => t('Georgia, "Times New Roman", Times, Serif'),
      'Verdana, Arial, Helvetica, sans-serif' => t('Verdana, Arial, Helvetica, Sans-serif'),
	    'Geneva, Arial, Helvetica, sans-serif' => t('Geneva, Arial, Helvetica, Sans-serif'),
    ),
  );
  
  $form['font_size'] = array(
    '#type' => 'select',
    '#title' => t('Font Size'),
    '#default_value' => $settings['font_size'],
    '#options' => array (
      '0.7' => t('Smallest'),
	    '0.8' => t('Small'),
	    '1.0' => t('Default'),
	    '1.1' => t('Large'),
	    '1.2' => t('Largest'),	  
    ),
  );
  
  $form['menu_style'] = array(
    '#type' => 'select',
    '#title' => t('Menu Style'),
    '#default_value' => $settings['menu_style'],
    '#options' => array (
      0 => t('Regular Suckerfish'),
	    1 => t('Enchanced Superfish'),  
    ),
  );
  
  $form['show_breadcrumb'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Breadcrumbs'),
    '#default_value' => $settings['show_breadcrumb'],
  );

  $form['use_default_banner'] = array(
    '#type' => 'checkbox',
    '#title' => t('Use default topbanner'),
    '#default_value' => $settings['use_default_banner'],
  );
  
  return $form;
}

?>