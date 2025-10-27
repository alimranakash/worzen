<?php
/**
 * Template Name: Product View Count Landing Page
 * 
 * Landing page for Product View Count WordPress Plugin
 * 
 * @package Worzen
 */

get_header();
?>

<style>
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes slideUp {
        from { opacity: 0; transform: translateY(50px); }
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
        background: linear-gradient(135deg, #6366f1, #8b5cf6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    .dashboard-shadow {
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25), 0 0 0 1px rgba(255, 255, 255, 0.05);
    }
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    .animate-fade-in {
        animation: fadeIn 0.8s ease-out forwards;
    }
</style>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-indigo-50 via-white to-purple-50 pt-20 pb-32 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-primary/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-secondary/10 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="text-center lg:text-left animate-fade-in">
                <div class="inline-flex items-center bg-blue-50 text-blue-700 px-4 py-2 rounded-full text-sm font-medium mb-6">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    WordPress Plugin • 200+ Active Installations
                </div>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-gray-900 leading-tight mb-8">
                    Track WooCommerce
                    <span class="gradient-text">Product Views</span>
                </h1>
                <p class="text-xl text-gray-600 mb-10 leading-relaxed max-w-2xl">
                    Understand customer behavior with detailed product view analytics.
                    Real-time tracking, bot detection, and comprehensive reporting for your WooCommerce store.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-12">
                    <a href="https://wordpress.org/plugins/product-view-count/" target="_blank" class="bg-primary text-white px-8 py-4 rounded-xl text-lg font-semibold hover:bg-indigo-700 transition-all transform hover:scale-105 shadow-xl">
                        Download Free Plugin
                    </a>
                    <a href="#demo" class="border-2 border-gray-300 text-gray-700 px-8 py-4 rounded-xl text-lg font-semibold hover:border-primary hover:text-primary transition-all">
                        View Live Demo
                    </a>
                </div>

                <!-- WordPress Stats -->
                <div class="animate-fade-in" style="animation-delay: 0.3s;">
                    <p class="text-sm text-gray-500 mb-6">Trusted by WordPress store owners worldwide</p>
                    <div class="flex flex-wrap justify-center lg:justify-start items-center gap-8">
                        <div class="flex items-center space-x-2 text-gray-600">
                            <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                            </svg>
                            <span class="font-medium">WordPress 5.0+</span>
                        </div>
                        <div class="flex items-center space-x-2 text-gray-600">
                            <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                            </svg>
                            <span class="font-medium">WooCommerce 5.0+</span>
                        </div>
                        <div class="flex items-center space-x-2 text-gray-600">
                            <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                            </svg>
                            <span class="font-medium">PHP 7.4+</span>
                        </div>
                        <div class="flex items-center space-x-2 text-gray-600">
                            <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                            </svg>
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
                            <div class="w-8 h-8 bg-blue-600 rounded flex items-center justify-center">
                                <span class="text-white font-bold text-sm">W</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900">Product View Count</h3>
                                <p class="text-sm text-gray-500">WordPress Admin Dashboard</p>
                            </div>
                        </div>
                        <div class="text-sm text-gray-500">Version 2.0.0</div>
                    </div>

                    <!-- Analytics Overview -->
                    <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl p-8 mb-8">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <h3 class="text-white text-2xl font-bold mb-2">Product Views Today</h3>
                                <p class="text-blue-200">Real-time tracking active</p>
                            </div>
                            <div class="text-right">
                                <div class="text-white text-3xl font-bold">1,247</div>
                                <div class="text-green-300 text-sm font-medium">↗ +18.3%</div>
                            </div>
                        </div>

                        <!-- View Chart -->
                        <div class="flex items-end justify-between space-x-2 h-24">
                            <div class="bg-white/30 w-6 h-12 rounded-t-lg"></div>
                            <div class="bg-white/50 w-6 h-18 rounded-t-lg"></div>
                            <div class="bg-white/70 w-6 h-22 rounded-t-lg"></div>
                            <div class="bg-white w-6 h-24 rounded-t-lg"></div>
                            <div class="bg-white/80 w-6 h-20 rounded-t-lg"></div>
                            <div class="bg-white/90 w-6 h-16 rounded-t-lg"></div>
                            <div class="bg-white/60 w-6 h-14 rounded-t-lg"></div>
                            <div class="bg-white/40 w-6 h-10 rounded-t-lg"></div>
                        </div>
                    </div>

                    <!-- Top Products Table -->
                    <div class="bg-gray-50 rounded-2xl p-6 mb-6">
                        <h4 class="text-lg font-bold text-gray-900 mb-4">Top Viewed Products</h4>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center py-2">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-blue-100 rounded flex items-center justify-center">
                                        <span class="text-blue-600 font-bold text-sm">1</span>
                                    </div>
                                    <span class="font-medium text-gray-900">Premium Headphones</span>
                                </div>
                                <span class="text-primary font-bold">847 views</span>
                            </div>
                            <div class="flex justify-between items-center py-2">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-purple-100 rounded flex items-center justify-center">
                                        <span class="text-purple-600 font-bold text-sm">2</span>
                                    </div>
                                    <span class="font-medium text-gray-900">Wireless Mouse</span>
                                </div>
                                <span class="text-secondary font-bold">623 views</span>
                            </div>
                            <div class="flex justify-between items-center py-2">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-green-100 rounded flex items-center justify-center">
                                        <span class="text-green-600 font-bold text-sm">3</span>
                                    </div>
                                    <span class="font-medium text-gray-900">Gaming Keyboard</span>
                                </div>
                                <span class="text-green-600 font-bold">456 views</span>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Stats -->
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-white border-2 border-gray-100 rounded-2xl p-6">
                            <div class="text-3xl font-bold text-gray-900 mb-2">89</div>
                            <div class="text-gray-500 mb-2">Products Tracked</div>
                            <div class="text-blue-500 text-sm font-semibold">All WooCommerce products</div>
                        </div>
                        <div class="bg-white border-2 border-gray-100 rounded-2xl p-6">
                            <div class="text-3xl font-bold text-gray-900 mb-2">99.2%</div>
                            <div class="text-gray-500 mb-2">Bot Detection</div>
                            <div class="text-green-500 text-sm font-semibold">Real visitors only</div>
                        </div>
                    </div>
                </div>

                <!-- WordPress Floating Cards -->
                <div class="absolute -top-6 -right-6 bg-white rounded-2xl p-4 shadow-2xl animate-float" style="animation-delay: 1s;">
                    <div class="flex items-center space-x-3">
                        <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                        <span class="text-sm font-medium text-gray-700">Real-time Tracking</span>
                    </div>
                </div>

                <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl p-4 shadow-2xl animate-float" style="animation-delay: 2s;">
                    <div class="text-2xl font-bold text-gray-900">200+</div>
                    <div class="text-sm text-gray-500">Active Installs</div>
                </div>

                <!-- Background Decorations -->
                <div class="absolute -top-8 -right-8 w-24 h-24 bg-accent/20 rounded-full animate-pulse"></div>
                <div class="absolute -bottom-12 -left-12 w-32 h-32 bg-secondary/10 rounded-full animate-pulse"></div>
            </div>
        </div>
    </div>
</section>

<!-- Plugin Features Section -->
<section id="features" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Why Choose Product View Count?</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                The most comprehensive WooCommerce product analytics plugin with advanced tracking and reporting features
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100 card-hover">
                <div class="w-16 h-16 bg-gradient-to-r from-primary to-secondary rounded-2xl flex items-center justify-center mb-8">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Real-time View Tracking</h3>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Track every product view in real-time with accurate visitor counting and detailed analytics for your WooCommerce store.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100 card-hover">
                <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-8">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Smart Bot Detection</h3>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Advanced bot filtering ensures only real customer views are counted, giving you accurate analytics data.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100 card-hover">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-600 rounded-2xl flex items-center justify-center mb-8">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">WordPress Dashboard</h3>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Beautiful analytics dashboard integrated directly into your WordPress admin with charts, reports, and insights.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100 card-hover">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-8">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Flexible Display Options</h3>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Show view counts on product pages, shop listings, and admin areas with customizable display formats.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100 card-hover">
                <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-600 rounded-2xl flex items-center justify-center mb-8">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Export & Reports</h3>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Export view data to CSV, generate detailed reports, and analyze customer behavior patterns over time.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100 card-hover">
                <div class="w-16 h-16 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mb-8">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Lightning Fast Performance</h3>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Optimized database queries and caching ensure zero impact on your store's loading speed and performance.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Free Plugin, Pro Features Available</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Start with our free WordPress plugin and upgrade to Pro for advanced analytics and reporting features.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 max-w-5xl mx-auto">
            <!-- Free Version -->
            <div class="bg-white rounded-3xl p-8 shadow-xl border-2 border-gray-100 card-hover">
                <div class="text-center mb-8">
                    <div class="inline-flex items-center bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium mb-4">
                        WordPress.org
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Free Version</h3>
                    <div class="text-6xl font-bold text-gray-900 mb-2">$0</div>
                    <div class="text-gray-600">Forever free • 200+ active installations</div>
                </div>

                <ul class="space-y-4 mb-8">
                    <li class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">Real-time product view tracking</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">Basic analytics dashboard</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">View count display options</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">Bot detection & filtering</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">WordPress.org support forum</span>
                    </li>
                </ul>

                <a href="https://wordpress.org/plugins/product-view-count/" target="_blank" class="w-full bg-primary text-white py-4 rounded-xl font-semibold hover:bg-indigo-700 transition-all transform hover:scale-105 shadow-lg inline-block text-center">
                    Download Free Plugin
                </a>
            </div>

            <!-- Pro Version -->
            <div class="bg-white rounded-3xl p-8 shadow-xl border-2 border-primary card-hover relative">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                    <span class="bg-gradient-to-r from-primary to-secondary text-white px-6 py-2 rounded-full text-sm font-semibold">Coming Soon</span>
                </div>

                <div class="text-center mb-8">
                    <div class="inline-flex items-center bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-medium mb-4">
                        Premium Plugin
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Pro Version</h3>
                    <div class="text-6xl font-bold text-gray-900 mb-2">$49</div>
                    <div class="text-gray-600">one-time purchase • lifetime updates</div>
                </div>

                <ul class="space-y-4 mb-8">
                    <li class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">Everything in Free version</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">Advanced analytics dashboard</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">Geographic visitor tracking</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">Export data to CSV/Excel</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700">Priority email support</span>
                    </li>
                </ul>

                <button class="w-full bg-gradient-to-r from-primary to-secondary text-white py-4 rounded-xl font-semibold hover:opacity-90 transition-all transform hover:scale-105 shadow-lg">
                    Get Notified When Available
                </button>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section id="demo" class="py-20 bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Track Your Product Views?</h2>
        <p class="text-xl text-indigo-100 mb-8">Join hundreds of WooCommerce store owners who trust Product View Count for their analytics needs.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://wordpress.org/plugins/product-view-count/" target="_blank" class="bg-white text-indigo-600 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-indigo-50 transition-all transform hover:scale-105 inline-flex items-center justify-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                Download Free Plugin
            </a>
            <a href="https://wordpress.org/support/plugin/product-view-count/" target="_blank" class="bg-indigo-700 hover:bg-indigo-800 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all inline-flex items-center justify-center border-2 border-white/20">
                View Documentation
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

