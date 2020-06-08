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
		require('../../conectar/database.php');
		require('../../modelo/data_new/listar.php');
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
                    
                    
                    $data1 = $data[0];
                	$data2 = $data[1];
                    $data3 = $data[2];
                    $data4= $data[3];
                    $data5= $data[4];
                    $data6= $data[6];
                    $data7= $data[7];
                    $data8= $data[8];
                    $data9= $data[9];
                    $data10= $data[10];
                    $data11= $data[11];
                    $data12= $data[12];
                    $data13= $data[13];
                    $data14= $data[14];
                    $data15= $data[15];
                    $data16= $data[16];
                    $data17= $data[17];
                    $data18= $data[18];
                    $data19= $data[19];
                    $data20= $data[20];
                    $data21= $data[21];
                    $data22= $data[22];
                    $data23= $data[23];
                    $data24= $data[24];
                    $data25= $data[25];
                    $data26= $data[26];
                    $data27= $data[27];
                    $data28= $data[28];
                    $data29= $data[29];
                    

                    $sql = "INSERT INTO antina  (fecha,
                    abonado,
                    contrato,
                    nombre_del_abonado,
                    tdoc,
                    documento,
                    domicilio,
                    detalle_zona,
                    codigo_postal,
                    localidad,
                    tel_normal_1,
                    tel_normal_2,
                    tel_normal_3,
                    estado,
                    decos1,
                    fecha_asignado_desasignado,
                    asignacion_gsc,
                    deuda,
                    fecinst,
                    decos,
                    tipo,
                    smarts,
                    correo_electronico,
                    tec_ins,
                    des_tec_ins,
                    emp_ins,
                    des_emp_ins,
                    mot_baja,
                    des_mot_baja,
                    ) VALUES
                     ('".$dato1."', '".$dato2."', '".$dato3."', '".$dato4."', '".$dato5."', '".$dato6."'
                     , '".$dato7."', '".$dato8."', '".$dato9."', '".$dato10."', '".$dato11."', '".$dato12."', '".$dato13."'
                     , '".$dato14."', '".$dato15."', '".$dato16."', '".$dato17."', '".$dato18."', '".$dato19."', '".$dato20."'
                     , '".$dato21."', '".$dato22."', '".$dato23."', '".$dato24."', '".$dato25."', '".$dato26."', '".$dato27."',
                     , '".$dato28."', '".$dato29."') ;";
                    mysqli_query(conect01(),$sql);
                    $row++;
                }
                //cerramos la lectura del archivo "abrir archivo" con un "cerrar archivo"
                fclose($handle);
                $_SESSION['stat'] = "import";
                header("Location: ../../vistas/data_new/index.php");
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