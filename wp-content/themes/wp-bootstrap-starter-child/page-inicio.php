<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<!-- teste teste teste teste 1gi --> 
<section id="primary">
<main id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<!-- banner -->
<?php echo get_template_part( 'template-parts/content', 'banner' ) ?>
<!-- end banner -->

<!-- areas of expertise -->
<?php echo get_template_part( 'template-parts/content', 'areas-expertise' ) ?>
<!-- end areas of expertise -->

<!-- post highlight -->
<?php echo get_template_part( 'template-parts/content', 'post-highlight' ) ?>
<!-- end post highlight -->

<!-- posts -->
<?php echo get_template_part( 'template-parts/content', 'posts' ) ?>
<!-- end posts -->

<!-- special content -->
<?php echo get_template_part( 'template-parts/content', 'special-content' ) ?>
<!-- end special content -->

<!-- congregation -->
<?php echo get_template_part( 'template-parts/content', 'congregation' ) ?>
<!-- end congregation -->

<!-- help -->
<?php echo get_template_part( 'template-parts/content', 'help' ) ?>
<!-- end help -->

<!-- several -->
<?php echo get_template_part( 'template-parts/content', 'several' ) ?>
<!-- end several -->

<?php endwhile; ?>

</main><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
