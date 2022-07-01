<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 mb-5 pb-3">
                <h2 class="c-title-pattern u-font-weight-semibold text-center u-color-folk-squid-ink mb-0 pb-2">
                    <span class="u-font-size-15 xxl:u-font-size-19 u-font-weight-regular u-font-family-lato u-color-folk-squid-ink">Nossos</span> <br>
                    Parceiros
                </h2>
            </div>

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

        <div class="row justify-content-center">

            <div class="col-8 col-md-3 mt-5">

                <a 
                class="w-100 u-box-shadow-pattern d-flex justify-content-center align-items-center u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-squid-ink hover:u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink py-2" 
                href="#">
                    Seja um parceiro
                </a>
            </div>
        </div>
    </div>
</section>