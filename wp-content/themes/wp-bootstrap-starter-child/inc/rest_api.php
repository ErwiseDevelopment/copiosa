<?php


//nao deu certo
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

add_action( 'rest_api_init', 'add_thumbnail_to_JSON' );

//testando
function get_featured_image_api_field($post_id)
{
    return get_the_post_thumbnail_url(null, 'post-thumb-small');
}