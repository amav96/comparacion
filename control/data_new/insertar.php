  
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
                print_r($entries);
                    $qtyToInsert = 500;
    $totals = 0;
    // block lo uso para contar cuantos tengo en el bloque actual 
    $block = 0;
    $sqlInsert = "INSERT INTO antina (fecha,abonado,contrato,nombre_del_abonado,tdoc,documento,domicilio,detalle_zona,codigo_postal,localidad,tel_normal_1,tel_normal_2,tel_normal_3,estado,decos1,fecha_asignado_desasignado,asignacion_gsc,deuda,fecinst,decos,tipo,smarts,correo_electronico,tec_ins,des_tec_ins,emp_ins,des_emp_ins,mot_baja,des_mot_baja) VALUES "; 
     
                while (($entries = fgetcsv($handle, 1000,";")) !== FALSE)
                {
                    
    foreach($entries as $entrie) {
        // si no es la primera recuerda agregar una coma
        if($block != 0){
            $sqlInsert .=',';
        } 
        //agregas nueva linea
        $sqlInsert.="( ".$entrie[1].", ".$entrie[2].", ".$entrie[3].", ".$entrie[4].", ".$entrie[5].", ".$entrie[6].", ".$entrie[7].", ".$entrie[8].", ".$entrie[9].", ".$entrie[10].", ".$entrie[11].", ".$entrie[12].", ".$entrie[13].", ".$entrie[14].", ".$entrie[15].", ".$entrie[16].", ".$entrie[17].", ".$entrie[18].", ".$entrie[19].", ".$entrie[20].", ".$entrie[21].", ".$entrie[22].", ".$entrie[23].", ".$entrie[24].", ".$entrie[25].", ".$entrie[26].", ".$entrie[27].", ".$entrie[28].") ";
        print_r($sqlInsert);
        $block++;
        if($block >= $qtyToInsert){
            mysqli_query(conect01(),$sqlInsert);
            // reinicias block 
            $block = 0;
            // reinicias sentencia sql
            $sqlInsert = "INSERT INTO antina (fecha,abonado,contrato,nombre_del_abonado,tdoc,documento,domicilio,detalle_zona,codigo_postal,localidad,tel_normal_1,tel_normal_2,tel_normal_3,estado,decos1,fecha_asignado_desasignado,asignacion_gsc,deuda,fecinst,decos,tipo,smarts,correo_electronico,tec_ins,des_tec_ins,emp_ins,des_emp_ins,mot_baja,des_mot_baja) VALUES ";
        }
        // esto solo es el total de todos 
        $totals++;
    }

    // al salir si hay cosas pendientes ejecutas la ultima - no lo olvides
    if($block > 0){
        mysqli_query(conect01(),$sqlInsert);
    }
                   
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