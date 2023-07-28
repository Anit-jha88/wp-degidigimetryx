<?php

function finley_customizer_upgrade_to_pro($wp_customize)
{

	$wp_customize->add_section(new Finley_Button_Control($wp_customize, 'upgrade-to-pro',	array(
		'title'    => esc_html__('★ Finley Pro ', 'finley'),
		'type'	=> 'button',
		'pro_text' => esc_html__('Upgrade to Pro', 'finley'),
		'pro_url'  => esc_url('https://graphthemes.com/finley/'),
		'priority' => 1
	)));
}
add_action('customize_register', 'finley_customizer_upgrade_to_pro');


function finley_enqueue_custom_admin_style()
{
	wp_register_style('finley-button', get_template_directory_uri() . '/inc/blocks/includes/button/button.css', false);
	wp_enqueue_style('finley-button');

	wp_enqueue_script('finley-button', get_template_directory_uri() . '/inc/blocks/includes/button/button.js', array('jquery'), false, true);
}
add_action('admin_enqueue_scripts', 'finley_enqueue_custom_admin_style');
