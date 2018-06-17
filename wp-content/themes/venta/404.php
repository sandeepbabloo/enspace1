<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */
get_header();?> 
<div class="banner banner-template">
	<div class="container">
		<div class="title-header">
			<h1><?php echo esc_html__('Error Page', 'venta' ); ?></h1>
			
		</div>
	</div>
	<?php $wpsm_theme_options = Venta_get_options(); ?>	
	<div class="clip">
		<div class="bg bg-bg" style="background-image:url('<?php header_image(); ?>')"></div>
	</div>
	<div class="overlay"></div>
</div>
<!-- MAIN -->
<main class="main-blog start-block">
	<div class="container">
		<div class="row">
			<h2><?php echo esc_html__('Page Not Found. Please search again', 'venta' ); ?></h2>
			<?php get_search_form()?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-error"><?php echo esc_html__( 'Go To Home Page', 'venta' ); ?></a>
		</div>
	</div>
<?php get_footer(); ?>