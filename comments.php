<?php
/**
 * The template for displaying comments
 *
 * @package Worzen
 * @since 1.0.0
 */

if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>
        
        <h2 class="comments-title text-3xl font-bold text-gray-900 mb-8">
            <?php
            $comment_count = get_comments_number();
            if ('1' === $comment_count) {
                printf(
                    /* translators: 1: title */
                    esc_html__('One comment on &ldquo;%1$s&rdquo;', 'worzen'),
                    '<span>' . get_the_title() . '</span>'
                );
            } else {
                printf(
                    /* translators: 1: comment count number, 2: title */
                    esc_html(_nx('%1$s comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'worzen')),
                    number_format_i18n($comment_count),
                    '<span>' . get_the_title() . '</span>'
                );
            }
            ?>
        </h2>

        <ol class="comment-list space-y-6 mb-8">
            <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 50,
                'callback'    => 'worzen_comment_callback',
            ));
            ?>
        </ol>

        <?php
        the_comments_navigation(array(
            'prev_text' => '<span class="px-4 py-2 bg-white border border-gray-300 rounded-lg hover:bg-primary hover:text-white transition duration-300">' . esc_html__('Older Comments', 'worzen') . '</span>',
            'next_text' => '<span class="px-4 py-2 bg-white border border-gray-300 rounded-lg hover:bg-primary hover:text-white transition duration-300">' . esc_html__('Newer Comments', 'worzen') . '</span>',
        ));
        ?>

        <?php if (!comments_open()) : ?>
            <p class="no-comments text-gray-600 text-center py-4">
                <?php esc_html_e('Comments are closed.', 'worzen'); ?>
            </p>
        <?php endif; ?>

    <?php endif; ?>

    <?php
    comment_form(array(
        'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title text-2xl font-bold text-gray-900 mb-6">',
        'title_reply_after'  => '</h3>',
        'class_form'         => 'comment-form space-y-4',
        'class_submit'       => 'bg-gradient-to-r from-primary to-secondary text-white px-8 py-3 rounded-full font-semibold hover:shadow-lg transition duration-300 cursor-pointer',
        'submit_button'      => '<button type="submit" name="%1$s" id="%2$s" class="%3$s">%4$s</button>',
        'comment_field'      => '<div class="comment-form-comment">
            <label for="comment" class="block text-sm font-semibold text-gray-700 mb-2">' . esc_html__('Comment', 'worzen') . ' <span class="required text-red-500">*</span></label>
            <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300"></textarea>
        </div>',
        'fields'             => array(
            'author' => '<div class="comment-form-author">
                <label for="author" class="block text-sm font-semibold text-gray-700 mb-2">' . esc_html__('Name', 'worzen') . ' <span class="required text-red-500">*</span></label>
                <input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30" maxlength="245" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300" />
            </div>',
            'email'  => '<div class="comment-form-email">
                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">' . esc_html__('Email', 'worzen') . ' <span class="required text-red-500">*</span></label>
                <input id="email" name="email" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" maxlength="100" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300" />
            </div>',
            'url'    => '<div class="comment-form-url">
                <label for="url" class="block text-sm font-semibold text-gray-700 mb-2">' . esc_html__('Website', 'worzen') . '</label>
                <input id="url" name="url" type="url" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" maxlength="200" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300" />
            </div>',
        ),
    ));
    ?>

</div><!-- #comments -->

