<?php

function acortarurl($url){
    $longitud = strlen($url);
    if($longitud > 10){
        $longitud = $longitud - 15;
        $parte_inicial = substr($url, 0, -$longitud);
        $parte_final = substr($url, -15);
        $nueva_url = $parte_inicial."/".$parte_final;
        return $nueva_url;
    }else{
        return $url;
    }
}

session_start();
/*echo "<pre>" ; 
print_r ($_SESSION["identificacion"]);
exit;*/
foreach ($_SESSION["identificacion"] as $key => $value)
{
    echo $value["identificacion"];
}
$variable=$value["identificacion"];
 print_r ($_SESSION["identificacion"]);
$url_larga = "http://localhost/cliente/vistas/sms.php?iden=$variable&submit=send";
$url_corta = acortarurl($url_larga);

?> 