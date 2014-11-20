<?php //include (THEME_LIB . '/_morefoot.php'); ?>
<div class="clear"></div>
</div> <!-- end of #main -->
<div  id="footer">
    <div class="effect">
        <div class="content" style="text-align:right">
            <?php /*
            <div id="fcolumns_container" class="fix">
                <?php if (1!=1 && (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Columns') )) : ?>
                <div class="fcol">
                    <div class="fcol_pad">
                            <?php if(pagelines('footer_logo') && VPRO):?>
                        <a class="home" href="<?php echo get_settings('home'); ?>/" title="<?php _e('Home',TDOMAIN);?>">
                            <img src="<?php echo pagelines('footer_logo');?>" alt="<?php bloginfo('name');?>" />
                        </a>
                            <?php else:?>
                        <h1 class="site-title"><a class="home" href="<?php echo get_settings('home'); ?>/" title="<?php _e('Home',TDOMAIN);?>"><?php bloginfo('name');?></a></h1>
                            <?php endif;?>
                    </div>
                </div>
                <div class="fcol">
                    <div class="fcol_pad">
                        <h3><?php _e('Pages',TDOMAIN);?></h3>
                            <?php include(THEME_LIB."/_footer_nav.php");?>
                    </div>
                </div>
                <div class="fcol">
                    <div class="fcol_pad">
                        <h3><?php _e('Stay In Touch',TDOMAIN);?></h3>
                        <ul>

                                <?php if(pagelines('rsslink')):?>
                            <li><a href="<?php echo RSSURL;?>" class="rsslink"><?php _e('RSS Feed', TDOMAIN);?></a></li>
                                <?php endif;?>
                                <?php if(VPRO):?>
                                    <?php if(pagelines('twitterlink')):?>
                            <li><a href="<?php echo pagelines('twitterlink');?>" class="twitterlink">Twitter</a></li>
                                    <?php endif;?>
                                    <?php if(pagelines('facebooklink')):?>
                            <li><a href="<?php echo pagelines('facebooklink');?>" class="facebooklink">Facebook</a></li>
                                    <?php endif;?>
                                    <?php if(pagelines('linkedinlink')):?>
                            <li><a href="<?php echo pagelines('linkedinlink');?>" class="linkedinlink">LinkedIn</a></li>
                                    <?php endif;?>
                                <?php endif;?>
                        </ul>

                    </div>
                </div>
                <div class="fcol">
                    <div class="fcol_pad">
                        <h3><?php _e('More',TDOMAIN);?></h3>
                            <?php if(pagelines('welcomemessage')):?><div class="welcomemessage"><?php echo pagelines('welcomemessage');?></div><?php endif;?>
                    </div>
                </div>
                <div class="fcol">
                    <div class="fcol_pad">
                        <span class="terms">
                                <?php e_pagelines('terms');?>
                        </span>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <?php if(pagelines('no_credit') || !VDEV):?>
            <div id="cred" class="pagelines">
                <a class="plimage" target="_blank" href="<?php e_pagelines('partner_link', pagelines('credlink'));?>">
                        <?php e_pagelines('credtext', 'PageLines Themes');?>
                </a>
            </div>
            <?php elseif(!VPRO):?>
            <div id="cred" class="pagelines">
                <a class="plimage" target="_blank" href="<?php e_pagelines('partner_link', pagelines('credlink'));?>">
								PageLines Themes
                </a>
            </div>
            <?php endif;?>
            */?>
            <img src="/img/caico/footer-logo.png" alt="Fundación Caíco"/>&nbsp;
            <a href="http://caico.artesanosdigitales.com/?page_id=140"><span>politica de privacidad</span></a><span>&nbsp;|&nbsp;</span>
            <a href="http://caico.artesanosdigitales.com/?page_id=143"><span>mapa web</span></a><span>&nbsp;|&nbsp;</span>
            <a href="http://caico.artesanosdigitales.com/?page_id=145"><span>nota legal</span></a><span>&nbsp;|&nbsp;</span>
            <a target="_blank" href="http://www.artesanosdigitales.com/"><span>artesanos digitales 2010</span></a>
            <div class="clear"></div>
        </div>
    </div>
</div>
</div> <!-- end #site -->
<?php if (pagelines('footerscripts')) echo pagelines('footerscripts');?>
<?php wp_footer(); ?>
</body>
</html>