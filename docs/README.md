# Worzen WordPress Theme

A modern, professional WordPress theme for software companies showcasing premium plugins and SaaS tools. Built with Tailwind CSS for a clean, responsive design.

## Features

- ✅ **Modern Design**: Clean, professional design with Tailwind CSS
- ✅ **Fully Responsive**: Mobile-first approach ensures perfect display on all devices
- ✅ **Custom Home Template**: Dedicated homepage template with hero, products, about, testimonials, and contact sections
- ✅ **SEO Optimized**: Semantic HTML5 markup and proper heading structure
- ✅ **Performance Focused**: Lightweight and optimized for speed
- ✅ **Accessibility Ready**: WCAG compliant with proper ARIA labels and keyboard navigation
- ✅ **Translation Ready**: Fully translatable with .pot file support
- ✅ **Custom Logo Support**: Upload your own logo via the WordPress Customizer
- ✅ **Navigation Menus**: Primary and footer menu locations
- ✅ **Widget Areas**: Sidebar and 3 footer widget areas
- ✅ **Blog Ready**: Beautiful blog layouts with post thumbnails and excerpts
- ✅ **Comments System**: Styled comment forms and display

## Installation

### Method 1: Upload via WordPress Admin

1. Download the theme as a ZIP file
2. Go to **Appearance > Themes > Add New**
3. Click **Upload Theme**
4. Choose the ZIP file and click **Install Now**
5. Click **Activate** once installed

### Method 2: Manual Installation

1. Download the theme files
2. Upload the `worzen` folder to `/wp-content/themes/`
3. Go to **Appearance > Themes**
4. Activate the **Worzen** theme

## Setup Instructions

### 1. Set Up the Homepage

1. Create a new page called "Home"
2. In the page editor, select the **Home Page** template from the Template dropdown
3. Go to **Settings > Reading**
4. Set "A static page" as your homepage
5. Select "Home" as your homepage

### 2. Configure Menus

1. Go to **Appearance > Menus**
2. Create a new menu for the primary navigation
3. Add pages/links to your menu
4. Assign it to the **Primary Menu** location
5. (Optional) Create a footer menu and assign it to the **Footer Menu** location

### 3. Add Your Logo

1. Go to **Appearance > Customize**
2. Click on **Site Identity**
3. Upload your logo under **Logo**
4. Adjust the logo size if needed

### 4. Customize Colors (Optional)

The theme uses a default color scheme with:
- Primary: Indigo (#6366f1)
- Secondary: Purple (#8b5cf6)

To customize colors, edit the Tailwind configuration in `functions.php` (line 145-155).

## File Structure

```
worzen/
├── assets/
│   ├── css/
│   │   └── custom.css          # Custom CSS styles
│   ├── js/
│   │   └── main.js             # JavaScript functionality
│   └── images/                 # Theme images (add your own)
├── 404.php                     # 404 error page template
├── comments.php                # Comments template
├── footer.php                  # Footer template
├── functions.php               # Theme functions and setup
├── header.php                  # Header template
├── index.php                   # Main blog template
├── page.php                    # Single page template
├── searchform.php              # Search form template
├── single.php                  # Single post template
├── style.css                   # Theme stylesheet (metadata)
├── template-home.php           # Custom homepage template
└── README.md                   # This file
```

## Customization

### Adding Custom CSS

Add custom CSS to `assets/css/custom.css` or use the WordPress Customizer:
1. Go to **Appearance > Customize**
2. Click **Additional CSS**
3. Add your custom CSS

### Modifying Colors

Edit the Tailwind configuration in `functions.php`:

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
                    }
                }
            }
        }
    </script>
    <?php
}
```

### Using a Build Process (Recommended for Production)

For production sites, it's recommended to use a build process instead of the Tailwind CDN:

1. Install Node.js and npm
2. Run `npm init -y` in the theme directory
3. Install Tailwind CSS: `npm install -D tailwindcss`
4. Create a `tailwind.config.js` file
5. Set up PostCSS and build process
6. Update `functions.php` to enqueue the compiled CSS instead of the CDN

## Widget Areas

The theme includes 4 widget areas:

1. **Sidebar**: Main sidebar for blog posts
2. **Footer 1**: First footer column
3. **Footer 2**: Second footer column
4. **Footer 3**: Third footer column

Add widgets via **Appearance > Widgets**

## Supported Plugins

The theme works great with:

- **Contact Form 7**: For contact forms
- **Yoast SEO**: For SEO optimization
- **WooCommerce**: For e-commerce functionality
- **Elementor**: For page building (optional)
- **Advanced Custom Fields**: For custom fields

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Opera (latest)

## Performance Tips

1. Use a caching plugin (WP Super Cache, W3 Total Cache)
2. Optimize images before uploading
3. Use a CDN for static assets
4. Enable GZIP compression
5. Minify CSS and JavaScript in production

## Support

For support, please visit:
- WordPress.org Support Forums
- Theme Documentation (coming soon)
- GitHub Issues (if applicable)

## Changelog

### Version 1.0.0
- Initial release
- Custom homepage template
- Blog and single post templates
- Responsive navigation
- Widget areas
- Custom logo support
- Translation ready

## Credits

- **Theme Author**: Al Imran Akash
- **Framework**: Tailwind CSS
- **Icons**: Heroicons (via SVG)
- **Fonts**: System fonts for optimal performance

## License

This theme is licensed under the GNU General Public License v2 or later.

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## Roadmap

- [ ] Add more page templates
- [ ] WooCommerce integration
- [ ] Theme customizer options
- [ ] Dark mode support
- [ ] Additional widget areas
- [ ] Custom post types support

---

**Developed with ❤️ for the WordPress community**

