<?php

function single_create_post_type() { 

	register_post_type( 'post-example', array(
		'labels'      => array( 'name' => 'Post Exemplo', 'singular_name' => 'Post Exemplo', 'all_items' => 'Todos os posts' ),
		'public' 	  => true,
		'has_archive' => true,
		'menu_icon'	  => 'dashicons-welcome-write-blog',
		'supports' 	  => array( 'title', 'editor',  'revisions', 'author' ) 
	));

	register_post_type( 'eventos', array(
		'labels'      => array( 'name' => 'Eventos', 'singular_name' => 'Evento', 'all_items' => 'Todos os eventos' ),
		'public' 	  => true,
		'has_archive' => true,
		'menu_icon'	  => 'dashicons-welcome-write-blog',
		'supports' 	  => array( 'title', 'editor',  'thumbnail', 'revisions', 'author' ) 
	));

	register_post_type( 'ebooks', array(
		'labels'      => array( 'name' => 'E-books', 'singular_name' => 'E-book', 'all_items' => 'Todos os e-books' ),
		'public' 	  => true,
		'has_archive' => true,
		'menu_icon'	  => 'dashicons-welcome-write-blog',
		'supports' 	  => array( 'title', 'thumbnail' ) 
	));

	register_post_type( 'comunidades', array(
		'labels'      => array( 'name' => 'Comunidades', 'singular_name' => 'Comunidade', 'all_items' => 'Todos as Comunidades' ),
		'public' 	  => true,
		'has_archive' => true,
		'menu_icon'	  => 'dashicons-welcome-write-blog',
		'supports' 	  => array( 'title', 'thumbnail' ) 
	));

	register_post_type( 'depoimentos', array(
		'labels'      => array( 'name' => 'Depoimentos', 'singular_name' => 'Depoimento', 'all_items' => 'Todos os Depoimentos' ),
		'public' 	  => true,
		'has_archive' => true,
		'menu_icon'	  => 'dashicons-admin-comments',
		'supports' 	  => array( 'title', 'editor', 'thumbnail' ) 
	));
}
add_action( 'init', 'single_create_post_type' );

function erwise_create_taxonomy() {
	register_taxonomy( 'comunidades_categoria', 'comunidades', array( 
			'labels' => array( 'name' => 'Comunidades', 'singular_name' => 'Comunidade' ), 
			'hierarchical' => true, 
			'show_admin_column' => true 
	));

	register_taxonomy( 'depoimentos_categoria', 'depoimentos', array( 
		'labels' => array( 'name' => 'Comunidades', 'singular_name' => 'Comunidade' ), 
		'hierarchical' => true, 
		'show_admin_column' => true 
));
}
add_action( 'init', 'erwise_create_taxonomy' );