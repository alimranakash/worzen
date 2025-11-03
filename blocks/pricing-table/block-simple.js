/**
 * Worzen Pricing Table Block - Simple Version
 *
 * @package Worzen
 * @since 1.0.0
 */

(function() {
    console.log('Worzen Pricing: Script loading...');

    // Function to register the block
    function registerPricingBlock() {
        console.log('Worzen Pricing: Attempting registration...');

        // Check if wp is available
        if (typeof wp === 'undefined') {
            console.error('Worzen Pricing: wp is not defined');
            return false;
        }

        // Check if wp.blocks is available
        if (typeof wp.blocks === 'undefined') {
            console.error('Worzen Pricing: wp.blocks is not defined');
            return false;
        }

        console.log('Worzen Pricing: wp.blocks is available!');

        var el = wp.element.createElement;
        var registerBlockType = wp.blocks.registerBlockType;
        var __ = wp.i18n.__;

        console.log('Worzen Pricing: Registering block...');

        registerBlockType('worzen/pricing-table', {
            title: __('Worzen Pricing', 'worzen'),
            icon: 'money-alt',
            category: 'worzen',

            edit: function(props) {
                return el(
                    'div',
                    { className: 'worzen-pricing-placeholder', style: { padding: '40px', background: '#f0f0f0', textAlign: 'center', border: '2px dashed #ccc' } },
                    el('h3', {}, __('Worzen Pricing Table', 'worzen')),
                    el('p', {}, __('This block will display your pricing plans on the frontend.', 'worzen'))
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

