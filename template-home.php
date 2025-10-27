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
            
            <!-- Product Card 1 -->
            <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden group">
                <div class="h-48 bg-gradient-to-br from-indigo-400 to-purple-500 flex items-center justify-center">
                    <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Checkout Manager for WooCommerce</h3>
                    <p class="text-gray-600 mb-4">Customize your WooCommerce checkout page with ease. Add, remove, or modify fields to create the perfect checkout experience.</p>
                    <a href="https://wordpress.org/plugins/checkout-manager-for-woocommerce/" target="_blank" class="inline-block bg-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-secondary transition duration-300">Learn More →</a>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden group">
                <div class="h-48 bg-gradient-to-br from-blue-400 to-cyan-500 flex items-center justify-center">
                    <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Custom Login Logo and URL</h3>
                    <p class="text-gray-600 mb-4">Personalize your WordPress login page with custom branding. Change the logo, URL, and create a professional first impression.</p>
                    <a href="https://wordpress.org/plugins/custom-login-logo-and-url/" target="_blank" class="inline-block bg-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-secondary transition duration-300">Learn More →</a>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden group">
                <div class="h-48 bg-gradient-to-br from-green-400 to-emerald-500 flex items-center justify-center">
                    <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Instant Page Load</h3>
                    <p class="text-gray-600 mb-4">Dramatically improve your website speed with intelligent caching and optimization. Lightning-fast page loads guaranteed.</p>
                    <a href="https://wordpress.org/plugins/instant-page-load/" target="_blank" class="inline-block bg-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-secondary transition duration-300">Learn More →</a>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden group">
                <div class="h-48 bg-gradient-to-br from-orange-400 to-red-500 flex items-center justify-center">
                    <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Product View Count</h3>
                    <p class="text-gray-600 mb-4">Track and display product view counts to build social proof and understand customer behavior on your WooCommerce store.</p>
                    <a href="https://wordpress.org/plugins/product-view-count/" target="_blank" class="inline-block bg-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-secondary transition duration-300">Learn More →</a>
                </div>
            </div>

            <!-- Product Card 5 -->
            <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden group">
                <div class="h-48 bg-gradient-to-br from-pink-400 to-rose-500 flex items-center justify-center">
                    <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Suffix Master</h3>
                    <p class="text-gray-600 mb-4">Smart title, price & content branding tool. Add custom suffixes and prefixes to enhance your product presentation and SEO.</p>
                    <a href="https://wordpress.org/plugins/suffix-master/" target="_blank" class="inline-block bg-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-secondary transition duration-300">Learn More →</a>
                </div>
            </div>

            <!-- Product Card 6 -->
            <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden group">
                <div class="h-48 bg-gradient-to-br from-yellow-400 to-amber-500 flex items-center justify-center">
                    <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">DeleteBulk</h3>
                    <p class="text-gray-600 mb-4">Smart bulk delete & cleanup tool. Efficiently manage and clean your WordPress database with powerful filtering options.</p>
                    <a href="https://wordpress.org/plugins/deletebulk/" target="_blank" class="inline-block bg-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-secondary transition duration-300">Learn More →</a>
                </div>
            </div>

            <!-- Product Card 7 -->
            <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden group md:col-span-2 lg:col-span-1">
                <div class="h-48 bg-gradient-to-br from-violet-400 to-purple-500 flex items-center justify-center">
                    <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h4a1 1 0 011 1v7a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM14 5a1 1 0 011-1h4a1 1 0 011 1v7a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-3zM14 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1h-4a1 1 0 01-1-1v-3z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Universal Blocks</h3>
                    <p class="text-gray-600 mb-4">Drag & drop page builder blocks and patterns for Gutenberg. Create stunning pages with pre-designed blocks and layouts.</p>
                    <a href="https://wordpress.org/plugins/universal-blocks/" target="_blank" class="inline-block bg-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-secondary transition duration-300">Learn More →</a>
                </div>
            </div>

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

