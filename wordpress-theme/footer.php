<?php
/**
 * The footer for YesMoreBet theme
 *
 * @package YesMoreBet
 */
?>

    </main><!-- #primary -->

    <footer class="site-footer">
        <!-- Main Footer Content -->
        <div class="footer-main">
            <div class="container">
                <div class="footer-columns">
                    <!-- Brand + Social -->
                    <div class="footer-brand">
                        <div class="footer-logo">
                            <?php yesmorebet_logo_text_svg(); ?>
                        </div>

                        <!-- Social Links -->
                        <div class="footer-social">
                            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Instagram">
                                <?php yesmorebet_instagram_icon(); ?>
                            </a>
                            <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Facebook">
                                <?php yesmorebet_facebook_icon(); ?>
                            </a>
                        </div>
                    </div>

                    <!-- Informations légales -->
                    <div class="footer-column">
                        <h3 class="footer-title"><?php esc_html_e( 'Informations légales', 'yesmorebet' ); ?></h3>
                        <ul class="footer-links">
                            <li>
                                <a href="<?php echo esc_url( home_url( '/mentions-legales' ) ); ?>">
                                    <?php esc_html_e( 'Mentions légales', 'yesmorebet' ); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url( home_url( '/politique-confidentialite' ) ); ?>">
                                    <?php esc_html_e( 'Politique de confidentialité', 'yesmorebet' ); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url( home_url( '/cgv' ) ); ?>">
                                    <?php esc_html_e( 'CGV', 'yesmorebet' ); ?>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div class="footer-column">
                        <h3 class="footer-title"><?php esc_html_e( 'Contact', 'yesmorebet' ); ?></h3>
                        <ul class="footer-contact">
                            <li class="contact-item">
                                <?php yesmorebet_email_icon(); ?>
                                <a href="mailto:contact@yesmorebet.fr">contact@yesmorebet.fr</a>
                            </li>
                            <li class="contact-item">
                                <?php yesmorebet_phone_icon(); ?>
                                <a href="tel:+33626512217">+33 6 26 51 22 17</a>
                            </li>
                            <li class="contact-item">
                                <?php yesmorebet_location_icon(); ?>
                                <span><?php esc_html_e( 'Grasse, Cannes, Antibes, Nice et région Sud', 'yesmorebet' ); ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <p class="footer-copyright">
                        <?php
                        printf(
                            esc_html__( '© %s YesMoreBet. Tous droits réservés. • Fait avec ❤️ sur la Côte d\'Azur', 'yesmorebet' ),
                            date( 'Y' )
                        );
                        ?>
                    </p>
                    <p class="footer-disclaimer">
                        <?php esc_html_e( 'Animation de casino fictif 100% légale et sans argent réel', 'yesmorebet' ); ?>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
