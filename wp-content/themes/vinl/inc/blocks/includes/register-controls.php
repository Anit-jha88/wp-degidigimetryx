<?php

add_action('customize_register', 'finley_register_custom_controls');
function finley_register_custom_controls($wp_customize)
{

    require_once FINLEY_BLOCKS_DIR_PATH . '/includes/button/class-button-control.php';
    $wp_customize->register_control_type('Finley_Button_Control');

    require_once FINLEY_BLOCKS_DIR_PATH . '/includes//custom-html/class-custom-html.php';

    require_once FINLEY_BLOCKS_DIR_PATH . '/includes/toggle/class-toggle-control.php';
    $wp_customize->register_control_type('Graphthemes_Toggle_Control');

    require_once FINLEY_BLOCKS_DIR_PATH . '/includes//multicheck/class-multi-check-control.php';
    $wp_customize->register_control_type('Graphthemes_Multi_Check_Control');
}
