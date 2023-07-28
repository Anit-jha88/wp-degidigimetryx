<?php

add_action('customize_register', 'finley_post_snippet_social_share');
function finley_post_snippet_social_share($wp_customize)
{

    $wp_customize->add_setting('post_snippet_hide_show_social_share', array(
        'sanitize_callback'     =>  'finley_sanitize_checkbox',
        'default'               =>  finley_get_default_post_snippet_social_share()
    ));

    $wp_customize->add_control(new Graphthemes_Toggle_Control($wp_customize, 'post_snippet_hide_show_social_share', array(
        'label' => esc_html__('Enable Social Share', 'finley'),
        'section' => 'finley_post_snippet_customization_section',
        'settings' => 'post_snippet_hide_show_social_share',
        'type' => 'toggle',
    )));
}




add_action('customize_register', 'finley_post_snippet_social_share_options');
function finley_post_snippet_social_share_options($wp_customize)
{

    $wp_customize->add_setting('post_snippet_social_share_options', array(
        'sanitize_callback' => 'finley_sanitize_array',
        'default'     => finley_get_default_post_snippet_social_share_options()
    ));

    $wp_customize->add_control(new Graphthemes_Multi_Check_Control($wp_customize, 'post_snippet_social_share_options', array(
        'label' => esc_html__('Social Shares', 'finley'),
        'section' => 'finley_post_snippet_customization_section',
        'settings' => 'post_snippet_social_share_options',
        'type' => 'multi-check',
        'choices'     => array(
            'facebook' => esc_html__('Facebook', 'finley'),
            'twitter' => esc_html__('Twitter', 'finley'),
            'pinterest' => esc_html__('Pinterest', 'finley'),
            'linkedin' => esc_html__('LinkedIn', 'finley'),
            'email' => esc_html__('Email', 'finley'),
        ),
        'active_callback' => function () {
            return get_theme_mod('post_snippet_hide_show_social_share', finley_get_default_post_snippet_social_share());
        }
    )));

    $wp_customize->add_setting('twitter_id', array(
        'sanitize_callback' =>  'wp_kses_post',
    ));

    $wp_customize->add_control('twitter_id', array(
        'label' =>  esc_html__('Twitter ID:', 'finley'),
        'section'   =>  'finley_post_snippet_customization_section',
        'Settings'  =>  'twitter_id',
        'type' => 'text',
        'active_callback' => function () {
            return get_theme_mod('post_snippet_hide_show_social_share', finley_get_default_post_snippet_social_share());
        }
    ));
}
