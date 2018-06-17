<?php
/**
 * The template for displaying search results pages
 *
 */
?>
<?php get_header();?>
        <div class="banner banner-template">
            <div class="container">
			 
                <div class="title-header">
                    <h1><?php printf( esc_html__( 'Search Results for: %s', 'venta' ), get_search_query() ); ?></h1>
				
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
					<div class="col-sm-8 col-md-9">
						
							 
						<?php if ( have_posts() ) :  
						while ( have_posts() ) : the_post(); ?>

								<?php
								/*
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );

							// End the loop.
							endwhile;
							
						else :
							get_template_part( 'template-parts/content', 'none' );

						endif;
						the_posts_pagination(
							array(
							'prev_text' => __('<i class="fa fa-chevron-left"></i>','venta'),
							'next_text' => __('<i class="fa fa-chevron-right"></i>','venta')
							)
						); ?>
					</div>	
					<div class="col-sm-4 col-md-3">
                  <?php get_sidebar(); ?>
             </div>
				</div>
			</div>		
        </main>
        <!-- FOOTER -->
        <?php get_footer();?>