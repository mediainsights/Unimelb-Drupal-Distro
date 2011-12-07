<?php

// thanks to Aaron Tan and team at the Faculty of Architecture, Building and Planning, University of Melbourne, and Paul Tagell and team at Marketing and Communications, University of Melbourne - Media Insights 2011

/**
 * remote
 */

drupal_add_css('http://brand.unimelb.edu.au/web-templates/1-2-0beta1/css/complete.css', array('group' => CSS_THEME, 'type' => 'external'));
drupal_add_js('http://brand.unimelb.edu.au/global-header/js/injection.js', 'external');

/**
 * can be local: /drupal/ or remote: http://brand.unimelb.edu.au/drupal/
 */

drupal_add_css('/drupal/7.x-1.0-beta1/css/unimelb_drupal_distro.css', array('group' => CSS_THEME, 'type' => 'external'));
drupal_add_js('/drupal/7.x-1.0-beta1/js/unimelb_drupal_distro.js', 'external');
drupal_add_js('/drupal/7.x-1.0-beta1/js/navigation.js', 'external');
drupal_add_js('/drupal/7.x-1.0-beta1/js/newsbanner.js', 'external');
drupal_add_js('/drupal/7.x-1.0-beta1/js/widgets.js', 'external');

/**
 * Make some Unimelb Settings variables available to js
 */

if(variable_get('unimelb_settings_site-name-short') && variable_get('unimelb_settings_site-name-short', '') != ''){
$site_name = variable_get('unimelb_settings_site-name-short');
$vars1 = array('sitename' => $site_name);
drupal_add_js($vars1, 'setting');
}

if(variable_get('unimelb_settings_parent-org-short') && variable_get('unimelb_settings_parent-org-short', '') != ''){
$parent_org = variable_get('unimelb_settings_parent-org-short');
$vars2 = array('parentorg' => $parent_org);
drupal_add_js($vars2, 'setting');
}

if(variable_get('unimelb_settings_parent-org-url') && variable_get('unimelb_settings_parent-org-url', '') != ''){
$parent_orgurl = variable_get('unimelb_settings_parent-org-url');
$vars3 = array('parentorgurl' => $parent_orgurl);
drupal_add_js($vars3, 'setting');
}
