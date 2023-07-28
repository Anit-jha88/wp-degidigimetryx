<?php

add_action('customize_register', 'finley_primary_color');
function finley_primary_color($wp_customize)
{

    $wp_customize->add_setting('primary_color', array(
        'default'     => finley_get_default_primary_color(),
        'transport'   => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
        'label'      => esc_html__('Primary Color', 'finley'),
        'section'    => 'colors',
        'settings'   => 'primary_color',

    )));
}


add_action('customize_preview_init', 'finley_primary_color_enqueue_scripts');
function finley_primary_color_enqueue_scripts()
{
    wp_enqueue_script('graphthemes-primary-color-customizer', get_template_directory_uri() . '/inc/blocks/colors/color-primary/customizer-color-primary.js', array('jquery'), '', true);
}
