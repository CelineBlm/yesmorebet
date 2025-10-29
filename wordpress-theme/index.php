<?php
/**
 * The main template file
 *
 * @package YesMoreBet
 */

get_header();
?>

<div class="content-wrapper">
    <div class="container">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </header>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
            endwhile;
        else :
            ?>
            <p><?php esc_html_e( 'Aucun contenu trouvé.', 'yesmorebet' ); ?></p>
            <?php
        endif;
        ?>
    </div>
</div>

<?php
get_footer();
