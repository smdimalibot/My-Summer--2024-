<?php
function maverick_twentytwentyfour_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'maverick_twentytwentyfour_enqueue_styles');

function my_theme_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'textdomain'),
        'footer' => __('Footer Menu', 'textdomain'),
    ));
}
add_action('after_setup_theme', 'my_theme_setup');

function my_customizer_settings($wp_customize) {
    $wp_customize->add_section('my_custom_settings', array(
        'title' => __('Custom Settings', 'textdomain'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('my_custom_title_color', array(
        'default' => '#000000',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'my_custom_title_color_control', array(
        'label' => __('Title Color', 'textdomain'),
        'section' => 'my_custom_settings',
        'settings' => 'my_custom_title_color',
    )));

    $wp_customize->add_setting('my_custom_link_color', array(
        'default' => '#0000ff',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'my_custom_link_color_control', array(
        'label' => __('Link Color', 'textdomain'),
        'section' => 'my_custom_settings',
        'settings' => 'my_custom_link_color',
    )));

    $wp_customize->add_setting('my_custom_paragraph_color', array(
        'default' => '#000000',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'my_custom_paragraph_color_control', array(
        'label' => __('Paragraph Color', 'textdomain'),
        'section' => 'my_custom_settings',
        'settings' => 'my_custom_paragraph_color',
    )));

    $wp_customize->add_setting('my_custom_list_color', array(
        'default' => '#000000',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'my_custom_list_color_control', array(
        'label' => __('List Item Color', 'textdomain'),
        'section' => 'my_custom_settings',
        'settings' => 'my_custom_list_color',
    )));

    $wp_customize->add_setting('my_custom_background_color', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'my_custom_background_color_control', array(
        'label' => __('Background Color', 'textdomain'),
        'section' => 'my_custom_settings',
        'settings' => 'my_custom_background_color',
    )));
}
add_action('customize_register', 'my_customizer_settings');

function my_customizer_css() {
    ?>
    <style type="text/css">
        body {
            background-color: <?php echo get_theme_mod('my_custom_background_color', '#ffffff'); ?>;
        }
        h1, h2, h3, h4, h5, h6 {
            color: <?php echo get_theme_mod('my_custom_title_color', '#000000'); ?>;
        }
        a {
            color: <?php echo get_theme_mod('my_custom_link_color', '#0000ff'); ?>;
        }
        p {
            color: <?php echo get_theme_mod('my_custom_paragraph_color', '#000000'); ?>;
        }
        li {
            color: <?php echo get_theme_mod('my_custom_list_color', '#000000'); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'my_customizer_css');
?>

