# Worzen Pricing Block - Troubleshooting Guide

## Block Not Appearing in Gutenberg Inserter

If you cannot find the "Worzen Pricing" block in the Gutenberg block inserter, follow these steps:

### ✅ Step 1: Clear All Caches

**Browser Cache:**
- **Chrome/Edge**: Press `Ctrl+Shift+Delete` (Windows) or `Cmd+Shift+Delete` (Mac)
- **Or**: Hard refresh with `Ctrl+F5` (Windows) or `Cmd+Shift+R` (Mac)

**WordPress Cache:**
- If using a caching plugin (WP Super Cache, W3 Total Cache, etc.):
  - Go to the plugin settings
  - Click "Clear All Cache" or "Purge Cache"
  
**Server Cache:**
- If using XAMPP, restart Apache:
  - Open XAMPP Control Panel
  - Stop Apache
  - Start Apache again

### ✅ Step 2: Check Browser Console for JavaScript Errors

1. Open WordPress Admin → Pages → Add New
2. Press `F12` to open Developer Tools
3. Click on the **Console** tab
4. Look for messages starting with "Worzen Pricing Block:"
   - ✅ **Expected messages:**
     ```
     Worzen Pricing Block: Script loaded
     Worzen Pricing Block: wp.blocks is available
     Worzen Pricing Block: Attempting to register block...
     Worzen Pricing Block: Successfully registered!
     ```
   - ❌ **Error messages:** If you see any errors, note them down

5. Also check for any red error messages that mention:
   - `worzen/pricing-table`
   - `block.js`
   - `registerBlockType`

### ✅ Step 3: Verify Block Registration

**Method 1: Using Browser Console**

1. In the WordPress block editor, open the browser console (F12)
2. Type this command and press Enter:
   ```javascript
   wp.blocks.getBlockTypes().filter(block => block.name.includes('worzen'))
   ```
3. You should see an array with the `worzen/pricing-table` block
4. If the array is empty, the block is not registered

**Method 2: Using WordPress Debug**

1. Open `wp-config.php` in your WordPress root directory
2. Find the line `define('WP_DEBUG', false);`
3. Change it to:
   ```php
   define('WP_DEBUG', true);
   define('WP_DEBUG_LOG', true);
   define('WP_DEBUG_DISPLAY', false);
   ```
4. Save the file
5. Try to add a new page in WordPress
6. Check `wp-content/debug.log` for any PHP errors

### ✅ Step 4: Verify File Permissions

Make sure all block files are readable:

```bash
# In your theme directory
ls -la blocks/pricing-table/
```

All files should have read permissions (r--). If not:

```bash
chmod 644 blocks/pricing-table/*
```

### ✅ Step 5: Check if Gutenberg is Enabled

1. Go to **WordPress Admin → Settings → Writing**
2. Make sure you're using the Block Editor (not Classic Editor)
3. If you have the "Classic Editor" plugin installed, deactivate it temporarily

### ✅ Step 6: Verify Theme is Active

1. Go to **WordPress Admin → Appearance → Themes**
2. Make sure the **Worzen** theme is activated
3. If not, click "Activate" on the Worzen theme

### ✅ Step 7: Check for Plugin Conflicts

Some plugins can interfere with custom blocks:

1. Deactivate all plugins temporarily
2. Try to find the block in the inserter
3. If it appears, reactivate plugins one by one to find the conflict

### ✅ Step 8: Manually Test Block Registration

Create a test file in your theme root: `test-block.php`

```php
<?php
define('WP_USE_THEMES', false);
require_once('../../../wp-load.php');

$registry = WP_Block_Type_Registry::get_instance();
$block = $registry->get_registered('worzen/pricing-table');

if ($block) {
    echo "✅ Block is registered!\n";
    echo "Title: " . $block->title . "\n";
    echo "Category: " . $block->category . "\n";
} else {
    echo "❌ Block is NOT registered!\n";
}
```

Run it from command line:
```bash
php test-block.php
```

### ✅ Step 9: Check WordPress Version

The block requires WordPress 5.8 or higher.

1. Go to **WordPress Admin → Dashboard**
2. Check the WordPress version in the "At a Glance" widget
3. If it's below 5.8, update WordPress

### ✅ Step 10: Verify Block Category Exists

1. Open browser console in the block editor
2. Run this command:
   ```javascript
   wp.blocks.getCategories()
   ```
3. Look for an object with `slug: 'worzen'`
4. If it doesn't exist, the category filter isn't working

## Common Issues and Solutions

### Issue: "Block is registered but not visible in inserter"

**Solution:**
- The block category might not exist when the block tries to register
- Clear browser cache and hard refresh
- Check if the category appears in `wp.blocks.getCategories()`

### Issue: "JavaScript errors in console"

**Solution:**
- Check if all WordPress dependencies are loaded:
  ```javascript
  console.log(typeof wp.blocks);      // should be 'object'
  console.log(typeof wp.blockEditor); // should be 'object'
  console.log(typeof wp.components);  // should be 'object'
  ```
- If any are 'undefined', there's a script loading order issue

### Issue: "Block appears but shows error when inserted"

**Solution:**
- Check the render callback in `functions.php`
- Verify `render.php` file exists and has no PHP errors
- Check browser console for JavaScript errors

### Issue: "Block styles not loading"

**Solution:**
- Verify CSS files exist:
  - `blocks/pricing-table/style.css`
  - `blocks/pricing-table/editor.css`
- Check if styles are enqueued in browser Network tab (F12 → Network)
- Clear browser cache

## Still Not Working?

If you've tried all the above steps and the block still doesn't appear:

1. **Check the console logs** - The block now has detailed logging
2. **Take a screenshot** of any error messages
3. **Check the Network tab** (F12 → Network) to see if `block.js` is loading
4. **Verify the file path** - The script should load from:
   ```
   http://localhost/dev.wp/wp-content/themes/worzen/blocks/pricing-table/block.js
   ```

## Quick Checklist

- [ ] Cleared browser cache (Ctrl+F5)
- [ ] Cleared WordPress cache
- [ ] Restarted Apache (XAMPP)
- [ ] Checked browser console for errors
- [ ] Verified Worzen theme is active
- [ ] Verified Gutenberg editor is enabled (not Classic Editor)
- [ ] Checked WordPress version (5.8+)
- [ ] Deactivated plugins to test for conflicts
- [ ] Checked file permissions
- [ ] Verified block registration with test script

## Success Indicators

When everything is working correctly, you should see:

1. **In Browser Console:**
   ```
   Worzen Pricing Block: Script loaded
   Worzen Pricing Block: wp.blocks is available
   Worzen Pricing Block: Attempting to register block...
   Worzen Pricing Block: Successfully registered!
   ```

2. **In Block Inserter:**
   - Search for "Worzen" or "Pricing"
   - Block appears with money icon
   - Block is in the "Worzen" category

3. **When Inserted:**
   - Shows 3 default pricing plans
   - Inspector controls appear in the sidebar
   - No JavaScript errors in console

## Contact

If you continue to experience issues after following this guide, please provide:
- WordPress version
- Browser and version
- Console error messages (screenshots)
- Network tab showing block.js loading status

