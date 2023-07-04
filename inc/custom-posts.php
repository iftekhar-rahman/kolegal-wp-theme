<?php

/* Expertise Custom Post */
function kolegal_expertise() {
	$labels = array(
		'name'                  => _x( 'Expertise', 'Post type general name', 'kolegal' ),
		'singular_name'         => _x( 'Expertise', 'Post type singular name', 'kolegal' ),
		'menu_name'             => _x( 'Expertise', 'Admin Menu text', 'kolegal' ),
		'name_admin_bar'        => _x( 'Expertise', 'Add New on Toolbar', 'kolegal' ),
		'add_new'               => __( 'Add Expertise', 'kolegal' ),
		'add_new_item'          => __( 'Add New Expertise', 'kolegal' ),
		'featured_image'        => __( 'Expertise Banner Image', 'kolegal' ),
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'description'        => 'Expertise custom post type.',
		'rewrite'            => array( 'slug' => 'expertise' ),
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'expertise', $args );
}

add_action( 'init', 'kolegal_expertise' );

/* client stories Custom Post */
function kolegal_client_stories() {
	$labels = array(
		'name'                  => _x( 'Client Stories', 'Post type general name', 'kolegal' ),
		'singular_name'         => _x( 'Client Story', 'Post type singular name', 'kolegal' ),
		'menu_name'             => _x( 'Client Stories', 'Admin Menu text', 'kolegal' ),
		'name_admin_bar'        => _x( 'Client Story', 'Add New on Toolbar', 'kolegal' ),
		'add_new'               => __( 'Add Client Story', 'kolegal' ),
		'add_new_item'          => __( 'Add New Client Story', 'kolegal' ),
		'featured_image'        => __( 'Story Banner Image', 'kolegal' ),
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'description'        => 'Client Story custom post type.',
		'rewrite'            => array( 'slug' => 'client-story' ),
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'client-story', $args );
}

add_action( 'init', 'kolegal_client_stories' );

/* Sectors Custom Post */
function kolegal_sectors() {
	$labels = array(
		'name'                  => _x( 'Sectors', 'Post type general name', 'kolegal' ),
		'singular_name'         => _x( 'Sector', 'Post type singular name', 'kolegal' ),
		'menu_name'             => _x( 'Sectors', 'Admin Menu text', 'kolegal' ),
		'name_admin_bar'        => _x( 'Sectors', 'Add New on Toolbar', 'kolegal' ),
		'add_new'               => __( 'Add New Sector', 'kolegal' ),
		'add_new_item'          => __( 'Add New Sector', 'kolegal' ),
		'featured_image'        => __( 'Sector Banner Image', 'kolegal' ),
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'description'        => 'Sectors custom post type.',
		'rewrite'            => array( 'slug' => 'sector' ),
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail' ),
	);

	register_post_type( 'sector', $args );
}

add_action( 'init', 'kolegal_sectors' );

/* Sectors Custom Post */
function kolegal_free_guides() {
	$labels = array(
		'name'                  => _x( 'Free Guides', 'Post type general name', 'kolegal' ),
		'singular_name'         => _x( 'Free Guide', 'Post type singular name', 'kolegal' ),
		'menu_name'             => _x( 'Free Guides', 'Admin Menu text', 'kolegal' ),
		'name_admin_bar'        => _x( 'Free Guides', 'Add New on Toolbar', 'kolegal' ),
		'add_new'               => __( 'Add New Free Guide', 'kolegal' ),
		'add_new_item'          => __( 'Add New Free Guide', 'kolegal' ),
		'featured_image'        => __( 'Free Guide Banner Image', 'kolegal' ),
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'description'        => 'Free Guide custom post type.',
		'rewrite'            => array( 'slug' => 'free-guide' ),
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'free-guide', $args );
}

add_action( 'init', 'kolegal_free_guides' );

