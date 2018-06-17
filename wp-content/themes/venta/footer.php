<?php 
/**
 * The template for displaying the footer
 *
 */
$venta_footer_section = get_theme_mod('venta_footer_section_hideshow','show');
$venta_footer_title = get_theme_mod('venta_footer_title','default');
if ($venta_footer_section =='show') { 
?>
 
<div id="main_footer">
	<!-- FOOTER -->
        <footer class="footer">
		 <div class="container">
                <div class="row">
                   <?php 
					dynamic_sidebar( 'wpsm_footer_sidebar' );
					?>
                </div>
            </div>
			
			 
			<div class="copy-row">
                <div class="container text-center">
                    <div class="copy-info">
						<?php if( $venta_footer_title != "default"): ?>
							<span><?php echo wp_kses_post( html_entity_decode(get_theme_mod('venta_footer_title'))); ?></span>
						<?php else : 
								printf(  __('<span>Powered by <a href="%1$s" target="_blank">WordPress</a>', 'venta'), esc_url( 'http://wordpress.org/') );
								printf( '' );
								printf( __( ' Theme: venta by <a href="%1$s" target="_blank" rel="designer">Ventasoftware</a></span>', 'venta' ), esc_url('https://ventasoftware.com') );
					    endif;  ?>
					
                    </div>
                     
                </div>
            </div>
			 
        </footer>
        
        <?php wp_footer(); ?>
 
</div>
<?php } ?>
   </body>

</html>