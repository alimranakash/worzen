# Gutenberg Block Support Documentation

## Overview

The Worzen theme now has **full Gutenberg (Block Editor) support** with proper styling for all core WordPress blocks. This document explains what was implemented and how to use Gutenberg blocks in your content.

---

## ✅ What Was Fixed

### 1. **Theme Support Added** (`functions.php`)

The following Gutenberg-related theme supports were added:

```php
// Core Gutenberg Support
add_theme_support('wp-block-styles');           // Enable default block styles
add_theme_support('align-wide');                // Wide alignment support
add_theme_support('align-full');                // Full alignment support
add_theme_support('responsive-embeds');         // Responsive embeds
add_theme_support('editor-styles');             // Editor styles support

// Enhanced Gutenberg Features
add_theme_support('custom-line-height');        // Custom line height control
add_theme_support('custom-spacing');            // Custom spacing control
add_theme_support('custom-units');              // Custom units (px, em, rem, etc.)
add_theme_support('link-color');                // Link color control
add_theme_support('appearance-tools');          // Appearance tools panel
add_theme_support('border');                    // Border controls
```

### 2. **Block Styles Enqueued** (`functions.php`)

WordPress core block styles are now properly loaded:

```php
// Frontend block styles
wp_enqueue_style('wp-block-library');           // Core block styles
wp_enqueue_style('wp-block-library-theme');     // Theme block styles
wp_enqueue_style('global-styles');              // Dynamic block styles

// Custom Gutenberg compatibility CSS
wp_enqueue_style('worzen-gutenberg');           // Theme-specific block styles
```

### 3. **Editor Styles Enqueued** (`functions.php`)

Block editor now matches frontend appearance:

```php
function worzen_block_editor_assets() {
    wp_enqueue_style('worzen-editor-styles');   // Editor-specific styles
    wp_enqueue_style('worzen-editor-google-fonts'); // Google Fonts in editor
}
add_action('enqueue_block_editor_assets', 'worzen_block_editor_assets');
```

### 4. **New CSS Files Created**

#### **`assets/css/gutenberg.css`**
- Comprehensive styles for all core Gutenberg blocks
- Alignment classes (alignwide, alignfull, aligncenter, etc.)
- Typography blocks (headings, paragraphs, quotes)
- Media blocks (images, galleries, covers)
- Layout blocks (columns, groups, separators)
- Interactive blocks (buttons, tables)

#### **`assets/css/editor-style.css`**
- Styles for the block editor interface
- Matches frontend typography and colors
- Ensures WYSIWYG editing experience

### 5. **Template Files Updated**

All content display templates now use the `.entry-content` class:

**Updated Files:**
- `page.php` - Single page template
- `single.php` - Single post template
- `template-home.php` - Homepage template
- `template-products.php` - Products page template
- `template-product-single.php` - Single product template

**Before:**
```php
<div class="prose prose-lg max-w-none">
    <?php the_content(); ?>
</div>
```

**After:**
```php
<div class="entry-content prose prose-lg max-w-none">
    <?php the_content(); ?>
</div>
```

### 6. **Enhanced `custom.css`**

Added comprehensive block styles including:
- Entry content wrapper styles
- All alignment classes
- Typography block styles
- List, table, and separator styles
- Column and group block layouts
- Cover block positioning
- Proper spacing and margins

---

## 🎨 Supported Gutenberg Blocks

### **Typography Blocks**
- ✅ Paragraph
- ✅ Heading (H1-H6)
- ✅ List (Ordered & Unordered)
- ✅ Quote
- ✅ Pullquote
- ✅ Code
- ✅ Preformatted
- ✅ Verse

### **Media Blocks**
- ✅ Image
- ✅ Gallery
- ✅ Audio
- ✅ Video
- ✅ Cover
- ✅ File
- ✅ Media & Text

### **Design Blocks**
- ✅ Button
- ✅ Columns
- ✅ Group
- ✅ Separator
- ✅ Spacer

### **Widget Blocks**
- ✅ Shortcode
- ✅ Archives
- ✅ Calendar
- ✅ Categories
- ✅ Latest Posts
- ✅ Latest Comments

### **Embed Blocks**
- ✅ YouTube
- ✅ Twitter
- ✅ Facebook
- ✅ Instagram
- ✅ WordPress
- ✅ And all other WordPress embeds

---

## 🎯 How to Use Gutenberg Blocks

### **1. Creating a New Page/Post**

1. Go to **WordPress Admin → Pages → Add New** (or Posts → Add New)
2. Click the **"+"** button to add a new block
3. Choose from available blocks
4. Add your content
5. Publish!

### **2. Using Alignment Options**

Gutenberg blocks support three alignment options:

- **Default**: Normal content width (800px max)
- **Wide**: Wider content (1200px max) - Click the "Wide width" button in block toolbar
- **Full**: Full viewport width - Click the "Full width" button in block toolbar

### **3. Styling Buttons**

The theme automatically styles button blocks with gradient backgrounds:

1. Add a **Button** block
2. Enter button text
3. Set the link URL
4. The button will automatically use the theme's gradient colors (primary → secondary)

### **4. Creating Columns**

1. Add a **Columns** block
2. Choose the number of columns (2, 3, or custom)
3. Add content to each column
4. Columns automatically stack on mobile devices

### **5. Adding Images**

1. Add an **Image** block
2. Upload or select an image
3. Add alt text for accessibility
4. Optionally add a caption
5. Choose alignment (left, center, right, wide, full)

### **6. Using Cover Blocks**

1. Add a **Cover** block
2. Upload a background image or choose a color
3. Add text content inside
4. Adjust opacity and overlay color
5. Minimum height is set to 400px

---

## 🎨 Theme Colors in Gutenberg

The theme provides custom color palette in the block editor:

- **Primary**: `#6366f1` (Indigo)
- **Secondary**: `#8b5cf6` (Purple)
- **Accent**: `#ec4899` (Pink)
- **Dark**: `#1f2937` (Gray-900)
- **Light**: `#f9fafb` (Gray-50)

These colors are available in:
- Text color picker
- Background color picker
- Button color options
- Border color options

---

## 📱 Responsive Design

All Gutenberg blocks are fully responsive:

- **Desktop**: Full layout with all features
- **Tablet**: Adjusted spacing and column layouts
- **Mobile**: Single column layout, stacked elements

---

## 🔧 Customization

### **Changing Block Colors**

Edit `functions.php` and modify the Tailwind config:

```php
function worzen_tailwind_config() {
    ?>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#YOUR_COLOR',
                        secondary: '#YOUR_COLOR',
                        accent: '#YOUR_COLOR',
                    },
                }
            }
        }
    </script>
    <?php
}
```

### **Customizing Block Styles**

Edit `assets/css/gutenberg.css` to modify block-specific styles:

```css
/* Example: Change quote border color */
.wp-block-quote {
    border-left: 4px solid #YOUR_COLOR;
}

/* Example: Change button style */
.wp-block-button__link {
    background: linear-gradient(to right, #COLOR1, #COLOR2);
}
```

### **Adjusting Content Width**

Edit `functions.php`:

```php
function worzen_content_width() {
    $GLOBALS['content_width'] = 1200; // Change this value
}
```

---

## 🐛 Troubleshooting

### **Blocks Not Displaying Properly**

1. **Clear browser cache**: Hard refresh with `Ctrl+F5` (Windows) or `Cmd+Shift+R` (Mac)
2. **Check if styles are loaded**: View page source and search for `gutenberg.css`
3. **Verify wp_head() is present**: Check `header.php` for `<?php wp_head(); ?>`
4. **Verify wp_footer() is present**: Check `footer.php` for `<?php wp_footer(); ?>`

### **Editor Doesn't Match Frontend**

1. Clear WordPress cache (if using a caching plugin)
2. Regenerate CSS (if using a CSS optimization plugin)
3. Check if `editor-style.css` is loaded in the editor

### **Alignment Not Working**

1. Verify theme support is added: `add_theme_support('align-wide');`
2. Check if alignment CSS classes are in `gutenberg.css`
3. Ensure `.entry-content` wrapper is present in templates

---

## 📚 Additional Resources

- [WordPress Block Editor Handbook](https://developer.wordpress.org/block-editor/)
- [Gutenberg Block Library](https://wordpress.org/gutenberg/)
- [Theme Support Documentation](https://developer.wordpress.org/themes/basics/theme-functions/)

---

## ✨ Best Practices

1. **Always use the `.entry-content` class** when displaying `the_content()`
2. **Test blocks on mobile devices** to ensure responsive design
3. **Use semantic HTML** - Gutenberg generates clean, semantic markup
4. **Add alt text to images** for accessibility
5. **Use headings hierarchically** (H1 → H2 → H3, etc.)
6. **Preview before publishing** to ensure blocks display correctly

---

## 🎉 Summary

The Worzen theme now has **complete Gutenberg support** with:

✅ All core WordPress blocks styled and functional
✅ Responsive design for all devices
✅ WYSIWYG editor experience
✅ Custom color palette integration
✅ Wide and full alignment support
✅ Proper spacing and typography
✅ Accessibility-friendly markup
✅ Tailwind CSS compatibility

You can now use the full power of the WordPress Block Editor to create beautiful, dynamic content!

