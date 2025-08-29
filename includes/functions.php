<?php
// Core lazy load functionality

function wp_lazy_embeds_process_content( $content ) {
    // Regex to find iframes
    $pattern = '/<iframe.*?src=["\'](.*?)["\'].*?><\/iframe>/i';

    $content = preg_replace_callback($pattern, function($matches) {
        $src = $matches[1];

        // Skip if src is empty
        if (empty($src)) return $matches[0];

        // Build lazy embed container
        $placeholder = '<div class="wp-lazy-embed-container" data-src="' . esc_url($src) . '">';
        $placeholder .= '<div class="wp-lazy-embed-fallback wp-lazy-glass"></div>'; // default fallback
        $placeholder .= '</div>';

        return $placeholder;

    }, $content);

    return $content;
}
add_filter('the_content', 'wp_lazy_embeds_process_content');
?>