<?php
function wc_kolkata_2025_enqueue_styles() {
    wp_enqueue_style('wc-kolkata-2025-style', get_template_directory_uri() . '/assets/css/styles.css');
}
add_action('wp_enqueue_scripts', 'wc_kolkata_2025_enqueue_styles');
?>