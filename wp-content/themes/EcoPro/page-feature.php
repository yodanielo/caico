<?php if(VPRO){
	
/*
	Template Name: Feature Page - Full Width Content
*/

global $featurepage;
$featurepage = true;

get_header();
	require(PRO.'/template_feature.php');
	require(THEME_LIB.'/_sub_head.php');
	require(PRO.'/template_fullwidth.php');
get_footer();
 
}?>