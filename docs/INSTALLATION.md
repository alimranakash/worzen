# Worzen Theme - Complete Installation Guide

This guide will walk you through installing and setting up the Worzen WordPress theme.

## Prerequisites

- WordPress 5.8 or higher
- PHP 7.4 or higher
- A WordPress installation (local or live server)

## Step 1: Install the Theme

### Option A: Upload via WordPress Admin (Recommended)

1. **Zip the theme folder**
   - Compress the entire `worzen` folder into a ZIP file
   - Make sure the ZIP contains the theme files directly (not a folder within a folder)

2. **Upload to WordPress**
   - Log in to your WordPress admin panel
   - Go to **Appearance > Themes**
   - Click **Add New** at the top
   - Click **Upload Theme**
   - Click **Choose File** and select your `worzen.zip` file
   - Click **Install Now**

3. **Activate the theme**
   - Once installed, click **Activate**
   - Your theme is now active!

### Option B: Manual Installation via FTP

1. **Upload via FTP**
   - Connect to your server via FTP (using FileZilla, Cyberduck, etc.)
   - Navigate to `/wp-content/themes/`
   - Upload the entire `worzen` folder

2. **Activate in WordPress**
   - Log in to WordPress admin
   - Go to **Appearance > Themes**
   - Find "Worzen" and click **Activate**

## Step 2: Create and Set Up the Homepage

1. **Create a new page**
   - Go to **Pages > Add New**
   - Title: "Home" (or any name you prefer)
   - Don't add any content yet

2. **Select the Home Page template**
   - In the right sidebar, find **Page Attributes**
   - Under **Template**, select **Home Page**
   - Click **Publish**

3. **Set as homepage**
   - Go to **Settings > Reading**
   - Select **A static page** (instead of "Your latest posts")
   - Under **Homepage**, select the "Home" page you just created
   - Click **Save Changes**

4. **View your homepage**
   - Visit your site's URL
   - You should see the full landing page with hero, products, about, testimonials, and contact sections

## Step 3: Configure Navigation Menus

### Primary Menu (Header)

1. **Create a menu**
   - Go to **Appearance > Menus**
   - Click **create a new menu**
   - Name it "Primary Menu" or "Main Menu"
   - Click **Create Menu**

2. **Add menu items**
   - On the left, you'll see Pages, Posts, Custom Links, Categories
   - Check the pages you want in your menu (e.g., Home, About, Blog, Contact)
   - Click **Add to Menu**

3. **Arrange menu items**
   - Drag and drop items to reorder them
   - Indent items to create dropdown submenus

4. **Assign to location**
   - Under **Menu Settings**, check **Primary Menu**
   - Click **Save Menu**

### Footer Menu (Optional)

1. Follow the same steps as above
2. Create a new menu called "Footer Menu"
3. Add relevant links (Privacy Policy, Terms, Support, etc.)
4. Assign to **Footer Menu** location

## Step 4: Add Your Logo

1. **Upload logo**
   - Go to **Appearance > Customize**
   - Click **Site Identity**
   - Click **Select Logo**
   - Upload your logo image (PNG or SVG recommended)
   - Adjust the size if needed
   - Click **Publish**

2. **Logo specifications**
   - Recommended width: 200-400px
   - Recommended height: 40-80px
   - Format: PNG (with transparency) or SVG
   - The theme will automatically resize it

## Step 5: Customize Site Information

1. **Site title and tagline**
   - Go to **Settings > General**
   - Set your **Site Title** (e.g., "Worzen")
   - Set your **Tagline** (e.g., "Premium WordPress Plugins & SaaS Tools")
   - Click **Save Changes**

2. **Update footer information**
   - The footer automatically uses your site name
   - To customize further, edit `footer.php`

## Step 6: Create Essential Pages

Create these pages for a complete website:

1. **Blog Page**
   - Go to **Pages > Add New**
   - Title: "Blog"
   - Leave content empty
   - Publish
   - Go to **Settings > Reading**
   - Set this page as your **Posts page**

2. **About Page**
   - Create a new page titled "About"
   - Add your company information
   - Publish

3. **Contact Page**
   - Create a new page titled "Contact"
   - Add contact information
   - (Optional) Install Contact Form 7 plugin for a contact form
   - Publish

4. **Privacy Policy Page**
   - WordPress may have created this automatically
   - If not, create one manually
   - Add your privacy policy content

## Step 7: Set Up Widgets (Optional)

1. **Sidebar widgets**
   - Go to **Appearance > Widgets**
   - Find **Sidebar** widget area
   - Add widgets like:
     - Search
     - Recent Posts
     - Categories
     - Tags

2. **Footer widgets**
   - Add widgets to **Footer 1**, **Footer 2**, and **Footer 3**
   - Suggestions:
     - Footer 1: About/Text widget
     - Footer 2: Recent Posts or Custom Menu
     - Footer 3: Contact information or Social links

## Step 8: Customize Colors (Optional)

The default colors are:
- Primary: Indigo (#6366f1)
- Secondary: Purple (#8b5cf6)

To change them:

1. **Edit functions.php**
   - Go to **Appearance > Theme File Editor**
   - Click on `functions.php`
   - Find the `worzen_tailwind_config()` function (around line 145)
   - Change the color values:
   ```php
   colors: {
       primary: '#YOUR_COLOR',
       secondary: '#YOUR_COLOR',
   }
   ```
   - Click **Update File**

## Step 9: Add Content

1. **Create blog posts**
   - Go to **Posts > Add New**
   - Write your first blog post
   - Add a featured image (recommended size: 1200x630px)
   - Publish

2. **Add featured images**
   - Always add featured images to posts
   - They appear in blog listings and single post pages
   - Recommended size: 1200x630px

## Step 10: Install Recommended Plugins

While the theme works standalone, these plugins enhance functionality:

1. **Contact Form 7** - For contact forms
   - Install and activate
   - Create a contact form
   - Add shortcode to your Contact page

2. **Yoast SEO** - For SEO optimization
   - Install and activate
   - Run the configuration wizard

3. **WP Super Cache** - For performance
   - Install and activate
   - Enable caching

4. **Akismet** - For spam protection
   - Usually pre-installed
   - Activate and configure

## Troubleshooting

### Theme doesn't look right

1. **Clear cache**
   - Clear your browser cache
   - Clear WordPress cache (if using a caching plugin)
   - Hard refresh: Ctrl+Shift+R (Windows) or Cmd+Shift+R (Mac)

2. **Check Tailwind CDN**
   - Make sure your site can access external CDNs
   - Check browser console for errors

### Menu not showing

1. Make sure you've created a menu
2. Make sure the menu is assigned to "Primary Menu" location
3. Clear cache and refresh

### Homepage not displaying correctly

1. Make sure you selected the "Home Page" template
2. Make sure you set it as the static homepage in Settings > Reading
3. Clear cache

### Images not displaying

1. Check file permissions on the uploads folder
2. Make sure images are uploaded correctly
3. Try re-uploading images

## Next Steps

1. **Add your products**
   - Edit `template-home.php` to update product information
   - Add real product links and descriptions

2. **Customize content**
   - Update the About section with your company info
   - Add real testimonials
   - Update contact information

3. **Optimize for production**
   - Consider using a build process for Tailwind CSS
   - Optimize images
   - Set up caching
   - Configure CDN

4. **Test thoroughly**
   - Test on different devices
   - Test all links
   - Test forms
   - Check browser compatibility

## Support

If you need help:
- Check the README.md file
- Visit WordPress.org support forums
- Check theme documentation

## Congratulations! 🎉

Your Worzen theme is now installed and configured. Start creating amazing content!

