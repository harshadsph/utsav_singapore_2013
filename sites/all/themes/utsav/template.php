<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */
 
 function utsav_preprocess_page(&$variables) {
  // Get the entire main menu tree
  $main_menu_tree = menu_tree_all_data('main-menu');
  
  //Get the Theme path 
  $theme_path = drupal_get_path('theme', 'utsav');

  // Add the rendered output to the $main_menu_expanded variable
  $variables['main_menu_expanded'] = menu_tree_output($main_menu_tree);
  
  //If front page, then add the javascript for home page slider.  
  if($variables['is_front']){
		drupal_add_css("$theme_path/css/camera.css");
		drupal_add_js("$theme_path/js/jquery.mobile.customized.min.js");
		drupal_add_js("$theme_path/js/jquery.easing.1.3.js");
		drupal_add_js("$theme_path/js/camera.min.js");
  }
  
}