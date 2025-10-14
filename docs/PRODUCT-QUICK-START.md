# Product Landing Pages - Quick Start Guide

**⏱️ Setup Time: 10-15 minutes per product**

---

## 🚀 3-Step Quick Setup

### Step 1: Create WordPress Page (2 minutes)

1. **WordPress Admin → Pages → Add New**
2. **Enter Title:** (e.g., "DeleteBulk")
3. **Set Permalink:** Click "Edit" next to permalink, make it match product name
4. **Select Template:** In right sidebar → Page Attributes → Template → "Product Landing Page"
5. **Click Publish**

---

### Step 2: Fill Product Details (5 minutes)

Scroll down to the **"Product Details"** meta box and fill in:

#### **Required Fields:**
- ✅ **Product Tagline** - Short description (e.g., "Clean up your WordPress site in minutes")
- ✅ **Product Type** - Select "Free" or "Premium"
- ✅ **Category** - Select "Plugin" or "Theme"

#### **For FREE Products:**
- ✅ **Download URL** - WordPress.org download link

#### **For PREMIUM Products:**
- ✅ **Price** - Number only (e.g., 39)
- ✅ **Purchase URL** - Your checkout page link

#### **Optional But Recommended:**
- ⭐ **Rating** - Star rating (e.g., 5.0)
- 👥 **Active Users** - User count (e.g., 500+)
- 📦 **Version** - Version number (e.g., 1.0.0)
- 🔗 **WordPress.org URL** - Plugin/theme page link
- 🎮 **Demo URL** - Live demo link

---

### Step 3: Add Page Content (5 minutes)

In the WordPress editor, add:

```markdown
## What is [Product Name]?

[Brief introduction - 2-3 sentences about what the product does]

## Why Choose [Product Name]?

- **Benefit 1:** Description
- **Benefit 2:** Description
- **Benefit 3:** Description
- **Benefit 4:** Description

## Perfect For:

- Use case 1
- Use case 2
- Use case 3

## How It Works

[Brief explanation of how to use the product - 3-4 sentences]
```

**Click Update** to save!

---

## 📋 Example: DeleteBulk Setup

### Product Details:
```
Product Tagline: Clean up your WordPress site in minutes
Product Type: Free
Category: Plugin
Rating: 5.0
Active Users: 500+
Version: 1.0.0
Download URL: https://wordpress.org/plugins/deletebulk/
WordPress.org URL: https://wordpress.org/plugins/deletebulk/
```

### Page Content:
```
## What is DeleteBulk?

DeleteBulk is the ultimate WordPress cleanup plugin that helps you bulk delete posts, pages, comments, users, and more with advanced filtering options. Save hours of manual work with our intuitive interface.

## Why Choose DeleteBulk?

- **Save Time:** Delete thousands of items in seconds instead of hours
- **Advanced Filters:** Target exactly what you want to delete with precision
- **Safe & Secure:** Preview before deleting, with built-in safety checks
- **No Coding Required:** Simple, intuitive interface anyone can use

## Perfect For:

- Cleaning up spam comments and users
- Removing old draft posts and pages
- Deleting unused media files
- Managing large WordPress sites
- Site migrations and cleanups

## How It Works

Simply install DeleteBulk, navigate to the plugin settings, select what you want to delete (posts, pages, comments, etc.), apply your filters, preview the items, and click delete. It's that simple!
```

---

## 📊 All Three Products - Quick Reference

### **1. DeleteBulk**
```
Title: DeleteBulk
Permalink: /deletebulk
Tagline: Clean up your WordPress site in minutes
Type: Free
Category: Plugin
Rating: 5.0
Users: 500+
Download: https://wordpress.org/plugins/deletebulk/
WordPress.org: https://wordpress.org/plugins/deletebulk/
```

### **2. Product View Count**
```
Title: Product View Count
Permalink: /product-view-count
Tagline: Track WooCommerce product views with real-time analytics
Type: Free
Category: Plugin
Rating: 4.8
Users: 200+
Download: https://wordpress.org/plugins/product-view-count/
WordPress.org: https://wordpress.org/plugins/product-view-count/
```

### **3. Suffix Master Pro**
```
Title: Suffix Master Pro
Permalink: /suffix-master
Tagline: Smart title, price & content branding for WordPress
Type: Premium
Category: Plugin
Price: 39
Rating: 5.0
Users: 1,500+
Purchase URL: [Your checkout URL]
Demo URL: [Your demo URL]
```

---

## ✅ Verification Checklist

After creating each product page:

- [ ] Page is published and accessible
- [ ] Template "Product Landing Page" is selected
- [ ] Product tagline appears in hero section
- [ ] Free/Premium badge shows correctly
- [ ] CTA buttons work (Download/Purchase)
- [ ] Links go to correct URLs
- [ ] Page content displays properly
- [ ] Responsive design works on mobile
- [ ] Product card on Products page links to this page

---

## 🎨 Optional Enhancements

### Add Featured Image
1. **Edit page**
2. **Right sidebar → Featured Image → Set featured image**
3. **Upload** product screenshot (1200x800px recommended)

### Add Custom Features Section
See `PRODUCT-LANDING-PAGES-SETUP.md` for advanced customization with features, screenshots, and stats sections.

---

## 🔗 Useful Links

- **Full Setup Guide:** `docs/PRODUCT-LANDING-PAGES-SETUP.md`
- **Template File:** `template-product-single.php`
- **Products Page:** `template-products.php`
- **Functions:** `functions.php` (lines 497-734)

---

## 🆘 Common Issues

**Q: Template not showing in dropdown?**  
A: Refresh the page editor. Make sure `template-product-single.php` is in theme root.

**Q: Product Details box not showing?**  
A: Make sure you added the code to `functions.php` and refreshed the page.

**Q: Links not working?**  
A: Go to Settings → Permalinks and click "Save Changes" to flush permalinks.

**Q: Styling broken?**  
A: Clear all caches (browser, WordPress, plugins). Check browser console for errors.

---

**Ready to create your product pages? Let's go! 🚀**

