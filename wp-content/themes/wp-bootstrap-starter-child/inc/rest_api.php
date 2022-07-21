<?php

//nao deu certo
add_action( 'rest_api_init', 'add_thumbnail_to_JSON' );
function add_thumbnail_to_JSON() {
    register_rest_field( 
        'post',
        'featured_image_src',
        array(
            'get_callback'    => 'get_image_src',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}

// function post_featured_image_json( $data, $post, $context ) {
//     $featured_image_id = $data->data['featured_media']; // get featured image id
//     $featured_image_url = wp_get_attachment_image_src( $featured_image_id, 'original' ); // get url of the original size

//     if( $featured_image_url ) {
//         $data->data['featured_image_src'] = $featured_image_url[0];
//     }

//     return $data;
// }

// add_filter( 'rest_prepare_post', 'post_featured_image_json', 10, 3 );

//testando
function get_featured_image_api_field($post_id)
{
    return get_the_post_thumbnail_url(null, 'post-thumb-small');
}