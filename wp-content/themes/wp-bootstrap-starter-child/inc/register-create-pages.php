<?php

function single_create_page() {

    if( function_exists('acf_add_options_page') ) {	
        acf_add_options_page( 
            array( 
                'page_title' => 'Página de exemplo', 
                'menu_title' => 'Página de exemplo', 
                'menu_slug'  => 'pagina_de_exemplo', 
                'capability' => 'edit_posts', 
                'position'   => '23,3', 
                'redirect'   => false, 
                'icon_url'   => 'dashicons-info' 
        ));

        acf_add_options_page( 
            array( 
                'page_title' => 'Informativo', 
                'menu_title' => 'Informativo', 
                'menu_slug'  => 'informativo', 
                'capability' => 'edit_posts', 
                'position'   => '23,4', 
                'redirect'   => false, 
                'icon_url'   => 'dashicons-info' 
        ));

        acf_add_options_page( 
            array( 
                'page_title' => 'Galeria', 
                'menu_title' => 'Galeria', 
                'menu_slug'  => 'galeria', 
                'capability' => 'edit_posts', 
                'position'   => '23,5', 
                'redirect'   => false, 
                'icon_url'   => 'dashicons-format-gallery' 
        ));

        acf_add_options_page( 
            array( 
                'page_title' => 'Campanha', 
                'menu_title' => 'Campanha', 
                'menu_slug'  => 'campanha', 
                'capability' => 'edit_posts', 
                'position'   => '23,6', 
                'redirect'   => false, 
                'icon_url'   => 'dashicons-format-gallery' 
        ));
    }
}
add_action( 'init', 'single_create_page' );