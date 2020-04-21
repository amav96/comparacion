<?php
	/** if (strlen($numero)>10
	 * { echo"no valido"
	 * }
	 * 
	 */
	class numeros
	{
		private $table = 'numeros';
		private $table2= 'referencia';
		private $table3= 'referencia2';

		function listar($c1){
			$inf=null;$n=1;
			$inf.='<thead>';
				$inf.='<tr>';
					$inf.='<th>N°</th>';
					$inf.='<th>ID</th>';
					$inf.='<th>Número de Teléfono</th>';
					$inf.='<th>Empresa</th>';
					$inf.='<th>Servicio</th>';
					$inf.='<th>Modalidad</th>';
					$inf.='<th>Localidad</th>';
					$inf.='<th>Indicativo</th>';
					$inf.='<th>Bloque</th>';
					$inf.='<th>Resolución</th>';
					$inf.='<th>A utilizar1</th>';
					$inf.='<th>A utilizar2</th>';
					$inf.='<th>Identificación</th>';
					$inf.='<th>Fecha</th>';
					$inf.='<th>Reemplazar por</th>';
					$inf.='<th>Carácteres</th>';
				$inf.='</tr>';
			$inf.='</thead>';
			$cant=16;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				$sql="SELECT n.id_num, n.telefono, r.empresa, r.servicio,
				 r.modalidad, r.localidad, r.indicativo, r.bloque, r.resolucion,
				  r.fecha, r.reemplazar_por, r.caracteres, n.ident 
				  FROM ".$this->table." n INNER JOIN ".$this->table2." r ON n.buscar
				   LIKE r.sin_15 ORDER BY n.id_num DESC; ";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							$telefono = $row['telefono'];
							$reemplazar_por = $row['reemplazar_por'];
							$inf.='<tr>';
								$inf.='<td>'.$n.'</td>';
								$inf.='<td>'.$row['id_num'].'</td>';
								$inf.='<td>'.$row['telefono'].'</td>';
								$inf.='<td>'.$row['empresa'].'</td>';
								$inf.='<td>'.$row['servicio'].'</td>';
								$inf.='<td>'.$row['modalidad'].'</td>';
								$inf.='<td>'.$row['localidad'].'</td>';
								$inf.='<td>'.$row['indicativo'].'</td>';
								$inf.='<td>'.$row['bloque'].'</td>';
								$inf.='<td>'.$row['resolucion'].'</td>';
								$inf.='<td>';
									$inf.='+'.str_replace('$', '', $reemplazar_por).substr($telefono, -2);
								$inf.='</td>';
									  $inf.='<td>';
									    $inf.='-'.str_replace('$', '', $reemplazar_por).substr($telefono, -2);
									  $inf.='</td>';

								$inf.='<td>'.$row['ident'].'</td>';
								$inf.='<td>'.$row['fecha'].'</td>';
								$inf.='<td>'.$row['reemplazar_por'].'</td>';
								$inf.='<td>'.$row['caracteres'].'</td>';
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
					$inf.='<th>N°</th>';
					$inf.='<th>ID</th>';
					$inf.='<th>Número de Teléfono</th>';
					$inf.='<th>Empresa</th>';
					$inf.='<th>Servicio</th>';
					$inf.='<th>Modalidad</th>';
					$inf.='<th>Localidad</th>';
					$inf.='<th>Indicativo</th>';
					$inf.='<th>Bloque</th>';
					$inf.='<th>Resolución</th>';
					$inf.='<th>Fecha</th>';
					$inf.='<th>Reemplazar por</th>';
					$inf.='<th>Carácteres</th>';
					$inf.='<th>A utilizar</th>';
					$inf.='<th>Identificación</th>';
				$inf.='</tr>';
			$inf.='</thead>';
			$cant=16;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				//$sql="SELECT * FROM ".$this->table." ORDER BY id_num DESC; ";
				$sql="SELECT n.id_num, n.telefono, r.empresa, r.servicio, r.modalidad, r.localidad, r.indicativo, r.bloque, r.resolucion, r.fecha, r.reemplazar_por, r.caracteres, n.ident FROM ".$this->table." n INNER JOIN ".$this->table2." r ON n.buscar LIKE r.sin_15 ORDER BY n.id_num ASC ; ";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							$inf.='<tr>';
								$inf.='<td>'.$n.'</td>';
								$inf.='<td>'.$row['id_num'].'</td>';
								$inf.='<td>'.$row['telefono'].'</td>';
								$inf.='<td>'.$row['empresa'].'</td>';
								$inf.='<td>'.$row['servicio'].'</td>';
								$inf.='<td>'.$row['modalidad'].'</td>';
								$inf.='<td>'.$row['localidad'].'</td>';
								$inf.='<td>'.$row['indicativo'].'</td>';
								$inf.='<td>'.$row['bloque'].'</td>';
								$inf.='<td>'.$row['resolucion'].'</td>';
								$inf.='<td>'.$row['fecha'].'</td>';
								$inf.='<td>'.$row['reemplazar_por'].'</td>';
								$inf.='<td>'.$row['caracteres'].'</td>';
								$inf.='<td>';
									$inf.='+'.str_replace('$', '', $row['reemplazar_por']).substr($row['telefono'], -2);
								$inf.='</td>';
								$inf.='<td>'.$row['ident'].'</td>';
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