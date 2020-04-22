<?php

function wpm_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Expériences', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Expérience', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Expériences'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les expériences'),
		'view_item'           => __( 'Voir les expériences'),
		'add_new_item'        => __( 'Ajouter une nouvelle expérience'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer l\'expérience'),
		'update_item'         => __( 'Modifier l\'expérience'),
		'search_items'        => __( 'Rechercher une expérience'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Expériences'),
		'description'         => __( 'Tous sur expériences'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'thumbnail', 'custom-fields'),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'experiences'),
        'menu_icon'           => 'dashicons-portfolio'

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
    register_post_type( 'experience', $args );
    
	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Compétences', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Compétence', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Compétences'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les compétences'),
		'view_item'           => __( 'Voir les compétences'),
		'add_new_item'        => __( 'Ajouter une nouvelle compétence'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer compétence'),
		'update_item'         => __( 'Modifier compétence'),
		'search_items'        => __( 'Rechercher une compétence'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Compétences'),
		'description'         => __( 'Tous sur les compétences'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'thumbnail', 'custom-fields'),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'experiences'),
        'menu_icon'           => 'dashicons-admin-tools'

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'competence', $args );


	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Technos', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Techno', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Technos', 'textdomain' ),
		'popular_items'              => __( 'Popular Technos', 'textdomain' ),
		'all_items'                  => __( 'All Technos', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Techno', 'textdomain' ),
		'update_item'                => __( 'Update Techno', 'textdomain' ),
		'add_new_item'               => __( 'Add New Techno', 'textdomain' ),
		'new_item_name'              => __( 'New Techno Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate Technos with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove Technos', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Technos', 'textdomain' ),
		'not_found'                  => __( 'No Technos found.', 'textdomain' ),
		'menu_name'                  => __( 'Technos', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'Techno' ),
	);

	register_taxonomy( 'Techno', 'experience', $args );

}

add_action( 'init', 'wpm_custom_post_type', 0 );