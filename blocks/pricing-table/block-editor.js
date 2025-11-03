/**
 * Worzen Pricing Table Block - Full Editor
 *
 * @package Worzen
 * @since 1.0.0
 */

(function() {
    console.log('Worzen Pricing: Full editor script loading...');
    
    // Function to register the block
    function registerPricingBlock() {
        console.log('Worzen Pricing: Attempting registration...');
        
        // Check if wp is available
        if (typeof wp === 'undefined' || typeof wp.blocks === 'undefined') {
            console.error('Worzen Pricing: wp.blocks not available');
            return false;
        }
        
        console.log('Worzen Pricing: wp.blocks is available!');
        
        var el = wp.element.createElement;
        var Fragment = wp.element.Fragment;
        var registerBlockType = wp.blocks.registerBlockType;
        var InspectorControls = wp.blockEditor.InspectorControls;
        var useBlockProps = wp.blockEditor.useBlockProps;
        var PanelBody = wp.components.PanelBody;
        var PanelRow = wp.components.PanelRow;
        var TextControl = wp.components.TextControl;
        var ToggleControl = wp.components.ToggleControl;
        var Button = wp.components.Button;
        var ColorPicker = wp.components.ColorPicker;
        var SelectControl = wp.components.SelectControl;
        var RangeControl = wp.components.RangeControl;
        var __ = wp.i18n.__;
        
        console.log('Worzen Pricing: Registering block...');
        
        registerBlockType('worzen/pricing-table', {
            title: __('Worzen Pricing', 'worzen'),
            icon: 'money-alt',
            category: 'worzen',
            
            edit: function(props) {
                var attributes = props.attributes;
                var setAttributes = props.setAttributes;
                var plans = attributes.plans || [];
                var showBadges = attributes.showBadges;
                var showDescriptions = attributes.showDescriptions;
                var alignment = attributes.alignment || 'center';
                
                var blockProps = useBlockProps({
                    className: 'worzen-pricing-block-editor'
                });
                
                // Helper: Update a specific plan
                function updatePlan(index, key, value) {
                    var newPlans = plans.slice();
                    newPlans[index] = Object.assign({}, newPlans[index], {});
                    newPlans[index][key] = value;
                    setAttributes({ plans: newPlans });
                }
                
                // Helper: Update a feature in a plan
                function updateFeature(planIndex, featureIndex, key, value) {
                    var newPlans = plans.slice();
                    var newFeatures = newPlans[planIndex].features.slice();
                    newFeatures[featureIndex] = Object.assign({}, newFeatures[featureIndex], {});
                    newFeatures[featureIndex][key] = value;
                    newPlans[planIndex] = Object.assign({}, newPlans[planIndex], { features: newFeatures });
                    setAttributes({ plans: newPlans });
                }
                
                // Helper: Add a new plan
                function addPlan() {
                    var newPlan = {
                        id: 'plan-' + Date.now(),
                        name: 'New Plan',
                        price: '0',
                        currency: '$',
                        period: 'per month',
                        description: 'Plan description',
                        features: [
                            { text: 'Feature 1', included: true },
                            { text: 'Feature 2', included: true }
                        ],
                        buttonText: 'Get Started',
                        buttonUrl: '#',
                        featured: false,
                        backgroundColor: '#ffffff',
                        textColor: '#1f2937',
                        buttonColor: '#6366f1'
                    };
                    setAttributes({ plans: plans.concat([newPlan]) });
                }
                
                // Helper: Remove a plan
                function removePlan(index) {
                    var newPlans = plans.slice();
                    newPlans.splice(index, 1);
                    setAttributes({ plans: newPlans });
                }
                
                // Helper: Add feature to plan
                function addFeature(planIndex) {
                    var newPlans = plans.slice();
                    var newFeatures = newPlans[planIndex].features.slice();
                    newFeatures.push({ text: 'New Feature', included: true });
                    newPlans[planIndex] = Object.assign({}, newPlans[planIndex], { features: newFeatures });
                    setAttributes({ plans: newPlans });
                }
                
                // Helper: Remove feature from plan
                function removeFeature(planIndex, featureIndex) {
                    var newPlans = plans.slice();
                    var newFeatures = newPlans[planIndex].features.slice();
                    newFeatures.splice(featureIndex, 1);
                    newPlans[planIndex] = Object.assign({}, newPlans[planIndex], { features: newFeatures });
                    setAttributes({ plans: newPlans });
                }
                
                // Helper: Move plan up/down
                function movePlan(index, direction) {
                    var newPlans = plans.slice();
                    var newIndex = direction === 'up' ? index - 1 : index + 1;
                    if (newIndex < 0 || newIndex >= newPlans.length) return;
                    var temp = newPlans[index];
                    newPlans[index] = newPlans[newIndex];
                    newPlans[newIndex] = temp;
                    setAttributes({ plans: newPlans });
                }
                
                // Render Inspector Controls
                var inspectorControls = el(
                    InspectorControls,
                    {},
                    // General Settings Panel
                    el(
                        PanelBody,
                        { title: __('General Settings', 'worzen'), initialOpen: true },
                        el(ToggleControl, {
                            label: __('Show Badges', 'worzen'),
                            checked: showBadges,
                            onChange: function(value) { setAttributes({ showBadges: value }); }
                        }),
                        el(ToggleControl, {
                            label: __('Show Descriptions', 'worzen'),
                            checked: showDescriptions,
                            onChange: function(value) { setAttributes({ showDescriptions: value }); }
                        }),
                        el(SelectControl, {
                            label: __('Alignment', 'worzen'),
                            value: alignment,
                            options: [
                                { label: 'Left', value: 'left' },
                                { label: 'Center', value: 'center' },
                                { label: 'Right', value: 'right' }
                            ],
                            onChange: function(value) { setAttributes({ alignment: value }); }
                        })
                    ),
                    // Plans Panels
                    plans.map(function(plan, planIndex) {
                        return el(
                            PanelBody,
                            {
                                key: plan.id || planIndex,
                                title: plan.name || ('Plan ' + (planIndex + 1)),
                                initialOpen: false
                            },
                            // Plan Controls
                            el('div', { style: { marginBottom: '16px' } },
                                el(Button, {
                                    isSecondary: true,
                                    isSmall: true,
                                    disabled: planIndex === 0,
                                    onClick: function() { movePlan(planIndex, 'up'); },
                                    style: { marginRight: '8px' }
                                }, '↑ Move Up'),
                                el(Button, {
                                    isSecondary: true,
                                    isSmall: true,
                                    disabled: planIndex === plans.length - 1,
                                    onClick: function() { movePlan(planIndex, 'down'); },
                                    style: { marginRight: '8px' }
                                }, '↓ Move Down'),
                                el(Button, {
                                    isDestructive: true,
                                    isSmall: true,
                                    onClick: function() { removePlan(planIndex); }
                                }, '🗑 Remove Plan')
                            ),
                            el(TextControl, {
                                label: __('Plan Name', 'worzen'),
                                value: plan.name,
                                onChange: function(value) { updatePlan(planIndex, 'name', value); }
                            }),
                            el(TextControl, {
                                label: __('Price', 'worzen'),
                                value: plan.price,
                                onChange: function(value) { updatePlan(planIndex, 'price', value); }
                            }),
                            el(TextControl, {
                                label: __('Currency', 'worzen'),
                                value: plan.currency,
                                onChange: function(value) { updatePlan(planIndex, 'currency', value); }
                            }),
                            el(TextControl, {
                                label: __('Period', 'worzen'),
                                value: plan.period,
                                onChange: function(value) { updatePlan(planIndex, 'period', value); }
                            }),
                            el(TextControl, {
                                label: __('Description', 'worzen'),
                                value: plan.description,
                                onChange: function(value) { updatePlan(planIndex, 'description', value); }
                            }),
                            el(TextControl, {
                                label: __('Button Text', 'worzen'),
                                value: plan.buttonText,
                                onChange: function(value) { updatePlan(planIndex, 'buttonText', value); }
                            }),
                            el(TextControl, {
                                label: __('Button URL', 'worzen'),
                                value: plan.buttonUrl,
                                onChange: function(value) { updatePlan(planIndex, 'buttonUrl', value); }
                            }),
                            el(ToggleControl, {
                                label: __('Featured Plan', 'worzen'),
                                checked: plan.featured,
                                onChange: function(value) { updatePlan(planIndex, 'featured', value); }
                            }),
                            // Features Section
                            el('h4', { style: { marginTop: '20px', marginBottom: '10px' } }, __('Features', 'worzen')),
                            plan.features && plan.features.map(function(feature, featureIndex) {
                                return el('div', {
                                    key: featureIndex,
                                    style: { 
                                        marginBottom: '12px',
                                        padding: '12px',
                                        border: '1px solid #ddd',
                                        borderRadius: '4px',
                                        backgroundColor: '#f9f9f9'
                                    }
                                },
                                    el(TextControl, {
                                        label: __('Feature Text', 'worzen'),
                                        value: feature.text,
                                        onChange: function(value) { updateFeature(planIndex, featureIndex, 'text', value); }
                                    }),
                                    el(ToggleControl, {
                                        label: __('Included', 'worzen'),
                                        checked: feature.included,
                                        onChange: function(value) { updateFeature(planIndex, featureIndex, 'included', value); }
                                    }),
                                    el(Button, {
                                        isDestructive: true,
                                        isSmall: true,
                                        onClick: function() { removeFeature(planIndex, featureIndex); }
                                    }, '🗑 Remove Feature')
                                );
                            }),
                            el(Button, {
                                isPrimary: true,
                                isSmall: true,
                                onClick: function() { addFeature(planIndex); },
                                style: { marginTop: '10px' }
                            }, '+ Add Feature')
                        );
                    }),
                    // Add Plan Button Panel
                    el(
                        PanelBody,
                        { title: __('Add New Plan', 'worzen'), initialOpen: false },
                        el(Button, {
                            isPrimary: true,
                            onClick: addPlan
                        }, '+ Add New Plan')
                    )
                );

                // Render Editor Preview
                var editorPreview = el(
                    'div',
                    {
                        className: 'worzen-pricing-table-preview',
                        style: {
                            padding: '40px 20px',
                            backgroundColor: '#f9fafb'
                        }
                    },
                    el('div', {
                        className: 'pricing-grid',
                        style: {
                            display: 'grid',
                            gridTemplateColumns: 'repeat(auto-fit, minmax(280px, 1fr))',
                            gap: '24px',
                            maxWidth: '1200px',
                            margin: '0 auto',
                            textAlign: alignment
                        }
                    },
                        plans.length === 0 ?
                            el('div', {
                                style: {
                                    gridColumn: '1 / -1',
                                    padding: '60px 20px',
                                    textAlign: 'center',
                                    backgroundColor: '#fff',
                                    border: '2px dashed #d1d5db',
                                    borderRadius: '12px'
                                }
                            },
                                el('h3', { style: { marginBottom: '12px', color: '#6b7280' } }, __('No pricing plans yet', 'worzen')),
                                el('p', { style: { color: '#9ca3af', marginBottom: '20px' } }, __('Click "Add New Plan" in the sidebar to get started', 'worzen')),
                                el(Button, {
                                    isPrimary: true,
                                    onClick: addPlan
                                }, '+ Add Your First Plan')
                            )
                        :
                        plans.map(function(plan, index) {
                            var cardStyle = {
                                backgroundColor: plan.backgroundColor || '#ffffff',
                                color: plan.textColor || '#1f2937',
                                padding: '32px 24px',
                                borderRadius: '16px',
                                boxShadow: plan.featured ? '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)' : '0 4px 6px -1px rgba(0, 0, 0, 0.1)',
                                border: plan.featured ? '2px solid #6366f1' : '1px solid #e5e7eb',
                                position: 'relative',
                                transform: plan.featured ? 'scale(1.05)' : 'scale(1)',
                                transition: 'all 0.3s ease'
                            };

                            return el('div', {
                                key: plan.id || index,
                                className: 'pricing-card' + (plan.featured ? ' featured' : ''),
                                style: cardStyle
                            },
                                // Featured Badge
                                plan.featured && showBadges ? el('div', {
                                    style: {
                                        position: 'absolute',
                                        top: '-12px',
                                        left: '50%',
                                        transform: 'translateX(-50%)',
                                        backgroundColor: '#6366f1',
                                        color: '#ffffff',
                                        padding: '4px 16px',
                                        borderRadius: '12px',
                                        fontSize: '12px',
                                        fontWeight: '600',
                                        textTransform: 'uppercase',
                                        letterSpacing: '0.5px'
                                    }
                                }, __('Most Popular', 'worzen')) : null,

                                // Plan Name
                                el('h3', {
                                    style: {
                                        fontSize: '24px',
                                        fontWeight: '700',
                                        marginBottom: '8px',
                                        color: plan.textColor || '#1f2937'
                                    }
                                }, plan.name),

                                // Plan Description
                                showDescriptions && plan.description ? el('p', {
                                    style: {
                                        fontSize: '14px',
                                        color: plan.textColor || '#6b7280',
                                        marginBottom: '20px',
                                        opacity: 0.8
                                    }
                                }, plan.description) : null,

                                // Price
                                el('div', {
                                    style: {
                                        marginBottom: '24px'
                                    }
                                },
                                    el('div', {
                                        style: {
                                            display: 'flex',
                                            alignItems: 'baseline',
                                            justifyContent: alignment === 'center' ? 'center' : alignment === 'right' ? 'flex-end' : 'flex-start',
                                            gap: '4px'
                                        }
                                    },
                                        el('span', {
                                            style: {
                                                fontSize: '20px',
                                                fontWeight: '600',
                                                color: plan.textColor || '#1f2937'
                                            }
                                        }, plan.currency),
                                        el('span', {
                                            style: {
                                                fontSize: '48px',
                                                fontWeight: '800',
                                                color: plan.textColor || '#1f2937',
                                                lineHeight: '1'
                                            }
                                        }, plan.price)
                                    ),
                                    el('div', {
                                        style: {
                                            fontSize: '14px',
                                            color: plan.textColor || '#6b7280',
                                            marginTop: '4px',
                                            opacity: 0.8
                                        }
                                    }, plan.period)
                                ),

                                // Features List
                                el('ul', {
                                    style: {
                                        listStyle: 'none',
                                        padding: '0',
                                        margin: '0 0 24px 0',
                                        textAlign: 'left'
                                    }
                                },
                                    plan.features && plan.features.map(function(feature, fIndex) {
                                        return el('li', {
                                            key: fIndex,
                                            style: {
                                                display: 'flex',
                                                alignItems: 'center',
                                                gap: '12px',
                                                padding: '8px 0',
                                                fontSize: '14px',
                                                color: plan.textColor || '#1f2937',
                                                opacity: feature.included ? 1 : 0.5
                                            }
                                        },
                                            el('span', {
                                                style: {
                                                    fontSize: '18px',
                                                    color: feature.included ? '#10b981' : '#ef4444'
                                                }
                                            }, feature.included ? '✓' : '✗'),
                                            el('span', {}, feature.text)
                                        );
                                    })
                                ),

                                // Button
                                el('a', {
                                    href: plan.buttonUrl || '#',
                                    className: 'pricing-button',
                                    style: {
                                        display: 'inline-block',
                                        width: '100%',
                                        padding: '12px 24px',
                                        backgroundColor: plan.buttonColor || (plan.featured ? '#6366f1' : '#1f2937'),
                                        color: '#ffffff',
                                        textDecoration: 'none',
                                        borderRadius: '8px',
                                        fontWeight: '600',
                                        fontSize: '16px',
                                        textAlign: 'center',
                                        transition: 'all 0.3s ease',
                                        cursor: 'pointer'
                                    },
                                    onClick: function(e) { e.preventDefault(); }
                                }, plan.buttonText)
                            );
                        })
                    )
                );

                // Return the complete editor UI
                return el(
                    Fragment,
                    {},
                    inspectorControls,
                    el('div', blockProps, editorPreview)
                );
            },

            save: function() {
                return null; // Server-side rendering
            }
        });

        console.log('Worzen Pricing: Block registered successfully!');
        return true;
    }

    // Try to register immediately
    if (!registerPricingBlock()) {
        console.log('Worzen Pricing: Waiting for wp.blocks...');

        // If it fails, wait for DOMContentLoaded
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', registerPricingBlock);
        } else {
            // DOM already loaded, try again after a short delay
            setTimeout(registerPricingBlock, 100);
        }
    }
})();

