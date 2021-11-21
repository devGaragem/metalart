<?php
function register_custom_post_types() {

	$labels = [
		"name" => __( "Banners da tela inicial", "custom-post-type-ui" ),
		"singular_name" => __( "Banner da tela inicial", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Banner da tela inicial", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "banners", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-format-gallery",
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type("banners", $args );


  
	$labels2 = [
		"name" => __( "Itens do Portifólio", "custom-post-type-ui" ),
		"singular_name" => __( "Item do portifólio", "custom-post-type-ui" ),
	];

	$args2 = [
		"label" => __( "Item do portifólio", "custom-post-type-ui" ),
		"labels" => $labels2,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "portfolio", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-awards",
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
    'taxonomies'          => array('category'),
		"show_in_graphql" => false,
	];

	register_post_type("portfolio", $args2 );
}

add_action( 'init', 'register_custom_post_types' );

?>