
<?php 
 
// Slider Section
$wp_customize->add_section('sliding_section', array(
	'title' => esc_html__('Home Page Slider Option', 'venta'),
	 'panel'=>'Venta_theme_option',
	'capability'=>'edit_theme_options',
	'priority' => 40
));

$wp_customize->add_setting(
    'venta_slider_section_hideshow',
    array(
        'default' => 'show',
        'sanitize_callback' => 'venta_sanitize_select',
    )
    );
    $venta_slider_section_hide_show_option = venta_slider_section_option();
    $wp_customize->add_control(
    'venta_slider_section_hideshow',
    array(
        'type' => 'radio',
        'label' => esc_html__('Slider Option', 'venta'),
        'description' => esc_html__('Show/hide option for Blog Section.', 'venta'),
        'section' => 'sliding_section',
        'choices' => $venta_slider_section_hide_show_option,
        'priority' => 1
    )
    );
 
  $slider_no = 3;
	for( $i = 1; $i <= $slider_no; $i++ ) {
		$venta_slider_page = 'venta_slider_page_' .$i;
		$venta_slider_btntxtone = 'venta_slider_btntxtone_' . $i;
		$venta_slider_btnurlone = 'venta_slider_btnurlone_' .$i;
		$venta_slider_btntxttwo = 'venta_slider_btntxttwo_' . $i;
		$venta_slider_btnurltwo = 'venta_slider_btnurltwo_' .$i;
		
		$wp_customize->add_setting( $venta_slider_page,
			array(
				'default'           => 1,
				'sanitize_callback' => 'venta_sanitize_dropdown_pages',
			)
		);

		$wp_customize->add_control( $venta_slider_page,
			array(
				'label'    			=> esc_html__( 'Slider Page ', 'venta' ) .$i,
				'section'  			=> 'sliding_section',
				'type'     			=> 'dropdown-pages',
				'priority' 			=> 100,
			)
		);

		$wp_customize->add_setting( $venta_slider_btntxtone,
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control( $venta_slider_btntxtone,
			array(
				'label'    			=> esc_html__( 'Slider Button One Text ', 'venta' ),
				'section'  			=> 'sliding_section',
				'type'     			=> 'text',
				'priority' 			=> 100,
			)
		);
		
		$wp_customize->add_setting( $venta_slider_btnurlone,
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control( $venta_slider_btnurlone,
			array(
				'label'    			=> esc_html__( 'Slider Button One URL ', 'venta' ),
				'section'  			=> 'sliding_section',
				'type'     			=> 'text',
				'priority' 			=> 100,
			)
		);
		$wp_customize->add_setting( $venta_slider_btntxttwo,
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control( $venta_slider_btntxttwo,
			array(
				'label'    			=> esc_html__( 'Slider Button Two Text ', 'venta' ),
				'section'  			=> 'sliding_section',
				'type'     			=> 'text',
				'priority' 			=> 100,
			)
		);
		
		$wp_customize->add_setting( $venta_slider_btnurltwo,
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control( $venta_slider_btnurltwo,
			array(
				'label'    			=> esc_html__( 'Slider Button Two URL ', 'venta' ),
				'section'  			=> 'sliding_section',
				'type'     			=> 'text',
				'priority' 			=> 100,
			)
		);
  }
  
  
?>