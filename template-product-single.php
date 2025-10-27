<?php
/**
 * Template Name: Product Landing Page
 * 
 * Template for individual product landing pages
 * 
 * @package Worzen
 */

get_header();

// Get custom fields
$product_tagline = get_post_meta(get_the_ID(), 'product_tagline', true);
$product_price = get_post_meta(get_the_ID(), 'product_price', true);
$product_type = get_post_meta(get_the_ID(), 'product_type', true); // 'free' or 'premium'
$product_category = get_post_meta(get_the_ID(), 'product_category', true); // 'plugin' or 'theme'
$product_demo_url = get_post_meta(get_the_ID(), 'product_demo_url', true);
$product_download_url = get_post_meta(get_the_ID(), 'product_download_url', true);
$product_purchase_url = get_post_meta(get_the_ID(), 'product_purchase_url', true);
$product_wordpress_url = get_post_meta(get_the_ID(), 'product_wordpress_url', true);
$product_rating = get_post_meta(get_the_ID(), 'product_rating', true) ?: '5.0';
$product_users = get_post_meta(get_the_ID(), 'product_users', true) ?: '1,000+';
$product_version = get_post_meta(get_the_ID(), 'product_version', true) ?: '1.0.0';

// Features (repeatable)
$product_features = get_post_meta(get_the_ID(), 'product_features', true);
if (!is_array($product_features)) {
    $product_features = [];
}

// Screenshots (repeatable)
$product_screenshots = get_post_meta(get_the_ID(), 'product_screenshots', true);
if (!is_array($product_screenshots)) {
    $product_screenshots = [];
}

// Stats
$product_stats = get_post_meta(get_the_ID(), 'product_stats', true);
if (!is_array($product_stats)) {
    $product_stats = [];
}
?>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500 text-white py-20 md:py-32 overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-1/2 -left-1/2 w-96 h-96 bg-white opacity-10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-1/2 -right-1/2 w-96 h-96 bg-white opacity-10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/4 right-1/4 w-64 h-64 bg-white opacity-5 rounded-full blur-2xl animate-pulse" style="animation-delay: 2s;"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-5xl mx-auto">
            <!-- Breadcrumb -->
            <div class="mb-6">
                <nav class="flex items-center space-x-2 text-indigo-100">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-white transition duration-300">Home</a>
                    <span>/</span>
                    <a href="<?php echo esc_url(home_url('/products')); ?>" class="hover:text-white transition duration-300">Products</a>
                    <span>/</span>
                    <span class="text-white"><?php the_title(); ?></span>
                </nav>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Column: Content -->
                <div class="text-center lg:text-left">
                    <!-- Badge -->
                    <?php if ($product_type): ?>
                    <div class="inline-flex items-center mb-6">
                        <span class="<?php echo $product_type === 'free' ? 'bg-green-500' : 'bg-accent'; ?> text-white px-4 py-2 rounded-full text-sm font-semibold">
                            <?php echo $product_type === 'free' ? 'Free Plugin' : 'Premium ' . ucfirst($product_category); ?>
                        </span>
                        <?php if ($product_rating): ?>
                        <span class="ml-3 flex items-center text-yellow-300">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                            </svg>
                            <span class="ml-1 font-semibold"><?php echo esc_html($product_rating); ?></span>
                        </span>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>

                    <!-- Title -->
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                        <?php the_title(); ?>
                    </h1>

                    <!-- Tagline -->
                    <?php if ($product_tagline): ?>
                    <p class="text-xl md:text-2xl text-indigo-100 mb-8 leading-relaxed">
                        <?php echo esc_html($product_tagline); ?>
                    </p>
                    <?php endif; ?>

                    <!-- Stats -->
                    <div class="flex flex-wrap gap-6 mb-8 justify-center lg:justify-start">
                        <?php if ($product_users): ?>
                        <div class="flex items-center text-indigo-100">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                            </svg>
                            <span class="font-semibold"><?php echo esc_html($product_users); ?> Active Users</span>
                        </div>
                        <?php endif; ?>
                        
                        <?php if ($product_version): ?>
                        <div class="flex items-center text-indigo-100">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                            </svg>
                            <span class="font-semibold">Version <?php echo esc_html($product_version); ?></span>
                        </div>
                        <?php endif; ?>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap gap-4 justify-center lg:justify-start">
                        <?php if ($product_type === 'free' && $product_download_url): ?>
                        <a href="<?php echo esc_url($product_download_url); ?>" target="_blank" class="inline-flex items-center bg-white text-primary px-8 py-4 rounded-full font-bold text-lg hover:shadow-2xl transition duration-300 transform hover:scale-105">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                            Download Free
                        </a>
                        <?php elseif ($product_type === 'premium' && $product_purchase_url): ?>
                        <a href="<?php echo esc_url($product_purchase_url); ?>" target="_blank" class="inline-flex items-center bg-white text-primary px-8 py-4 rounded-full font-bold text-lg hover:shadow-2xl transition duration-300 transform hover:scale-105">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                            </svg>
                            Buy Now - $<?php echo esc_html($product_price); ?>
                        </a>
                        <?php endif; ?>

                        <?php if ($product_demo_url): ?>
                        <a href="<?php echo esc_url($product_demo_url); ?>" target="_blank" class="inline-flex items-center bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-primary transition duration-300">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            Live Demo
                        </a>
                        <?php endif; ?>

                        <?php if ($product_wordpress_url): ?>
                        <a href="<?php echo esc_url($product_wordpress_url); ?>" target="_blank" class="inline-flex items-center bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-primary transition duration-300">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 0C4.477 0 0 4.477 0 10s4.477 10 10 10 10-4.477 10-10S15.523 0 10 0zM1.5 10c0-1.563.423-3.028 1.155-4.285L8.5 18.44A8.478 8.478 0 011.5 10zm8.5 8.5c-.835 0-1.64-.12-2.401-.343l2.55-7.41 2.613 7.157c.017.042.038.08.06.118A8.448 8.448 0 0110 18.5zm1.188-13.155c.52-.027.988-.082.988-.082.465-.055.41-.738-.055-.713 0 0-1.398.11-2.302.11-.848 0-2.275-.11-2.275-.11-.465-.027-.52.685-.055.713 0 0 .438.055.903.082l1.342 3.677-1.885 5.655L5.8 5.345c.52-.027.988-.082.988-.082.465-.055.41-.738-.055-.713 0 0-1.398.11-2.302.11-.162 0-.353-.004-.558-.01A8.478 8.478 0 0110 1.5c1.945 0 3.715.653 5.133 1.748-.033-.002-.065-.006-.1-.006-.848 0-1.45.738-1.45 1.532 0 .713.41 1.313.848 2.025.328.575.713 1.313.713 2.378 0 .738-.283 1.593-.658 2.783l-.863 2.88-3.125-9.295zM14.407 17.77l2.585-7.477c.483-1.208.643-2.173.643-3.028 0-.313-.02-.603-.058-.875A8.48 8.48 0 0118.5 10c0 3.288-1.867 6.132-4.593 7.77z"/>
                            </svg>
                            WordPress.org
                        </a>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Right Column: Featured Image or Mockup -->
                <div class="relative">
                    <?php if (has_post_thumbnail()): ?>
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl transform hover:scale-105 transition duration-500">
                        <?php the_post_thumbnail('large', array('class' => 'w-full h-auto')); ?>
                    </div>
                    <?php else: ?>
                    <div class="relative bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                        <div class="aspect-video bg-gradient-to-br from-white/20 to-white/5 rounded-lg flex items-center justify-center">
                            <svg class="w-24 h-24 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <?php
            while (have_posts()) :
                the_post();
                
                // Display the main content
                if (get_the_content()) :
            ?>
            <div class="prose prose-lg max-w-none mb-16">
                <?php the_content(); ?>
            </div>
            <?php
                endif;
            endwhile;
            ?>
        </div>
    </div>
</section>

<!-- Features Section -->
<?php if (!empty($product_features)): ?>
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Key Features
                </h2>
                <p class="text-xl text-gray-600">
                    Everything you need to succeed
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($product_features as $feature): ?>
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2">
                    <?php if (!empty($feature['icon'])): ?>
                    <div class="w-14 h-14 bg-gradient-to-br from-primary to-secondary rounded-xl flex items-center justify-center mb-6">
                        <span class="text-3xl"><?php echo $feature['icon']; ?></span>
                    </div>
                    <?php endif; ?>

                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        <?php echo esc_html($feature['title']); ?>
                    </h3>

                    <p class="text-gray-600 leading-relaxed">
                        <?php echo esc_html($feature['description']); ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Screenshots Section -->
<?php if (!empty($product_screenshots)): ?>
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    See It In Action
                </h2>
                <p class="text-xl text-gray-600">
                    Screenshots and demos
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <?php foreach ($product_screenshots as $screenshot): ?>
                <div class="rounded-2xl overflow-hidden shadow-2xl hover:shadow-3xl transition duration-300 transform hover:scale-105">
                    <img src="<?php echo esc_url($screenshot['url']); ?>" alt="<?php echo esc_attr($screenshot['caption']); ?>" class="w-full h-auto">
                    <?php if (!empty($screenshot['caption'])): ?>
                    <div class="bg-gray-50 p-4">
                        <p class="text-gray-700 text-center"><?php echo esc_html($screenshot['caption']); ?></p>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Stats Section -->
<?php if (!empty($product_stats)): ?>
<section class="py-20 bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php foreach ($product_stats as $stat): ?>
                <div class="text-center">
                    <div class="text-5xl md:text-6xl font-bold mb-2">
                        <?php echo esc_html($stat['number']); ?>
                    </div>
                    <div class="text-xl text-indigo-100">
                        <?php echo esc_html($stat['label']); ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Final CTA Section -->
<section class="py-20 bg-gray-900 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                Ready to Get Started?
            </h2>
            <p class="text-xl text-gray-300 mb-10">
                Join thousands of happy customers using <?php the_title(); ?>
            </p>

            <div class="flex flex-wrap gap-4 justify-center">
                <?php if ($product_type === 'free' && $product_download_url): ?>
                <a href="<?php echo esc_url($product_download_url); ?>" target="_blank" class="inline-flex items-center bg-gradient-to-r from-primary to-secondary text-white px-10 py-5 rounded-full font-bold text-xl hover:shadow-2xl transition duration-300 transform hover:scale-105">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                    Download Free Plugin
                </a>
                <?php elseif ($product_type === 'premium' && $product_purchase_url): ?>
                <a href="<?php echo esc_url($product_purchase_url); ?>" target="_blank" class="inline-flex items-center bg-gradient-to-r from-primary to-secondary text-white px-10 py-5 rounded-full font-bold text-xl hover:shadow-2xl transition duration-300 transform hover:scale-105">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                    </svg>
                    Purchase Now - $<?php echo esc_html($product_price); ?>
                </a>
                <?php endif; ?>

                <?php if ($product_wordpress_url): ?>
                <a href="<?php echo esc_url($product_wordpress_url); ?>" target="_blank" class="inline-flex items-center bg-white text-gray-900 px-10 py-5 rounded-full font-bold text-xl hover:shadow-2xl transition duration-300">
                    View on WordPress.org
                </a>
                <?php endif; ?>
            </div>

            <?php if ($product_type === 'free'): ?>
            <p class="mt-8 text-gray-400">
                100% Free • No Credit Card Required • Open Source
            </p>
            <?php else: ?>
            <p class="mt-8 text-gray-400">
                30-Day Money-Back Guarantee • Lifetime Updates • Premium Support
            </p>
            <?php endif; ?>
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
