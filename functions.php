<?php
// Enqueue stylesheets and scripts
function custom_theme_scripts() {
  wp_enqueue_style('parent-theme-styles', get_template_directory_uri() . '/styles.css');

    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/index.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');

// Add Google Fonts
function custom_theme_google_fonts() {
    wp_enqueue_style('google-fonts-1', 'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
    wp_enqueue_style('google-fonts-2', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');
    wp_enqueue_style('google-fonts-3', 'https://fonts.googleapis.com/css2?family=DM+Mono&display=swap');
}
add_action('wp_enqueue_scripts', 'custom_theme_google_fonts');