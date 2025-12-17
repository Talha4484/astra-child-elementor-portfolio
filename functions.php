<?php
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style(
        'astra-child-style',
        get_stylesheet_uri(),
        ['astra-theme-css'],
        wp_get_theme()->get('Version')
    );
});
