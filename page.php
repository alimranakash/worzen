<?php
/**
 * The template for displaying all pages
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

            <!-- Page Header -->
            <header class="mb-8">
                
                <!-- Page Title -->
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    <?php the_title(); ?>
                </h1>

                <!-- Featured Image -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="rounded-2xl overflow-hidden mb-8">
                        <?php the_post_thumbnail('large', array('class' => 'w-full h-auto')); ?>
                    </div>
                <?php endif; ?>

            </header>

            <!-- Page Content -->
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

            <!-- Comments (if enabled for pages) -->
            <?php
            if (comments_open() || get_comments_number()) :
            ?>
                <div class="bg-gray-50 rounded-2xl p-8">
                    <?php comments_template(); ?>
                </div>
            <?php endif; ?>

        <?php
        endwhile;
        ?>

    </div>
</article>

<?php
get_footer();

