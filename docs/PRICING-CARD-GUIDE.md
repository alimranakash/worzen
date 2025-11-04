# Worzen Pricing Card Block - User Guide

## 🎉 Simple, Standalone Pricing Card Block!

The Worzen Pricing Card is a **standalone block** that works perfectly inside **WordPress core Columns**. This approach is simpler and follows WordPress best practices by leveraging existing core functionality.

---

## 📦 Block Structure

Instead of creating custom parent/child blocks, we use WordPress's existing Columns system:

```
Columns (core/columns) ← WordPress core block
├─ Column (core/column) ← WordPress core block
│  └─ Pricing Card (worzen/pricing-card) ← Our custom block
├─ Column (core/column) ← WordPress core block
│  └─ Pricing Card (worzen/pricing-card) ← Our custom block
└─ Column (core/column) ← WordPress core block
   └─ Pricing Card (worzen/pricing-card) ← Our custom block
```

**Benefits:**
- ✅ Uses WordPress core Columns (no need to recreate column functionality)
- ✅ Simpler architecture
- ✅ More flexible (can use Pricing Card anywhere, not just in custom container)
- ✅ Follows WordPress best practices
- ✅ Works with all WordPress column features (responsive, alignment, etc.)

---

## 🚀 How to Create a Pricing Table

### **Step 1: Insert a Columns Block**

1. Open the WordPress editor
2. Click the `+` button to add a block
3. Search for **"Columns"** (WordPress core block)
4. Select **"3 columns"** layout (or choose 2, 4, etc.)

**Result:** A columns container is inserted with 3 empty columns

---

### **Step 2: Insert Pricing Cards**

1. Click inside the **first column**
2. Click the `+` button inside the column
3. Search for **"Worzen Pricing Card"**
4. Click to insert

**Repeat for each column:**
- Click inside second column → Insert "Worzen Pricing Card"
- Click inside third column → Insert "Worzen Pricing Card"

**Result:** You now have 3 pricing cards side-by-side!

---

### **Step 3: Edit Each Pricing Card**

You can edit pricing cards in **two ways**:

#### **Method 1: Inline Editing (Quick & Visual) ✨ NEW!**
Click directly on any text in the preview to edit it:
- **Plan Name** - Click to edit
- **Currency** - Click to edit (e.g., "$")
- **Price** - Click to edit (e.g., "29")
- **Period** - Click to edit (e.g., "per month")
- **Description** - Click to edit
- **Features** - Click on any feature text to edit
- **Button Text** - Click to edit
- **Badge** - Click to edit (when featured)

#### **Method 2: Sidebar Controls (Detailed Settings)**
Click on the pricing card block, then use the sidebar for all settings:

#### **Plan Details Panel:**
- **Plan Name** - e.g., "Starter", "Pro", "Enterprise"
- **Price** - e.g., "0", "29", "99"
- **Currency Symbol** - e.g., "$", "€", "£"
- **Billing Period** - e.g., "per month", "per year", "forever"
- **Show Description** - Toggle to show/hide description
- **Description** - Short description of the plan

#### **Button Settings Panel:**
- **Button Text** - e.g., "Get Started", "Buy Now"
- **Button URL** - Where the button links to

#### **Featured Plan Panel:**
- **Mark as Featured** - Toggle to highlight this plan
- **Show Badge** - Toggle to show/hide badge
- **Badge Text** - Custom badge text (e.g., "Most Popular", "Best Value")

#### **Features Panel:**
- **Add Feature** - Click "+ Add Feature" button
- **Feature Text** - Description of each feature
- **Included in Plan** - Toggle checkmark (✓) or X (✗)
- **Move Up/Down** - Reorder features
- **Remove** - Delete a feature

#### **Colors Panel:**
- **Background Color** - Choose from preset colors
- **Text Color** - Choose text color
- **Button Color** - Choose button color

---

## 🎨 Visual Example

### **What You'll Build:**

```
┌─────────────────────────────────────────────────────────────┐
│  COLUMNS (WordPress Core)                                   │
│                                                              │
│  ┌──────────────┐  ┌──────────────┐  ┌──────────────┐      │
│  │ COLUMN       │  │ COLUMN       │  │ COLUMN       │      │
│  │              │  │              │  │              │      │
│  │ ┌──────────┐ │  │ ┌──────────┐ │  │ ┌──────────┐ │      │
│  │ │ PRICING  │ │  │ │ PRICING  │ │  │ │ PRICING  │ │      │
│  │ │ CARD     │ │  │ │ CARD ⭐  │ │  │ │ CARD     │ │      │
│  │ │          │ │  │ │          │ │  │ │          │ │      │
│  │ │ Free     │ │  │ │ Pro      │ │  │ │ Enter.   │ │      │
│  │ │ $0       │ │  │ │ $29      │ │  │ │ $99      │ │      │
│  │ │ ✓ Feat 1 │ │  │ │ ✓ Feat 1 │ │  │ │ ✓ Feat 1 │ │      │
│  │ │ ✓ Feat 2 │ │  │ │ ✓ Feat 2 │ │  │ │ ✓ Feat 2 │ │      │
│  │ │ [Button] │ │  │ │ [Button] │ │  │ │ [Button] │ │      │
│  │ └──────────┘ │  │ └──────────┘ │  │ └──────────┘ │      │
│  └──────────────┘  └──────────────┘  └──────────────┘      │
└─────────────────────────────────────────────────────────────┘
```

---

## ✨ Inline Editing Tips

### **Quick Text Changes:**
1. **Click directly on text** you want to change
2. **Type new content**
3. **Click outside** to finish
4. Done!

**Example:** Click on "Professional" → Type "Premium" → Click outside

### **Editing Multiple Elements:**
1. **Click on plan name** → Edit
2. **Click on price** → Edit
3. **Click on feature text** → Edit
4. All changes save automatically!

### **When to Use Inline vs Sidebar:**

**Use Inline Editing for:**
- ✅ Quick text changes
- ✅ Visual editing
- ✅ Content updates

**Use Sidebar for:**
- ✅ Adding/removing features
- ✅ Changing colors
- ✅ Toggling settings
- ✅ Setting button URL

---

## 💡 Common Workflows

### **Create a 2-Column Pricing Table**

1. Insert "Columns" block
2. Choose **"2 columns"** layout
3. Insert "Worzen Pricing Card" in each column
4. Edit each card
5. Done!

### **Create a 4-Column Pricing Table**

1. Insert "Columns" block
2. Choose **"4 columns"** layout (or start with 3 and add one)
3. Insert "Worzen Pricing Card" in each column
4. Edit each card
5. Done!

### **Add More Columns**

1. Click on the Columns block (the container)
2. In the block toolbar, click the column icon
3. Click "Add column"
4. Insert "Worzen Pricing Card" in the new column
5. Done!

### **Remove a Column**

1. Click on the Column you want to remove
2. Click the three dots (⋮) in the block toolbar
3. Select "Remove Column"
4. Done!

### **Reorder Columns**

1. Click on a Column
2. Use the **↑** and **↓** arrows in the block toolbar
3. Move the column left or right
4. Done!

### **Adjust Column Width**

1. Click on the Columns block (container)
2. In the sidebar, adjust column widths
3. Or click on individual columns to adjust their width
4. Done!

---

## 🎯 Why This Approach is Better

### **Compared to Custom Nested Blocks:**

| Feature | Custom Nested Blocks | Pricing Card + Core Columns |
|---------|---------------------|----------------------------|
| **Complexity** | High (custom parent/child) | Low (uses core blocks) |
| **Flexibility** | Limited to custom container | Works anywhere |
| **Column Features** | Must implement ourselves | Free from WordPress |
| **Maintenance** | More code to maintain | Less code |
| **User Familiarity** | New pattern to learn | Familiar WordPress Columns |
| **Responsive** | Must implement ourselves | Free from WordPress |
| **Alignment** | Must implement ourselves | Free from WordPress |
| **Width Control** | Must implement ourselves | Free from WordPress |

### **What You Get for Free from WordPress Columns:**

✅ **Responsive behavior** - Columns stack on mobile automatically  
✅ **Column width control** - Adjust individual column widths  
✅ **Alignment options** - Wide, full-width, etc.  
✅ **Vertical alignment** - Top, center, bottom  
✅ **Column gaps** - Adjust spacing between columns  
✅ **Add/remove columns** - Built-in functionality  
✅ **Reorder columns** - Drag and drop  
✅ **Familiar UI** - Users already know how to use Columns  

---

## 🎨 Styling Tips

### **Featured Plan**
- Mark your **best value** plan as featured
- Featured plans automatically get:
  - Stronger shadow
  - Purple border
  - Badge (if enabled)
  - Gradient background

### **Color Coordination**
- Use consistent colors across all cards for a cohesive look
- Or use different colors to differentiate plans
- Featured plans can have bolder button colors

### **Column Layout**
- **2 columns** - Good for simple Free vs Pro comparison
- **3 columns** - Most common (Free, Pro, Enterprise)
- **4 columns** - For more complex pricing tiers
- **Equal widths** - Most common, looks balanced
- **Custom widths** - Make featured plan wider

---

## 📱 Responsive Behavior

WordPress Columns handles responsive behavior automatically:

### **Desktop (> 782px):**
- Columns displayed side-by-side
- Full spacing between columns
- Featured plans stand out

### **Mobile (< 782px):**
- Columns stack vertically
- Full width for each card
- Easy to scroll through plans

**You don't need to do anything - it just works!**

---

## 🔧 Advanced Usage

### **Use Pricing Card Outside Columns**

The Pricing Card is a **standalone block** - you can use it anywhere:

- Inside a **Group block**
- Inside a **Cover block**
- Inside a **Media & Text block**
- Directly in the content (full width)
- Inside any container block

### **Mix with Other Blocks**

Inside each Column, you can add other blocks too:

```
Column
├─ Heading (e.g., "Most Popular")
├─ Pricing Card
└─ Paragraph (e.g., "Limited time offer!")
```

### **Use WordPress Column Features**

**Adjust column gaps:**
1. Click on Columns block
2. In sidebar → Settings → Block spacing
3. Adjust gap

**Change vertical alignment:**
1. Click on Columns block
2. In toolbar → Change vertical alignment
3. Choose top, center, or bottom

**Make columns stack on tablet:**
1. Click on Columns block
2. In sidebar → Settings
3. Adjust "Stack on mobile" breakpoint

---

## 🐛 Troubleshooting

### **Can't find "Worzen Pricing Card" in inserter**
- Make sure you've cleared browser cache (`Ctrl+Shift+R`)
- Check that the block is registered in functions.php
- Look in the "Worzen" category

### **Pricing cards not aligned**
- Click on the Columns block
- In toolbar, adjust vertical alignment
- Or adjust individual column widths to be equal

### **Cards different heights**
- This is normal if they have different amounts of content
- Add more features to shorter cards to balance
- Or use CSS to set min-height (advanced)

### **Columns not responsive**
- This is handled by WordPress automatically
- Check that you're using the core Columns block
- Preview on mobile to verify

---

## 🎓 Best Practices

1. **Use WordPress Columns** - Don't try to create your own column system
2. **Keep feature lists consistent** - Same number of features across all plans
3. **Mark only ONE plan as featured** - Too many featured plans dilutes the effect
4. **Use clear pricing** - Whole numbers, consistent currency
5. **Test on mobile** - Preview on different screen sizes
6. **Use descriptive button text** - "Start Free Trial" not just "Start"
7. **Equal column widths** - Usually looks best (unless highlighting featured plan)

---

## 📊 Example Configurations

### **Simple 2-Column (Free vs Paid)**

```
Columns (2 columns, equal width)
├─ Column
│  └─ Pricing Card (Free, $0)
└─ Column
   └─ Pricing Card (Pro, $29, Featured)
```

### **Standard 3-Column**

```
Columns (3 columns, equal width)
├─ Column
│  └─ Pricing Card (Starter, $9)
├─ Column
│  └─ Pricing Card (Professional, $29, Featured)
└─ Column
   └─ Pricing Card (Enterprise, $99)
```

### **4-Column with Featured**

```
Columns (4 columns, custom widths: 20%, 30%, 30%, 20%)
├─ Column (20%)
│  └─ Pricing Card (Free, $0)
├─ Column (30%)
│  └─ Pricing Card (Pro, $29, Featured)
├─ Column (30%)
│  └─ Pricing Card (Business, $79)
└─ Column (20%)
   └─ Pricing Card (Enterprise, Custom)
```

---

## 🎉 Summary

**The Worzen Pricing Card block is:**

✅ **Simple** - Just one block to learn  
✅ **Flexible** - Works inside any container  
✅ **WordPress-native** - Uses core Columns  
✅ **Fully featured** - All pricing card features  
✅ **Responsive** - Automatic mobile support  
✅ **Easy to use** - Familiar WordPress patterns  
✅ **Customizable** - Colors, features, buttons  
✅ **Production-ready** - Professional design  

---

**Start building beautiful pricing tables with WordPress Columns + Worzen Pricing Card!** 🚀

