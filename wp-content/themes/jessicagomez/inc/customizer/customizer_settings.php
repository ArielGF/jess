<?php

//////////////////////////////////////////////////////////////////
// Customizer - Add Settings
//////////////////////////////////////////////////////////////////
function zinnias_lite_register_theme_customizer( $wp_customize ) {

	// Add Sections
	$wp_customize->add_section( 'zinnias_lite_new_section_footer', array(
		'title'    => __( 'Footer', 'zinnias_lite' ),
		'priority' => 103,
	) );


	// Add Setting

	// Footer Options
	$wp_customize->add_setting(
		'copy_right_text',
		array(
			'sanitize_callback' => 'wp_kses'
		)
	);


	// Add Control


	// Footer Settings
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'zinnias_lite_footer_copyright',
			array(
				'label'    => __( 'Footer Copyright Text', 'zinnias_lite' ),
				'section'  => 'zinnias_lite_new_section_footer',
				'settings' => 'copy_right_text',
				'type'     => 'textarea',
				'priority' => 1
			)
		)
	);


}

add_action( 'customize_register', 'zinnias_lite_register_theme_customizer' );
?>