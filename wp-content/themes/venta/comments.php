<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Venta
 * @since Venta  
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */

?>
<?php
if ( !function_exists( 'venta_thinkup_input_comments' ) ) :
function venta_thinkup_input_comments() {
	$args = array( 
		'callback' => 'venta_thinkup_input_commenttemplate', 
	);
	wp_list_comments( $args );
}
endif;

if ( !function_exists( 'venta_thinkup_input_commenttemplate' ) ) :
function venta_thinkup_input_commenttemplate( $comment, $args, $depth ) {

	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php esc_html__( 'Pingback:', 'venta'); ?> <?php comment_author_link(); ?><?php edit_comment_link(esc_html__( 'Edit', 'venta' ), ' ' ); ?></p>
	<?php
			break;
		default :
	?>
<div class="comment" >
   <?php echo get_avatar( $comment, 123 ); ?>
   <h4 class="user-name">
      <?php printf( '%s', sprintf( '%s', get_comment_author_link() ) ); ?>
   </h4>
   <div class="comment-info"> <?php echo esc_html__('Posted at', 'venta' ); ?> <time datetime="<?php esc_attr( comment_time( 'c' ) ); ?>">
	 <?php printf( '%s', comment_time() ); ?>
     </time>
	<?php edit_comment_link(esc_html__( 'Edit', 'venta' ), ' ' ); ?>
	<a class="reply" href="#"><?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
	</a>
   </div>
   <?php comment_text(); ?>
</div>
                        
<?php	
   break;
 endswitch;
} 

?>

<?php
	/* Exit if the post is password protected & user is not logged in */
	if ( post_password_required() )
		return;
?>


	<?php if ( have_comments() ) : ?>
      	<div class="comment-box">
		<h3 id="comments"><?php comments_number('No comments','One Comments','% Comments');?></h3>
		
		</div>	

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav role="navigation" id="comment-nav-above" class="comment-navigation">
		<?php wp_link_pages(); ?>

		</nav><!-- #comment-nav-before .comment-navigation -->
		<?php endif;?>
          
		  <div class="comment">
		  	<ul class="commentlist">
				<?php venta_thinkup_input_comments(); ?>
			</ul>
          </div>
		
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav role="navigation" id="comment-nav-below" class="comment-navigation">
			<div class="nav-previous"><?php previous_comments_link( __( 'Older Comments', 'venta' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments', 'venta' ) ); ?></div>
		</nav><!-- #comment-nav-below .comment-navigation -->
		<?php endif; ?>

	<?php endif; ?>

	<?php
		/* Message to display when comments are closed */
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>

		<div id="nocomments" class="notification info">
			<div class="icon"><?php esc_html_e( 'Comments are closed.', 'venta' ); ?></div>
		</div>

	<?php endif; ?>

	<?php 
		$req      = get_option( 'require_name_email' );
		$aria_req = ( $req ? " aria-required='true'" : '' );

		$comments_args = array(
			'label_submit' => __( 'submit comment', 'venta' ),
			'title_reply'  => __( 'Leave a Reply', 'venta'  ),
			'comment_notes_after' => '',
			'comment_field' =>  
				'<textarea id="comment" class="textarea form-control" name="comment" placeholder="' . esc_attr__( 'Your Message', 'venta' ) . '" cols="20" rows="8" aria-required="true">' .
				'</textarea>',
			'fields' => apply_filters( 'comment_form_default_fields', array (
				'author' =>
					'<p class="comment-form-author one_third">' .
					'<input id="author" name="author" placeholder="' . esc_attr__( 'Your Name (Required)&hellip;', 'venta' ) . '" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
					'" size="30"' . $aria_req . ' /></p>',
				'email' =>
					'<p class="comment-form-email one_third">' .
					'<input id="email" name="email" placeholder="' . esc_attr__( 'Your Email (Required)&hellip;', 'venta' ) . '" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
					'" size="30"' . $aria_req . ' /></p>',
				'url' =>
					'<p class="comment-form-url one_third last">' .
					'<input id="url" name="url" placeholder="' . esc_attr__( 'Your Website&hellip;', 'venta' ). '" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
					'" size="30" /></p>'
			) ),
		);
		?>
		<div class="comment-form clearfix"> 
		<?php
		comment_form( $comments_args );
	    ?>
		</div>
<div class="clearboth"></div><!-- #comments .comments-area -->	
<?php endif; ?>	
	