<?php
/**
 * The sidebar containing the main widget area
 *
 * @package Worzen
 * @since 1.0.0
 */

if (!is_active_sidebar('sidebar-1')) {
    return;
}
?>

<aside id="secondary" class="widget-area bg-white rounded-2xl shadow-lg p-6" role="complementary">
    <?php dynamic_sidebar('sidebar-1'); ?>
</aside><!-- #secondary -->

