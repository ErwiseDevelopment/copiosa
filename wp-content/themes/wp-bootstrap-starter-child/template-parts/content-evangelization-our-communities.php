<section class="u-bg-folk-light-gray py-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-lg-8">
                        
                        <!-- swiper -->
                        <div class="swiper-container js-swiper-our-communities-image">

                            <div class="swiper-wrapper">

                                <!-- slide -->
                                <?php
                                    $editorial_slug_current = 'evangelizacao';
                                    $editorial_id_current = 28;
        
                                    $args = array(
                                        'posts_per_page' => -1,
                                        'post_type'      => 'comunidades',
                                        'order'          => 'DESC',
                                        'tax_query'      => array(
                                            array(
                                                'taxonomy' => 'comunidades_categoria',
                                                'field'    => 'slug',
                                                'terms'    => array( $editorial_slug_current )
                                            )
                                        )
                                    );
        
                                    $communities = new WP_Query( $args );

                                    if( $communities->have_posts() ) :
                                        while( $communities->have_posts() ) : $communities->the_post();
                                ?>      
                                            <div class="swiper-slide">
                                                <!-- <img
                                                class="img-fluid"
                                                src="<php echo get_home_url( null, '/wp-content/uploads/2022/06/WhatsApp-Image-2017-04-28-at-13.31.23.png' ) ?>"
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
                                <?php 
                                        endwhile;
                                    endif;
                                ?>
                                <!-- end slide -->
                            </div>
                        </div>
                        
                        <!-- end swiper -->
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">

                        <div class="l-our-communities__box u-bg-folk-white">

                            <div class="l-our-communities__buttons d-flex">

                                <div class="l-our-communities__buttons__item swiper-button-prev d-flex justify-content-center align-items-center mt-0 mx-1 js-swiper-button-prev-our-communities">
                                    <img
                                    class="img-fluid"
                                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/icon-arrow-left.png"
                                    alt="Ícone Seta Esquerda">
                                </div>

                                <div class="l-our-communities__buttons__item swiper-button-next d-flex justify-content-center align-items-center mt-0 mx-1 js-swiper-button-next-our-communities">
                                    <img
                                    class="img-fluid"
                                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/icon-arrow-right.png"
                                    alt="Ícone Seta Direita">
                                </div>
                            </div>

                            <!-- swiper -->
                            <div class="swiper-container mt-4 js-swiper-our-communities">

                                <div class="swiper-wrapper">

                                    <!-- slide -->
                                    <?php 
                                        if( $communities->have_posts() ) :
                                            while( $communities->have_posts() ) : $communities->the_post();
                                    ?>
                                                <div class="swiper-slide">

                                                    <div>

                                                        <p class="d-inline-block u-font-size-10 u-font-weight-semibold text-center u-color-folk-bold-electric-blue u-bg-folk-golden py-1 px-5">
                                                            <!-- Casa de Pastoral -->
                                                            <?php
                                                                $terms = get_terms(
                                                                    array(
                                                                        'taxonomy'   => 'comunidades_categoria',
                                                                        'hide_empty' => true,
                                                                        'parent'     => $editorial_id_current
                                                                    )
                                                                );

                                                                echo $terms[0]->name;
                                                            ?>
                                                        </p>

                                                        <h3 class="l-our-communities__title u-font-weight-bold u-color-folk-bold-electric-blue mb-4">
                                                            <!-- Comunidade
                                                            Padre Pelágio -->
                                                            <?php the_title() ?>
                                                        </h3>

                                                        <div class="d-flex align-items-center">
                                                            <span class="px:u-w-32 px:u-h-32 u-border-2 u-border-color-medium-electric-blue rounded-pill u-icon__free u-icon__phone-alt d-flex justify-content-center align-items-center u-font-size-0 u-font-weight-semibold before::u-font-size-18 u-color-folk-medium-electric-blue">
                                                                Ícone telefone
                                                            </span>

                                                            <p class="u-line-height-100 ml-2 mb-0">
                                                                <span class="u-font-size-12 u-font-weight-regular u-font-family-lato u-color-folk-aluminium">Telefone</span> <br>
                                                                <!-- <span class="u-font-size-14 u-font-weight-semibold u-font-family-lato u-color-folk-medium-electric-blue">(62) 3505-7702</span> -->
                                                                <span class="u-font-size-14 u-font-weight-semibold u-font-family-lato u-color-folk-medium-electric-blue"><?php echo get_field( 'telefone' ) ?></span>
                                                            </p>
                                                        </div>

                                                        <span class="d-block u-font-size-14 xxl:u-font-size-17 u-font-weight-regular u-color-folk-aluminium mt-4">
                                                            <!-- R: 119, Lote 43, Nº 650 – Setor Ana Rosa <br>
                                                            CEP 75380-000 – Trindade GO -->
                                                            <?php echo get_field( 'endereco' ) ?>
                                                        </span>
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