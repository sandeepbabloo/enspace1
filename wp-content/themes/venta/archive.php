<?php
/**
 * The template for displaying archive pages
 *
 */

 get_header();?>
	<div class="banner banner-template">
		<div class="container">
			<div class="title-header">
				<h1><?php the_archive_title(); ?></h1>
				
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
				<?php get_template_part('main-portion'); ?>	
				<div class="col-sm-4 col-md-3">
                  <?php get_sidebar(); ?>
                </div>
			</div>
		</div>

	</main>
	<!-- FOOTER -->
	<?php get_footer();?>