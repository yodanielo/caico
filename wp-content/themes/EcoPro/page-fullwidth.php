<?php
if(VPRO) {

/*
	Template Name: Full Width Page
*/

	get_header(); 
		require(THEME_LIB.'/_spotlight.php');
		require(THEME_LIB.'/_sub_head.php');
		require(PRO.'/template_fullwidth.php');
	get_footer(); 
}
?>