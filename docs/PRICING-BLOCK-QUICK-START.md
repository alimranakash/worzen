# Worzen Pricing Block - Quick Start Guide

## 🚀 Getting Started in 3 Steps

### **Step 1: Add the Block**

1. Open any page or post in the WordPress editor
2. Click the **"+"** button to add a new block
3. Search for **"Worzen Pricing"**
4. Click to insert

**Alternative:** Find it in the **"Worzen"** category in the block inserter.

---

### **Step 2: Customize Your Plans**

The block comes with 3 default plans. You can:

#### **Edit Plan Details:**
- **Plan Name** - Change "Free", "Annual", "Lifetime" to your plan names
- **Price** - Enter your pricing (numbers only)
- **Currency** - Change $ to €, £, or any symbol
- **Period** - Edit "per month", "per year", "one-time", etc.
- **Description** - Add a short tagline

#### **Manage Features:**
- ✅ **Check** = Feature included (green checkmark)
- ⬜ **Uncheck** = Feature not included (gray X)
- Click **"+ Add Feature"** to add more
- Click **"×"** to remove a feature

#### **Customize Button:**
- **Button Text** - "Get Started", "Buy Now", "Contact Sales", etc.
- **Button URL** - Link to checkout, contact form, or external page

#### **Mark as Featured:**
- Toggle **"Featured Plan"** to highlight your best value
- Featured plans get a "Most Popular" badge and special styling

---

### **Step 3: Add or Remove Plans**

#### **Add a New Plan:**
1. Click **"+ Add Plan"** button at the top
2. A new plan card appears
3. Fill in all the details

#### **Remove a Plan:**
1. Click **"Remove"** button on the plan you want to delete
2. Note: You must keep at least 1 plan

#### **Reorder Plans:**
1. Use **↑** and **↓** arrows on each plan
2. Plans display left to right in the order shown

---

## 🎨 Visual Customization

### **Settings Panel (Right Sidebar)**

Click the block, then look at the right sidebar:

- **Show Badges** - Toggle "Most Popular" badge on/off
- **Show Descriptions** - Toggle plan descriptions on/off

### **Block Alignment**

Use the toolbar to set alignment:
- **Default** - Normal width
- **Wide** - Wider content area
- **Full** - Full viewport width

---

## 💡 Pro Tips

### **Best Practices:**

1. **Use 3 plans** - This is the sweet spot for most businesses
2. **Feature your middle plan** - It's usually the best value
3. **Keep feature lists consistent** - Same number of features across all plans
4. **Use action-oriented CTAs** - "Start Free Trial" beats "Learn More"
5. **Test on mobile** - Preview on different devices before publishing

### **Common Pricing Structures:**

#### **SaaS/Subscription:**
```
Free - $0/forever
Starter - $9/month
Pro - $29/month (Featured)
Enterprise - Custom
```

#### **One-Time Purchase:**
```
Basic - $49 one-time
Professional - $99 one-time (Featured)
Ultimate - $199 one-time
```

#### **Tiered Service:**
```
Bronze - $99/year
Silver - $199/year (Featured)
Gold - $399/year
```

---

## 🎯 Example: Creating a SaaS Pricing Table

### **Plan 1: Free**
- Name: "Free"
- Price: "0"
- Currency: "$"
- Period: "forever"
- Description: "Perfect for getting started"
- Features:
  - ✅ 5 Projects
  - ✅ Basic Support
  - ✅ 1 GB Storage
  - ⬜ Advanced Analytics
  - ⬜ Priority Support
- Button: "Get Started" → "#signup"
- Featured: No

### **Plan 2: Pro** (Featured)
- Name: "Pro"
- Price: "29"
- Currency: "$"
- Period: "per month"
- Description: "Best for professionals"
- Features:
  - ✅ Unlimited Projects
  - ✅ Priority Support
  - ✅ 100 GB Storage
  - ✅ Advanced Analytics
  - ✅ API Access
- Button: "Start Free Trial" → "#trial"
- Featured: **Yes**

### **Plan 3: Enterprise**
- Name: "Enterprise"
- Price: "Custom"
- Currency: ""
- Period: "pricing"
- Description: "For large teams"
- Features:
  - ✅ Everything in Pro
  - ✅ Unlimited Storage
  - ✅ Dedicated Support
  - ✅ Custom Integrations
  - ✅ SLA Guarantee
- Button: "Contact Sales" → "#contact"
- Featured: No

---

## 📱 What It Looks Like

### **Desktop:**
```
┌─────────────┐  ┌─────────────┐  ┌─────────────┐
│    Free     │  │ ⭐ Pro ⭐   │  │ Enterprise  │
│             │  │ Most Popular│  │             │
│     $0      │  │    $29      │  │   Custom    │
│   forever   │  │  per month  │  │   pricing   │
│             │  │             │  │             │
│  Features   │  │  Features   │  │  Features   │
│  ✓ ✓ ✗ ✗   │  │  ✓ ✓ ✓ ✓   │  │  ✓ ✓ ✓ ✓   │
│             │  │             │  │             │
│ Get Started │  │Start Trial  │  │Contact Sales│
└─────────────┘  └─────────────┘  └─────────────┘
```

### **Mobile:**
```
┌─────────────────┐
│      Free       │
│                 │
│       $0        │
│    forever      │
│                 │
│    Features     │
│    ✓ ✓ ✗ ✗     │
│                 │
│  Get Started    │
└─────────────────┘

┌─────────────────┐
│   ⭐ Pro ⭐     │
│  Most Popular   │
│                 │
│      $29        │
│   per month     │
│                 │
│    Features     │
│    ✓ ✓ ✓ ✓     │
│                 │
│  Start Trial    │
└─────────────────┘

┌─────────────────┐
│   Enterprise    │
│                 │
│     Custom      │
│    pricing      │
│                 │
│    Features     │
│    ✓ ✓ ✓ ✓     │
│                 │
│ Contact Sales   │
└─────────────────┘
```

---

## 🔧 Troubleshooting

### **Block Not Showing Up?**

1. **Refresh the editor** - Save and reload the page
2. **Clear cache** - Browser cache and WordPress cache
3. **Check console** - Open browser DevTools (F12) and look for errors

### **Styles Look Wrong?**

1. **Hard refresh** - `Ctrl+F5` (Windows) or `Cmd+Shift+R` (Mac)
2. **Check Tailwind** - Ensure Tailwind CSS is loaded on your site
3. **Verify files** - Make sure all CSS files exist in `blocks/pricing-table/`

### **Can't Edit Plans?**

1. **Click the block** - Make sure the block is selected
2. **Check permissions** - Ensure you have editor permissions
3. **Try re-adding** - Remove and re-add the block

---

## 🎓 Video Tutorial (Coming Soon)

A video tutorial will be available soon showing:
- How to add the block
- How to customize plans
- How to style the pricing table
- Real-world examples

---

## 📞 Need Help?

- **Documentation**: See `blocks/pricing-table/README.md` for full documentation
- **Theme Support**: Contact Worzen theme support
- **WordPress Help**: Visit WordPress.org support forums

---

## ✨ Features at a Glance

✅ **Unlimited Plans** - Add as many pricing tiers as you need
✅ **Fully Customizable** - Every element can be edited
✅ **Responsive Design** - Looks great on all devices
✅ **Featured Plans** - Highlight your best value
✅ **Gradient Buttons** - Beautiful, modern CTAs
✅ **Smooth Animations** - Professional hover effects
✅ **Easy to Use** - No coding required
✅ **SEO Friendly** - Semantic HTML markup
✅ **Accessible** - WCAG compliant
✅ **Print Ready** - Optimized for printing

---

## 🎉 You're Ready!

That's it! You now know how to create beautiful pricing tables with the Worzen Pricing block.

**Next Steps:**
1. Add the block to a page
2. Customize your plans
3. Preview on mobile
4. Publish!

Happy pricing! 🚀

