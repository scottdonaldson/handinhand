<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section id="left-nav" class="three columns">
    <?php get_sidebar(); ?>
</section>

<article <?php post_class('seven columns'); ?>>
	<h1 class="entry-title"><?php the_title(); ?></h1>
    <small><?php the_date(); ?></small>
    <div class="entry-content">
		<?php the_content(); ?>
    </div>
</article>

<section id="right-sidebar" class="two columns">
	<?php get_sidebar('right'); ?>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>