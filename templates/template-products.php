<?php
/**
 * Template Name: Products Page
 * 
 * Displays all products/themes with filtering and search functionality
 * 
 * @package Worzen
 */

get_header();
?>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500 text-white py-20 overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-1/2 -left-1/2 w-96 h-96 bg-white opacity-10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-1/2 -right-1/2 w-96 h-96 bg-white opacity-10 rounded-full blur-3xl animate-pulse delay-1000"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                Our Products
            </h1>
            <p class="text-xl md:text-2xl text-indigo-100 mb-8">
                Premium WordPress themes and plugins crafted with care
            </p>
            
            <!-- Search Bar -->
            <div class="max-w-2xl mx-auto">
                <div class="relative">
                    <input 
                        type="text" 
                        id="product-search" 
                        placeholder="Search products..." 
                        class="w-full px-6 py-4 pr-12 rounded-full text-gray-800 text-lg focus:outline-none focus:ring-4 focus:ring-white/30 shadow-2xl"
                    >
                    <svg class="absolute right-5 top-1/2 transform -translate-y-1/2 w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Filter Section -->
<section class="bg-gray-50 py-8 border-b border-gray-200">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap items-center justify-center gap-4">
            <button class="filter-btn active px-6 py-2 rounded-full bg-primary text-white font-semibold hover:bg-secondary transition duration-300" data-filter="all">
                All Products
            </button>
            <?php
            // Get all product categories
            $categories = get_terms(array(
                'taxonomy' => 'product_category',
                'hide_empty' => true,
            ));

            if (!empty($categories) && !is_wp_error($categories)) {
                foreach ($categories as $category) {
                    ?>
                    <button class="filter-btn px-6 py-2 rounded-full bg-white text-gray-700 font-semibold hover:bg-primary hover:text-white transition duration-300 border border-gray-300" data-filter="<?php echo esc_attr($category->slug); ?>">
                        <?php echo esc_html($category->name); ?>
                    </button>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>

<!-- Products Grid -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div id="products-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <?php
            // Function to get badge color (defined once outside the loop)
            if (!function_exists('worzen_get_badge_color')) {
                function worzen_get_badge_color($badge) {
                    $colors = array(
                        'Premium' => 'bg-accent',
                        'Free' => 'bg-green-500',
                        'New' => 'bg-blue-500',
                        'Popular' => 'bg-orange-500',
                    );
                    return isset($colors[$badge]) ? $colors[$badge] : 'bg-accent';
                }
            }

            // Query all products
            $products_query = new WP_Query(array(
                'post_type' => 'worzen-product',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC',
            ));

            if ($products_query->have_posts()) :
                while ($products_query->have_posts()) : $products_query->the_post();

                    // Get product meta
                    $price = get_post_meta(get_the_ID(), '_product_price', true);
                    $rating = get_post_meta(get_the_ID(), '_product_rating', true);
                    $users = get_post_meta(get_the_ID(), '_product_users', true);
                    $badges = get_post_meta(get_the_ID(), '_product_badges', true);
                    if (!is_array($badges)) {
                        $badges = array();
                    }
                    $product_url = get_post_meta(get_the_ID(), '_product_url', true);
                    $url_new_tab = get_post_meta(get_the_ID(), '_product_url_new_tab', true);

                    // Get product categories
                    $categories = get_the_terms(get_the_ID(), 'product_category');
                    $category_slugs = array();
                    $category_name = '';

                    if ($categories && !is_wp_error($categories)) {
                        foreach ($categories as $category) {
                            $category_slugs[] = $category->slug;
                        }
                        $category_name = $categories[0]->name;
                    }

                    $data_category = implode(' ', $category_slugs);

                    // Get featured image
                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    if (!$thumbnail_url) {
                        $thumbnail_url = get_template_directory_uri() . '/assets/images/placeholder.jpg';
                    }

                    // Determine category badge color
                    $cat_badge_color = 'bg-indigo-50 text-primary';
                    if (in_array('plugin', $category_slugs) || in_array('plugins', $category_slugs)) {
                        $cat_badge_color = 'bg-purple-50 text-secondary';
                    }

                    // Determine price display
                    $price_display = '';
                    $price_color = 'text-primary';
                    if (strtolower($price) === 'free' || empty($price)) {
                        $price_display = 'Free';
                        $price_color = 'text-green-600';
                    } else {
                        $price_display = '$' . $price;
                    }

                    // Get excerpt or generate one
                    $excerpt = get_the_excerpt();
                    if (empty($excerpt)) {
                        $excerpt = wp_trim_words(get_the_content(), 20, '...');
                    }

                    // Product URL
                    $view_url = !empty($product_url) ? esc_url($product_url) : get_permalink();
                    $target_attr = ($url_new_tab === '1') ? ' target="_blank" rel="noopener noreferrer"' : '';
                    ?>

                    <!-- Product Card -->
                    <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 transform hover:-translate-y-2" data-category="<?php echo esc_attr($data_category); ?>">
                        <div class="relative overflow-hidden group">
                            <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                            <?php if (!empty($badges)) : ?>
                            <div class="absolute top-4 right-4 flex flex-col gap-2">
                                <?php foreach ($badges as $badge) : ?>
                                    <span class="<?php echo esc_attr(worzen_get_badge_color($badge)); ?> text-white px-3 py-1 rounded-full text-sm font-semibold"><?php echo esc_html($badge); ?></span>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                <?php if (!empty($category_name)) : ?>
                                <span class="text-sm font-semibold <?php echo esc_attr($cat_badge_color); ?> px-3 py-1 rounded-full"><?php echo esc_html($category_name); ?></span>
                                <?php endif; ?>
                                <?php if (!empty($rating)) : ?>
                                <div class="flex items-center text-yellow-400">
                                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="ml-1 text-gray-600 text-sm"><?php echo esc_html($rating); ?></span>
                                </div>
                                <?php endif; ?>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2"><?php the_title(); ?></h3>
                            <p class="text-gray-600 mb-4"><?php echo esc_html($excerpt); ?></p>
                            <div class="flex items-center justify-between mb-4">
                                <div class="text-3xl font-bold <?php echo esc_attr($price_color); ?>"><?php echo esc_html($price_display); ?></div>
                                <?php if (!empty($users)) : ?>
                                <div class="text-sm text-gray-500">
                                    <svg class="w-4 h-4 inline mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                                    </svg>
                                    <?php echo esc_html($users); ?> users
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="flex gap-2">
                                <a href="<?php echo esc_url($view_url); ?>"<?php echo $target_attr; ?> class="flex-1 bg-gradient-to-r from-primary to-secondary text-white text-center py-3 rounded-lg font-semibold hover:shadow-lg transition duration-300">
                                    View Details
                                </a>
                                <a href="<?php echo esc_url($view_url); ?>"<?php echo $target_attr; ?> class="px-4 py-3 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition duration-300">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <div class="col-span-full text-center py-20">
                    <p class="text-gray-500 text-lg">No products found. Please add some products from the admin panel.</p>
                </div>
            <?php endif; ?>

        </div>

        <!-- No Results Message -->
        <div id="no-results" class="hidden text-center py-20">
            <svg class="w-24 h-24 mx-auto text-gray-300 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <h3 class="text-2xl font-bold text-gray-700 mb-2">No products found</h3>
            <p class="text-gray-500">Try adjusting your search or filter to find what you're looking for.</p>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Why Choose Our Products?</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">We build premium WordPress products with quality, performance, and user experience in mind.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Feature 1 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg text-center hover:shadow-2xl transition duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Quality Code</h3>
                <p class="text-gray-600">Clean, well-documented code following WordPress coding standards.</p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg text-center hover:shadow-2xl transition duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-secondary to-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Fast Performance</h3>
                <p class="text-gray-600">Optimized for speed and performance to keep your site lightning fast.</p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg text-center hover:shadow-2xl transition duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-accent to-primary rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">24/7 Support</h3>
                <p class="text-gray-600">Dedicated support team ready to help you whenever you need assistance.</p>
            </div>

            <!-- Feature 4 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg text-center hover:shadow-2xl transition duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-primary to-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Regular Updates</h3>
                <p class="text-gray-600">Continuous improvements and updates to keep products secure and modern.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-primary via-secondary to-accent text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Get Started?</h2>
        <p class="text-xl md:text-2xl text-indigo-100 mb-10 max-w-3xl mx-auto">
            Join thousands of satisfied customers and take your WordPress site to the next level.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-block bg-white text-primary px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition duration-300 shadow-2xl">
                Contact Us
            </a>
            <a href="#products-grid" class="inline-block bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-primary transition duration-300">
                Browse Products
            </a>
        </div>
    </div>
</section>

<section>
    <div class="container mx-auto px-6 text-center">
      <?php
      while ( have_posts() ) :
          the_post();
          the_content();
      endwhile;
      ?>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('product-search');
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('.product-card');
    const noResults = document.getElementById('no-results');

    let currentFilter = 'all';
    let currentSearch = '';

    // Filter functionality
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Update active button
            filterButtons.forEach(btn => {
                btn.classList.remove('active', 'bg-primary', 'text-white');
                btn.classList.add('bg-white', 'text-gray-700');
            });
            this.classList.add('active', 'bg-primary', 'text-white');
            this.classList.remove('bg-white', 'text-gray-700');

            currentFilter = this.getAttribute('data-filter');
            filterProducts();
        });
    });

    // Search functionality
    searchInput.addEventListener('input', function() {
        currentSearch = this.value.toLowerCase();
        filterProducts();
    });

    function filterProducts() {
        let visibleCount = 0;

        productCards.forEach(card => {
            const category = card.getAttribute('data-category');
            const title = card.querySelector('h3').textContent.toLowerCase();
            const description = card.querySelector('p').textContent.toLowerCase();

            const matchesFilter = currentFilter === 'all' || category.includes(currentFilter);
            const matchesSearch = currentSearch === '' ||
                                title.includes(currentSearch) ||
                                description.includes(currentSearch);

            if (matchesFilter && matchesSearch) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        // Show/hide no results message
        if (visibleCount === 0) {
            noResults.classList.remove('hidden');
        } else {
            noResults.classList.add('hidden');
        }
    }
});
</script>

<?php get_footer(); ?>

