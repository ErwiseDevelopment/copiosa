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
                    Parceiros
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

                <!-- swiper -->
                <div class="swiper-container js-swiper-partners">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php for( $i = 0; $i < 8; $i++ ) { ?>
                        <a 
                        class="swiper-slide"
                        href="#">
                            <img
                            class="img-fluid w-100 h-100 u-object-fit-cover"
                            src="<?php echo get_home_url( null, '/wp-content/uploads/2022/06/logotipo_oficial_vertical.png' ) ?>"
                            alt="">
                        </a>
                        <?php } ?>
                        <!-- end slide -->
                    </div>
                </div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
