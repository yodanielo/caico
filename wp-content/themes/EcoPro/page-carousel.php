<?php
if(VPRO) {
/*
	Template Name: Carousel Page - Standard
*/
	
$carousel_page = true;

get_header(); 
include(PRO.'/template_carousel.php');

include(THEME_LIB.'/_sub_head.php');
include(THEME_LIB.'/template_page.php');

get_footer(); 

}
?>
