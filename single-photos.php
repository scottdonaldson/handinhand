<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section id="left-nav" class="three columns">
    <?php get_sidebar(); ?>
</section>

<article <?php post_class('nine columns'); ?>>
	<h1 class="entry-title"><?php the_title(); ?></h1>
    <div class="entry-content">
		<?php the_content(); 
			  echo do_shortcode('[gallery columns=4]'); ?>
    </div>
</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>