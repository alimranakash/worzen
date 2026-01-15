<?php
/**
 * Template Name: Home Page
 *
 * This is a custom page template for the homepage.
 * It displays the full landing page design with hero, products, about, testimonials, and contact sections.
 *
 * @package Worzen
 * @since 1.0.0
 */

get_header();
?>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 py-12 sm:py-16 md:py-24 lg:py-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-extrabold text-gray-900 mb-4 sm:mb-6 leading-tight">
                Build Better WordPress
                <span class="block bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">Experiences</span>
            </h1>
            <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-gray-600 mb-6 sm:mb-8 max-w-3xl mx-auto px-4">
                Premium WordPress plugins and SaaS tools designed to supercharge your website performance, enhance user experience, and streamline your workflow.
            </p>
            <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center items-center px-4">
                <a href="#products" class="w-full sm:w-auto bg-gradient-to-r from-primary to-secondary text-white px-6 sm:px-8 py-3 sm:py-4 rounded-full text-base sm:text-lg font-semibold hover:shadow-2xl transform hover:-translate-y-1 transition duration-300 text-center">
                    Explore Our Products
                </a>
                <a href="#about" class="w-full sm:w-auto bg-white text-primary px-6 sm:px-8 py-3 sm:py-4 rounded-full text-base sm:text-lg font-semibold border-2 border-primary hover:bg-primary hover:text-white transition duration-300 text-center">
                    Learn More
                </a>
            </div>
        </div>
    </div>
    <!-- Decorative Elements -->
    <div class="absolute top-0 left-0 w-48 h-48 sm:w-72 sm:h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 w-48 h-48 sm:w-72 sm:h-72 bg-indigo-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
</section>

<!-- Our Customers Worldwide Section -->
<!-- <section class="py-12 sm:py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8 sm:mb-12 md:mb-16">
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-3 sm:mb-4 px-4">Our Customers Worldwide</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-2xl mx-auto px-4">Trusted by businesses and developers across the globe</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-10 md:gap-12 items-center mb-8 sm:mb-12 md:mb-16">
            
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-br from-primary/10 to-secondary/10 rounded-3xl blur-2xl"></div>
                <div class="relative bg-gradient-to-br from-indigo-50 to-purple-50 rounded-3xl p-8 shadow-xl">
                    <svg class="w-full h-auto" viewBox="0 0 800 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                        
                        <path d="M100 200 Q150 150 200 180 T300 200 Q350 220 400 200 T500 180 Q550 160 600 180 T700 200" stroke="#6366f1" stroke-width="3" fill="none" opacity="0.3"/>
                        <path d="M100 250 Q150 230 200 250 T300 270 Q350 290 400 270 T500 250 Q550 230 600 250 T700 270" stroke="#8b5cf6" stroke-width="3" fill="none" opacity="0.3"/>

                        
                        <circle cx="150" cy="180" r="8" fill="#6366f1" class="animate-pulse"/>
                        <circle cx="300" cy="200" r="8" fill="#8b5cf6" class="animate-pulse" style="animation-delay: 0.2s"/>
                        <circle cx="450" cy="190" r="8" fill="#ec4899" class="animate-pulse" style="animation-delay: 0.4s"/>
                        <circle cx="600" cy="180" r="8" fill="#6366f1" class="animate-pulse" style="animation-delay: 0.6s"/>
                        <circle cx="250" cy="260" r="8" fill="#8b5cf6" class="animate-pulse" style="animation-delay: 0.8s"/>
                        <circle cx="500" cy="250" r="8" fill="#ec4899" class="animate-pulse" style="animation-delay: 1s"/>
                    </svg>
                </div>
            </div>

            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                <div class="bg-gradient-to-br from-indigo-500 to-purple-600 p-6 sm:p-8 rounded-2xl shadow-xl text-white transform hover:scale-105 transition duration-300">
                    <div class="flex items-center justify-center mb-3 sm:mb-4">
                        <svg class="w-10 h-10 sm:w-12 sm:h-12" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                        </svg>
                    </div>
                    <div class="text-3xl sm:text-4xl font-bold mb-1 sm:mb-2 text-center">10,000+</div>
                    <div class="text-base sm:text-lg text-center opacity-90">Active Users</div>
                </div>

                <div class="bg-gradient-to-br from-purple-500 to-pink-600 p-6 sm:p-8 rounded-2xl shadow-xl text-white transform hover:scale-105 transition duration-300">
                    <div class="flex items-center justify-center mb-3 sm:mb-4">
                        <svg class="w-10 h-10 sm:w-12 sm:h-12" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="text-3xl sm:text-4xl font-bold mb-1 sm:mb-2 text-center">120+</div>
                    <div class="text-base sm:text-lg text-center opacity-90">Countries</div>
                </div>

                <div class="bg-gradient-to-br from-pink-500 to-rose-600 p-6 sm:p-8 rounded-2xl shadow-xl text-white transform hover:scale-105 transition duration-300">
                    <div class="flex items-center justify-center mb-3 sm:mb-4">
                        <svg class="w-10 h-10 sm:w-12 sm:h-12" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"></path>
                        </svg>
                    </div>
                    <div class="text-3xl sm:text-4xl font-bold mb-1 sm:mb-2 text-center">50,000+</div>
                    <div class="text-base sm:text-lg text-center opacity-90">Downloads</div>
                </div>

                <div class="bg-gradient-to-br from-indigo-600 to-blue-600 p-6 sm:p-8 rounded-2xl shadow-xl text-white transform hover:scale-105 transition duration-300">
                    <div class="flex items-center justify-center mb-3 sm:mb-4">
                        <svg class="w-10 h-10 sm:w-12 sm:h-12" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="text-3xl sm:text-4xl font-bold mb-1 sm:mb-2 text-center">99.9%</div>
                    <div class="text-base sm:text-lg text-center opacity-90">Uptime</div>
                </div>
            </div>
        </div>

        
        <div class="bg-gradient-to-br from-gray-50 to-indigo-50 rounded-2xl p-6 sm:p-8">
            <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 sm:mb-6 text-center">Serving Customers In</h3>
            <div class="flex flex-wrap justify-center items-center gap-4 sm:gap-6 md:gap-8">
                <div class="text-center">
                    <div class="text-4xl mb-2">🇺🇸</div>
                    <div class="text-sm font-semibold text-gray-700">North America</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-2">🇬🇧</div>
                    <div class="text-sm font-semibold text-gray-700">Europe</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-2">🇯🇵</div>
                    <div class="text-sm font-semibold text-gray-700">Asia</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-2">🇦🇺</div>
                    <div class="text-sm font-semibold text-gray-700">Oceania</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-2">🇧🇷</div>
                    <div class="text-sm font-semibold text-gray-700">South America</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-2">🇿🇦</div>
                    <div class="text-sm font-semibold text-gray-700">Africa</div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- Products Section -->
<section id="products" class="py-12 sm:py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8 sm:mb-12 md:mb-16">
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-3 sm:mb-4 px-4">Our Premium Products</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-2xl mx-auto px-4">Powerful tools crafted with precision to elevate your WordPress experience</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <?php
            // Query for featured products
            $featured_products = new WP_Query(array(
                'post_type' => 'worzen-product',
                'posts_per_page' => -1,
                'meta_key' => '_product_featured',
                'meta_value' => '1',
                'orderby' => 'date',
                'order' => 'DESC',
            ));

            // Define gradient color combinations for cards
            $gradient_colors = array(
                array('from' => 'indigo-400', 'to' => 'purple-500'),
                array('from' => 'blue-400', 'to' => 'cyan-500'),
                array('from' => 'green-400', 'to' => 'emerald-500'),
                array('from' => 'orange-400', 'to' => 'red-500'),
                array('from' => 'pink-400', 'to' => 'rose-500'),
                array('from' => 'yellow-400', 'to' => 'amber-500'),
                array('from' => 'violet-400', 'to' => 'purple-500'),
                array('from' => 'teal-400', 'to' => 'cyan-500'),
            );

            if ($featured_products->have_posts()) :
                $color_index = 0;
                while ($featured_products->have_posts()) : $featured_products->the_post();
                    // Get product meta data
                    $product_url = get_post_meta(get_the_ID(), '_product_url', true);
                    $url_new_tab = get_post_meta(get_the_ID(), '_product_url_new_tab', true);
                    $product_icon = get_post_meta(get_the_ID(), '_product_icon', true);

                    // Get current gradient colors
                    $gradient = $gradient_colors[$color_index % count($gradient_colors)];
                    $color_index++;

                    // Get featured image or use placeholder
                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');

                    // Determine target attribute
                    $target_attr = ($url_new_tab === '1') ? ' target="_blank" rel="noopener noreferrer"' : '';
            ?>

            <!-- Product Card -->
            <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden group">
                <?php if ($thumbnail_url) : ?>
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                <?php else : ?>
                    <div class="h-48 bg-gradient-to-br from-<?php echo esc_attr($gradient['from']); ?> to-<?php echo esc_attr($gradient['to']); ?> flex items-center justify-center">
                        <?php if (!empty($product_icon)) : ?>
                            <?php echo $product_icon; // Output custom SVG icon ?>
                        <?php else : ?>
                            <!-- Default fallback icon -->
                            <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3"><?php the_title(); ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                    <?php if ($product_url) : ?>
                        <a href="<?php echo esc_url($product_url); ?>"<?php echo $target_attr; ?> class="inline-block bg-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-secondary transition duration-300">Learn More →</a>
                    <?php else : ?>
                        <a href="<?php the_permalink(); ?>"<?php echo $target_attr; ?> class="inline-block bg-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-secondary transition duration-300">Learn More →</a>
                    <?php endif; ?>
                </div>
            </div>

            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
                <!-- No Featured Products Message -->
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500 text-lg">No featured products available at the moment.</p>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>

<!-- Our Products Are Highly Rated Section -->
<section class="py-12 sm:py-16 md:py-20 bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8 sm:mb-12 md:mb-16">
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-3 sm:mb-4 px-4">Our Products Are Highly Rated by Thousands of Customers</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto px-4">Join the community of satisfied users who trust our premium WordPress solutions</p>
        </div>

        <!-- Rating Statistics -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 md:gap-8 mb-8 sm:mb-12 md:mb-16">
            <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-xl text-center transform hover:scale-105 transition duration-300">
                <div class="flex justify-center mb-3 sm:mb-4">
                    <?php for ($i = 0; $i < 5; $i++) : ?>
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    <?php endfor; ?>
                </div>
                <div class="text-4xl sm:text-5xl font-bold text-primary mb-1 sm:mb-2">4.9</div>
                <div class="text-sm sm:text-base text-gray-600 font-semibold">Average Rating</div>
            </div>

            <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-xl text-center transform hover:scale-105 transition duration-300">
                <div class="flex items-center justify-center mb-3 sm:mb-4">
                    <svg class="w-10 h-10 sm:w-12 sm:h-12 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="text-4xl sm:text-5xl font-bold text-green-500 mb-1 sm:mb-2">98%</div>
                <div class="text-sm sm:text-base text-gray-600 font-semibold">Satisfaction Rate</div>
            </div>

            <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-xl text-center transform hover:scale-105 transition duration-300">
                <div class="flex items-center justify-center mb-3 sm:mb-4">
                    <svg class="w-10 h-10 sm:w-12 sm:h-12 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"></path>
                        <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"></path>
                    </svg>
                </div>
                <div class="text-4xl sm:text-5xl font-bold text-secondary mb-1 sm:mb-2">1K+</div>
                <div class="text-sm sm:text-base text-gray-600 font-semibold">Reviews</div>
            </div>

            <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-xl text-center transform hover:scale-105 transition duration-300">
                <div class="flex items-center justify-center mb-3 sm:mb-4">
                    <svg class="w-10 h-10 sm:w-12 sm:h-12 text-accent" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="text-4xl sm:text-5xl font-bold text-accent mb-1 sm:mb-2">500+</div>
                <div class="text-sm sm:text-base text-gray-600 font-semibold">5-Star Reviews</div>
            </div>
        </div>

        <!-- Featured Reviews -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6 md:gap-8 mb-8 sm:mb-10 md:mb-12">
            <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-xl">
                <div class="flex items-center mb-4 sm:mb-6">
                    <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center text-white text-lg sm:text-2xl font-bold mr-3 sm:mr-4 flex-shrink-0">
                        JD
                    </div>
                    <div class="min-w-0">
                        <div class="font-bold text-base sm:text-lg text-gray-900">John Davidson</div>
                        <div class="flex items-center flex-wrap">
                            <?php for ($i = 0; $i < 5; $i++) : ?>
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            <?php endfor; ?>
                            <span class="ml-2 text-xs sm:text-sm text-gray-500">Verified Purchase</span>
                        </div>
                    </div>
                </div>
                <p class="text-gray-700 text-sm sm:text-base md:text-lg leading-relaxed mb-3 sm:mb-4">"Absolutely phenomenal! The Checkout Manager has completely transformed our WooCommerce store. Setup was a breeze, and the customization options are endless. Our checkout conversion rate increased by 35% in the first month!"</p>
                <div class="flex items-center text-xs sm:text-sm text-gray-500">
                    <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                    </svg>
                    2 weeks ago
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-xl">
                <div class="flex items-center mb-4 sm:mb-6">
                    <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white text-lg sm:text-2xl font-bold mr-3 sm:mr-4 flex-shrink-0">
                        LM
                    </div>
                    <div class="min-w-0">
                        <div class="font-bold text-base sm:text-lg text-gray-900">Lisa Martinez</div>
                        <div class="flex items-center flex-wrap">
                            <?php for ($i = 0; $i < 5; $i++) : ?>
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            <?php endfor; ?>
                            <span class="ml-2 text-xs sm:text-sm text-gray-500">Verified Purchase</span>
                        </div>
                    </div>
                </div>
                <p class="text-gray-700 text-sm sm:text-base md:text-lg leading-relaxed mb-3 sm:mb-4">"I've tried many WordPress plugins, but Worzen's products stand out for their quality and support. The Instant Page Load plugin made my site feel like a modern web app. My bounce rate dropped by 40%! Worth every penny."</p>
                <div class="flex items-center text-xs sm:text-sm text-gray-500">
                    <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                    </svg>
                    1 month ago
                </div>
            </div>
        </div>

        <!-- Trust Badges -->
        <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-xl">
            <div class="flex flex-wrap justify-center items-center gap-4 sm:gap-6 md:gap-8">
                <div class="text-center">
                    <div class="flex items-center justify-center mb-1 sm:mb-2">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-green-500 mr-1 sm:mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-lg sm:text-xl md:text-2xl font-bold text-gray-900">Verified</span>
                    </div>
                    <div class="text-xs sm:text-sm text-gray-600">WordPress.org</div>
                </div>
                <div class="text-center">
                    <div class="flex items-center justify-center mb-1 sm:mb-2">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-blue-500 mr-1 sm:mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                            <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-lg sm:text-xl md:text-2xl font-bold text-gray-900">Premium</span>
                    </div>
                    <div class="text-xs sm:text-sm text-gray-600">Quality Code</div>
                </div>
                <div class="text-center">
                    <div class="flex items-center justify-center mb-1 sm:mb-2">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-purple-500 mr-1 sm:mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-lg sm:text-xl md:text-2xl font-bold text-gray-900">24/7</span>
                    </div>
                    <div class="text-xs sm:text-sm text-gray-600">Support</div>
                </div>
                <div class="text-center">
                    <div class="flex items-center justify-center mb-1 sm:mb-2">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-yellow-500 mr-1 sm:mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <span class="text-lg sm:text-xl md:text-2xl font-bold text-gray-900">Top Rated</span>
                    </div>
                    <div class="text-xs sm:text-sm text-gray-600">Since 2020</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-12 sm:py-16 md:py-20 bg-gradient-to-br from-gray-50 to-indigo-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-10 md:gap-12 items-center">
            <div>
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6 px-4 lg:px-0">Building the Future of WordPress</h2>
                <p class="text-lg text-gray-600 mb-6">
                    At <?php bloginfo('name'); ?>, we're passionate about creating premium WordPress plugins and SaaS tools that empower businesses and developers to build exceptional web experiences.
                </p>
                <p class="text-lg text-gray-600 mb-6">
                    Our mission is to simplify complex workflows, enhance website performance, and provide tools that are both powerful and easy to use. With thousands of active installations worldwide, we're trusted by businesses of all sizes.
                </p>
                <div class="grid grid-cols-2 gap-6 mt-8">
                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <div class="text-4xl font-bold text-primary mb-2">10K+</div>
                        <div class="text-gray-600">Active Installations</div>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <div class="text-4xl font-bold text-primary mb-2">7+</div>
                        <div class="text-gray-600">Premium Products</div>
                    </div>
                </div>
            </div>
            <div class="bg-gradient-to-br from-primary to-secondary rounded-2xl p-8 text-white">
                <h3 class="text-3xl font-bold mb-6">Our Expertise</h3>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-lg">WooCommerce customization and optimization</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-lg">Performance optimization and speed enhancement</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-lg">Gutenberg block development and page builders</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-lg">Database management and cleanup solutions</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- What's so Special About Worzen Section -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8 sm:mb-12 md:mb-16">
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-3 sm:mb-4 px-4">What's so Special About Worzen?</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto px-4">We don't just build plugins – we craft solutions that make a real difference</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <!-- Feature 1 -->
            <div class="group bg-gradient-to-br from-white to-indigo-50 rounded-2xl p-6 sm:p-8 shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2">
                <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-primary to-secondary rounded-xl flex items-center justify-center mb-4 sm:mb-6 group-hover:scale-110 transition duration-300">
                    <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 sm:mb-4">Lightning Fast Performance</h3>
                <p class="text-sm sm:text-base text-gray-600 leading-relaxed">Our plugins are optimized for speed and efficiency. We use cutting-edge techniques to ensure your site loads faster than ever, improving user experience and SEO rankings.</p>
            </div>

            <!-- Feature 2 -->
            <div class="group bg-gradient-to-br from-white to-purple-50 rounded-2xl p-6 sm:p-8 shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2">
                <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mb-4 sm:mb-6 group-hover:scale-110 transition duration-300">
                    <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                    </svg>
                </div>
                <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 sm:mb-4">Highly Customizable</h3>
                <p class="text-sm sm:text-base text-gray-600 leading-relaxed">Every business is unique. Our plugins offer extensive customization options without requiring code, giving you complete control over functionality and appearance.</p>
            </div>

            <!-- Feature 3 -->
            <div class="group bg-gradient-to-br from-white to-pink-50 rounded-2xl p-6 sm:p-8 shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2">
                <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-pink-500 to-rose-500 rounded-xl flex items-center justify-center mb-4 sm:mb-6 group-hover:scale-110 transition duration-300">
                    <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 sm:mb-4">Enterprise-Grade Security</h3>
                <p class="text-sm sm:text-base text-gray-600 leading-relaxed">Security is our top priority. All our products follow WordPress coding standards and undergo rigorous security testing to protect your site and data.</p>
            </div>

            <!-- Feature 4 -->
            <div class="group bg-gradient-to-br from-white to-blue-50 rounded-2xl p-6 sm:p-8 shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2">
                <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-4 sm:mb-6 group-hover:scale-110 transition duration-300">
                    <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 sm:mb-4">Expert Support Team</h3>
                <p class="text-sm sm:text-base text-gray-600 leading-relaxed">Get help when you need it. Our dedicated support team is available 24/7 to answer questions, troubleshoot issues, and help you get the most from our products.</p>
            </div>

            <!-- Feature 5 -->
            <div class="group bg-gradient-to-br from-white to-green-50 rounded-2xl p-6 sm:p-8 shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2">
                <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mb-4 sm:mb-6 group-hover:scale-110 transition duration-300">
                    <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                </div>
                <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 sm:mb-4">Regular Updates</h3>
                <p class="text-sm sm:text-base text-gray-600 leading-relaxed">Stay ahead with continuous improvements. We regularly release updates with new features, performance enhancements, and compatibility with the latest WordPress versions.</p>
            </div>

            <!-- Feature 6 -->
            <div class="group bg-gradient-to-br from-white to-yellow-50 rounded-2xl p-6 sm:p-8 shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2">
                <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-xl flex items-center justify-center mb-4 sm:mb-6 group-hover:scale-110 transition duration-300">
                    <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                    </svg>
                </div>
                <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 sm:mb-4">User-Friendly Interface</h3>
                <p class="text-sm sm:text-base text-gray-600 leading-relaxed">No technical expertise required. Our intuitive interfaces make it easy for anyone to configure and use our plugins, saving you time and reducing the learning curve.</p>
            </div>
        </div>

        <!-- Bottom CTA -->
        <div class="mt-8 sm:mt-12 md:mt-16 text-center">
            <div class="bg-gradient-to-r from-primary to-secondary rounded-2xl p-6 sm:p-8 md:p-12 text-white">
                <h3 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-3 sm:mb-4 px-4">Ready to Experience the Difference?</h3>
                <p class="text-base sm:text-lg md:text-xl mb-6 sm:mb-8 opacity-90 px-4">Join thousands of satisfied customers who have transformed their WordPress sites with Worzen</p>
                <a href="#products" class="inline-block bg-white text-primary px-6 sm:px-8 md:px-10 py-3 sm:py-4 rounded-full text-base sm:text-lg font-semibold hover:shadow-2xl transform hover:-translate-y-1 transition duration-300">
                    Explore Our Products
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="py-12 sm:py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8 sm:mb-12 md:mb-16">
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-3 sm:mb-4 px-4">Trusted by Thousands</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-2xl mx-auto px-4">See what our customers have to say about our products</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Testimonial 1 -->
            <div class="bg-gradient-to-br from-white to-gray-50 p-8 rounded-2xl shadow-lg">
                <div class="flex mb-4">
                    <?php for ($i = 0; $i < 5; $i++) : ?>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    <?php endfor; ?>
                </div>
                <p class="text-gray-600 mb-4">"The Checkout Manager plugin transformed our WooCommerce store. Customization is incredibly easy and our conversion rate has improved significantly!"</p>
                <div class="font-semibold text-gray-900">Sarah Johnson</div>
                <div class="text-sm text-gray-500">E-commerce Manager</div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-gradient-to-br from-white to-gray-50 p-8 rounded-2xl shadow-lg">
                <div class="flex mb-4">
                    <?php for ($i = 0; $i < 5; $i++) : ?>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    <?php endfor; ?>
                </div>
                <p class="text-gray-600 mb-4">"Instant Page Load made a huge difference! Our site speed improved dramatically and our SEO rankings went up. Highly recommended!"</p>
                <div class="font-semibold text-gray-900">Michael Chen</div>
                <div class="text-sm text-gray-500">Web Developer</div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-gradient-to-br from-white to-gray-50 p-8 rounded-2xl shadow-lg">
                <div class="flex mb-4">
                    <?php for ($i = 0; $i < 5; $i++) : ?>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    <?php endfor; ?>
                </div>
                <p class="text-gray-600 mb-4">"Universal Blocks is a game-changer for Gutenberg. The pre-designed blocks save me hours of work and look absolutely professional!"</p>
                <div class="font-semibold text-gray-900">Emily Rodriguez</div>
                <div class="text-sm text-gray-500">Content Creator</div>
            </div>

        </div>
    </div>
</section>

<section class="py-12 sm:py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8 sm:mb-12 md:mb-16">
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-3 sm:mb-4 px-4">Our Customers Worldwide</h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-2xl mx-auto px-4">Trusted by businesses and developers across the globe</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-10 md:gap-12 items-center mb-8 sm:mb-12 md:mb-16">
            
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-br from-primary/10 to-secondary/10 rounded-3xl blur-2xl"></div>
                <div class="relative bg-gradient-to-br from-indigo-50 to-purple-50 rounded-3xl p-8 shadow-xl">
                    <svg class="w-full h-auto" viewBox="0 0 800 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                        
                        <path d="M100 200 Q150 150 200 180 T300 200 Q350 220 400 200 T500 180 Q550 160 600 180 T700 200" stroke="#6366f1" stroke-width="3" fill="none" opacity="0.3"/>
                        <path d="M100 250 Q150 230 200 250 T300 270 Q350 290 400 270 T500 250 Q550 230 600 250 T700 270" stroke="#8b5cf6" stroke-width="3" fill="none" opacity="0.3"/>

                        
                        <circle cx="150" cy="180" r="8" fill="#6366f1" class="animate-pulse"/>
                        <circle cx="300" cy="200" r="8" fill="#8b5cf6" class="animate-pulse" style="animation-delay: 0.2s"/>
                        <circle cx="450" cy="190" r="8" fill="#ec4899" class="animate-pulse" style="animation-delay: 0.4s"/>
                        <circle cx="600" cy="180" r="8" fill="#6366f1" class="animate-pulse" style="animation-delay: 0.6s"/>
                        <circle cx="250" cy="260" r="8" fill="#8b5cf6" class="animate-pulse" style="animation-delay: 0.8s"/>
                        <circle cx="500" cy="250" r="8" fill="#ec4899" class="animate-pulse" style="animation-delay: 1s"/>
                    </svg>
                </div>
            </div>

            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                <div class="bg-gradient-to-br from-indigo-500 to-purple-600 p-6 sm:p-8 rounded-2xl shadow-xl text-white transform hover:scale-105 transition duration-300">
                    <div class="flex items-center justify-center mb-3 sm:mb-4">
                        <svg class="w-10 h-10 sm:w-12 sm:h-12" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                        </svg>
                    </div>
                    <div class="text-3xl sm:text-4xl font-bold mb-1 sm:mb-2 text-center">10,000+</div>
                    <div class="text-base sm:text-lg text-center opacity-90">Active Users</div>
                </div>

                <div class="bg-gradient-to-br from-purple-500 to-pink-600 p-6 sm:p-8 rounded-2xl shadow-xl text-white transform hover:scale-105 transition duration-300">
                    <div class="flex items-center justify-center mb-3 sm:mb-4">
                        <svg class="w-10 h-10 sm:w-12 sm:h-12" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="text-3xl sm:text-4xl font-bold mb-1 sm:mb-2 text-center">120+</div>
                    <div class="text-base sm:text-lg text-center opacity-90">Countries</div>
                </div>

                <div class="bg-gradient-to-br from-pink-500 to-rose-600 p-6 sm:p-8 rounded-2xl shadow-xl text-white transform hover:scale-105 transition duration-300">
                    <div class="flex items-center justify-center mb-3 sm:mb-4">
                        <svg class="w-10 h-10 sm:w-12 sm:h-12" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"></path>
                        </svg>
                    </div>
                    <div class="text-3xl sm:text-4xl font-bold mb-1 sm:mb-2 text-center">50,000+</div>
                    <div class="text-base sm:text-lg text-center opacity-90">Downloads</div>
                </div>

                <div class="bg-gradient-to-br from-indigo-600 to-blue-600 p-6 sm:p-8 rounded-2xl shadow-xl text-white transform hover:scale-105 transition duration-300">
                    <div class="flex items-center justify-center mb-3 sm:mb-4">
                        <svg class="w-10 h-10 sm:w-12 sm:h-12" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="text-3xl sm:text-4xl font-bold mb-1 sm:mb-2 text-center">99.9%</div>
                    <div class="text-base sm:text-lg text-center opacity-90">Uptime</div>
                </div>
            </div>
        </div>

        
        <div class="bg-gradient-to-br from-gray-50 to-indigo-50 rounded-2xl p-6 sm:p-8">
            <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 sm:mb-6 text-center">Serving Customers In</h3>
            <div class="flex flex-wrap justify-center items-center gap-4 sm:gap-6 md:gap-8">
                <div class="text-center">
                    <div class="text-4xl mb-2">🇺🇸</div>
                    <div class="text-sm font-semibold text-gray-700">North America</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-2">🇬🇧</div>
                    <div class="text-sm font-semibold text-gray-700">Europe</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-2">🇯🇵</div>
                    <div class="text-sm font-semibold text-gray-700">Asia</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-2">🇦🇺</div>
                    <div class="text-sm font-semibold text-gray-700">Oceania</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-2">🇧🇷</div>
                    <div class="text-sm font-semibold text-gray-700">South America</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-2">🇿🇦</div>
                    <div class="text-sm font-semibold text-gray-700">Africa</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The Home Of Quality WordPress Plugins Section -->
<section class="py-12 sm:py-16 md:py-20 bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 relative overflow-hidden">
    <!-- Decorative Background Elements -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-48 h-48 sm:w-72 sm:h-72 md:w-96 md:h-96 bg-white rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-48 h-48 sm:w-72 sm:h-72 md:w-96 md:h-96 bg-white rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-48 h-48 sm:w-72 sm:h-72 md:w-96 md:h-96 bg-white rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8 sm:mb-12 md:mb-16">
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4 sm:mb-6 px-4">The Home Of Quality WordPress Plugins</h2>
            <p class="text-base sm:text-lg md:text-xl text-white/90 max-w-3xl mx-auto px-4">Every plugin we create is built with passion, precision, and a commitment to excellence</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 md:gap-8 mb-8 sm:mb-12 md:mb-16">
            <!-- Quality Badge 1 -->
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 sm:p-8 text-center border border-white/20 hover:bg-white/20 transition duration-300">
                <div class="flex items-center justify-center mb-3 sm:mb-4">
                    <svg class="w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-xl sm:text-2xl font-bold text-white mb-1 sm:mb-2">Premium Quality</h3>
                <p class="text-sm sm:text-base text-white/80">Meticulously crafted code that follows WordPress best practices</p>
            </div>

            <!-- Quality Badge 2 -->
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 sm:p-8 text-center border border-white/20 hover:bg-white/20 transition duration-300">
                <div class="flex items-center justify-center mb-3 sm:mb-4">
                    <svg class="w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z"></path>
                    </svg>
                </div>
                <h3 class="text-xl sm:text-2xl font-bold text-white mb-1 sm:mb-2">Perfect Integration</h3>
                <p class="text-sm sm:text-base text-white/80">Seamlessly works with your existing WordPress setup</p>
            </div>

            <!-- Quality Badge 3 -->
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 sm:p-8 text-center border border-white/20 hover:bg-white/20 transition duration-300">
                <div class="flex items-center justify-center mb-3 sm:mb-4">
                    <svg class="w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-xl sm:text-2xl font-bold text-white mb-1 sm:mb-2">Blazing Fast</h3>
                <p class="text-sm sm:text-base text-white/80">Optimized for performance without compromising features</p>
            </div>

            <!-- Quality Badge 4 -->
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 sm:p-8 text-center border border-white/20 hover:bg-white/20 transition duration-300">
                <div class="flex items-center justify-center mb-3 sm:mb-4">
                    <svg class="w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-xl sm:text-2xl font-bold text-white mb-1 sm:mb-2">Rock Solid</h3>
                <p class="text-sm sm:text-base text-white/80">Thoroughly tested and secure for peace of mind</p>
            </div>
        </div>

        <!-- Quality Commitment -->
        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6 sm:p-8 md:p-12 border border-white/20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-10 md:gap-12 items-center">
                <div>
                    <h3 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 sm:mb-6">Our Quality Commitment</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 bg-white/20 rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-white mb-2">Clean, Documented Code</h4>
                                <p class="text-white/80">Every line of code is written with clarity and maintainability in mind, following WordPress coding standards.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 bg-white/20 rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-white mb-2">Rigorous Testing</h4>
                                <p class="text-white/80">Extensive testing across multiple WordPress versions, themes, and plugins ensures compatibility.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 bg-white/20 rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-white mb-2">Continuous Improvement</h4>
                                <p class="text-white/80">We listen to user feedback and regularly update our plugins with new features and improvements.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white/5 rounded-2xl p-6 sm:p-8 border border-white/10">
                    <div class="text-center mb-6 sm:mb-8">
                        <div class="text-4xl sm:text-5xl md:text-6xl font-bold text-white mb-1 sm:mb-2">100%</div>
                        <div class="text-xl sm:text-2xl text-white/90">Satisfaction Guarantee</div>
                    </div>
                    <p class="text-white/80 text-center text-sm sm:text-base md:text-lg mb-4 sm:mb-6">We stand behind our products with a 30-day money-back guarantee. If you're not completely satisfied, we'll refund your purchase – no questions asked.</p>
                    <div class="text-center">
                        <a href="#products" class="inline-block bg-white text-primary px-6 sm:px-8 py-3 sm:py-4 rounded-full text-base sm:text-lg font-semibold hover:shadow-2xl transform hover:-translate-y-1 transition duration-300">
                            Try Risk-Free Today
                        </a>
                    </div>
                </div>
            </div>
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

<?php
get_footer();

