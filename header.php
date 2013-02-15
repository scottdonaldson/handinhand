<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

  <title><?php wp_title(); ?> </title>
  <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">

	<link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/fonts/type.css">
	<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/hand.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/flexslider.css" type="text/css">          
    
    <!--[if lt IE 9]>
	    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!--[if gte IE 9]>
      <style type="text/css">
        .gradient {
           filter: none;
        }
      </style>
    <![endif]-->
  
  <?php wp_head(); ?>
  
  	
</head>

<body <?php body_class(); ?>>

  <div id="container">
    <header class="row">
    	<div class="three columns">
			<a href="<?php echo home_url(); ?>">
            	<img id="logo" src="<?php echo bloginfo('template_url'); ?>/images/Hand-in-Hand-logo.png" />
            </a>    
        </div>
            
	    <div id="header-nav" class="nine columns gradiented noprint">
        	<a id="facebook" class="hide-on-phones" href="http://www.facebook.com/pages/Hand-In-Hand-For-Literacy/149263635169666" target="_blank"></a>
              
			<?php get_search_form(); ?>
            <h2 id="tagline" class="hide-on-phones"><?php bloginfo('description'); ?></h2>
        	<?php wp_nav_menu(); ?>
      	</div>

    </header>
    
    <div id="main" role="main" class="row">