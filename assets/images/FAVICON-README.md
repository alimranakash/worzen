# Worzen Site Icon / Favicon

This directory contains the Worzen brand site icon and favicon files.

## 📁 Files Included

- **site-icon.svg** - Vector version of the site icon (scalable)
- **generate-favicon.html** - Interactive tool to generate PNG favicons in multiple sizes

## 🎨 Design

The Worzen site icon features:
- Modern "W" lettermark
- Gradient background (Indigo → Purple → Pink)
- Clean, minimalist design
- High contrast for visibility at small sizes
- Professional appearance across all platforms

## 🚀 How to Use

### Method 1: WordPress Site Icon (Recommended)

1. Open `generate-favicon.html` in your web browser
2. Click "Download 512x512 (Site Icon)"
3. In WordPress Admin, go to: **Appearance → Customize → Site Identity**
4. Click "Select Site Icon"
5. Upload the downloaded `worzen-icon-512x512.png`
6. WordPress will automatically generate all required sizes

### Method 2: Manual Installation

Generate all sizes using the HTML tool:

1. **512x512** - WordPress Site Icon (required)
2. **192x192** - Android Chrome icon
3. **180x180** - Apple Touch Icon
4. **32x32** - Standard favicon

Then add to your theme's `header.php` or use a plugin.

## 📐 Sizes Generated

| Size | Purpose | Filename |
|------|---------|----------|
| 512x512 | WordPress Site Icon | worzen-icon-512x512.png |
| 192x192 | Android Chrome | worzen-icon-192x192.png |
| 180x180 | Apple Touch Icon | worzen-icon-180x180.png |
| 32x32 | Browser Favicon | worzen-icon-32x32.png |

## 🎯 WordPress Integration

WordPress automatically handles favicons when you upload a Site Icon through:
- **Appearance → Customize → Site Identity → Site Icon**

No code changes needed! WordPress will:
- Generate all required sizes
- Add proper meta tags
- Serve optimized icons for each device
- Cache icons for performance

## 🔧 Advanced: Manual Meta Tags

If you need to add custom favicon meta tags, add this to `header.php`:

```php
<!-- Favicons -->
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/worzen-icon-32x32.png">
<link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/assets/images/worzen-icon-192x192.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/worzen-icon-180x180.png">
```

## 🎨 Brand Colors Used

- **Primary (Indigo):** #6366f1
- **Secondary (Purple):** #8b5cf6
- **Accent (Pink):** #ec4899

## 📱 Platform Support

✅ WordPress Site Icon  
✅ Browser Favicon (Chrome, Firefox, Safari, Edge)  
✅ Android Home Screen  
✅ iOS Home Screen  
✅ Windows Tiles  
✅ Progressive Web Apps (PWA)  

## 🔄 Updating the Icon

To update the site icon:

1. Edit `site-icon.svg` with your preferred SVG editor
2. Open `generate-favicon.html` in a browser
3. Generate new PNG files
4. Re-upload to WordPress via Appearance → Customize → Site Identity

## 💡 Tips

- **Keep it simple:** Icons look best when they're simple and recognizable at small sizes
- **High contrast:** Use colors that stand out against various backgrounds
- **Test at small sizes:** View your icon at 32x32 to ensure it's still recognizable
- **Consistent branding:** Use the same colors as your logo and theme

## 📞 Support

For questions about the Worzen theme or site icon, visit:
- Theme Documentation: `/docs/`
- WordPress Codex: https://codex.wordpress.org/Creating_a_Favicon

---

**Created for Worzen WordPress Theme**  
Version: 1.0  
Last Updated: 2026-01-15

