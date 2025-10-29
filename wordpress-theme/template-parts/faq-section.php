<?php
/**
 * Template part for displaying the FAQ section
 *
 * @package YesMoreBet
 */

$faqs = array(
    array(
        'question' => __( 'Pouvons-nous personnaliser les jetons et la décoration ?', 'yesmorebet' ),
        'answer'   => __( 'Absolument ! Nous pouvons personnaliser les jetons avec votre logo, vos initiales ou un design spécifique lié à votre événement (mariage, entreprise, anniversaire). La décoration autour de la table peut également s\'adapter au thème de votre soirée pour créer une ambiance unique et mémorable.', 'yesmorebet' ),
    ),
    array(
        'question' => __( 'Le croupier peut-il s\'adapter au niveau des joueurs ?', 'yesmorebet' ),
        'answer'   => __( 'Bien sûr ! Notre croupier professionnel s\'adapte à tous les niveaux. Il explique les règles du blackjack de manière simple et ludique pour les débutants, tout en maintenant un rythme dynamique pour les joueurs expérimentés. L\'objectif est que tout le monde s\'amuse, quel que soit son niveau.', 'yesmorebet' ),
    ),
    array(
        'question' => __( 'Quelle tenue vestimentaire porte le croupier ?', 'yesmorebet' ),
        'answer'   => __( 'Notre croupier arbore une tenue élégante et professionnelle : chemise noire, pantalon noir et nœud papillon doré, dans l\'esprit des croupiers de casino. Cette tenue renforce l\'authenticité de l\'expérience et s\'adapte parfaitement à tout type d\'événement chic ou décontracté.', 'yesmorebet' ),
    ),
    array(
        'question' => __( 'Peut-on combiner votre animation avec d\'autres prestations ?', 'yesmorebet' ),
        'answer'   => __( 'Oui, tout à fait ! Notre animation casino se marie parfaitement avec d\'autres prestations : DJ, photobooth, traiteur, bar à cocktails, magicien, etc. Nous pouvons coordonner nos horaires pour que l\'animation s\'intègre harmonieusement dans le déroulé de votre soirée.', 'yesmorebet' ),
    ),
    array(
        'question' => __( 'Y a-t-il une limite d\'âge pour participer ?', 'yesmorebet' ),
        'answer'   => __( 'L\'animation YesMoreBet est accessible dès 16 ans, bien qu\'il s\'agisse d\'un jeu fictif sans argent réel. Pour les événements familiaux avec des enfants plus jeunes, nous pouvons adapter l\'animation pour la rendre accessible et ludique pour tous.', 'yesmorebet' ),
    ),
    array(
        'question' => __( 'Comment fonctionne exactement la tombola finale ?', 'yesmorebet' ),
        'answer'   => __( 'Tout au long de la soirée, les participants accumulent des jetons en jouant au blackjack. À la fin de l\'animation, ces jetons sont convertis en tickets de tombola : plus vous avez de jetons, plus vous avez de chances de gagner ! Le tirage au sort final permet de remporter les lots que vous avez choisis.', 'yesmorebet' ),
    ),
    array(
        'question' => __( 'Proposez-vous des animations en extérieur ?', 'yesmorebet' ),
        'answer'   => __( 'Oui, nous pouvons intervenir en extérieur à condition de disposer d\'un espace couvert et protégé (tonnelle, tente, patio). Le matériel de jeu (cartes, jetons) doit être à l\'abri du vent et des intempéries. Pour les jardins, terrasses ou poolhouse, c\'est parfaitement adapté !', 'yesmorebet' ),
    ),
    array(
        'question' => __( 'Faut-il prévoir une connexion électrique ou un accès Wi-Fi ?', 'yesmorebet' ),
        'answer'   => __( 'Aucune connexion électrique ou Wi-Fi n\'est nécessaire pour l\'animation casino. Les lunettes connectées fonctionnent en autonomie totale. Vous n\'avez qu\'à prévoir l\'espace, l\'éclairage ambiant et les chaises — nous gérons tout le reste en toute autonomie.', 'yesmorebet' ),
    ),
);
?>

<section id="faq" class="faq-section">
    <div class="container">
        <div class="faq-wrapper">
            <div class="faq-header">
                <div class="faq-header-decoration">
                    <div class="faq-line faq-line-left"></div>
                    <h2 class="faq-title">
                        <?php esc_html_e( 'Questions fréquentes', 'yesmorebet' ); ?>
                    </h2>
                    <div class="faq-line faq-line-right"></div>
                </div>
                <p class="faq-subtitle">
                    <?php esc_html_e( 'Tout ce que vous devez savoir sur nos animations casino', 'yesmorebet' ); ?>
                </p>
            </div>

            <div class="faq-container">
                <?php foreach ( $faqs as $index => $faq ) : ?>
                    <details class="faq-item">
                        <summary class="faq-question">
                            <?php echo esc_html( $faq['question'] ); ?>
                            <svg class="faq-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        <div class="faq-answer">
                            <?php echo esc_html( $faq['answer'] ); ?>
                        </div>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<style>
.faq-section {
    padding: 5rem 0;
    background-color: var(--color-black);
}

.faq-wrapper {
    max-width: 56rem;
    margin: 0 auto;
}

.faq-header {
    text-align: center;
    margin-bottom: 3rem;
}

.faq-header-decoration {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    margin-bottom: 0.75rem;
}

.faq-line {
    height: 1px;
    width: 3rem;
    background: linear-gradient(to right, transparent, #FACC15);
}

.faq-line-left {
    background: linear-gradient(to right, transparent, #FACC15);
}

.faq-line-right {
    background: linear-gradient(to left, transparent, #FACC15);
}

.faq-title {
    font-size: 2rem;
    color: white;
    font-weight: 700;
    margin: 0;
}

.faq-subtitle {
    color: #9ca3af;
    font-size: 1.125rem;
}

.faq-container {
    background: linear-gradient(135deg, rgba(24, 24, 27, 0.5), rgba(0, 0, 0, 0.5));
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    overflow: hidden;
}

.faq-item {
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
}

.faq-item:last-child {
    border-bottom: none;
}

.faq-question {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.5rem 2rem;
    color: white;
    cursor: pointer;
    transition: color 0.3s ease;
    list-style: none;
    user-select: none;
}

.faq-question:hover {
    color: #FACC15;
}

.faq-question::-webkit-details-marker {
    display: none;
}

.faq-icon {
    flex-shrink: 0;
    transition: transform 0.3s ease;
}

.faq-item[open] .faq-icon {
    transform: rotate(180deg);
}

.faq-answer {
    padding: 0 2rem 1.5rem;
    color: #9ca3af;
    line-height: 1.8;
    animation: fadeIn 0.3s ease;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (min-width: 768px) {
    .faq-title {
        font-size: 3rem;
    }
}
</style>
