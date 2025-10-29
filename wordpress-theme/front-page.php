<?php
/**
 * Template for the home page
 *
 * @package YesMoreBet
 */

get_header();
?>

<div class="home-page">
    <!-- Hero Section -->
    <?php get_template_part( 'template-parts/hero', 'section' ); ?>

    <!-- Features Section -->
    <?php get_template_part( 'template-parts/features', 'section' ); ?>

    <!-- Concept Section -->
    <?php get_template_part( 'template-parts/concept', 'section' ); ?>

    <!-- FAQ Section -->
    <?php get_template_part( 'template-parts/faq', 'section' ); ?>
</div>

<?php
get_footer();
