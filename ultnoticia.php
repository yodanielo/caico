<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if ( !defined('ABSPATH') )
    require_once('wp-load.php');

function limitar_letras($str, $n = 500, $end_char = '&#8230;') {
    if (strlen($str) < $n) {
        return $str;
    }

    $str = preg_replace("/\s+/", ' ', str_replace(array("\r\n", "\r", "\n"), ' ', $str));

    if (strlen($str) <= $n) {
        return $str;
    }

    $out = "";
    foreach (explode(' ', trim($str)) as $val) {
        $out .= $val.' ';

        if (strlen($out) >= $n) {
            $out = trim($out);
            return (strlen($out) == strlen($str)) ? $out : $out.$end_char;
        }
    }
}

$pref=$wpdb->prefix;
$sql="select * from ".$pref."posts where post_status='publish' and post_type='post' order by id desc limit 1";
$res=$wpdb->get_results($sql);
if(count($res)>0){
    $cad='<p><a href="/?cat=3">ÚLTIMAS NOTICIAS<br/>'.limitar_letras($res[0]->post_title).'</a></p>';
}
echo $cad;
?>
