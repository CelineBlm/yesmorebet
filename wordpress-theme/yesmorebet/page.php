<?php
/**
 * The template for displaying all pages
 *
 * @package YesMoreBet
 */

get_header();
?>

<main id="primary" class="site-main min-h-screen bg-black">
    <?php
    while (have_posts()) :
        the_post();
        ?>

        <!-- Hero Section -->
        <section class="relative bg-gradient-to-b from-[rgba(115,62,10,0.1)] to-[rgba(0,0,0,0)] pt-32 pb-16 px-4">
            <div class="container mx-auto max-w-[896px] text-center">
                <h1 class="text-4xl md:text-5xl text-white leading-tight mb-6">
                    <?php the_title(); ?>
                </h1>
                <?php if (get_the_excerpt()) : ?>
                    <p class="text-white text-[16px] leading-[24px]">
                        <?php echo get_the_excerpt(); ?>
                    </p>
                <?php endif; ?>
            </div>
        </section>

        <!-- Main Content -->
        <section class="py-16 px-4 lg:px-12">
            <div class="container mx-auto max-w-[1199px]">
                <div class="entry-content text-white prose prose-invert max-w-none">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>

        <?php
    endwhile;
    ?>
</main>

<?php
get_footer();
