<?php
/**
 * Functions hooked to core hooks.
 *
 */

if ( ! function_exists( 'venta_customize_search_form' ) ) :

	function venta_customize_search_form() {

		$form = '<form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
			<div class="search-box">
				<h3 class="sidebar-search-title">' . esc_html( 'Search', 'label', 'venta' ) . '</h3>
				<div class="input-group stylish-input-group">
					  <input type="text" class="form-control"  placeholder="' . esc_attr( 'Search here...', 'venta' ) . '" value="' . get_search_query() . '" name="s" title="' . esc_attr( '', 'venta' ) . '"
					  />
					    <span class="input-group-addon">
					         <button type="submit">
					            <span class="fa fa-search"></span>
					          </button>  
					    </span>
				 </div>
			 </div>
		 </form>';

		return $form;

	}
	
	endif;

add_filter( 'get_search_form', 'venta_customize_search_form', 15 );




function venta_theme_page() {
	$title = esc_html(__('Venta Theme','venta'));
	add_theme_page( 
		esc_html(__( 'Venta Theme Info','venta')),
		$title.'', 
		'edit_theme_options',
		'venta-info',
		'venta_display_upgrade'
	);
}

add_action('admin_menu','venta_theme_page');


function venta_display_upgrade() {
  $theme_data = wp_get_theme('venta'); 
    
    // Check for current viewing tab
    $tab = null;
    if ( isset( $_GET['tab'] ) ) {
        $tab = $_GET['tab'];
    } else {
        $tab = null;
    } 
     
    $doc_url  = 'http://ventasoftware.com/doc/venta-doc/index.html';
    $support_url = 'https://wordpress.org/support/theme/venta';   
     ?>
    <style>
	.about-wrap .about-text {
		margin: 0em 0px 0em 0  !important;;
		margin-bottom: 25px !important;
		min-height: 60px;
		color: #555d66;
	}
	</style>
	<div class="venta-wrapper about-wrap">
        <h1><?php printf(esc_html__('Welcome to %1$s - Version %2$s', 'venta'), esc_html($theme_data->Name) ,esc_html($theme_data->Version) ); ?></h1><?php
       	printf( __('<div class="about-text"> Build up an amazing creative website with help of venta theme. Venta is an attractive, modern, easy to use, responsive WordPress theme with retina & stunning flexibility. Venta is perfect for your corporate business, startups, agencies, small business, professionals,  design firm, freelancer, development company, personal, photography websites portfolio, blog, news, magazine,  real estate, lawyer, architecture and cryptocurrency websites. Venta is SEO Compatible, fast load, WPML, Retina ready, RTL & translation ready. Compatible and tested with the most popular page builders as Visual Composer, Beaver Builder, Elementor, Divi, SiteOrigin etc. </div>', 'venta') ); ?>
      

	   <h2 class="nav-tab-wrapper">
	        <a href="?page=venta-info" class="nav-tab<?php echo is_null($tab) ? ' nav-tab-active' : null; ?>"><?php echo esc_html($theme_data->Name); ?></a>

	        <?php do_action( 'venta_admin_more_tabs' ); ?>
	    </h2>      

        <?php if ( is_null( $tab ) ) { ?>
            <div class="theme_info info-tab-content">
                <div class="theme_info_column clearfix">
                    <div class="theme_info_left">
                        <div class="theme_link">
                            <h3><?php esc_html_e( 'Theme Customizer', 'venta' ); ?></h3>
                            <p class="about"><?php printf(esc_html__('%s supports the Theme Customizer for all theme settings. Click "Customize" to start customize your site.', 'venta'), esc_html($theme_data->Name)); ?></p>
                            <p>
                                <a href="<?php echo admin_url('customize.php'); ?>" class="button button-primary"><?php esc_html_e('Start Customize', 'venta'); ?></a>
                            </p>
                        </div>
                        <div class="theme_link">
                            <h3><?php esc_html_e( 'Theme Documentation', 'venta' ); ?></h3>
                            <p class="about"><?php printf(esc_html__('Need any help to setup and configure %s? Please have a look at our documentations instructions.', 'venta'), esc_html($theme_data->Name)); ?></p>
                            <p>
                                <a href="<?php echo esc_url($doc_url); ?>" target="_blank" class="button button-secondary"><?php esc_html_e(' Documentation', 'venta'); ?></a>
                            </p>
                            <?php do_action( 'venta_dashboard_theme_links' ); ?>
                        </div>  
                        <div class="theme_link">
                            <h3><?php esc_html_e( 'Having Trouble, Need Support?', 'venta' ); ?></h3>
                            <p class="about"><?php printf(esc_html__('Support for %s WordPress theme is conducted through Genex free support ticket system.', 'venta'), esc_html($theme_data->Name)); ?></p>
                            <p>  
                                <a href="<?php echo esc_url($support_url); ?>" target="_blank" class="button button-secondary"><?php echo sprintf( esc_html('Create a support ticket', 'venta'), esc_html($theme_data->Name)); ?></a>
                            </p>
                        </div> 
                       
                    </div>  
                    <div class="theme_info_right">
                        <?php echo sprintf ( '<img src="'. get_template_directory_uri() .'/screenshot.jpg" alt="%1$s" />',__('Theme screenshot','venta') ); ?>
                    </div>
                </div> 
            </div>
        <?php } ?>     

    </div><?php
} ?>