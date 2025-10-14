# Worzen Theme - Quick Start Guide

Get your Worzen theme up and running in 10 minutes!

## 🚀 Quick Installation (5 Steps)

### 1. Install Theme (2 minutes)
```
1. Zip the 'worzen' folder
2. WordPress Admin → Appearance → Themes → Add New → Upload Theme
3. Choose worzen.zip → Install Now → Activate
```

### 2. Create Homepage (1 minute)
```
1. Pages → Add New
2. Title: "Home"
3. Template: Select "Home Page" (right sidebar)
4. Publish
```

### 3. Set as Homepage (30 seconds)
```
1. Settings → Reading
2. Select "A static page"
3. Homepage: Select "Home"
4. Save Changes
```

### 4. Create Menu (2 minutes)
```
1. Appearance → Menus
2. Create new menu: "Primary Menu"
3. Add pages: Home, About, Blog, Contact
4. Check "Primary Menu" location
5. Save Menu
```

### 5. Add Logo (1 minute)
```
1. Appearance → Customize → Site Identity
2. Upload logo (recommended: 200-400px wide)
3. Publish
```

## ✅ Done! Visit your site to see the result.

---

## 📋 Essential Pages to Create

Create these pages for a complete website:

### Blog Page
```
Pages → Add New
Title: "Blog"
Template: Default
Publish

Then: Settings → Reading → Posts page: Select "Blog"
```

### About Page
```
Pages → Add New
Title: "About"
Add your company information
Publish
```

### Contact Page
```
Pages → Add New
Title: "Contact"
Add contact information
Publish
```

---

## 🎨 Customize Colors

Edit `functions.php` (line ~150):

```php
colors: {
    primary: '#6366f1',    // Change this
    secondary: '#8b5cf6',  // Change this
}
```

**Popular Color Schemes:**
- Blue: `#3b82f6` / `#1d4ed8`
- Green: `#10b981` / `#059669`
- Purple: `#8b5cf6` / `#7c3aed`
- Red: `#ef4444` / `#dc2626`

---

## 📝 Edit Homepage Content

Edit `template-home.php` to customize:

### Hero Section (Line ~20)
- Change headline
- Update subheadline
- Modify button text/links

### Products Section (Line ~40)
- Update product names
- Change descriptions
- Add real product links

### About Section (Line ~180)
- Add company information
- Update statistics
- Modify expertise list

### Testimonials (Line ~240)
- Replace with real testimonials
- Update customer names
- Change ratings

### Contact Form (Line ~300)
- Customize form fields
- Update placeholder text
- Add form handler

---

## 🔧 Common Customizations

### Change Site Title & Tagline
```
Settings → General
Site Title: "Your Company Name"
Tagline: "Your Company Tagline"
```

### Add Widgets to Footer
```
Appearance → Widgets
Drag widgets to Footer 1, Footer 2, Footer 3
```

### Create Blog Posts
```
Posts → Add New
Add title, content, featured image (1200x630px)
Publish
```

### Update Social Links
Edit `footer.php` (line ~50):
```php
$social_links = array(
    'wordpress' => 'YOUR_URL',
    'twitter'   => 'YOUR_URL',
    'facebook'  => 'YOUR_URL',
    'github'    => 'YOUR_URL',
);
```

---

## 🎯 Recommended Plugins

Install these for enhanced functionality:

1. **Contact Form 7** - Contact forms
2. **Yoast SEO** - SEO optimization
3. **WP Super Cache** - Performance
4. **Akismet** - Spam protection

---

## 🐛 Troubleshooting

### Theme looks broken?
1. Clear browser cache (Ctrl+Shift+R)
2. Clear WordPress cache
3. Check if Tailwind CDN is loading (check browser console)

### Menu not showing?
1. Create a menu (Appearance → Menus)
2. Assign to "Primary Menu" location
3. Save menu

### Homepage not displaying?
1. Check template is set to "Home Page"
2. Check Settings → Reading is set correctly
3. Clear cache

### Images not showing?
1. Check file permissions
2. Re-upload images
3. Check image URLs

---

## 📱 Mobile Testing

Test your site on:
- iPhone (Safari)
- Android (Chrome)
- Tablet (iPad)

Use browser dev tools:
- Chrome: F12 → Toggle device toolbar
- Firefox: F12 → Responsive Design Mode

---

## 🚀 Performance Tips

1. **Optimize Images**
   - Use WebP format
   - Compress before uploading
   - Max width: 1920px

2. **Enable Caching**
   - Install WP Super Cache
   - Enable caching

3. **Use CDN**
   - Cloudflare (free)
   - StackPath
   - KeyCDN

4. **Minify Assets**
   - Use Autoptimize plugin
   - Or build Tailwind CSS locally

---

## 📚 Next Steps

1. **Add Real Content**
   - Replace placeholder text
   - Add real product information
   - Upload company images

2. **SEO Setup**
   - Install Yoast SEO
   - Add meta descriptions
   - Submit sitemap to Google

3. **Analytics**
   - Add Google Analytics
   - Set up Google Search Console
   - Monitor traffic

4. **Security**
   - Install Wordfence
   - Enable SSL (HTTPS)
   - Regular backups

---

## 📖 Full Documentation

For detailed information, see:
- `README.md` - Complete documentation
- `INSTALLATION.md` - Detailed installation guide
- `STRUCTURE.md` - File structure and customization

---

## 💡 Pro Tips

1. **Always use featured images** on blog posts (1200x630px)
2. **Keep menus simple** - 5-7 items max
3. **Test on mobile** - 60%+ traffic is mobile
4. **Optimize for speed** - Use caching and CDN
5. **Regular updates** - Keep WordPress and plugins updated

---

## 🆘 Need Help?

- Check documentation files
- WordPress.org support forums
- Theme author: Al Imran Akash

---

## ✨ You're All Set!

Your Worzen theme is ready to go. Start creating amazing content!

**Happy building! 🎉**

