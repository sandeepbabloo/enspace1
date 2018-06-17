<?php
/*
 Template Name: Full Width 
 */
get_header(); 
$wpsm_theme_options = Venta_get_options(); ?>	
<div class="banner banner-template">
	<div class="container">
		<div class="title-header">
			<h1><?php the_title(); ?> </h1>
			
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
			<div class="col-md-12">
				<div class="page-post">
					<?php if ( have_posts()) : while ( have_posts()) : the_post();       
					// Include the page content template.
					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

					?>
						<?php endwhile; else:?>
						<p><?php echo esc_html__('No Post Found', 'venta' ); ?></p>
						<?php endif; 
						if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
							?>						
				</div>
				<?php the_posts_pagination(
					array(
					'prev_text' => __('<i class="fa fa-chevron-left"></i>','venta'),
					'next_text' => __('<i class="fa fa-chevron-right"></i>','venta')
					)
				); ?>
			</div>
			 
			 
		</div>
		

	</div>
</main>	
	
	<?php get_footer(); ?>	