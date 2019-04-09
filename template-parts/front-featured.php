<div class="container my-4">
    <div class="row">
        <div class="col-12 col-md-12 text-center my-5">
            <h1>Tinyone Features</h1>
            <p class="col-12 col-md-8 mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo molestias earum, commodi numquam, a tenetur minima illum sint ex neque deserunt tempore accusamus necessitatibus placeat! Neque obcaecati perspiciatis tenetur ex?</p>
        </div>
        <!-- Features -->
        <div class="col-12 col-md-12 mb-5 mt-3">
            <div class="row mb-5">
                <?php 
                    $args = array(
                        'posts_per_page' => 8,
                        'post_type'      => 'to_featured',
                        'post_status'    => 'publish',
                    );
                    $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) :
                            $loop->the_post();

                            ?>
                                <div class="col-12 col-md-4">
                                    <div class="row">
                                        <div class="col-12 col-md-3">
                                        <?php the_post_thumbnail( 'thumbnail' ); ?>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <h4><?php echo the_title(); ?></h4>
                                            <p><?php echo the_excerpt() ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        endwhile;
                    wp_reset_postdata();

                ?>
            </div>
            <!-- end of row -->
            
        </div>
    </div>
</div>