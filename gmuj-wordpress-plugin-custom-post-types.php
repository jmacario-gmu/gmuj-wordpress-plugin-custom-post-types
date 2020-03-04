<?php

/**
 * Plugin Name:       Mason WordPress: Custom Post Types
 * Plugin URI:        https://github.com/jmacario-gmu/gmuj-wordpress-plugin-custom-post-types
 * Description:       Mason WordPress plugin which implements common custom post types.
 * Version:           0.0.1
 */

// Exit if this file is not called directly.
	if (!defined('WPINC')) {
		die;
	}

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