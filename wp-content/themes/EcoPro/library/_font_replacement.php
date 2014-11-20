<?php if(pagelines('fontreplacement')):?>
<!-- Font Replacement -->
	<script type="text/javascript" src="<?php echo CORE_JS.'/cufon-yui.js';?>" ></script>	
	<?php if(pagelines('font_file')):?>
		<script type="text/javascript" src="<?php echo pagelines('font_file'); ?>" ></script>
	<?php else:?>
		<!-- A font by Jos Buivenga (exljbris) -> www.exljbris.nl -->
		<script type="text/javascript" src="<?php echo THEME_JS.'/Museo.font.js';?>" ></script>
	<?php endif;?>
	<script type="text/javascript">
		//Cufon.replace('.fcontent .fsub, .fcontent .ftitle, .fcontent .ftext p,  #highlight .fcontent', {textShadow: '#444 0px -1px'});
		//Cufon.replace('.site-title, .pagetitle, a.featurelink', {hover: true, textShadow: '#444 0px -1px'});
		<?php if(pagelines('replace_font')): ?>
			//Cufon.replace('<?php echo pagelines("replace_font"); ?>', {hover: true});
		<?php endif;?>
	</script>
<?php endif;?>