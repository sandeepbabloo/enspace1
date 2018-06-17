<?php 
// To display The Content section on front page
?>

<?php if(have_posts()) : 
	 while(have_posts()) : the_post();  
	 if(get_the_content()!= "")
	 {?>
	<div class="section section-border">
		<div class="container">
			<?php the_content(); ?> 
		</div> 
	</div>	
	 <?php }	
endwhile;
endif; ?>	

