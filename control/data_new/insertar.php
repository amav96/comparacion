  
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
                    $qtyToInsert =100;
    $totals = 0;
    // block lo uso para contar cuantos tengo en el bloque actual 
    $block = 0;
    $sqlInsert = "INSERT INTO express (id,cod_empresa,tipo,empresa,equipo,tarjeta,serie,idd,id_orden,id_actividad,identificacion,nombre_cliente,direccion,localidad,codigo_postal,provincia,fecha_creacion,telefono1,telefono2,fecha_de_envio,cartera,baja,id_fecha_recolector,remito_rend,remito_cv,fecha_rend_cv,id_operador_ren,id_motivo_ren,master_box,id_operador,fecha,id_motivo,tabla_oper,MULTIPLES,cable_hdmi,cable_av,fuente,control_1,email_enviado,otros,remito_sub,fecha_remito_sub,fecha_asignado,id_recolector,operador,sub_asignado,ciclo,zona,fecha_premio,mes_base,R1,R2,R3,tipo_de_recupero,semanas,ano_semana,fecha_de_liquidacion,hist_pactados,latitude,longitude) VALUES "; 
     
                while (($entrie = fgetcsv($handle,1000,";")) !== FALSE)
                {
                    
    
        // si no es la primera recuerda agregar una coma
        if($block != 0){
            $sqlInsert .=',';
        } 
        //agregas nueva linea
        $sqlInsert.="( '".$entrie[0]."','".$entrie[1]."', '".$entrie[2]."', '".$entrie[3]."', '".$entrie[4]."', '".$entrie[5]."', '".$entrie[6]."', '".$entrie[7]."', '".$entrie[8]."', '".$entrie[9]."', '".$entrie[10]."', '".$entrie[11]."', '".$entrie[12]."', '".$entrie[13]."', '".$entrie[14]."', '".$entrie[15]."', '".$entrie[16]."', '".$entrie[17]."', '".$entrie[18]."', '".$entrie[19]."', '".$entrie[20]."', '".$entrie[21]."', '".$entrie[22]."', '".$entrie[23]."', '".$entrie[24]."', '".$entrie[25]."', '".$entrie[26]."', '".$entrie[27]."', '".$entrie[28]."', '".$entrie[29]."', '".$entrie[30]."', '".$entrie[31]."', '".$entrie[32]."', '".$entrie[33]."', '".$entrie[34]."', '".$entrie[35]."', '".$entrie[36]."', '".$entrie[37]."', '".$entrie[38]."', '".$entrie[39]."', '".$entrie[40]."', '".$entrie[41]."', '".$entrie[42]."', '".$entrie[43]."', '".$entrie[44]."', '".$entrie[45]."', '".$entrie[46]."', '".$entrie[47]."', '".$entrie[48]."', '".$entrie[49]."', '".$entrie[50]."', '".$entrie[51]."', '".$entrie[52]."', '".$entrie[53]."', '".$entrie[54]."', '".$entrie[55]."', '".$entrie[56]."', '".$entrie[57]."', '".$entrie[58]."', '".$entrie[59]."') ";
        
        $block++;
        if($block>=$qtyToInsert){
            mysqli_query(conect01(),$sqlInsert);
            // reinicias block 
            $block = 0;
            // reinicias sentencia sql
            $sqlInsert = "INSERT INTO express (id,cod_empresa,tipo,empresa,equipo,tarjeta,serie,idd,id_orden,id_actividad,identificacion,nombre_cliente,direccion,localidad,codigo_postal,provincia,fecha_creacion,telefono1,telefono2,fecha_de_envio,cartera,baja,id_fecha_recolector,remito_rend,remito_cv,fecha_rend_cv,id_operador_ren,id_motivo_ren,master_box,id_operador,fecha,id_motivo,tabla_oper,MULTIPLES,cable_hdmi,cable_av,fuente,control_1,email_enviado,otros,remito_sub,fecha_remito_sub,fecha_asignado,id_recolector,operador,sub_asignado,ciclo,zona,fecha_premio,mes_base,R1,R2,R3,tipo_de_recupero,semanas,ano_semana,fecha_de_liquidacion,hist_pactados,latitude,longitude) VALUES ";
        }
        // esto solo es el total de todos 
        $totals++;
        
    

    // al salir si hay cosas pendientes ejecutas la ultima - no lo olvides
    
                   
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
        }
        exit();
    }

?>