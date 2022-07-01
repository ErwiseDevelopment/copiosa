<section class="l-posts">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-lg-8">

                        <div class="row">

                            <!-- loop -->
                            <?php for( $i = 0; $i < 4; $i++ ) { ?>
                                <div class="col-md-6 my-3">

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
                        </div>
                    </div>

                    <div class="col-lg-4 pt-5">

                        <div class="row">

                            <div class="col-12 pt-5">

                                <div class="l-posts__other-post__box py-5 px-4">

                                    <h4 class="l-posts__read-more-title u-font-weight-semibold text-center u-color-folk-squid-ink">
                                        Mais lidas
                                    </h4>

                                    <div class="row">

                                        <!-- loop -->
                                        <?php for( $i = 0; $i < 4; $i++ ) { ?>
                                            <a 
                                            class="l-posts__other-post__col-child col-12 d-block text-decoration-none my-3"
                                            href="#">
                                                
                                                <p class="u-font-size-12 xxl:u-font-size-14 u-font-weight-semibold u-color-folk-medium-electric-blue">
                                                    10 de dezembro de 2022
                                                </p>

                                                <h5 class="l-posts__other-post__title u-font-size-15 xxl:u-font-size-18 u-font-weight-bold u-color-folk-medium-electric-blue mb-0 pb-3">
                                                    Workshop reúne religiosos sobre os 
                                                    benefícios e os males da vida online
                                                </h5>
                                            </a>
                                        <?php } ?>
                                        <!-- end loop -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-5">

                                <div class="row justify-content-between mx-0">

                                    <!-- loop -->
                                    <a 
                                    class="l-posts__item d-block u-font-weight-semibold text-center text-decoration-none u-color-folk-white my-2 p-3"
                                    href="#">
                                        <span class="l-posts__item__icon">Institucional</span>
                                    </a>
                                    <!-- end loop -->

                                    <a 
                                    class="l-posts__item d-block u-font-weight-semibold text-center text-decoration-none u-color-folk-white my-2 p-3"
                                    href="#">
                                        <span class="l-posts__item__icon">Evangelização</span>
                                    </a>

                                    <a 
                                    class="l-posts__item d-block u-font-weight-semibold text-center text-decoration-none u-color-folk-white my-2 p-3"
                                    href="#">
                                        <span class="l-posts__item__icon">Recuperação</span>
                                    </a>

                                    <a 
                                    class="l-posts__item d-block u-font-weight-semibold text-center text-decoration-none u-color-folk-white my-2 p-3"
                                    href="#">
                                        <span class="l-posts__item__icon">Vocacional</span>
                                    </a>

                                    <a 
                                    class="l-posts__item d-block u-font-weight-semibold text-center text-decoration-none u-color-folk-white my-2 p-3"
                                    href="#">
                                        <span class="l-posts__item__icon">Juventude</span>
                                    </a>

                                    <a 
                                    class="l-posts__item d-block u-font-weight-semibold text-center text-decoration-none u-color-folk-white my-2 p-3"
                                    href="#">
                                        <span class="l-posts__item__icon">Notícias</span>
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