<?php

add_action('customize_register', 'finley_secondary_color');

function finley_secondary_color($wp_customize)
{
    $wp_customize->add_setting('secondary_color', array(
        'default'     => finley_get_default_secondary_color(),
        'transport'   => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'secondary_color', array(
        'label'      => esc_html__('Secondary Color', 'finley'),
        'section'    => 'colors',
        'settings'   => 'secondary_color',

    )));
}


add_action('customize_preview_init', 'finley_secondary_color_enqueue_scripts');
function finley_secondary_color_enqueue_scripts()
{
    wp_enqueue_script('graphthemes-secondary-customizer', get_template_directory_uri() . '/inc/blocks/colors/color-secondary/customizer-color-secondary.js', array('jquery'), '', true);
}
