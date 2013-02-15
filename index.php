<?php get_header(); ?>

<section id="left-nav" class="three columns hide-on-phones">
	<?php get_sidebar(); ?>
</section>

<section class="seven columns">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article <?php post_class(); ?>>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?>&nbsp;&raquo;</a></h2>
    
        <?php the_excerpt(); ?>
    </article>

<?php endwhile; endif; ?>
</section>

<section id="right-sidebar" class="two columns">
	<?php get_sidebar('right'); ?>
</section>

<?php get_footer(); ?>