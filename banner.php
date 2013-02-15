<div class="flexslider">
    <ul class="slides BP">
        <?php query_posts(array(
			'post_type' => 'banner',
			'orderby' => 'title',
			'order' => 'ASC'
		)); ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <li>
                <?php echo get_the_post_thumbnail(); ?>
                <div class="banner-text">
                	<div class="text-inside">
	                    <?php the_content(); ?>
                    </div>    
                </div>
        	</li> 
        <?php endwhile; wp_reset_query(); ?>   
    </ul>
</div>