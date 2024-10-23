<?php
function maverick_twentytwentyfour_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'maverick_twentytwentyfour_enqueue_styles');

function my_theme_setup() {
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'textdomain' ),
        'footer'    => __( 'Footer Menu', 'textdomain' ),
    ) );
}
add_action( 'after_setup_theme', 'my_theme_setup' );
?>
