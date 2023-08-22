<?php

// Stylesheets and JS Files
function riftstudios_files() {
    // CSS FILES
    // Main Stylesheet
    wp_enqueue_style('riftstudios_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('riftstudios_extra_styles', get_theme_file_uri('/build/index.css'));

    // Google font
    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Montserrat:wght@300;500&display=swap', array(), '1.0.0' );

    // JS FILES
    wp_enqueue_script('main-riftstudios-js', get_theme_file_uri() . '/build/index.js', array('jquery'), '1.0.0', true );

    wp_localize_script('scripts', 'scriptsData', array(
        'root_url' => get_site_url(),
        'nonce' => wp_create_nonce('wp_rest')
    ));

}
add_action('wp_enqueue_scripts', 'riftstudios_files');