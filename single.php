<?php
/**
 * The template for displaying single posts
 *
 * @package Worzen
 * @since 1.0.0
 */

get_header();
?>

<article class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <?php
        while (have_posts()) :
            the_post();
        ?>

            <!-- Post Header -->
            <header class="mb-8">
                
                <!-- Categories -->
                <?php if (has_category()) : ?>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <?php
                        $categories = get_the_category();
                        foreach ($categories as $category) :
                        ?>
                            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="text-sm bg-primary/10 text-primary px-3 py-1 rounded-full hover:bg-primary hover:text-white transition duration-300">
                                <?php echo esc_html($category->name); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <!-- Post Title -->
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    <?php the_title(); ?>
                </h1>

                <!-- Post Meta -->
                <div class="flex flex-wrap items-center text-gray-600 gap-4 mb-6">
                    <div class="flex items-center">
                        <?php echo get_avatar(get_the_author_meta('ID'), 40, '', '', array('class' => 'rounded-full mr-2')); ?>
                        <span class="font-semibold"><?php echo esc_html(get_the_author()); ?></span>
                    </div>
                    <span>•</span>
                    <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                        <?php echo esc_html(get_the_date()); ?>
                    </time>
                    <span>•</span>
                    <span><?php echo esc_html(get_the_time()); ?></span>
                    <?php if (function_exists('the_views')) : ?>
                        <span>•</span>
                        <span><?php the_views(); ?></span>
                    <?php endif; ?>
                </div>

                <!-- Featured Image -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="rounded-2xl overflow-hidden mb-8">
                        <?php the_post_thumbnail('large', array('class' => 'w-full h-auto')); ?>
                    </div>
                <?php endif; ?>

            </header>

            <!-- Post Content -->
            <div class="entry-content prose prose-lg max-w-none mb-12">
                <?php
                the_content();

                wp_link_pages(array(
                    'before' => '<div class="page-links mt-8 flex gap-2">' . esc_html__('Pages:', 'worzen'),
                    'after'  => '</div>',
                    'link_before' => '<span class="px-4 py-2 bg-primary text-white rounded-lg">',
                    'link_after'  => '</span>',
                ));
                ?>
            </div>

            <!-- Post Footer -->
            <footer class="border-t border-gray-200 pt-8 mb-12">
                
                <!-- Tags -->
                <?php if (has_tag()) : ?>
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3"><?php esc_html_e('Tags:', 'worzen'); ?></h3>
                        <div class="flex flex-wrap gap-2">
                            <?php
                            $tags = get_the_tags();
                            foreach ($tags as $tag) :
                            ?>
                                <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="text-sm bg-gray-100 text-gray-700 px-3 py-1 rounded-full hover:bg-primary hover:text-white transition duration-300">
                                    #<?php echo esc_html($tag->name); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Author Bio -->
                <div class="bg-gradient-to-br from-gray-50 to-indigo-50 rounded-2xl p-6">
                    <div class="flex items-start gap-4">
                        <?php echo get_avatar(get_the_author_meta('ID'), 80, '', '', array('class' => 'rounded-full')); ?>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">
                                <?php echo esc_html(get_the_author()); ?>
                            </h3>
                            <p class="text-gray-600 mb-3">
                                <?php echo esc_html(get_the_author_meta('description')); ?>
                            </p>
                            <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="text-primary font-semibold hover:text-secondary transition duration-300">
                                <?php esc_html_e('View all posts by', 'worzen'); ?> <?php echo esc_html(get_the_author()); ?> →
                            </a>
                        </div>
                    </div>
                </div>

            </footer>

            <!-- Post Navigation -->
            <nav class="flex justify-between items-center mb-12">
                <div class="flex-1">
                    <?php
                    $prev_post = get_previous_post();
                    if ($prev_post) :
                    ?>
                        <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" class="inline-flex items-center text-primary hover:text-secondary transition duration-300">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                            <div>
                                <div class="text-sm text-gray-500"><?php esc_html_e('Previous', 'worzen'); ?></div>
                                <div class="font-semibold"><?php echo esc_html(get_the_title($prev_post->ID)); ?></div>
                            </div>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="flex-1 text-right">
                    <?php
                    $next_post = get_next_post();
                    if ($next_post) :
                    ?>
                        <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" class="inline-flex items-center text-primary hover:text-secondary transition duration-300">
                            <div>
                                <div class="text-sm text-gray-500"><?php esc_html_e('Next', 'worzen'); ?></div>
                                <div class="font-semibold"><?php echo esc_html(get_the_title($next_post->ID)); ?></div>
                            </div>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>
            </nav>

            <!-- Comments -->
            <?php
            if (comments_open() || get_comments_number()) :
            ?>
                <div class="bg-gray-50 rounded-2xl p-8">
                    <?php
                    comments_template();
                    ?>
                </div>
            <?php endif; ?>

        <?php
        endwhile;
        ?>

    </div>
</article>

<?php
get_footer();

