<?php
/**
 * Template part for displaying the hero section
 *
 * @package YesMoreBet
 */
?>

<section id="accueil" class="hero-section">
    <div class="hero-background">
        <?php
        $hero_image = get_template_directory_uri() . '/assets/images/hero-background.jpg';
        if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'full', array( 'class' => 'hero-bg-image' ) );
        } else {
            echo '<img src="' . esc_url( $hero_image ) . '" alt="' . esc_attr__( 'Casino table ambiance', 'yesmorebet' ) . '" class="hero-bg-image">';
        }
        ?>
        <div class="hero-overlay"></div>
    </div>

    <div class="hero-content">
        <div class="container">
            <div class="hero-inner">
                <h1 class="hero-title">YesMoreBet</h1>

                <h2 class="hero-subtitle">
                    <?php esc_html_e( "L'expérience casino fictif pour vos soirées privées, mariages et événements d'entreprise sur la Côte d'Azur.", 'yesmorebet' ); ?>
                </h2>

                <div class="hero-location">
                    <?php yesmorebet_location_icon(); ?>
                    <span><?php esc_html_e( 'Grasse • Cannes • Antibes • Nice • Région PACA', 'yesmorebet' ); ?></span>
                </div>

                <div class="hero-buttons">
                    <a href="<?php echo esc_url( home_url( '/prestations' ) ); ?>" class="btn-primary btn-large">
                        <?php esc_html_e( 'Découvrir les formules', 'yesmorebet' ); ?>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-secondary btn-large">
                        <?php esc_html_e( 'Me contacter', 'yesmorebet' ); ?>
                    </a>
                </div>
            </div>

            <div class="scroll-indicator">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </div>
        </div>
    </div>
</section>

<style>
.hero-section {
    position: relative;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.hero-background {
    position: absolute;
    inset: 0;
}

.hero-bg-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, rgba(0,0,0,0.7), rgba(0,0,0,0.6), rgba(0,0,0,1));
}

.hero-content {
    position: relative;
    z-index: 10;
    width: 100%;
    padding: 5rem 1rem;
    text-align: center;
}

.hero-inner {
    max-width: 64rem;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 2rem;
}

.hero-title {
    font-size: 2.5rem;
    color: white;
    margin: 4rem 0 0;
    font-weight: 700;
}

.hero-subtitle {
    font-size: 1.25rem;
    color: #d1d5db;
    max-width: 48rem;
    margin: 0 auto;
    line-height: 1.8;
}

.hero-location {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    color: #FACC15;
}

.hero-location span {
    color: #d1d5db;
}

.hero-buttons {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    padding-top: 1rem;
}

.btn-large {
    padding: 1rem 2rem;
}

.btn-secondary {
    background: rgba(255, 255, 255, 0.1);
    color: white;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 8px;
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
    display: inline-block;
    font-family: var(--font-quicksand);
    font-weight: 500;
}

.btn-secondary:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: scale(1.05);
}

.scroll-indicator {
    position: absolute;
    bottom: 2rem;
    left: 50%;
    transform: translateX(-50%);
    color: #FACC15;
    animation: bounce 2s infinite;
}

@keyframes bounce {
    0%, 100% {
        transform: translateX(-50%) translateY(0);
    }
    50% {
        transform: translateX(-50%) translateY(-10px);
    }
}

@media (min-width: 768px) {
    .hero-title {
        font-size: 3.75rem;
    }

    .hero-subtitle {
        font-size: 1.5rem;
    }

    .hero-buttons {
        flex-direction: row;
    }
}

@media (min-width: 1024px) {
    .hero-title {
        font-size: 4.5rem;
        margin-top: 5rem;
    }
}
</style>
