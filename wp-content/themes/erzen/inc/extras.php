<?php
/**
 * Functions hooked to core hooks.
 *
 */

if ( ! function_exists( 'erzen_customize_search_form' ) ) :

	/** Customize search form.
	 **/
	function erzen_customize_search_form() {

		$form = '<form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
			<label>
			<span class="screen-reader-text">' . esc_html( '', 'label', 'erzen' ) . '</span>
			<input type="search" class="search-field" placeholder="' . esc_attr_x( 'Type to search here...', 'placeholder', 'erzen' ) . '" value="' . get_search_query() . '" name="s" title="' . esc_attr_x( 'Search for:', 'label', 'erzen' ) . '" />
			</label>
			<input type="submit" class="search-submit" value="&#xf002;" /></form>';

		return $form;

	}
	
	endif;

add_filter( 'get_search_form', 'erzen_customize_search_form', 15 );

$erzen_page_home = esc_html(__( '2 Home Pages', 'erzen' ));
$erzen_page_home_details = esc_html(__('Theme supports 2 types of Home pages with different elements styles ', 'erzen' ));
$erzen_page_layout = esc_html(__( 'Page Layout', 'erzen' ));
$erzen_page_layout_details = esc_html(__('Theme offers many different page layouts so you can quickly and easily create your pages with no hassle!', 'erzen' ));
$erzen_unlimited_color = esc_html(__( 'Unlimited Color Option', 'erzen' ));
$erzen_unlimited_color_details = esc_html(__( 'Theme support Unlimited Color Option that mean you can design your website with any color.', 'erzen' ));
$erzen_custom_contact = esc_html(__( 'Contact Form 7', 'erzen' ));
$erzen_custom_contact_details = esc_html(__( 'Erzen Pro support contact form 7 that mean you can easily add your contact form with theme design ', 'erzen' ));
$erzen_portfolio = esc_html(__( 'Multi Portfolio', 'erzen' ));
$erzen_portfolio_details = esc_html(__( 'Theme have a unlimited customization options in portfolio. You can use 2, 3, or 4 Columns with masonry layouts!', 'erzen' ));
$erzen_typography = esc_html(__( 'Typography', 'erzen' ));
$erzen_typography_details = esc_html(__('Theme loves typography, you can choose from over 500+ Google Fonts and Standard Fonts to customize your site!', 'erzen' ));
$erzen_slider = esc_html(__( 'Touch Sliders', 'erzen' ));
$erzen_slider_details = esc_html(__('Theme includes Flex and Touch sliders . You can add unlimited slides on your home page.', 'erzen' ));
$erzen_pricing = esc_html(__( 'Pricing Table', 'erzen' ));
$erzen_pricing_details = esc_html(__('You can add pricing table in your website easily. This theme support pricing table builder ', 'erzen' ));
$erzen_retina_ready = esc_html(__( 'Retina Ready', 'erzen' ));
$erzen_retina_ready_details = esc_html(__( 'Theme is Retina Ready. So, Everything looks amazingly sharp and crisp on high resolution retina displays of all sizes!', 'erzen' ));
$erzen_icons = esc_html(__( 'Icons', 'erzen' ));
$erzen_icons_details = esc_html(__( ' Choose from over 2500 icons are fully integrated into the theme. Use them anywhere in your site with select your own size and color.', 'erzen' ));
$erzen_support = esc_html(__( 'Excellent Support', 'erzen' ));
$erzen_support_details = esc_html(__( 'We truly care about our customers and themes performance. We assure you that you will get the best after sale support like never before!', 'erzen' ));
$erzen_responsive_layout = esc_html(__( 'Responsive Layout', 'erzen' ));
$erzen_responsive_layout_details = esc_html( __('Theme is fully responsive and can adapt to any screen size. Resize your browser window to view it!', 'erzen' ));
$erzen_testimonials = esc_html( __( 'Testimonials', 'erzen' ));
$erzen_testimonials_details = esc_html( __( 'Display your clients\' glowing comments about your business on your homepage. Showing a specific number of testimonials with use of testimonial widget. ', 'erzen' ));
$erzen_social_media = esc_html( __( 'Social Media', 'erzen' ));
$erzen_social_media_details = esc_html( __( 'Want your users to stay in touch? No problem, Theme has Social Media icons all throughout the theme!', 'erzen' ));
$erzen_google_map = esc_html( __( 'Google Map', 'erzen' ));
$erzen_google_map_details = esc_html( __('Theme includes Goole Map widget. Find a place on the map and get directions. Or get info like business hours and menus, and see Street View imagery.', 'erzen' ));
$erzen_customization = esc_html( __( 'Customization', 'erzen' ));
$erzen_customization_details = esc_html( __('With advanced theme options, page options & extensive docs, its never been easier to customize a theme!', 'erzen' ));
$erzen_demo_content = esc_html( __( 'Demo content', 'erzen' ));
$erzen_demo_content_details = esc_html( __('Theme includes single click demo content. You can quickly setup the site like our demo and get started easily!', 'erzen' ));
$erzen_improvement = esc_html( __( 'Improvement', 'erzen' ));
$erzen_improvement_details = esc_html( __('We love our theme and customers. We are committed to improve and add new features to Theme!', 'erzen' ));

$erzen_view_demo = esc_html( __( 'View Demo', 'erzen'));
$erzen_upgrade_to_pro = esc_html( __( 'Upgrade To Pro', 'erzen' ));

$erzen_why_upgrade = <<< FEATURES

<div class="one-third column clear">
	<div class="icon-wrap"><i class="fa  fa-5x fa-cog"></i></div>
	<h3>$erzen_page_home</h3>
	<p>$erzen_page_home_details</p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-th-large"></i></div>
	<h3>$erzen_page_layout</h3>
	<p>$erzen_page_layout_details</p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-th"></i></div>
	<h3>$erzen_unlimited_color</h3>
	<p>$erzen_unlimited_color_details</p>
</div>
<div class="one-third column clear">
	<div class="icon-wrap"><i class="fa  fa-5x fa-envelope-open"></i></div>
	<h3>$erzen_custom_contact</h3>
	<p>$erzen_custom_contact_details</p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-list-alt"></i></div>
	<h3>$erzen_portfolio</h3>
	<p>$erzen_portfolio_details</p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-font"></i></div>
	<h3>$erzen_typography</h3>
	<p>$erzen_typography_details</p>
</div>
<div class="one-third column clear">
	<div class="icon-wrap"><i class="fa  fa-5x fa-slideshare"></i></div>
	<h3>$erzen_slider</h3>
	<p>$erzen_slider_details</p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-table"></i></div>
	<h3>$erzen_pricing</h3>
	<p>$erzen_pricing_details</p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-magic"></i></div>
	<h3>$erzen_retina_ready</h3>
	<p>$erzen_retina_ready_details</p>
</div>
<div class="one-third column clear">
	<div class="icon-wrap"><i class="fa  fa-5x fa-dashboard"></i></div>
	<h3>$erzen_icons</h3>
	<p>$erzen_icons_details</p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-magic"></i></div>
	<h3>$erzen_support</h3>
	<p>$erzen_support_details</p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-desktop"></i></div>
	<h3>$erzen_responsive_layout</h3>
	<p>$erzen_responsive_layout_details</p>
</div>
<div class="one-third column clear">
	<div class="icon-wrap"><i class="fa  fa-5x fa-rocket"></i></div>
	<h3>$erzen_testimonials</h3>
	<p>$erzen_testimonials_details</p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-skype"></i></div>
	<h3>$erzen_social_media</h3>
	<p>$erzen_social_media_details</p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-map-marker"></i></div>
	<h3>$erzen_google_map</h3>
	<p>$erzen_google_map_details</p>
</div>
<div class="one-third column clear">
	<div class="icon-wrap"><i class="fa  fa-5x fa-edit"></i></div>
	<h3>$erzen_customization</h3>
	<p>$erzen_customization_details</p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-check"></i></div>
	<h3>$erzen_demo_content</h3>
	<p>$erzen_demo_content_details</p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-signal"></i></div>
	<h3>$erzen_improvement</h3>
	<p>$erzen_improvement_details</p>
</div>
FEATURES;

function erzen_theme_page() {
	$title = esc_html(__('Erzen Theme','erzen'));
	add_theme_page( 
		esc_html(__( 'Upgrade To Erzen Pro','erzen')),
		$title.'<i class="fa fa-bullhorn theme-icon"></i>', 
		'edit_theme_options',
		'erzen_upgrade',
		'erzen_display_upgrade'
	);
}

add_action('admin_menu','erzen_theme_page');


function erzen_display_upgrade() {
  $theme_data = wp_get_theme('erzen'); 
    
    // Check for current viewing tab
    $tab = null;
    if ( isset( $_GET['tab'] ) ) {
        $tab = $_GET['tab'];
    } else {
        $tab = null;
    } 
     
    $pro_theme_url = 'https://wpshopmart.com/wordpress-themes/erzen-pro/';
    $pro_theme_demo = 'http://demo.wpshopmart.com/erzen-pro';
    $doc_url  = 'https://wpshopmart.com/docs/themes/erzen/index.html';
    $support_url = 'https://wordpress.org/support/theme/erzen';   
    
    $current_action_link =  admin_url( 'themes.php?page=erzen_upgrade&tab=pro_features' ); ?>
    <style>
	.about-wrap .about-text {
		margin: 0em 0px 0em 0  !important;;
		margin-bottom: 25px !important;
		min-height: 60px;
		color: #555d66;
	}
	</style>
	<div class="erzen-wrapper about-wrap">
        <h1><?php printf(esc_html__('Welcome to %1$s - Version %2$s', 'erzen'), $theme_data->Name ,$theme_data->Version ); ?></h1><?php
       	printf( __('<div class="about-text"> Erzen is the perfect theme for your Web project. Very Lightweight and easily customizable, it fits for any type of website such a blog, corporate, portfolio, business finance, startup website and WooCommerce storefront with a clean and professional design. Erzen is SEO Friendly, Load fast, Responsive, WPML, Retina ready, RTL & translation ready. Support Front page with service section, Blog Section, about Section & slider section. You can edit the settings on mobile And in tablet so your site looks great on every media device. Work with the most popular page builders as Visual Composer,Elementor, SiteOrigin, Beaver Builder, Divi, etc... Check the Erzen demo : http://demo.wpshopmart.com/erzen-lite/</div>', 'erzen') ); ?>
       <p class="upgrade-btn"><a class="upgrade" href="<?php echo esc_url($pro_theme_url); ?>" target="_blank"><?php printf( __( 'Upgrade To %1s Pro - $55', 'erzen'), $theme_data->Name ); ?></a></p>

	   <h2 class="nav-tab-wrapper">
	        <a href="?page=erzen_upgrade" class="nav-tab<?php echo is_null($tab) ? ' nav-tab-active' : null; ?>"><?php echo $theme_data->Name; ?></a>
<a href="?page=erzen_upgrade&tab=pro_features" class="nav-tab<?php echo $tab == 'pro_features' ? ' nav-tab-active' : null; ?>"><?php esc_html_e( 'PRO Features', 'erzen' );  ?></a>
            <a href="?page=erzen_upgrade&tab=free_vs_pro" class="nav-tab<?php echo $tab == 'free_vs_pro' ? ' nav-tab-active' : null; ?>"><?php esc_html_e( 'Free VS PRO', 'erzen' ); ?></a>
	        <?php do_action( 'erzen_admin_more_tabs' ); ?>
	    </h2>      

        <?php if ( is_null( $tab ) ) { ?>
            <div class="theme_info info-tab-content">
                <div class="theme_info_column clearfix">
                    <div class="theme_info_left">
                        <div class="theme_link">
                            <h3><?php esc_html_e( 'Theme Customizer', 'erzen' ); ?></h3>
                            <p class="about"><?php printf(esc_html__('%s supports the Theme Customizer for all theme settings. Click "Customize" to start customize your site.', 'erzen'), $theme_data->Name); ?></p>
                            <p>
                                <a href="<?php echo admin_url('customize.php'); ?>" class="button button-primary"><?php esc_html_e('Start Customize', 'erzen'); ?></a>
                            </p>
                        </div>
                        <div class="theme_link">
                            <h3><?php esc_html_e( 'Theme Documentation', 'erzen' ); ?></h3>
                            <p class="about"><?php printf(esc_html__('Need any help to setup and configure %s? Please have a look at our documentations instructions.', 'erzen'), $theme_data->Name); ?></p>
                            <p>
                                <a href="<?php echo esc_url($doc_url); ?>" target="_blank" class="button button-secondary"><?php esc_html_e(' Documentation', 'erzen'); ?></a>
                            </p>
                            <?php do_action( 'erzen_dashboard_theme_links' ); ?>
                        </div>  
                        <div class="theme_link">
                            <h3><?php esc_html_e( 'Having Trouble, Need Support?', 'erzen' ); ?></h3>
                            <p class="about"><?php printf(esc_html__('Support for %s WordPress theme is conducted through Genex free support ticket system.', 'erzen'), $theme_data->Name); ?></p>
                            <p>  
                                <a href="<?php echo esc_url($support_url); ?>" target="_blank" class="button button-secondary"><?php echo sprintf( esc_html('Create a support ticket', 'erzen'), $theme_data->Name); ?></a>
                            </p>
                        </div> 
                       
                    </div>  
                    <div class="theme_info_right">
                        <?php echo sprintf ( '<img src="'. get_template_directory_uri() .'/screenshot.jpg" alt="%1$s" />',__('Theme screenshot','erzen') ); ?>
                    </div>
                </div> 
            </div>
        <?php } ?>
	
        <?php if ( $tab == 'pro_features' ) { ?>
            <div class="pro-features-tab info-tab-content"><?php
			    global $erzen_why_upgrade; ?>
				<div class="wrap clearfix">
				    <?php echo $erzen_why_upgrade; ?>
				</div>
			</div><?php   
		} ?>  

       <!-- Free VS PRO tab -->
        <?php if ( $tab == 'free_vs_pro' ) { ?>
            <div class="free-vs-pro-tab info-tab-content">
	            <div id="free_pro">
	                <table class="free-pro-table">
		                <thead>
			                <tr>
			                    <th></th>  
			                    <th><?php echo esc_html($theme_data->Name); ?> Lite</th>
			                    <th><?php echo esc_html($theme_data->Name); ?> PRO</th>
			                </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <td><h3><?php _e('Flex Slider', 'erzen'); ?></h3></td>
		                        <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                        <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    <tr>
		                        <td><h3><?php _e('Support', 'erzen'); ?></h3></td>
		                        <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                        <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    <tr>
		                        <td><h3><?php _e('Responsive Design', 'erzen'); ?></h3></td>
		                        <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                        <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    <tr>
		                        <td><h3><?php _e('Custom Logo Option', 'erzen'); ?></h3></td>
		                        <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                        <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    <tr>
		                         <td><h3><?php _e('Social Links', 'erzen'); ?></h3></td>
		                         <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                         <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    <tr>
		                    	 <td><h3><?php _e('Unlimited color option', 'erzen'); ?></h3></td>
		                    	 <td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	 <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    <tr>
		                    	 <td><h3><?php _e('2 Home page', 'erzen'); ?></h3></td>
		                    	 <td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	 <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                     <tr>
		                    	 <td><h3><?php _e('Pricing Table Support', 'erzen');?></h3></td>
		                    	 <td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	 <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                     <tr>
		                    	 <td><h3><?php _e('Page Templates', 'erzen');?></h3></td>
		                    	 <td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	 <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    <tr>
		                    	<td><h3><?php _e('Portfolio Pages', 'erzen');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    <tr>
		                    	<td><h3><?php _e('Team With Detail Page', 'erzen');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    <tr>
		                    	<td><h3><?php _e('Redux Theme Option Panel', 'erzen');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr> 
							<tr>
		                    	<td><h3><?php _e('Boxed Layout', 'erzen');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
							<tr>
		                    	<td><h3><?php _e('Sticky Header Option', 'erzen');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
							<tr>
		                    	<td><h3><?php _e('Contact Form 7', 'erzen');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
							<tr>
		                    	<td><h3><?php _e('15+ Shortcodes', 'erzen');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
							<tr>
		                    	<td><h3><?php _e('Google Fonts', 'erzen');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                     <tr>
		                    	<td><h3><?php _e('Multiple Service Layouts', 'erzen');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                     <tr>
		                    	<td><h3><?php _e('Multiple Blog Layouts', 'erzen');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                     <tr>
		                    	<td><h3><?php _e('Page Animation', 'erzen');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                     <tr>
		                    	<td><h3><?php _e('Premium Priority Support', 'erzen');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    
		                    <tr class="ti-about-page-text-center">
		                        <td><a href="<?php echo esc_url($pro_theme_demo); ?>" target="_blank" class="button button-primary button-hero"><?php printf( __( '%1s Pro Demo', 'erzen'), $theme_data->Name ); ?></a></td>
		                    	<td colspan="2"><a href="<?php echo esc_url($pro_theme_url); ?>" target="_blank" class="button button-primary button-hero"><?php printf( __( 'Upgrade To %1s Pro', 'erzen'), $theme_data->Name ); ?></a></td>
		                    </tr>
		                </tbody>
	                </table>			    
				</div>
			</div><?php 
		} ?>

    </div><?php
} ?>