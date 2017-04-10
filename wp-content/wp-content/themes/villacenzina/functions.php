<?php

add_action('init', 'post_type');

function post_type() {
// Post TYPE TARIFFE
register_post_type( 'tariffe',array(
		'labels' => array(
			'name' => 'Tariffe',
			'singular_name' => 'tariffe',
		),
	'public' => true,
	'supports' => array( 'title', 'comments', 'excerpt', 'custom-fields', 'thumbnail'),

	'taxonomies' => array('category', 'post_tag')
	));


// Post TYPE NEWS	
register_post_type( 'news',
	array(
		'labels' => array(
			'name' => 'News' ,
			'singular_name' => 'news' 
		),
	'public' => true,
	'supports' => array( 'title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail'),
	'taxonomies' => array('category', 'post_tag')
	)
);	

// Post TYPE LIGNANO
register_post_type( 'lignano',
	array(
		'labels' => array(
			'name' => 'Lignano',
			'singular_name' => 'lignano'
		),
	'public' => true,	
	'supports' => array( 'title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail'),
	'taxonomies' => array('category', 'post_tag')
	)
);	


// Post TYPE SLIDE
register_post_type( 'slide',
	array(
		'labels' => array(
			'name' => 'Slide',
			'singular_name' => 'slide'
		),
	'public' => true,	
	'supports' => array( 'title','excerpt', 'custom-fields'),
	'taxonomies' => array('category', 'post_tag')
	)
);
}
// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add Header image
require_once('library/custom-header.php');

?>
