<?php
/**
 * The front page template file
 *
 * @package YesMoreBet
 */

get_header();
?>

<main id="primary" class="site-main min-h-screen bg-black">
    <?php
    while (have_posts()) :
        the_post();
        the_content();
    endwhile;
    ?>
</main>

<?php
get_footer();
