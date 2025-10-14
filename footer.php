<?php
/**
 * The footer for the Worzen theme
 *
 * This template displays the site footer with widgets,
 * company info, and copyright information.
 *
 * @package Worzen
 * @since 1.0.0
 */
?>

    </main><!-- #primary -->

    <!-- Footer -->
    <footer id="colophon" class="site-footer bg-gray-900 text-gray-300 py-12 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Footer Widgets / Content -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                
                <!-- Company Info Column -->
                <div class="md:col-span-2">
                    <?php if (has_custom_logo()) : ?>
                        <div class="custom-logo-wrapper mb-4">
                            <?php the_custom_logo(); ?>
                        </div>
                    <?php else : ?>
                        <h3 class="text-2xl font-bold bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent mb-4">
                            <?php bloginfo('name'); ?>
                        </h3>
                    <?php endif; ?>
                    
                    <p class="text-gray-400 mb-4">
                        <?php 
                        $description = get_bloginfo('description', 'display');
                        if ($description || is_customize_preview()) {
                            echo esc_html($description);
                        } else {
                            esc_html_e('Building premium WordPress plugins and SaaS tools that empower businesses to create exceptional web experiences.', 'worzen');
                        }
                        ?>
                    </p>
                    
                    <!-- Social Media Links -->
                    <div class="flex space-x-4">
                        <?php
                        // You can make these dynamic with theme customizer options
                        $social_links = array(
                            'wordpress' => 'https://profiles.wordpress.org/al-imran-akash/',
                            'twitter'   => '#',
                            'facebook'  => '#',
                            'github'    => '#',
                        );
                        
                        foreach ($social_links as $platform => $url) :
                            if ($url !== '#') :
                        ?>
                            <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition duration-300" aria-label="<?php echo esc_attr(ucfirst($platform)); ?>">
                                <?php if ($platform === 'wordpress') : ?>
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12.158 12.786L9.46 20.625c.806.237 1.657.366 2.54.366 1.047 0 2.051-.18 2.986-.51-.024-.037-.046-.078-.065-.123l-2.762-7.572zm-5.97-3.39c0 1.197.228 2.33.642 3.375l3.522 9.635C5.89 21.03 2.89 17.705 2.89 13.66c0-2.495.868-4.79 2.298-6.264zm11.522 1.464c0-.86-.31-1.456-.574-1.918-.353-.574-.684-1.06-.684-1.634 0-.64.486-1.235 1.17-1.235.03 0 .06.003.09.008-1.24-1.137-2.89-1.833-4.712-1.833-2.44 0-4.588 1.25-5.84 3.146.164.005.318.008.45.008.73 0 1.86-.088 1.86-.088.376-.022.42.53.044.574 0 0-.378.044-.798.065l2.536 7.544 1.524-4.57-1.084-2.975c-.376-.02-.733-.064-.733-.064-.376-.022-.332-.596.043-.575 0 0 1.152.09 1.837.09.73 0 1.86-.09 1.86-.09.376-.02.42.53.043.574 0 0-.377.043-.798.065l2.518 7.49.695-2.32c.3-.96.5-1.65.5-2.244zm1.065-1.98c.03.22.047.457.047.71 0 .7-.13 1.49-.522 2.476l-2.096 6.06c2.04-1.19 3.416-3.4 3.416-5.93 0-1.19-.305-2.31-.845-3.29zM12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/>
                                    </svg>
                                <?php elseif ($platform === 'twitter') : ?>
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                    </svg>
                                <?php elseif ($platform === 'facebook') : ?>
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                    </svg>
                                <?php elseif ($platform === 'github') : ?>
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.17 6.839 9.49.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.463-1.11-1.463-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.831.092-.646.35-1.086.636-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.578 9.578 0 0112 6.836c.85.004 1.705.114 2.504.336 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.138 20.167 22 16.418 22 12c0-5.523-4.477-10-10-10z"></path>
                                    </svg>
                                <?php endif; ?>
                            </a>
                        <?php 
                            endif;
                        endforeach; 
                        ?>
                    </div>
                </div>

                <!-- Footer Widget Area 1 - Quick Links -->
                <div>
                    <?php if (is_active_sidebar('footer-1')) : ?>
                        <?php dynamic_sidebar('footer-1'); ?>
                    <?php else : ?>
                        <h4 class="text-lg font-semibold text-white mb-4"><?php esc_html_e('Quick Links', 'worzen'); ?></h4>
                        <?php
                        if (has_nav_menu('footer')) {
                            wp_nav_menu(array(
                                'theme_location' => 'footer',
                                'menu_class'     => 'space-y-2',
                                'container'      => false,
                                'fallback_cb'    => false,
                            ));
                        } else {
                            ?>
                            <ul class="space-y-2">
                                <li><a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-white transition duration-300"><?php esc_html_e('Home', 'worzen'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url('/about')); ?>" class="hover:text-white transition duration-300"><?php esc_html_e('About', 'worzen'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url('/blog')); ?>" class="hover:text-white transition duration-300"><?php esc_html_e('Blog', 'worzen'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url('/contact')); ?>" class="hover:text-white transition duration-300"><?php esc_html_e('Contact', 'worzen'); ?></a></li>
                            </ul>
                            <?php
                        }
                        ?>
                    <?php endif; ?>
                </div>

                <!-- Footer Widget Area 2 - Support -->
                <div>
                    <?php if (is_active_sidebar('footer-2')) : ?>
                        <?php dynamic_sidebar('footer-2'); ?>
                    <?php else : ?>
                        <h4 class="text-lg font-semibold text-white mb-4"><?php esc_html_e('Support', 'worzen'); ?></h4>
                        <ul class="space-y-2">
                            <li><a href="https://wordpress.org/support/" target="_blank" class="hover:text-white transition duration-300"><?php esc_html_e('Documentation', 'worzen'); ?></a></li>
                            <li><a href="https://wordpress.org/support/" target="_blank" class="hover:text-white transition duration-300"><?php esc_html_e('Support Forum', 'worzen'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/contact')); ?>" class="hover:text-white transition duration-300"><?php esc_html_e('Contact Support', 'worzen'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" class="hover:text-white transition duration-300"><?php esc_html_e('Privacy Policy', 'worzen'); ?></a></li>
                        </ul>
                    <?php endif; ?>
                </div>

            </div>

            <!-- Copyright Bar -->
            <div class="border-t border-gray-800 pt-8 text-center">
                <p class="text-gray-400">
                    <?php
                    printf(
                        /* translators: 1: Copyright symbol and year, 2: Site name */
                        esc_html__('%1$s %2$s. All rights reserved. Built with passion for the WordPress community.', 'worzen'),
                        '&copy; ' . date('Y'),
                        '<strong>' . get_bloginfo('name') . '</strong>'
                    );
                    ?>
                </p>
                <p class="text-gray-500 text-sm mt-2">
                    <?php
                    printf(
                        /* translators: 1: Theme name, 2: Theme author */
                        esc_html__('Theme: %1$s by %2$s', 'worzen'),
                        'Worzen',
                        '<a href="https://profiles.wordpress.org/al-imran-akash/" target="_blank" class="hover:text-white transition duration-300">Al Imran Akash</a>'
                    );
                    ?>
                </p>
            </div>

        </div>
    </footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

