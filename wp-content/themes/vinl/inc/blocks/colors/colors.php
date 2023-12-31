<?php

add_action( 'after_setup_theme', function () {
    add_theme_support( 'custom-header', array(
        'header-text' => false,
    ) );
} );
add_action( 'customize_register', 'finley_color_section' );
function finley_color_section( $wp_customize )
{
    $wp_customize->get_section( 'colors' )->title = esc_html__( "Color Options", 'finley' );
    $wp_customize->get_section( 'colors' )->priority = 21;
}

/* Add Default Colors for Customizer Settings */
require dirname( __FILE__ ) . '/default-colors.php';
require dirname( __FILE__ ) . '/color-background/color-background.php';
require dirname( __FILE__ ) . '/dynamic-colors.php';