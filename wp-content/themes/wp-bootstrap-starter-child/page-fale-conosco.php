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
                    Fale conosco
                </h1>

                <div class="rounded u-bg-folk-golden mx-auto" style="width:320px;height:9px"></div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<section class="my-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <ul class="d-flex justify-content-center pl-0">

                    <li class="px:u-w-40 px:u-h-40 u-list-style-none mx-2">
                        <a class="u-icon__brands u-icon__twitter w-100 h-100 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 text-decoration-none u-color-folk-white u-bg-folk-twitter" href="#" target="_blank" rel="noreferrer noopener">
                            Link do Twitter
                        </a>
                    </li>

                    <li class="px:u-w-40 px:u-h-40 u-list-style-none mx-2">
                        <a class="u-icon__brands u-icon__facebook w-100 h-100 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 text-decoration-none u-color-folk-white u-bg-folk-facebook" href="#" target="_blank" rel="noreferrer noopener">
                            Link do Facebook
                        </a>
                    </li>

                    <li class="px:u-w-40 px:u-h-40 u-list-style-none mx-2">
                        <a class="u-icon__brands u-icon__youtube w-100 h-100 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 text-decoration-none u-color-folk-white u-bg-folk-youtube" href="#" target="_blank" rel="noreferrer noopener">
                            Link do Youtube
                        </a>
                    </li>

                    <li class="px:u-w-40 px:u-h-40 u-list-style-none mx-2">
                        <a class="u-icon__brands u-icon__instagram w-100 h-100 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 text-decoration-none u-color-folk-white u-bg-folk-instagram" href="#" target="_blank" rel="noreferrer noopener">
                            Link do Instagram
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-12">

                <div class="row">

                    <div class="col-6">

                        <h4>
                            Fale conosco
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<img
class="img-fluid"
data-src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/banner-illustration.png"
alt="Single Temas">

<?php

get_footer();
