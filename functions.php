<?php

// Configure les fonctionnalités de bases
function bemytheme_setup(){

    // Prise en charge des images de mise en avant
    add_theme_support('post-thumbnails');

    // Ajouter automatiquement le titre du site dans l'entete
    add_theme_support('title-tag');

    // Ajouts des menus
    register_nav_menus( array(
        'main' => 'Menu Principal',
    ) );

}
add_action( 'after_setup_theme', 'bemytheme_setup' );

// Ajout des scripts
function bemytheme_register_assets(){

    // CSS
    wp_enqueue_style( 
        'bemytheme', 
        get_stylesheet_uri( ),
        array(),
        '1.0'
    );

    // JS
    wp_enqueue_script( 
        'bemytheme', 
        get_template_directory_uri() . '/dist/app.js', 
        array(),
        '1.0',
        true
    );

}
add_action( 'wp_enqueue_scripts', 'bemytheme_register_assets');

// API Menu
// create custom function to return nav menu
function custom_wp_menu() {
    // Replace your menu name, slug or ID carefully
    return wp_get_nav_menu_items('principal');
}

// create new endpoint route
add_action( 'rest_api_init', function () {
    register_rest_route( 'v2', '/menu', array(
        'methods' => 'GET',
        'callback' => 'custom_wp_menu',
    ) );
} );


// Custom image size
add_image_size( 'xl', 1440);
add_image_size( 'xxl', 1900);


//Projet post type
function projet_post_type() {

	$labels = array(
		'name'                  => _x( 'Projets', 'Post Type General Name', 'bemy' ),
		'singular_name'         => _x( 'Projet', 'Post Type Singular Name', 'bemy' ),
		'menu_name'             => __( 'Projets', 'bemy' ),
		'name_admin_bar'        => __( 'Projet', 'bemy' ),
		'archives'              => __( 'Archives', 'bemy' ),
		'attributes'            => __( 'Item Attributes', 'bemy' ),
		'parent_item_colon'     => __( 'Parent Item:', 'bemy' ),
		'all_items'             => __( 'Tous les projets', 'bemy' ),
		'add_new_item'          => __( 'Ajouter un projet', 'bemy' ),
		'add_new'               => __( 'Ajouter un projet', 'bemy' ),
		'new_item'              => __( 'Nouveau projet', 'bemy' ),
		'edit_item'             => __( 'Editer le projet', 'bemy' ),
		'update_item'           => __( 'Mettre à jour le projet', 'bemy' ),
		'view_item'             => __( 'Voir le projet', 'bemy' ),
		'view_items'            => __( 'Voir les projets', 'bemy' ),
		'search_items'          => __( 'Rechercher un projet', 'bemy' ),
		'not_found'             => __( 'Rien trouvé', 'bemy' ),
		'not_found_in_trash'    => __( 'Rien trouvé', 'bemy' ),
		'featured_image'        => __( 'Image vignette', 'bemy' ),
		'set_featured_image'    => __( 'Définir image vignette', 'bemy' ),
		'remove_featured_image' => __( 'Supprimer l\'image vignette', 'bemy' ),
		'use_featured_image'    => __( 'Utiliser comme image vignette', 'bemy' ),
		'insert_into_item'      => __( 'Insérer dans le projet', 'bemy' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'bemy' ),
		'items_list'            => __( 'Items list', 'bemy' ),
		'items_list_navigation' => __( 'Items list navigation', 'bemy' ),
		'filter_items_list'     => __( 'Filter items list', 'bemy' ),
	);
	$args = array(
		'label'                 => __( 'Projet', 'bemy' ),
		'description'           => __( 'Projet Bemy', 'bemy' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'projet', $args );

}
add_action( 'init', 'projet_post_type', 0 );




// POLYLANG
add_action('init', function() {
    pll_register_string('contactezNous', 'Contactez-nous');
    pll_register_string('mentionsLegales', 'Mentions légales');
    pll_register_string('siteVitrine', 'Site vitrine');
    pll_register_string('siteEcommerce', 'Site e-commerce');
    pll_register_string('identiteVisuelle', 'Identité visuelle');
    pll_register_string('papeterie', 'Papeterie');
    pll_register_string('kitSocialMedia', 'Kit réseaux sociaux');
    pll_register_string('projetSuivant', 'Projet suivant');
    pll_register_string("retourAccueil", "Retour à l'accueil");
    pll_register_string("voirLeSite", "Voir le site");
});