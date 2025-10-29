<?php
/**
 * The header for YesMoreBet theme
 *
 * @package YesMoreBet
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Aller au contenu principal', 'yesmorebet' ); ?></a>

    <header class="site-header">
        <nav class="container">
            <!-- Desktop Layout -->
            <div class="header-desktop">
                <!-- Left - Navigation Links -->
                <div class="header-nav-left">
                    <a href="<?php echo esc_url( home_url( '/#concept' ) ); ?>" class="nav-link">
                        <?php esc_html_e( 'Le concept', 'yesmorebet' ); ?>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/faq' ) ); ?>" class="nav-link">
                        <?php esc_html_e( 'FAQ', 'yesmorebet' ); ?>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/galerie' ) ); ?>" class="nav-link">
                        <?php esc_html_e( 'Galerie', 'yesmorebet' ); ?>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="nav-link">
                        <?php esc_html_e( 'Contact', 'yesmorebet' ); ?>
                    </a>
                </div>

                <!-- Center - Logo -->
                <div class="header-logo">
                    <?php if ( has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link">
                            <?php yesmorebet_logo_svg(); ?>
                        </a>
                    <?php endif; ?>
                </div>

                <!-- Right - Phone & CTA -->
                <div class="header-nav-right">
                    <a href="tel:+33626512217" class="header-phone">
                        <?php yesmorebet_phone_icon(); ?>
                        <span>+33 6 26 51 22 17</span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/prestations' ) ); ?>" class="btn-primary">
                        <?php esc_html_e( 'Voir les formules', 'yesmorebet' ); ?>
                    </a>
                </div>
            </div>

            <!-- Mobile/Tablet Layout -->
            <div class="header-mobile">
                <!-- Logo Mobile -->
                <div class="header-logo-mobile">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php yesmorebet_logo_svg(); ?>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="mobile-menu-toggle" aria-label="Toggle menu" aria-expanded="false">
                    <span class="menu-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <div class="mobile-nav-menu" style="display: none;">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mobile-nav-link">
                    <?php esc_html_e( 'Accueil', 'yesmorebet' ); ?>
                </a>
                <a href="<?php echo esc_url( home_url( '/#concept' ) ); ?>" class="mobile-nav-link">
                    <?php esc_html_e( 'Le Concept', 'yesmorebet' ); ?>
                </a>
                <a href="<?php echo esc_url( home_url( '/faq' ) ); ?>" class="mobile-nav-link">
                    <?php esc_html_e( 'FAQ', 'yesmorebet' ); ?>
                </a>
                <a href="<?php echo esc_url( home_url( '/galerie' ) ); ?>" class="mobile-nav-link">
                    <?php esc_html_e( 'Galerie', 'yesmorebet' ); ?>
                </a>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="mobile-nav-link">
                    <?php esc_html_e( 'Contact', 'yesmorebet' ); ?>
                </a>
                <a href="tel:+33626512217" class="mobile-nav-link">
                    <?php yesmorebet_phone_icon(); ?>
                    <span>+33 6 26 51 22 17</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/prestations' ) ); ?>" class="btn-primary">
                    <?php esc_html_e( 'Voir les formules', 'yesmorebet' ); ?>
                </a>
            </div>
        </nav>
    </header>

    <main id="primary" class="site-main">
