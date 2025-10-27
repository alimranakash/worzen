<?php
/**
 * Template Name: DeleteBulk Landing Page
 * 
 * Landing page for DeleteBulk WordPress Plugin
 * 
 * @package Worzen
 */

get_header();
?>

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
    }
    .hero-gradient {
        background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 50%, #ec4899 100%);
    }
    .card-hover {
        transition: all 0.3s ease;
    }
    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
    .animate-pulse-slow {
        animation: pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
    .deletebulk-primary {
        color: #6366f1;
    }
    .deletebulk-bg-primary {
        background-color: #6366f1;
    }
    .deletebulk-bg-secondary {
        background-color: #8b5cf6;
    }
    .deletebulk-bg-accent {
        background-color: #ec4899;
    }
    .deletebulk-border-primary {
        border-color: #6366f1;
    }
</style>

<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-blue-50 via-white to-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="text-center lg:text-left">
                <div class="inline-flex items-center bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-medium mb-6">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                    </svg>
                    500+ Active Installations
                </div>
                
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 mb-6 leading-tight">
                    Clean Up Your WordPress Site in <span class="deletebulk-primary">Minutes</span>
                </h1>
                
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    DeleteBulk is the ultimate WordPress cleanup plugin. Bulk delete posts, pages, comments, users, and more with advanced filtering options. Save hours of manual work!
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="https://wordpress.org/plugins/deletebulk/" target="_blank" class="bg-gradient-to-r from-primary to-secondary text-white px-8 py-4 rounded-lg text-lg font-semibold shadow-lg hover:shadow-xl transition-all transform hover:scale-105 inline-flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        Download Free
                    </a>
                    <a href="#features" class="bg-white border-2 border-primary text-primary px-8 py-4 rounded-lg text-lg font-semibold hover:bg-indigo-50 transition-all inline-flex items-center justify-center">
                        Learn More
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                </div>
                
                <div class="mt-8 flex items-center gap-6 justify-center lg:justify-start text-sm text-gray-600">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        100% Free
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        No Coding Required
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Safe & Secure
                    </div>
                </div>
            </div>
            
            <div class="relative">
                <div class="relative z-10 bg-white rounded-2xl shadow-2xl p-8 border border-gray-200">
                    <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-200">
                        <div class="flex items-center">
                            <div class="w-10 h-10 deletebulk-bg-primary rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" clip-rule="evenodd"></path>
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2h8a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 2a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900">DeleteBulk</h3>
                                <p class="text-sm text-gray-500">Bulk Delete Tool</p>
                            </div>
                        </div>
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold">Active</span>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-red-100 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-700 font-medium">Delete Posts</span>
                            </div>
                            <span class="text-gray-500 text-sm">1,234 items</span>
                        </div>
                        
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"></path>
                                        <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-700 font-medium">Delete Comments</span>
                            </div>
                            <span class="text-gray-500 text-sm">567 items</span>
                        </div>
                        
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-700 font-medium">Delete Users</span>
                            </div>
                            <span class="text-gray-500 text-sm">89 items</span>
                        </div>
                    </div>
                    
                    <button class="w-full mt-6 deletebulk-bg-primary hover:bg-blue-700 text-white py-3 rounded-lg font-semibold transition-colors">
                        Start Cleanup
                    </button>
                </div>
                
                <!-- Floating elements -->
                <div class="absolute -top-6 -right-6 w-24 h-24 bg-blue-200 rounded-full opacity-50 animate-pulse-slow"></div>
                <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-blue-100 rounded-full opacity-50 animate-float"></div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-white border-y border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-4xl font-bold deletebulk-primary mb-2">500+</div>
                <div class="text-gray-600">Active Installations</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold deletebulk-primary mb-2">5.0</div>
                <div class="text-gray-600">Rating</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold deletebulk-primary mb-2">10K+</div>
                <div class="text-gray-600">Items Deleted</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold deletebulk-primary mb-2">100%</div>
                <div class="text-gray-600">Free Forever</div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Powerful Features</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Everything you need to clean up your WordPress site efficiently and safely</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg card-hover">
                <div class="w-12 h-12 bg-gradient-to-r from-primary to-secondary rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Bulk Delete Posts</h3>
                <p class="text-gray-600">Delete multiple posts at once with advanced filtering by category, status, date range, and more.</p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg card-hover">
                <div class="w-12 h-12 bg-gradient-to-r from-primary to-secondary rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Clean Comments</h3>
                <p class="text-gray-600">Remove spam, pending, or approved comments in bulk. Keep your comment section clean and organized.</p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg card-hover">
                <div class="w-12 h-12 bg-gradient-to-r from-primary to-secondary rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Manage Users</h3>
                <p class="text-gray-600">Bulk delete users by role, registration date, or activity status. Perfect for cleaning up spam accounts.</p>
            </div>

            <!-- Feature 4 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg card-hover">
                <div class="w-12 h-12 bg-gradient-to-r from-primary to-secondary rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Delete Pages</h3>
                <p class="text-gray-600">Clean up unused pages quickly. Filter by status, parent page, template, and more.</p>
            </div>

            <!-- Feature 5 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg card-hover">
                <div class="w-12 h-12 bg-gradient-to-r from-primary to-secondary rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Advanced Filters</h3>
                <p class="text-gray-600">Use powerful filters to target exactly what you want to delete. Date ranges, categories, tags, and more.</p>
            </div>

            <!-- Feature 6 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg card-hover">
                <div class="w-12 h-12 bg-gradient-to-r from-primary to-secondary rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Safe & Secure</h3>
                <p class="text-gray-600">Built with WordPress best practices. Preview before deleting and optional backup integration.</p>
            </div>
        </div>
    </div>
</section>

<!-- Safety Section -->
<section id="safety" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Safety First</h2>
                <p class="text-xl text-gray-600 mb-8">We understand that deleting data can be scary. That's why DeleteBulk is built with multiple safety features to protect your content.</p>

                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Preview Before Delete</h3>
                            <p class="text-gray-600">See exactly what will be deleted before confirming. No surprises.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Confirmation Required</h3>
                            <p class="text-gray-600">Double confirmation prevents accidental deletions.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Activity Logs</h3>
                            <p class="text-gray-600">Track all deletion activities with detailed logs.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Backup Integration</h3>
                            <p class="text-gray-600">Works with popular backup plugins for extra safety.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-2xl">
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="flex items-center justify-between mb-4 pb-4 border-b border-gray-200">
                        <h3 class="font-bold text-gray-900">Deletion Preview</h3>
                        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-semibold">Preview Mode</span>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between p-3 bg-red-50 rounded-lg border border-red-200">
                            <span class="text-gray-700">Draft Posts</span>
                            <span class="font-semibold text-red-600">234 items</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-red-50 rounded-lg border border-red-200">
                            <span class="text-gray-700">Spam Comments</span>
                            <span class="font-semibold text-red-600">1,456 items</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-red-50 rounded-lg border border-red-200">
                            <span class="text-gray-700">Inactive Users</span>
                            <span class="font-semibold text-red-600">89 items</span>
                        </div>
                    </div>
                    <div class="mt-6 pt-4 border-t border-gray-200">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-gray-700 font-medium">Total Items to Delete:</span>
                            <span class="text-2xl font-bold text-red-600">1,779</span>
                        </div>
                        <button class="w-full bg-red-600 hover:bg-red-700 text-white py-3 rounded-lg font-semibold transition-colors">
                            Confirm Deletion
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Choose Your DeleteBulk Version</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Start with our free version or upgrade to Pro for advanced features and automation.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <!-- Free Version -->
            <div class="bg-white border border-gray-200 rounded-2xl p-8 card-hover">
                <div class="text-center">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">DeleteBulk Free</h3>
                    <p class="text-gray-600 mb-6">Perfect for personal sites</p>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-gray-900">Free</span>
                        <span class="text-gray-600">Forever</span>
                    </div>
                    <a href="https://wordpress.org/plugins/deletebulk/" target="_blank" class="w-full bg-primary hover:bg-primary/90 text-white py-3 rounded-lg font-semibold transition-colors mb-8 inline-block">
                        Download from WordPress.org
                    </a>
                </div>
                <ul class="space-y-4">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600">Bulk delete posts & pages</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600">Comment cleanup</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600">Basic media cleanup</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600">Safety confirmations</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600">Community support</span>
                    </li>
                </ul>
            </div>

            <!-- Pro Version -->
            <div class="bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500 text-white rounded-2xl p-8 card-hover relative">
                <div class="absolute top-4 right-4 bg-white text-indigo-600 text-xs font-semibold px-3 py-1 rounded-full">
                    Most Popular
                </div>
                <div class="text-center">
                    <h3 class="text-xl font-semibold mb-2">DeleteBulk Pro</h3>
                    <p class="text-indigo-100 mb-6">For agencies & power users</p>
                    <div class="mb-6">
                        <span class="text-4xl font-bold">$49</span>
                        <span class="text-indigo-100">/year</span>
                    </div>
                    <button class="w-full bg-white text-indigo-600 hover:bg-gray-50 py-3 rounded-lg font-semibold transition-colors mb-8">
                        Upgrade to Pro
                    </button>
                </div>
                <ul class="space-y-4">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Everything in Free +</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Scheduled automated cleanup</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Advanced analytics & reports</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Multisite network support</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Advanced backup & recovery</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Priority email support</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>White-label options</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Clean Up Your WordPress Site?</h2>
        <p class="text-xl text-indigo-100 mb-8">Join hundreds of WordPress users who trust DeleteBulk for their site cleanup needs.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://wordpress.org/plugins/deletebulk/" target="_blank" class="bg-white text-indigo-600 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-indigo-50 transition-all transform hover:scale-105 inline-flex items-center justify-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                Download Free Plugin
            </a>
            <a href="https://wordpress.org/support/plugin/deletebulk/" target="_blank" class="bg-indigo-700 hover:bg-indigo-800 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all inline-flex items-center justify-center border-2 border-white/20">
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

