<?php
	session_start();
	$name='NUMEROS';
    header('Content-language: es');
	header("Content-type: application/vnd.ms-excel" ) ;
	header("Content-Disposition: attachment; filename=".$name.date('His').".xls");

    $rut='../';
    require('../../control/adm_prod/const.php');
    
    //$pid = base64_decode($_REQUEST['pid']);
    //$nam = base64_decode($_REQUEST['nam']);
	require_once('../../control/adm_prod/insertar_antina_sin_prov.php');
	$inf = exportar($rut);
$html='';
	
	$html.= '<meta charset="utf-8" />';
    $html.= '<table border="1" width="100%">';
		$html.= $inf; $inf=null;
    $html.= '</table>';
	$html.= '<br>';

	echo($html);
	
	exit();
?>