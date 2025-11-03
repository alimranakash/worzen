/**
 * Worzen Pricing Table Block - Editor JavaScript
 *
 * @package Worzen
 * @since 1.0.0
 */

// Wait for DOM to be ready
window.addEventListener('DOMContentLoaded', function() {
    console.log('Worzen Pricing Block: DOM loaded, initializing...');
});

(function (wp) {
    'use strict';

    // Debug: Log that the script is loading
    console.log('Worzen Pricing Block: Script loaded');

    // Check if wp and wp.blocks are available
    if (typeof wp === 'undefined') {
        console.error('Worzen Pricing Block: wp is not defined!');
        return;
    }

    if (typeof wp.blocks === 'undefined') {
        console.error('Worzen Pricing Block: wp.blocks is not available!');
        return;
    }

    console.log('Worzen Pricing Block: wp.blocks is available');

    var registerBlockType = wp.blocks.registerBlockType;
    var InspectorControls = wp.blockEditor.InspectorControls;
    var useBlockProps = wp.blockEditor.useBlockProps;
    var PanelBody = wp.components.PanelBody;
    var TextControl = wp.components.TextControl;
    var ToggleControl = wp.components.ToggleControl;
    var Button = wp.components.Button;
    var Fragment = wp.element.Fragment;
    var __ = wp.i18n.__;
    var el = wp.element.createElement;

    console.log('Worzen Pricing Block: Attempting to register block...');

    // Register the block
    registerBlockType('worzen/pricing-table', {
        title: __('Worzen Pricing', 'worzen'),
        icon: 'money-alt',
        category: 'worzen',
        attributes: {
            plans: {
                type: 'array',
                default: []
            },
            showBadges: {
                type: 'boolean',
                default: true
            },
            showDescriptions: {
                type: 'boolean',
                default: true
            }
        },
        edit: function (props) {
            const { attributes, setAttributes } = props;
            const { plans, showBadges, showDescriptions } = attributes;
            const blockProps = useBlockProps();

            // Helper function to update a specific plan
            const updatePlan = (index, key, value) => {
                const newPlans = [...plans];
                newPlans[index] = { ...newPlans[index], [key]: value };
                setAttributes({ plans: newPlans });
            };

            // Helper function to update a feature in a plan
            const updateFeature = (planIndex, featureIndex, key, value) => {
                const newPlans = [...plans];
                const newFeatures = [...newPlans[planIndex].features];
                newFeatures[featureIndex] = { ...newFeatures[featureIndex], [key]: value };
                newPlans[planIndex] = { ...newPlans[planIndex], features: newFeatures };
                setAttributes({ plans: newPlans });
            };

            // Add a new feature to a plan
            const addFeature = (planIndex) => {
                const newPlans = [...plans];
                const newFeatures = [...newPlans[planIndex].features, { text: 'New Feature', included: true }];
                newPlans[planIndex] = { ...newPlans[planIndex], features: newFeatures };
                setAttributes({ plans: newPlans });
            };

            // Remove a feature from a plan
            const removeFeature = (planIndex, featureIndex) => {
                const newPlans = [...plans];
                const newFeatures = newPlans[planIndex].features.filter((_, i) => i !== featureIndex);
                newPlans[planIndex] = { ...newPlans[planIndex], features: newFeatures };
                setAttributes({ plans: newPlans });
            };

            // Add a new plan
            const addPlan = () => {
                const newPlan = {
                    id: 'plan_' + Date.now(),
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
                    buttonColor: ''
                };
                setAttributes({ plans: [...plans, newPlan] });
            };

            // Remove a plan
            const removePlan = (index) => {
                const newPlans = plans.filter((_, i) => i !== index);
                setAttributes({ plans: newPlans });
            };

            // Move plan up
            const movePlanUp = (index) => {
                if (index === 0) return;
                const newPlans = [...plans];
                [newPlans[index - 1], newPlans[index]] = [newPlans[index], newPlans[index - 1]];
                setAttributes({ plans: newPlans });
            };

            // Move plan down
            const movePlanDown = (index) => {
                if (index === plans.length - 1) return;
                const newPlans = [...plans];
                [newPlans[index], newPlans[index + 1]] = [newPlans[index + 1], newPlans[index]];
                setAttributes({ plans: newPlans });
            };

            return (
                <Fragment>
                    <InspectorControls>
                        <PanelBody title={__('General Settings', 'worzen')} initialOpen={true}>
                            <ToggleControl
                                label={__('Show Badges', 'worzen')}
                                checked={showBadges}
                                onChange={(value) => setAttributes({ showBadges: value })}
                            />
                            <ToggleControl
                                label={__('Show Descriptions', 'worzen')}
                                checked={showDescriptions}
                                onChange={(value) => setAttributes({ showDescriptions: value })}
                            />
                        </PanelBody>
                    </InspectorControls>

                    <div {...blockProps}>
                        <div className="worzen-pricing-editor-controls">
                            <div style={{ display: 'flex', justifyContent: 'space-between', alignItems: 'center', marginBottom: '1rem' }}>
                                <h4 style={{ margin: 0 }}>{__('Pricing Plans', 'worzen')}</h4>
                                <Button 
                                    isPrimary 
                                    onClick={addPlan}
                                    style={{ background: 'linear-gradient(to right, #6366f1, #8b5cf6)' }}
                                >
                                    {__('+ Add Plan', 'worzen')}
                                </Button>
                            </div>

                            {plans.map((plan, planIndex) => (
                                <div 
                                    key={plan.id} 
                                    className={`worzen-plan-editor ${plan.featured ? 'is-featured' : ''}`}
                                    style={{
                                        background: plan.featured ? 'linear-gradient(to bottom, #f0f1ff, #ffffff)' : '#ffffff',
                                        border: plan.featured ? '2px solid #6366f1' : '2px solid #e5e7eb',
                                        borderRadius: '12px',
                                        padding: '1.5rem',
                                        marginBottom: '1.5rem'
                                    }}
                                >
                                    <div style={{ display: 'flex', justifyContent: 'space-between', alignItems: 'center', marginBottom: '1rem', paddingBottom: '1rem', borderBottom: '1px solid #e5e7eb' }}>
                                        <h4 style={{ margin: 0, fontSize: '16px', fontWeight: 600 }}>
                                            {plan.name || __('Untitled Plan', 'worzen')}
                                        </h4>
                                        <div style={{ display: 'flex', gap: '0.5rem' }}>
                                            <Button 
                                                isSmall 
                                                onClick={() => movePlanUp(planIndex)}
                                                disabled={planIndex === 0}
                                            >
                                                ↑
                                            </Button>
                                            <Button 
                                                isSmall 
                                                onClick={() => movePlanDown(planIndex)}
                                                disabled={planIndex === plans.length - 1}
                                            >
                                                ↓
                                            </Button>
                                            <Button 
                                                isDestructive 
                                                isSmall 
                                                onClick={() => removePlan(planIndex)}
                                                disabled={plans.length === 1}
                                            >
                                                {__('Remove', 'worzen')}
                                            </Button>
                                        </div>
                                    </div>

                                    <div style={{ display: 'grid', gridTemplateColumns: 'repeat(2, 1fr)', gap: '1rem', marginBottom: '1rem' }}>
                                        <TextControl
                                            label={__('Plan Name', 'worzen')}
                                            value={plan.name}
                                            onChange={(value) => updatePlan(planIndex, 'name', value)}
                                        />
                                        <div>
                                            <label style={{ display: 'block', fontSize: '13px', fontWeight: 500, marginBottom: '0.5rem' }}>
                                                {__('Featured Plan', 'worzen')}
                                            </label>
                                            <ToggleControl
                                                checked={plan.featured}
                                                onChange={(value) => updatePlan(planIndex, 'featured', value)}
                                            />
                                        </div>
                                    </div>

                                    <TextControl
                                        label={__('Description', 'worzen')}
                                        value={plan.description}
                                        onChange={(value) => updatePlan(planIndex, 'description', value)}
                                        style={{ marginBottom: '1rem' }}
                                    />

                                    <div style={{ display: 'grid', gridTemplateColumns: 'auto 1fr auto', gap: '0.5rem', marginBottom: '1rem' }}>
                                        <TextControl
                                            label={__('Currency', 'worzen')}
                                            value={plan.currency}
                                            onChange={(value) => updatePlan(planIndex, 'currency', value)}
                                            style={{ width: '80px' }}
                                        />
                                        <TextControl
                                            label={__('Price', 'worzen')}
                                            value={plan.price}
                                            onChange={(value) => updatePlan(planIndex, 'price', value)}
                                        />
                                        <TextControl
                                            label={__('Period', 'worzen')}
                                            value={plan.period}
                                            onChange={(value) => updatePlan(planIndex, 'period', value)}
                                            placeholder="per month"
                                        />
                                    </div>

                                    <div style={{ marginBottom: '1rem' }}>
                                        <label style={{ display: 'block', fontSize: '13px', fontWeight: 500, marginBottom: '0.5rem' }}>
                                            {__('Features', 'worzen')}
                                        </label>
                                        {plan.features.map((feature, featureIndex) => (
                                            <div key={featureIndex} style={{ display: 'flex', alignItems: 'center', gap: '0.75rem', marginBottom: '0.5rem', padding: '0.75rem', background: '#f9fafb', borderRadius: '6px' }}>
                                                <input
                                                    type="checkbox"
                                                    checked={feature.included}
                                                    onChange={(e) => updateFeature(planIndex, featureIndex, 'included', e.target.checked)}
                                                    style={{ flexShrink: 0 }}
                                                />
                                                <input
                                                    type="text"
                                                    value={feature.text}
                                                    onChange={(e) => updateFeature(planIndex, featureIndex, 'text', e.target.value)}
                                                    style={{ flex: 1, padding: '0.5rem', border: '1px solid #d1d5db', borderRadius: '4px', fontSize: '13px' }}
                                                />
                                                <Button
                                                    isDestructive
                                                    isSmall
                                                    onClick={() => removeFeature(planIndex, featureIndex)}
                                                >
                                                    {__('×', 'worzen')}
                                                </Button>
                                            </div>
                                        ))}
                                        <Button 
                                            isSecondary 
                                            isSmall 
                                            onClick={() => addFeature(planIndex)}
                                            style={{ marginTop: '0.5rem' }}
                                        >
                                            {__('+ Add Feature', 'worzen')}
                                        </Button>
                                    </div>

                                    <div style={{ display: 'grid', gridTemplateColumns: 'repeat(2, 1fr)', gap: '1rem' }}>
                                        <TextControl
                                            label={__('Button Text', 'worzen')}
                                            value={plan.buttonText}
                                            onChange={(value) => updatePlan(planIndex, 'buttonText', value)}
                                        />
                                        <TextControl
                                            label={__('Button URL', 'worzen')}
                                            value={plan.buttonUrl}
                                            onChange={(value) => updatePlan(planIndex, 'buttonUrl', value)}
                                        />
                                    </div>
                                </div>
                            ))}
                        </div>
                    </div>
                </Fragment>
            );
        },

        save: function () {
            // Server-side rendering, so return null
            return null;
        },
    });

    console.log('Worzen Pricing Block: Successfully registered!');
})();

