<!-- MAIN -->
<div class="col-sm-8 col-md-9">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<a class="post-img-link" href="<?php the_permalink();?>">
			<?php the_post_thumbnail(); ?>
		</a>

		<div class="post-info">
			
			<div class="post-content">
				<h2 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>

				<div class="post-info-row">
					<div class="post-info-item">
						<i class="fa fa-clock-o"></i>
						<?php echo esc_html__('Posted at', 'venta' ); ?> 
						<?php $date_format =  get_option( 'date_format' ); 
						the_time($date_format); ?>
					</div>
					<?php if (has_tag()) : ?>
					<div class="post-info-item">
					     <i class="fa fa-share-square-o"></i>
						 <?php echo esc_html__('Tags', 'venta' ); ?>  <?php the_tags('&nbsp;'); ?>
					</div>			
					<?php endif; ?>	
					<?php if (has_category()) : ?>
					<div class="post-info-item">
						<i class="fa fa-folder-open-o"></i>
						 <?php echo esc_html__('Category', 'venta' ); ?>  <?php the_category('&nbsp;/&nbsp');?> 
					</div>
					<?php endif; ?>
					<div class="post-info-item">
					   <i class="fa fa-user"></i>
					    <?php echo esc_html__('Posted by', 'venta' ); ?>  <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="">
		               <?php the_author(); ?></a>
					</div>
					<div class="post-info-item">
						<i class="fa fa-comments"></i>
						  <?php echo esc_html(get_comments_number()); ?> 
						  <?php echo esc_html__('Comments', 'venta' ); ?>
					</div> 
				</div>
				
				 <?php the_excerpt();?> 
				<a class="button button-type-3-xs" href="<?php the_permalink();?>"><?php echo esc_html__('Read more', 'venta' ); ?></a>
			</div>
		</div>
	</div>	
		<?php endwhile; else :
				get_template_part( 'template-parts/content', 'none' );
			endif; 
		
		?>	
		<?php the_posts_pagination(
			array(
			'prev_text' => __('<i class="fa fa-chevron-left"></i>','venta'),
			'next_text' => __('<i class="fa fa-chevron-right"></i>','venta')
			)
		); ?>
	
</div>






