<?php
/**
 * Venta functions and definitions
 **/
 
 function venta_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'venta_content_width', 980 );
}
add_action( 'after_setup_theme', 'venta_content_width', 0 );

require(dirname(__FILE__).'/inc/customizer.php');
require get_template_directory(). '/inc/extras.php';


add_theme_support('post-thumbnails');

/**
 * Theme Setup
 */
if( ! function_exists( 'venta_theme_setup' ) ) {

	function venta_theme_setup() {
		
	    load_theme_textdomain( 'venta', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		
		// Add default title support
		add_theme_support( 'title-tag' ); 		

		// Add default logo support		
        add_theme_support( 'custom-logo' );	

        // To use additional css
 	    add_editor_style( 'css/editor-style.css' );		

		// Custom Backgrounds
		add_theme_support( 'custom-background', array(
			'default-color' => 'ffffff',
		) );
	    
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size( 847, 476, true );
		
		add_image_size('venta-photo-home', 360, 239, true);
		add_image_size('venta-photo-single', 847, 460, true);
		add_image_size('venta-photo-blog', 847, 475, true);
		add_image_size('venta-photo-testimonial', 80, 80, true);
		add_image_size('venta-about-blog', 555, 420, true);
 
        if ( is_singular() && comments_open() ) {
			wp_enqueue_script( 'comment-reply' );
		}

		// add excerpt support for pages
		add_post_type_support( 'page', 'excerpt' );
		
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
	
		$defaults = array(
			'default-image'          => get_template_directory_uri() .'/img/header.jpg',
			'width'                  => 2300,
			'height'                 => 888,
			'uploads'                => true,
			);
		add_theme_support( 'custom-header', $defaults );
	   
		//About Theme		
		if ( is_admin() ) {
			require( get_template_directory() . '/inc/welcome-screen.php');
		}			

	}	
}
add_action( 'after_setup_theme', 'venta_theme_setup' );

/**
 * Load Upsell Button In Customizer
 * 2016 &copy; [Justin Tadlock](http://justintadlock.com).
 */

require_once( trailingslashit( get_template_directory() ) . '/inc/upgrade/class-customize.php' ); 




/**
 * Register widgetized area and update sidebar with default widgets
 */
add_action('widgets_init','Venta_widgets_init');
function Venta_widgets_init()
{
	register_sidebar( array(
		'name' =>'Sidebar',
		'id' => 'sidebar-1',
		'description' => __( 'The primary widget area', 'venta' ),
		'before_widget' => '<div class="widget ">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="middle-title">',
		'after_title' => '</h3>'
		) );
	
	register_sidebar(array(
	'name' => 'Footer Sidebar',
	'id'   => 'wpsm_footer_sidebar',
	'before_widget' => '<div class="col-sm-4">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>' 
	));
	
	
}
if( ! function_exists( 'venta_enqueue_styles' ) ) {
function venta_enqueue_styles()
	{
		wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css');
		wp_enqueue_style('venta-font-Montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700', array(),null);
		wp_enqueue_style('venta-font-Raleway', 'https://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,300,200,100', array(),null);
		wp_enqueue_style('venta-font-pt-serif', 'https://fonts.googleapis.com/css?family=PT+Serif:400italic', array(),null);		     
		wp_enqueue_style( 'font-awesome',  get_template_directory_uri(). '/css/font-awesome.min.css'); 
		wp_enqueue_style( 'venta-style', get_stylesheet_uri() );
	}	
	add_action( 'wp_enqueue_scripts', 'venta_enqueue_styles' );
}

if( ! function_exists( 'venta_enqueue_scripts' ) ) {
	function venta_enqueue_scripts() {	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'jquery-idangerous-js', get_template_directory_uri().'/js/idangerous.swiper.js', array(), '', true );
	wp_enqueue_script( 'venta-main-js', get_template_directory_uri(). '/js/main.js', array(), '', true);
	}
	add_action( 'wp_enqueue_scripts', 'venta_enqueue_scripts' );
}


/**
 * admin  JS scripts
 */
function venta_admin_enqueue_scripts( $hook ) { 
	wp_enqueue_style( 
		'font-awesome', 
		get_template_directory_uri() . '/css/font-awesome.min.css', 
		array(), 
		'4.7.0', 
		'all' 
	);
	wp_enqueue_style( 
		'venta-admin', 
		get_template_directory_uri() . '/css/admin.css', 
		array(), 
		'1.0.0', 
		'all' 
	);
 
}
add_action( 'admin_enqueue_scripts', 'venta_admin_enqueue_scripts' );


require_once get_template_directory() . '/wp_bootstrap_navwalker.php';



register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'venta' ),
	) );

function Venta_default_settings()
{

	$wpsm_theme_options=array(
				
	);
	return apply_filters( 'Venta_options', $wpsm_theme_options );
}
 
function Venta_get_options() 
{
    return wp_parse_args( 
    get_option( 'Venta_options', array()), 
    Venta_default_settings() 
    );    
}

/*
* TGM plugin activation register hook 
*/

require_once get_template_directory() . '/extras/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/extras/theme-default-setup.php';	

?>