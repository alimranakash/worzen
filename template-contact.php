<?php
/**
 * Template Name: Contact Page
 *
 * This is a custom page template for the Contact page.
 * It displays contact information and a contact form.
 *
 * @package Worzen
 * @since 1.0.0
 */

get_header();
?>

<!-- Contact Hero Section -->
<section class="relative bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 py-20 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 mb-6 leading-tight">
                Get In <span class="bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">Touch</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto">
                Have a question or want to work together? We'd love to hear from you!
            </p>
        </div>
    </div>
    <!-- Decorative Elements -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-indigo-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
</section>

<!-- Contact Content Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            <!-- Contact Information -->
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Let's Talk</h2>
                <p class="text-lg text-gray-600 mb-8">
                    Whether you have a question about our products, need technical support, or just want to say hello, our team is ready to answer all your questions.
                </p>

                <!-- Contact Methods -->
                <div class="space-y-6">
                    
                    <!-- Email -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-gradient-to-r from-primary to-secondary rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">Email</h3>
                            <p class="text-gray-600">
                                <a href="mailto:<?php echo esc_attr(get_option('admin_email')); ?>" class="hover:text-primary transition duration-300">
                                    <?php echo esc_html(get_option('admin_email')); ?>
                                </a>
                            </p>
                        </div>
                    </div>

                    <!-- WordPress Profile -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-gradient-to-r from-primary to-secondary rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.158 12.786L9.46 20.625c.806.237 1.657.366 2.54.366 1.047 0 2.051-.18 2.986-.51-.024-.037-.046-.078-.065-.123l-2.762-7.572zm-5.97-3.39c0 1.197.228 2.33.642 3.375l3.522 9.635C5.89 21.03 2.89 17.705 2.89 13.66c0-2.495.868-4.79 2.298-6.264zm11.522 1.464c0-.86-.31-1.456-.574-1.918-.353-.574-.684-1.06-.684-1.634 0-.64.486-1.235 1.17-1.235.03 0 .06.003.09.008-1.24-1.137-2.89-1.833-4.712-1.833-2.44 0-4.588 1.25-5.84 3.146.164.005.318.008.45.008.73 0 1.86-.088 1.86-.088.376-.022.42.53.044.574 0 0-.378.044-.798.065l2.536 7.544 1.524-4.57-1.084-2.975c-.376-.02-.733-.064-.733-.064-.376-.022-.332-.596.043-.575 0 0 1.152.09 1.837.09.73 0 1.86-.09 1.86-.09.376-.02.42.53.043.574 0 0-.377.043-.798.065l2.518 7.49.695-2.32c.3-.96.5-1.65.5-2.244zm1.065-1.98c.03.22.047.457.047.71 0 .7-.13 1.49-.522 2.476l-2.096 6.06c2.04-1.19 3.416-3.4 3.416-5.93 0-1.19-.305-2.31-.845-3.29zM12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">WordPress.org</h3>
                            <p class="text-gray-600">
                                <a href="https://profiles.wordpress.org/al-imran-akash/" target="_blank" class="hover:text-primary transition duration-300">
                                    View Our Profile
                                </a>
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Social Media Links -->
                <div class="mt-12">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="https://profiles.wordpress.org/al-imran-akash/" target="_blank" class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.158 12.786L9.46 20.625c.806.237 1.657.366 2.54.366 1.047 0 2.051-.18 2.986-.51-.024-.037-.046-.078-.065-.123l-2.762-7.572zm-5.97-3.39c0 1.197.228 2.33.642 3.375l3.522 9.635C5.89 21.03 2.89 17.705 2.89 13.66c0-2.495.868-4.79 2.298-6.264zm11.522 1.464c0-.86-.31-1.456-.574-1.918-.353-.574-.684-1.06-.684-1.634 0-.64.486-1.235 1.17-1.235.03 0 .06.003.09.008-1.24-1.137-2.89-1.833-4.712-1.833-2.44 0-4.588 1.25-5.84 3.146.164.005.318.008.45.008.73 0 1.86-.088 1.86-.088.376-.022.42.53.044.574 0 0-.378.044-.798.065l2.536 7.544 1.524-4.57-1.084-2.975c-.376-.02-.733-.064-.733-.064-.376-.022-.332-.596.043-.575 0 0 1.152.09 1.837.09.73 0 1.86-.09 1.86-.09.376-.02.42.53.043.574 0 0-.377.043-.798.065l2.518 7.49.695-2.32c.3-.96.5-1.65.5-2.244zm1.065-1.98c.03.22.047.457.047.71 0 .7-.13 1.49-.522 2.476l-2.096 6.06c2.04-1.19 3.416-3.4 3.416-5.93 0-1.19-.305-2.31-.845-3.29zM12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/>
                            </svg>
                        </a>
                        <!-- Add more social links as needed -->
                    </div>
                </div>

                <!-- Business Hours -->
                <div class="mt-12 bg-gradient-to-br from-gray-50 to-indigo-50 rounded-2xl p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Support Hours</h3>
                    <div class="space-y-2 text-gray-600">
                        <div class="flex justify-between">
                            <span>Monday - Friday:</span>
                            <span class="font-semibold">9:00 AM - 6:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Saturday:</span>
                            <span class="font-semibold">10:00 AM - 4:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Sunday:</span>
                            <span class="font-semibold">Closed</span>
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 mt-4">* All times are in UTC timezone</p>
                </div>

            </div>

            <!-- Contact Form -->
            <div>
                <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-xl p-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Send Us a Message</h2>
                    
                    <?php
                    if (shortcode_exists('fluent_support_portal')) {
                        echo do_shortcode('[fluent_support_portal]');
                    } else {
                        ?>
                        <!-- your fallback contact form -->
                        <form class="space-y-6" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" id="worzen-contact-form">
                            <input type="hidden" name="action" value="worzen_contact_form">
                            <?php wp_nonce_field('worzen_contact_form', 'worzen_contact_nonce'); ?>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="contact_name" class="block text-sm font-semibold text-gray-700 mb-2">Your Name *</label>
                                    <input type="text" id="contact_name" name="contact_name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300" placeholder="John Doe">
                                </div>
                                <div>
                                    <label for="contact_email" class="block text-sm font-semibold text-gray-700 mb-2">Your Email *</label>
                                    <input type="email" id="contact_email" name="contact_email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300" placeholder="john@example.com">
                                </div>
                            </div>
                            
                            <div>
                                <label for="contact_subject" class="block text-sm font-semibold text-gray-700 mb-2">Subject *</label>
                                <input type="text" id="contact_subject" name="contact_subject" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300" placeholder="How can we help?">
                            </div>
                            
                            <div>
                                <label for="contact_message" class="block text-sm font-semibold text-gray-700 mb-2">Message *</label>
                                <textarea id="contact_message" name="contact_message" rows="6" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300" placeholder="Tell us about your project or question..."></textarea>
                            </div>
                            
                            <div>
                                <button type="submit" class="w-full bg-gradient-to-r from-primary to-secondary text-white px-8 py-4 rounded-full text-lg font-semibold hover:shadow-2xl transform hover:-translate-y-1 transition duration-300">
                                    Send Message
                                </button>
                            </div>
                        </form>
                        <?php 
                    } ?>


                    <p class="text-sm text-gray-500 mt-6 text-center">
                        We typically respond within 24 hours during business days.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-indigo-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
            <p class="text-xl text-gray-600">Quick answers to common questions</p>
        </div>

        <div class="space-y-6">
            
            <!-- FAQ 1 -->
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">How do I get support for your plugins?</h3>
                <p class="text-gray-600">You can get support through the WordPress.org support forums for each plugin, or contact us directly using the form above for premium support.</p>
            </div>

            <!-- FAQ 2 -->
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Do you offer custom development services?</h3>
                <p class="text-gray-600">Yes! We offer custom development services for WordPress plugins and themes. Contact us with your requirements and we'll provide a quote.</p>
            </div>

            <!-- FAQ 3 -->
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Are your plugins compatible with the latest WordPress version?</h3>
                <p class="text-gray-600">Yes, we regularly update all our plugins to ensure compatibility with the latest WordPress version and follow WordPress coding standards.</p>
            </div>

            <!-- FAQ 4 -->
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Do you offer refunds?</h3>
                <p class="text-gray-600">We stand behind our products with a 30-day money-back guarantee. If you're not satisfied, contact us for a full refund.</p>
            </div>

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

