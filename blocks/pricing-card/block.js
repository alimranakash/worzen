/**
 * Worzen Pricing Card Block
 * 
 * A standalone pricing card block that works inside WordPress core Columns.
 * 
 * @package Worzen
 * @since 2.0.0
 */

(function() {
    'use strict';

    var el = wp.element.createElement;
    var registerBlockType = wp.blocks.registerBlockType;
    var InspectorControls = wp.blockEditor.InspectorControls;
    var InnerBlocks = wp.blockEditor.InnerBlocks;
    var RichText = wp.blockEditor.RichText;
    var PanelBody = wp.components.PanelBody;
    var TextControl = wp.components.TextControl;
    var TextareaControl = wp.components.TextareaControl;
    var ToggleControl = wp.components.ToggleControl;
    var Button = wp.components.Button;
    var ColorPalette = wp.components.ColorPalette;
    var useBlockProps = wp.blockEditor.useBlockProps;

    // Color palette
    var colors = [
        { name: 'White', color: '#ffffff' },
        { name: 'Light Gray', color: '#f9fafb' },
        { name: 'Gray', color: '#e5e7eb' },
        { name: 'Dark Gray', color: '#1f2937' },
        { name: 'Black', color: '#000000' },
        { name: 'Indigo', color: '#6366f1' },
        { name: 'Purple', color: '#8b5cf6' },
        { name: 'Pink', color: '#ec4899' },
        { name: 'Blue', color: '#3b82f6' },
        { name: 'Green', color: '#10b981' },
        { name: 'Red', color: '#ef4444' }
    ];

    registerBlockType('worzen/pricing-card', {
        edit: function(props) {
            var attributes = props.attributes;
            var setAttributes = props.setAttributes;

            // Extract attributes
            var planName = attributes.planName;
            var price = attributes.price;
            var currency = attributes.currency;
            var period = attributes.period;
            var description = attributes.description;
            var features = attributes.features || [];
            var buttonText = attributes.buttonText;
            var buttonUrl = attributes.buttonUrl;
            var featured = attributes.featured;
            var badge = attributes.badge;
            var showBadge = attributes.showBadge;
            var showDescription = attributes.showDescription;
            var backgroundColor = attributes.backgroundColor;
            var textColor = attributes.textColor;
            var buttonColor = attributes.buttonColor;
            var showButton = attributes.showButton !== undefined ? attributes.showButton : true;

            // Helper functions for features
            function addFeature() {
                var newFeatures = features.slice();
                newFeatures.push({ text: 'New feature', included: true });
                setAttributes({ features: newFeatures });
            }

            function removeFeature(index) {
                var newFeatures = features.slice();
                newFeatures.splice(index, 1);
                setAttributes({ features: newFeatures });
            }

            function updateFeature(index, key, value) {
                var newFeatures = features.slice();
                newFeatures[index] = Object.assign({}, newFeatures[index]);
                newFeatures[index][key] = value;
                setAttributes({ features: newFeatures });
            }

            function moveFeature(index, direction) {
                var newFeatures = features.slice();
                var newIndex = direction === 'up' ? index - 1 : index + 1;
                if (newIndex < 0 || newIndex >= newFeatures.length) return;
                var temp = newFeatures[index];
                newFeatures[index] = newFeatures[newIndex];
                newFeatures[newIndex] = temp;
                setAttributes({ features: newFeatures });
            }

            // Block props
            var blockProps = useBlockProps({
                className: 'worzen-pricing-card-editor'
            });

            // Card style
            var cardStyle = {
                backgroundColor: backgroundColor,
                color: textColor,
                padding: '32px 24px',
                borderRadius: '16px',
                boxShadow: featured 
                    ? '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)'
                    : '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
                border: featured ? '2px solid #6366f1' : '1px solid #e5e7eb',
                position: 'relative',
                minHeight: '500px',
                display: 'flex',
                flexDirection: 'column'
            };

            return el(
                'div',
                blockProps,
                [
                    // Inspector Controls
                    el(
                        InspectorControls,
                        { key: 'inspector' },
                        [
                            // Plan Details Panel
                            el(
                                PanelBody,
                                { 
                                    title: 'Plan Details',
                                    initialOpen: true,
                                    key: 'plan-details'
                                },
                                [
                                    el(TextControl, {
                                        label: 'Plan Name',
                                        value: planName,
                                        onChange: function(value) { setAttributes({ planName: value }); },
                                        key: 'plan-name'
                                    }),
                                    el(TextControl, {
                                        label: 'Price',
                                        value: price,
                                        onChange: function(value) { setAttributes({ price: value }); },
                                        help: 'Enter just the number (e.g., 29)',
                                        key: 'price'
                                    }),
                                    el(TextControl, {
                                        label: 'Currency Symbol',
                                        value: currency,
                                        onChange: function(value) { setAttributes({ currency: value }); },
                                        key: 'currency'
                                    }),
                                    el(TextControl, {
                                        label: 'Billing Period',
                                        value: period,
                                        onChange: function(value) { setAttributes({ period: value }); },
                                        placeholder: 'per month',
                                        key: 'period'
                                    }),
                                    el(ToggleControl, {
                                        label: 'Show Description',
                                        checked: showDescription,
                                        onChange: function(value) { setAttributes({ showDescription: value }); },
                                        key: 'show-description'
                                    }),
                                    showDescription && el(TextareaControl, {
                                        label: 'Description',
                                        value: description,
                                        onChange: function(value) { setAttributes({ description: value }); },
                                        key: 'description'
                                    })
                                ]
                            ),

                            // Button Settings Panel
                            el(
                                PanelBody,
                                {
                                    title: 'Button Settings',
                                    initialOpen: false,
                                    key: 'button-settings'
                                },
                                [
                                    el(ToggleControl, {
                                        label: 'Show Button',
                                        checked: showButton,
                                        onChange: function(value) { setAttributes({ showButton: value }); },
                                        help: 'Toggle to show or hide the CTA button',
                                        key: 'show-button'
                                    }),
                                    showButton && el(TextControl, {
                                        label: 'Button Text',
                                        value: buttonText,
                                        onChange: function(value) { setAttributes({ buttonText: value }); },
                                        key: 'button-text'
                                    }),
                                    showButton && el(TextControl, {
                                        label: 'Button URL',
                                        value: buttonUrl,
                                        onChange: function(value) { setAttributes({ buttonUrl: value }); },
                                        type: 'url',
                                        key: 'button-url'
                                    })
                                ]
                            ),

                            // Featured Plan Panel
                            el(
                                PanelBody,
                                {
                                    title: 'Featured Plan',
                                    initialOpen: false,
                                    key: 'featured-plan'
                                },
                                [
                                    el(ToggleControl, {
                                        label: 'Mark as Featured',
                                        checked: featured,
                                        onChange: function(value) { setAttributes({ featured: value }); },
                                        help: 'Featured plans are highlighted with a badge and special styling',
                                        key: 'featured'
                                    }),
                                    featured && el(ToggleControl, {
                                        label: 'Show Badge',
                                        checked: showBadge,
                                        onChange: function(value) { setAttributes({ showBadge: value }); },
                                        key: 'show-badge'
                                    }),
                                    featured && showBadge && el(TextControl, {
                                        label: 'Badge Text',
                                        value: badge,
                                        onChange: function(value) { setAttributes({ badge: value }); },
                                        placeholder: 'Most Popular',
                                        key: 'badge'
                                    })
                                ]
                            ),

                            // Features Panel
                            el(
                                PanelBody,
                                {
                                    title: 'Features',
                                    initialOpen: false,
                                    key: 'features-panel'
                                },
                                [
                                    features.map(function(feature, index) {
                                        return el(
                                            'div',
                                            {
                                                key: 'feature-' + index,
                                                style: {
                                                    marginBottom: '16px',
                                                    padding: '12px',
                                                    border: '1px solid #e5e7eb',
                                                    borderRadius: '4px'
                                                }
                                            },
                                            [
                                                el(TextControl, {
                                                    label: 'Feature ' + (index + 1),
                                                    value: feature.text,
                                                    onChange: function(value) { updateFeature(index, 'text', value); },
                                                    key: 'text'
                                                }),
                                                el(ToggleControl, {
                                                    label: 'Included in Plan',
                                                    checked: feature.included,
                                                    onChange: function(value) { updateFeature(index, 'included', value); },
                                                    key: 'included'
                                                }),
                                                el(
                                                    'div',
                                                    {
                                                        key: 'buttons',
                                                        style: { display: 'flex', gap: '8px', marginTop: '8px' }
                                                    },
                                                    [
                                                        index > 0 && el(Button, {
                                                            isSmall: true,
                                                            onClick: function() { moveFeature(index, 'up'); },
                                                            key: 'up'
                                                        }, '↑ Move Up'),
                                                        index < features.length - 1 && el(Button, {
                                                            isSmall: true,
                                                            onClick: function() { moveFeature(index, 'down'); },
                                                            key: 'down'
                                                        }, '↓ Move Down'),
                                                        el(Button, {
                                                            isDestructive: true,
                                                            isSmall: true,
                                                            onClick: function() { removeFeature(index); },
                                                            key: 'remove'
                                                        }, 'Remove')
                                                    ]
                                                )
                                            ]
                                        );
                                    }),
                                    el(Button, {
                                        isPrimary: true,
                                        onClick: addFeature,
                                        key: 'add-feature',
                                        style: { marginTop: '12px' }
                                    }, '+ Add Feature')
                                ]
                            ),

                            // Colors Panel
                            el(
                                PanelBody,
                                {
                                    title: 'Colors',
                                    initialOpen: false,
                                    key: 'colors-panel'
                                },
                                [
                                    el('p', { key: 'bg-label', style: { fontWeight: 'bold', marginBottom: '8px' } }, 'Background Color'),
                                    el(ColorPalette, {
                                        colors: colors,
                                        value: backgroundColor,
                                        onChange: function(value) { setAttributes({ backgroundColor: value || '#ffffff' }); },
                                        key: 'bg-color'
                                    }),
                                    el('p', { key: 'text-label', style: { fontWeight: 'bold', marginTop: '16px', marginBottom: '8px' } }, 'Text Color'),
                                    el(ColorPalette, {
                                        colors: colors,
                                        value: textColor,
                                        onChange: function(value) { setAttributes({ textColor: value || '#1f2937' }); },
                                        key: 'text-color'
                                    }),
                                    el('p', { key: 'button-label', style: { fontWeight: 'bold', marginTop: '16px', marginBottom: '8px' } }, 'Button Color'),
                                    el(ColorPalette, {
                                        colors: colors,
                                        value: buttonColor,
                                        onChange: function(value) { setAttributes({ buttonColor: value || '#6366f1' }); },
                                        key: 'button-color'
                                    })
                                ]
                            )
                        ]
                    ),

                    // Preview
                    el(
                        'div',
                        {
                            key: 'preview',
                            className: 'pricing-card-preview',
                            style: cardStyle
                        },
                        [
                            // Badge
                            featured && showBadge && el(
                                RichText,
                                {
                                    key: 'badge',
                                    tagName: 'div',
                                    value: badge,
                                    onChange: function(value) { setAttributes({ badge: value }); },
                                    placeholder: 'Most Popular',
                                    style: {
                                        position: 'absolute',
                                        top: '-12px',
                                        left: '50%',
                                        transform: 'translateX(-50%)',
                                        background: 'linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%)',
                                        color: '#ffffff',
                                        padding: '4px 16px',
                                        borderRadius: '12px',
                                        fontSize: '12px',
                                        fontWeight: '600',
                                        textTransform: 'uppercase',
                                        letterSpacing: '0.5px',
                                        whiteSpace: 'nowrap',
                                        boxShadow: '0 4px 6px -1px rgba(99, 102, 241, 0.3)'
                                    }
                                }
                            ),

                            // Plan Name
                            el(RichText, {
                                key: 'name',
                                tagName: 'h3',
                                value: planName,
                                onChange: function(value) { setAttributes({ planName: value }); },
                                placeholder: 'Plan Name',
                                style: {
                                    fontSize: '24px',
                                    fontWeight: '700',
                                    marginBottom: '8px',
                                    marginTop: featured && showBadge ? '12px' : '0',
                                    color: textColor,
                                    textAlign: 'center'
                                }
                            }),

                            // Description
                            showDescription && el(RichText, {
                                key: 'description',
                                tagName: 'p',
                                value: description,
                                onChange: function(value) { setAttributes({ description: value }); },
                                placeholder: 'Plan description',
                                style: {
                                    fontSize: '14px',
                                    marginBottom: '20px',
                                    opacity: '0.8',
                                    color: textColor,
                                    textAlign: 'center'
                                }
                            }),

                            // Price
                            el(
                                'div',
                                {
                                    key: 'price-container',
                                    style: { marginBottom: '24px' }
                                },
                                [
                                    el(
                                        'div',
                                        {
                                            key: 'price-display',
                                            style: {
                                                display: 'flex',
                                                alignItems: 'baseline',
                                                gap: '4px',
                                                justifyContent: 'center'
                                            }
                                        },
                                        [
                                            el(RichText, {
                                                key: 'currency',
                                                tagName: 'span',
                                                value: currency,
                                                onChange: function(value) { setAttributes({ currency: value }); },
                                                placeholder: '$',
                                                style: {
                                                    fontSize: '20px',
                                                    fontWeight: '600',
                                                    color: textColor
                                                }
                                            }),
                                            el(RichText, {
                                                key: 'price',
                                                tagName: 'span',
                                                value: price,
                                                onChange: function(value) { setAttributes({ price: value }); },
                                                placeholder: '0',
                                                style: {
                                                    fontSize: '48px',
                                                    fontWeight: '800',
                                                    lineHeight: '1',
                                                    color: textColor
                                                }
                                            })
                                        ]
                                    ),
                                    el(RichText, {
                                        key: 'period',
                                        tagName: 'div',
                                        value: period,
                                        onChange: function(value) { setAttributes({ period: value }); },
                                        placeholder: 'per month',
                                        style: {
                                            fontSize: '14px',
                                            marginTop: '4px',
                                            opacity: '0.8',
                                            color: textColor,
                                            textAlign: 'center'
                                        }
                                    })
                                ]
                            ),

                            // Features
                            el(
                                'ul',
                                {
                                    key: 'features',
                                    style: {
                                        listStyle: 'none',
                                        padding: '0',
                                        margin: '0 0 24px 0'
                                    }
                                },
                                features.map(function(feature, index) {
                                    return el(
                                        'li',
                                        {
                                            key: index,
                                            style: {
                                                display: 'flex',
                                                alignItems: 'center',
                                                gap: '12px',
                                                padding: '8px 0',
                                                fontSize: '14px',
                                                color: textColor,
                                                opacity: feature.included ? '1' : '0.5'
                                            }
                                        },
                                        [
                                            el('span', {
                                                key: 'icon',
                                                style: {
                                                    fontSize: '18px',
                                                    fontWeight: 'bold',
                                                    color: feature.included ? '#10b981' : '#ef4444',
                                                    flexShrink: '0'
                                                }
                                            }, feature.included ? '✓' : '✗'),
                                            el(RichText, {
                                                key: 'text',
                                                tagName: 'span',
                                                value: feature.text,
                                                onChange: function(value) { updateFeature(index, 'text', value); },
                                                placeholder: 'Feature description',
                                                style: {
                                                    flex: '1'
                                                }
                                            })
                                        ]
                                    );
                                })
                            ),

                            // InnerBlocks Area for Custom Content
                            el(
                                'div',
                                {
                                    key: 'innerblocks-area',
                                    style: {
                                        marginBottom: '24px',
                                        flex: '1'
                                    }
                                },
                                el(InnerBlocks, {
                                    allowedBlocks: [
                                        'core/paragraph',
                                        'core/heading',
                                        'core/list',
                                        'core/image',
                                        'core/buttons',
                                        'core/button',
                                        'core/separator',
                                        'core/spacer',
                                        'core/group'
                                    ],
                                    template: [],
                                    templateLock: false,
                                    renderAppender: InnerBlocks.ButtonBlockAppender
                                })
                            ),

                            // Button (conditionally rendered)
                            showButton && el(
                                RichText,
                                {
                                    key: 'button',
                                    tagName: 'div',
                                    value: buttonText,
                                    onChange: function(value) { setAttributes({ buttonText: value }); },
                                    placeholder: 'Get Started',
                                    style: {
                                        display: 'inline-block',
                                        width: '100%',
                                        padding: '12px 24px',
                                        backgroundColor: buttonColor,
                                        color: '#ffffff',
                                        textDecoration: 'none',
                                        borderRadius: '8px',
                                        fontWeight: '600',
                                        fontSize: '16px',
                                        textAlign: 'center',
                                        cursor: 'pointer'
                                    }
                                }
                            )
                        ]
                    )
                ]
            );
        },

        save: function() {
            // Use InnerBlocks.Content to save the inner blocks
            return el(InnerBlocks.Content);
        }
    });
})();

