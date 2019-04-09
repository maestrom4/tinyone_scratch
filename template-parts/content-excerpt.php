<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Tinyone
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if ( is_sticky() && is_home() && ! is_paged() ) {
            printf( '<span class="sticky-post">%s</span>', _x( 'Featured', 'post', 'tinyone' ) );
        }
        the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
        ?>
    </header><!-- .entry-header -->

    <?php the_post_thumbnail(); ?>

    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php 
            edit_post_link(
            sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers. */
                    __( 'Edit <span class="screen-reader-text">%s</span>', 'tinyone' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            ),
         
            );
         ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-${ID} -->


<article class="my-5">
    <div class="container">
        <div class="row">
  
        </div>
    </div>
</article>