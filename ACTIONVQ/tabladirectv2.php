<?php
	$db='database';
	$ru2='../';
	$cl1='tabladirectv2';
	$di1='tabladirectv2/';
	$di2='tabladirectv2/detalle.php';

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
            $fecha_de_ingreso = $_POST['fecha_de_ingreso'];
            $canal_de_ingreso = $_POST['canal_de_ingreso'];
            $administrador = $_POST['administrador'];
            $id_fecha = $_POST['id_fecha'];
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
                    $campo8= $data[8];
                    $campo9= $data[9];
                    $campo10= $data[10];
                    $campo11= $data[11];
                    $campo12 = $data[12];
                	$campo13 = $data[13];
                    $campo14 = $data[14];
                    $campo15= $data[15];
                    $campo16= $data[16];
                    $campo17= $data[17];
                    $campo18= $data[18];
                    $campo19= $data[19];
                    $campo20= $data[20];
                    $campo21= $data[21];
                    $campo22= $data[22];
                    $campo23 = $data[23];
                	$campo24 = $data[24];
                    $campo25 = $data[25];
                    $campo26= $data[26];
                    $campo27= $data[27];
                    $campo28= $data[28];
                    $campo29= $data[29];
                    $campo30= $data[30];
                    $campo31= $data[31];
                    $campo32= $data[32];
                    $campo33= $data[33];
                    $campo34= $data[34];
                	$campo35= $data[35];
                    $campo36= $data[36];
                    $campo37= $data[37];
                    $campo38= $data[38];
                    $campo39= $data[39];
                    $campo40= $data[40];
                    $campo41= $data[41];
                    $campo42= $data[42];
                    $campo43= $data[43];
                    $campo44= $data[44];
                    $campo45= $data[45];
                	$campo46= $data[46];
                    $campo47= $data[47];
                    $campo48= $data[48];
                    $campo49= $data[49];
                    $campo50= $data[50];
                    $campo51= $data[51];
                    $campo52= $data[52];
                    $campo53= $data[53];
                    $campo54= $data[54];
                    $campo55= $data[55];
                    $campo56= $data[56];
                	
                    $sql = "INSERT INTO ".$cl1." (nrocliente,nrowo,wotype,razoncreacion,servicecreacion,subtype,clasificacion,ird_modem,codinstalador,nombreinstalador,codinstaladorpadre,nombreinstaladorpadre,coddealer,nombredealer,codigodealerpadre,dealerpadre,estadowo,fechacreacionwo,fechacumplimiento,fechaultimoagendamiento,fechaultimaasignacion,textbox16,atraso_ct_wo,atraso_ct_sp,acciontomada,fecha_1_pasaje_terminada,estadocliente,tipocliente,apellidonombre,direccionins,extrains,x,y,t,cpins,localidadins,provinciains,telefonoparticularins,telefonolaboralins,faxinstalacion,fax2instalacion,email_inst,direccionfac,extrafac,cpfac,localidadfact,provinciafac,telefonoparticularfac,telefonolaboralfac,faxfac,fax2fac,email_fact,zona,observacion,modelo,nroserie,nrosc,fecha_de_ingreso,canal_de_ingreso,administrador,id_fecha) VALUES ('".$campo0."','".$campo1."', '".$campo2."', '".$campo3."', '".$campo4."', '".$campo5."', '".$campo6."', '".$campo7."', '".$campo8."', '".$campo9."', '".$campo10."', '".$campo11."', '".$campo12."', '".$campo13."', '".$campo14."', '".$campo15."', '".$campo16."', '".$campo17."', '".$campo18."', '".$campo19."', '".$campo20."', '".$campo21."', '".$campo22."', '".$campo23."', '".$campo24."', '".$campo25."', '".$campo26."', '".$campo27."', '".$campo28."', '".$campo29."', '".$campo30."', '".$campo31."', '".$campo32."', '".$campo33."', '".$campo34."', '".$campo35."', '".$campo36."', '".$campo37."', '".$campo38."', '".$campo39."', '".$campo40."', '".$campo41."', '".$campo42."', '".$campo43."', '".$campo44."', '".$campo45."', '".$campo46."', '".$campo47."', '".$campo48."', '".$campo49."', '".$campo50."', '".$campo51."', '".$campo52."', '".$campo53."', '".$campo54."', '".$campo55."', '".$campo56."', '".$fecha_de_ingreso."', '".$canal_de_ingreso."', '".$administrador."', '".$id_fecha."') ;";                       
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