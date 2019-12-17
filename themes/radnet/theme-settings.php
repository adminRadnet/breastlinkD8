<?php
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Theme\ThemeSettings;
use Drupal\system\Form\ThemeSettingsForm;
use Drupal\Core\Form;

function radnet_form_system_theme_settings_alter(&$form, Drupal\Core\Form\FormStateInterface $form_state) {
  $form['st_settings'] = array(
        '#type' => 'fieldset',
        '#title' => t('RadNet Theme Settings'),
        '#collapsible' => true,
        '#collapsed' => true,
    );
  
  // Menu style options
  $form['st_settings']['tabs']['theme_menu_config'] = array(
    '#type' => 'fieldset',
    '#title' => t('menu setting'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  
  $form['st_settings']['tabs']['theme_menu_config']['theme_menu'] = array(
    '#type' => 'select',
    '#title' => t('Menu Type'),
    '#default_value' => theme_get_setting('theme_menu','radnet'),
    '#options'  => array(
        'menudefault'	=> t('Light - Default'),
        'menuwhite'	=> t('White'),
        'menudark' 	=> t('Dark')
    ),
  );
  
  // Menu sticky option
  $form['st_settings']['tabs']['theme_menu_config']['menu_sticky'] = array(
    '#type' => 'checkbox',
    '#title' => t('Menu sticky'),
    '#default_value' => theme_get_setting('menu_sticky','radnet'),
	'#description' => 'Make the menu sticky',
  );
  
  // Menu hover option
  $form['st_settings']['tabs']['theme_menu_config']['menu_hover'] = array(
    '#type' => 'select',
    '#title' => t('Menu Expanding by Hover/Click'),
    '#default_value' => theme_get_setting('menu_hover','radnet'),
    '#options'  => array(
        'menu_click'	=> t('Click - Default'),
        'menu_hover'	=> t('Hover')
    ),
  );
  
}

