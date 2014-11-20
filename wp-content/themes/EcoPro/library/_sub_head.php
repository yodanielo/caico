<?php
if(!pagelines('hide_sub_header') && !is_search() && !is_404()):?>
    <?php if($post->post_parent || wp_list_pages("title_li=&child_of=".$post->ID."&echo=0")) $children = true;?>
    <?php if($children):?>
<div id="sub_head" class="fix">
    <div class="content">
                <?php require(THEME_LIB.'/_sub_nav.php');?>
    </div>
</div>
    <?php elseif((is_home() || is_category()) && pagelines('subnav_categories') && wp_list_categories('include='.pagelines('subnav_categories').'&title_li=&echo=0') != "<li>No categories</li>"):?>
<div id="sub_head" class="fix">
    <div class="content">
        <ul id="subnav" class="fix">
            <li><span class="subnav_first">&nbsp;</span></li>
                    <?php wp_list_categories('include='.pagelines('subnav_categories').'&title_li='); ?>
            <li><span class="subnav_last">&nbsp;</span></li>

        </ul>
    </div>
</div>

    <?php endif;?>
<?php endif;
?>
<?if($cat==3 || ($cat>=5 && $cat<=8)){?>
<div id="sub_head" class="fix">
    <div class="content">
         <div id="subnav" class="fix">
             <ul>
		<li><span class="subnav_first">&nbsp;</span></li>
		<li class="pagenoticias page_item page-item-77 <?= ($cat==5?"current_page_item":"") ?>"><a href="http://caico.artesanosdigitales.com/?cat=5" title="Cancer">Cancer</a></li>
		<li class="pagenoticias page_item page-item-80 <?= ($cat==6?"current_page_item":"") ?>"><a href="http://caico.artesanosdigitales.com/?cat=6" title="Eventos">Eventos</a></li>
		<li class="pagenoticias page_item page-item-82 <?= ($cat==7?"current_page_item":"") ?>"><a href="http://caico.artesanosdigitales.com/?cat=7" title="Niños">Niños</a></li>
		<li class="pagenoticias page_item page-item-83 <?= ($cat==8?"current_page_item":"") ?>"><a href="http://caico.artesanosdigitales.com/?cat=8" title="Otros">Otros</a></li>
		<li><span class="subnav_last">&nbsp;</span></li>
	     </ul>
	</div><!-- /sub nav -->
    </div>
</div>
<? } ?>
<script type="text/javascript">
    $j=jQuery.noConflict();
    if($j("#sub_head ul").children().length==2){
        $j("#sub_head").hide();
    }
</script>