<?php
/*
Template Name: Photos Page
*/ get_header(); ?>

<section id="left-nav" class="three columns hide-on-phones noprint">
	<?php if ($post->post_parent)
        	{ $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0"); }
    	else
    		{ $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0"); }
    	if ($children) { ?>
    	
        <ul>
      		<?php echo $children; ?>
      	</ul>
    <?php } ?>
    
    <?php get_sidebar(); ?>
</section>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <article <?php post_class('nine columns'); ?>>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <div class="entry-content">
            <?php the_content(); ?>
            <?php query_posts('post_type=photos'); 
                    while (have_posts()) : the_post(); ?>
                    <div class="gallery-link">
                        <a href="<?php the_permalink(); ?>">
                            <?php echo get_the_post_thumbnail(); ?>
                            <h2 class="entry-title"><?php the_title(); ?>&nbsp;&raquo;</h2>
                          
                        </a>
                    </div>    
                    <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
    </article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>