<?php
if(VPRO) {
/*
	Template Name: Feature Page - With Page Content / Sidebar
*/
//define(FEATUREPAGE, true);

	get_header(); 
		require(PRO.'/template_feature.php');
		require(THEME_LIB.'/_sub_head.php');
		require(THEME_LIB.'/template_page.php');
	get_footer();
}
?>