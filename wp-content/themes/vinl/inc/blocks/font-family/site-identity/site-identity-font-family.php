<?php

add_action('customize_register', 'finley_site_identity_font_family');
function finley_site_identity_font_family($wp_customize)
{

    $wp_customize->add_setting('site_identity_font_family', array(
        'default'     => finley_get_default_site_identity_font_family(),
        'transport'   => 'postMessage',
        'sanitize_callback' => 'finley_sanitize_google_fonts'
    ));

    $wp_customize->add_control('site_identity_font_family', array(
        'settings'    => 'site_identity_font_family',
        'label'       =>  esc_html__('Site Title/Tagline Font', 'finley'),
        'section'     => 'title_tagline',
        'type'        => 'select',
        'choices'     => finley_google_fonts(finley_free_pro()),
    ));
}


add_action('customize_preview_init', 'finley_site_identity_font_family_enqueue_scripts');
function finley_site_identity_font_family_enqueue_scripts()
{

    $site_identity_font_family = esc_attr(get_theme_mod('site_identity_font_family', finley_get_default_site_identity_font_family()));


    wp_enqueue_script('graphthemes-site-identity-font-family-customizer', get_template_directory_uri() . '/inc/blocks/font-family/site-identity/customizer-site-identity-font-family.js', array('jquery'), '', true);
}


add_action('wp_enqueue_scripts', 'finley_site_identity_font_family_dynamic_css');
function finley_site_identity_font_family_dynamic_css()
{

    $site_identity_font_family = esc_attr(get_theme_mod('site_identity_font_family', finley_get_default_site_identity_font_family()));

    $dynamic_css = ":root { --site-identity-font-family: $site_identity_font_family; }";

    wp_add_inline_style('finley', $dynamic_css);
}
