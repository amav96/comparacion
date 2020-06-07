<?php
	$db='database';
	$ru2='../';
	$cl1='tablaiplan1';
	$di1='tablaiplan1/';
    $di2='iplan1/detalle.php';

	function index($rut){
		global $db, $cl1;
		require($rut.DIRMOR.$db.'.php');
		require($rut.DIRMOR.$cl1.'.php');
		$_db = new $db();
		$_cl1 = new $cl1();

		$inf = $_cl1->listar($_db->conect01(),$_db->conect01());

		return $inf;
	}
	function exportar($rut){
		global $db, $cl1;
		require($rut.DIRMOR.$db.'.php');
		require($rut.DIRMOR.$cl1.'.php');
		$_db = new $db();
		$_cl1 = new $cl1();

		$inf = $_cl1->exportar($_db->conect01(),$_db->conect01());

		return $inf;
	}

    if (isset($_REQUEST['importar'])) {
        session_start();
        require('../Const.php');
        include($ru2.DIRMOR.'funct_conc.php');

        if (isset($_POST['importar'])) {
            $fecha_de_ingreso=$_POST['fecha_de_ingreso'];
            $canal_de_ingreso=$_POST['canal_de_ingreso'];
            $administrador=$_POST['administrador'];
            $id_fecha=$_POST['id_fecha'];
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
                    set_time_limit(300);
                    $campo0 = $data[0];
                    $campo1 = $data[1];
                	$campo2 = $data[2];
                    $campo3 = $data[3];
                    $campo4= $data[4];
                    $campo5= $data[5];
                    $campo6= $data[6];
                    $campo7= $data[7];
                    
                    
                    
                    
                	
$sql = "INSERT INTO tablaiplan1 (mes,nro_cliente,cliente,nombre,apellido,email,telefono,rol,fecha_de_ingreso,canal_de_ingreso,administrador,id_fecha) VALUES ('".$campo0."','".$campo1."', '".$campo2."', '".$campo3."', '".$campo4."', '".$campo5."', '".$campo6."', '".$campo7."','".$fecha_de_ingreso."','".$canal_de_ingreso."', '".$administrador."', '".$id_fecha."') ;";                    
mysqli_query(conect01(),$sql);

                    $row++;
                }
                //cerramos la lectura del archivo "abrir archivo" con un "cerrar archivo"
                fclose($handle);
                $_SESSION['stat'] = "import";
                header("Location: ".URL.$di1);
                exit();
             }
             else
             {
                //si aparece esto es posible que el archivo no tenga el formato adecuado, inclusive cuando es cvs, revisarlo para             
                //ver si esta separado por " ; "
                $_SESSION['stat'] = "noimport";
                header("Location: ".URL.$di1);
                exit();
             }
        }
        exit();
    }

?>