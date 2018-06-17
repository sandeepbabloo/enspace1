<?php  
$venta_blog_title =  get_theme_mod('venta_blog_title');  
$venta_blog_subtitle =  get_theme_mod('venta_blog_subtitle');  
$venta_blog_section_hideshow     = get_theme_mod( 'venta_blog_section_hideshow','hide');

if($venta_blog_section_hideshow == "show") {?>
<div class="section section-border">
	<div class="container a-info-container">
		<?php if($venta_blog_subtitle !="") {?>
			<div class="title-block">
				<h2 class="title"> <?php echo esc_html(get_theme_mod('venta_blog_title')); ?></h2>			
							
			</div>
		<?php } ?>	
		<div class="row container-masonry">
			<?php 
			if ( have_posts()) : 			
			//$posts_count =wp_count_posts()->publish;
			$args = array( 'post_type' => 'post','posts_per_page' => 3 ,'ignore_sticky_posts' => 1);		
			$post_type_data = new WP_Query( $args );
			while($post_type_data->have_posts()):
			$post_type_data->the_post(); ?>	
			<div class="col-sm-4 clone item-masonry">
				<div class="latest-post">
					<a href="<?php the_permalink(); ?>" class="latest-post-link">
						<?php $img = array('class' => 'img-responsive');
						if(has_post_thumbnail()): 
						the_post_thumbnail('venta-photo-blog',$img);
						endif; ?>
						<div class="post-layer">
							<span class="post-l-ico">
								<i class="fa fa-bars"></i>
							</span>
						</div>
						</a>
						<h3 class="l-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt(); ?>
						
						<div class="l-post-info">
							<a href="#"><?php the_date();?></a>| <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="">
		               <?php the_author(); ?></a>					
						</div>
				</div>
			</div>
			<?php endwhile;?>
	<?php endif;?>
		</div>
		
	</div>
</div>
<?php } ?>