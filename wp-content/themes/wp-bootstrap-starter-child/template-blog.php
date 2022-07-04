<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evolutap
 *
 * Template Name: Template Blog
 * Template Post Type: page
 */

get_header();
?>

<div id="primary">
<main id="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- banner -->
<section class="u-bg-folk-extrabold-electric-blue py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 my-5">

                <h1 class="l-banner-full__title u-font-weight-bold text-center u-color-folk-white mb-4">
                    Blog
                </h1>

                <div class="rounded u-bg-folk-golden mx-auto" style="width:320px;height:9px"></div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<!-- posts -->
<section class="py-5">

    <div class="container">
    
        <div class="row justify-content-center">

            <!-- loop -->
            <?php 
                $args = array(
                    'posts_per_page' => 4,
                    'post_type'      => 'post',
                    'category_name'  => 'blog',
                    'order'          => 'DESC'
                );
                
                $posts_blog = new WP_Query( $args );

                if( $posts_blog->have_posts() ) :
                    while( $posts_blog->have_posts() ) : $posts_blog->the_post();
            ?>
                        <a 
                        class="col-12 d-block text-decoration-none my-4"
                        href="<?php the_permalink() ?>">

                            <div class="row">

                                <div class="col-md-5 pr-md-0">
                                    <!-- <img
                                    class="img-fluid w-100 h-100 u-object-fit-cover"
                                    src="<php echo get_home_url( null, '/wp-content/uploads/2022/06/Image.png' ) ?>"
                                    alt=""> -->

                                    <?php
                                        $alt_title = get_the_title();

                                        the_post_thumbnail( 'post-thumbail',
                                            array(
                                                'class' => 'img-fluid w-100 h-100 u-object-fit-cover',
                                                'alt'   => $alt_title
                                            ));
                                    ?>
                                </div>

                                <div class="col-md-7 pl-md-0">
                                    
                                    <div class="l-template-blog__box py-4 px-3 px-md-5">

                                        <p class="u-font-size-12 xxl:u-font-size-15 u-font-weight-bold text-uppercase u-color-folk-golden mb-0">
                                            <!-- 10 de dezembro de 2021 -->
                                            <?php echo get_date_format( get_the_date( 'd/m/Y', get_the_ID() ) );?>
                                        </p>

                                        <p class="u-font-size-12 xxl:u-font-size-15 u-font-weight-bold text-uppercase u-color-folk-bold-electric-blue">
                                            <!-- Evangelização -->
                                            <?php
                                                $category_current = get_the_category( get_the_ID() ); 
                                                echo $category_current[0]->name;
                                            ?>
                                        </p>

                                        <h4 class="l-template-blog__title u-font-weight-bold u-color-folk-dark-grayish-navy">
                                            <!-- O que Deus quer neste
                                            novo ano? -->
                                            <?php limit_words( get_the_title(), 10); ?>
                                        </h4>

                                        <span class="d-block u-font-size-14 xxl:u-font-size-18 u-font-weight-regular u-color-folk-aluminium pb-3">
                                            <!-- Aconteceu no dia 07 de dezembro na nossa chácara, 
                                            no distrito de Uvaia, em Ponta Grossa, a celebração 
                                            dos Votos Temporários das Irmãs Amanda, Irmã Bruna, 
                                            Irmã Criciele, Irmã Gabriele. -->
                                            <?php echo limit_words( get_the_content(), 25); ?>
                                        </span>

                                        <p class="l-template-blog__read-more u-font-weight-medium text-center text-decoration-none u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink mb-0 py-3 px-5">
                                            Ler mais
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
            <?php 
                    endwhile;
                endif;

                wp_reset_query();
            ?>
            <!-- end loop -->
        </div>
    </div>
</section>
<!-- end posts -->

<!-- books -->
<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="py-4 px-3">

                    <h6 class="l-several__shop__title u-font-weight-semibold text-center u-color-folk-bold-electric-blue mb-4">
                        Materiais exclusivos
                    </h6>

                    <div class="row">

                        <!-- loop -->
                        <?php 
                            $args = array(
                                'posts_per_page' => 3,
                                'post_type'      => 'ebooks',
                                'order'          => 'DESC'
                            );

                            $ebooks = new WP_Query( $args );

                            if( $ebooks->have_posts() ) :
                                while( $ebooks->have_posts() ) : $ebooks->the_post();
                        ?>
                                    <div class="col-md-4 my-3">

                                        <div class="row">

                                            <div class="col-4">
                                                <!-- <img
                                                class="img-fluid"
                                                src="<php echo get_home_url( null, '/wp-content/uploads/2022/06/mockup.png' ) ?>"
                                                alt=""> -->

                                                <?php 
                                                    $alt_title = get_the_title();

                                                    the_post_thumbnail( 'post-thumbnail',
                                                        array(
                                                            'class' => 'img-fluid',
                                                            'alt'   => $alt_title
                                                    ));
                                                ?>
                                            </div>

                                            <div class="col-8 pl-0">
                                                
                                                <p class="u-font-size-12 xxl:u-font-size-15 u-font-weight-semibold u-color-folk-golden mb-0">
                                                    E-book
                                                </p>

                                                <h6 class="u-font-size-18 xxl:u-font-size-19 u-font-weight-semibold u-color-folk-bold-electric-blue mb-2">
                                                    <!-- Oração pessoal
                                                    Guia para iniciantes -->
                                                    <?php the_title() ?>
                                                </h6>
                                            </div>

                                            <div class="col-12 mt-3">

                                                <div class="row justify-content-center">

                                                    <div class="col-7 offset-2">

                                                        <a
                                                        class="w-100 u-box-shadow-pattern d-block u-font-size-12 xxl:u-font-size-16 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-bold-electric-blue hover:u-color-folk-golden u-bg-folk-golden hover:u-bg-folk-squid-ink py-2"
                                                        href="<?php echo get_field( 'link' ) ?>">
                                                            Baixar
                                                        </a>
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
                        <!--- end loop -->
                    </div>
                </div>

                <div class="row justify-content-center">

                    <div class="col-8 col-md-2 mt-3">

                        <a
                        class="w-100 u-box-shadow-pattern d-block u-font-size-15 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-medium-electric-blue hover:u-bg-folk-squid-ink py-2"
                        href="<?php echo get_home_url( null, 'e-books' ) ?>">
                            Ver mais
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end books -->

<?php endwhile; endif; ?>
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
