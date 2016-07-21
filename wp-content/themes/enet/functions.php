<?php

/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package E-Net
 * @subpackage enet
 * @since E-Net 1.0
 */


function departments_init(){
    // Create a new taxonomy called Departments 
    register_taxonomy('Departments', 'post', array(
        'label' => ('Departments'),
        'rewrite' => array('slug' => 'departments'),
        'capabilities' => array(
            'assign_terms' => 'edit_guides',
            'edit_terms' => 'publish_guides')
            )
    );
}
add_action('init','departments_init');

function e_net_init() {
    $args = array(
        'label' => 'E-Net',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'e-net'),
        'query_var' => true,
        'menu_icon' => 'dashicons-admin-post',
        'supports' => array('title', 'editor', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'thumbnail', 'author', 'page-attributes','post-formats'),
        'taxonomies'=>array('category','Departments')
    );
    register_post_type('e-net', $args);

}
add_action('init', 'e_net_init');

?>