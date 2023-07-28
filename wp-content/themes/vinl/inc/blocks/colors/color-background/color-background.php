<?php

add_action('wp_enqueue_scripts', 'finley_sticky_menu_background_color');
function finley_sticky_menu_background_color()
{

    $bg_color = get_theme_mod('background_color', get_theme_support('custom-background', 'default-color'));

    $dynamic_css = "body,.site-header{background:#$bg_color;}";

    wp_add_inline_style('finley', $dynamic_css);
}
