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
                    Eventos
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

            <div class="col-12">

                <div class="row">

                    <!-- loop -->
                    <?php 
                        $args = array(
                            'posts_per_page' => -1,
                            'post_type'      => 'evento',
                            'order'          => 'DESC'
                        );

                        $events = new WP_Query( $args );

                        if( $events->have_posts() ) :
                            while( $events->have_posts() ) : $events->the_post();
                    ?>
                                <div class="col-lg-6 my-3">

                                    <div class="row">

                                        <div class="col-md-4">

                                            <!-- <img
                                            class="img-fluid w-100 u-object-fit-cover"
                                            src="<php echo get_home_url( null, '/wp-content/uploads/2022/06/Image.png' )?>"
                                            alt=""> -->

                                            <?php 
                                                $alt_title = get_the_title();

                                                the_post_thumbnail( 'post-thumbnail',
                                                    array(
                                                        'class' => 'img-fluid w-100 u-object-fit-cover',
                                                        'alt'   => $alt_title
                                                ));
                                            ?>

                                            <p class="u-font-size-12 u-font-weight-bold u-color-folk-golden mt-1 mb-0">
                                                <!-- 16 de março, 2022 -->
                                                <?php echo get_field( 'data' ) ?>
                                            </p>
                                        </div>

                                        <div class="col-md-8">

                                            <div class="row">

                                                <div class="col-md-2">
                                                    <p class="u-font-size-12 u-font-weight-bold u-color-folk-golden mb-1">
                                                        <!-- 19:00 -->
                                                        <?php echo get_field( 'horario' ) ?>
                                                    </p>
                                                </div>

                                                <div class="col-md-10">
                                                    <p class="u-font-size-14 u-font-weight-regular u-color-folk-aluminium mb-1">
                                                        <!-- Lorem ipsum dolor sit amet consectetur. -->
                                                        <?php echo get_field( 'endereco' ) ?>
                                                    </p>
                                                </div>
                                            </div>

                                            <h3 class="u-font-weight-bold u-color-folk-bold-electric-blue">
                                                <!-- Lorem ipsum dolor sit -->
                                                <?php the_title() ?>
                                            </h3>
                                    
                                            <div class="row">

                                                <div class="col-5">

                                                    <a 
                                                    class="w-100 rounded d-block u-font-size-12 u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-golden hover:u-bg-folk-medium-electric-blue py-2"
                                                    href="<?php the_permalink() ?>">
                                                        Ver evento
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
                    <!-- end loop -->
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
