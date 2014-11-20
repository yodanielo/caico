<?php if(!pagelines('hide_spotlight') && !m_pagelines('hide_spotlight',$post->ID)):?>
<div id="spotlight" class="fix">
    <div class="effect">
        <div class="shadow-bottom fix">
            <div class="content">

                    <?php if(is_page_template('page-highlight.php')) {
                        require(PRO.'/template_highlight.php');
                    }else {?>
                <h1 class="pagetitle">
                            <?php global $bbpress_forum;?>
                            <?php if($bbpress_forum):?>
                    <a href="<?php bb_uri(); ?>"><?php bb_option('name'); ?></a>
                            <?php elseif(is_page()):?>
                                <?php the_title(); ?>
                            <?php elseif(is_home() || is_single()):?>
                                <?php
                                if(get_option('page_for_posts')) {
                                    echo get_the_title(get_option('page_for_posts'));
                                }else {
                                    e_pagelines("blog_title_text",__('The Latest', TDOMAIN));
                                }
                                ?>
                            <?php elseif(is_search()):?>
                                <?php _e('Search Results', TDOMAIN);?>
                            <?php elseif(is_category()):?>
                                <?php single_cat_title(''); ?>
                            <?php elseif(is_404()):?>
                                <?php _e('Error 404', TDOMAIN);?>
                            <?php endif;?>
                </h1>
                        <?php
                        if($cat){
                            echo '<script type="text/javascript">cargarverde("/img/caico/caico-cab-noticias.jpg","/img/loopbars/caico-cab-noticias-bg.jpg")</script>';
                        }
                        switch($id) {
                            case "145"://nota legal
                                echo '<script type="text/javascript">cargarverde("/img/caico/caico-cab-nota-legal.jpg","/img/loopbars/caico-cab-quienes-somos-bg.jpg")</script>';
                                break;
                            case "10"://actividades
                                echo '<script type="text/javascript">cargarverde("/img/caico/caico-cab-actividades.jpg","/img/loopbars/caico-cab-actividades-bg.jpg")</script>';
                                break;
                            case "80":
                            case "77":
                            case "12"://colabora
                                echo '<script type="text/javascript">cargarverde("/img/caico/caico-cab-colabora.jpg","/img/loopbars/caico-cab-colabora-bg.jpg")</script>';
                                break;
                            case "16"://contacto
                                echo '<script type="text/javascript">cargarverde("/img/caico/caico-cab-contacto.jpg","/img/loopbars/caico-cab-contacto-bg.jpg")</script>';
                                break;
                            case "31"://eventos
                                echo '<script type="text/javascript">cargarverde("/img/caico/caico-cab-eventos.jpg","/img/loopbars/caico-cab-eventos-bg.jpg")</script>';
                                break;
                            case "72"://quienes somos
                            case "74"://quienes somos
                            case "8"://quienes somos
                                echo '<script type="text/javascript">cargarverde("/img/caico/caico-cab-quienes-somos.jpg","/img/loopbars/caico-cab-quienes-somos-bg.jpg")</script>';
                                break;
                            case "41":
                            case "39":
                            case "82":
                            case "43"://empactiva
                                echo '<script type="text/javascript">cargarverde("/img/caico/caico-cab-colabora-empresa-colaboradora.jpg","/img/loopbars/caico-cab-colabora-empresa-colaboradora-bg.jpg")</script>';
                                break;
                            case "143"://mapa web
                                echo '<script type="text/javascript">cargarverde("/img/caico/caico-cab-mapa-web.jpg","/img/loopbars/caico-cab-quienes-somos-bg.jpg")</script>';
                                break;
                            case "140"://mapa web
                                echo '<script type="text/javascript">cargarverde("/img/caico/caico-cab-politica-privacidad.jpg","/img/loopbars/caico-cab-quienes-somos-bg.jpg")</script>';
                                break;
                            case "275"://fotos
                                echo '<script type="text/javascript">alert("R");cargarverde("/img/caico/caico-cab-fotos.jpg","/img/loopbars/caico-cab-fotos-bg.jpg")</script>';
                                break;
                        }
                    } ?>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<?php endif;?>