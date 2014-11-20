<?php

// Theme Initialization -- Copyright PageLines 2010 -- Designed by Andrew Powers -- 

// GET CORE ///////////

	if(file_exists(TEMPLATEPATH.'/_core/init_core.php')) define('CORE', TEMPLATEPATH . "/_core");
	else define('CORE', TEMPLATEPATH . "/core");

	include(CORE . "/init_core.php");

?>