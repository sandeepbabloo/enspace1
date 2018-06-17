<?php	
	
	// Blog section
	$wp_customize->add_section('venta-blog_info', array(
      'title'   => __('Home Page Blog Section', 'venta'),
      'description' => '',
	  'panel' => 'Venta_theme_option',
      'priority'    => 45
    ));
	
	$wp_customize->add_setting(
    'venta_blog_section_hideshow',
    array(
        'default' => 'show',
        'sanitize_callback' => 'venta_sanitize_select',
    )
    );
    $venta_blog_section_hide_show_option = venta_blog_section_option();
    $wp_customize->add_control(
    'venta_blog_section_hideshow',
    array(
        'type' => 'radio',
        'label' => esc_html__('Blog Option', 'venta'),
        'description' => esc_html__('Show/hide option for Blog Section.', 'venta'),
        'section' => 'venta-blog_info',
        'choices' => $venta_blog_section_hide_show_option,
        'priority' => 1
    )
    );
	
	 $wp_customize->add_setting('venta_blog_title', array(
      'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('venta_blog_title', array(
      'label'   => __('Blog Title', 'venta'),
      'section' => 'venta-blog_info',
      'priority'  => 1
    ));
	
	
?>	