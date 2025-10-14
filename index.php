<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @package Worzen
 * @since 1.0.0
 */

get_header();
?>

<!-- Blog / Archive Section -->
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Page Header -->
        <div class="mb-12">
            <?php if (is_home() && !is_front_page()) : ?>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    <?php single_post_title(); ?>
                </h1>
            <?php elseif (is_archive()) : ?>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    <?php the_archive_title(); ?>
                </h1>
                <?php if (get_the_archive_description()) : ?>
                    <div class="text-lg text-gray-600">
                        <?php the_archive_description(); ?>
                    </div>
                <?php endif; ?>
            <?php elseif (is_search()) : ?>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    <?php
                    /* translators: %s: search query */
                    printf(esc_html__('Search Results for: %s', 'worzen'), '<span class="text-primary">' . get_search_query() . '</span>');
                    ?>
                </h1>
            <?php else : ?>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    <?php esc_html_e('Blog', 'worzen'); ?>
                </h1>
            <?php endif; ?>
        </div>

        <!-- Posts Grid -->
        <?php if (have_posts()) : ?>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <?php
                // Start the WordPress Loop
                while (have_posts()) :
                    the_post();
                ?>
                
                    <!-- Post Card -->
                    <article id="post-<?php the_ID(); ?>" <?php post_class('bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden group'); ?>>
                        
                        <!-- Featured Image -->
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="h-48 overflow-hidden">
                                <a href="<?php the_permalink(); ?>" class="block">
                                    <?php the_post_thumbnail('worzen-featured', array('class' => 'w-full h-full object-cover group-hover:scale-110 transition duration-300')); ?>
                                </a>
                            </div>
                        <?php else : ?>
                            <div class="h-48 bg-gradient-to-br from-primary to-secondary flex items-center justify-center">
                                <svg class="w-16 h-16 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        <?php endif; ?>

                        <!-- Post Content -->
                        <div class="p-6">
                            
                            <!-- Post Meta -->
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                    <?php echo esc_html(get_the_date()); ?>
                                </time>
                                <span class="mx-2">•</span>
                                <span><?php echo esc_html(get_the_author()); ?></span>
                            </div>

                            <!-- Post Title -->
                            <h2 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition duration-300">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <!-- Post Excerpt -->
                            <div class="text-gray-600 mb-4">
                                <?php the_excerpt(); ?>
                            </div>

                            <!-- Read More Link -->
                            <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-primary font-semibold hover:text-secondary transition duration-300">
                                <?php esc_html_e('Read More', 'worzen'); ?>
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>

                            <!-- Categories -->
                            <?php if (has_category()) : ?>
                                <div class="mt-4 pt-4 border-t border-gray-200">
                                    <div class="flex flex-wrap gap-2">
                                        <?php
                                        $categories = get_the_category();
                                        foreach ($categories as $category) :
                                        ?>
                                            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="text-xs bg-primary/10 text-primary px-3 py-1 rounded-full hover:bg-primary hover:text-white transition duration-300">
                                                <?php echo esc_html($category->name); ?>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                        </div>

                    </article><!-- #post-<?php the_ID(); ?> -->

                <?php
                endwhile;
                ?>

            </div><!-- .grid -->

            <!-- Pagination -->
            <div class="mt-12">
                <?php worzen_pagination(); ?>
            </div>

        <?php else : ?>

            <!-- No Posts Found -->
            <div class="text-center py-12">
                <div class="max-w-md mx-auto">
                    <svg class="w-24 h-24 mx-auto text-gray-300 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">
                        <?php esc_html_e('Nothing Found', 'worzen'); ?>
                    </h2>
                    <p class="text-gray-600 mb-6">
                        <?php
                        if (is_search()) {
                            esc_html_e('Sorry, but nothing matched your search terms. Please try again with different keywords.', 'worzen');
                        } else {
                            esc_html_e('It seems we can\'t find what you\'re looking for. Perhaps searching can help.', 'worzen');
                        }
                        ?>
                    </p>
                    
                    <!-- Search Form -->
                    <div class="max-w-md mx-auto">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>

        <?php endif; ?>

    </div>
</section>

<?php
get_footer();

