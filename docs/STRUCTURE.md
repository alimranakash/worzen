# Worzen Theme - File Structure & Documentation

## Complete Directory Structure

```
worzen/
│
├── assets/                          # Theme assets directory
│   ├── css/
│   │   └── custom.css              # Custom CSS styles (WordPress blocks, animations, utilities)
│   ├── js/
│   │   └── main.js                 # Main JavaScript (mobile menu, smooth scroll, form validation)
│   └── images/
│       └── README.md               # Instructions for adding images
│
├── 404.php                         # 404 error page template
├── archive.php                     # Archive pages template (categories, tags, dates)
├── comments.php                    # Comments display and form template
├── footer.php                      # Footer template (widgets, copyright, social links)
├── functions.php                   # Theme functions and setup (MOST IMPORTANT FILE)
├── header.php                      # Header template (navigation, logo, mobile menu)
├── index.php                       # Main blog/posts listing template
├── page.php                        # Single page template
├── searchform.php                  # Search form template
├── sidebar.php                     # Sidebar widget area template
├── single.php                      # Single post template
├── style.css                       # Theme stylesheet (metadata and WordPress core styles)
├── template-home.php               # Custom homepage template (LANDING PAGE)
│
├── .gitignore                      # Git ignore file
├── INSTALLATION.md                 # Complete installation guide
├── README.md                       # Theme documentation
├── STRUCTURE.md                    # This file - structure documentation
└── screenshot.txt                  # Instructions for adding theme screenshot

```

## File Descriptions

### Core Template Files

#### `style.css`
- **Purpose**: Theme metadata and WordPress core alignment classes
- **Contains**: Theme information (name, author, version), WordPress alignment classes
- **Note**: Actual styling is done with Tailwind CSS, not this file

#### `functions.php` ⭐ MOST IMPORTANT
- **Purpose**: Theme setup, configuration, and custom functions
- **Contains**:
  - Theme setup (title-tag, post-thumbnails, menus, custom-logo)
  - Enqueue scripts and styles (Tailwind CSS, custom CSS/JS)
  - Tailwind configuration
  - Widget areas registration
  - Custom navigation walker
  - Pagination function
  - Comment callback
  - Security and performance optimizations

#### `header.php`
- **Purpose**: Site header and navigation
- **Contains**:
  - HTML `<head>` section
  - Site logo or title
  - Primary navigation menu (desktop and mobile)
  - Mobile menu toggle button
  - Opening tags for main content area

#### `footer.php`
- **Purpose**: Site footer
- **Contains**:
  - Footer widget areas (3 columns)
  - Company information
  - Social media links
  - Quick links menu
  - Copyright information
  - Closing HTML tags

#### `index.php`
- **Purpose**: Main blog listing page (fallback template)
- **Contains**:
  - Blog post grid (3 columns)
  - Post cards with featured images
  - Post meta (date, author)
  - Excerpts and read more links
  - Pagination
  - No posts found message

### Page Templates

#### `template-home.php` ⭐ CUSTOM HOMEPAGE
- **Purpose**: Custom homepage template
- **Template Name**: "Home Page"
- **Contains**:
  - Hero section with gradient background
  - Products section (7 product cards)
  - About section with company info
  - Testimonials section (3 testimonials)
  - Contact form section
- **Usage**: Assign to a page via Page Attributes > Template

#### `page.php`
- **Purpose**: Default single page template
- **Contains**:
  - Page title
  - Featured image (if set)
  - Page content
  - Comments (if enabled)

#### `single.php`
- **Purpose**: Single blog post template
- **Contains**:
  - Post title and meta
  - Featured image
  - Post content
  - Categories and tags
  - Author bio
  - Previous/Next post navigation
  - Comments section

#### `archive.php`
- **Purpose**: Archive pages (categories, tags, dates, authors)
- **Contains**:
  - Archive title and description
  - Post grid (same as index.php)
  - Pagination

#### `404.php`
- **Purpose**: Error page for missing content
- **Contains**:
  - 404 error message
  - Search form
  - Recent posts suggestions
  - Back to home button

### Component Templates

#### `comments.php`
- **Purpose**: Comments display and form
- **Contains**:
  - Comments list with custom styling
  - Comment form with Tailwind classes
  - Comment navigation

#### `sidebar.php`
- **Purpose**: Sidebar widget area
- **Contains**:
  - Widget area container
  - Conditional display (only if widgets are active)

#### `searchform.php`
- **Purpose**: Search form
- **Contains**:
  - Search input field
  - Search button with icon
  - Tailwind styling

### Assets

#### `assets/css/custom.css`
- **Purpose**: Additional custom styles
- **Contains**:
  - Custom logo styles
  - WordPress block styles
  - Custom animations
  - Gradient text utility
  - Custom scrollbar
  - Focus styles for accessibility
  - Print styles
  - Form styles
  - Comment form styles

#### `assets/js/main.js`
- **Purpose**: Interactive functionality
- **Contains**:
  - Mobile menu toggle
  - Smooth scrolling for anchor links
  - Header shadow on scroll
  - Lazy load images
  - Form validation
  - Back to top button

#### `assets/images/`
- **Purpose**: Theme images and icons
- **Usage**: Add logos, icons, placeholder images

## Template Hierarchy

WordPress uses a template hierarchy to determine which template file to use:

```
Homepage:
1. front-page.php
2. home.php
3. index.php

Single Post:
1. single-{post-type}-{slug}.php
2. single-{post-type}.php
3. single.php
4. singular.php
5. index.php

Page:
1. custom template (template-home.php)
2. page-{slug}.php
3. page-{id}.php
4. page.php
5. singular.php
6. index.php

Archive:
1. archive-{post-type}.php
2. archive.php
3. index.php

Category:
1. category-{slug}.php
2. category-{id}.php
3. category.php
4. archive.php
5. index.php

Search:
1. search.php
2. index.php

404:
1. 404.php
2. index.php
```

## Key Features by File

### Navigation System
- **Files**: `header.php`, `functions.php`
- **Features**: 
  - Responsive mobile menu
  - Custom walker for Tailwind classes
  - Sticky header
  - Logo support

### Widget System
- **Files**: `functions.php`, `sidebar.php`, `footer.php`
- **Areas**: 
  - Sidebar (1)
  - Footer columns (3)

### Styling System
- **Files**: `functions.php`, `assets/css/custom.css`
- **Method**: 
  - Tailwind CSS via CDN
  - Custom CSS for WordPress blocks
  - Inline Tailwind config

### Comment System
- **Files**: `comments.php`, `functions.php`, `single.php`
- **Features**: 
  - Custom comment callback
  - Styled comment form
  - Threaded comments support

## Customization Points

### Colors
- **File**: `functions.php`
- **Function**: `worzen_tailwind_config()`
- **Lines**: ~145-155

### Menus
- **File**: `functions.php`
- **Function**: `worzen_theme_setup()`
- **Locations**: Primary, Footer

### Widget Areas
- **File**: `functions.php`
- **Function**: `worzen_widgets_init()`
- **Areas**: Sidebar, Footer 1-3

### Homepage Content
- **File**: `template-home.php`
- **Sections**: Hero, Products, About, Testimonials, Contact

### Navigation Walker
- **File**: `functions.php`
- **Class**: `Worzen_Walker_Nav_Menu`
- **Purpose**: Add Tailwind classes to menu items

## WordPress Hooks Used

### Actions
- `after_setup_theme` - Theme setup
- `wp_enqueue_scripts` - Enqueue styles and scripts
- `wp_head` - Add Tailwind config
- `widgets_init` - Register widget areas
- `init` - Disable emojis

### Filters
- `excerpt_length` - Custom excerpt length
- `excerpt_more` - Custom excerpt more text
- `body_class` - Add custom body classes
- `nav_menu_css_class` - Custom menu classes

## Best Practices Implemented

1. **Security**
   - Escaped output (`esc_html`, `esc_url`, `esc_attr`)
   - Nonce verification for forms
   - No direct file access checks

2. **Performance**
   - Disabled emoji scripts
   - Removed WordPress version
   - Lazy loading support
   - Minimal dependencies

3. **Accessibility**
   - ARIA labels
   - Skip to content link
   - Keyboard navigation
   - Focus styles
   - Screen reader text

4. **SEO**
   - Semantic HTML5
   - Proper heading hierarchy
   - Schema-ready structure
   - Title tag support

5. **Internationalization**
   - Text domain: 'worzen'
   - All strings translatable
   - Translation ready

## Development Workflow

### Local Development
1. Install WordPress locally
2. Add theme to `/wp-content/themes/`
3. Activate theme
4. Make changes
5. Test thoroughly

### Production Deployment
1. Optimize images
2. Consider Tailwind build process
3. Minify CSS/JS
4. Test on staging
5. Deploy to production

## Future Enhancements

Potential additions:
- [ ] Custom post types
- [ ] WooCommerce integration
- [ ] Theme customizer options
- [ ] Dark mode
- [ ] Additional page templates
- [ ] Gutenberg blocks
- [ ] Translation files (.pot)

## Support Files

- `README.md` - General documentation
- `INSTALLATION.md` - Step-by-step installation
- `STRUCTURE.md` - This file
- `.gitignore` - Git ignore rules

---

**Last Updated**: 2025-10-14
**Version**: 1.0.0

