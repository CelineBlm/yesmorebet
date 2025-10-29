<?php
/**
 * The main template file
 *
 * @package YesMoreBet
 */

get_header();
?>

<main id="primary" class="site-main min-h-screen bg-black pt-24">
    <div class="container mx-auto px-4 py-16">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header mb-8">
                        <h1 class="entry-title text-4xl text-white font-bold">
                            <?php the_title(); ?>
                        </h1>
                    </header>

                    <div class="entry-content text-white prose prose-invert max-w-none">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
            endwhile;
        else :
            ?>
            <p class="text-white">Aucun contenu trouvé.</p>
            <?php
        endif;
        ?>
    </div>
</main>

<?php
get_footer();
