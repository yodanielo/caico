$j=jQuery.noConflict();
jQuery(document).ready(function(){
    //$j('.#nav a[title="Noticias"]').attr("href","http://caico.artesanosdigitales.com/?cat=3");
    /*$j(".dropdown a").each(aqui1).hover(aqui2,aqui1);
    $j(".dropdown .current_page_item a").each(aqui1);*/
    $j("#nav2 img").cambiodeestado("b0-","b1-","src");
});
$j.fn.cambiodeestado=function(desde,hasta,propiedad){
    $j(this).each(function(){
        if($j(this).attr("class")=="selected"){
            a=$j(this).attr(propiedad);
            a=a.split(desde).join(hasta);
            $j(this).attr(propiedad,a);
        }
    });
    $j(this).hover(function(){
        if($j(this).attr("class")!="selected"){
            a=$j(this).attr(propiedad);
            a=a.split(desde).join(hasta);
            $j(this).attr(propiedad,a);
        }
    }, function(){
        if($j(this).attr("class")!="selected"){
            a=$j(this).attr(propiedad);
            a=a.split(hasta).join(desde);
            $j(this).attr(propiedad,a);
        }
    });

}
function aqui1(){
    clase=$j(this).parent().attr("class");
    if(clase.indexOf("current_page_item")==-1 && clase.indexOf("current_page_ancestor")==-1 && clase.indexOf("current_page_parent")==-1){
        aqui=$j(this).attr("title").toString().toLowerCase();
        aqui=aqui.split(" ").join("-");
        $j(this).html('<img src="img/caico/b0-'+aqui+'.gif" />');
    }
    else{
        aqui=$j(this).attr("title").toString().toLowerCase();
        aqui=aqui.split(" ").join("-");
        $j(this).html('<img src="img/caico/b1-'+aqui+'.gif" />');
    }
}
function aqui2(){
    $j(".dropdown .current_page_item a, .dropdown .current_page_ancestor a, .dropdown .current_page_parent a").each(aqui1);
    aqui=$j(this).attr("title").toString().toLowerCase();
    aqui=aqui.split(" ").join("-");
    $j(this).html('<img src="img/caico/b1-'+aqui+'.gif" />');
}
function cargarverde(imagen,miloop){
    $j(".pagetitle").css("background", "url("+imagen+") no-repeat left").html("").height(46);
    $j(".shadow-bottom").css("background", "url("+miloop+") repeat-x left");
}
function cargar_inicio(){
    jQuery(document).ready(function(){
        $j("#slider1").click(function(){
            $j(".shadow-bottom").css({
                "background-color":"#006DB2"
            });
        });
        $j("#slider2").click(function(){
            $j(".shadow-bottom").css({
                "background":"#02319D"
            });
        });
        $j("#slider3").click(function(){
            $j(".shadow-bottom").css({
                "background":"#00A8D7"
            });
        });
    })
}
function cargarempativa(){
    arriba=true;
    jQuery("#aceptocondiciones").css("cursor","pointer");
    jQuery("#aceptocondiciones").click(function(){
        if(arriba==true){
            jQuery("#condicionesup").slideDown(400, function(){});
            arriba=false;
        }else{
            jQuery("#condicionesup").slideUp(400, function(){});
            arriba=true;
        }
    });
    jQuery("#frmdccontacto").formvalidator(function(rpt,mensaje){
        if(rpt==0)
            alert(mensaje);
        else{
            if($j("#dacepto").attr("checked")==true){
                midata="";
                midata+="dcnombre="+$j("#dcnombre").val();
                midata+="&dcape="+$j("#dcape").val();
                midata+="&dctel="+$j("#dctel").val();
                midata+="&dcemail="+$j("#dcemail").val();
                midata+="&dcomentario="+$j("#dccomentario").val();
            
                $j.ajax({
                    async:false,
                    url:"mandaempactiva.php",
                    type:"GET",
                    data:midata,
                    success:function(){
                        alert("Gracias por su colaboración");
                        $(".dcimput").val("");
                    }
                });
            }
            else{
                alert("Debe aceptar las condiciones legales.")
            }
        }
        return false;
    });
}
function carga_activate(){
    arriba=true;
    jQuery("#aceptocondiciones").css("cursor","pointer");
    jQuery("#aceptocondiciones").click(function(){
        if(arriba==true){
            jQuery("#condicionesup").slideDown(400, function(){});
            arriba=false;
        }else{
            jQuery("#condicionesup").slideUp(400, function(){});
            arriba=true;
        }
    });
    jQuery("#frmdccontacto").formvalidator(function(rpt,mensaje){
        if(rpt==0)
            alert(mensaje);
        else{
            if($j("#dacepto").attr("checked")==true){
                midata="";
                midata+="dcnombre="+$j("#dcnombre").val();
                midata+="&dcape="+$j("#dcape").val();
                midata+="&dcdireccion="+$j("#dcdireccion").val();
                midata+="&dctel="+$j("#dctel").val();
                midata+="&dcprov="+$j("#dcprov").val();
                midata+="&dccp="+$j("#dccp").val();
                midata+="&dcemail="+$j("#dcemail").val();
                midata+="&quierodonar="+($j("[name=quierodonar][checked=true]").val()=="Otro importe"?$j("[name=dcotroimporte]").val():$j("[name=quierodonar][checked=true]").val());
                midata+="&caracter="+$j("[name=caracter][checked=true]").val();
                midata+="&dcuenta="+$j("#dcuenta").val();
            
                $j.ajax({
                    async:false,
                    url:"mandaactivate.php",
                    type:"GET",
                    data:midata,
                    success:function(){
                        alert("Gracias por su colaboración");
                        $(".dcimput").val("");
                    }
                });
            }else{
                alert("Debe aceptar las condiciones legales.")
            }
        }
        return false;
    });
}
function carga_famactiva(){
    arriba=true;
    jQuery("#aceptocondiciones").css("cursor","pointer");
    jQuery("#aceptocondiciones").click(function(){
        if(arriba==true){
            jQuery("#condicionesup").slideDown(400, function(){});
            arriba=false;
        }else{
            jQuery("#condicionesup").slideUp(400, function(){});
            arriba=true;
        }
    });
    jQuery("#frmdccontacto").formvalidator(function(rpt,mensaje){
        if(rpt==0)
            alert(mensaje);
        else{
            if($j("#dacepto").attr("checked")==true){
                midata="";
                midata+="dcnombre="+$j("#dcnombre").val();
                midata+="&dcape="+$j("#dcape").val();
                midata+="&dcdireccion="+$j("#dcdireccion").val();
                midata+="&dctel="+$j("#dctel").val();
                midata+="&dcprov="+$j("#dcprov").val();
                midata+="&dccp="+$j("#dccp").val();
                midata+="&dcemail="+$j("#dcemail").val();
                midata+="&donando="+$j("[name=donando][checked=true]").val();
                midata+="&dcuenta="+$j("#dcuenta").val();
            
                $j.ajax({
                    async:false,
                    url:"mandafamactiva.php",
                    type:"GET",
                    data:midata,
                    success:function(){
                        alert("Gracias por su colaboración");
                        $(".dcimput").val("");
                    }
                });
            }
            else{
                alert("Debe aceptar las condiciones legales.")
            }
        }
        return false;
    });
}
jQuery.fn.formvalidator=function(alterminar){
    requerido="requerido";
    email="vemail";
    salto="\n";
    jQuery(this).each(function(){
        jQuery(this).submit(function(){
            mensaje="";
            jQuery(this).find("."+requerido).each(function(){
                if(jQuery(this).val().split(" ").join("")==""){
                    mensaje+="El campo "+jQuery(this).attr("alt")+" es obligatorio."+salto;
                }
            })
            jQuery(this).find("."+email).each(function(){
                mie=jQuery(this).val();
                arroba=mie.indexOf("@");
                punto=mie.indexOf(".");
                len=mie.length;
                if(len>0)
                    if(len<=2 || arroba>punto || arroba==-1 || punto==-1 || arroba==punto-1 || punto>=len-1){
                        mensaje+="El campo "+jQuery(this).attr("alt")+" no es correcto"+salto;
                    }
            })
            if(mensaje!=""){
                alterminar(0,mensaje)
                return false;
            }
            else
                return alterminar(1,mensaje);
        })
    })
}