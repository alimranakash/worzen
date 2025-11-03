<?php
/**
 * Template Name: Suffix Master Landing Page
 * 
 * Landing page for Suffix Master Pro WordPress Plugin
 * 
 * @package Worzen
 */

get_header();
?>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .card-hover {
        transition: all 0.3s ease;
    }
    .card-hover:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }
    .gradient-text {
        background: linear-gradient(135deg, #6366f1, #8b5cf6, #ec4899);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    .dashboard-shadow {
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    .animate-fade-in {
        animation: fadeIn 0.8s ease-out forwards;
    }
    .feature-icon-gradient {
        background: linear-gradient(135deg, #8b5cf6, #ec4899);
    }
</style>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-purple-50 via-white to-pink-50 pt-20 pb-32 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-purple-200/30 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-pink-200/30 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="text-center lg:text-left animate-fade-in">
                <div class="inline-flex items-center bg-purple-50 text-purple-700 px-4 py-2 rounded-full text-sm font-medium mb-6">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    WordPress Plugin • 100+ Active Installations
                </div>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-gray-900 leading-tight mb-8">
                    Master Your
                    <span class="gradient-text">Product Suffixes</span>
                </h1>
                <p class="text-xl text-gray-600 mb-10 leading-relaxed max-w-2xl">
                    The ultimate WooCommerce suffix management plugin. Add custom suffixes to product titles, SKUs, and prices with advanced rules and automation.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-12">
                    <a href="https://wordpress.org/plugins/suffix-master/" target="_blank" class="bg-gradient-to-r from-purple-600 to-pink-600 text-white px-8 py-4 rounded-xl text-lg font-semibold hover:from-purple-700 hover:to-pink-700 transition-all transform hover:scale-105 shadow-xl">
                        Download Free Plugin
                    </a>
                    <a href="#demo" class="border-2 border-gray-300 text-gray-700 px-8 py-4 rounded-xl text-lg font-semibold hover:border-purple-600 hover:text-purple-600 transition-all">
                        View Live Demo
                    </a>
                </div>

                <!-- WordPress Stats -->
                <div class="animate-fade-in" style="animation-delay: 0.3s;">
                    <p class="text-sm text-gray-500 mb-6">Trusted by WooCommerce store owners worldwide</p>
                    <div class="flex flex-wrap justify-center lg:justify-start items-center gap-8">
                        <div class="flex items-center space-x-2 text-gray-600">
                            <i class="fas fa-check-circle text-purple-600"></i>
                            <span class="font-medium">WordPress 5.0+</span>
                        </div>
                        <div class="flex items-center space-x-2 text-gray-600">
                            <i class="fas fa-check-circle text-pink-600"></i>
                            <span class="font-medium">WooCommerce 5.0+</span>
                        </div>
                        <div class="flex items-center space-x-2 text-gray-600">
                            <i class="fas fa-check-circle text-green-600"></i>
                            <span class="font-medium">PHP 7.4+</span>
                        </div>
                        <div class="flex items-center space-x-2 text-gray-600">
                            <i class="fas fa-bolt text-yellow-600"></i>
                            <span class="font-medium">Lightning Fast</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative animate-fade-in" style="animation-delay: 0.5s;">
                <!-- WordPress Admin Dashboard -->
                <div class="relative bg-white rounded-3xl dashboard-shadow p-8 animate-float">
                    <!-- WordPress Admin Header -->
                    <div class="flex items-center justify-between mb-8 pb-4 border-b border-gray-200">
                        <div class="flex items-center space-x-4">
                            <div class="w-8 h-8 bg-gradient-to-r from-purple-600 to-pink-600 rounded flex items-center justify-center">
                                <i class="fas fa-tag text-white text-sm"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900">Suffix Master Pro</h3>
                                <p class="text-sm text-gray-500">WordPress Admin Dashboard</p>
                            </div>
                        </div>
                        <div class="text-sm text-gray-500">Version 1.5.0</div>
                    </div>

                    <!-- Suffix Rules Overview -->
                    <div class="bg-gradient-to-r from-purple-500 to-pink-600 rounded-2xl p-8 mb-8">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <h3 class="text-white text-2xl font-bold mb-2">Active Suffix Rules</h3>
                                <p class="text-purple-200">Automated suffix management</p>
                            </div>
                            <div class="text-right">
                                <div class="text-white text-3xl font-bold">24</div>
                                <div class="text-green-300 text-sm font-medium">↗ +6 this week</div>
                            </div>
                        </div>

                        <!-- Rule Types Chart -->
                        <div class="grid grid-cols-3 gap-4">
                            <div class="bg-white/20 rounded-lg p-3 text-center">
                                <div class="text-white text-2xl font-bold">12</div>
                                <div class="text-purple-200 text-xs">Title Suffixes</div>
                            </div>
                            <div class="bg-white/20 rounded-lg p-3 text-center">
                                <div class="text-white text-2xl font-bold">8</div>
                                <div class="text-purple-200 text-xs">SKU Suffixes</div>
                            </div>
                            <div class="bg-white/20 rounded-lg p-3 text-center">
                                <div class="text-white text-2xl font-bold">4</div>
                                <div class="text-purple-200 text-xs">Price Suffixes</div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Suffix Rules -->
                    <div class="bg-gray-50 rounded-2xl p-6 mb-6">
                        <h4 class="text-lg font-bold text-gray-900 mb-4">Recent Suffix Rules</h4>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center py-2">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-purple-100 rounded flex items-center justify-center">
                                        <i class="fas fa-heading text-purple-600 text-sm"></i>
                                    </div>
                                    <span class="font-medium text-gray-900">Add "Pro" to Premium Products</span>
                                </div>
                                <span class="text-green-600 font-bold text-sm">Active</span>
                            </div>
                            <div class="flex justify-between items-center py-2">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-pink-100 rounded flex items-center justify-center">
                                        <i class="fas fa-barcode text-pink-600 text-sm"></i>
                                    </div>
                                    <span class="font-medium text-gray-900">SKU Prefix "WC-"</span>
                                </div>
                                <span class="text-green-600 font-bold text-sm">Active</span>
                            </div>
                            <div class="flex justify-between items-center py-2">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-blue-100 rounded flex items-center justify-center">
                                        <i class="fas fa-dollar-sign text-blue-600 text-sm"></i>
                                    </div>
                                    <span class="font-medium text-gray-900">Add "per item" to Prices</span>
                                </div>
                                <span class="text-green-600 font-bold text-sm">Active</span>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Stats -->
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-white border-2 border-gray-100 rounded-2xl p-6">
                            <div class="text-3xl font-bold text-gray-900 mb-2">156</div>
                            <div class="text-gray-500 mb-2">Products Modified</div>
                            <div class="text-purple-500 text-sm font-semibold">All WooCommerce products</div>
                        </div>
                        <div class="bg-white border-2 border-gray-100 rounded-2xl p-6">
                            <div class="text-3xl font-bold text-gray-900 mb-2">100%</div>
                            <div class="text-gray-500 mb-2">Automation</div>
                            <div class="text-green-500 text-sm font-semibold">Set and forget</div>
                        </div>
                    </div>
                </div>

                <!-- WordPress Floating Cards -->
                <div class="absolute -top-6 -right-6 bg-white rounded-2xl p-4 shadow-2xl animate-float" style="animation-delay: 1s;">
                    <div class="flex items-center space-x-3">
                        <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                        <span class="text-sm font-medium text-gray-700">Auto-Apply Rules</span>
                    </div>
                </div>

                <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl p-4 shadow-2xl animate-float" style="animation-delay: 2s;">
                    <div class="text-2xl font-bold text-gray-900">100+</div>
                    <div class="text-sm text-gray-500">Active Installs</div>
                </div>

                <!-- Background Decorations -->
                <div class="absolute -top-8 -right-8 w-24 h-24 bg-purple-200/30 rounded-full animate-pulse"></div>
                <div class="absolute -bottom-12 -left-12 w-32 h-32 bg-pink-200/30 rounded-full animate-pulse"></div>
            </div>
        </div>
    </div>
</section>

<!-- Plugin Features Section -->
<section id="features" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Why Choose Suffix Master Pro?</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                The most powerful WooCommerce suffix management plugin with advanced automation and customization features
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100 card-hover">
                <div class="w-16 h-16 feature-icon-gradient rounded-2xl flex items-center justify-center mb-8">
                    <i class="fas fa-heading text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Product Title Suffixes</h3>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Automatically add custom suffixes to product titles based on categories, tags, or custom rules.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100 card-hover">
                <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-8">
                    <i class="fas fa-barcode text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">SKU Management</h3>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Add prefixes and suffixes to product SKUs automatically with smart pattern matching and bulk operations.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100 card-hover">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-600 rounded-2xl flex items-center justify-center mb-8">
                    <i class="fas fa-dollar-sign text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Price Suffixes</h3>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Add custom text after prices like "per item", "per month", or any custom suffix to clarify pricing.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100 card-hover">
                <div class="w-16 h-16 feature-icon-gradient rounded-2xl flex items-center justify-center mb-8">
                    <i class="fas fa-magic text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Smart Automation</h3>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Set rules once and let the plugin automatically apply suffixes to new and existing products.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100 card-hover">
                <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-600 rounded-2xl flex items-center justify-center mb-8">
                    <i class="fas fa-filter text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Advanced Filtering</h3>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Apply suffixes based on categories, tags, product types, stock status, and custom conditions.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100 card-hover">
                <div class="w-16 h-16 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mb-8">
                    <i class="fas fa-bolt text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Bulk Operations</h3>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Apply or remove suffixes from hundreds of products at once with powerful bulk editing tools.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Simple WordPress Plugin Pricing</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                One-time purchase with lifetime updates and premium support included
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <!-- Single Site License -->
            <div class="card-hover bg-white p-8 rounded-2xl border border-gray-200">
                <div class="text-center mb-8">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-globe text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Single Site License</h3>
                    <div class="text-4xl font-bold text-gray-900 mb-2">$49<span class="text-lg text-gray-500"> once</span></div>
                    <p class="text-gray-600">Perfect for individual websites</p>
                </div>

                <ul class="space-y-4 mb-8">
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500"></i>
                        <span class="text-gray-700">Use on 1 WordPress site</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500"></i>
                        <span class="text-gray-700">All plugin features included</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500"></i>
                        <span class="text-gray-700">1 year of updates</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500"></i>
                        <span class="text-gray-700">Email support</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500"></i>
                        <span class="text-gray-700">WooCommerce integration</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500"></i>
                        <span class="text-gray-700">Unlimited suffix rules</span>
                    </li>
                </ul>

                <button class="w-full bg-gray-100 text-gray-700 py-3 rounded-lg font-semibold hover:bg-gray-200 transition-colors">
                    <i class="fas fa-download mr-2"></i>
                    Purchase License
                </button>
            </div>

            <!-- Developer License -->
            <div class="card-hover bg-white p-8 rounded-2xl border-2 border-primary relative">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                    <span class="bg-primary text-white px-4 py-1 rounded-full text-sm font-medium">Most Popular</span>
                </div>

                <div class="text-center mb-8">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-code text-primary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Developer License</h3>
                    <div class="text-4xl font-bold text-gray-900 mb-2">$149<span class="text-lg text-gray-500"> once</span></div>
                    <p class="text-gray-600">For agencies & developers</p>
                </div>

                <ul class="space-y-4 mb-8">
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500"></i>
                        <span class="text-gray-700">Use on unlimited sites</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500"></i>
                        <span class="text-gray-700">All plugin features included</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500"></i>
                        <span class="text-gray-700">Lifetime updates</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500"></i>
                        <span class="text-gray-700">Priority email support</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500"></i>
                        <span class="text-gray-700">White-label options</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-check text-green-500"></i>
                        <span class="text-gray-700">Custom development support</span>
                    </li>
                </ul>

                <button class="w-full bg-primary text-white py-3 rounded-lg font-semibold hover:bg-primary/90 transition-colors">
                    <i class="fas fa-download mr-2"></i>
                    Purchase License
                </button>
            </div>
        </div>

        <div class="text-center mt-12">
            <p class="text-gray-600 mb-4">All purchases include 30-day money-back guarantee</p>
            <div class="flex justify-center items-center space-x-8 text-sm text-gray-500">
                <div class="flex items-center">
                    <i class="fas fa-shield-alt text-green-500 mr-2"></i>
                    Secure payment
                </div>
                <div class="flex items-center">
                    <i class="fas fa-sync text-green-500 mr-2"></i>
                    30-day refund
                </div>
                <div class="flex items-center">
                    <i class="fas fa-headset text-green-500 mr-2"></i>
                    Premium support
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section id="demo" class="py-20 bg-gradient-to-br from-purple-600 via-pink-600 to-purple-700 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Master Your Product Suffixes?</h2>
        <p class="text-xl text-purple-100 mb-8">Join hundreds of WooCommerce store owners who trust Suffix Master Pro for their product management needs.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://wordpress.org/plugins/suffix-master/" target="_blank" class="bg-white text-purple-600 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-purple-50 transition-all transform hover:scale-105 inline-flex items-center justify-center">
                <i class="fas fa-download mr-2"></i>
                Download Free Plugin
            </a>
            <a href="https://wordpress.org/support/plugin/suffix-master/" target="_blank" class="bg-purple-700 hover:bg-purple-800 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all inline-flex items-center justify-center border-2 border-white/20">
                View Documentation
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
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>

<?php
get_footer();
?>
