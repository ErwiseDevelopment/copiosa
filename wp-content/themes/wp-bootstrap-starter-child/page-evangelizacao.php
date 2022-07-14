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

<section id="primary" class="content-area">
<div id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<!-- banner -->
<?php echo get_template_part( 'template-parts/content', 'banner' ) ?>
<!-- end banner -->

<!-- our communities -->
<?php echo get_template_part( 'template-parts/content', 'evangelization-our-communities' ) ?>
<!-- end our communities -->

<!-- institutional posts -->
<?php echo get_template_part( 'template-parts/content', 'evangelization-posts' ) ?>
<!-- end institutional posts -->

<!-- institutional special content -->
<?php echo get_template_part( 'template-parts/content', 'institutional-special-content' ) ?>
<!-- end institutional special content -->

<!-- gallery -->
<?php echo get_template_part( 'template-parts/content', 'gallery' ) ?>
<!-- end gallery -->

<!-- video -->
<?php echo get_template_part( 'template-parts/content', 'video' ) ?>
<!-- end video -->

<!-- several -->
<?php echo get_template_part( 'template-parts/content', 'banners-finais' ) ?>
<!-- end several -->

<!-- institutional newsletter -->
<?php echo get_template_part( 'template-parts/content', 'institutional-newsletter' ) ?>
<!-- end institutional newsletter -->

<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
