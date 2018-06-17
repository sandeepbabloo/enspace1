
<?php 
 
//Add Features Section 
$wp_customize->add_section('features_section', array(
	'title' => __('Home Page Features Section', 'venta'),
	 'panel'=>'Venta_theme_option',
	'capability'=>'edit_theme_options',
	'priority' => 43
));
 
$wp_customize->add_setting(
    'venta_features_section_hideshow',
    array(
        'default' => 'hide',
        'sanitize_callback' => 'venta_sanitize_select',
    )
    );
    $venta_features_section_hide_show_option = venta_features_section_option();
    $wp_customize->add_control(
    'venta_features_section_hideshow',
    array(
        'type' => 'radio',
        'label' => esc_html__('Feature Option', 'venta'),
        'description' => esc_html__('Show/hide option Section.', 'venta'),
        'section' => 'features_section',
        'choices' => $venta_features_section_hide_show_option,
        'priority' => 1
    )
    );

$wp_customize->add_setting(
		'features_img',
		array(
			'transport'         => 'refresh',
			'height'         => 325,
			'sanitize_callback' => 'esc_url_raw'
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'features_img', array(
			'label'        => __( 'Feature Image', 'venta' ),
			'section'    => 'features_section',
			 'settings'   => 'features_img',
		  
		)));	
	
$wp_customize->add_setting(
	'venta_features_title',
		array(
		'default'=>'',
		'type'      => 'theme_mod',
		'sanitize_callback'=>'sanitize_text_field',
		)
	);
	
$wp_customize->add_control('venta_features_title',array(
	'label' => esc_html__('Faetures Section Heading ', 'venta'),
	'type'=>'text',
	'section' => 'features_section',
	 
));



$features_no = 6;
	for( $i = 1; $i <= $features_no; $i++ ) {
		$venta_featurespage = 'venta_features_page_' . $i;
		$venta_featuresicon = 'venta_page_features_icon_' . $i;
		
		// Setting - Feature Icon
		$wp_customize->add_setting( $venta_featuresicon,
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control( $venta_featuresicon,
			array(
				'label'    			=> esc_html__( 'features Icon ', 'venta' ).$i,
				'description' =>  __('Select a icon in this list <a target="_blank" href="https://fontawesome.com/v4.7.0/icons/">Font Awesome icons</a> and enter the code','venta'),
				'section'  			=> 'features_section',
				'type'     			=> 'text',
				'priority' 			=> 100,
			)
		);
		
		$wp_customize->add_setting( $venta_featurespage,
			array(
				'default'           => 1,
				'sanitize_callback' => 'venta_sanitize_dropdown_pages',
			)
		);

		$wp_customize->add_control( $venta_featurespage,
			array(
				'label'    			=> esc_html__( 'features Page ', 'venta' ) .$i,
				'section'  			=> 'features_section',
				'type'     			=> 'dropdown-pages',
				'priority' 			=> 100,
			)
		);
  }
  
  
  
		?>