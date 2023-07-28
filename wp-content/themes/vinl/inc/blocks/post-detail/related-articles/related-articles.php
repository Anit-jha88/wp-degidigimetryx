<?php

add_action('customize_register', 'finley_post_detail_related_articles');
function finley_post_detail_related_articles($wp_customize)
{

    $wp_customize->add_setting('post_detail_hide_show_related_articles', array(
        'sanitize_callback'     =>  'finley_sanitize_checkbox',
        'default'               =>  finley_get_default_post_detail_related_articles()
    ));

    $wp_customize->add_control(new Graphthemes_Toggle_Control($wp_customize, 'post_detail_hide_show_related_articles', array(
        'label' => esc_html__('Show/Hide Related Articles', 'finley'),
        'section' => 'finley_post_detail_customization_section',
        'settings' => 'post_detail_hide_show_related_articles',
        'type' => 'toggle',
    )));
}

add_action('customize_register', 'finley_post_detail_related_articles_title');
function finley_post_detail_related_articles_title($wp_customize)
{
    $wp_customize->add_setting('post_detail_related_articles_title', array(
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  finley_get_default_post_detail_related_articles_title()
    ));

    $wp_customize->add_control('post_detail_related_articles_title', array(
        'settings' => 'post_detail_related_articles_title',
        'type' => 'text',
        'section' => 'finley_post_detail_customization_section',
        'label' => esc_html__('Related Articles Title', 'finley'),
        'active_callback' => function () {
            return get_theme_mod('post_detail_hide_show_related_articles', finley_get_default_post_detail_related_articles());
        }
    ));
}
