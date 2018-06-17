
<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
<a href="<?php the_permalink() ?>" class="post-img-link"><?php the_post_thumbnail(''); ?>
</a>
<?php endif; ?>		
<div class="post-info">
	<div class="post-date">
		<?php get_the_time('j'); ?>
		<span><?php get_the_date('F'); ?></span>
		<?php get_the_date('Y'); ?>
	</div>
	<div class="post-content">
		<h2 class="post-title">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>

<div class="post-info-row">
	<div class="post-info-item">
		<i class="fa fa-clock-o"></i>
		 <?php echo esc_html__('Posted at', 'venta' ); ?><?php the_time();?>
	</div>
	<?php if (has_tag()) : ?>
	<div class="post-info-item">
		 <i class="fa fa-share-square-o"></i>
		 <?php echo esc_html__('Tags', 'venta' ); ?><?php the_tags('&nbsp;'); ?>
	</div>			
	<?php endif; ?>	
	<?php if (has_category()) : ?>
	<div class="post-info-item">
		<i class="fa fa-folder-open-o"></i>
		 <?php echo esc_html__('In', 'venta' ); ?><?php the_category('&nbsp;/&nbsp');?> 
	</div>
	<?php endif; ?>
	<div class="post-info-item">
		<?php echo esc_html__('Posted by', 'venta' ); ?><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="">
	   <?php the_author(); ?></a>
	</div>
	<div class="post-info-item">
		<i class="fa fa-comments"></i>
		  <?php echo esc_html(get_comments_number()); ?> <?php echo esc_html__('Comments', 'venta' ); ?>
	</div> 
</div>
		<p><?php echo the_excerpt(); ?></p>
		<a class="button button-type-3-xs" href="<?php the_permalink(); ?>"><?php echo esc_html__('Read more', 'venta' ); ?></a>
		 <?php edit_post_link( esc_html__( 'Edit', 'venta' ), '<span class="edit-link">', '</span>' ); ?>
	</div>
</div>