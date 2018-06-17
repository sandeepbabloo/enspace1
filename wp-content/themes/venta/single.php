<?php
/**
 * The template for displaying all single posts and attachments
 *
 */
?>

<?php get_header();?>
<?php $wpsm_theme_options = Venta_get_options(); ?>		
    <!-- MAIN -->
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
				    <div class="col-sm-8 col-md-9">
						<article class="single-article">
			                 <?php if (have_posts()) : ?>
								<?php while ( have_posts() ) : the_post(); ?>  			
									<a class="post-img-link" href="<?php the_permalink();?>">
										<?php the_post_thumbnail('venta-photo-single'); ?>
									</a>		
									<h1 class="single-title"><?php the_title();?></h1>
									<div class="post-info-row">
										<div class="post-info-item">
											<i class="fa fa-clock-o"></i>
											 <?php echo esc_html__('Posted at', 'venta' ); ?><?php the_time();?>
										</div>
										<?php if (has_tag()) : ?>
										<div class="post-info-item">
											<i class="fa fa-share-square-o"></i>
											 <?php echo esc_html__('Tags ', 'venta' ); ?><?php the_tags('&nbsp;'); ?>
										</div>			
										<?php endif; ?>	
										<?php if (has_category()) : ?>
										<div class="post-info-item">
											<i class="fa fa-folder-open-o"></i>
											 <?php echo esc_html__('Category ', 'venta' ); ?><?php the_category('&nbsp;/&nbsp');?> 
										</div>
										<?php endif; ?>
										<div class="post-info-item">
										   <i class="fa fa-user"></i>
											<?php echo esc_html__('Posted by', 'venta' ); ?><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="">
										   <?php the_author(); ?></a>
										</div>
										<div class="post-info-item">
											<i class="fa fa-comments"></i>
											  <?php echo esc_html(get_comments_number()); ?> <?php echo esc_html__('Comments', 'venta' ); ?>
										</div> 
									</div>
								
									<?php the_content();?>
									<div class="article-info">  </div>
									<?php
										wp_link_pages( array(
											'before' => '<div class="page-links">' . esc_html__( 'Pages: ', 'venta' ),
											'after'  => '</div>',
										) );
									?>
								<?php endwhile; ?>
							<?php endif; ?>
						
                        </article>
                        <?php comments_template();?>
                    </div>
                    <div class="col-sm-4 col-md-3">						
                           <?php get_sidebar(); ?>                       
					</div>	
                </div>
            </div>

        </main>
       		
        <!-- FOOTER -->
        <?php get_footer();?>