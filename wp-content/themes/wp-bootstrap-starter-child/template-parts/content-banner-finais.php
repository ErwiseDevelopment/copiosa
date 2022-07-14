<div class="container">

<div class="row">

    <div class="col-12 mt-4">

        <div class="row">

            <div class="col-md-8">

                <div class="row h-100">

                    <!-- loop -->
                    
                                <div class="l-several__col col-lg-6 mb-3 mb-lg-0">
                                    
                                    <a 
                                    class="h-100 d-block"
                                    href="#">
                                        <img
                                        class="img-fluid h-100 u-object-fit-cover"
                                        src="<?php echo get_field( 'imagem_destaque_esquerdo', 'option' ) ?>"
                                        alt="<?php the_title() ?>">
                                    </a>

                                    <ul class="l-several__social-media d-flex justify-content-center align-items-center mb-0 pl-0">
                                        
                                        
                                            <li class="l-several__social-media__item u-list-style-none mx-3">
                                                <a
                                                class="u-icon__brands u-icon__instagram u-font-size-0 before::u-font-size-44 u-font-weight-light text-center text-decoration-none u-color-folk-white"
                                                href="<?php echo get_field( 'instagram', 'option' ) ?>"
                                                target="_blank"
                                                rel="noreferrer noopener">
                                                    Link do Instagram
                                                </a>
                                            </li>
                                  

                                     
                                            <li class="l-several__social-media__item u-list-style-none mx-3">
                                                <a
                                                class="u-icon__brands u-icon__facebook u-font-size-0 before::u-font-size-44 u-font-weight-light text-center text-decoration-none u-color-folk-white"
                                                href="<?php echo get_field( 'facebook_facebook','option' ) ?>"
                                                target="_blank"
                                                rel="noreferrer noopener">
                                                    Link do Facebook
                                                </a>
                                            </li>
                                     
                                    </ul>
                                </div>
                                <div class="l-several__col col-lg-6 mb-3 mb-lg-0">
                                    
                                    <a 
                                    class="h-100 d-block"
                                    href="#">
                                        <img
                                        class="img-fluid h-100 u-object-fit-cover"
                                        src="<?php echo get_field( 'imagem_destaque_direito', 'option' ) ?>"
                                        alt="<?php the_title() ?>">
                                    </a>
                                </div>

                    <!-- <div class="col-lg-6">
                        
                        <a 
                        class="h-100 d-block"
                        href="#">
                            <img
                            class="img-fluid h-100 u-object-fit-cover"
                            src="<?php echo get_home_url( null, '/wp-content/uploads/2022/06/banner-irmazelia.png' ) ?>"
                            alt="">
                        </a>
                    </div> -->
                </div>
            </div>
