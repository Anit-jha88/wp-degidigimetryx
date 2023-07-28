<?php

add_action('customize_register', 'finley_breadcrumbs');
function finley_breadcrumbs($wp_customize)
{

    $wp_customize->add_setting('finley_breadcrumbs_option', array(
        'sanitize_callback'     =>  'finley_sanitize_checkbox',
        'default'               =>  finley_get_default_breadcrumbs(),
    ));

    $wp_customize->add_control(new Graphthemes_Toggle_Control($wp_customize, 'finley_breadcrumbs_option', array(
        'label' => esc_html__('Enable Breadcrumbs', 'finley'),
        'section' => 'finley_general_customization_section',
        'settings' => 'finley_breadcrumbs_option',
        'type' => 'toggle',
    )));
}
