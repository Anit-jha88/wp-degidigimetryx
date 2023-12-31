<?php

add_action('customize_register', 'finley_line_height');
function finley_line_height($wp_customize)
{

    $wp_customize->add_setting('line_height', array(
        'default'     => finley_get_default_line_height(),
        'transport'   => 'postMessage',
        'sanitize_callback' => 'finley_sanitize_float'
    ));

    $wp_customize->add_control('line_height', array(
        'type'        => 'number',
        'settings'    => 'line_height',
        'label'       =>  esc_html__('Line Height', 'finley'),
        'section'     => 'finley_font_customization_section',
        'input_attrs' => array(
            'min' => 1,
            'max' => 5,
            'step' => 0.1
        )
    ));
}

add_action('customize_preview_init', 'finley_line_height_enqueue_scripts');
function finley_line_height_enqueue_scripts()
{
    wp_enqueue_script('graphthemes-line-height-customizer', get_template_directory_uri() . '/inc/blocks/font-customization/line-height/customizer-line-height.js', array('jquery'), '', true);
}


add_action('wp_enqueue_scripts', 'finley_line_height_dynamic_css');
function finley_line_height_dynamic_css()
{

    $line_height = esc_attr(get_theme_mod('line_height', finley_get_default_line_height()));

    $dynamic_css = ":root { --line-height: $line_height; }";

    wp_add_inline_style('finley', $dynamic_css);
}
