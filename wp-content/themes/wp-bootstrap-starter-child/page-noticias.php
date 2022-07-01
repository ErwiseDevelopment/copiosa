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

            <div class="col-12">

                <div class="row">

                    <div class="col-lg-8">
                        <img
                        class="img-fluid"
                        src="<?php echo get_home_url( null, '/wp-content/uploads/2022/06/post-highlight-image.png' ) ?>"
                        alt="Imagem destacada">
                    </div>

                    <div class="col-lg-4 mt-3 mt-lg-0">

                        <div class="l-post-highlight__box u-box-shadow-pattern u-bg-folk-white p-3 p-lg-5">
                            
                            <h2 class="l-post-highlight__title u-font-weight-bold u-color-folk-squid-ink">
                                Irmãs professam
                                votos temporários e
                                perpétuos em festa dos
                                32 anos da Congregação
                            </h2>

                            <p class="u-font-size-12 xxl:u-font-size-15 u-font-weight-bold text-uppercase u-color-folk-golden">
                                10 DE DEZEMBRO DE 2021
                            </p>

                            <p class="u-font-size-14 xxl:u-font-size-18 u-font-weight-regular u-color-folk-aluminium mt-4">
                                Aconteceu no dia 07 de dezembro na nossa chácara, 
                                no distrito de Uvaia, em Ponta Grossa, a celebração 
                                dos Votos Temporários das Irmãs Amanda, Irmã Bruna, 
                                Irmã Criciele, Irmã Gabriele, [...]
                            </p>

                            <div class="row">

                                <div class="col-7 mt-3 pt-3">

                                    <a
                                    class="w-100 u-box-shadow-pattern d-block u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink py-3"
                                    href="#">
                                        Ler mais
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-5 py-md-5">

    <div class="container">

        <div class="row">

            <div class="col-12 mt-md-5 pt-md-5">

                <div class="row">

                    <div class="col-md-8 order-2 order-md-1">

                        <div class="row">

                            <!-- loop -->
                            <?php for( $i = 0; $i < 6; $i++ ) { ?>
                                <div class="col-lg-6 my-3">
                                    <a 
                                    class="card rounded-0 text-decoration-none"
                                    href="#">

                                        <div class="card-img">
                                            <img
                                            class="l-posts__thumbnail img-fluid w-100 u-object-fit-cover"
                                            src="<?php echo get_home_url( null, '/wp-content/uploads/2022/06/posts-image.png' ) ?>"
                                            alt="Post image">
                                        </div>

                                        <div class="card-body px-4">

                                            <p class="u-font-size-12 xxl:u-font-size-14 u-font-weight-bold u-color-folk-medium-electric-blue mb-0">
                                                Institucional
                                            </p>

                                            <p class="u-font-size-12 xxl:u-font-size-14 u-font-weight-semibold u-color-folk-medium-electric-blue">
                                                10 de dezembro de 2021
                                            </p>

                                            <h4 class="u-font-size-16 xxl:u-font-size-20 u-font-weight-bold u-color-folk-bold-electric-blue mb-4">
                                                Workshop reúne religiosos
                                                sobre os benefícios e os 
                                                males da vida online
                                            </h4>

                                            <p class="u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-color-folk-aluminium">
                                                O Centro Âncora promoveu no dia 14 de
                                                outubro, um workshop, intitulado “Teu 
                                                Olhar” voltado para os religiosos (as) [...]
                                            </p>

                                            <div class="row">

                                                <div class="col-5 mt-3">

                                                    <p
                                                    class="w-100 u-box-shadow-pattern position-absolute u-font-size-12 u-font-weight-bold u-font-family-nunito text-center u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink py-2">
                                                        Ler mais
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
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
                                        <?php for( $i = 0; $i < 5; $i++ ) { ?>
                                            <li class="l-page-news__categories u-list-style-none my-3">
                                            
                                                <a 
                                                class="u-font-size-13 xxl:u-font-size-16 u-font-weight-regular text-decoration-none u-color-folk-aluminium"
                                                href="#">
                                                    Institucional
                                                </a>

                                                <span class="l-page-news__categories__circle"></span>
                                            </li>
                                        <?php } ?>

                                        <li class="l-page-news__categories u-list-style-none my-3">
                                            
                                            <a 
                                            class="u-font-size-13 xxl:u-font-size-16 u-font-weight-semibold text-decoration-none u-color-folk-bold-electric-blue"
                                            href="#">
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
                                <a href="#">
                                    <img
                                    class="img-fluid"
                                    src="<?php echo get_home_url( null, 'wp-content/uploads/2022/06/banner-capela.png' ) ?>"
                                    alt="">
                                </a>
                            </div>
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
