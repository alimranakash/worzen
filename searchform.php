<?php
/**
 * Search form template
 *
 * @package Worzen
 * @since 1.0.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="flex gap-2">
        <label class="sr-only" for="s"><?php esc_html_e('Search for:', 'worzen'); ?></label>
        <input 
            type="search" 
            id="s" 
            name="s" 
            value="<?php echo get_search_query(); ?>" 
            placeholder="<?php esc_attr_e('Search...', 'worzen'); ?>"
            class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300"
            required
        />
        <button 
            type="submit" 
            class="bg-gradient-to-r from-primary to-secondary text-white px-6 py-3 rounded-lg font-semibold hover:shadow-lg transition duration-300"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </button>
    </div>
</form>

