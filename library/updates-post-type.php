<?php

// let's create the function for the custom type
function updates_post_type() { 
	// creating (registering) the custom type 
	register_post_type( 'updates', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Updates', 'bonestheme'), /* This is the Title of the Group */
			'singular_name' => __('Update', 'bonestheme'), /* This is the individual type */
			'all_items' => __('All Updates', 'bonestheme'), /* the all items menu item */
			'add_new' => __('Add New', 'bonestheme'), /* The add new menu item */
			'add_new_item' => __('Add Update', 'bonestheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Update', 'bonestheme'), /* Edit Display Title */
			'new_item' => __('New Update', 'bonestheme'), /* New Display Title */
			'view_item' => __('View Update', 'bonestheme'), /* View Display Title */
			'search_items' => __('Search Updates', 'bonestheme'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'bonestheme'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'bonestheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'A custom post type for sharing updates.', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/news-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'updates', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'updates', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt')
	 	) /* end of options */
	); /* end of register post type */	

} 

	// adding the function to the Wordpress init
	add_action( 'init', 'updates_post_type');

	// now let's add custom tags (these act like categories)
    register_taxonomy( 'theme_tag', 
    	array('updates'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => false,    /* if this is false, it acts like tags */                
    		'labels' => array(
    			'name' => __( 'Themes', 'bonestheme' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Theme', 'bonestheme' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Themes', 'bonestheme' ), /* search title for taxomony */
    			'all_items' => __( 'All Themes', 'bonestheme' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Theme', 'bonestheme' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Theme:', 'bonestheme' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Theme', 'bonestheme' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Theme', 'bonestheme' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Theme', 'bonestheme' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Theme Name', 'bonestheme' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
    		'has_archive' => 'about', /* you can rename the slug here */
    		'rewrite'	=> array( 'slug' => 'updates/about', 'with_front' => true ), /* you can specify its url slug */
    	)
    ); 


	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	    
    /*
    	looking for custom meta boxes?
    	check out this fantastic tool:
    	https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
    */

// let's create the function for the custom type
function press_clippings_post_type() { 
	// creating (registering) the custom type 
	register_post_type( 'press_clippings', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Press Clippings', 'bonestheme'), /* This is the Title of the Group */
			'singular_name' => __('Press Clipping', 'bonestheme'), /* This is the individual type */
			'all_items' => __('All Press Clippings', 'bonestheme'), /* the all items menu item */
			'add_new' => __('Add New', 'bonestheme'), /* The add new menu item */
			'add_new_item' => __('Add New Press Clipping', 'bonestheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Press Clipping', 'bonestheme'), /* Edit Display Title */
			'new_item' => __('New Press Clipping', 'bonestheme'), /* New Display Title */
			'view_item' => __('View Press Clipping', 'bonestheme'), /* View Display Title */
			'search_items' => __('Search Press Clippings', 'bonestheme'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'bonestheme'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'bonestheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'For adding links to other cool stuff involving me.', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 7, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/press-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'press', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'press', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register post type */
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'press_clippings_post_type');
	


?>