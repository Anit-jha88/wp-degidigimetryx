<?php

/* Add Default Copyright Text */
require dirname(__FILE__) . '/default-footer-copyright.php';

add_action('customize_register', 'finley_customize_register_footer_copyright');
function finley_customize_register_footer_copyright($wp_customize)
{

    $wp_customize->add_section('finley_footer_copyright_section', array(
        'title'          => esc_html__('Footer Copyright', 'finley'),
        'priority'  => 24
    ));

    $wp_customize->add_setting('footer_copyright_text', array(
        'sanitize_callback'     =>  'wp_kses_post',
        'default'               =>  finley_get_default_footer_copyright()
    ));

    $wp_customize->add_control('footer_copyright_text', array(
        'label' => esc_html__('Copyright Text', 'finley'),
        'section' => 'finley_footer_copyright_section',
        'settings' => 'footer_copyright_text',
        'type' => 'textarea',
    ));
}
