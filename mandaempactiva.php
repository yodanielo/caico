<?php

    $mensaje="<strong>Caíco</strong>";
    $mensaje.='<table width="200">';
    $mensaje.='<tr><td><strong>Nombre</strong></td><td>'.$_GET["dcnombre"].'</td></tr>';
    $mensaje.='<tr><td><strong>Apellidos</strong></td><td>'.$_GET["dcape"].'</td></tr>';
    $mensaje.='<tr><td><strong>Tel&eacute;fono</strong></td><td>'.$_GET["dctel"].'</td></tr>';
    $mensaje.='<tr><td><strong>Email</strong></td><td>'.$_GET["dcemail"].'</td></tr>';
    $mensaje.='<tr><td><strong>Comentario</strong></td><td>'.$_GET["dccomentario"].'</td></tr>';
    $mensaje.='</table>';
    enviarmail("info@fundacioncaico.org", "info@fundacioncaico.org", "Empactiva", $mensaje);

function enviarmail($de,$para,$asunto,$mensaje) {
    $eol="\r\n";
    $now = mktime().".".md5(rand(1000,9999));
    $headers = "From:".$de.$eol."To:".$para.$eol;
    $headers .= 'Return-Path: '.$de.'<'.$de.'>'.$eol;
    $headers .= "Message-ID: <".$now." TheSystem@".$_SERVER['SERVER_NAME'].">".$eol;
    $headers .= "X-Mailer: PHP v".phpversion().$eol;
    $headers .= "Content-Type: text/html; charset=iso-8859-1".$eol;
    $resultado=mail($para, $asunto, $mensaje, $headers);
    return $resultado;
}
?>
