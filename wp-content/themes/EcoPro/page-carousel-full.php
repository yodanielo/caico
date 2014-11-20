<?php
if(VPRO) {
/*
	Template Name: Carousel Page - FullWidth
*/
	
	$carousel_page = true;
	
	get_header(); 
	require(PRO.'/template_carousel.php');
	
	require(THEME_LIB.'/_sub_head.php');
	require(PRO.'/template_fullwidth.php');
	get_footer(); 

}
?>
