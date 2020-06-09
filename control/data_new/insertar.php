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
     
                while (($data = fgetcsv($handle, 1000, ";")) !== FALSE)
                {
                    
                    
                    $campo1 = $data[0];
                	$campo2 = $data[1];
                    $campo3 = $data[2];
                    $campo4= $data[3];
                    $campo5= $data[4];
                    $campo6= $data[5];
                    $campo7= $data[6];
                    $campo8= $data[7];
                    $campo9= $data[8];
                    $campo10= $data[9];
                    $campo11= $data[10];
                    $campo12= $data[11];
                    $campo13= $data[12];
                    $campo14= $data[13];
                    $campo15= $data[14];
                    $campo16= $data[15];
                    $campo17= $data[16];
                    $campo18= $data[17];
                    $campo19= $data[18];
                    $campo20= $data[19];
                    $campo21= $data[20];
                    $campo22= $data[21];
                    $campo23= $data[22];
                    $campo24= $data[23];
                    $campo25= $data[24];
                    $campo26= $data[25];
                    $campo27= $data[26];
                    $campo28= $data[27];
                    $campo29= $data[28];
                    
                    

                    $sql = "INSERT INTO antina  (fecha,abonado,contrato,nombre_del_abonado,tdoc,documento,domicilio,detalle_zona,codigo_postal,localidad,tel_normal_1,tel_normal_2,tel_normal_3,estado,decos1,fecha_asignado_desasignado,asignacion_gsc,deuda,fecinst,decos,tipo,smarts,correo_electronico,tec_ins,des_tec_ins,emp_ins,des_emp_ins,mot_baja,des_mot_baja) VALUES
                     ('$campo1', '$campo2', '$campo3', '$campo4', '$campo5','$campo6', '$campo7', '$campo8','$campo9', '$campo10', '$campo11', '$campo12', '$campo13', '$campo14', '$campo15', '$campo16', '$campo17', '$campo18', '$campo19', '$campo20', '$campo21', '$campo22', '$campo23', '$campo24', '$campo25', '$campo26', '$campo27', '$campo28', '$campo29') ;";
                    mysqli_query(conect01(),$sql);
                    $row++;
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