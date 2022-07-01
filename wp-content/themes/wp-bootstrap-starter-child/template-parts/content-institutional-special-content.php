<section class="mb-5 py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 mb-5">

                <h2 class="c-title-pattern u-font-weight-semibold text-center u-color-folk-squid-ink mb-0 pb-2">
                    <span class="u-font-size-15 xxl:u-font-size-19 u-font-weight-regular u-font-family-lato u-color-folk-squid-ink">Aprofunde-se com nossos</span> <br>
                    Conteúdos
                </h2>
            </div>

            <div class="col-lg-8">

                <div class="row">

                    <!-- loop -->
                    <?php for( $i = 0; $i < 4; $i++ ) { ?>
                        <div class="col-md-6 my-3 my-md-0">

                            <a 
                            class="card border-0 text-decoration-none"
                            href="#">

                                <div class="card-img">
                                    <img
                                    class="l-special-content__thumbnail img-fluid w-100 u-object-fit-cover"
                                    src="<?php echo get_home_url( null, '/wp-content/uploads/2022/06/special-content-image.png' ) ?>"
                                    alt="<?php the_title() ?>">
                                </div>

                                <div class="card-body">
                                    
                                    <p class="u-font-size-14 xxl:u-font-size-18 u-font-weight-regular u-font-family-myriad-pro text-center u-color-folk-squid-ink mb-2">
                                        Evangelização
                                    </p>

                                    <h4 class="l-special-content__title u-font-weight-bold text-center u-color-folk-medium-electric-blue">
                                        O que Deus quer neste novo ano?
                                    </h4>

                                    <div class="row justify-content-center">

                                        <div class="col-8 mt-3">

                                            <p
                                            class="w-100 u-box-shadow-pattern u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-squid-ink hover:u-bg-folk-golden py-2">
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

                <!-- pagination -->
                <div class="swiper-pagination swiper-pagination-special-content w-100 js-swiper-pagination-special-content"></div>
                <!-- end swiper -->
            </div>

            <div class="col-lg-4">

                <div class="row">

                    <div class="col-12">

                        <div class="border py-4 px-3">

                            <h6 class="l-several__shop__title u-font-weight-semibold u-color-folk-bold-electric-blue">
                                Materiais <br>
                                exclusivos
                            </h6>

                            <div class="row">

                                <!-- loop -->
                                <?php for( $i = 0; $i < 3; $i++ ) { ?>
                                    <div class="col-12 my-3">

                                        <div class="row">

                                            <div class="col-4">
                                                <img
                                                class="img-fluid"
                                                src="<?php echo get_home_url( null, '/wp-content/uploads/2022/06/mockup.png' ) ?>"
                                                alt="">
                                            </div>

                                            <div class="col-8 pl-0">
                                                
                                                <p class="u-font-size-12 xxl:u-font-size-17 u-font-weight-semibold u-color-folk-golden mb-0">
                                                    E-book
                                                </p>

                                                <h6 class="u-font-size-18 xxl:u-font-size-22 u-font-weight-semibold u-color-folk-bold-electric-blue mb-2">
                                                    Oração pessoal
                                                    Guia para iniciantes
                                                </h6>
                                            </div>

                                            <div class="col-12 mt-3">

                                                <div class="l-several__line"></div>

                                                <div class="row justify-content-center">

                                                    <div class="col-7 offset-2">

                                                        <a
                                                        class="w-100 u-box-shadow-pattern d-block u-font-size-12 xxl:u-font-size-16 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-bold-electric-blue hover:u-color-folk-golden u-bg-folk-golden hover:u-bg-folk-squid-ink py-2"
                                                        href="#">
                                                            Comprar
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

                            <div class="col-7 mt-3">

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

            <div class="col-12">

                <div class="row justify-content-center">

                    <div class="col-8 col-md-3 mt-5">

                        <a
                        class="w-100 u-box-shadow-pattern d-flex justify-content-center align-items-center u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-squid-ink hover:u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink py-3"
                        href="#">
                            <span class="u-font-size-22 pr-2">+</span>Conteúdos
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>