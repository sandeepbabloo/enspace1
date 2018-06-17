<?php
/**
 * Template part for displaying featured posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moral
 */

$sticky_posts = get_option( 'sticky_posts' );  
if ( ! empty( $sticky_posts ) ) :
?>
    <div id="featured-posts" class="relative">
        <div class="wrapper">
            <div class="grid">
                <?php 
                $args = array( 'posts_per_page' => 4, 'post__in' => $sticky_posts );
                $query = new WP_Query( $args );
                        
                if ( $query->have_posts() ) :
                    /* Start the Loop */
                    while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="grid-item">
                            <article class="has-featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'large' ); ?>');">
                                
                                <?php blogbook_cats( true );?>

                                <div class="entry-container">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                                    </header>
                                    <div class="entry-meta">
                                        <?php blogbook_post_author( false );?>
                                        <?php blogbook_posted_on();?>
                                    </div><!-- .entry-meta -->
                                </div><!-- .entry-container -->  
                            </article>   
                        </div><!-- .grid-item -->
                    <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div><!-- .grid -->
        </div><!-- .wrapper -->
    </div><!-- #featured-posts -->
<?php
endif;
