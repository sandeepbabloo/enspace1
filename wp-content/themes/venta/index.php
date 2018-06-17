<?php 
/*
  
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Venta
 * @since Venta 1.0
 */
 
/**
 * The template for displaying archive pages
 *
 */

 get_header(); ?>
 
	<div class="banner banner-template">
		<div class="container">
			<div class="title-header">
				<h1> <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></h1>
			
			</div>
		</div>
		<div class="clip">
			<div class="bg bg-bg" style="background-image:url('<?php header_image(); ?>')"></div>
		</div>
		<div class="overlay"></div>
	</div>
	<!-- MAIN -->
	<main class="main-blog start-block">
		<div class="container">
			<div class="row">
				<?php get_template_part('main-portion'); ?>	
				<div class="col-sm-4 col-md-3">
                  <?php get_sidebar(); ?>
                </div>
			</div>
		</div>

	</main>
	<!-- FOOTER -->
	<?php get_footer();?>