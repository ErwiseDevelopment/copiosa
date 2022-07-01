<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
  
    <?php get_template_part( 'footer-widget' ); ?>
    
    <!-- <footer id="colophon" class="site-footer <php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
        <div class="container pt-3 pb-3">
            <div class="site-info">
                &copy; <php echo date('Y'); ?> <php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                <span class="sep"> | </span>
                <a class="credits" href="https://afterimagedesigns.com/wp-bootstrap-starter/" target="_blank" title="WordPress Technical Support" alt="Bootstrap WordPress Theme"><php echo esc_html__('Bootstrap WordPress Theme','wp-bootstrap-starter'); ?></a>

            </div>
        </div>
    </footer> #colophon -->

    <footer class="l-footer u-bg-folk-dark-grayish-navy py-5">
        
        <div class="container">

            <div class="row justify-content-center">

                <div class="col-8 col-lg-4">
                    <a href="#">
                        <img
                        class="img-fluid w-100"
                        src="http://copiosa.test/wp-content/uploads/2022/06/logotipo_oficial_horizontal-1.png"
                        alt="">
                    </a>
                </div>

                <div class="col-12 my-4">

                    <div class="row">

                        <div class="col-11 col-md-6 col-lg-3 offset-1 offset-md-0">

                            <h3 class="u-font-size-15 u-font-weight-bold u-color-folk-white">
                                Irmãs da Copiosa Redenção
                            </h3>

                            <p class="u-icon__free u-icon__map::right position-relative u-font-size-12 u-font-weight-regular before::u-font-weight-semibold u-font-family-nunito u-color-folk-light-aluminium mb-2 before::u-pr-2">
                                Rua Doralício Correia, 357.
                            </p>

                            <p class="u-font-size-12 u-font-weight-regular before::u-font-weight-semibold u-font-family-nunito u-color-folk-light-aluminium mb-2">
                                Uvaranas – Ponta Grossa/PR
                            </p>

                            <p class="u-font-size-12 u-font-weight-regular before::u-font-weight-semibold u-font-family-nunito u-color-folk-light-aluminium mb-2">
                                Cep 84031 190
                            </p>

                            <p class="u-icon__free u-icon__phone-alt::right position-relative u-font-size-12 u-font-weight-regular before::u-font-weight-semibold u-font-family-nunito u-color-folk-light-aluminium mb-2 before::u-pr-2">
                                +55 042 3226 1144
                            </p>

                            <p class="u-font-size-12 u-font-weight-regular before::u-font-weight-semibold u-font-family-nunito u-color-folk-light-aluminium mb-2">
                                +55 042 9 9985 9504
                            </p>

                            <p class="u-icon__free u-icon__envelope::right position-relative u-font-size-12 u-font-weight-regular before::u-font-weight-semibold u-font-family-nunito u-color-folk-light-aluminium mb-2 before::u-pr-2">
                                atendimento@copiosaredencao.org.br
                            </p>
                        </div>

                        <div class="col-11 col-md-6 col-lg-3 offset-1 offset-md-0">

                            <h3 class="u-font-size-15 u-font-weight-bold u-color-folk-white">
                                Padres e Irmãos
                            </h3>

                            <p class="u-icon__free u-icon__map::right position-relative u-font-size-12 u-font-weight-regular before::u-font-weight-semibold u-font-family-nunito u-color-folk-light-aluminium mb-2 before::u-pr-2">
                                BR 373,  Km 186,2. Distrito
                            </p>

                            <p class="u-font-size-12 u-font-weight-regular before::u-font-weight-semibold u-font-family-nunito u-color-folk-light-aluminium mb-2">
                                de Uvaia - Ponta Grossa/PR
                            </p>

                            <p class="u-font-size-12 u-font-weight-regular before::u-font-weight-semibold u-font-family-nunito u-color-folk-light-aluminium mb-2">
                                CEP 84062 981
                            </p>

                            <p class="u-icon__free u-icon__phone-alt::right position-relative u-font-size-12 u-font-weight-regular before::u-font-weight-semibold u-font-family-nunito u-color-folk-light-aluminium mb-2 before::u-pr-2">
                                +55 042 9 9158 5366
                            </p>
                        </div>

                        <div class="col-11 col-md-6 col-lg-2 offset-1 offset-md-0 mt-3 mt-lg-0">

                            <h3 class="u-font-size-15 u-font-weight-bold u-color-folk-white">
                                Nossas áreas
                            </h3>

                            <ul class="pl-0">
                                <li class="u-list-style-none">
                                    <a
                                    class="u-font-size-12 u-font-weight-regular before::u-font-weight-semibold u-font-family-nunito u-color-folk-light-aluminium"
                                    href="#">
                                        Institucional
                                    </a>
                                </li>

                                <li class="u-list-style-none">
                                    <a
                                    class="u-font-size-12 u-font-weight-regular before::u-font-weight-semibold u-font-family-nunito u-color-folk-light-aluminium"
                                    href="#">
                                        Evangelização
                                    </a>
                                </li>

                                <li class="u-list-style-none">
                                    <a
                                    class="u-font-size-12 u-font-weight-regular before::u-font-weight-semibold u-font-family-nunito u-color-folk-light-aluminium"
                                    href="#">
                                        Recuperação
                                    </a>
                                </li>

                                <li class="u-list-style-none">
                                    <a
                                    class="u-font-size-12 u-font-weight-regular before::u-font-weight-semibold u-font-family-nunito u-color-folk-light-aluminium"
                                    href="#">
                                        Vocacional
                                    </a>
                                </li>

                                <li class="u-list-style-none">
                                    <a
                                    class="u-font-size-12 u-font-weight-regular before::u-font-weight-semibold u-font-family-nunito u-color-folk-light-aluminium"
                                    href="#">
                                        Juventude
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-11 col-md-6 col-lg-2 offset-1 offset-md-0 mt-3 mt-lg-0">

                            <h3 class="u-font-size-15 u-font-weight-bold u-color-folk-white">
                                Links
                            </h3>

                            <ul class="pl-0">
                                <li class="u-list-style-none">
                                    <a
                                    class="u-font-size-12 u-font-weight-regular before::u-font-weight-semibold u-font-family-nunito u-color-folk-light-aluminium"
                                    href="#">
                                        Política de privacidade
                                    </a>
                                </li>

                                <li class="u-list-style-none">
                                    <a
                                    class="u-font-size-12 u-font-weight-regular before::u-font-weight-semibold u-font-family-nunito u-color-folk-light-aluminium"
                                    href="#">
                                        Política de Cookies
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="container">

            <div class="row">

                <div class="col-12 pt-3">

                    <ul class="d-flex justify-content-center justify-content-lg-end pl-0">

                        <li class="px:u-w-40 px:u-h-40 u-list-style-none mx-2">
                            <a 
                            class="u-icon__brands u-icon__twitter w-100 h-100 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 text-decoration-none u-color-folk-white u-bg-folk-twitter"
                            href="#"
                            target="_blank"
                            rel="noreferrer noopener">
                                Link do Twitter
                            </a>
                        </li>

                        <li class="px:u-w-40 px:u-h-40 u-list-style-none mx-2">
                            <a 
                            class="u-icon__brands u-icon__facebook w-100 h-100 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 text-decoration-none u-color-folk-white u-bg-folk-facebook"
                            href="#"
                            target="_blank"
                            rel="noreferrer noopener">
                                Link do Facebook
                            </a>
                        </li>

                        <li class="px:u-w-40 px:u-h-40 u-list-style-none mx-2">
                            <a 
                            class="u-icon__brands u-icon__youtube w-100 h-100 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 text-decoration-none u-color-folk-white u-bg-folk-youtube"
                            href="#"
                            target="_blank"
                            rel="noreferrer noopener">
                                Link do Youtube
                            </a>
                        </li>

                        <li class="px:u-w-40 px:u-h-40 u-list-style-none mx-2">
                            <a 
                            class="u-icon__brands u-icon__instagram w-100 h-100 d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-15 text-decoration-none u-color-folk-white u-bg-folk-instagram"
                            href="#"
                            target="_blank"
                            rel="noreferrer noopener">
                                Link do Instagram
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row">

                <?php echo get_template_part( 'template-parts/content', 'dev' ) ?>
            </div>
        </div>
    </footer>

<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>