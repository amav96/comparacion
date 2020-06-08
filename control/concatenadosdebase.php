Ahí, debes convertir la 
cadena de texto o numero según corresponda, si es menor o
 igual a 6, tomas la cadena completa, luego usas esa cadena para
  buscar por like
 Si es mayor a 6, solo 
tomas los seis caracteres iniciales y buscas con like
 Si es mayor a 6, solo tomas los seis caracteres iniciales y buscas con like
En php es con substr
Parte de la posición 0 y terminas en este caso en la 5

$variable = strlen($posibleReferencia);
If ($variable<=6){
// captura cadena completa
} else {
$posibleReferenciaNew=substr($posibleReferencia,0,6); 


}


'".$nrocliente."',
                      '".$nrowo."', 
                      '".$wotype."', 
                      '".$razoncreacion."', 
                      '".$servicecreacion.", 
                      '".$subtype."', 
                      '".$clasificacion."', 
                      '".$ird_modem."', 
                      '".$codinstalador."', 
                      '".$nombreinstalador."', 
                      '".$codinstaladorpadre."', 
                      '".$nombreinstaladorpadre."', 
                      '".$coddealer."', 
                      '".$nombredealer."', 
                      '".$codigodealerpadre.", 
                      '".$dealerpadre."', 
                      '".$estadowo."', 
                      '".$fechacreacionwo."', 
                      '".$fechacumplimiento."', 
                      '".$fechaultimoagendamiento."', 
                      '".$fechaultimaasignacion."', 
                      '".$textbox16."', 
                      '".$atraso_ct_wo."', 
                      '".$atraso_ct_sp."', 
                      '".$acciontomada."',
                      '".$fecha_1_pasaje_terminada."', 
                      '".$estadocliente."', 
                      '".$tipocliente."', 
                      '".$apellidonombre."', 
                      '".$direccionins."', 
                      '".$extrains."', 
                      '".$x."', 
                      '".$y."', 
                      '".$t."', 
                      '".$cpins."', 
                      '".$localidadins."', 
                      '".$provinciains."', 
                      '".$telefonoparticularins."', 
                      '".$telefonolaboralins."', 
                      '".$faxinstalacion."', 
                      '".$fax2instalacion."', 
                      '".$email_inst."', 
                      '".$direccionfac."', 
                      '".$extrafac."', 
                      '".$cpfac."', 
                      '".$localidadfact."', 
                      '".$provinciafac."', 
                      '".$telefonoparticularfac."', 
                      '".$telefonolaboralfac."', 
                      '".$faxfac."', 
                      '".$fax2fac."', 
                      '".$email_fact."', 
                      '".$zona."', 
                      '".$observacion."', 
                      '".$modelo."', 
                      '".$nroserie."', 
                      '".$nrosc."') ;";