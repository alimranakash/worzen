<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Worzen
 * @since 1.0.0
 */

get_header();
?>

<section class="py-20 bg-gradient-to-br from-indigo-50 to-purple-50 min-h-screen flex items-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        
        <!-- 404 Illustration -->
        <div class="mb-8">
            <svg class="w-64 h-64 mx-auto text-primary opacity-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>

        <!-- Error Code -->
        <h1 class="text-9xl font-extrabold bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent mb-4">
            404
        </h1>

        <!-- Error Message -->
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
            <?php esc_html_e('Oops! Page Not Found', 'worzen'); ?>
        </h2>

        <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
            <?php esc_html_e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'worzen'); ?>
        </p>

        <!-- Search Form -->
        <div class="max-w-md mx-auto mb-8">
            <?php get_search_form(); ?>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="bg-gradient-to-r from-primary to-secondary text-white px-8 py-4 rounded-full text-lg font-semibold hover:shadow-2xl transform hover:-translate-y-1 transition duration-300">
                <?php esc_html_e('Go to Homepage', 'worzen'); ?>
            </a>
            <a href="javascript:history.back()" class="bg-white text-primary px-8 py-4 rounded-full text-lg font-semibold border-2 border-primary hover:bg-primary hover:text-white transition duration-300">
                <?php esc_html_e('Go Back', 'worzen'); ?>
            </a>
        </div>

        <!-- Popular Pages / Recent Posts -->
        <div class="mt-16">
            <h3 class="text-2xl font-bold text-gray-900 mb-6">
                <?php esc_html_e('You might be interested in:', 'worzen'); ?>
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php
                $recent_posts = wp_get_recent_posts(array(
                    'numberposts' => 3,
                    'post_status' => 'publish',
                ));

                foreach ($recent_posts as $post) :
                    setup_postdata($post);
                ?>
                    <a href="<?php echo esc_url(get_permalink($post['ID'])); ?>" class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden group">
                        <?php if (has_post_thumbnail($post['ID'])) : ?>
                            <div class="h-40 overflow-hidden">
                                <?php echo get_the_post_thumbnail($post['ID'], 'medium', array('class' => 'w-full h-full object-cover group-hover:scale-110 transition duration-300')); ?>
                            </div>
                        <?php else : ?>
                            <div class="h-40 bg-gradient-to-br from-primary to-secondary flex items-center justify-center">
                                <svg class="w-12 h-12 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        <?php endif; ?>
                        <div class="p-4">
                            <h4 class="text-lg font-bold text-gray-900 group-hover:text-primary transition duration-300">
                                <?php echo esc_html($post['post_title']); ?>
                            </h4>
                            <p class="text-sm text-gray-500 mt-2">
                                <?php echo esc_html(get_the_date('', $post['ID'])); ?>
                            </p>
                        </div>
                    </a>
                <?php
                endforeach;
                wp_reset_postdata();
                ?>
            </div>
        </div>

    </div>
</section>

<?php
get_footer();

