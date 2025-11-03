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
<section class="relative bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 py-20 md:py-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold text-gray-900 mb-6 leading-tight">
                Build Better WordPress
                <span class="block bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">Experiences</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-600 mb-8 max-w-3xl mx-auto">
                Premium WordPress plugins and SaaS tools designed to supercharge your website performance, enhance user experience, and streamline your workflow.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#products" class="bg-gradient-to-r from-primary to-secondary text-white px-8 py-4 rounded-full text-lg font-semibold hover:shadow-2xl transform hover:-translate-y-1 transition duration-300">
                    Explore Our Products
                </a>
                <a href="#about" class="bg-white text-primary px-8 py-4 rounded-full text-lg font-semibold border-2 border-primary hover:bg-primary hover:text-white transition duration-300">
                    Learn More
                </a>
            </div>
        </div>
    </div>
    <!-- Decorative Elements -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-indigo-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
</section>

<!-- Products Section -->
<section id="products" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Premium Products</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Powerful tools crafted with precision to elevate your WordPress experience</p>
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

<!-- About Section -->
<section id="about" class="py-20 bg-gradient-to-br from-gray-50 to-indigo-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Building the Future of WordPress</h2>
                <p class="text-lg text-gray-600 mb-6">
                    At <?php bloginfo('name'); ?>, we're passionate about creating premium WordPress plugins and SaaS tools that empower businesses and developers to build exceptional web experiences.
                </p>
                <p class="text-lg text-gray-600 mb-6">
                    Our mission is to simplify complex workflows, enhance website performance, and provide tools that are both powerful and easy to use. With thousands of active installations worldwide, we're trusted by businesses of all sizes.
                </p>
                <div class="grid grid-cols-2 gap-6 mt-8">
                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <div class="text-4xl font-bold text-primary mb-2">50K+</div>
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

<!-- Testimonials Section -->
<section id="testimonials" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Trusted by Thousands</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">See what our customers have to say about our products</p>
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

<!-- Contact Section -->
<section id="contact" class="py-20 bg-gradient-to-br from-indigo-50 to-purple-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Get In Touch</h2>
            <p class="text-xl text-gray-600">Have a question or want to work together? We'd love to hear from you!</p>
        </div>

        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
            <?php echo do_shortcode('[contact-form-7 id="1" title="Contact form 1"]'); ?>
            
            <!-- Fallback form if Contact Form 7 is not installed -->
            <form class="space-y-6" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                <input type="hidden" name="action" value="worzen_contact_form">
                <?php wp_nonce_field('worzen_contact_form', 'worzen_contact_nonce'); ?>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Your Name</label>
                        <input type="text" id="name" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300" placeholder="John Doe">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Your Email</label>
                        <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300" placeholder="john@example.com">
                    </div>
                </div>
                <div>
                    <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">Subject</label>
                    <input type="text" id="subject" name="subject" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300" placeholder="How can we help?">
                </div>
                <div>
                    <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                    <textarea id="message" name="message" rows="6" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300" placeholder="Tell us about your project or question..."></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-gradient-to-r from-primary to-secondary text-white px-10 py-4 rounded-full text-lg font-semibold hover:shadow-2xl transform hover:-translate-y-1 transition duration-300">
                        Send Message
                    </button>
                </div>
            </form>
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

