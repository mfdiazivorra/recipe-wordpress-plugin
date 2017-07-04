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


// Includes
include('includes/activate.php');

// Hooks
register_activation_hook( __FILE__ , 'r_activate_plugin' );

// Shortcodes



?>
