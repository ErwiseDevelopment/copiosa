<section class="l-help mt-n4 py-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-12 pt-4">

                <div class="row">

                    <div class="col-6 col-lg-3">

                        <p class="l-help__number u-font-weight-black text-center u-color-folk-golden mb-0">
                            <!-- 25 -->
                            <?php echo get_field( 'numero_comunidades', 'option' ) ?>
                        </p>

                        <p class="u-font-size-15 xxl:u-font-size-18 u-font-weight-regular u-font-family-lato text-center u-color-folk-white">
                            comunidades
                        </p>
                    </div>

                    <div class="col-6 col-lg-3">

                        <p class="l-help__number u-font-weight-black text-center u-color-folk-golden mb-0">
                            <!-- 165 -->
                            <?php echo get_field( 'numero_irmaos_e_irmas', 'option' ) ?>
                        </p>

                        <p class="u-font-size-15 xxl:u-font-size-18 u-font-weight-regular u-font-family-lato text-center u-color-folk-white">
                            irmãos e irmãs
                        </p>
                    </div>

                    <div class="col-6 col-lg-3">

                        <p class="l-help__number u-font-weight-black text-center u-color-folk-golden mb-0">
                            <!-- 200 -->
                            <?php echo get_field( 'numero_consagrados', 'option' ) ?>
                        </p>

                        <p class="u-font-size-15 xxl:u-font-size-18 u-font-weight-regular u-font-family-lato text-center u-color-folk-white">
                            leigos consagrados  
                        </p>
                    </div>

                    <div class="col-6 col-lg-3">

                        <p class="l-help__number u-font-weight-black text-center u-color-folk-golden mb-0">
                            <!-- 3000 -->
                            <?php echo get_field( 'numero_atendidas', 'option' ) ?>
                        </p>

                        <p class="u-font-size-15 xxl:u-font-size-18 u-font-weight-regular u-font-family-lato text-center u-color-folk-white">
                            pessoas atendidas
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-11 mt-5">

                <div class="row">

                    <div class="col-lg-7 mb-3 mb-lg-0">

                        <p class="u-font-size-16 xxl:u-font-size-20 u-font-weight-regular u-font-family-lato u-color-folk-white mb-2">
                            Faça parte dessa história!
                        </p>

                        <h5 class="l-help__phares u-line-height-100 u-font-weight-bold u-color-folk-white mb-4">
                            Nos ajude a fazer <br>
                            a diferença! 
                        </h5>

                        <div class="rounded u-bg-folk-golden" style="width:232px;height:9px"></div>
                    </div>

                    <div class="col-lg-5">

                        <ul class="pl-0 pl-lg-3">
                            
                            <!-- loop -->
                            <?php
                                $count = 0;
                                if( have_rows( 'itens_diferenca', 'option' ) ) :
                                    while( have_rows( 'itens_diferenca', 'option' ) ) : the_row();
                                        $count++;
                            ?>
                                        <li class="d-flex u-list-style-none my-2">
                                            <div class="l-help__item__topic d-flex justify-content-center align-items-center u-font-weight-bold u-color-folk-white u-bg-folk-golden px-3">
                                                <!-- 01. -->
                                                <?php echo '0' . $count . '.'; ?>
                                            </div>

                                            <div class="w-100 u-bg-folk-white:op-1 py-2 px-3">
                                                <p class="u-font-size-14 xxl:u-font-size-18 u-font-weight-regular u-font-family-lato u-color-folk-white mb-0">
                                                    <!-- Junte-se a nós -->
                                                    <?php echo get_sub_field( 'texto' ) ?>
                                                </p>

                                                <p class="l-help__item__title u-font-weight-bold u-color-folk-white mb-0">
                                                    <!-- Seja um benfeitor -->
                                                    <?php echo get_sub_field( 'texto_destaque' ) ?>
                                                </p>
                                            </div>
                                        </li>
                            <?php
                                    endwhile;
                                endif;
                            ?>
                            <!-- end loop -->

                            <!-- <li class="d-flex u-list-style-none my-2">
                                <div class="l-help__item__topic d-flex justify-content-center align-items-center u-font-weight-bold u-color-folk-white u-bg-folk-golden px-3">
                                    02.
                                </div>

                                <div class="w-100 u-bg-folk-white:op-1 py-2 px-3">
                                    <p class="u-font-size-14 xxl:u-font-size-18 u-font-weight-regular u-font-family-lato u-color-folk-white mb-0">
                                        Faça sua contribuição
                                    </p>

                                    <p class="l-help__item__title u-font-weight-bold u-color-folk-white mb-0">
                                        Doe aqui
                                    </p>
                                </div>
                            </li>

                            <li class="d-flex u-list-style-none my-2">
                                <div class="l-help__item__topic d-flex justify-content-center align-items-center u-font-weight-bold u-color-folk-white u-bg-folk-golden px-3">
                                    03.
                                </div>

                                <div class="w-100 u-bg-folk-white:op-1 py-2 px-3">
                                    <p class="u-font-size-14 xxl:u-font-size-18 u-font-weight-regular u-font-family-lato u-color-folk-white mb-0">
                                        Faça parte
                                    </p>

                                    <p class="l-help__item__title u-font-weight-bold u-color-folk-white mb-0">
                                        Seja um vocacionado
                                    </p>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>