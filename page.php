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
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                    <?php
                    global $post;
                    $post_slug=$post->post_name;

                    /**
                     * Check if page is blog page
                     * 
                     */
                    $filter_value = 'blog';
                    if ( is_page( $filter_value ) ) {
                
                        $args = array(
                            'post_per_page' => 8,
                            'post_type'     => 'post',
                            // 'cat'           => 2,
                            'tax_query'     => array(
                                        'taxonomy' => 'category',
                                        'field'    => $filter_value ,
                                    )
                        );

                        $que = new WP_Query( $args );
                        if ( $que->have_posts() ) :
                            while ( $que->have_posts() ) :
                                $que->the_post();
                                get_template_part( 'template-parts/content', 'blog' );
                            endwhile;
                        endif;
                    } 
                    else {
                      /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();

                            get_template_part( 'template-parts/content', 'page' );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) {
                                comments_template();
                            }
                        endwhile; // End of the loop.
                    } // End of else
                    ?> 
                    </div>
                    <aside  class="col-12 col-md-4 my-5">
                        <ul id="sidebar">
                        <?php 
                            if( is_active_sidebar( 'sidebar-widget-1' ) ) {
                                dynamic_sidebar( 'sidebar-widget-1' );
                            }
                        ?>  
                        </ul>                      
                    </aside> 
                </div> <!-- row -->
            </div><!-- container -->
        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_sidebar(); 
get_footer();
