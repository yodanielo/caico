<div id="pagecontent" class="contentcontainer fix">
    <div class="texture fix">
        <?php if(m_pagelines('featureboxes',$post->ID) || is_page_template('page-feature.php') || is_page_template('page-feature-page.php')) { 
    require(PRO.'/template_fboxes.php');
        }?>

<?php if(!is_page_template('page-feature.php')):?>
        <div class="content <?php if(pagelines('leftsidebar') || m_pagelines('leftsidebar', $post->ID) || is_page_template('page-leftsidebar.php')):?>leftsidebar<?php endif;?>">
            <div id="maincontent" class="fix">
                <?php include (THEME_LIB . '/_pagecontent.php'); ?>
            </div>
            <?php get_sidebar();?>
                <?php 
                switch($id) {
                    case 77://familia activa
                        include (THEME_LIB . '/dfamilia_activa.php');
                        break;
                    case 80://activate
                        include (THEME_LIB . '/dactivate.php');
                        break;
                    case 16://contacto
                    case 43://empactiva 3
                    case 41://empactiva 2
                    case 39://empactiva 1
                        include (THEME_LIB . '/dempactiva1.php');
                        break;
                    /*case 43://empactiva 3
                        include (THEME_LIB . '/dempactiva3.php');
                        break;*/
                }
                ?>
        </div>
<?php endif;?>
    </div>
</div>