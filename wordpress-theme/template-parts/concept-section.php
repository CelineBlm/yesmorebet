<?php
/**
 * Template part for displaying the concept section
 *
 * @package YesMoreBet
 */
?>

<section id="concept" class="concept-section">
    <div class="concept-pattern"></div>

    <div class="container">
        <div class="concept-wrapper">
            <div class="concept-grid">
                <div class="concept-text">
                    <span class="concept-badge">
                        <?php esc_html_e( 'Le Concept', 'yesmorebet' ); ?>
                    </span>
                    <h2 class="concept-title">
                        <?php esc_html_e( 'Une expérience', 'yesmorebet' ); ?>
                        <span class="text-gradient"> <?php esc_html_e( 'unique', 'yesmorebet' ); ?></span>,
                        <?php esc_html_e( 'conviviale et 100% divertissante', 'yesmorebet' ); ?>
                    </h2>
                    <p class="concept-description">
                        <?php esc_html_e( 'Une animation clé en main : vos invités reçoivent des jetons fictifs, jouent au Blackjack, gagnent des tickets de tombola grâce à la Roue de la Chance et repartent avec des lots choisis par vos soins.', 'yesmorebet' ); ?>
                    </p>
                    <p class="concept-description">
                        <?php esc_html_e( 'Une expérience unique, conviviale et 100% divertissante.', 'yesmorebet' ); ?>
                    </p>

                    <div class="concept-cta">
                        <a href="<?php echo esc_url( home_url( '/prestations' ) ); ?>" class="btn-primary btn-large">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3l14 9-14 9V3z" />
                            </svg>
                            <?php esc_html_e( 'Découvrir les formules', 'yesmorebet' ); ?>
                        </a>
                    </div>
                </div>

                <div class="concept-image-wrapper">
                    <div class="concept-image">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/concept.jpg' ); ?>"
                             alt="<?php esc_attr_e( 'Événement élégant', 'yesmorebet' ); ?>">
                        <div class="concept-image-overlay"></div>
                    </div>
                    <div class="concept-decoration concept-decoration-1"></div>
                    <div class="concept-decoration concept-decoration-2"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.concept-section {
    position: relative;
    padding: 5rem 0;
    background-color: var(--color-black);
    overflow: hidden;
}

.concept-pattern {
    position: absolute;
    inset: 0;
    opacity: 0.05;
    background-image: radial-gradient(circle at 2px 2px, #FACC15 1px, transparent 0);
    background-size: 40px 40px;
}

.concept-wrapper {
    position: relative;
    z-index: 10;
    max-width: 72rem;
    margin: 0 auto;
}

.concept-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 3rem;
    align-items: center;
    margin-bottom: 5rem;
}

.concept-text {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.concept-badge {
    display: inline-block;
    align-self: flex-start;
    padding: 0.5rem 1rem;
    background-color: rgba(250, 204, 21, 0.1);
    border: 1px solid rgba(202, 138, 4, 0.3);
    border-radius: 8px;
    color: #FACC15;
    font-size: 0.875rem;
}

.concept-title {
    font-size: 2rem;
    color: white;
    line-height: 1.2;
    font-weight: 700;
}

.concept-description {
    color: #d1d5db;
    font-size: 1.125rem;
    line-height: 1.8;
}

.concept-cta {
    padding-top: 1rem;
}

.concept-image-wrapper {
    position: relative;
    height: 100%;
}

.concept-image {
    position: relative;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(250, 204, 21, 0.2);
    height: 100%;
}

.concept-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.concept-image-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);
}

.concept-decoration {
    position: absolute;
    border-radius: 50%;
    filter: blur(40px);
}

.concept-decoration-1 {
    top: -1rem;
    right: -1rem;
    width: 6rem;
    height: 6rem;
    background-color: rgba(250, 204, 21, 0.2);
}

.concept-decoration-2 {
    bottom: -1rem;
    left: -1rem;
    width: 8rem;
    height: 8rem;
    background-color: rgba(250, 204, 21, 0.2);
}

@media (min-width: 1024px) {
    .concept-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .concept-title {
        font-size: 3rem;
    }
}
</style>
