# Worzen Pricing Table Block

A beautiful, fully customizable Gutenberg block for creating professional pricing tables with multiple plans and features.

## 🎨 Features

### **Design**
- ✅ World-class UI/UX with modern, professional appearance
- ✅ Gradient colors matching Worzen theme (Primary, Secondary, Accent)
- ✅ Smooth transitions and hover effects
- ✅ Responsive design (Desktop, Tablet, Mobile)
- ✅ Tailwind CSS integration
- ✅ Inter font family
- ✅ Animated card entrance
- ✅ Featured plan highlighting with "Most Popular" badge

### **Customization**
- ✅ Add/remove unlimited pricing columns
- ✅ Edit plan name for each column
- ✅ Customize price, currency symbol, and billing period
- ✅ Add/edit/remove feature list items
- ✅ Toggle features on/off with checkmarks or X marks
- ✅ Customize button text and URL for each plan
- ✅ Highlight/feature specific plans
- ✅ Color customization (background, text, button)
- ✅ Show/hide badges and descriptions
- ✅ Reorder plans with up/down arrows

### **Technical**
- ✅ Custom Gutenberg block (not a shortcode)
- ✅ Server-side rendering for better performance
- ✅ Block.json metadata
- ✅ Appears in "Worzen" category in block inserter
- ✅ Compatible with existing Gutenberg support
- ✅ Wide and full alignment support
- ✅ Accessibility-friendly markup
- ✅ Print-friendly styles

---

## 📁 File Structure

```
blocks/pricing-table/
├── block.json          # Block metadata and configuration
├── block.js            # Editor JavaScript (React components)
├── render.php          # Frontend rendering template
├── style.css           # Frontend styles
├── editor.css          # Editor-specific styles
└── README.md           # This documentation
```

---

## 🚀 Usage

### **Adding the Block**

1. **In the WordPress Editor:**
   - Click the **"+"** button to add a new block
   - Search for **"Worzen Pricing"** or find it in the **"Worzen"** category
   - Click to insert the block

2. **Default Configuration:**
   - The block comes with 3 pre-configured plans:
     - **Free Plan** - $0 forever
     - **Annual Plan** - $99 per year (Featured)
     - **Lifetime Plan** - $299 one-time

### **Customizing Plans**

#### **Edit Existing Plans:**

1. Click on the pricing block in the editor
2. Each plan card shows:
   - **Plan Name** - The title of the plan
   - **Description** - Short description below the name
   - **Currency** - Symbol (e.g., $, €, £)
   - **Price** - Numeric value
   - **Period** - Billing cycle (e.g., "per month", "per year", "one-time")
   - **Features** - List of included/excluded features
   - **Button Text** - CTA button label
   - **Button URL** - Link destination
   - **Featured Toggle** - Mark as featured plan

#### **Add New Plan:**

1. Click the **"+ Add Plan"** button at the top
2. A new plan card will appear with default values
3. Customize all fields as needed

#### **Remove Plan:**

1. Click the **"Remove"** button on the plan card
2. Note: You must have at least 1 plan (cannot remove the last one)

#### **Reorder Plans:**

1. Use the **↑** and **↓** arrows on each plan card
2. Plans will reorder left to right on the frontend

### **Managing Features**

#### **Add Feature:**

1. Scroll to the "Features" section in a plan
2. Click **"+ Add Feature"**
3. Enter the feature text
4. Check/uncheck the checkbox to mark as included/excluded

#### **Edit Feature:**

1. Click in the feature text field
2. Type your feature description
3. Toggle the checkbox to include/exclude

#### **Remove Feature:**

1. Click the **"×"** button next to the feature
2. Feature will be removed immediately

### **Featured Plan**

The featured plan gets special treatment:

- ✅ **"Most Popular" badge** at the top (if badges are enabled)
- ✅ **Gradient border** (primary to secondary)
- ✅ **Slightly larger scale** (105%)
- ✅ **Enhanced shadow** effect
- ✅ **Pulsing badge animation**
- ✅ **Higher z-index** (appears above other cards)

To mark a plan as featured:
1. Toggle the **"Featured Plan"** switch in the plan editor
2. Only one plan should be featured at a time for best results

---

## ⚙️ Settings

### **Inspector Controls (Right Sidebar)**

#### **General Settings:**

- **Show Badges** - Toggle to show/hide the "Most Popular" badge on featured plans
- **Show Descriptions** - Toggle to show/hide plan descriptions

### **Block Alignment:**

The block supports:
- **Default** - Normal width
- **Wide** - Wider content area
- **Full** - Full viewport width

---

## 🎨 Styling & Customization

### **Default Colors**

The block uses the Worzen theme color palette:

- **Primary**: `#6366f1` (Indigo)
- **Secondary**: `#8b5cf6` (Purple)
- **Accent**: `#ec4899` (Pink)

### **Gradient Buttons**

All CTA buttons use a gradient by default:
```css
background: linear-gradient(to right, #6366f1, #8b5cf6);
```

### **Hover Effects**

- **Cards**: Lift up 8px with enhanced shadow
- **Buttons**: Lift up 4px with gradient shadow
- **Features**: Slide right 4px on hover

### **Responsive Breakpoints**

- **Mobile** (< 768px): Single column, stacked cards
- **Tablet** (768px - 1024px): 2 columns for 2-4 plans
- **Desktop** (> 1024px): 3-4 columns based on plan count

---

## 🔧 Advanced Customization

### **Modifying Default Plans**

Edit `block.json` and change the `attributes.plans.default` array:

```json
{
  "id": "custom-plan",
  "name": "Custom Plan",
  "price": "49",
  "currency": "$",
  "period": "per month",
  "description": "Your description",
  "features": [
    { "text": "Feature 1", "included": true },
    { "text": "Feature 2", "included": false }
  ],
  "buttonText": "Get Started",
  "buttonUrl": "#",
  "featured": false,
  "backgroundColor": "#ffffff",
  "textColor": "#1f2937",
  "buttonColor": ""
}
```

### **Custom CSS**

Add custom styles to `style.css`:

```css
/* Example: Change card border radius */
.worzen-pricing-card {
    border-radius: 24px;
}

/* Example: Change button style */
.worzen-pricing-button {
    border-radius: 999px;
    text-transform: uppercase;
}
```

### **Custom Colors**

To change theme colors, edit `functions.php`:

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

---

## 📱 Responsive Design

### **Desktop (> 1024px)**
- 3 columns for 3 plans
- 4 columns for 4+ plans
- Full hover effects
- Featured plan scaled to 105%

### **Tablet (768px - 1024px)**
- 2 columns for 2-4 plans
- Adjusted spacing
- Full hover effects

### **Mobile (< 768px)**
- Single column, stacked
- Featured plan not scaled (same size)
- Reduced hover lift (4px instead of 8px)
- Touch-friendly spacing

---

## ♿ Accessibility

- ✅ Semantic HTML structure
- ✅ Proper heading hierarchy
- ✅ ARIA labels where needed
- ✅ Keyboard navigation support
- ✅ Focus indicators on buttons
- ✅ Color contrast compliance
- ✅ Screen reader friendly
- ✅ Reduced motion support

---

## 🖨️ Print Styles

The block includes print-friendly styles:
- Cards don't break across pages
- Hover effects disabled
- Buttons show as outlined
- Optimized for black & white printing

---

## 🐛 Troubleshooting

### **Block Not Appearing in Editor**

1. Clear browser cache
2. Check if block is registered: `wp.blocks.getBlockTypes()`
3. Verify `blocks/pricing-table/block.json` exists
4. Check browser console for JavaScript errors

### **Styles Not Loading**

1. Verify `style.css` and `editor.css` exist
2. Clear WordPress cache (if using caching plugin)
3. Hard refresh browser: `Ctrl+F5` (Windows) or `Cmd+Shift+R` (Mac)
4. Check if Tailwind CSS is loaded

### **Featured Badge Not Showing**

1. Ensure "Show Badges" is enabled in Inspector Controls
2. Verify plan has `featured: true` attribute
3. Check if badge CSS is loaded

---

## 📚 Examples

### **Example 1: SaaS Pricing**

```
Free Plan - $0/forever
- 5 Projects
- Basic Support
- 1 GB Storage

Pro Plan - $29/month (Featured)
- Unlimited Projects
- Priority Support
- 100 GB Storage

Enterprise - Custom
- Everything in Pro
- Dedicated Support
- Unlimited Storage
```

### **Example 2: Product Tiers**

```
Basic - $9.99/month
- Feature A
- Feature B

Premium - $19.99/month (Featured)
- Everything in Basic
- Feature C
- Feature D

Ultimate - $39.99/month
- Everything in Premium
- Feature E
- Feature F
```

---

## 🎉 Best Practices

1. **Limit to 3-4 plans** for best visual impact
2. **Feature your best value plan** to guide users
3. **Use consistent feature lists** across all plans
4. **Keep descriptions short** (under 10 words)
5. **Use clear CTAs** ("Get Started", "Buy Now", "Contact Sales")
6. **Test on mobile devices** before publishing
7. **Use real pricing** (avoid "Coming Soon" or "TBD")
8. **Highlight differences** between plans clearly

---

## 📄 License

This block is part of the Worzen WordPress theme.

---

## 🆘 Support

For support, please contact the theme developer or refer to the Worzen theme documentation.

