<?php
/**
 * Template Name: Blog Page
 *
 * This is a custom page template for the Blog page.
 * It displays a grid of blog posts with featured images and excerpts.
 *
 * @package Worzen
 * @since 1.0.0
 */

get_header();
?>

<!-- Blog Hero Section -->
<section class="relative bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 py-20 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 mb-6 leading-tight">
                Our <span class="bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">Blog</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto">
                Insights, tutorials, and updates from the <?php bloginfo('name'); ?> team
            </p>
        </div>
    </div>
    <!-- Decorative Elements -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-indigo-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
</section>

<!-- Blog Posts Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <?php
        // Custom query for blog posts
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        
        $blog_args = array(
            'post_type'      => 'post',
            'posts_per_page' => 9,
            'paged'          => $paged,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC'
        );
        
        $blog_query = new WP_Query($blog_args);
        
        if ($blog_query->have_posts()) :
        ?>
        
        <!-- Blog Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            
            <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
            
            <!-- Blog Post Card -->
            <article class="bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden group">
                
                <!-- Featured Image -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="h-48 overflow-hidden">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('worzen-featured', array('class' => 'w-full h-full object-cover group-hover:scale-110 transition duration-300')); ?>
                        </a>
                    </div>
                <?php else : ?>
                    <div class="h-48 bg-gradient-to-br from-primary to-secondary flex items-center justify-center">
                        <svg class="w-20 h-20 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                        </svg>
                    </div>
                <?php endif; ?>
                
                <!-- Post Content -->
                <div class="p-6">
                    
                    <!-- Post Meta -->
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <time datetime="<?php echo get_the_date('c'); ?>">
                            <?php echo get_the_date(); ?>
                        </time>
                        
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) :
                        ?>
                            <span class="mx-2">•</span>
                            <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>" class="hover:text-primary transition duration-300">
                                <?php echo esc_html($categories[0]->name); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    
                    <!-- Post Title -->
                    <h2 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition duration-300">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    
                    <!-- Post Excerpt -->
                    <p class="text-gray-600 mb-4">
                        <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                    </p>
                    
                    <!-- Read More Link -->
                    <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-primary font-semibold hover:text-secondary transition duration-300">
                        Read More
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                    
                </div>
                
            </article>
            
            <?php endwhile; ?>
            
        </div>
        
        <!-- Pagination -->
        <?php
        if ($blog_query->max_num_pages > 1) :
            $big = 999999999;
            echo '<nav class="flex justify-center items-center space-x-2" aria-label="Blog Pagination">';
            echo paginate_links(array(
                'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format'    => '?paged=%#%',
                'current'   => max(1, $paged),
                'total'     => $blog_query->max_num_pages,
                'prev_text' => '<span class="px-4 py-2 bg-white border border-gray-300 rounded-lg hover:bg-primary hover:text-white transition duration-300">' . esc_html__('Previous', 'worzen') . '</span>',
                'next_text' => '<span class="px-4 py-2 bg-white border border-gray-300 rounded-lg hover:bg-primary hover:text-white transition duration-300">' . esc_html__('Next', 'worzen') . '</span>',
                'before_page_number' => '<span class="px-4 py-2 bg-white border border-gray-300 rounded-lg hover:bg-primary hover:text-white transition duration-300">',
                'after_page_number'  => '</span>',
            ));
            echo '</nav>';
        endif;
        ?>
        
        <?php
        wp_reset_postdata();
        
        else :
        ?>
        
        <!-- No Posts Found -->
        <div class="text-center py-20">
            <svg class="w-24 h-24 mx-auto text-gray-300 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
            </svg>
            <h2 class="text-3xl font-bold text-gray-900 mb-4">No Posts Yet</h2>
            <p class="text-xl text-gray-600 mb-8">
                We're working on creating great content for you. Check back soon!
            </p>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block bg-gradient-to-r from-primary to-secondary text-white px-8 py-4 rounded-full text-lg font-semibold hover:shadow-2xl transform hover:-translate-y-1 transition duration-300">
                Back to Home
            </a>
        </div>
        
        <?php endif; ?>
        
    </div>
</section>

<!-- Categories Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-indigo-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Browse by Category</h2>
            <p class="text-xl text-gray-600">Explore topics that interest you</p>
        </div>

        <?php
        $categories = get_categories(array(
            'orderby' => 'count',
            'order'   => 'DESC',
            'number'  => 6,
            'hide_empty' => true,
        ));

        if (!empty($categories)) :
        ?>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <?php foreach ($categories as $category) : ?>
            
            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl transition duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-2xl font-bold text-gray-900 group-hover:text-primary transition duration-300">
                        <?php echo esc_html($category->name); ?>
                    </h3>
                    <span class="bg-gradient-to-r from-primary to-secondary text-white px-4 py-2 rounded-full text-sm font-semibold">
                        <?php echo esc_html($category->count); ?>
                    </span>
                </div>
                <?php if ($category->description) : ?>
                    <p class="text-gray-600">
                        <?php echo esc_html($category->description); ?>
                    </p>
                <?php else : ?>
                    <p class="text-gray-600">
                        <?php echo esc_html($category->count); ?> <?php echo _n('post', 'posts', $category->count, 'worzen'); ?> in this category
                    </p>
                <?php endif; ?>
            </a>
            
            <?php endforeach; ?>
            
        </div>
        
        <?php endif; ?>
        
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="bg-gradient-to-br from-primary to-secondary rounded-2xl shadow-2xl p-12 text-white">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Stay Updated</h2>
            <p class="text-xl mb-8 opacity-90">
                Subscribe to our newsletter and get the latest updates, tutorials, and tips delivered to your inbox.
            </p>
            <form class="flex flex-col sm:flex-row gap-4 max-w-2xl mx-auto" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                <input type="hidden" name="action" value="worzen_newsletter_subscribe">
                <?php wp_nonce_field('worzen_newsletter', 'worzen_newsletter_nonce'); ?>
                <input type="email" name="newsletter_email" required placeholder="Enter your email address" class="flex-1 px-6 py-4 rounded-full text-gray-900 focus:outline-none focus:ring-2 focus:ring-white">
                <button type="submit" class="bg-white text-primary px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition duration-300">
                    Subscribe
                </button>
            </form>
            <p class="text-sm mt-4 opacity-75">
                We respect your privacy. Unsubscribe at any time.
            </p>
        </div>
    </div>
</section>

<section>
  <?php
  while ( have_posts() ) :
      the_post();
      the_content();
  endwhile;
  ?>
</section>

<?php
get_footer();

