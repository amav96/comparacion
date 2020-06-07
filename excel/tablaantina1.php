<?php
	session_start();
	$name='Base de datos Antina';
    header('Content-language: es');
	header("Content-type: application/vnd.ms-excel" ) ;
	header("Content-Disposition: attachment; filename=".$name.date('His').".xls");

    $rut='../';
    $ac1='tablaantina1';
    require($rut.'const.php');
    $pid=0;$nam='Tabla 1 Antina';
    //$pid = base64_decode($_REQUEST['pid']);
    //$nam = base64_decode($_REQUEST['nam']);
	require_once($rut.DIRACT.$ac1.'.php');
	$inf = exportar($rut);

	$html='';
	
	$html.= '<meta charset="utf-8" />';
    $html.= '<table border="0" width="100%">';
    	$html.= '<tr>';
    		$html.= '<td align="center" colspan="'.$_SESSION['Cant_Col'].'"><h3>'.$nam.' App.</h3></td>';
    	$html.= '</tr>';
    $html.= '</table>';
	$html.= '<br>';
	$html.= '<br>';
    $html.= '<table border="1" width="100%">';
		$html.= $inf; $inf=null;
    $html.= '</table>';
	$html.= '<br>';

	echo($html);
	
	exit();
?>