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

    // Enqueue custom CSS file (for any additional custom styles)
    wp_enqueue_style(
        'worzen-custom',
        WORZEN_THEME_URI . '/assets/css/custom.css',
        array(),
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

