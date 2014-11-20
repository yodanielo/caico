
<div id="fullwidth" class="contentcontainer fix">
	<div class="texture">
		<div class="content fix">
			<?php if(m_pagelines('featureboxes',$post->ID) || is_page_template('page-feature.php') || is_page_template('page-feature-page.php')) { require(PRO.'/template_fboxes.php'); }?>
			<div id="maincontent" class="fix">
				<?php include (THEME_LIB . '/_pagecontent.php'); ?>
			</div>
	
		</div>
	</div>
</div>