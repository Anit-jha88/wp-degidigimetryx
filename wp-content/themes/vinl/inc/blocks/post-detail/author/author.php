<?php

add_action('customize_register', 'finley_post_detail_author');
function finley_post_detail_author($wp_customize)
{

    $wp_customize->add_setting('post_detail_hide_show_author', array(
        'sanitize_callback'     =>  'finley_sanitize_checkbox',
        'default'               =>  finley_get_default_post_detail_author()
    ));

    $wp_customize->add_control(new Graphthemes_Toggle_Control($wp_customize, 'post_detail_hide_show_author', array(
        'label' => esc_html__('Show/Hide Author', 'finley'),
        'section' => 'finley_post_detail_customization_section',
        'settings' => 'post_detail_hide_show_author',
        'type' => 'toggle',
    )));
}
