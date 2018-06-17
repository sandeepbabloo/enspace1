<!--SECTION-->
<?php  
$venta_features_title = get_theme_mod('venta_features_title');
$venta_features_subtitle     = get_theme_mod( 'venta_features_subtitle');
$venta_features_section     = get_theme_mod( 'venta_features_section_hideshow','hide');
if(get_theme_mod('features_img')) {
	$col_class = "4";  
}
else{
	$col_class = "6";
}
 
if($venta_features_section == 'show') {?>
<div class="section section-border">
	<div class="container">
		<?php if($venta_features_subtitle !="") {?>
			<div class="title-block">
				<h2 class="title"><?php echo esc_html(get_theme_mod('venta_features_title')); ?></h2>			
						
			</div>
		<?php } ?>	
		
		<div class="row">
			<?php 
			$features_no        = 3;
			$features_pages1      = array();
			$features_icons1     = array();
			for( $i = 1; $i <= 3; $i++ ) {
				$features_pages1[]    =  get_theme_mod( "venta_features_page_$i", 1 );
				$features_icons1[]    = get_theme_mod( "venta_page_features_icon_$i", '' );
			}
			$features_args1  = array(
				'post_type' => 'page',
				'post__in' => array_map( 'absint', $features_pages1 ),
				'posts_per_page' => absint($features_no),
				'orderby' => 'post__in'
			   
			);			
			$features_query = new  wp_Query( $features_args1 );
			if($features_query->have_posts() ) :
				$count1 = 0; 
				?>			
				<div class="col-md-<?php echo $col_class; ?>">
					<?php while($features_query->have_posts()) :
					$features_query->the_post();
					?>
					<div class="icon-style style-right icon-style-2 icon-style-5">
						<span class="fa <?php echo esc_html($features_icons1[$count1]); ?>"></span>
						<h3 class="middle-title "><?php the_title(); ?></h3>
						<?php  the_content(); ?>
					</div>
					<?php
					$count1 = $count1 + 1;
					
					endwhile;
					wp_reset_postdata();
					?>	
				</div>
			<?php 
			endif; 
			if(get_theme_mod('features_img')) { ?>
				<div class="col-md-4 text-center">
					<img class="img-responsive img-center"  src="<?php echo esc_url( get_theme_mod( 'features_img' ) ); ?>" alt="features image">
				</div>
			<?php
			} 
			$features_no        = 3;
			$features_pages2      = array();
			$features_icons2     = array();
			for( $i = 4; $i <= 6; $i++ ) {
				$features_pages2[]    =  get_theme_mod( "venta_features_page_$i", 1 );
				$features_icons2[]    = get_theme_mod( "venta_page_features_icon_$i", '' );
			}
			$features_args2  = array(
				'post_type' => 'page',
				'post__in' => array_map( 'absint', $features_pages2 ),
				'posts_per_page' => absint($features_no),
				'orderby' => 'post__in'
			   
			);			
			$features_query2 = new  wp_Query( $features_args2 );
			if($features_query2->have_posts() ) :			
				$count2 = 0;
				?>	
				<div class="col-md-<?php echo $col_class; ?>">
					<?php while($features_query2->have_posts()) :
					$features_query2->the_post();
					?>
					<div class="icon-style icon-style-2 icon-style-5">
						<span class="fa <?php echo esc_attr($features_icons2[$count2]); ?>"></span>
						<h3 class="middle-title "><?php the_title(); ?></h3>
						<?php the_content(); ?>
					</div>
					<?php
					$count2 = $count2 + 1;
					
					endwhile;
					wp_reset_postdata();
					?>	 
				</div>
				
			<?php endif; ?>
		</div>
	</div>
</div>
<?php } ?>
<!--SECTION-->