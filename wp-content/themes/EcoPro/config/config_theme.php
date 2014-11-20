<?php

// IF PRO VERSION
	if(file_exists(TEMPLATEPATH.'/pro/init_pro.php')){
		// Theme
		define('VPRO',true);
		define('THEMENAME','EcoPro');
		define('THEMENAMESHORT','EcoPro');

	}else{ 
		define('VPRO',false);
		define('THEMENAME','Eco');
		define('THEMENAMESHORT','Eco');	
	}

// IF DEVELOPER VERSION
	if(file_exists(TEMPLATEPATH.'/dev/init_dev.php')){
		define('VDEV',true);
	}else{ define('VDEV',false); }
	
// MEDIA DIMENSIONS
	define('FMEDIAWIDTH','480px');
	define('FMEDIAHEIGHT','290px');
	define('HMEDIAWIDTH','520px');

	define('FBOXMEDIAWIDTH','100px');
	define('FBOXMEDIAHEIGHT','100px');

	define('SIDEBARMEDIAWIDTH','275px');
	define('ENTRYMEDIAWIDTH','600px');

?>