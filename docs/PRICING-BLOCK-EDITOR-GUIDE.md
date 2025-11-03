# Worzen Pricing Block - Editor Guide

## 🎉 Fully Editable Gutenberg Block

The Worzen Pricing block now has a **complete editor interface** with live preview and full customization controls!

---

## 🚀 Getting Started

### Step 1: Insert the Block
1. Open the WordPress editor (Pages → Add New or edit existing page)
2. Click the `+` button to add a block
3. Search for "Worzen Pricing"
4. Click to insert the block

### Step 2: Open the Sidebar
- The block settings appear in the **right sidebar** (Inspector Controls)
- If you don't see the sidebar, click the **⚙️ Settings** icon in the top-right corner

---

## 📋 Editor Features

### ✅ **Live Preview**
- The editor shows a **real-time preview** of your pricing table
- All changes are reflected immediately
- The preview matches exactly how it will look on the frontend

### ✅ **Inspector Controls**
All editing happens in the right sidebar with organized panels:

---

## 🎨 General Settings Panel

Located at the top of the sidebar:

### **Show Badges**
- Toggle ON/OFF to show/hide "Most Popular" badges on featured plans
- Default: ON

### **Show Descriptions**
- Toggle ON/OFF to show/hide plan descriptions
- Default: ON

### **Alignment**
- Choose: Left, Center, or Right
- Controls text alignment within pricing cards
- Default: Center

---

## 💳 Plan Panels

Each pricing plan has its own collapsible panel in the sidebar:

### **Plan Management Buttons**
At the top of each plan panel:
- **↑ Move Up** - Move plan to the left
- **↓ Move Down** - Move plan to the right
- **🗑 Remove Plan** - Delete this plan

### **Plan Details**

#### **Plan Name**
- Text field for the plan title
- Example: "Free", "Pro", "Enterprise"

#### **Price**
- Number field for the price amount
- Example: "0", "29", "99"

#### **Currency**
- Text field for currency symbol
- Example: "$", "€", "£"

#### **Period**
- Text field for billing period
- Example: "per month", "per year", "one-time", "forever"

#### **Description**
- Text field for plan description
- Example: "Perfect for getting started"
- Only shows if "Show Descriptions" is enabled

#### **Button Text**
- Text field for the call-to-action button
- Example: "Get Started", "Buy Now", "Start Free Trial"

#### **Button URL**
- Text field for the button link
- Example: "#", "/checkout", "https://example.com/signup"

#### **Featured Plan**
- Toggle ON to highlight this plan
- Featured plans have:
  - Larger size (scaled 105%)
  - Stronger shadow
  - Purple border
  - "Most Popular" badge (if badges enabled)

---

## ⭐ Features Section

Each plan has a features list:

### **Feature Items**
Each feature has:
- **Feature Text** - The feature description
- **Included** - Toggle ON (✓ green checkmark) or OFF (✗ red X)
- **🗑 Remove Feature** - Delete this feature

### **Add Feature Button**
- Click **"+ Add Feature"** to add a new feature to the plan
- New features are added at the bottom of the list

---

## ➕ Add New Plan Panel

At the bottom of the sidebar:

### **+ Add New Plan Button**
- Click to add a new pricing plan
- New plans are added to the right side
- Default values:
  - Name: "New Plan"
  - Price: "0"
  - Currency: "$"
  - Period: "per month"
  - 2 default features

---

## 🎨 Styling (Coming Soon)

Currently, plans use these default colors:
- **Background**: White (#ffffff)
- **Text**: Dark gray (#1f2937)
- **Button**: Purple (#6366f1) for featured, Dark gray for others

**Note**: Color pickers for custom colors will be added in the next update.

---

## 💡 Tips & Best Practices

### **Plan Order**
- Use **Move Up/Down** buttons to reorder plans
- Common order: Free → Basic → Pro → Enterprise
- Or: Monthly → Annual → Lifetime

### **Featured Plan**
- Mark your **best value** plan as featured
- Only mark **one plan** as featured for best effect
- Featured plans automatically stand out visually

### **Features List**
- List features from **most important to least**
- Use **included/excluded** to show plan differences
- Keep feature text **short and clear**
- Aim for **4-8 features** per plan

### **Pricing Display**
- Use **whole numbers** when possible (99 instead of 99.00)
- Be **consistent** with currency symbols across all plans
- Use clear periods: "per month" not "/mo"

### **Button Text**
- Use **action verbs**: "Get Started", "Buy Now", "Try Free"
- Match the plan type:
  - Free plans: "Get Started"
  - Paid plans: "Start Free Trial" or "Buy Now"
  - Enterprise: "Contact Sales"

---

## 🔄 Workflow Example

### Creating a 3-Plan Pricing Table

1. **Insert the block** - Search for "Worzen Pricing"

2. **The block comes with 3 default plans** (Free, Annual, Lifetime)
   - You can edit these or remove them

3. **Edit the first plan (Free)**:
   - Name: "Starter"
   - Price: "0"
   - Period: "forever"
   - Description: "Perfect for individuals"
   - Add/edit features
   - Button Text: "Get Started"

4. **Edit the second plan (Annual)**:
   - Name: "Professional"
   - Price: "29"
   - Period: "per month"
   - Description: "For growing teams"
   - Toggle **Featured Plan** ON
   - Add/edit features
   - Button Text: "Start Free Trial"

5. **Edit the third plan (Lifetime)**:
   - Name: "Enterprise"
   - Price: "99"
   - Period: "per month"
   - Description: "For large organizations"
   - Add/edit features
   - Button Text: "Contact Sales"

6. **Adjust General Settings**:
   - Show Badges: ON
   - Show Descriptions: ON
   - Alignment: Center

7. **Preview and Publish**!

---

## 🐛 Troubleshooting

### **Block not showing in editor**
- Clear browser cache (Ctrl+Shift+R)
- Check browser console for errors
- Verify the block appears in the inserter

### **Changes not saving**
- Make sure to click **Update** or **Publish** button
- Check for JavaScript errors in console

### **Preview looks different from frontend**
- The editor preview should match the frontend
- If not, clear all caches and hard refresh

### **Sidebar not visible**
- Click the **⚙️ Settings** icon in top-right
- Or press `Ctrl+Shift+,` (Windows) or `Cmd+Shift+,` (Mac)

---

## 📸 Visual Guide

### **Editor Layout**
```
┌─────────────────────────────────────────────────────────┐
│  WordPress Editor                            [⚙️ Settings] │
├─────────────────────────────┬───────────────────────────┤
│                             │  SIDEBAR (Inspector)      │
│  LIVE PREVIEW               │  ┌─────────────────────┐  │
│  ┌───────┐ ┌───────┐       │  │ General Settings    │  │
│  │ Free  │ │ Pro   │       │  │ ☑ Show Badges       │  │
│  │ $0    │ │ $29   │       │  │ ☑ Show Descriptions │  │
│  │ ✓ ... │ │ ✓ ... │       │  │ Alignment: Center   │  │
│  └───────┘ └───────┘       │  └─────────────────────┘  │
│                             │  ┌─────────────────────┐  │
│                             │  │ Free Plan           │  │
│                             │  │ [Edit controls...]  │  │
│                             │  └─────────────────────┘  │
│                             │  ┌─────────────────────┐  │
│                             │  │ Pro Plan            │  │
│                             │  │ [Edit controls...]  │  │
│                             │  └─────────────────────┘  │
└─────────────────────────────┴───────────────────────────┘
```

---

## 🎯 Next Steps

After creating your pricing table:

1. **Preview the page** - Click "Preview" to see it on the frontend
2. **Test the buttons** - Make sure URLs are correct
3. **Check mobile view** - Pricing tables are fully responsive
4. **Publish when ready** - Click "Publish" or "Update"

---

## 📞 Support

If you encounter any issues:
- Check the browser console (F12) for errors
- Verify all plans have required fields filled
- Make sure button URLs are valid
- Clear cache and try again

---

**Enjoy creating beautiful pricing tables!** 🚀

