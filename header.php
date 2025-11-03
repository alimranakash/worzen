<?php
/**
 * The header for the Worzen theme
 *
 * This template displays the <head> section and opening <body> tag,
 * as well as the site navigation.
 *
 * @package Worzen
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-gray-50 text-gray-800'); ?>>
<?php wp_body_open(); ?>

<!-- Skip to content link for accessibility -->
<a class="skip-link screen-reader-text" href="#primary">
    <?php esc_html_e('Skip to content', 'worzen'); ?>
</a>

<!-- Site Wrapper -->
<div id="page" class="site min-h-screen flex flex-col">

    <!-- Header / Navigation -->
    <header id="masthead" class="site-header bg-white shadow-sm sticky top-0 z-50">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" role="navigation" aria-label="<?php esc_attr_e('Primary Navigation', 'worzen'); ?>">
            <div class="flex justify-between items-center h-16">
                
                <!-- Logo / Site Title -->
                <div class="flex items-center">
                    <?php if (has_custom_logo()) : ?>
                        <div class="custom-logo-wrapper">
                            <?php the_custom_logo(); ?>
                        </div>
                    <?php else : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="text-2xl font-bold bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent" rel="home">
                            <?php bloginfo('name'); ?>
                        </a>
                    <?php endif; ?>
                </div>

                <!-- Desktop Navigation Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <?php
                    if (has_nav_menu('primary')) {
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'menu_class'     => 'flex space-x-8',
                            'container'      => false,
                            'fallback_cb'    => false,
                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'walker'         => new Worzen_Walker_Nav_Menu(),
                        ));
                    } else {
                        // Fallback menu if no menu is set
                        ?>
                        <ul class="flex space-x-8">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>" class="text-gray-700 hover:text-primary transition duration-300"><?php esc_html_e('Home', 'worzen'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/blog')); ?>" class="text-gray-700 hover:text-primary transition duration-300"><?php esc_html_e('Blog', 'worzen'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/about')); ?>" class="text-gray-700 hover:text-primary transition duration-300"><?php esc_html_e('About', 'worzen'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/contact')); ?>" class="text-gray-700 hover:text-primary transition duration-300"><?php esc_html_e('Contact', 'worzen'); ?></a></li>
                        </ul>
                        <?php
                    }
                    ?>
                </div>

                <!-- CTA Button (Desktop) -->
                <div class="hidden md:block">
                    <a href="<?php echo esc_url(home_url('/help')); ?>" class="bg-gradient-to-r from-primary to-secondary text-white px-6 py-2 rounded-full hover:shadow-lg transition duration-300">
                        <?php esc_html_e('Get Started', 'worzen'); ?>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-toggle" type="button" class="text-gray-700 hover:text-primary focus:outline-none focus:text-primary transition duration-300" aria-label="<?php esc_attr_e('Toggle mobile menu', 'worzen'); ?>" aria-expanded="false">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

            </div>

            <!-- Mobile Navigation Menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <?php
                if (has_nav_menu('primary')) {
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'space-y-2',
                        'container'      => false,
                        'fallback_cb'    => false,
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'walker'         => new Worzen_Walker_Nav_Menu(),
                    ));
                } else {
                    // Fallback menu for mobile
                    ?>
                    <ul class="space-y-2">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>" class="block py-2 text-gray-700 hover:text-primary transition duration-300"><?php esc_html_e('Home', 'worzen'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/blog')); ?>" class="block py-2 text-gray-700 hover:text-primary transition duration-300"><?php esc_html_e('Blog', 'worzen'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>" class="block py-2 text-gray-700 hover:text-primary transition duration-300"><?php esc_html_e('About', 'worzen'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>" class="block py-2 text-gray-700 hover:text-primary transition duration-300"><?php esc_html_e('Contact', 'worzen'); ?></a></li>
                    </ul>
                    <?php
                }
                ?>
                <!-- Mobile CTA Button -->
                <div class="mt-4">
                    <a href="<?php echo esc_url(home_url('/help')); ?>" class="block text-center bg-gradient-to-r from-primary to-secondary text-white px-6 py-2 rounded-full hover:shadow-lg transition duration-300">
                        <?php esc_html_e('Get Started', 'worzen'); ?>
                    </a>
                </div>
            </div>

        </nav>
    </header><!-- #masthead -->

    <!-- Main Content Area -->
    <main id="primary" class="site-main flex-grow">

