<article class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <?php the_title('<h1>', '</h1>'); ?>
                <?php echo '<span class="tinone-slareGrey mb-3">';?> 
                <?php echo 'Published on - '; ?>
                <?php the_date(); ?>
                <?php echo '</span>';?> 
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</article>