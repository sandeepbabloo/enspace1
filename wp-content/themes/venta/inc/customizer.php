<?php
function Venta_customize_register( $wp_customize ) 
{

require get_template_directory() . '/inc/venta-theme-options.php';
require get_template_directory() . '/inc/venta-sanitize.php';
	
/*Added Panel*/
$wp_customize->add_panel( 'Venta_theme_option', array(
    'title' => __( 'Venta Theme Options','venta' ),
    'priority' => 2, // Mixed with top-level-section hierarchy.
) );

   
    require get_template_directory() . '/inc/customizer/customizer-slider.php';
 

/* Customizer Features 
    */
     require get_template_directory() . '/inc/customizer/customizer-features.php';

/* Customizer Footer
    */	 
     require get_template_directory() . '/inc/customizer/customizer-footer.php';
 
	 /* Customizer Blog/Section 
    */
    require get_template_directory() . '/inc/customizer/customizer-blogsection.php';

}
function Venta_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

	
add_action('customize_register','Venta_customize_register');

function venta_css_customizer()
{
	?>
	<style>
		.recent-list a{color: <?php echo  esc_html(get_theme_mod('link_color')); ?>; background-color:;}
		.ftr-list a{value: <?php echo  esc_html(get_theme_mod('email_id')); ?>;}
		
	</style>
	<?php
}
add_action('wp_head','venta_css_customizer');
?>