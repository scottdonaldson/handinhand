<?php get_header(); ?>

<section id="left-nav" class="three columns">
	<?php get_sidebar(); ?>
</section>

<section class="seven columns">
	<h2>Search results for '<?php the_search_query(); ?>'</h2>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

	<?php the_excerpt(); ?>

<?php endwhile; endif; ?>
</section>

<section id="right-sidebar" class="two columns">
	<?php get_sidebar('right'); ?>
</section>

<?php get_footer(); ?>