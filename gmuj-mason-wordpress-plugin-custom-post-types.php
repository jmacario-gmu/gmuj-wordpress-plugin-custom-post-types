<?php

/**
 * Plugin Name:       GMUJ WordPress Custom Post Types
 * Plugin URI:        https://github.com/jmacario-gmu/gmuj-mason-wordpress-plugin-custom-post-types
 * Description:       Mason WordPress plugin which implements common custom post types.
 * Version:           1.0.0
 * Author:            Jan Macario
 * Author URI:        
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gmuj-mason-wordpress-plugin-custom-post-types
 * Domain Path:       /languages
 */

// Exit if this file is not called directly.
	if (!defined('WPINC')) {
		die;
	}

// Define plugin constants
	define('GMUJ_VERSION', '1.0.0');
	define('GMUJDOMAIN', 'gmuj-mason-wordpress-plugin-custom-post-types');
	define('GMUJPATH', plugin_dir_path( __FILE__ ));

// Include custom post types definitions
	require_once(GMUJPATH . '/post-types/register.php');

// Register custom post types
	// Person
		add_action('init', 'gmuj_register_custom_post_type_person');
	// Event
		add_action('init', 'gmuj_register_custom_post_type_event');
	// Article
		add_action('init', 'gmuj_register_custom_post_type_article');

// Include custom taxonomies  definitions
	require_once(GMUJPATH . '/taxonomies/register.php');

// Register custom taxonomies
	// Person 
		add_action('init', 'gmuj_register_custom_taxonomy_person_type');
		add_action('init', 'gmuj_register_custom_taxonomy_person_location');
	// Event
		add_action('init', 'gmuj_register_custom_taxonomy_event_type');
		add_action('init', 'gmuj_register_custom_taxonomy_event_location');
	// Article
		add_action('init', 'gmuj_register_custom_taxonomy_article_category');
		add_action('init', 'gmuj_register_custom_taxonomy_article_tag');