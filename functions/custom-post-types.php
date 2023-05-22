<?php

//Staff CPT
add_action( 'init', 'staff_post_type', 0 );

function staff_post_type() {
// Set UI labels
  $labels = array(
    'name'                => 'Staff',
    'singular_name'       => 'Staff',
    'menu_name'           => 'Staff',
    'parent_item_colon'   => 'Parent Staff Member',
    'all_items'           => 'All Staff',
    'view_item'           => 'View Staff Member',
    'add_new_item'        => 'Add New Staff',
    'add_new'             => 'Add Staff',
    'edit_item'           => 'Edit Staff Member',
    'update_item'         => 'Update Staff Member',
    'search_items'        => 'Search Staff',
    'not_found'           => 'No Staff Members Found',
    'not_found_in_trash'  => 'No Staff Members Found in Trash',
  );
  
// Set other options
  $args = array(
    'label'               => 'Staff',
    'description'         => 'EnV Hair Lounge Staff',
    'labels'              => $labels,
    'supports'            => array(
        'title',
        'editor',
        'author',
        'page-attributes'
    ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 6,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
    'menu_icon'           => 'dashicons-admin-users'
  );
  
//Register the CPT
  register_post_type( 'staff', $args );
}

//Create the [-----] Taxonomy
//add_action( 'init', 'create_group_taxonomy' );
function create_group_taxonomy() {
  $labels = array(
    'add_new_item' => 'Add New Group',
    'view_item' => 'View Group',
    'edit_item' => 'Edit Group',
    'update_item' => 'Update Group',
    'parent_item' => 'Parent Group',
    'back_to_items' => '← Back to Groups',

  );
  $args = array(
    'label' => 'Groups',
    'rewrite' => array( 'slug' => 'group' ),
    'labels' => $labels,
    'hierarchical' => true,
    'orderby' => 'term_order'
  );
  register_taxonomy( 'group', array( 'use-case' ), $args );
}


?>