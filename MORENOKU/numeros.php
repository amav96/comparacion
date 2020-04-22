<?php
	/**
	 * 
	 */
	class numeros
	{
		private $aprocesar = 'numeros';
		private $tablareferencia1= 'referencia';
		private $tablareferencia2= 'referencia2';

		function listar($c1,$c2){
			$inf=null;$n=1;
			$inf.='<thead>';
				$inf.='<tr>';
					//$inf.='<th>N°</th>';
					$inf.='<th>ID</th>';
					$inf.='<th>Número de Teléfono</th>';
					$inf.='<th>Empresa</th>';
					$inf.='<th>Servicio</th>';
					$inf.='<th>Modalidad</th>';
					$inf.='<th>Localidad</th>';
					$inf.='<th>Indicativo</th>';
					$inf.='<th>Bloque</th>';
					$inf.='<th>Resolución</th>';
					$inf.='<th>A utilizar</th>';
					$inf.='<th>Identificación</th>';
					$inf.='<th>Fecha</th>';
					$inf.='<th>Reemplazar por</th>';
					$inf.='<th>Carácteres</th>';
				$inf.='</tr>';
			$inf.='</thead>';
			$cant=15;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				$sql="SELECT DISTINCT n.id_num, n.telefono, r.empresa, r.servicio, r.modalidad, r.localidad,
				 r.indicativo, r.bloque, r.resolucion, r.fecha, r.reemplazar_por, r.caracteres, n.ident
				  FROM ".$this->aprocesar." n LEFT JOIN ".$this->tablareferencia1." r ON n.buscar LIKE r.sin_15 ORDER BY n.id_num ; ";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							$telefono = $row['telefono'];
							$reemplazar_por = $row['reemplazar_por'];
							$inf.='<tr>';
								//$inf.='<td>'.$n.'</td>';
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
				$sql2="SELECT DISTINCT n.id_num, n.telefono, r.empresa, r.servicio, r.modalidad, r.localidad, r.indicativo, r.bloque, r.resolucion,
				 r.fecha, r.reemplazar_por, r.caracteres, n.ident 
				FROM ".$this->aprocesar." n LEFT JOIN ".$this->tablareferencia2." r ON n.buscar_dos LIKE r.sin_15 ORDER BY n.id_num; ";
				$res2 = mysqli_query($c2,$sql2) or $_SESSION['Mysqli_Error'] = (mysqli_error($c2));
				if ($res2) {
					if ($res2->num_rows > 0) {
						while ($row2 = mysqli_fetch_array($res2)) {
							$telefono = $row2['telefono'];
							$reemplazar_por = $row2['reemplazar_por'];
							$inf.='<tr>';
								//$inf.='<td>'.$n.'</td>';
								$inf.='<td>'.$row2['id_num'].'</td>';
								$inf.='<td>'.$row2['telefono'].'</td>';
								$inf.='<td>'.$row2['empresa'].'</td>';
								$inf.='<td>'.$row2['servicio'].'</td>';
								$inf.='<td>'.$row2['modalidad'].'</td>';
								$inf.='<td>'.$row2['localidad'].'</td>';
								$inf.='<td>'.$row2['indicativo'].'</td>';
								$inf.='<td>'.$row2['bloque'].'</td>';
								$inf.='<td>'.$row2['resolucion'].'</td>';
								$inf.='<td>';
									$inf.='+'.str_replace('$', '', $reemplazar_por).substr($telefono, -2);
								$inf.='</td>';
								$inf.='<td>'.$row2['ident'].'</td>';
								$inf.='<td>'.$row2['fecha'].'</td>';
								$inf.='<td>'.$row2['reemplazar_por'].'</td>';
								$inf.='<td>'.$row2['caracteres'].'</td>';
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
			mysqli_close($c2);

			return $inf;
		}
		function exportar($c1,$c2){
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
			$cant=15;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				//$sql="SELECT * FROM ".$this->table." ORDER BY id_num DESC; ";
				$sql="SELECT n.id_num, n.telefono, r.empresa, r.servicio, r.modalidad,
				 r.localidad, r.indicativo, r.bloque, r.resolucion, r.fecha, r.reemplazar_por,
				  r.caracteres, n.ident FROM ".$this->aprocesar." n LEFT JOIN ".$this->tablareferencia1." r ON n.buscar LIKE r.sin_15 ORDER BY n.id_num ASC ; ";
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
				$sql2="SELECT n.id_num, n.telefono, r.empresa, r.servicio, r.modalidad, r.localidad, r.indicativo,
				 r.bloque, r.resolucion, r.fecha, r.reemplazar_por, r.caracteres, n.ident FROM ".$this->aprocesar." n INNER JOIN ".$this->tablareferencia2." r ON n.buscar_dos LIKE r.sin_15 ORDER BY n.id_num ASC ; ";
				$res2 = mysqli_query($c2,$sql2) or $_SESSION['Mysqli_Error'] = (mysqli_error($c2));
				if ($res2) {
					if ($res2->num_rows > 0) {
						while ($row2 = mysqli_fetch_array($res2)) {
							$inf.='<tr>';
								$inf.='<td>'.$n.'</td>';
								$inf.='<td>'.$row2['id_num'].'</td>';
								$inf.='<td>'.$row2['telefono'].'</td>';
								$inf.='<td>'.$row2['empresa'].'</td>';
								$inf.='<td>'.$row2['servicio'].'</td>';
								$inf.='<td>'.$row2['modalidad'].'</td>';
								$inf.='<td>'.$row2['localidad'].'</td>';
								$inf.='<td>'.$row2['indicativo'].'</td>';
								$inf.='<td>'.$row2['bloque'].'</td>';
								$inf.='<td>'.$row2['resolucion'].'</td>';
								$inf.='<td>'.$row2['fecha'].'</td>';
								$inf.='<td>'.$row2['reemplazar_por'].'</td>';
								$inf.='<td>'.$row2['caracteres'].'</td>';
								$inf.='<td>';
									$inf.='+'.str_replace('$', '', $row2['reemplazar_por']).substr($row2['telefono'], -2);
								$inf.='</td>';
								$inf.='<td>'.$row2['ident'].'</td>';
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
			mysqli_close($c2);

			return $inf;
		}
	}
?>