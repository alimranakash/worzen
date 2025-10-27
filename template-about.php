<?php
/**
 * Template Name: About Page
 *
 * This is a custom page template for the About page.
 * It displays company information, mission, team, and values.
 *
 * @package Worzen
 * @since 1.0.0
 */

get_header();
?>

<!-- About Hero Section -->
<section class="relative bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 py-20 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 mb-6 leading-tight">
                About <span class="bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent"><?php bloginfo('name'); ?></span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto">
                We're passionate about creating premium WordPress plugins and SaaS tools that empower businesses to build exceptional web experiences.
            </p>
        </div>
    </div>
    <!-- Decorative Elements -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-indigo-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
</section>

<!-- Mission & Vision Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            <!-- Mission -->
            <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-lg p-8">
                <div class="w-16 h-16 bg-gradient-to-r from-primary to-secondary rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Mission</h2>
                <p class="text-lg text-gray-600 mb-4">
                    To simplify complex workflows, enhance website performance, and provide tools that are both powerful and easy to use. We believe that great software should be accessible to everyone, from beginners to experts.
                </p>
                <p class="text-lg text-gray-600">
                    Our mission is to empower businesses and developers with the tools they need to succeed in the digital world.
                </p>
            </div>

            <!-- Vision -->
            <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-lg p-8">
                <div class="w-16 h-16 bg-gradient-to-r from-primary to-secondary rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Vision</h2>
                <p class="text-lg text-gray-600 mb-4">
                    To become the leading provider of WordPress plugins and SaaS tools, known for innovation, quality, and exceptional customer support.
                </p>
                <p class="text-lg text-gray-600">
                    We envision a future where every website owner has access to professional-grade tools that help them achieve their goals.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-indigo-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Impact</h2>
            <p class="text-xl text-gray-600">Trusted by thousands of businesses worldwide</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            
            <div class="bg-white p-8 rounded-2xl shadow-lg text-center">
                <div class="text-5xl font-bold text-primary mb-2">50K+</div>
                <div class="text-gray-600 text-lg">Active Installations</div>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-lg text-center">
                <div class="text-5xl font-bold text-primary mb-2">7+</div>
                <div class="text-gray-600 text-lg">Premium Products</div>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-lg text-center">
                <div class="text-5xl font-bold text-primary mb-2">100+</div>
                <div class="text-gray-600 text-lg">5-Star Reviews</div>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-lg text-center">
                <div class="text-5xl font-bold text-primary mb-2">24/7</div>
                <div class="text-gray-600 text-lg">Support Available</div>
            </div>

        </div>
    </div>
</section>

<!-- Core Values Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Core Values</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">The principles that guide everything we do</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Value 1 -->
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-primary to-secondary rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Quality First</h3>
                <p class="text-gray-600">We never compromise on quality. Every product is thoroughly tested and refined to meet the highest standards.</p>
            </div>

            <!-- Value 2 -->
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-primary to-secondary rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Customer Focus</h3>
                <p class="text-gray-600">Our customers are at the heart of everything we do. We listen, learn, and continuously improve based on feedback.</p>
            </div>

            <!-- Value 3 -->
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-primary to-secondary rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Innovation</h3>
                <p class="text-gray-600">We embrace new technologies and ideas, constantly pushing boundaries to create better solutions.</p>
            </div>

            <!-- Value 4 -->
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-primary to-secondary rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Simplicity</h3>
                <p class="text-gray-600">Complex problems deserve simple solutions. We make powerful tools that are easy to use and understand.</p>
            </div>

            <!-- Value 5 -->
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-primary to-secondary rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Community</h3>
                <p class="text-gray-600">We're proud members of the WordPress community and believe in giving back through open source contributions.</p>
            </div>

            <!-- Value 6 -->
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-primary to-secondary rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Integrity</h3>
                <p class="text-gray-600">We operate with transparency and honesty, building trust through our actions and commitments.</p>
            </div>

        </div>
    </div>
</section>

<!-- Story Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-indigo-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Story</h2>
        </div>

        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
            <p class="text-lg text-gray-600 mb-6">
                <?php bloginfo('name'); ?> was founded with a simple vision: to create WordPress tools that make a real difference in people's businesses. What started as a small project has grown into a suite of premium plugins trusted by thousands of users worldwide.
            </p>
            <p class="text-lg text-gray-600 mb-6">
                Our journey began when we recognized the gap between complex enterprise solutions and simple but limited tools. We set out to build products that combine power with simplicity, offering professional features without the steep learning curve.
            </p>
            <p class="text-lg text-gray-600 mb-6">
                Today, we're proud to serve a diverse community of businesses, from small startups to established enterprises. Each product we create is built with the same care and attention to detail, ensuring that our users have the best tools to succeed.
            </p>
            <p class="text-lg text-gray-600">
                As we continue to grow, our commitment remains the same: to build exceptional WordPress tools that empower businesses to create amazing web experiences.
            </p>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Ready to Get Started?</h2>
        <p class="text-xl text-gray-600 mb-8">
            Explore our products and see how we can help transform your WordPress experience.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="<?php echo esc_url(home_url('/#products')); ?>" class="bg-gradient-to-r from-primary to-secondary text-white px-8 py-4 rounded-full text-lg font-semibold hover:shadow-2xl transform hover:-translate-y-1 transition duration-300">
                View Our Products
            </a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="bg-white text-primary px-8 py-4 rounded-full text-lg font-semibold border-2 border-primary hover:bg-primary hover:text-white transition duration-300">
                Contact Us
            </a>
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

