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

get_header();
?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container my-5">
                <div class="row">
                    <div class="col-12 col-md-8">
                        
                    
                        <?php if ( have_posts() ) : ?>

                            <header class="page-header my-3">
                                <?php
                                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                                ?>
                            </header><!-- .page-header -->

                            <?php
                            // Start the Loop.
                            while ( have_posts() ) :
                                the_post();

                                /*
                                 * Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part( 'template-parts/content', 'excerpt' );

                                // End the loop.
                            endwhile;

                            // Previous/next page navigation.
                            the_post_navigation( array(
                                'prev_text'                  => __( 'prev chapter: %title' ),
                                'next_text'                  => __( 'next chapter: %title' ),
                                'in_same_term'               => true,
                                'taxonomy'                   => __( 'post_tag' ),
                                'screen_reader_text' => __( 'Continue Reading' ),
                            ) );

                            // If no content, include the "No posts found" template.
                        else :
                            get_template_part( 'template-parts/content', 'none' );

                        endif;
                        ?>
                    </div><!-- content column -->
                    <aside class="col-12 col-md-4">
                        <ul id="sidebar">
                            <?php 
                            if ( is_active_sidebar( 'sidebar-widget-1' ) ) {
                                dynamic_sidebar('sidebar-widget-1');
                            }
                            ?>
                        </ul>
                    </aside>
                </div><!-- row -->
            </div><!-- container -->
        </main><!-- #main -->
    </section><!-- #primary -->

<?php

get_footer();
