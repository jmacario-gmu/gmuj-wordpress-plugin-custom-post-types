<?php 

// Register custom taxonomy - person type

	function gmuj_register_custom_taxonomy_person_type() {

		// Set custom taxonomy labels
		    $labels = array(
		        'name' => 'Person Types',
		        'singular_name' => 'Person Type',
				//'menu_name' => '',
				//'all_items' => '',
				//'edit_item' => '',
				//'view_item' => '',
				//'update_item' => '',
				'add_new_item' => 'Add New Person Type',
				'new_item_name' => 'Person Type',
				//'parent_item' => '',
				//'parent_item_colon' => '',
				'search_items' => 'Search Person Types',
				//'popular_items' => '',
				//'separate_items_with_commas' => '',
				//'add_or_remove_items' => '',
				//'choose_from_most_used' => '',
				//'not_found' => '',
				//'back_to_items' => '',
		    );

		// Set arguments for registering custom taxonomy
		    $args = array(
		        'labels' => $labels,
		        'public' => true,
		        'show_admin_column' => true,
		        'show_in_quick_edit' => true,
		        'show_in_rest' => true,
		    );

		// Set which post types this taxonomy applies to
	    	$post_types = array('person');

		// Register custom taxonomy
		    register_taxonomy('person-type', $post_types, $args);
	}

// Register custom taxonomy - person location

	function gmuj_register_custom_taxonomy_person_location() {

		// Set custom taxonomy labels
		    $labels = array(
		        'name' => 'Person Locations',
		        'singular_name' => 'Person Location',
				//'menu_name' => '',
				//'all_items' => '',
				//'edit_item' => '',
				//'view_item' => '',
				//'update_item' => '',
				'add_new_item' => 'Add New Person Location',
				'new_item_name' => 'Person Location',
				//'parent_item' => '',
				//'parent_item_colon' => '',
				'search_items' => 'Search Person Locations',
				//'popular_items' => '',
				//'separate_items_with_commas' => '',
				//'add_or_remove_items' => '',
				//'choose_from_most_used' => '',
				'not_found' => 'No person locations found.',
				//'back_to_items' => '',
		    );

		// Set arguments for registering custom taxonomy
		    $args = array(
		        'labels' => $labels,
		        'public' => true,
		        'show_admin_column' => true,
		        'show_in_quick_edit' => true,
		        'show_in_rest' => true,
		        'hierarchical' => true,
		        'rewrite' => array('hierarchical' => true, 'has_front' => true),
		    );

		// Set which post types this taxonomy applies to
	    	$post_types = array('person');

		// Register custom taxonomy
		    register_taxonomy('person-location', $post_types, $args);
	}

// Register custom taxonomy - event type

	function gmuj_register_custom_taxonomy_event_type() {

		// Set custom taxonomy labels
		    $labels = array(
		        'name' => 'Event Types',
		        'singular_name' => 'Event Type',
				//'menu_name' => '',
				//'all_items' => '',
				//'edit_item' => '',
				//'view_item' => '',
				//'update_item' => '',
				'add_new_item' => 'Add New Event Type',
				'new_item_name' => 'Event Type',
				//'parent_item' => '',
				//'parent_item_colon' => '',
				'search_items' => 'Search Event Types',
				//'popular_items' => '',
				//'separate_items_with_commas' => '',
				//'add_or_remove_items' => '',
				//'choose_from_most_used' => '',
				//'not_found' => '',
				//'back_to_items' => '',
		    );

		// Set arguments for registering custom taxonomy
		    $args = array(
		        'labels' => $labels,
		        'public' => true,
		        'show_admin_column' => true,
		        'show_in_quick_edit' => true,
		        'show_in_rest' => true,
		    );

		// Set which post types this taxonomy applies to
	    	$post_types = array('event');

		// Register custom taxonomy
		    register_taxonomy('event-type', $post_types, $args);
	}

// Register custom taxonomy - event location

	function gmuj_register_custom_taxonomy_event_location() {

		// Set custom taxonomy labels
		    $labels = array(
		        'name' => 'Event Locations',
		        'singular_name' => 'Event Location',
				//'menu_name' => '',
				//'all_items' => '',
				//'edit_item' => '',
				//'view_item' => '',
				//'update_item' => '',
				'add_new_item' => 'Add New Event Location',
				'new_item_name' => 'Event Location',
				//'parent_item' => '',
				//'parent_item_colon' => '',
				'search_items' => 'Search Event Locations',
				//'popular_items' => '',
				//'separate_items_with_commas' => '',
				//'add_or_remove_items' => '',
				//'choose_from_most_used' => '',
				'not_found' => 'No event locations found.',
				//'back_to_items' => '',
		    );

		// Set arguments for registering custom taxonomy
		    $args = array(
		        'labels' => $labels,
		        'public' => true,
		        'show_admin_column' => true,
		        'show_in_quick_edit' => true,
		        'show_in_rest' => true,
		        'hierarchical' => true,
		        'rewrite' => array('hierarchical' => true, 'has_front' => true),
		    );

		// Set which post types this taxonomy applies to
	    	$post_types = array('event');

		// Register custom taxonomy
		    register_taxonomy('event-location', $post_types, $args);
	}

// Register custom taxonomy - article category

	function gmuj_register_custom_taxonomy_article_category() {

		// Set custom taxonomy labels
		    $labels = array(
		        'name' => 'Article Categories',
		        'singular_name' => 'Article Category',
				//'menu_name' => '',
				//'all_items' => '',
				//'edit_item' => '',
				//'view_item' => '',
				//'update_item' => '',
				'add_new_item' => 'Add New Article Category',
				'new_item_name' => 'Article Category',
				//'parent_item' => '',
				//'parent_item_colon' => '',
				'search_items' => 'Search Article Categories',
				//'popular_items' => '',
				//'separate_items_with_commas' => '',
				//'add_or_remove_items' => '',
				//'choose_from_most_used' => '',
				'not_found' => 'No article categories found.',
				//'back_to_items' => '',
		    );

		// Set arguments for registering custom taxonomy
		    $args = array(
		        'labels' => $labels,
		        'public' => true,
		        'show_admin_column' => true,
		        'show_in_quick_edit' => true,
		        'show_in_rest' => true,
		        'hierarchical' => true,
		        'rewrite' => array('hierarchical' => true, 'has_front' => true),
		    );

		// Set which post types this taxonomy applies to
	    	$post_types = array('article');

		// Register custom taxonomy
		    register_taxonomy('article-category', $post_types, $args);
	}

// Register custom taxonomy - article tag

	function gmuj_register_custom_taxonomy_article_tag() {

		// Set custom taxonomy labels
		    $labels = array(
		        'name' => 'Article Tags',
		        'singular_name' => 'Article Tag',
				//'menu_name' => '',
				//'all_items' => '',
				//'edit_item' => '',
				//'view_item' => '',
				//'update_item' => '',
				'add_new_item' => 'Add New Article Tag',
				'new_item_name' => 'Article Tag',
				//'parent_item' => '',
				//'parent_item_colon' => '',
				'search_items' => 'Search Article Tags',
				//'popular_items' => '',
				//'separate_items_with_commas' => '',
				//'add_or_remove_items' => '',
				//'choose_from_most_used' => '',
				//'not_found' => '',
				//'back_to_items' => '',
		    );

		// Set arguments for registering custom taxonomy
		    $args = array(
		        'labels' => $labels,
		        'public' => true,
		        'show_admin_column' => true,
		        'show_in_quick_edit' => true,
		        'show_in_rest' => true,
		    );

		// Set which post types this taxonomy applies to
	    	$post_types = array('article');

		// Register custom taxonomy
		    register_taxonomy('article-tag', $post_types, $args);
	}