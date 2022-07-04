<section class="l-testimonials position-relative u-bg-folk-light-gray my-5">

    <div class="container">

        <div class="row">

            <div class="col-12 mb-5 pb-5">
                <h2 class="c-title-pattern u-font-weight-semibold text-center u-color-folk-squid-ink mb-0 pb-2">
                    <span class="u-font-size-15 xxl:u-font-size-19 u-font-weight-regular u-font-family-lato u-color-folk-squid-ink">Quem passou por aqui:</span> <br>
                    Depoimentos
                </h2>
            </div>
            
            <div class="col-12 mt-5">

                <div class="row">

                    <div class="col-lg-5 py-5" style="z-index:1">

                        <!-- swiper -->
                        <div class="swiper-container js-swiper-testimonials-photos">

                            <div class="swiper-wrapper">

                                <!-- slide -->
                                <?php 
                                    $args = array(
                                        'posts_per_page' => -1,
                                        'post_type'      => 'depoimentos',
                                        'order'          => 'DESC'
                                    );

                                    $posts_testimonials = new WP_Query( $args );

                                    if( $posts_testimonials->have_posts() ) :
                                        while( $posts_testimonials->have_posts() ) : $posts_testimonials->the_post();
                                ?>
                                            <div class="swiper-slide">
                                                <!-- <img
                                                class="img-fluid w-100 h-100 u-object-fit-cover"
                                                src="<php echo get_home_url( null, '/wp-content/uploads/2022/06/20170409_171943-600x400-1.png' ) ?>"
                                                alt=""> -->

                                                <?php
                                                    $alt_title = get_the_title();

                                                    the_post_thumbnail( 'post-thumbnail',
                                                        array(
                                                            'class' => 'img-fluid w-100 h-100 u-object-fit-cover',
                                                            'alt'   => $alt_title
                                                        ));
                                                ?>
                                            </div>
                                <?php 
                                        endwhile;
                                    endif;
                                ?>
                                <!-- end slide -->
                            </div>
                        </div>
                        <!-- end swiper -->
                    </div>

                    <div class="col-lg-7">
                        
                        <div class="l-our-communities__box l-our-communities__box--recovery l-testimonials__box u-bg-folk-white">

                            <div class="l-our-communities__buttons d-flex">

                                <div class="l-our-communities__buttons__item swiper-button-prev d-flex justify-content-center align-items-center mt-0 mx-1 js-swiper-button-prev-testimonials">
                                    <img
                                    class="img-fluid"
                                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/icon-arrow-left.png"
                                    alt="Ícone Seta Esquerda">
                                </div>

                                <div class="l-our-communities__buttons__item swiper-button-next d-flex justify-content-center align-items-center mt-0 mx-1 js-swiper-button-next-testimonials">
                                    <img
                                    class="img-fluid"
                                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/icon-arrow-right.png"
                                    alt="Ícone Seta Direita">
                                </div>
                            </div>

                            <!-- swiper -->
                            <div class="swiper-container mt-4 js-swiper-testimonials">

                                <div class="swiper-wrapper">

                                    <!-- slide -->
                                    <?php
                                        if( $posts_testimonials->have_posts() ) :
                                            while( $posts_testimonials->have_posts() ) : $posts_testimonials->the_post();
                                    ?>
                                                <div class="swiper-slide">

                                                    <div>

                                                        <p class="d-inline-block u-font-size-10 u-font-weight-semibold text-center text-uppercase u-color-folk-bold-electric-blue u-bg-folk-golden py-1 px-5">
                                                            <!-- Comunidade Terapêutica Pe. wilton -->
                                                            <?php
                                                                $categories_current = get_the_terms( get_the_ID(), 'depoimentos_categoria' );
                                                                echo $categories_current[0]->name;
                                                            ?>
                                                        </p>

                                                        <h3 class="l-our-communities__title u-font-weight-bold u-color-folk-bold-electric-blue mb-4">
                                                            <!-- João Paulo Vieira Deschk -->
                                                            <?php the_title() ?>
                                                        </h3>

                                                        <span class="d-block u-font-size-14 xxl:u-font-size-17 u-font-weight-regular u-color-folk-aluminium mt-4">
                                                            <!-- Com. Terapêutica Pe. Wilton – Ponta Grossa/PR – 9 anos de sobriedade. <br><br>

                                                            O autoconhecimento que a experiência na comunidade terapêutica me 
                                                            trouxe, foi, e ainda é, fundamental para conseguir seguir a jornada de 
                                                            dependente químico no pós tratamento. […] pois a misericórdia de Deus é 
                                                            infinita, e que apesar de nossas falhas e imperfeições, sempre está 
                                                            presente em nossas vidas mostrando um caminho de vitórias e bênçãos[…]. -->
                                                            <?php echo limit_words( get_the_content(), 65); ?>
                                                        </span>
                                                        
                                                        <div class="row">
                                                            
                                                            <div class="col-5 mt-3">
                                                                <p class="u-font-size-12 u-font-weight-semibold text-center text-uppercase u-color-folk-bold-electric-blue hover:u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink u-cursor-pointer py-1 px-5">
                                                                    Ler mais
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                    <?php
                                            endwhile;
                                        endif;
                                        
                                        wp_reset_query(); 
                                    ?>
                                    <!-- end slide -->
                                </div>
                            </div>
                            <!-- end swiper -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>