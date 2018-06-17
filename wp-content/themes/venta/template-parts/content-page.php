<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Venta
 */
 ?><a class="post-img-link" href="<?php the_permalink();?>">
			<?php the_post_thumbnail(); ?>
		</a>
		<?php
 the_content();
 ?>
		 
	 