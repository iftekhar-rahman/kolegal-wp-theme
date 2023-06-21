<?php

/* Services Custom Post */
function kolegal_services() {
	$labels = array(
		'name'                  => _x( 'Services', 'Post type general name', 'kolegal' ),
		'singular_name'         => _x( 'Service', 'Post type singular name', 'kolegal' ),
		'menu_name'             => _x( 'Services', 'Admin Menu text', 'kolegal' ),
		'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'kolegal' ),
		'add_new'               => __( 'Add Service', 'kolegal' ),
		'add_new_item'          => __( 'Add New Service', 'kolegal' ),
		'featured_image'        => __( 'Service Image', 'kolegal' ),
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'description'        => 'Services custom post type.',
		'rewrite'            => array( 'slug' => 'service' ),
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'service', $args );
}

add_action( 'init', 'kolegal_services' );

/* Services Custom Post */
function kolegal_success_story() {
	$labels = array(
		'name'                  => _x( 'Success Stories', 'Post type general name', 'kolegal' ),
		'singular_name'         => _x( 'Success Story', 'Post type singular name', 'kolegal' ),
		'menu_name'             => _x( 'Success Stories', 'Admin Menu text', 'kolegal' ),
		'name_admin_bar'        => _x( 'Success Story', 'Add New on Toolbar', 'kolegal' ),
		'add_new'               => __( 'Add Success Story', 'kolegal' ),
		'add_new_item'          => __( 'Add New Success Story', 'kolegal' ),
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'description'        => 'Success Story custom post type.',
		'rewrite'            => array( 'slug' => 'success-story' ),
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'success-story', $args );
}

add_action( 'init', 'kolegal_success_story' );

