<div id="nav2" class="fix">
    <ul class="">
            <!-- <li class="page_item "><a class="home" href="<?php echo get_settings('home'); ?>/" title="<?php _e('Home',TDOMAIN);?>"><?php _e('Home',TDOMAIN);?></a></li> -->
        <?php
        $frontpage_id = get_option('page_on_front');
        if($bbpress_forum && pagelinesforum('exclude_pages')) {
            $forum_exclude = ','.pagelinesforum('exclude_pages');
        }
else {
    $forum_exclude = '';
}
echo '<div style="display:none">';
        wp_list_pages('child_of=128&depth=4&title_li=&link_before=<span style="color:#fff">&link_after=</span>');
echo '</div>';?>
        <li class="page_item2 page-item-275"><a href="http://caico.artesanosdigitales.com/fotos" title="Fotos"><img <?=($id==275?'class="selected"':'')?> alt="fotos" src="http://caico.artesanosdigitales.com/img/caico/b0-fotos.gif"></a></li>
        <li class="page_item2"><img src="/img/separacion-menu.gif" /></li>
        <li class="page_item2 page-item-16"><a href="http://caico.artesanosdigitales.com/contacto" title="Contacto"><img <?=($id==16?'class="selected"':'')?> src="http://caico.artesanosdigitales.com/img/caico/b0-contacto.gif"></a></li>
        <li class="page_item2"><img src="/img/separacion-menu.gif" /></li>
        <li class="page_item2 page-item-31"><a href="http://caico.artesanosdigitales.com/eventos" title="eventos"><img <?=($id==31?'class="selected"':'')?> src="http://caico.artesanosdigitales.com/img/caico/b0-eventos.gif"></a></li>
        <li class="page_item2"><img src="/img/separacion-menu.gif" /></li>
        <li class="page_item2 page-item-14"><a href="http://caico.artesanosdigitales.com/category/noticias" title="Noticias"><img <?=($cat || $_GET["p"]?'class="selected"':'')?> src="http://caico.artesanosdigitales.com/img/caico/b0-noticias.gif"></a></li>
        <li class="page_item2"><img src="/img/separacion-menu.gif" /></li>
        <li class="page_item2 page-item-12"><a href="http://caico.artesanosdigitales.com/colabora" title="Colabora"><img <?=(in_array($id, array(12,80,82,39,41,43,77))?'class="selected"':'')?> src="http://caico.artesanosdigitales.com/img/caico/b0-colabora.gif"></a></li>
        <li class="page_item2"><img src="/img/separacion-menu.gif" /></li>
        <li class="page_item2 page-item-10"><a href="http://caico.artesanosdigitales.com/actividades" title="Actividades"><img <?=($id==10?'class="selected"':'')?> src="http://caico.artesanosdigitales.com/img/caico/b0-actividades.gif"></a></li>
        <li class="page_item2"><img src="/img/separacion-menu.gif" /></li>
        <li class="page_item2 page-item-8"><a href="http://caico.artesanosdigitales.com/quienes-somos" title="Quienes somos"><img <?=(in_array($id, array(8,72,74))?'class="selected"':'')?> src="http://caico.artesanosdigitales.com/img/caico/b0-quienes-somos.gif"></a></li>
        <li class="page_item2"><img src="/img/separacion-menu.gif" /></li>
        <li class="page_item2 page-item-3"><a href="http://caico.artesanosdigitales.com" title="Inicio"><img <?=($id==3?'class="selected"':'')?> src="http://caico.artesanosdigitales.com/img/caico/b0-inicio.gif"></a></li>
    </ul>
</div><!-- /nav -->
<div class="clear"></div>