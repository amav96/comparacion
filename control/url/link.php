<?php

function acortarurl($url){
    $longitud = strlen($url);
    if($longitud > 45){
        $longitud = $longitud - 30;
        $parte_inicial = substr($url, 0, -$longitud);
        $parte_final = substr($url, -15);
        $nueva_url = $parte_inicial."/".$parte_final;
        return $nueva_url;
    }else{
        return $url;
    }
}


$url_larga = "http://localhost/cliente/control/sms/us.php?iden=$variable&submit=send";
$url_corta = acortarurl($url_larga);

?> 