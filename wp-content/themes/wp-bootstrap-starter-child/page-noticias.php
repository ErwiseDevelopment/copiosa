<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary" class="content-area">
<div id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<!-- banner -->
<section class="u-bg-folk-extrabold-electric-blue py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 my-5">

                <h1 class="l-banner-full__title u-font-weight-bold text-center u-color-folk-white mb-4">
                    Últimas Notícias
                </h1>

                <div class="rounded u-bg-folk-golden mx-auto" style="width:320px;height:9px"></div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<section class="py-5">

    <div class="container">

        <div class="row">

            <?php 
                if( isset( $_GET['cat'] ) ) {
                    foreach( get_categories() as $category) {
                        if( $_GET['cat'] == $category->slug )
                            $category_current = $category->slug; 
                    }
                } else {
                    $category_current = 'noticias';
                }
                
                $args = array(
                    'posts_per_page' => 1,
                    'post_type'      => 'post',
                    'category_name'  => $category_current,
                    'order'          => 'DESC'
                );

                $post_news = new WP_Query( $args );

                if( $post_news->have_posts() ) :
                    while( $post_news->have_posts() ) : $post_news->the_post();
                        $post_highlight_id = get_the_ID();
            ?>
                        <div class="col-12">

                            <div class="row">

                                <div class="col-lg-8">
                                    <!-- <img
                                    class="img-fluid"
                                    src="<php echo get_home_url( null, '/wp-content/uploads/2022/06/post-highlight-image.png' ) ?>"
                                    alt="Imagem destacada"> -->

                                    <?php 
                                        $alt_title = get_the_title();

                                        the_post_thumbnail( 'post-thumbnail',
                                            array(
                                                'class' => 'l-post-highlight__thumbnail img-fluid w-100 u-object-fit-cover',
                                                'alt'   => $alt_title
                                        ));
                                    ?>
                                </div>

                                <div class="col-lg-4 mt-3 mt-lg-0">

                                    <div class="l-post-highlight__box u-box-shadow-pattern u-bg-folk-white p-3 p-lg-5">
                                        
                                        <h2 class="l-post-highlight__title u-font-weight-bold u-color-folk-squid-ink">
                                            <!-- Irmãs professam
                                            votos temporários e
                                            perpétuos em festa dos
                                            32 anos da Congregação -->
                                            <?php the_title() ?>
                                        </h2>

                                        <p class="u-font-size-12 xxl:u-font-size-15 u-font-weight-bold text-uppercase u-color-folk-golden">
                                            <!-- 10 DE DEZEMBRO DE 2021 -->
                                            <?php echo get_date_format( get_the_date( 'd/m/Y', get_the_ID() ) );?>
                                        </p>

                                        <span class="d-block u-font-size-14 xxl:u-font-size-18 u-font-weight-regular u-color-folk-aluminium mt-4">
                                            <!-- Aconteceu no dia 07 de dezembro na nossa chácara, 
                                            no distrito de Uvaia, em Ponta Grossa, a celebração 
                                            dos Votos Temporários das Irmãs Amanda, Irmã Bruna, 
                                            Irmã Criciele, Irmã Gabriele, [...] -->
                                            <?php echo limit_words( get_the_content(), 40); ?>
                                        </span>

                                        <div class="row">

                                            <div class="col-7 mt-3 pt-3">

                                                <a
                                                class="w-100 u-box-shadow-pattern d-block u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink py-3"
                                                href="<?php the_permalink() ?>">
                                                    Ler mais
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php
                    endwhile;
                endif;

                wp_reset_query();
            ?>
        </div>
    </div>
</section>

<section>

    <div class="container">

        <div class="row">

            <div class="col-12 mt-md-5 pt-md-5">

                <div class="row">

                    <div class="col-md-8 order-2 order-md-1">

                        <div class="row">

                            <!-- loop -->
                            <?php 
                                // $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                                $args = array(
                                    'posts_per_page' => 6,
                                    'post_type'      => 'post',
                                    'category_name'  => $category_current,
                                    'order'          => 'DESC',
                                    'post__not_in'   => array( $post_highlight_id ),
                                    // 'paged'          =>  $paged,
                                );

                                $posts_news = new WP_Query( $args );

                                if( $posts_news->have_posts() ) :
                                    while( $posts_news->have_posts() ) : $posts_news->the_post();
                            ?>
                                        <div class="col-lg-6 js-posts-new my-3">

                                            <div class="card rounded-0">

                                                <div class="card-img">
                                                    <!-- <img
                                                    class="l-posts__thumbnail img-fluid w-100 u-object-fit-cover"
                                                    src="<php echo get_home_url( null, '/wp-content/uploads/2022/06/posts-image.png' ) ?>"
                                                    alt="Post image"> -->

                                                    <?php
                                                        $alt_title = get_the_title();

                                                        the_post_thumbnail( 'post-thumbnail',
                                                            array(
                                                                'class' => 'l-posts__thumbnail img-fluid w-100 u-object-fit-cover',
                                                                'alt'   => $alt_title
                                                            ));
                                                    ?>
                                                </div>

                                                <div class="card-body px-4">

                                                    <p class="u-font-size-12 xxl:u-font-size-14 u-font-weight-semibold u-color-folk-medium-electric-blue mb-0">
                                                        <!-- 10 de dezembro de 2021 -->
                                                        <?php echo get_date_format( get_the_date( 'd/m/Y', get_the_ID() ) ) ?>
                                                    </p>

                                                    <p class="u-font-size-12 xxl:u-font-size-14 u-font-weight-bold u-color-folk-medium-electric-blue">
                                                        <!-- Institucional -->
                                                        <?php
                                                            $cats = array();
                                                            $categories_current = array();
                                                            $count = 0;

                                                            foreach (get_the_category($post_id) as $c) {
                                                                $cat = get_category($c);
                                                                array_push($cats, $cat->name);
                                                            }
                                                            
                                                            foreach( $cats as $cat ) {
                                                                foreach( get_categories_highlight() as $editorial ) {
                                                                    if( $cat == $editorial )
                                                                        $editorial_current = $cat;
                                                                }
                                                            }

                                                            foreach( $cats as $cat ) {
                                                                if( $editorial_current ) {
                                                                    if( $cat != $editorial_current ) {
                                                                        array_push($categories_current, $cat);
                                                                        $count++;
            
                                                                        if( $count == 1 )
                                                                            break;
                                                                    }
                                                                } else {
                                                                    array_push($categories_current, $cat);
                                                                    $count++;
            
                                                                    if( $count == 3 )
                                                                        break;
                                                                }
                                                            }

                                                            if (sizeOf($categories_current) > 0) {
                                                                $post_categories = implode(', ', $categories_current);
                                                            } 

                                                            echo $editorial_current ? $editorial_current . ', ' . $post_categories : $post_categories;
                                                        ?>
                                                    </p>

                                                    <h4 class="u-font-size-16 xxl:u-font-size-20 u-font-weight-bold u-color-folk-bold-electric-blue mb-4">
                                                                                                               <?php the_title() ?>
                                                    </h4>

                                                    <span class="d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-color-folk-aluminium">
                                                    <?php the_excerpt(); ?>
                                                    </span>

                                                    <div class="row">

                                                        <div class="col-5 mt-3">

                                                            <span
                                                            class="w-100 u-box-shadow-pattern position-absolute u-font-size-12 u-font-weight-bold u-font-family-nunito text-center u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink js-read-more py-2">
                                                                Ler mais
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            <?php
                                    endwhile;
                                endif;

                                wp_reset_query();
                            ?>
                            <!-- end loop -->
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 order-1 order-md-2 mt-3">

                        <div>
                            <form class="js-search-form" method="GET" action="/">

                                <div class="row">

                                    <div class="col-12">
                                        <input
                                        class="w-100 border-0 d-block u-font-size-14 u-font-weight-semibold u-color-folk-bold-eletric-blue u-bg-folk-light-gray py-4 pl-3 pr-5"
                                        type="search"
                                        name="s"
                                        placeholder="Procurar">
                                        <span class="l-page-news__icon js-search-submit"></span>
                                    </div>
                                </div>
                            </form>                            
                        </div>

                        <div class="row">

                            <div class="col-12">

                                <div class="border mt-4 p-4">

                                    <h6 class="xxl:u-font-size-20 u-font-weight-bold u-color-folk-medium-electric-blue">
                                        Categorias
                                    </h6>

                                    <ul class="pl-0">
                                        <?php foreach( get_categories_highlight() as $category ) : ?>
                                                <li class="l-page-news__categories u-list-style-none my-3">
                                                
                                                    <a 
                                                    class="u-font-size-13 xxl:u-font-size-16 u-font-weight-regular text-decoration-none u-color-folk-aluminium"
                                                    href="<?php echo get_home_url( null, '/noticias/?cat=' . strtolower( $category ) ); ?>">
                                                        <!-- Institucional -->
                                                        <?php echo $category; ?>
                                                    </a>

                                                    <span class="l-page-news__categories__circle"></span>
                                                </li>
                                        <?php endforeach; ?>

                                        <li class="l-page-news__categories u-list-style-none my-3">
                                            
                                            <a 
                                            class="u-font-size-13 xxl:u-font-size-16 u-font-weight-semibold text-decoration-none u-color-folk-bold-electric-blue"
                                            href="<?php echo get_home_url( null, 'noticias' ); ?>">
                                                Todas as Notícias
                                            </a>

                                            <span class="l-page-news__categories__circle"></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-12 mt-5">
                                <a href="<?php  echo get_field('link_banner', 'option')?>">
                                    <img
                                    class="img-fluid"
                                    src="<?php echo get_field('banner_pagina_noticias', 'option') ?>"
                                    alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-12 l-pagination d-flex justify-content-center my-5">

                        <div class="d-flex">
                            <!--
                                echo paginate_links( array(
                                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                    'total'        => $post_news->max_num_pages,
                                    'current'      => max( 1, get_query_var( 'paged' ) ),
                                    'format'       => '?paged=%#%',
                                    'show_all'     => false,
                                    'type'         => 'plain',
                                    'end_size'     => 2,
                                    'mid_size'     => 1,
                                    'prev_next'    => true,
                                    'prev_text'    => sprintf( '<i class="fas fa-angle-left"></i> %1$s', __( '', 'text-domain' ) ),
                                    'next_text'    => sprintf( '%1$s <i class="fas fa-angle-right"></i>', __( '', 'text-domain' ) ),
                                    'add_args'     => false,
                                    'add_fragment' => '',
                                ) );
                                -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
