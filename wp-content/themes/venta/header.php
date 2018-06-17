<?php 
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 */
 ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset')?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head();?>

</head>
<body <?php body_class(); ?>>
	<!-- LOADER -->
        <div id="loader">
            <div class="loader">
                 
            </div>
        </div>
		<div id="wrapper">
			<div id="header">
				<!-- HEADER -->
				<header class="header" >
					<div class="container">
						<div class="nav-panel clearfix">							
							
							<?php if (has_custom_logo()) : ?>
							<?php the_custom_logo(); ?>
							<?php else : ?>
							
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link">
							<div class="custom-logo"><?php bloginfo( 'title' ); ?></div>
							</a>
							<?php endif; ?>
							
							<div class="info-panel">							
								 <a class="open-menu" href="#"><i class="fa fa-bars"></i></a>								 
							</div>
							
							<nav class="nav">
								<?php wp_nav_menu( array
										('container'        => 'ul', 
										'theme_location'    => 'primary', 
										'menu_class'        => 'menu-top', 
										'items_wrap'        => '<ul>%3$s</ul>',
										'fallback_cb'       => 'venta_wp_bootstrap_navwalker::fallback',
										'walker'            => new venta_wp_bootstrap_navwalker()
										)); 
									  ?> 
							   <a class="close-menu" href="#"><i class="fa fa-times"></i></a>		  
							</nav>
						
						</div>
					</div>
				</header>
			</div><!-- End of header-->
		</div>