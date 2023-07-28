<?php

add_action('customize_register', 'finley_sticky_menu');
function finley_sticky_menu($wp_customize)
{

    $wp_customize->add_setting('finley_sticky_menu_option', array(
        'sanitize_callback'     =>  'finley_sanitize_checkbox',
        'default'               =>  finley_get_default_sticky_menu(),
    ));

    $wp_customize->add_control(new Graphthemes_Toggle_Control($wp_customize, 'finley_sticky_menu_option', array(
        'label' => esc_html__('Enable Sticky Menu', 'finley'),
        'section' => 'finley_general_customization_section',
        'settings' => 'finley_sticky_menu_option',
        'type' => 'toggle',
    )));
}
