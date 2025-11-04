<?php
/**
 * Worzen Theme Functions
 * 
 * This file contains all the theme setup, enqueues, and custom functions
 * for the Worzen WordPress theme.
 *
 * @package Worzen
 * @since 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Define Theme Constants
 */
define('WORZEN_VERSION', '1.0.0');
define('WORZEN_THEME_DIR', get_template_directory());
define('WORZEN_THEME_URI', get_template_directory_uri());

/**
 * Theme Setup
 *
 * Registers theme support for various WordPress features
 */
function worzen_theme_setup() {

    // Make theme available for translation
    load_theme_textdomain('worzen', WORZEN_THEME_DIR . '/languages');

    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Set default thumbnail size
    set_post_thumbnail_size(1200, 630, true);

    // Add additional image sizes
    add_image_size('worzen-featured', 800, 450, true);
    add_image_size('worzen-thumbnail', 400, 300, true);

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'worzen'),
        'footer'  => esc_html__('Footer Menu', 'worzen'),
    ));

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add theme support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Add support for responsive embedded content
    add_theme_support('responsive-embeds');

    // Add support for editor styles
    add_theme_support('editor-styles');

    // Add support for wide alignment
    add_theme_support('align-wide');

    // Add support for full alignment
    add_theme_support('align-full');

    // Add support for block styles
    add_theme_support('wp-block-styles');

    // Add support for custom line height
    add_theme_support('custom-line-height');

    // Add support for custom spacing
    add_theme_support('custom-spacing');

    // Add support for custom units
    add_theme_support('custom-units');

    // Add support for link color
    add_theme_support('link-color');

    // Add support for experimental appearance tools
    add_theme_support('appearance-tools');

    // Add support for border controls
    add_theme_support('border');
}
add_action('after_setup_theme', 'worzen_theme_setup');

/**
 * Set the content width in pixels
 */
function worzen_content_width() {
    $GLOBALS['content_width'] = apply_filters('worzen_content_width', 1200);
}
add_action('after_setup_theme', 'worzen_content_width', 0);

/**
 * Enqueue Styles and Scripts
 *
 * Loads Tailwind CSS, custom styles, and JavaScript files
 */
function worzen_enqueue_scripts() {

    // Enqueue Google Fonts - Inter
    wp_enqueue_style(
        'worzen-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap',
        array(),
        null
    );

    // Enqueue Tailwind CSS from CDN as a script (not a stylesheet)
    // Note: For production, consider using a build process with PostCSS
    wp_enqueue_script(
        'tailwindcss',
        'https://cdn.tailwindcss.com',
        array(),
        null,
        false // Load in head, not footer
    );

    // Enqueue main theme stylesheet (for WordPress core styles and metadata)
    wp_enqueue_style(
        'worzen-style',
        get_stylesheet_uri(),
        array(),
        WORZEN_VERSION
    );

    // Enqueue WordPress block styles (for Gutenberg blocks)
    wp_enqueue_style('wp-block-library');

    // Enqueue WordPress block theme styles
    wp_enqueue_style('wp-block-library-theme');

    // Enqueue inline block styles (for dynamic block styles)
    if (function_exists('wp_enqueue_block_style')) {
        wp_enqueue_style('global-styles');
    }

    // Enqueue custom CSS file (for any additional custom styles)
    wp_enqueue_style(
        'worzen-custom',
        WORZEN_THEME_URI . '/assets/css/custom.css',
        array('wp-block-library', 'wp-block-library-theme'),
        WORZEN_VERSION
    );

    // Enqueue Gutenberg block styles compatibility CSS
    wp_enqueue_style(
        'worzen-gutenberg',
        WORZEN_THEME_URI . '/assets/css/gutenberg.css',
        array('wp-block-library'),
        WORZEN_VERSION
    );

    // Enqueue main JavaScript file
    wp_enqueue_script(
        'worzen-main',
        WORZEN_THEME_URI . '/assets/js/main.js',
        array(),
        WORZEN_VERSION,
        true // Load in footer
    );

    // Enqueue comment reply script on single posts
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    // Pass PHP variables to JavaScript
    wp_localize_script('worzen-main', 'worzenData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('worzen-nonce'),
        'themeUrl' => WORZEN_THEME_URI,
    ));
}
add_action('wp_enqueue_scripts', 'worzen_enqueue_scripts');

/**
 * Enqueue Block Editor Assets
 *
 * Loads styles for the Gutenberg block editor
 */
function worzen_block_editor_assets() {
    // Enqueue editor styles
    wp_enqueue_style(
        'worzen-editor-styles',
        WORZEN_THEME_URI . '/assets/css/editor-style.css',
        array('wp-edit-blocks'),
        WORZEN_VERSION
    );

    // Enqueue Google Fonts in editor
    wp_enqueue_style(
        'worzen-editor-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap',
        array(),
        null
    );
}
add_action('enqueue_block_editor_assets', 'worzen_block_editor_assets');

/**
 * Register Custom Block Categories
 *
 * Adds a custom "Worzen" category for custom blocks
 */
function worzen_block_categories($categories) {
    return array_merge(
        array(
            array(
                'slug'  => 'worzen',
                'title' => __('Worzen', 'worzen'),
                'icon'  => 'star-filled',
            ),
        ),
        $categories
    );
}
add_filter('block_categories_all', 'worzen_block_categories', 10, 2);

/**
 * Register Custom Gutenberg Blocks
 *
 * Registers all custom blocks for the Worzen theme
 */
function worzen_register_blocks() {
    // Check if function exists (WordPress 5.8+)
    if (!function_exists('register_block_type')) {
        return;
    }

    // ========================================
    // PRICING CARD BLOCK
    // ========================================

    // Register pricing card block script
    wp_register_script(
        'worzen-pricing-card-editor',
        WORZEN_THEME_URI . '/blocks/pricing-card/block.js',
        array('wp-blocks', 'wp-element', 'wp-i18n', 'wp-block-editor', 'wp-components'),
        WORZEN_VERSION,
        true
    );

    // Register pricing card block styles
    wp_register_style(
        'worzen-pricing-card-editor',
        WORZEN_THEME_URI . '/blocks/pricing-card/editor.css',
        array(),
        WORZEN_VERSION
    );

    wp_register_style(
        'worzen-pricing-card-style',
        WORZEN_THEME_URI . '/blocks/pricing-card/style.css',
        array(),
        WORZEN_VERSION
    );

    // Register Pricing Card Block
    register_block_type(
        WORZEN_THEME_DIR . '/blocks/pricing-card',
        array(
            'render_callback' => 'worzen_render_pricing_card',
            'editor_script' => 'worzen-pricing-card-editor',
            'editor_style' => 'worzen-pricing-card-editor',
            'style' => 'worzen-pricing-card-style',
        )
    );
}
add_action('init', 'worzen_register_blocks');

/**
 * Render callback for Pricing Card Block
 *
 * @param array    $attributes Block attributes.
 * @param string   $content    Block default content.
 * @param WP_Block $block      Block instance.
 * @return string Block HTML output.
 */
function worzen_render_pricing_card($attributes, $content, $block) {
    ob_start();
    include WORZEN_THEME_DIR . '/blocks/pricing-card/render.php';
    return ob_get_clean();
}

/**
 * Add Tailwind CSS Configuration
 *
 * Injects custom Tailwind configuration into the head
 * This must run after Tailwind script is loaded
 */
function worzen_tailwind_config() {
    ?>
    <script>
        // Tailwind CSS Configuration
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#6366f1',
                        secondary: '#8b5cf6',
                        accent: '#ec4899',
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <?php
}
add_action('wp_head', 'worzen_tailwind_config', 20);

/**
 * Register Widget Areas
 */
function worzen_widgets_init() {
    
    // Sidebar widget area
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'worzen'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here to appear in your sidebar.', 'worzen'),
        'before_widget' => '<section id="%1$s" class="widget mb-8 %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title text-2xl font-bold mb-4">',
        'after_title'   => '</h2>',
    ));
    
    // Footer widget areas
    for ($i = 1; $i <= 3; $i++) {
        register_sidebar(array(
            'name'          => sprintf(esc_html__('Footer %d', 'worzen'), $i),
            'id'            => 'footer-' . $i,
            'description'   => sprintf(esc_html__('Add widgets here to appear in footer column %d.', 'worzen'), $i),
            'before_widget' => '<div id="%1$s" class="widget mb-6 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title text-lg font-semibold text-white mb-4">',
            'after_title'   => '</h3>',
        ));
    }
}
add_action('widgets_init', 'worzen_widgets_init');

/**
 * Custom Excerpt Length
 */
function worzen_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'worzen_excerpt_length');

/**
 * Custom Excerpt More
 */
function worzen_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'worzen_excerpt_more');

/**
 * Add Custom Body Classes
 */
function worzen_body_classes($classes) {
    // Add class if sidebar is active
    if (is_active_sidebar('sidebar-1')) {
        $classes[] = 'has-sidebar';
    }
    
    // Add class for page template
    if (is_page_template()) {
        $classes[] = 'page-template';
    }
    
    return $classes;
}
add_filter('body_class', 'worzen_body_classes');

/**
 * Custom Navigation Walker (Optional)
 * 
 * Adds Tailwind classes to navigation menu items
 */
class Worzen_Walker_Nav_Menu extends Walker_Nav_Menu {
    
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
        
        // Add Tailwind classes
        $class_names = 'text-gray-700 hover:text-primary transition duration-300 ' . $class_names;
        
        $output .= '<li class="' . esc_attr($class_names) . '">';
        
        $attributes = '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

/**
 * Pagination Function
 */
function worzen_pagination() {
    global $wp_query;
    
    if ($wp_query->max_num_pages <= 1) {
        return;
    }
    
    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max   = intval($wp_query->max_num_pages);
    
    echo '<nav class="pagination flex justify-center items-center space-x-2 mt-12" aria-label="Pagination">';
    
    if ($paged > 1) {
        echo '<a href="' . get_pagenum_link($paged - 1) . '" class="px-4 py-2 bg-white border border-gray-300 rounded-lg hover:bg-primary hover:text-white transition duration-300">' . esc_html__('Previous', 'worzen') . '</a>';
    }
    
    for ($i = 1; $i <= $max; $i++) {
        if ($i == $paged) {
            echo '<span class="px-4 py-2 bg-primary text-white rounded-lg">' . $i . '</span>';
        } else {
            echo '<a href="' . get_pagenum_link($i) . '" class="px-4 py-2 bg-white border border-gray-300 rounded-lg hover:bg-primary hover:text-white transition duration-300">' . $i . '</a>';
        }
    }
    
    if ($paged < $max) {
        echo '<a href="' . get_pagenum_link($paged + 1) . '" class="px-4 py-2 bg-white border border-gray-300 rounded-lg hover:bg-primary hover:text-white transition duration-300">' . esc_html__('Next', 'worzen') . '</a>';
    }
    
    echo '</nav>';
}

/**
 * Custom Comment Callback
 */
function worzen_comment_callback($comment, $args, $depth) {
    ?>
    <li <?php comment_class('bg-white p-6 rounded-lg shadow-sm mb-4'); ?> id="comment-<?php comment_ID(); ?>">
        <div class="comment-author flex items-center mb-4">
            <?php echo get_avatar($comment, 50, '', '', array('class' => 'rounded-full mr-4')); ?>
            <div>
                <div class="font-semibold text-gray-900"><?php echo get_comment_author_link(); ?></div>
                <div class="text-sm text-gray-500"><?php echo get_comment_date() . ' at ' . get_comment_time(); ?></div>
            </div>
        </div>
        <div class="comment-text text-gray-700 mb-4">
            <?php comment_text(); ?>
        </div>
        <?php if ($comment->comment_approved == '0') : ?>
            <p class="text-yellow-600 text-sm mb-4"><?php esc_html_e('Your comment is awaiting moderation.', 'worzen'); ?></p>
        <?php endif; ?>
        <div class="comment-reply">
            <?php comment_reply_link(array_merge($args, array(
                'depth'     => $depth,
                'max_depth' => $args['max_depth'],
                'reply_text' => esc_html__('Reply', 'worzen'),
                'before'    => '<span class="text-primary hover:text-secondary transition duration-300">',
                'after'     => '</span>',
            ))); ?>
        </div>
    </li>
    <?php
}

/**
 * Security: Remove WordPress version from head
 */
remove_action('wp_head', 'wp_generator');

/**
 * Performance: Disable emoji scripts
 */
function worzen_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
}
add_action('init', 'worzen_disable_emojis');

/**
 * Handle Contact Form Submission
 */
function worzen_handle_contact_form() {
    // Verify nonce
    if (!isset($_POST['worzen_contact_nonce']) || !wp_verify_nonce($_POST['worzen_contact_nonce'], 'worzen_contact_form')) {
        wp_die('Security check failed');
    }

    // Sanitize form data
    $name    = sanitize_text_field($_POST['contact_name']);
    $email   = sanitize_email($_POST['contact_email']);
    $subject = sanitize_text_field($_POST['contact_subject']);
    $message = sanitize_textarea_field($_POST['contact_message']);

    // Validate email
    if (!is_email($email)) {
        wp_redirect(add_query_arg('contact', 'invalid_email', wp_get_referer()));
        exit;
    }

    // Prepare email
    $to = get_option('admin_email');
    $email_subject = '[' . get_bloginfo('name') . '] ' . $subject;
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message\n";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . get_bloginfo('name') . ' <' . get_option('admin_email') . '>',
        'Reply-To: ' . $name . ' <' . $email . '>'
    );

    // Send email
    $sent = wp_mail($to, $email_subject, $email_message, $headers);

    // Redirect with status
    if ($sent) {
        wp_redirect(add_query_arg('contact', 'success', wp_get_referer()));
    } else {
        wp_redirect(add_query_arg('contact', 'error', wp_get_referer()));
    }
    exit;
}
add_action('admin_post_worzen_contact_form', 'worzen_handle_contact_form');
add_action('admin_post_nopriv_worzen_contact_form', 'worzen_handle_contact_form');

/**
 * Handle Newsletter Subscription
 */
function worzen_handle_newsletter() {
    // Verify nonce
    if (!isset($_POST['worzen_newsletter_nonce']) || !wp_verify_nonce($_POST['worzen_newsletter_nonce'], 'worzen_newsletter')) {
        wp_die('Security check failed');
    }

    // Sanitize email
    $email = sanitize_email($_POST['newsletter_email']);

    // Validate email
    if (!is_email($email)) {
        wp_redirect(add_query_arg('newsletter', 'invalid_email', wp_get_referer()));
        exit;
    }

    // Store subscriber (you can integrate with a newsletter service here)
    // For now, we'll just send a notification email
    $to = get_option('admin_email');
    $subject = '[' . get_bloginfo('name') . '] New Newsletter Subscriber';
    $message = "New newsletter subscription:\n\nEmail: $email\n";

    $headers = array('Content-Type: text/plain; charset=UTF-8');

    wp_mail($to, $subject, $message, $headers);

    // Redirect with success
    wp_redirect(add_query_arg('newsletter', 'success', wp_get_referer()));
    exit;
}
add_action('admin_post_worzen_newsletter_subscribe', 'worzen_handle_newsletter');
add_action('admin_post_nopriv_worzen_newsletter_subscribe', 'worzen_handle_newsletter');

/**
 * Display Contact Form Messages
 */
function worzen_contact_form_messages() {
    if (isset($_GET['contact'])) {
        $status = $_GET['contact'];

        echo '<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">';

        if ($status === 'success') {
            echo '<div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg" role="alert">';
            echo '<p class="font-bold">Success!</p>';
            echo '<p>Thank you for your message. We\'ll get back to you soon.</p>';
            echo '</div>';
        } elseif ($status === 'error') {
            echo '<div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg" role="alert">';
            echo '<p class="font-bold">Error!</p>';
            echo '<p>There was an error sending your message. Please try again.</p>';
            echo '</div>';
        } elseif ($status === 'invalid_email') {
            echo '<div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 rounded-lg" role="alert">';
            echo '<p class="font-bold">Invalid Email!</p>';
            echo '<p>Please enter a valid email address.</p>';
            echo '</div>';
        }

        echo '</div>';
    }

    if (isset($_GET['newsletter'])) {
        $status = $_GET['newsletter'];

        echo '<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">';

        if ($status === 'success') {
            echo '<div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg" role="alert">';
            echo '<p class="font-bold">Subscribed!</p>';
            echo '<p>Thank you for subscribing to our newsletter.</p>';
            echo '</div>';
        } elseif ($status === 'invalid_email') {
            echo '<div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 rounded-lg" role="alert">';
            echo '<p class="font-bold">Invalid Email!</p>';
            echo '<p>Please enter a valid email address.</p>';
            echo '</div>';
        }

        echo '</div>';
    }
}
add_action('wp_body_open', 'worzen_contact_form_messages');

/**
 * ============================================================================
 * PRODUCT LANDING PAGE META BOXES
 * ============================================================================
 *
 * Add custom meta boxes for product landing pages
 * Allows easy management of product details like price, URLs, ratings, etc.
 */

/**
 * Add Product Meta Box
 */
function worzen_add_product_meta_boxes() {
    add_meta_box(
        'product_details',
        'Product Details',
        'worzen_product_details_callback',
        'page',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'worzen_add_product_meta_boxes');

/**
 * Product Meta Box Callback
 */
function worzen_product_details_callback($post) {
    // Add nonce for security
    wp_nonce_field('worzen_product_meta', 'worzen_product_meta_nonce');

    // Get existing values
    $tagline = get_post_meta($post->ID, 'product_tagline', true);
    $price = get_post_meta($post->ID, 'product_price', true);
    $type = get_post_meta($post->ID, 'product_type', true);
    $category = get_post_meta($post->ID, 'product_category', true);
    $demo_url = get_post_meta($post->ID, 'product_demo_url', true);
    $download_url = get_post_meta($post->ID, 'product_download_url', true);
    $purchase_url = get_post_meta($post->ID, 'product_purchase_url', true);
    $wordpress_url = get_post_meta($post->ID, 'product_wordpress_url', true);
    $rating = get_post_meta($post->ID, 'product_rating', true);
    $users = get_post_meta($post->ID, 'product_users', true);
    $version = get_post_meta($post->ID, 'product_version', true);
    ?>

    <style>
        .worzen-product-meta-table {
            width: 100%;
            border-collapse: collapse;
        }
        .worzen-product-meta-table th {
            width: 200px;
            text-align: left;
            padding: 15px 10px;
            font-weight: 600;
            vertical-align: top;
        }
        .worzen-product-meta-table td {
            padding: 15px 10px;
        }
        .worzen-product-meta-table input[type="text"],
        .worzen-product-meta-table input[type="url"],
        .worzen-product-meta-table select {
            width: 100%;
            max-width: 600px;
        }
        .worzen-product-meta-table .description {
            color: #666;
            font-style: italic;
            margin-top: 5px;
        }
        .worzen-meta-section {
            background: #f9f9f9;
            padding: 15px;
            margin: 20px 0;
            border-left: 4px solid #6366f1;
        }
        .worzen-meta-section h4 {
            margin: 0 0 10px 0;
            color: #6366f1;
        }
    </style>

    <div class="worzen-meta-section">
        <h4>📝 Basic Information</h4>
        <table class="worzen-product-meta-table">
            <tr>
                <th><label for="product_tagline">Product Tagline *</label></th>
                <td>
                    <input type="text" id="product_tagline" name="product_tagline" value="<?php echo esc_attr($tagline); ?>" class="large-text" placeholder="e.g., Clean up your WordPress site in minutes">
                    <p class="description">Short, compelling description (shown in hero section)</p>
                </td>
            </tr>
            <tr>
                <th><label for="product_type">Product Type *</label></th>
                <td>
                    <select id="product_type" name="product_type">
                        <option value="">-- Select Type --</option>
                        <option value="free" <?php selected($type, 'free'); ?>>Free</option>
                        <option value="premium" <?php selected($type, 'premium'); ?>>Premium</option>
                    </select>
                    <p class="description">Is this a free or premium product?</p>
                </td>
            </tr>
            <tr>
                <th><label for="product_category">Category *</label></th>
                <td>
                    <select id="product_category" name="product_category">
                        <option value="">-- Select Category --</option>
                        <option value="plugin" <?php selected($category, 'plugin'); ?>>Plugin</option>
                        <option value="theme" <?php selected($category, 'theme'); ?>>Theme</option>
                    </select>
                    <p class="description">Plugin or Theme?</p>
                </td>
            </tr>
            <tr>
                <th><label for="product_price">Price</label></th>
                <td>
                    <input type="text" id="product_price" name="product_price" value="<?php echo esc_attr($price); ?>" placeholder="39" style="width: 100px;">
                    <p class="description">For premium products only (number only, no $ sign)</p>
                </td>
            </tr>
        </table>
    </div>

    <div class="worzen-meta-section">
        <h4>⭐ Product Stats</h4>
        <table class="worzen-product-meta-table">
            <tr>
                <th><label for="product_rating">Rating</label></th>
                <td>
                    <input type="text" id="product_rating" name="product_rating" value="<?php echo esc_attr($rating); ?>" placeholder="5.0" style="width: 100px;">
                    <p class="description">Star rating (e.g., 4.8, 5.0)</p>
                </td>
            </tr>
            <tr>
                <th><label for="product_users">Active Users</label></th>
                <td>
                    <input type="text" id="product_users" name="product_users" value="<?php echo esc_attr($users); ?>" placeholder="500+" style="width: 150px;">
                    <p class="description">Number of active installations (e.g., 500+, 1,000+)</p>
                </td>
            </tr>
            <tr>
                <th><label for="product_version">Version</label></th>
                <td>
                    <input type="text" id="product_version" name="product_version" value="<?php echo esc_attr($version); ?>" placeholder="1.0.0" style="width: 150px;">
                    <p class="description">Current version number</p>
                </td>
            </tr>
        </table>
    </div>

    <div class="worzen-meta-section">
        <h4>🔗 URLs & Links</h4>
        <table class="worzen-product-meta-table">
            <tr>
                <th><label for="product_demo_url">Demo URL</label></th>
                <td>
                    <input type="url" id="product_demo_url" name="product_demo_url" value="<?php echo esc_url($demo_url); ?>" class="large-text" placeholder="https://demo.yoursite.com">
                    <p class="description">Link to live demo (optional)</p>
                </td>
            </tr>
            <tr>
                <th><label for="product_download_url">Download URL</label></th>
                <td>
                    <input type="url" id="product_download_url" name="product_download_url" value="<?php echo esc_url($download_url); ?>" class="large-text" placeholder="https://wordpress.org/plugins/your-plugin/">
                    <p class="description">For FREE products - WordPress.org download link</p>
                </td>
            </tr>
            <tr>
                <th><label for="product_purchase_url">Purchase URL</label></th>
                <td>
                    <input type="url" id="product_purchase_url" name="product_purchase_url" value="<?php echo esc_url($purchase_url); ?>" class="large-text" placeholder="https://yoursite.com/checkout">
                    <p class="description">For PREMIUM products - Checkout/purchase page link</p>
                </td>
            </tr>
            <tr>
                <th><label for="product_wordpress_url">WordPress.org URL</label></th>
                <td>
                    <input type="url" id="product_wordpress_url" name="product_wordpress_url" value="<?php echo esc_url($wordpress_url); ?>" class="large-text" placeholder="https://wordpress.org/plugins/your-plugin/">
                    <p class="description">WordPress.org plugin/theme page (if applicable)</p>
                </td>
            </tr>
        </table>
    </div>

    <p style="background: #fff3cd; padding: 15px; border-left: 4px solid #ffc107; margin-top: 20px;">
        <strong>💡 Quick Tips:</strong><br>
        • Fields marked with * are required<br>
        • For FREE products: Fill in "Download URL"<br>
        • For PREMIUM products: Fill in "Price" and "Purchase URL"<br>
        • Use the WordPress editor below to add detailed product description, features, and benefits
    </p>
    <?php
}

/**
 * Save Product Meta Box Data
 */
function worzen_save_product_meta($post_id) {
    // Check nonce
    if (!isset($_POST['worzen_product_meta_nonce']) || !wp_verify_nonce($_POST['worzen_product_meta_nonce'], 'worzen_product_meta')) {
        return;
    }

    // Check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save fields
    $fields = array(
        'product_tagline',
        'product_price',
        'product_type',
        'product_category',
        'product_demo_url',
        'product_download_url',
        'product_purchase_url',
        'product_wordpress_url',
        'product_rating',
        'product_users',
        'product_version'
    );

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post', 'worzen_save_product_meta');

/**
 * ============================================================================
 * CUSTOM POST TYPE: PRODUCTS
 * ============================================================================
 *
 * Register custom post type for products with categories and featured meta
 */

/**
 * Register Products Custom Post Type
 */
function worzen_register_products_post_type() {
    $labels = array(
        'name'                  => _x('Worzen Products', 'Post Type General Name', 'worzen'),
        'singular_name'         => _x('Worzen Product', 'Post Type Singular Name', 'worzen'),
        'menu_name'             => __('Worzen Products', 'worzen'),
        'name_admin_bar'        => __('Worzen Product', 'worzen'),
        'archives'              => __('Worzen Product Archives', 'worzen'),
        'attributes'            => __('Worzen Product Attributes', 'worzen'),
        'parent_item_colon'     => __('Parent Worzen Product:', 'worzen'),
        'all_items'             => __('All Worzen Products', 'worzen'),
        'add_new_item'          => __('Add New Worzen Product', 'worzen'),
        'add_new'               => __('Add New', 'worzen'),
        'new_item'              => __('New Worzen Product', 'worzen'),
        'edit_item'             => __('Edit Worzen Product', 'worzen'),
        'update_item'           => __('Update Worzen Product', 'worzen'),
        'view_item'             => __('View Worzen Product', 'worzen'),
        'view_items'            => __('View Worzen Products', 'worzen'),
        'search_items'          => __('Search Worzen Product', 'worzen'),
        'not_found'             => __('Not found', 'worzen'),
        'not_found_in_trash'    => __('Not found in Trash', 'worzen'),
        'featured_image'        => __('Product Image', 'worzen'),
        'set_featured_image'    => __('Set product image', 'worzen'),
        'remove_featured_image' => __('Remove product image', 'worzen'),
        'use_featured_image'    => __('Use as product image', 'worzen'),
        'insert_into_item'      => __('Insert into product', 'worzen'),
        'uploaded_to_this_item' => __('Uploaded to this product', 'worzen'),
        'items_list'            => __('Worzen Products list', 'worzen'),
        'items_list_navigation' => __('Worzen Products list navigation', 'worzen'),
        'filter_items_list'     => __('Filter worzen products list', 'worzen'),
    );

    $args = array(
        'label'                 => __('Worzen Product', 'worzen'),
        'description'           => __('Worzen Products for display on the website', 'worzen'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'taxonomies'            => array('product_category'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-products',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );

    register_post_type('worzen-product', $args);
}
add_action('init', 'worzen_register_products_post_type', 0);

/**
 * Register Product Categories Taxonomy
 */
function worzen_register_product_categories() {
    $labels = array(
        'name'                       => _x('Product Categories', 'Taxonomy General Name', 'worzen'),
        'singular_name'              => _x('Product Category', 'Taxonomy Singular Name', 'worzen'),
        'menu_name'                  => __('Categories', 'worzen'),
        'all_items'                  => __('All Categories', 'worzen'),
        'parent_item'                => __('Parent Category', 'worzen'),
        'parent_item_colon'          => __('Parent Category:', 'worzen'),
        'new_item_name'              => __('New Category Name', 'worzen'),
        'add_new_item'               => __('Add New Category', 'worzen'),
        'edit_item'                  => __('Edit Category', 'worzen'),
        'update_item'                => __('Update Category', 'worzen'),
        'view_item'                  => __('View Category', 'worzen'),
        'separate_items_with_commas' => __('Separate categories with commas', 'worzen'),
        'add_or_remove_items'        => __('Add or remove categories', 'worzen'),
        'choose_from_most_used'      => __('Choose from the most used', 'worzen'),
        'popular_items'              => __('Popular Categories', 'worzen'),
        'search_items'               => __('Search Categories', 'worzen'),
        'not_found'                  => __('Not Found', 'worzen'),
        'no_terms'                   => __('No categories', 'worzen'),
        'items_list'                 => __('Categories list', 'worzen'),
        'items_list_navigation'      => __('Categories list navigation', 'worzen'),
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => false,
        'show_in_rest'               => true,
    );

    register_taxonomy('product_category', array('worzen-product'), $args);
}
add_action('init', 'worzen_register_product_categories', 0);

/**
 * Add Product Meta Boxes for Custom Post Type
 */
function worzen_add_product_cpt_meta_boxes() {
    add_meta_box(
        'product_cpt_details',
        'Product Details',
        'worzen_product_cpt_details_callback',
        'worzen-product',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'worzen_add_product_cpt_meta_boxes');

/**
 * Product CPT Meta Box Callback
 */
function worzen_product_cpt_details_callback($post) {
    // Add nonce for security
    wp_nonce_field('worzen_product_cpt_meta', 'worzen_product_cpt_meta_nonce');

    // Get existing values
    $price = get_post_meta($post->ID, '_product_price', true);
    $rating = get_post_meta($post->ID, '_product_rating', true);
    $users = get_post_meta($post->ID, '_product_users', true);
    $badges = get_post_meta($post->ID, '_product_badges', true);
    if (!is_array($badges)) {
        $badges = array();
    }
    $featured = get_post_meta($post->ID, '_product_featured', true);
    $product_url = get_post_meta($post->ID, '_product_url', true);
    $url_new_tab = get_post_meta($post->ID, '_product_url_new_tab', true);
    $product_icon = get_post_meta($post->ID, '_product_icon', true);
    ?>

    <style>
        .worzen-product-cpt-meta-table {
            width: 100%;
            border-collapse: collapse;
        }
        .worzen-product-cpt-meta-table th {
            width: 200px;
            text-align: left;
            padding: 15px 10px;
            font-weight: 600;
            vertical-align: top;
        }
        .worzen-product-cpt-meta-table td {
            padding: 15px 10px;
        }
        .worzen-product-cpt-meta-table input[type="text"],
        .worzen-product-cpt-meta-table input[type="url"],
        .worzen-product-cpt-meta-table input[type="number"] {
            width: 100%;
            max-width: 600px;
        }
        .worzen-product-cpt-meta-table .description {
            color: #666;
            font-style: italic;
            margin-top: 5px;
        }
        .worzen-meta-section-cpt {
            background: #f9f9f9;
            padding: 15px;
            margin: 20px 0;
            border-left: 4px solid #6366f1;
        }
        .worzen-meta-section-cpt h4 {
            margin: 0 0 10px 0;
            color: #6366f1;
        }
        .featured-checkbox {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }
    </style>

    <div class="worzen-meta-section-cpt">
        <h4>⭐ Featured Product</h4>
        <table class="worzen-product-cpt-meta-table">
            <tr>
                <th><label for="product_featured">Show on Homepage</label></th>
                <td>
                    <label style="display: flex; align-items: center;">
                        <input type="checkbox" id="product_featured" name="product_featured" value="1" class="featured-checkbox" <?php checked($featured, '1'); ?>>
                        <span>Mark this product as featured (will appear in "Our Premium Products" section on homepage)</span>
                    </label>
                </td>
            </tr>
        </table>
    </div>

    <div class="worzen-meta-section-cpt">
        <h4>💰 Pricing & Badges</h4>
        <table class="worzen-product-cpt-meta-table">
            <tr>
                <th><label for="product_price">Price</label></th>
                <td>
                    <input type="text" id="product_price" name="product_price" value="<?php echo esc_attr($price); ?>" placeholder="59 or Free" style="width: 150px;">
                    <p class="description">Enter price (e.g., "59" for $59) or "Free" for free products</p>
                </td>
            </tr>
            <tr>
                <th><label>Badges</label></th>
                <td>
                    <div style="display: flex; flex-direction: column; gap: 10px;">
                        <?php
                        $available_badges = array('Premium', 'Free', 'New', 'Popular');
                        foreach ($available_badges as $badge_option) :
                            $checked = in_array($badge_option, $badges) ? 'checked' : '';
                        ?>
                            <label style="display: flex; align-items: center; gap: 8px;">
                                <input type="checkbox" name="product_badges[]" value="<?php echo esc_attr($badge_option); ?>" <?php echo $checked; ?>>
                                <span><?php echo esc_html($badge_option); ?></span>
                            </label>
                        <?php endforeach; ?>
                    </div>
                    <p class="description">Select one or more badges to display on product card (optional)</p>
                </td>
            </tr>
        </table>
    </div>

    <div class="worzen-meta-section-cpt">
        <h4>📊 Product Stats</h4>
        <table class="worzen-product-cpt-meta-table">
            <tr>
                <th><label for="product_rating">Rating</label></th>
                <td>
                    <input type="number" id="product_rating" name="product_rating" value="<?php echo esc_attr($rating); ?>" placeholder="4.9" step="0.1" min="0" max="5" style="width: 100px;">
                    <p class="description">Star rating (0-5, e.g., 4.9)</p>
                </td>
            </tr>
            <tr>
                <th><label for="product_users">Active Users</label></th>
                <td>
                    <input type="text" id="product_users" name="product_users" value="<?php echo esc_attr($users); ?>" placeholder="5,000+" style="width: 150px;">
                    <p class="description">Number of active users (e.g., "5,000+")</p>
                </td>
            </tr>
        </table>
    </div>

    <div class="worzen-meta-section-cpt">
        <h4>🎨 Product Icon</h4>
        <table class="worzen-product-cpt-meta-table">
            <tr>
                <th><label for="product_icon">SVG Icon Code</label></th>
                <td>
                    <textarea id="product_icon" name="product_icon" rows="6" class="large-text code" placeholder='<svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">&#10;    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M..."/>&#10;</svg>'><?php echo esc_textarea($product_icon); ?></textarea>
                    <p class="description">Paste SVG icon code here (displayed on homepage when no featured image is set). Get free icons from <a href="https://heroicons.com/" target="_blank">Heroicons</a> or <a href="https://fontawesome.com/" target="_blank">Font Awesome</a></p>
                    <?php if (!empty($product_icon)) : ?>
                        <div style="margin-top: 10px; padding: 15px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 8px; display: inline-flex; align-items: center; justify-content: center;">
                            <div style="color: white;">
                                <?php echo $product_icon; // Output the SVG for preview ?>
                            </div>
                        </div>
                        <p class="description" style="margin-top: 5px;"><em>Preview of your icon above</em></p>
                    <?php endif; ?>
                </td>
            </tr>
        </table>
    </div>

    <div class="worzen-meta-section-cpt">
        <h4>🔗 Product URL</h4>
        <table class="worzen-product-cpt-meta-table">
            <tr>
                <th><label for="product_url">View Details URL</label></th>
                <td>
                    <input type="url" id="product_url" name="product_url" value="<?php echo esc_url($product_url); ?>" class="large-text" placeholder="https://example.com/product">
                    <p class="description">URL for "View Details" button (optional - leave empty for # link)</p>
                </td>
            </tr>
            <tr>
                <th><label for="product_url_new_tab">Open in New Tab</label></th>
                <td>
                    <label style="display: flex; align-items: center; gap: 8px;">
                        <input type="checkbox" id="product_url_new_tab" name="product_url_new_tab" value="1" <?php checked($url_new_tab, '1'); ?>>
                        <span>Open link in new tab (target="_blank")</span>
                    </label>
                    <p class="description">Check this to open the URL in a new browser tab</p>
                </td>
            </tr>
        </table>
    </div>

    <p style="background: #fff3cd; padding: 15px; border-left: 4px solid #ffc107; margin-top: 20px;">
        <strong>💡 Quick Tips:</strong><br>
        • Set a <strong>Featured Image</strong> for the product (recommended size: 800x600px)<br>
        • Add a custom <strong>SVG Icon</strong> to display on homepage when no featured image is set<br>
        • Assign <strong>Product Categories</strong> in the right sidebar for filtering<br>
        • Use the <strong>Excerpt</strong> field for the product description shown on cards<br>
        • Check <strong>"Show on Homepage"</strong> to feature this product on the homepage<br>
        • The main content editor can be used for detailed product information
    </p>
    <?php
}

/**
 * Save Product CPT Meta Box Data
 */
function worzen_save_product_cpt_meta($post_id) {
    // Check nonce
    if (!isset($_POST['worzen_product_cpt_meta_nonce']) || !wp_verify_nonce($_POST['worzen_product_cpt_meta_nonce'], 'worzen_product_cpt_meta')) {
        return;
    }

    // Check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save fields
    $fields = array(
        'product_price' => '_product_price',
        'product_rating' => '_product_rating',
        'product_users' => '_product_users',
        'product_url' => '_product_url',
    );

    foreach ($fields as $field => $meta_key) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $meta_key, sanitize_text_field($_POST[$field]));
        }
    }

    // Handle badges (multiple checkboxes)
    if (isset($_POST['product_badges']) && is_array($_POST['product_badges'])) {
        $badges = array_map('sanitize_text_field', $_POST['product_badges']);
        update_post_meta($post_id, '_product_badges', $badges);
    } else {
        // If no badges selected, save empty array
        update_post_meta($post_id, '_product_badges', array());
    }

    // Handle product icon (SVG code)
    if (isset($_POST['product_icon'])) {
        // Allow SVG tags and attributes
        $allowed_svg_tags = array(
            'svg' => array(
                'class' => array(),
                'aria-hidden' => array(),
                'aria-labelledby' => array(),
                'role' => array(),
                'xmlns' => array(),
                'width' => array(),
                'height' => array(),
                'viewbox' => array(),
                'viewBox' => array(),
                'fill' => array(),
                'stroke' => array(),
                'stroke-width' => array(),
            ),
            'g' => array('fill' => array()),
            'title' => array('title' => array()),
            'path' => array(
                'd' => array(),
                'fill' => array(),
                'stroke' => array(),
                'stroke-width' => array(),
                'stroke-linecap' => array(),
                'stroke-linejoin' => array(),
            ),
            'circle' => array(
                'cx' => array(),
                'cy' => array(),
                'r' => array(),
                'fill' => array(),
                'stroke' => array(),
                'stroke-width' => array(),
            ),
            'rect' => array(
                'x' => array(),
                'y' => array(),
                'width' => array(),
                'height' => array(),
                'fill' => array(),
                'stroke' => array(),
                'stroke-width' => array(),
            ),
            'line' => array(
                'x1' => array(),
                'y1' => array(),
                'x2' => array(),
                'y2' => array(),
                'stroke' => array(),
                'stroke-width' => array(),
            ),
            'polygon' => array(
                'points' => array(),
                'fill' => array(),
                'stroke' => array(),
                'stroke-width' => array(),
            ),
            'polyline' => array(
                'points' => array(),
                'fill' => array(),
                'stroke' => array(),
                'stroke-width' => array(),
            ),
        );
        $icon_svg = wp_kses($_POST['product_icon'], $allowed_svg_tags);
        update_post_meta($post_id, '_product_icon', $icon_svg);
    }

    // Handle featured checkbox
    $featured = isset($_POST['product_featured']) ? '1' : '0';
    update_post_meta($post_id, '_product_featured', $featured);

    // Handle URL new tab checkbox
    $url_new_tab = isset($_POST['product_url_new_tab']) ? '1' : '0';
    update_post_meta($post_id, '_product_url_new_tab', $url_new_tab);
}
add_action('save_post_worzen-product', 'worzen_save_product_cpt_meta');
