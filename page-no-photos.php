<?php 
/*
Template Name: No Right Sidebar
*/
get_header(); ?>

<?php the_post(); ?>

<section id="left-nav" class="three columns hide-on-phones noprint">
	<?php if ($post->post_parent)
        	{ $children = wp_list_pages('title_li=&child_of='.$post->post_parent.'&echo=0'); 
			  $parent_link = get_permalink($post->post_parent); 
			  $parent = get_the_title($post->post_parent); }
    	else
    		{ $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0'); 
			  $parent_link = get_permalink($post->ID); 
			  $parent = get_the_title($post->ID); }
    	if ($children) { 
		?>
        
        <ul>
      		<li <?php if (is_page($parent)) { echo 'class="current_page_item"'; } ?>>
            	<a href="<?php echo $parent_link; ?>">
                	<?php echo $parent; ?>
                </a>
            </li>
          	<?php echo $children; ?>

      	</ul>
    <?php } ?>
    
    <?php get_sidebar(); ?>
</section>

<article <?php post_class('nine columns'); ?>>
	<h1 class="entry-title"><?php the_title(); ?></h1>
    <div class="entry-content">
		<?php the_content(); ?>
    </div>
</article>

<?php get_footer(); ?>