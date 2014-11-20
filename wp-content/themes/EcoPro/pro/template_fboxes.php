<div class="content">
	<div class="fboxes fix">
			<?php 
			// inserts a clearing element at the end of each line of boxes
			$perline = 3;
			$count = $perline;?>
			<?php foreach(pagelines('fboxes') as $fbox):?>
			
				<?php if(showfeature($fbox['page'], $post->ID) && !isset($fbox['draft']) && isset($fbox['text']) && !empty($fbox['text'])):?>
					<div class="fbox">
				
						<div class="fboxcopy <?php if(isset($fbox['icon']) && !empty($fbox['icon'])):?>fboxicon" style="padding-left: 93px;background: #fff url(<?php echo $fbox['icon'];?>) no-repeat 0 30px; <?php endif;?>">
							<div class="fboxtitle"><?php echo do_shortcode($fbox['title']);?></div>
							<div class="fboxtext"><?php echo do_shortcode($fbox['text']);?></div>
						</div>
					</div>
					<?php $end = ($count+1) / $perline;  if(is_int($end)):?><div class="clear"></div><?php endif;?>
					<?php $count++;?>
				<?php endif;?>
			<?php endforeach;?>
	</div>
	<div class="clear"></div>
</div>
