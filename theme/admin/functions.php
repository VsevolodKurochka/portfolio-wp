<?php

add_action('init', 'my_custom_init');
function my_custom_init(){
	register_post_type('projects', 
		array(
			'labels'             => array(
				'name'               => 'Project',
				'singular_name'      => 'Project',
				'add_new'            => 'Add project',
				'add_new_item'       => 'Add new project',
				'edit_item'          => 'Edit project',
				'new_item'           => 'New project',
				'view_item'          => 'View project',
				'search_items'       => 'Find projects',
				'not_found'          =>  'No projects',
				'not_found_in_trash' => 'Projects not found in trash',
				'parent_item_colon'  => '',
				'menu_name'          => 'Projects'
		  ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title', 'thumbnail')
		) 
	);
}

?>