<?php
	/**
	 * 
	 */
	class tablacablevision1
	{
		
		//private $tablareferencia2= 'referencia2';

		function listar($c1){
			$inf=null;$n=1;
			$inf.='<thead>';
				$inf.='<tr>';
					//$inf.='<th>N°</th>';
				$inf.='<th>id_orden</th>';
				$inf.='<th>fecha_creacion</th>';
				$inf.='<th>actividad</th>';
				$inf.='<th>cliente</th>';
				$inf.='<th>identificacion</th>';
				$inf.='<th>idd</th>';
				$inf.='<th>nombre_cliente</th>';
				$inf.='<th>direccion</th>';
				$inf.='<th>localidad</th>';
				$inf.='<th>codigo_postal</th>';
				$inf.='<th>numero_serie</th>';
				$inf.='<th>telefono1</th>';
				$inf.='<th>telefono2</th>';
				$inf.='<th>mail</th>';
				$inf.='<th>fecha_de_ingreso</th>';
				$inf.='<th>canal_de_ingreso</th>';
				$inf.='<th>administrador</th>';
				$inf.='<th>id_fecha</th>';
				
		
				$inf.='</tr>';
			$inf.='</thead>';
			$cant=18;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				$sql="SELECT * FROM tablacablevision1; ";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							
							
							$inf.='<tr>';
								//$inf.='<td>'.$n.'</td>';
							$inf.='<td>'.$row['id_orden'].'</td>';
							$inf.='<td>'.$row['fecha_creacion'].'</td>';
							$inf.='<td>'.$row['actividad'].'</td>';
							$inf.='<td>'.$row['cliente'].'</td>';
							$inf.='<td>'.$row['identificacion'].'</td>';
							$inf.='<td>'.$row['idd'].'</td>';
							$inf.='<td>'.$row['nombre_cliente'].'</td>';
							$inf.='<td>'.$row['direccion'].'</td>';
							$inf.='<td>'.$row['localidad'].'</td>';
							$inf.='<td>'.$row['codigo_postal'].'</td>';
							$inf.='<td>'.$row['numero_serie'].'</td>';
							$inf.='<td>'.$row['telefono1'].'</td>';
							$inf.='<td>'.$row['telefono2'].'</td>';
							$inf.='<td>'.$row['mail'].'</td>';
							$inf.='<td>'.$row['fecha_de_ingreso'].'</td>';
							$inf.='<td>'.$row['canal_de_ingreso'].'</td>';
							$inf.='<td>'.$row['administrador'].'</td>';
							$inf.='<td>'.$row['id_fecha'].'</td>';
							
							
								
							$inf.='</tr>';

							$n++;
						}
					}else{
						$inf.='';
					}
				}else{
					$inf.='<tr><td colspan="'.$cant.'"><div clas="alert alert-danger">Error: '.$_SESSION['Mysqli_Error'].'</div></td></tr>';
				}
				
			$inf.='<tbody>';
			mysqli_close($c1);

			return $inf;
		}
		function exportar($c1){
			$inf=null;$n=1;
			$inf.='<thead>';
				$inf.='<tr>';
				$inf.='<th>id_orden</th>';
				$inf.='<th>fecha_creacion</th>';
				$inf.='<th>actividad</th>';
				$inf.='<th>cliente</th>';
				$inf.='<th>identificacion</th>';
				$inf.='<th>idd</th>';
				$inf.='<th>nombre_cliente</th>';
				$inf.='<th>direccion</th>';
				$inf.='<th>localidad</th>';
				$inf.='<th>codigo_postal</th>';
				$inf.='<th>numero_serie</th>';
				$inf.='<th>telefono1</th>';
				$inf.='<th>telefono2</th>';
				$inf.='<th>mail</th>';
				$inf.='<th>fecha_de_ingreso</th>';
				$inf.='<th>canal_de_ingreso</th>';
				$inf.='<th>administrador</th>';
				$inf.='<th>id_fecha</th>';
		
				
			$inf.='</thead>';
			$cant=18;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				//$sql="SELECT * FROM ".$this->table." ORDER BY id_num DESC; ";
				$sql="SELECT * FROM tablacablevision1; ";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							$inf.='<tr>';
							$inf.='<td>'.$row['id_orden'].'</td>';
							$inf.='<td>'.$row['fecha_creacion'].'</td>';
							$inf.='<td>'.$row['actividad'].'</td>';
							$inf.='<td>'.$row['cliente'].'</td>';
							$inf.='<td>'.$row['identificacion'].'</td>';
							$inf.='<td>'.$row['idd'].'</td>';
							$inf.='<td>'.$row['nombre_cliente'].'</td>';
							$inf.='<td>'.$row['direccion'].'</td>';
							$inf.='<td>'.$row['localidad'].'</td>';
							$inf.='<td>'.$row['codigo_postal'].'</td>';
							$inf.='<td>'.$row['numero_serie'].'</td>';
							$inf.='<td>'.$row['telefono1'].'</td>';
							$inf.='<td>'.$row['telefono2'].'</td>';
							$inf.='<td>'.$row['mail'].'</td>';
							$inf.='<td>'.$row['fecha_de_ingreso'].'</td>';
							$inf.='<td>'.$row['canal_de_ingreso'].'</td>';
							$inf.='<td>'.$row['administrador'].'</td>';
							$inf.='<td>'.$row['id_fecha'].'</td>';
							$inf.='</tr>';

							$n++;
						}
					}else{
						$inf.='';
					}
				}else{
					$inf.='<tr><td colspan="'.$cant.'"><div clas="alert alert-danger">Error: '.$_SESSION['Mysqli_Error'].'</div></td></tr>';
				}
			$inf.='<tbody>';
			mysqli_close($c1);
			

			return $inf;
		}
	}
?>