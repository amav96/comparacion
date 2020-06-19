  
<?php
    $db='database';
    $cl1='numeros'; //esta es la clase que LISTA los numeros
    $di1='vistas/data_new/index.php/';
    $di2='numeros/detalle.php';

    function index($rut){
        global $db, $cl1;
        require('../../conectar/database.php');
        require('../../modelo/data_new/listar.php');
        $_db = new $db();
        $_cl1 = new $cl1();

        $inf = $_cl1->listar($_db->conect01(),$_db->conect01());

        return $inf;
    }
    function clean($str) {
        $unwanted_array = array(
            "'"=>'', ','=>'.'
          );
          
          return strtr($str, $unwanted_array );
    }
    function exportar($rut){
        global $db, $cl1;
        require('../conectar/database.php');
        require('../modelo/data_new/listar.php');
        $_db = new $db();
        $_cl1 = new $cl1();

        $inf = $_cl1->exportar($_db->conect01(),$_db->conect01());

        return $inf;
    }

    if (isset($_REQUEST['importar'])) {
        session_start();
        require('../../const.php');
        include('../../conectar/funct_conc.php');

        if (isset($_POST['importar'])) {
            //conexiones, conexiones everywhere
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
            mysqli_report(MYSQLI_REPORT_ERROR);
            $row=1;
            

            //Aquí es donde seleccionamos nuestro csv
             $fname = $_FILES['sel_file']['name'];
             echo 'Cargando nombre del archivo: '.$fname.' <br>';
             $chk_ext = explode(".",$fname);
     
             if(strtolower(end($chk_ext)) == "csv")
             {
                //si es correcto, entonces damos permisos de lectura para subir
                $filename = $_FILES['sel_file']['tmp_name'];
                $handle = fopen($filename, "r");
        // la cantidad del bloque *- prueba con un archivo de 50 lineas y prueba colocando 10 a ver si todo va como quieres. 
        
                    $qtyToInsert =1500;
    $totals = 0;
    // block lo uso para contar cuantos tengo en el bloque actual 
    $block = 0;
    $sqlInsert = "INSERT INTO express (id,cod_empresa,tipo,empresa,equipo,tarjeta,serie,idd,id_orden,id_actividad,identificacion,nombre_cliente,direccion,localidad,codigo_postal,provincia,fecha_creacion,telefono1,telefono2,fecha_de_envio,cartera,baja,id_fecha_recolector,remito_rend,remito_cv,fecha_rend_cv,id_operador_ren,id_motivo_ren,master_box,id_operador,fecha,id_motivo,tabla_oper,MULTIPLES,cable_hdmi,cable_av,fuente,control_1,email_enviado,otros,remito_sub,fecha_remito_sub,fecha_asignado,id_recolector,operador,sub_asignado,ciclo,zona,fecha_premio,mes_base,R1,R2,R3,tipo_de_recupero,semanas,ano_semana,fecha_de_liquidacion,hist_pactados,latitude,longitude) VALUES "; 
    
    
    
    $insertNumber = 0; 
    $entries = 0;
    while (($entrie = fgetcsv($handle,9999,";")) !== FALSE)
    {
        //echo json_encode($entrie)."<br><br>";                   
        $entries++;
        // si no es la primera recuerda agregar una coma
        if($block != 0){
            $sqlInsert .=',';
        } 
        //agregas nueva linea
        $sqlInsert.="( '".
        clean($entrie[0])
        ."', '".clean($entrie[1])
        ."', '".clean($entrie[2])
        ."', '".clean($entrie[3])
        ."', '".clean($entrie[4])
        ."', '".clean($entrie[5])
        ."', '".clean($entrie[6])
        ."', '".clean($entrie[7])
        ."', '".clean($entrie[8])
        ."', '".clean($entrie[9])
        ."', '".clean($entrie[10])
        ."', '".clean($entrie[11])
        ."', '".clean($entrie[12])
        ."', '".clean($entrie[13])
        ."', '".clean($entrie[14])
        ."', '".clean($entrie[15])
        ."', '".clean($entrie[16])
        ."', '".clean($entrie[17])
        ."', '".clean($entrie[18])
        ."', '".clean($entrie[19])
        ."', '".clean($entrie[20])
        ."', '".clean($entrie[21])
        ."', '".clean($entrie[22])
        ."', '".clean($entrie[23])
        ."', '".clean($entrie[24])
        ."', '".clean($entrie[25])
        ."', '".clean($entrie[26])
        ."', '".clean($entrie[27])
        ."', '".clean($entrie[28])
        ."', '".clean($entrie[29])
        ."', '".clean($entrie[30])
        ."', '".clean($entrie[31])
        ."', '".clean($entrie[32])
        ."', '".clean($entrie[33])
        ."', '".clean($entrie[34])
        ."', '".clean($entrie[35])
        ."', '".clean($entrie[36])
        ."', '".clean($entrie[37])
        ."', '".clean($entrie[38])
        ."', '".clean($entrie[39])
        ."', '".clean($entrie[40])
        ."', '".clean($entrie[41])
        ."', '".clean($entrie[42])
        ."', '".clean($entrie[43])
        ."', '".clean($entrie[44])
        ."', '".clean($entrie[45])
        ."', '".clean($entrie[46])
        ."', '".clean($entrie[47])
        ."', '".clean($entrie[48])
        ."', '".clean($entrie[49])
        ."', '".clean($entrie[50])
        ."', '".clean($entrie[51])
        ."', '".clean($entrie[52])
        ."', '".clean($entrie[53])
        ."', '".clean($entrie[54])
        ."', '".clean($entrie[55])
        ."', '".clean($entrie[56])
        ."', '".clean($entrie[57])
        ."', '".clean($entrie[58])
        ."', '".clean($entrie[59])
        ."') ";
        
        $block++;
        if($block>=$qtyToInsert){
            mysqli_query(conect01(),$sqlInsert);
            // echo $sqlInsert;
            
            $insertNumber++;
            // reinicias block 
            $block = 0;
            // reinicias sentencia sql
            $sqlInsert = "INSERT INTO express (id,cod_empresa,tipo,empresa,equipo,tarjeta,serie,idd,id_orden,id_actividad,identificacion,nombre_cliente,direccion,localidad,codigo_postal,provincia,fecha_creacion,telefono1,telefono2,fecha_de_envio,cartera,baja,id_fecha_recolector,remito_rend,remito_cv,fecha_rend_cv,id_operador_ren,id_motivo_ren,master_box,id_operador,fecha,id_motivo,tabla_oper,MULTIPLES,cable_hdmi,cable_av,fuente,control_1,email_enviado,otros,remito_sub,fecha_remito_sub,fecha_asignado,id_recolector,operador,sub_asignado,ciclo,zona,fecha_premio,mes_base,R1,R2,R3,tipo_de_recupero,semanas,ano_semana,fecha_de_liquidacion,hist_pactados,latitude,longitude) VALUES ";            
        }
        // esto solo es el total de todos 
        $totals++;
    }

    // al salir si hay cosas pendientes ejecutas la ultima - no lo olvides
    if($block > 0){
        mysqli_query(conect01(),$sqlInsert);
        //echo $sqlInsert;
        $insertNumber++;
    }
    echo "<br><br>Bloques insertados ".$insertNumber." Lineas ".$entries;
                   
                }
                //cerramos la lectura del archivo "abrir archivo" con un "cerrar archivo"
                fclose($handle);
                $_SESSION['stat'] = "import";
                header("Location:../../vistas/data_new/index.php");
                exit();
                
             }
             else
             {
                //si aparece esto es posible que el archivo no tenga el formato adecuado, inclusive cuando es cvs, revisarlo para             
                //ver si esta separado por " ; "
                $_SESSION['stat'] = "noimport";
                header("Location:../../vistas/data_new/index.php");
                exit();
             }
        
        exit();
    }
    

?>