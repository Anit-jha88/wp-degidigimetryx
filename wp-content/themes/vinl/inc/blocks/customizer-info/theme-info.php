<?php

add_action('customize_register', 'finley_customizer_theme_info');

function finley_customizer_theme_info($wp_customize)
{

	$wp_customize->add_section('finley_theme_info_section', array(
		'title'       => esc_html__('❂ Theme Info', 'finley'),
		'priority' => 2
	));


	$wp_customize->add_setting('theme_info', array(
		'default' => '',
		'sanitize_callback' => 'wp_kses_post',
	));

	$theme_info = '';

	$theme_info .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__('Theme Details', 'finley') . ': </label><a class="button alignright" href="' . esc_url('https://graphthemes.com/finley/') . '" target="_blank">' . esc_html__('Click Here', 'finley') . '</a></span><hr>';

	$theme_info .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__('How to use', 'finley') . ': </label><a class="button alignright" href="' . esc_url('https://graphthemes.com/theme-docs/finley/') . '" target="_blank">' . esc_html__('Click Here', 'finley') . '</a></span><hr>';
	$theme_info .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__('View Demo', 'finley') . ': </label><a class="button alignright" href="' . esc_url('https://graphthemes.com/preview/?product_id=finley') . '" target="_blank">' . esc_html__('Click Here', 'finley') . '</a></span><hr>';
	$theme_info .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__('Support Forum', 'finley') . ': </label><a class="button alignright" href="' . esc_url('https://wordpress.org/support/theme/finley') . '" target="_blank">' . esc_html__('Click Here', 'finley') . '</a></span><hr>';

	$wp_customize->add_control(new Finley_Custom_Text($wp_customize, 'theme_info', array(
		'section' => 'finley_theme_info_section',
		'label' => $theme_info
	)));
}
