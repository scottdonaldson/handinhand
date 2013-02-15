<?php
/*
Template Name: Donate
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

<article <?php post_class('seven columns'); ?>>
	<h1 class="entry-title"><?php the_title(); ?></h1>
    <div class="entry-content">
		<?php the_content(); ?>
        <div id='razoo_donation_widget'><span><a href="http://www.razoo.com/">Online fundraising</a> for <a href="http://www.razoo.com/story/Hand-In-Hand-For-Literacy">Hand In Hand for Literacy</a> at Razoo</span></div>
		<script type='text/javascript'>
		var r_params = {
			"title":"Hand In Hand for Literacy",
			"short_description":"We promote literacy in the U.S. and abroad by bringing books to communities who have none. Improving lives one library at a time....",
			"long_description":"The first time I experienced the face of what is described as a \"reading famine\" was in Ghana, Africa in 2007.  I worked as a volunteer teacher in a small rural community. Upon my arrival at the schools, I was shocked by the absence of books not only in the schools, but the entire village as well. I was also astounded by the importance the community placed on the education of their children and how hungry these children were to learn.  For those living in poverty, education is the key to a better life. My decision to build a library in this community started with one simple question from a 12 year old boy. \"Please Madam Deb, is there any way you could send me just one book to help me reach my dream of becoming a doctor?\" It seemed like such a simple request. Then I thought about all of the other children I had worked with in the village who had dreams...",
			"color":"#AB650D",
			"errors":false,
			"donation_options":{
				"20":" ",
				"50":" ",
				"100":" "
			},
			"image":"false"
		};
		var r_protocol=(("https:"==document.location.protocol)?"https://":"http://");var r_path='www.razoo.com/javascripts/widget_loader.js';var r_identifier='Hand-In-Hand-For-Literacy';document.write(unescape("%3Cscript id='razoo_widget_loader_script' src='"+r_protocol+r_path+"' type='text/javascript'%3E%3C/script%3E"));</script>
    	<p>
        	Or pay by check:<br />
        	<br />
        	<strong>Hand in Hand for Literacy</strong><br />
            26 Exchange St. E, Suite 306<br />
            St. Paul, MN 55101
       	</p>	
    </div>
</article>

<section id="right-sidebar" class="two columns">
	<?php get_sidebar('right'); ?>
</section>

<?php get_footer(); ?>