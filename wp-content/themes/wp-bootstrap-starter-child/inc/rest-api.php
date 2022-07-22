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

function get_image_src( $object, $field_name, $request ) {
    $feat_img_array = wp_get_attachment_image_src(
        $object['featured_media'], // Image attachment ID
        'full',  // Size.  Ex. "thumbnail", "large", "full", etc..
        true // Whether the image should be treated as an icon.
    );
    return $feat_img_array[0];
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

// function get_featured_image_api_field($post_id)
// {
//     return get_the_post_thumbnail_url(null, 'post-thumb-small');
// }

// function deepIncludeFields( $item, $key, $postTypes ) {
//     if ( isset( $item->post_type ) && in_array( $item->post_type, $postTypes ) ) {
//         $item->acf = get_fields( $item->ID );
//         $item->image = get_the_post_thumbnail_url($item->ID);
//         $item->categories = wp_get_post_categories($item->ID, array( 'fields' => 'names' ));
//     }
// }

// function get_image_src( $object, $field_name, $request ) {
//     $feat_img_array = wp_get_attachment_image_src(
//         $object['featured_media'], // Image attachment ID
//     'full',  // Size.  Ex. "thumbnail", "large", "full", etc..
//         true // Whether the image should be treated as an icon.
//     );
//     return $feat_img_array[0];
// }

// function post_featured_image_json( $data, $post, $context ) {
//     $featured_image_id = $data->data['featured_media']; // get featured image id
//     $featured_image_url = wp_get_attachment_image_src( $featured_image_id, 'original' ); // get url of the original size

//     if( $featured_image_url ) {
//       $data->data['featured_image_src'] = $featured_image_url[0];
//     }
  
//     return $data;
//   }
// add_filter( 'rest_prepare_post', 'post_featured_image_json', 10, 3 );

// add_action('rest_api_init', 'register_rest_images' );
// function register_rest_images(){
//     register_rest_field( array('post'),
//         'fimg_url',
//         array(
//             'get_callback'    => 'get_rest_featured_image',
//             'update_callback' => null,
//             'schema'          => null,
//         )
//     );
// }
// function get_rest_featured_image( $object, $field_name, $request ) {
//     if( $object['featured_media'] ){
//         $img = wp_get_attachment_image_src( $object['featured_media'], 'app-thumb' );
//         return $img[0];
//     }
//     return false;
// }