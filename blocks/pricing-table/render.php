<?php
/**
 * Worzen Pricing Table Block - Frontend Render Template
 *
 * @package Worzen
 * @since 1.0.0
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block default content.
 * @var WP_Block $block      Block instance.
 */

// Get block attributes
$plans = isset($attributes['plans']) ? $attributes['plans'] : array();
$show_badges = isset($attributes['showBadges']) ? $attributes['showBadges'] : true;
$show_descriptions = isset($attributes['showDescriptions']) ? $attributes['showDescriptions'] : true;
$alignment = isset($attributes['alignment']) ? $attributes['alignment'] : 'center';

// Get block wrapper attributes
$wrapper_attributes = get_block_wrapper_attributes(array(
    'class' => 'worzen-pricing-table-block',
));

// If no plans, don't render anything
if (empty($plans)) {
    return;
}

// Calculate grid columns based on number of plans
$plan_count = count($plans);
$grid_cols = 'grid-cols-1';
if ($plan_count === 2) {
    $grid_cols = 'md:grid-cols-2';
} elseif ($plan_count === 3) {
    $grid_cols = 'md:grid-cols-3';
} elseif ($plan_count >= 4) {
    $grid_cols = 'md:grid-cols-2 lg:grid-cols-4';
}
?>

<div <?php echo $wrapper_attributes; ?>>
    <div class="worzen-pricing-container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid <?php echo esc_attr($grid_cols); ?> gap-8 items-stretch">
            <?php foreach ($plans as $plan) : 
                $plan_id = isset($plan['id']) ? $plan['id'] : uniqid('plan_');
                $name = isset($plan['name']) ? $plan['name'] : 'Plan';
                $price = isset($plan['price']) ? $plan['price'] : '0';
                $currency = isset($plan['currency']) ? $plan['currency'] : '$';
                $period = isset($plan['period']) ? $plan['period'] : 'per month';
                $description = isset($plan['description']) ? $plan['description'] : '';
                $features = isset($plan['features']) ? $plan['features'] : array();
                $button_text = isset($plan['buttonText']) ? $plan['buttonText'] : 'Get Started';
                $button_url = isset($plan['buttonUrl']) ? $plan['buttonUrl'] : '#';
                $featured = isset($plan['featured']) ? $plan['featured'] : false;
                $bg_color = isset($plan['backgroundColor']) ? $plan['backgroundColor'] : '#ffffff';
                $text_color = isset($plan['textColor']) ? $plan['textColor'] : '#1f2937';
                $button_color = isset($plan['buttonColor']) ? $plan['buttonColor'] : '';
                
                // Determine card classes
                $card_classes = 'worzen-pricing-card relative flex flex-col h-full rounded-2xl shadow-xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-2';
                if ($featured) {
                    $card_classes .= ' worzen-pricing-featured ring-2 ring-primary scale-105 z-10';
                }
            ?>
            
            <div class="<?php echo esc_attr($card_classes); ?>" 
                 style="background-color: <?php echo esc_attr($bg_color); ?>; color: <?php echo esc_attr($text_color); ?>;">
                
                <?php if ($featured && $show_badges) : ?>
                    <div class="absolute -top-5 left-1/2 transform -translate-x-1/2">
                        <span class="inline-flex items-center px-6 py-2 rounded-full text-sm font-bold text-white bg-gradient-to-r from-primary to-secondary shadow-lg">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            Most Popular
                        </span>
                    </div>
                <?php endif; ?>
                
                <div class="p-8 flex-1 flex flex-col">
                    <!-- Plan Header -->
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold mb-2" style="color: <?php echo esc_attr($text_color); ?>;">
                            <?php echo esc_html($name); ?>
                        </h3>
                        
                        <?php if ($show_descriptions && !empty($description)) : ?>
                            <p class="text-sm opacity-75 mb-4">
                                <?php echo esc_html($description); ?>
                            </p>
                        <?php endif; ?>
                        
                        <!-- Price -->
                        <div class="mt-4">
                            <div class="flex items-baseline justify-center">
                                <span class="text-3xl font-bold">
                                    <?php echo esc_html($currency); ?>
                                </span>
                                <span class="text-6xl font-extrabold mx-1 bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">
                                    <?php echo esc_html($price); ?>
                                </span>
                            </div>
                            <p class="text-sm opacity-75 mt-2">
                                <?php echo esc_html($period); ?>
                            </p>
                        </div>
                    </div>
                    
                    <!-- Features List -->
                    <?php if (!empty($features)) : ?>
                        <ul class="space-y-4 mb-8 flex-1">
                            <?php foreach ($features as $feature) : 
                                $feature_text = isset($feature['text']) ? $feature['text'] : '';
                                $included = isset($feature['included']) ? $feature['included'] : true;
                            ?>
                                <li class="flex items-start">
                                    <?php if ($included) : ?>
                                        <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                    <?php else : ?>
                                        <svg class="w-6 h-6 text-gray-300 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                        </svg>
                                    <?php endif; ?>
                                    <span class="<?php echo $included ? '' : 'opacity-50 line-through'; ?>">
                                        <?php echo esc_html($feature_text); ?>
                                    </span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    
                    <!-- CTA Button -->
                    <div class="mt-auto">
                        <?php 
                        $button_style = '';
                        if (!empty($button_color)) {
                            $button_style = 'background: ' . esc_attr($button_color) . ';';
                        } else {
                            $button_style = 'background: linear-gradient(to right, #6366f1, #8b5cf6);';
                        }
                        ?>
                        <a href="<?php echo esc_url($button_url); ?>" 
                           class="worzen-pricing-button block w-full text-center px-6 py-4 rounded-xl font-bold text-white transition-all duration-300 hover:shadow-lg hover:-translate-y-1"
                           style="<?php echo $button_style; ?>">
                            <?php echo esc_html($button_text); ?>
                        </a>
                    </div>
                </div>
            </div>
            
            <?php endforeach; ?>
        </div>
    </div>
</div>

