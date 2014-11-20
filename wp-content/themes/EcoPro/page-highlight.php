<?php
if(VPRO) {
/*
	Template Name: Highlight Page
*/
	get_header(); 
	require(THEME_LIB.'/_spotlight.php');
	require(THEME_LIB.'/_sub_head.php');	
	require(THEME_LIB.'/template_page.php');
	get_footer();
}