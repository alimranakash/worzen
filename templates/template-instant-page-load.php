<?php
/**
 * Template Name: Instant Page Load Landing Page
 * Template Post Type: page
 *
 * Landing page for Instant Page Load – WordPress SPA Plugin
 * Integrated with Worzen theme header and footer
 *
 * @package Worzen
 * @version 2.0.0
 */

get_header();
?>

<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');

        * {
            font-family: 'Inter', sans-serif;
        }

        :root {
            --primary: #4c3f93;
            --primary-dark: #3d3275;
            --secondary: #6c5bb5;
            --accent: #8b7bc7;
        }

        body {
            overflow-x: hidden;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #4c3f93 0%, #6c5bb5 100%);
        }

        .gradient-text {
            background: linear-gradient(135deg, #4c3f93 0%, #6c5bb5 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-gradient {
            background: linear-gradient(135deg, #2a1f4d 0%, #3d3275 50%, #4c3f93 100%);
        }

        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(76, 63, 147, 0.2);
        }

        .btn-primary {
            background: linear-gradient(135deg, #4c3f93 0%, #6c5bb5 100%);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #6c5bb5 0%, #4c3f93 100%);
            transition: left 0.3s ease;
        }

        .btn-primary:hover::before {
            left: 0;
        }

        .btn-primary span {
            position: relative;
            z-index: 1;
        }

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .pulse-ring {
            animation: pulse-ring 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        @keyframes pulse-ring {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.5;
                transform: scale(1.1);
            }
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            line-height: 1;
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            background: linear-gradient(135deg, #4c3f93 0%, #6c5bb5 100%);
            color: white;
            font-size: 24px;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            border-radius: 16px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .pricing-card {
            position: relative;
            overflow: hidden;
        }

        .pricing-card.featured {
            border: 2px solid #4c3f93;
            transform: scale(1.05);
        }

        .badge {
            position: absolute;
            top: 20px;
            right: -35px;
            background: linear-gradient(135deg, #ec4899 0%, #f43f5e 100%);
            color: white;
            padding: 5px 40px;
            transform: rotate(45deg);
            font-size: 12px;
            font-weight: 700;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .faq-item {
            border-bottom: 1px solid #e5e7eb;
            cursor: pointer;
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .faq-item.active .faq-answer {
            max-height: 500px;
        }

        .faq-item.active .faq-icon {
            transform: rotate(180deg);
        }

        .faq-icon {
            transition: transform 0.3s ease;
        }

        .testimonial-card {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .stars {
            color: #fbbf24;
        }

        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateX(-50%) translateY(0);
            }
            50% {
                transform: translateX(-50%) translateY(-10px);
            }
        }

        .comparison-table {
            overflow-x: auto;
        }

        .check-icon {
            color: #10b981;
            font-size: 20px;
        }

        .cross-icon {
            color: #ef4444;
            font-size: 20px;
        }
    </style>

	<!-- Hero Section -->
    <section class="hero-gradient pt-32 pb-20 px-6 relative overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-white fade-in">
                    <div class="inline-block bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full mb-6">
                        <span class="text-sm font-semibold">🚀 Transform WordPress into a React-like SPA</span>
                    </div>
                    <h1 class="text-5xl md:text-6xl font-black mb-6 leading-tight">
                        Lightning-Fast Page Loads<br/>
                        <span class="text-purple-300">Without Coding</span>
                    </h1>
                    <p class="text-xl mb-8 text-gray-200 leading-relaxed">
                        Give your WordPress site instant page transitions and app-style navigation. Boost LCP by 40%+ and delight your visitors with SPA-like speed.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 mb-8">
                        <a href="#pricing" class="btn-primary text-white px-8 py-4 rounded-full font-bold text-lg inline-flex items-center justify-center">
                            <span class="flex items-center">
                                Get Started Now <i class="fas fa-arrow-right ml-2"></i>
                            </span>
                        </a>
                        <a href="#demo" class="bg-white/10 backdrop-blur-sm text-white px-8 py-4 rounded-full font-bold text-lg inline-flex items-center justify-center hover:bg-white/20 transition">
                            <i class="fas fa-play mr-2"></i> Watch Demo
                        </a>
                    </div>
                    <div class="flex items-center space-x-6 text-sm">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-400 mr-2"></i>
                            <span>No Coding Required</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-400 mr-2"></i>
                            <span>8KB Lightweight</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-400 mr-2"></i>
                            <span>Works with Any Theme</span>
                        </div>
                    </div>
                </div>
                <div class="fade-in floating">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-purple-400 rounded-3xl blur-3xl opacity-30"></div>
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 800 600'%3E%3Crect fill='%23ffffff' width='800' height='600' rx='20'/%3E%3Cg opacity='0.1'%3E%3Crect x='40' y='40' width='720' height='80' rx='10' fill='%234c3f93'/%3E%3Crect x='40' y='140' width='340' height='400' rx='10' fill='%234c3f93'/%3E%3Crect x='400' y='140' width='360' height='200' rx='10' fill='%234c3f93'/%3E%3Crect x='400' y='360' width='360' height='180' rx='10' fill='%234c3f93'/%3E%3C/g%3E%3Ctext x='400' y='300' font-family='Arial' font-size='48' fill='%234c3f93' text-anchor='middle' font-weight='bold'%3E⚡ SPA Speed%3C/text%3E%3C/svg%3E" alt="Dashboard Preview" class="relative rounded-3xl shadow-2xl">
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <i class="fas fa-chevron-down text-white text-2xl"></i>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="fade-in">
                    <div class="stat-number gradient-text">40%+</div>
                    <p class="text-gray-600 font-medium mt-2">Faster LCP</p>
                </div>
                <div class="fade-in">
                    <div class="stat-number gradient-text">8KB</div>
                    <p class="text-gray-600 font-medium mt-2">Lightweight</p>
                </div>
                <div class="fade-in">
                    <div class="stat-number gradient-text">0</div>
                    <p class="text-gray-600 font-medium mt-2">Coding Required</p>
                </div>
                <div class="fade-in">
                    <div class="stat-number gradient-text">100%</div>
                    <p class="text-gray-600 font-medium mt-2">Theme Compatible</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Demo Video Section -->
    <section id="demo" class="py-20 bg-gray-50">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center mb-12 fade-in">
                <h2 class="text-4xl md:text-5xl font-black mb-4">See It In Action</h2>
                <p class="text-xl text-gray-600">Watch how Instant Page Load transforms your WordPress site</p>
            </div>
            <div class="video-container fade-in">
                <iframe src="https://www.youtube.com/embed/lsYrz2kCyEY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-4xl md:text-5xl font-black mb-4">Powerful Features</h2>
                <p class="text-xl text-gray-600">Everything you need for lightning-fast page transitions</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="card-hover bg-white p-8 rounded-2xl shadow-lg fade-in">
                    <div class="feature-icon mb-6">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">SPA-Like Behavior</h3>
                    <p class="text-gray-600 leading-relaxed">Transform your WordPress site into a Single Page Application. No full page reloads, just smooth, instant transitions like React or Vue apps.</p>
                </div>
                <div class="card-hover bg-white p-8 rounded-2xl shadow-lg fade-in">
                    <div class="feature-icon mb-6">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Instant Page Transitions</h3>
                    <p class="text-gray-600 leading-relaxed">Pages load instantly with smooth animations. Your visitors will experience app-like navigation without any coding on your part.</p>
                </div>
                <div class="card-hover bg-white p-8 rounded-2xl shadow-lg fade-in">
                    <div class="feature-icon mb-6">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Smart Preloading</h3>
                    <p class="text-gray-600 leading-relaxed">Intelligent link preloading predicts where users will click next and loads content in advance for zero-delay navigation.</p>
                </div>
                <div class="card-hover bg-white p-8 rounded-2xl shadow-lg fade-in">
                    <div class="feature-icon mb-6">
                        <i class="fas fa-feather"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Ultra Lightweight</h3>
                    <p class="text-gray-600 leading-relaxed">Only 8KB in size! Won't slow down your site. Smaller than most images, yet delivers massive performance improvements.</p>
                </div>
                <div class="card-hover bg-white p-8 rounded-2xl shadow-lg fade-in">
                    <div class="feature-icon mb-6">
                        <i class="fas fa-puzzle-piece"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Universal Compatibility</h3>
                    <p class="text-gray-600 leading-relaxed">Works seamlessly with any WordPress theme and popular plugins. No conflicts, no hassle, just install and activate.</p>
                </div>
                <div class="card-hover bg-white p-8 rounded-2xl shadow-lg fade-in">
                    <div class="feature-icon mb-6">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Zero Coding Required</h3>
                    <p class="text-gray-600 leading-relaxed">No technical knowledge needed. Install, activate, and enjoy instant page loads. It's that simple!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="py-20 bg-gradient-to-br from-indigo-50 to-purple-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-4xl md:text-5xl font-black mb-4">Why Choose Instant Page Load?</h2>
                <p class="text-xl text-gray-600">Transform your WordPress experience</p>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="fade-in">
                    <div class="space-y-8">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-purple-600 to-purple-500 rounded-full flex items-center justify-center text-white font-bold text-xl">1</div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Boost Conversions & Engagement</h3>
                                <p class="text-gray-600">Faster pages mean happier visitors. Reduce bounce rates and increase time on site with instant navigation.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-purple-600 to-purple-500 rounded-full flex items-center justify-center text-white font-bold text-xl">2</div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Improve SEO Rankings</h3>
                                <p class="text-gray-600">Google loves fast sites. Boost your Core Web Vitals scores and climb search rankings with 40%+ LCP improvements.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-purple-600 to-purple-500 rounded-full flex items-center justify-center text-white font-bold text-xl">3</div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Premium User Experience</h3>
                                <p class="text-gray-600">Give your visitors the smooth, app-like experience they expect. Stand out from competitors with modern navigation.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-purple-600 to-purple-500 rounded-full flex items-center justify-center text-white font-bold text-xl">4</div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Save Development Costs</h3>
                                <p class="text-gray-600">No need to hire React developers or rebuild your site. Get SPA performance at a fraction of the cost.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fade-in">
                    <div class="bg-white rounded-2xl shadow-2xl p-8">
                        <h3 class="text-2xl font-bold mb-6 text-center">Before vs After</h3>
                        <div class="comparison-table">
                            <table class="w-full">
                                <thead>
                                    <tr class="border-b-2">
                                        <th class="text-left py-4 px-2">Feature</th>
                                        <th class="text-center py-4 px-2">Before</th>
                                        <th class="text-center py-4 px-2">After</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b">
                                        <td class="py-4 px-2 font-medium">Page Load Speed</td>
                                        <td class="text-center py-4 px-2"><i class="fas fa-times cross-icon"></i></td>
                                        <td class="text-center py-4 px-2"><i class="fas fa-check check-icon"></i></td>
                                    </tr>
                                    <tr class="border-b">
                                        <td class="py-4 px-2 font-medium">Smooth Transitions</td>
                                        <td class="text-center py-4 px-2"><i class="fas fa-times cross-icon"></i></td>
                                        <td class="text-center py-4 px-2"><i class="fas fa-check check-icon"></i></td>
                                    </tr>
                                    <tr class="border-b">
                                        <td class="py-4 px-2 font-medium">App-Like Feel</td>
                                        <td class="text-center py-4 px-2"><i class="fas fa-times cross-icon"></i></td>
                                        <td class="text-center py-4 px-2"><i class="fas fa-check check-icon"></i></td>
                                    </tr>
                                    <tr class="border-b">
                                        <td class="py-4 px-2 font-medium">Smart Preloading</td>
                                        <td class="text-center py-4 px-2"><i class="fas fa-times cross-icon"></i></td>
                                        <td class="text-center py-4 px-2"><i class="fas fa-check check-icon"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 px-2 font-medium">Better SEO</td>
                                        <td class="text-center py-4 px-2"><i class="fas fa-times cross-icon"></i></td>
                                        <td class="text-center py-4 px-2"><i class="fas fa-check check-icon"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Target Audience Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-4xl md:text-5xl font-black mb-4">Perfect For</h2>
                <p class="text-xl text-gray-600">Who benefits most from Instant Page Load?</p>
            </div>
            <div class="grid md:grid-cols-4 gap-6">
                <div class="text-center p-6 rounded-2xl bg-gradient-to-br from-purple-50 to-purple-100 card-hover fade-in">
                    <div class="text-5xl mb-4">🏢</div>
                    <h3 class="text-xl font-bold mb-2">Agencies</h3>
                    <p class="text-gray-600">Deliver premium experiences to clients without custom development</p>
                </div>
                <div class="text-center p-6 rounded-2xl bg-gradient-to-br from-purple-50 to-pink-50 card-hover fade-in">
                    <div class="text-5xl mb-4">🛒</div>
                    <h3 class="text-xl font-bold mb-2">E-Commerce</h3>
                    <p class="text-gray-600">Boost sales with faster product browsing and checkout flows</p>
                </div>
                <div class="text-center p-6 rounded-2xl bg-gradient-to-br from-purple-50 to-indigo-50 card-hover fade-in">
                    <div class="text-5xl mb-4">✍️</div>
                    <h3 class="text-xl font-bold mb-2">Bloggers</h3>
                    <p class="text-gray-600">Keep readers engaged with instant article loading</p>
                </div>
                <div class="text-center p-6 rounded-2xl bg-gradient-to-br from-purple-100 to-purple-50 card-hover fade-in">
                    <div class="text-5xl mb-4">⚛️</div>
                    <h3 class="text-xl font-bold mb-2">React Devs</h3>
                    <p class="text-gray-600">Get React-like performance without rebuilding in React</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-4xl md:text-5xl font-black mb-4">What Users Say</h2>
                <p class="text-xl text-gray-600">Join thousands of satisfied WordPress users</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="testimonial-card fade-in">
                    <div class="stars mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-700 mb-6 italic">"This plugin is a game-changer! Our bounce rate dropped by 35% and visitors are spending way more time on our site. The SPA-like experience is incredible."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-600 to-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-4">SM</div>
                        <div>
                            <div class="font-bold">Sarah Mitchell</div>
                            <div class="text-sm text-gray-500">E-commerce Store Owner</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card fade-in">
                    <div class="stars mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-700 mb-6 italic">"As a web agency, this plugin saves us countless development hours. Our clients love the premium feel, and we love the zero-maintenance setup."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-600 to-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-4">JC</div>
                        <div>
                            <div class="font-bold">James Chen</div>
                            <div class="text-sm text-gray-500">Digital Agency Director</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card fade-in">
                    <div class="stars mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-700 mb-6 italic">"My blog feels like a modern web app now. Page transitions are buttery smooth, and my Google PageSpeed scores improved dramatically. Highly recommend!"</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-600 to-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-4">EP</div>
                        <div>
                            <div class="font-bold">Emily Parker</div>
                            <div class="text-sm text-gray-500">Tech Blogger</div>
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

    <!-- FAQ Section -->
    <section id="faq" class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-4xl md:text-5xl font-black mb-4">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-600">Everything you need to know</p>
            </div>
            <div class="space-y-4">
                <div class="faq-item bg-white rounded-xl p-6 fade-in" onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center cursor-pointer">
                        <h3 class="text-xl font-bold">How does Instant Page Load work?</h3>
                        <i class="fas fa-chevron-down faq-icon text-purple-700"></i>
                    </div>
                    <div class="faq-answer mt-4">
                        <p class="text-gray-600">Instant Page Load uses advanced JavaScript techniques to intercept link clicks and load content via AJAX, replacing only the necessary parts of the page. This creates a Single Page Application experience without full page reloads, resulting in instant transitions and improved performance.</p>
                    </div>
                </div>
                <div class="faq-item bg-white rounded-xl p-6 fade-in" onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center cursor-pointer">
                        <h3 class="text-xl font-bold">Will it work with my theme and plugins?</h3>
                        <i class="fas fa-chevron-down faq-icon text-purple-700"></i>
                    </div>
                    <div class="faq-answer mt-4">
                        <p class="text-gray-600">Yes! Instant Page Load is designed to work with any WordPress theme and is compatible with popular plugins including WooCommerce, Elementor, Yoast SEO, and more. We've tested it with hundreds of themes and plugins to ensure maximum compatibility.</p>
                    </div>
                </div>
                <div class="faq-item bg-white rounded-xl p-6 fade-in" onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center cursor-pointer">
                        <h3 class="text-xl font-bold">Do I need coding knowledge to use this?</h3>
                        <i class="fas fa-chevron-down faq-icon text-purple-700"></i>
                    </div>
                    <div class="faq-answer mt-4">
                        <p class="text-gray-600">Absolutely not! Instant Page Load is designed for everyone. Simply install and activate the plugin, and it works automatically. No coding, no configuration required. Advanced users can customize settings if desired, but it's completely optional.</p>
                    </div>
                </div>
                <div class="faq-item bg-white rounded-xl p-6 fade-in" onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center cursor-pointer">
                        <h3 class="text-xl font-bold">How much faster will my site be?</h3>
                        <i class="fas fa-chevron-down faq-icon text-purple-700"></i>
                    </div>
                    <div class="faq-answer mt-4">
                        <p class="text-gray-600">Most users see a 40%+ improvement in Largest Contentful Paint (LCP) and perceived load times. The actual speed improvement depends on your hosting, theme, and other factors, but the instant page transitions create a dramatically faster user experience regardless of your baseline performance.</p>
                    </div>
                </div>
                <div class="faq-item bg-white rounded-xl p-6 fade-in" onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center cursor-pointer">
                        <h3 class="text-xl font-bold">What about SEO? Will Google still crawl my site?</h3>
                        <i class="fas fa-chevron-down faq-icon text-purple-700"></i>
                    </div>
                    <div class="faq-answer mt-4">
                        <p class="text-gray-600">Yes! Instant Page Load is SEO-friendly. Search engines crawl your site normally because all content is still accessible via regular URLs. In fact, the improved Core Web Vitals scores can boost your SEO rankings. The SPA behavior only activates for human visitors with JavaScript enabled.</p>
                    </div>
                </div>
                <div class="faq-item bg-white rounded-xl p-6 fade-in" onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center cursor-pointer">
                        <h3 class="text-xl font-bold">Is there a money-back guarantee?</h3>
                        <i class="fas fa-chevron-down faq-icon text-purple-700"></i>
                    </div>
                    <div class="faq-answer mt-4">
                        <p class="text-gray-600">Yes! We offer a 30-day money-back guarantee. If you're not completely satisfied with Instant Page Load for any reason, just contact us within 30 days of purchase for a full refund. No questions asked.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section id="cta" class="py-20 gradient-bg relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        </div>
        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
            <div class="fade-in">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-6">Ready to Transform Your WordPress Site?</h2>
                <p class="text-xl text-white/90 mb-8">Join thousands of satisfied users and give your visitors the instant, app-like experience they deserve.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                    <a href="#pricing" class="bg-white text-purple-700 px-8 py-4 rounded-full font-bold text-lg inline-flex items-center justify-center hover:bg-gray-100 transition shadow-xl">
                        <i class="fas fa-rocket mr-2"></i> Get Started Now
                    </a>
                    <a href="#demo" class="bg-white/10 backdrop-blur-sm text-white px-8 py-4 rounded-full font-bold text-lg inline-flex items-center justify-center hover:bg-white/20 transition border-2 border-white/30">
                        <i class="fas fa-play mr-2"></i> Watch Demo
                    </a>
                </div>
                <div class="flex flex-wrap justify-center gap-6 text-white/90 text-sm">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle mr-2"></i>
                        <span>30-Day Money-Back Guarantee</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check-circle mr-2"></i>
                        <span>Instant Access</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check-circle mr-2"></i>
                        <span>No Coding Required</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<!-- JavaScript -->
    <script>
        // Smooth scrolling for anchor links
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

        // Navbar scroll effect
        const nav = document.querySelector('nav');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });

        // Mobile menu toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('active');
        }

        // FAQ toggle
        function toggleFaq(element) {
            element.classList.toggle('active');
        }

        // Intersection Observer for fade-in animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all fade-in elements
        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Counter animation for stats
        function animateCounter(element, target, duration = 2000) {
            let start = 0;
            const increment = target / (duration / 16);
            const timer = setInterval(() => {
                start += increment;
                if (start >= target) {
                    element.textContent = target;
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(start);
                }
            }, 16);
        }

        // Trigger counter animation when stats section is visible
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const statNumbers = entry.target.querySelectorAll('.stat-number');
                    statNumbers.forEach(stat => {
                        const text = stat.textContent;
                        if (text.includes('%')) {
                            const num = parseInt(text);
                            stat.textContent = '0%';
                            setTimeout(() => {
                                let current = 0;
                                const timer = setInterval(() => {
                                    current += 2;
                                    if (current >= num) {
                                        stat.textContent = text;
                                        clearInterval(timer);
                                    } else {
                                        stat.textContent = current + '%';
                                    }
                                }, 30);
                            }, 200);
                        }
                    });
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        const statsSection = document.querySelector('.py-16.bg-white');
        if (statsSection) {
            statsObserver.observe(statsSection);
        }

        // Add hover effect to cards
        document.querySelectorAll('.card-hover').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px)';
            });
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Pricing card click tracking
        document.querySelectorAll('.pricing-card a').forEach(button => {
            button.addEventListener('click', function(e) {
                const plan = this.closest('.pricing-card').querySelector('h3').textContent;
                console.log('Selected plan:', plan);
                // Add your analytics tracking here
            });
        });

        // Add parallax effect to hero section
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero-gradient');
            if (hero && scrolled < window.innerHeight) {
                hero.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });

        // Testimonial rotation (optional enhancement)
        let currentTestimonial = 0;
        const testimonials = document.querySelectorAll('.testimonial-card');

        function rotateTestimonials() {
            if (window.innerWidth < 768) { // Only on mobile
                testimonials.forEach((testimonial, index) => {
                    testimonial.style.display = index === currentTestimonial ? 'block' : 'none';
                });
                currentTestimonial = (currentTestimonial + 1) % testimonials.length;
            } else {
                testimonials.forEach(testimonial => {
                    testimonial.style.display = 'block';
                });
            }
        }

        // Initialize
        window.addEventListener('resize', rotateTestimonials);
        rotateTestimonials();

        // Add loading animation
        window.addEventListener('load', () => {
            document.body.style.opacity = '0';
            setTimeout(() => {
                document.body.style.transition = 'opacity 0.5s ease';
                document.body.style.opacity = '1';
            }, 100);
        });

        // CTA button pulse effect
        const ctaButtons = document.querySelectorAll('.btn-primary');
        ctaButtons.forEach(button => {
            setInterval(() => {
                button.style.transform = 'scale(1.05)';
                setTimeout(() => {
                    button.style.transform = 'scale(1)';
                }, 200);
            }, 3000);
        });

        // Track scroll depth for analytics
        let maxScroll = 0;
        window.addEventListener('scroll', () => {
            const scrollPercent = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
            if (scrollPercent > maxScroll) {
                maxScroll = scrollPercent;
                if (maxScroll > 25 && maxScroll < 30) {
                    console.log('User scrolled 25%');
                } else if (maxScroll > 50 && maxScroll < 55) {
                    console.log('User scrolled 50%');
                } else if (maxScroll > 75 && maxScroll < 80) {
                    console.log('User scrolled 75%');
                } else if (maxScroll > 90) {
                    console.log('User scrolled to bottom');
                }
            }
        });
    </script>

<?php get_footer(); ?>