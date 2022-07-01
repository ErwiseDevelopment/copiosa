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
                    Conteúdos Especiais
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
            <?php for( $i = 0; $i < 4; $i++ ) { ?>
                <a 
                class="col-12 d-block text-decoration-none my-4"
                href="#">

                    <div class="row">

                        <div class="col-md-5 pr-md-0">
                            <img
                            class="img-fluid w-100 h-100 u-object-fit-cover"
                            src="<?php echo get_home_url( null, '/wp-content/uploads/2022/06/Image.png' ) ?>"
                            alt="">
                        </div>

                        <div class="col-md-7 pl-md-0">
                            
                            <div class="l-template-blog__box py-4 px-3 px-md-5">

                                <p class="u-font-size-12 xxl:u-font-size-15 u-font-weight-bold text-uppercase u-color-folk-golden mb-0">
                                    10 de dezembro de 2021
                                </p>

                                <p class="u-font-size-12 xxl:u-font-size-15 u-font-weight-bold text-uppercase u-color-folk-bold-electric-blue">
                                    Evangelização
                                </p>

                                <h4 class="l-template-blog__title u-font-weight-bold u-color-folk-dark-grayish-navy">
                                    O que Deus quer neste
                                    novo ano?
                                </h4>

                                <p class="u-font-size-14 xxl:u-font-size-18 u-font-weight-regular u-color-folk-aluminium pb-3">
                                    Aconteceu no dia 07 de dezembro na nossa chácara, 
                                    no distrito de Uvaia, em Ponta Grossa, a celebração 
                                    dos Votos Temporários das Irmãs Amanda, Irmã Bruna, 
                                    Irmã Criciele, Irmã Gabriele, [...]
                                </p>

                                <p
                                class="l-template-blog__read-more u-font-weight-medium text-center text-decoration-none u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink mb-0 py-3 px-5"
                                href="#">
                                    Ler mais
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            <?php } ?>
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
                        <?php for( $i = 0; $i < 3; $i++ ) { ?>
                            <div class="col-md-4 my-3">

                                <div class="row">

                                    <div class="col-4">
                                        <img
                                        class="img-fluid"
                                        src="<?php echo get_home_url( null, '/wp-content/uploads/2022/06/mockup.png' ) ?>"
                                        alt="">
                                    </div>

                                    <div class="col-8 pl-0">
                                        
                                        <p class="u-font-size-12 xxl:u-font-size-15 u-font-weight-semibold u-color-folk-golden mb-0">
                                            E-book
                                        </p>

                                        <h6 class="u-font-size-18 xxl:u-font-size-19 u-font-weight-semibold u-color-folk-bold-electric-blue mb-2">
                                            Oração pessoal
                                            Guia para iniciantes
                                        </h6>
                                    </div>

                                    <div class="col-12 mt-3">

                                        <div class="row justify-content-center">

                                            <div class="col-7 offset-2">

                                                <a
                                                class="w-100 u-box-shadow-pattern d-block u-font-size-12 xxl:u-font-size-16 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-bold-electric-blue hover:u-color-folk-golden u-bg-folk-golden hover:u-bg-folk-squid-ink py-2"
                                                href="#">
                                                    Baixar
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!--- end loop -->
                    </div>
                </div>

                <div class="row justify-content-center">

                    <div class="col-8 col-md-2 mt-3">

                        <a
                        class="w-100 u-box-shadow-pattern d-block u-font-size-15 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-medium-electric-blue hover:u-bg-folk-squid-ink py-2"
                        href="#">
                            Ver mais
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end books -->

<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<img
class="img-fluid"
data-src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/banner-illustration.png"
alt="Single Temas">

<?php

get_footer();
