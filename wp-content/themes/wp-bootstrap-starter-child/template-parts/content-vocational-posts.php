<section class="pt-5">

    <div class="container">

        <div class="row">

            <div class="col-12 mb-5">

                <h2 class="c-title-pattern u-font-weight-semibold text-center u-color-folk-squid-ink mb-0 pb-2">
                    <span class="u-font-size-15 xxl:u-font-size-19 u-font-weight-regular u-font-family-lato u-color-folk-squid-ink">Fique informado!</span> <br>
                    Notícias das Casas de Formação
                </h2>
            </div>

            <div class="col-12">

                <div class="row">

                    <!-- loop -->
                    <?php for( $i = 0; $i < 4; $i++ ) { ?>
                        <div class="col-md-6 col-lg-3 my-3 px-2">

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

                                        <div class="col-6 mt-3">

                                            <p
                                            class="w-100 u-box-shadow-pattern u-font-size-12 u-font-weight-bold u-font-family-nunito text-center u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink py-2">
                                                Ler mais
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                    <!-- end loop -->

                    <div class="col-12">

                        <div class="row justify-content-center">

                            <div class="col-8 col-md-3 mt-5">

                                <a
                                class="w-100 u-box-shadow-pattern d-flex justify-content-center align-items-center u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-squid-ink hover:u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink py-3"
                                href="#">
                                    <span class="u-font-size-22 pr-2">+</span>Notícias
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>