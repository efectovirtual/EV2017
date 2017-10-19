<?php

add_filter( 'show_admin_bar', '__return_false' );



// Slider Inicio - Banner Inicial
function slider_posttype()
{
    register_taxonomy_for_object_type('category', 'efectovirtual'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'efectovirtual');
    register_post_type('slider', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Slider', 'efectovirtual'), // Rename these to suit
            'singular_name' => __('Slider', 'efectovirtual'),
            'add_new' => __('Add New', 'efectovirtual'),
            'add_new_item' => __('Add New Slider', 'efectovirtual'),
            'edit' => __('Edit', 'efectovirtual'),
            'edit_item' => __('Edit Slider', 'efectovirtual'),
            'new_item' => __('New Slider', 'efectovirtual'),
            'view' => __('View Slider', 'efectovirtual'),
            'view_item' => __('View Slider', 'efectovirtual'),
            'search_items' => __('Search Slider', 'efectovirtual'),
            'not_found' => __('No Slider found', 'efectovirtual'),
            'not_found_in_trash' => __('No Slider found in Trash', 'efectovirtual')
        ),
        'public' => true,
        'menu_icon' => 'dashicons-desktop',
        'hierarchical' => false, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => false,
        'menu_position' => 6,
        'supports' => array(
            'title',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(

        ) // Add Category and Post Tags support
    ));
}

add_action('init','slider_posttype'); // Slide inicio


// clientes
function clientes_posttype()
{
    register_taxonomy_for_object_type('category', 'efectovirtual'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'efectovirtual');
    register_post_type('clientes', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Clientes', 'efectovirtual'), // Rename these to suit
            'singular_name' => __('Clientes', 'efectovirtual'),
            'add_new' => __('Add New', 'efectovirtual'),
            'add_new_item' => __('Add New Clientes', 'efectovirtual'),
            'edit' => __('Edit', 'efectovirtual'),
            'edit_item' => __('Edit Clientes', 'efectovirtual'),
            'new_item' => __('New Clientes', 'efectovirtual'),
            'view' => __('View Clientes', 'efectovirtual'),
            'view_item' => __('View Clientes', 'efectovirtual'),
            'search_items' => __('Search Clientes', 'efectovirtual'),
            'not_found' => __('No Clientes found', 'efectovirtual'),
            'not_found_in_trash' => __('No Clientes found in Trash', 'efectovirtual')
        ),
        'public' => true,
        'menu_icon' => 'dashicons-businessman',
        'hierarchical' => false, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => false,
        'menu_position' => 7,
        'supports' => array(
            'title',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(

        ) // Add Category and Post Tags support
    ));
}
add_action('init','clientes_posttype'); // Clientes



function my_acf_google_map_api( $api ){

    $api['key'] = 'AIzaSyAotgXiiIPK1kGYcLrm0FBiB-dyW6EuAvc';

    return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


// Menu Principal
register_nav_menus( array(
    'primary' => esc_html__( 'Menu Principal', 'efectovirtual' ),
) );


register_nav_menus( array(
    'serviciosfooter' => esc_html__( 'Servicios Footer', 'efectovirtual' ),
) );


register_nav_menus( array(
    'evfooter' => esc_html__( 'EV Footer', 'efectovirtual' ),
) );

register_nav_menus( array(
    'webfooter' => esc_html__( 'Páginas Web Footer', 'efectovirtual' ),
) );
