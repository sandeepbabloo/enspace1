<?php
 
// Footer Section
	
    $wp_customize->add_section('venta_footer_info', array(
      'title'   => __('Footer Section', 'venta'),
      'description' => '',
	  'panel' => 'Venta_theme_option',
      'priority'    => 170
    ));
	
	$wp_customize->add_setting(
    'venta_footer_section_hideshow',
    array(
        'default' => 'show',
        'sanitize_callback' => 'venta_sanitize_select',
    )
    );
    $venta_footer_section_hide_show_option = venta_footer_section_option();
    $wp_customize->add_control(
    'venta_footer_section_hideshow',
    array(
        'type' => 'radio',
        'label' => esc_html__('Footer Option', 'venta'),
        'description' => esc_html__('Show/hide option for Footer Section.', 'venta'),
        'section' => 'venta_footer_info',
        'choices' => $venta_footer_section_hide_show_option,
        'priority' => 1
    )
    );
	
	
	$wp_customize->add_setting('venta_footer_title', array(
      'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'wp_kses_post'
    ));

    $wp_customize->add_control('venta_footer_title', array(
      'label'   => __('Copyright', 'venta'),
      'section' => 'venta_footer_info',
	   'type'      => 'textarea',
      'priority'  => 1
    ));
	
?>	
	