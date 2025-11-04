<?php
/**
 * Worzen Pricing Card - Server-side Render
 *
 * @package Worzen
 * @since 2.0.0
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content.
 * @var WP_Block $block      Block instance.
 */

// Get attributes with defaults
$plan_name = isset($attributes['planName']) ? $attributes['planName'] : 'Professional';
$price = isset($attributes['price']) ? $attributes['price'] : '29';
$currency = isset($attributes['currency']) ? $attributes['currency'] : '$';
$period = isset($attributes['period']) ? $attributes['period'] : 'per month';
$description = isset($attributes['description']) ? $attributes['description'] : 'Perfect for growing businesses';
$features = isset($attributes['features']) ? $attributes['features'] : array();
$button_text = isset($attributes['buttonText']) ? $attributes['buttonText'] : 'Get Started';
$button_url = isset($attributes['buttonUrl']) ? $attributes['buttonUrl'] : '#';
$featured = isset($attributes['featured']) ? $attributes['featured'] : false;
$badge = isset($attributes['badge']) ? $attributes['badge'] : 'Most Popular';
$show_badge = isset($attributes['showBadge']) ? $attributes['showBadge'] : true;
$show_description = isset($attributes['showDescription']) ? $attributes['showDescription'] : true;
$background_color = isset($attributes['backgroundColor']) ? $attributes['backgroundColor'] : '#ffffff';
$text_color = isset($attributes['textColor']) ? $attributes['textColor'] : '#1f2937';
$button_color = isset($attributes['buttonColor']) ? $attributes['buttonColor'] : '#6366f1';
$show_button = isset($attributes['showButton']) ? $attributes['showButton'] : true;

// Build wrapper classes
$wrapper_classes = array('worzen-pricing-card');
if ($featured) {
    $wrapper_classes[] = 'featured';
}

$wrapper_attributes = get_block_wrapper_attributes(array(
    'class' => implode(' ', $wrapper_classes)
));

// Card styles
$card_style = sprintf(
    'background-color: %s; color: %s;',
    esc_attr($background_color),
    esc_attr($text_color)
);
?>

<div <?php echo $wrapper_attributes; ?>>
    <div class="pricing-card" style="<?php echo $card_style; ?>">
        
        <?php if ($featured && $show_badge) : ?>
            <div class="pricing-badge"><?php echo esc_html($badge); ?></div>
        <?php endif; ?>
        
        <h3 class="plan-name" style="color: <?php echo esc_attr($text_color); ?>;">
            <?php echo esc_html($plan_name); ?>
        </h3>
        
        <?php if ($show_description && !empty($description)) : ?>
            <p class="plan-description" style="color: <?php echo esc_attr($text_color); ?>;">
                <?php echo esc_html($description); ?>
            </p>
        <?php endif; ?>
        
        <div class="price-container">
            <div class="price-display">
                <span class="currency" style="color: <?php echo esc_attr($text_color); ?>;">
                    <?php echo esc_html($currency); ?>
                </span>
                <span class="price" style="color: <?php echo esc_attr($text_color); ?>;">
                    <?php echo esc_html($price); ?>
                </span>
            </div>
            <div class="period" style="color: <?php echo esc_attr($text_color); ?>;">
                <?php echo esc_html($period); ?>
            </div>
        </div>
        
        <?php if (!empty($features)) : ?>
            <ul class="features-list">
                <?php foreach ($features as $feature) : ?>
                    <?php
                    $feature_text = isset($feature['text']) ? $feature['text'] : '';
                    $feature_included = isset($feature['included']) ? $feature['included'] : true;
                    $feature_class = $feature_included ? 'included' : 'excluded';
                    $feature_icon = $feature_included ? '✓' : '✗';
                    ?>
                    <li class="feature-item <?php echo esc_attr($feature_class); ?>" style="color: <?php echo esc_attr($text_color); ?>;">
                        <span class="feature-icon <?php echo esc_attr($feature_class); ?>">
                            <?php echo $feature_icon; ?>
                        </span>
                        <span class="feature-text">
                            <?php echo esc_html($feature_text); ?>
                        </span>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <?php if (!empty($content)) : ?>
            <div class="pricing-card-inner-content">
                <?php echo $content; ?>
            </div>
        <?php endif; ?>

        <?php if ($show_button) : ?>
            <a href="<?php echo esc_url($button_url); ?>"
               class="pricing-button"
               style="background-color: <?php echo esc_attr($button_color); ?>;">
                <?php echo esc_html($button_text); ?>
            </a>
        <?php endif; ?>
        
    </div>
</div>

