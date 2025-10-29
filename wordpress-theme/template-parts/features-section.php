<?php
/**
 * Template part for displaying the features section
 *
 * @package YesMoreBet
 */

$features = array(
    array(
        'title'       => __( 'Table de Blackjack professionnelle', 'yesmorebet' ),
        'description' => __( 'Une vraie table de casino animée par un croupier professionnel pour une expérience authentique.', 'yesmorebet' ),
        'image'       => get_template_directory_uri() . '/assets/images/blackjack.jpg',
    ),
    array(
        'title'       => __( 'Roue de la Chance et tombola à lots', 'yesmorebet' ),
        'description' => __( 'Gagnez des tickets de tombola à la Roue de la Chance et remportez des lots en fin de soirée.', 'yesmorebet' ),
        'image'       => get_template_directory_uri() . '/assets/images/roue-de-la-chance.jpg',
    ),
    array(
        'title'       => __( 'Lunettes connectées', 'yesmorebet' ),
        'description' => __( 'Immortalisez les meilleurs moments avec des lunettes connectées pour des souvenirs uniques à partager.', 'yesmorebet' ),
        'image'       => get_template_directory_uri() . '/assets/images/lunettes.jpg',
    ),
);
?>

<section class="features-section">
    <div class="features-decorative features-decorative-top"></div>
    <div class="features-decorative features-decorative-bottom"></div>

    <div class="container">
        <div class="features-header">
            <span class="features-badge">
                <?php esc_html_e( 'Nos Services', 'yesmorebet' ); ?>
            </span>
            <h2 class="features-title">
                <?php esc_html_e( 'Une animation', 'yesmorebet' ); ?>
                <span class="text-gradient"> <?php esc_html_e( 'complète', 'yesmorebet' ); ?></span>
            </h2>
            <p class="features-description">
                <?php esc_html_e( 'Tout ce dont vous avez besoin pour créer une soirée casino inoubliable', 'yesmorebet' ); ?>
            </p>
        </div>

        <div class="features-grid">
            <?php foreach ( $features as $feature ) : ?>
                <div class="feature-card">
                    <div class="feature-image-container">
                        <div class="feature-image" style="background-image: url('<?php echo esc_url( $feature['image'] ); ?>')"></div>
                        <div class="feature-image-overlay"></div>
                    </div>

                    <div class="feature-content">
                        <h3 class="feature-title"><?php echo esc_html( $feature['title'] ); ?></h3>
                        <p class="feature-description"><?php echo esc_html( $feature['description'] ); ?></p>
                        <a href="<?php echo esc_url( home_url( '/prestations' ) ); ?>" class="feature-link">
                            <?php esc_html_e( 'En savoir plus', 'yesmorebet' ); ?>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
.features-section {
    position: relative;
    padding: 5rem 0;
    background-color: var(--color-black);
    overflow: hidden;
}

.features-decorative {
    position: absolute;
    width: 24rem;
    height: 24rem;
    border-radius: 50%;
    filter: blur(80px);
    opacity: 0.05;
}

.features-decorative-top {
    top: 0;
    left: 25%;
    background-color: #FACC15;
}

.features-decorative-bottom {
    bottom: 0;
    right: 25%;
    background-color: #FACC15;
}

.container {
    position: relative;
    z-index: 10;
}

.features-header {
    text-align: center;
    margin-bottom: 4rem;
}

.features-badge {
    display: inline-block;
    padding: 0.5rem 1rem;
    background-color: rgba(250, 204, 21, 0.1);
    border: 1px solid rgba(202, 138, 4, 0.3);
    border-radius: 8px;
    color: #FACC15;
    font-size: 0.875rem;
    margin-bottom: 1rem;
}

.features-title {
    font-size: 2rem;
    color: white;
    margin: 1rem 0;
    font-weight: 700;
}

.features-description {
    color: #9ca3af;
    max-width: 42rem;
    margin: 0 auto;
    font-size: 1.125rem;
}

.features-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 2rem;
    max-width: 72rem;
    margin: 0 auto;
}

.feature-card {
    position: relative;
    background: linear-gradient(135deg, rgba(24, 24, 27, 0.8), rgba(0, 0, 0, 0.9));
    border: 1px solid rgba(202, 138, 4, 0.2);
    border-radius: 8px;
    overflow: hidden;
    transition: all 0.3s ease;
}

.feature-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(250, 204, 21, 0.1);
    border-color: rgba(202, 138, 4, 0.4);
}

.feature-image-container {
    position: relative;
    height: 15rem;
    overflow: hidden;
}

.feature-image {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    transition: transform 0.5s ease;
}

.feature-card:hover .feature-image {
    transform: scale(1.1);
}

.feature-image-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,1), rgba(0,0,0,0.5), transparent);
}

.feature-content {
    padding: 1.5rem;
}

.feature-title {
    color: white;
    font-size: 1.125rem;
    margin-bottom: 0.75rem;
    font-weight: 600;
}

.feature-description {
    color: #d1d5db;
    line-height: 1.8;
    margin-bottom: 1rem;
}

.feature-link {
    color: #FACC15;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    transition: color 0.3s ease;
}

.feature-link:hover {
    color: #FDC700;
}

.feature-link svg {
    transition: transform 0.3s ease;
}

.feature-link:hover svg {
    transform: translateX(4px);
}

@media (min-width: 768px) {
    .features-grid {
        grid-template-columns: repeat(3, 1fr);
    }

    .features-title {
        font-size: 3rem;
    }
}
</style>
