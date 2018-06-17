<?php 
/**
 * Template Name: Home Page
 *
 */

get_header();
	
	get_template_part('template-parts/page/home','slideshow'); 
	get_template_part('template-parts/page/home','thecontent');	
	get_template_part('template-parts/page/home','features');	
	get_template_part('template-parts/page/home','latestpost');
  

get_footer(); ?>