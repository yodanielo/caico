<div id="spotlight">	
	<div class="effect">
		<div class="shadow-bottom fix">
			<div class="content">

				<div id="feature" class="fix">
					<div id="cycle">

							<?php foreach(pagelines('features') as $feature):?>
								<?php if((showfeature($feature['page'], $post->ID) && !$feature['draft']) && (!empty($feature['text']) || !empty($feature['media']))):?>
								<div id="<?php echo str_replace(' ', '_', $feature['name']);?>"  class="fcontainer" <?php if(isset($feature['background'])):?>style="background:<?php echo $feature['background'];?>"<?php endif;?>>
										<div class="fcontent">
											<div class="fheading">
												<?php echo do_shortcode($feature['title']);?>
											</div>
											<div class="ftext">
												<?php echo do_shortcode($feature['text']);?>

												<?php if($feature['link']):?>
													<div class="flink"><a class="featurelink" href="<?php echo do_shortcode($feature['link']);?>"><?php _e('More', TDOMAIN);?></a></div>
												<?php endif;?>
											</div>
										</div>
										<div class="fmedia">
											<?php echo do_shortcode($feature['media']);?>
										</div>
									<div class="clear"></div>
								</div>
								<?php endif?>
							<?php endforeach;?>

					</div>
					<div id="featurenav">
						<?php if(pagelines('timeout') != 0 && pagelines('feature_playpause')):?><span class="playpause pause"><span>&nbsp;</span></span><?php endif;?>
					</div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>

			</div>
		</div>
	</div>
</div>