<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage tinyone
 * @since 1.0.0
 */
?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 my-5">
                        <?php

                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();

                            get_template_part( 'template-parts/content', 'single' );

                            if ( is_singular( 'attachment' ) ) {
                                // Parent post navigation.
                                the_post_navigation(
                                    array(
                                        /* translators: %s: parent post link */
                                        'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'tinyone' ), '%title' ),
                                    )
                                );
                            } elseif ( is_singular( 'post' ) ) {
                                // Previous/next post navigation.
                                the_post_navigation(
                                    array(
                                        'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'tinyone' ) . '</span> ' .
                                            '<span class="screen-reader-text">' . __( 'Next post:', 'tinyone' ) . '</span> <br/>' .
                                            '<span class="post-title">%title</span>',
                                        'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'tinyone' ) . '</span> ' .
                                            '<span class="screen-reader-text">' . __( 'Previous post:', 'tinyone' ) . '</span> <br/>' .
                                            '<span class="post-title">%title</span>',
                                    )
                                );
                            }
                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) {
                                comments_template();
                            }
                        endwhile; // End of the loop.
                        ?>
                    </div><!-- end of content area -->
                    <aside  class="col-12 col-md-4 my-5">
                        <ul id="sidebar" class="my-5">
                        <?php 
                            if( is_active_sidebar( 'sidebar-widget-1' ) ) {
                                dynamic_sidebar( 'sidebar-widget-1' );
                            }
                        ?>  
                        </ul>
                    </aside> 
                </div>
            </div>
        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
