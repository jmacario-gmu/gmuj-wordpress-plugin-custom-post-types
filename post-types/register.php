<?php 


// Register custom post type - person

	function gmuj_register_custom_post_type_person() {

		// Set custom post type labels
			$labels = array(
				'name' => 'People',
				'singular_name' => 'Person',
				'add_new' => 'Add New Person',
				'add_new_item' => 'Add New Person',
				'edit_item' => 'Edit Person',
				//'new_item' => '',
				//'view_item' => '',
				//'view_items' => '',
				'search_items' => 'Search People',
				'not_found' => 'No people',
				//'not_found_in_trash' => '',
				//'parent_item_colon' => '',
				//'all_items' => '',
				//'archives' => '',
				//'attributes' => '',
				//'insert_into_item' => '',
				//'uploaded_to_this_item' => '',
				//'featured_image' => '',
				//'set_featured_image' => '',
				//'remove_featured_image' => '',
				//'use_featured_image' => '',
				//'menu_name' => '',
				//'filter_items_list' => '',
				//'items_list_navigation' => '',
				//'items_list' => '',
				//'name_admin_bar' => '',
				//'item_published' => '',
				//'item_published_privately' => '',
				//'item_reverted_to_draft' => '',
				//'item_scheduled' => '',
				//'item_updated' => '',
			);

		// Set arguments for registering custom post type
			$args = array( 
				'labels' => $labels,
				'public' => true,
				'has_archive' => 'people',
				'rewrite' => array('has_front' => true),
				'menu_icon' => 'dashicons-groups',
				'supports' => array('title', 'editor', 'thumbnail'),
				'show_in_rest' => true,

			);

		// Register custom post type
			register_post_type('person', $args);

	}

// Register custom post type - event

	function gmuj_register_custom_post_type_event() {

		// Set custom post type labels
			$labels = array(
				'name' => 'Events',
				'singular_name' => 'Event',
				'add_new' => 'Add New Event',
				'add_new_item' => 'Add New Event',
				'edit_item' => 'Edit Events',
				//'new_item' => '',
				//'view_item' => '',
				//'view_items' => '',
				'search_items' => 'Search Events',
				'not_found' => 'No events',
				//'not_found_in_trash' => '',
				//'parent_item_colon' => '',
				//'all_items' => '',
				//'archives' => '',
				//'attributes' => '',
				//'insert_into_item' => '',
				//'uploaded_to_this_item' => '',
				//'featured_image' => '',
				//'set_featured_image' => '',
				//'remove_featured_image' => '',
				//'use_featured_image' => '',
				//'menu_name' => '',
				//'filter_items_list' => '',
				//'items_list_navigation' => '',
				//'items_list' => '',
				//'name_admin_bar' => '',
				//'item_published' => '',
				//'item_published_privately' => '',
				//'item_reverted_to_draft' => '',
				//'item_scheduled' => '',
				//'item_updated' => '',
			);

		// Set arguments for registering custom post type
			$args = array( 
				'labels' => $labels,
				'public' => true,
				'has_archive' => 'events',
				'rewrite' => array('has_front' => true),
				'menu_icon' => 'dashicons-calendar',
				'supports' => array('title', 'editor', 'thumbnail'),
				'show_in_rest' => true,

			);

		// Register custom post type
			register_post_type('event', $args);

	}

// Register custom post type - article

	function gmuj_register_custom_post_type_article() {

		// Set custom post type labels
			$labels = array(
				'name' => 'Articles',
				'singular_name' => 'Article',
				'add_new' => 'Add New Article',
				'add_new_item' => 'Add New Article',
				'edit_item' => 'Edit Articles',
				//'new_item' => '',
				//'view_item' => '',
				//'view_items' => '',
				'search_items' => 'Search Articles',
				'not_found' => 'No articles',
				//'not_found_in_trash' => '',
				//'parent_item_colon' => '',
				//'all_items' => '',
				//'archives' => '',
				//'attributes' => '',
				//'insert_into_item' => '',
				//'uploaded_to_this_item' => '',
				//'featured_image' => '',
				//'set_featured_image' => '',
				//'remove_featured_image' => '',
				//'use_featured_image' => '',
				//'menu_name' => '',
				//'filter_items_list' => '',
				//'items_list_navigation' => '',
				//'items_list' => '',
				//'name_admin_bar' => '',
				//'item_published' => '',
				//'item_published_privately' => '',
				//'item_reverted_to_draft' => '',
				//'item_scheduled' => '',
				//'item_updated' => '',
			);

		// Set arguments for registering custom post type
			$args = array( 
				'labels' => $labels,
				'public' => true,
				'has_archive' => 'articles',
				'rewrite' => array('has_front' => true),
				'menu_icon' => 'dashicons-media-text',
				'supports' => array('title', 'editor', 'thumbnail'),
				'show_in_rest' => true,

			);

		// Register custom post type
			register_post_type('article', $args);

	}
