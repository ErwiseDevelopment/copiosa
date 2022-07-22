<section class="my-5">

    <div class="container">

        <div class="row">

            <div class="col-12 my-4">

                <h2 class="c-title-pattern u-font-weight-semibold text-center u-color-folk-squid-ink mb-0 pb-2">
                    Galeria
                </h2>
            </div>

            <div class="col-12 mt-3">

                <!-- swiper -->
                <div class="swiper-container js-swiper-gallery">

                    <div class="swiper-wrapper">

                        <?php 
                            $gallery = get_field( 'galeria', 'option' );

                            if( $gallery ) :
                                foreach( $gallery as $photo ) :
                        ?>
                                    <div class="swiper-slide">
                                        <img
                                        class="img-fluid w-100 h-100 u-object-fit-cover"
                                        src="<?php echo $photo['url'] ?>"
                                        alt="<?php echo $photo['title']; ?>">
                                    </div>
                        <?php
                                endforeach;
                            endif;
                        ?>
                    </div>
                </div>
                <!-- end swiper -->
            </div>

            <div class="col-12">

                <div class="row justify-content-center">

                    <div class="col-8 col-md-3 mt-5">

                        <a 
                        class="w-100 u-box-shadow-pattern d-flex justify-content-center align-items-center u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-squid-ink hover:u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink py-2" 
                        href="<?php echo get_home_url( null, 'fotos' ) ?>">
                            <span class="u-font-size-22 pr-2">+</span>Fotos
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>