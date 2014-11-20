<div id="sidebar" class="fix">
    <div id="dminiside fix" style="margin-bottom:20px;">
        <div id="dminside1" style="background:#fff; position: relative; z-index: 150; height:300px;">
            <a href="http://caico.artesanosdigitales.com/?page_id=77" class="dcuamini left"><img src="/img/caico/b0_colabora-familia-activa.png" /></a>
            <a href="http://caico.artesanosdigitales.com/?page_id=80" class="dcuamini right"><img src="/img/caico/b0_colabora-activate.png" /></a>
            <a href="http://caico.artesanosdigitales.com/?page_id=82" class="dcuamini left"><img src="/img/caico/b0_colabora-empresa-activa.png" /></a>
            <a href="http://caico.artesanosdigitales.com/?page_id=16" class="dcuamini right"><img src="/img/caico/b0_contacto.png" /></a>
        </div>
    </div>

    <div id="widgets">

        <?php if(VPRO) include(THEME_LIB.'/_grandchildnav_pro.php');?>

        <?php if(m_pagelines('the_sidebar', $post->ID) == 'secondary'):?>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Secondary Sidebar') ) : ?>
                <?php _e('The secondary sidebar has been selected but doesn\'t have any widgets. Add some widgets to your secondary sidebar in the admin under appearance > widgets.',TDOMAIN);?>
            <?php endif; ?>
        <?php elseif(m_pagelines('the_sidebar', $post->ID) == 'short'):?>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Short Sidebar') ) : ?>
                <?php //_e('The short sidebar has been selected but doesn\'t have any widgets. Add some widgets to your short sidebar in the admin under appearance > widgets.',TDOMAIN);?>
            <?php endif; ?>
        <?php else:?>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
                <?php if(!pagelines('sidebar_no_default')) include(THEME_LIB.'/_defaultsidebar.php');?>
            <?php endif; ?>
        <?php endif;?>

    </div>

</div>
