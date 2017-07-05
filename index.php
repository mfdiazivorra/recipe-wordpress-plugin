<?php
/**
 * Plugin Name: Recipe
 * Description: A simple wordpress plugin that allows to create and rate recipes
 * Version: 1.0
 * Author: Manuel F Díaz
 * Author URI: https://github.com/mfdiazivorra
 * Text Domain: recipe
 */

//this is a securuty feature that avoids being able to call it directly
if (!function_exists('add_action')) {
  echo "not allowed to acces directly";
  exit();
}


// Setup
define('RECIPE_PLUGIN_URL', __FILE__);


// Includes
include('includes/activate.php');
include('includes/init.php');
include('includes/admin/init.php');

// Hooks
register_activation_hook( __FILE__ , 'r_activate_plugin' );
add_action('init', 'recipe_init');
add_action('admin_init', 'recipe_admin_init');

// Shortcodes



?>
