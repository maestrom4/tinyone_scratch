<?php
/**
 * The main template file
 *
 * @package tinyone
 * @subpackage tinone
 * @since v1.0
 */
?>
<?php get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
         
            <?php
            /*
             * Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'template-parts/front', 'slider');
            get_template_part( 'template-parts/front', 'featured');
            get_template_part( 'template-parts/front', 'cta');
            ?>
            
        </main>
    </div>
<?php get_sidebar(); ?>
<?php get_footer();?> 
    
