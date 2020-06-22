  
<?php
    $db='database';
    $cl1='numeros'; //esta es la clase que LISTA los numeros
    $di1='vistas/adm_prod/marco.php/';
    $di2='numeros/detalle.php';

    function index($rut){
        global $db, $cl1;
        require('../../conectar/database.php');
        require('../../model/adm_prod/listar_antina_sin_prov.php');
        $_db = new $db();
        $_cl1 = new $cl1();

        $inf = $_cl1->listar($_db->conect01(),$_db->conect01());

        return $inf;
    }
    function clean($str) //$str es el string con el que trabajamos. lo metemos en el ()
     {
        $unwanted_array_matriz_no_deseada = array(
            "'"=>'', ','=>'.'
          );
          
          return strtr($str, $unwanted_array_matriz_no_deseada ); //$str es el string con el que trabajamos
        }
        
    function exportar($rut){
        global $db, $cl1;
        require('../../conectar/database.php');
        require('../../model/adm_prod/listar_antina_sin_prov.php');
        $_db = new $db();
        $_cl1 = new $cl1();

        $inf = $_cl1->exportar($_db->conect01(),$_db->conect01());

        return $inf;
    }

    if (isset($_REQUEST['importar'])) {
        session_start();
        require('../../control/adm_prod/const.php');
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
                    $qtyToInsert =1500;
    $totals = 0;
    // block lo uso para contar cuantos tengo en el bloque actual 
    $block = 0;
    $sqlInsert = "INSERT INTO antina (fecha,abonado,contrato,nombre_del_abonado,tdoc,documento,domicilio,detalle_zona,codigo_postal,localidad,tel_normal_1,tel_normal_2,tel_normal_3,estado,decos1,fecha_asignado_desasignado,asignacion_gsc,deuda,fecinst,decos,tipo,smarts,correo_electronico,tec_ins,des_tec_ins,emp_ins,des_emp_ins,mot_baja,des_mot_baja) VALUES "; 
    
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
        ."') ";

        
        
        $block++;
        if($block >=$qtyToInsert){
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
        //echo $sqlInsert;
        $insertNumber++;
    }
    echo "<br><br>Bloques insertados ".$insertNumber." Lineas ".$entries;
                   
                }
                //cerramos la lectura del archivo "abrir archivo" con un "cerrar archivo"
                fclose($handle);
                $_SESSION['stat'] = "import";
                header("Location:../../vistas/adm_prod/marco_antina_sin_prov.php");
                exit();
                
             }
             else
             {
                //si aparece esto es posible que el archivo no tenga el formato adecuado, inclusive cuando es cvs, revisarlo para             
                //ver si esta separado por " ; "
                $_SESSION['stat'] = "noimport";
                header("Location:../../vistas/adm_prod/marco_antina_sin_prov.php");
                exit();
             }
        
        exit();
    }
    

?>