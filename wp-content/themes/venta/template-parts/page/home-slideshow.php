<!-- carosel  -->
 <?php 
$venta_slider_section   = get_theme_mod( 'venta_slider_section_hideshow','hide');
 
 $slider_no = 3;
    $venta_slider_page      = array();
    for( $i = 1; $i <= $slider_no; $i++ ) {
        $venta_slider_page[]         =  get_theme_mod( "venta_slider_page_$i", 1 );
        $venta_slider_btntxtone[]    =  get_theme_mod( "venta_slider_btntxtone_$i", 1 );
        $venta_slider_btnurlone[]    =  get_theme_mod( "venta_slider_btnurlone_$i", 1 );
		$venta_slider_btntxttwo[]    =  get_theme_mod( "venta_slider_btntxttwo_$i", 1 );
        $venta_slider_btnurltwo[]    =  get_theme_mod( "venta_slider_btnurltwo_$i", 1 );
	}
	$slider_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $venta_slider_page ),
        'posts_per_page' => absint($slider_no),
        'orderby' => 'post__in'
	   
    ); 
	
$slider_query = new   wp_Query( $slider_args );
if ($venta_slider_section =='show' && $slider_query->have_posts() ) 
{ 
?>
	<div class="banner full-height-banner" >
		<div class="swiper-container full-height-slider home-full-height-slider"  data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">		
			<div class="swiper-wrapper ">
				<?php
				$count = 0;
				while($slider_query->have_posts()) :
					$slider_query->the_post();
					?>
					<div class="swiper-slide full-height-slide" style="background-image: url('<?php the_post_thumbnail_url('venta-slider-thumbnail', array('class' => 'img-responsive')); ?>')">
						 <div class="overlay"></div>
						 <div class="center">
							 <h1 class="slide-title"><?php the_title(); ?></h1>
							 <div class="slider-sub-title"><?php the_content(); ?></div> 
							  
							 <div class="button-row">
								 <?php if($venta_slider_btntxtone[$count] !=""){?><a class="button-type-4" href="<?php echo esc_url($venta_slider_btnurlone[$count]); ?>"><?php echo esc_html($venta_slider_btntxtone[$count]); ?></a><?php } ?>
								 <?php if($venta_slider_btntxttwo[$count] !=""){?><a class="button-type-5" href="<?php echo esc_url($venta_slider_btnurltwo[$count]); ?>"><?php echo esc_html($venta_slider_btntxttwo[$count]); ?></a><?php } ?>	
							</div>
							 
						 </div>
					</div>
					<?php
					$count = $count + 1;
				endwhile;
				wp_reset_postdata();
				?>	 
			</div>			 
		 
			<div class="pagination pagination-white  pagination-top pagination-swiper-unique-id-0"><span class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"></span><span class="swiper-pagination-switch"></span><span class="swiper-pagination-switch"></span></div>
			<div class="nav-slider-min nav-slider-min-left arrow-type-1 swiper-arrow-left"><i class="fa fa-chevron-left"></i></div>
			<div class="nav-slider-min nav-slider-min-right  arrow-type-1 swiper-arrow-right"><i class="fa fa-chevron-right"></i></div>
		</div>
	</div>
<?php }else{
?>
<div class="banner banner-home-template">
	<div class="container">	
	</div>	
	<div class="overlay"></div>
</div>

<?php

} ?>	