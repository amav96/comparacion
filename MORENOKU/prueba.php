<?php
	/**
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
					$inf.='<th>Tipo</th>';
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
			$cant=16;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				$sql="SELECT n.id_num, n.telefono, r.tipo, r.empresa, r.servicio, r.modalidad, r.localidad, r.indicativo, r.bloque, r.resolucion, r.fecha, r.reemplazar_por, r.caracteres, (rd.tipo) AS tipo2, (rd.empresa) AS empresa2, (rd.servicio) AS servicio2, (rd.modalidad) AS modalidad2, (rd.localidad) AS localidad2, (rd.indicativo) AS indicativo2, (rd.bloque) AS bloque2, (rd.resolucion) AS resolucion2, (rd.fecha) AS fecha2, (rd.reemplazar_por) AS reemplazar_por2, (rd.caracteres) AS caracteres2, n.ident FROM ".$this->table." n LEFT JOIN ".$this->table2." r ON n.buscar LIKE r.sin_15 LEFT JOIN ".$this->table2." rd ON n.buscar_dos LIKE rd.sin_15 ORDER BY n.id_num DESC; ";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							$telefono = $row['telefono'];
							$reemplazar_por = $row['reemplazar_por'];
							$reemplazar_por2 = $row['reemplazar_por2'];
							$inf.='<tr>';
								$inf.='<td>'.$n.'</td>';
								$inf.='<td>'.$row['id_num'].'</td>';
								$inf.='<td>'.$row['telefono'].'</td>';
								$inf.='<td>';
									if (strlen($row['tipo']) > 2) {
										$inf.=$row['tipo'].'<br>';
									}
									if(strlen($row['tipo2']) > 2){
										$inf.=$row['tipo2'];
									}
								$inf.='</td>';
								$inf.='<td>';
									if (strlen($row['empresa']) > 2) {
										$inf.=$row['empresa'].'<br>';
									}
									if(strlen($row['empresa2']) > 2){
										$inf.=$row['empresa2'];
									}
								$inf.='</td>';
								$inf.='<td>';
									if (strlen($row['servicio']) > 2) {
										$inf.=$row['servicio'].'<br>';
									}
									if(strlen($row['servicio2']) > 2){
										$inf.=$row['servicio2'];
									}
								$inf.='</td>';
								$inf.='<td>';
									if (strlen($row['modalidad']) > 2) {
										$inf.=$row['modalidad'].'<br>';
									}
									if(strlen($row['modalidad2']) > 2){
										$inf.=$row['modalidad2'];
									}
								$inf.='</td>';
								$inf.='<td>';
									if (strlen($row['localidad']) > 2) {
										$inf.=$row['localidad'].'<br>';
									}
									if(strlen($row['localidad2']) > 2){
										$inf.=$row['localidad2'];
									}
								$inf.='</td>';
								$inf.='<td>';
									if (strlen($row['indicativo']) > 2) {
										$inf.=$row['indicativo'].'<br>';
									}
									if(strlen($row['indicativo2']) > 2){
										$inf.=$row['indicativo2'];
									}
								$inf.='</td>';
								$inf.='<td>';
									if (strlen($row['bloque']) > 2) {
										$inf.=$row['bloque'].'<br>';
									}
									if(strlen($row['bloque2']) > 2){
										$inf.=$row['bloque2'];
									}
								$inf.='</td>';
								$inf.='<td>';
									if (strlen($row['resolucion']) > 2) {
										$inf.=$row['resolucion'].'<br>';
									}
									if(strlen($row['resolucion2']) > 2){
										$inf.=$row['resolucion2'];
									}
								$inf.='</td>';
								$inf.='<td>';
									if(strlen($reemplazar_por) > 2){
										$inf.='+'.str_replace('$', '', $reemplazar_por).substr($telefono, -2).'<br>';
									}
									if(strlen($reemplazar_por2) > 2){
										$inf.='+'.str_replace('$', '', $reemplazar_por2).substr($telefono, -2);
									}
								$inf.='</td>';
								$inf.='<td>'.$row['ident'].'</td>';
								$inf.='<td>';
									if (strlen($row['fecha']) > 2) {
										$inf.=$row['fecha'].'<br>';
									}
									if(strlen($row['fecha2']) > 2){
										$inf.=$row['fecha2'];
									}
								$inf.='</td>';
								$inf.='<td>';
									if (strlen($row['reemplazar_por']) > 2) {
										$inf.=$row['reemplazar_por'].'<br>';
									}
									if(strlen($row['reemplazar_por2']) > 2){
										$inf.=$row['reemplazar_por2'];
									}
								$inf.='</td>';
								$inf.='<td>';
									if (strlen($row['caracteres']) > 2) {
										$inf.=$row['caracteres'].'<br>';
									}
									if(strlen($row['caracteres2']) > 2){
										$inf.=$row['caracteres2'];
									}
								$inf.='</td>';
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
					$inf.='<th>Tipo</th>';
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
			$cant=16;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				$sql="SELECT n.id_num, n.telefono, r.tipo, r.empresa, r.servicio, r.modalidad, r.localidad, r.indicativo, r.bloque, r.resolucion, r.fecha, r.reemplazar_por, r.caracteres, (rd.tipo) AS tipo2, (rd.empresa) AS empresa2, (rd.servicio) AS servicio2, (rd.modalidad) AS modalidad2, (rd.localidad) AS localidad2, (rd.indicativo) AS indicativo2, (rd.bloque) AS bloque2, (rd.resolucion) AS resolucion2, (rd.fecha) AS fecha2, (rd.reemplazar_por) AS reemplazar_por2, (rd.caracteres) AS caracteres2, n.ident FROM ".$this->table." n LEFT JOIN ".$this->table2." r ON n.buscar LIKE r.sin_15 LEFT JOIN ".$this->table2." rd ON n.buscar_dos LIKE rd.sin_15 ORDER BY n.id_num DESC; ";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							$telefono = $row['telefono'];
							$reemplazar_por = $row['reemplazar_por'];
							$reemplazar_por2 = $row['reemplazar_por2'];
							$inf.='<tr>';
								$inf.='<td>'.$n.'</td>';
								$inf.='<td>'.$row['id_num'].'</td>';
								$inf.='<td>'.$row['telefono'].'</td>';
								$inf.='<td>';
									if (strlen($row['tipo']) > 2) {
										$inf.=$row['tipo'].'<br>';
									}
									if(strlen($row['tipo2']) > 2){
										$inf.=$row['tipo2'];
									}
								$inf.='</td>';
								$inf.='<td>';
									if (strlen($row['empresa']) > 2) {
										$inf.=$row['empresa'].'<br>';
									}
									if(strlen($row['empresa2']) > 2){
										$inf.=$row['empresa2'];
									}
								$inf.='</td>';
								$inf.='<td>';
									if (strlen($row['servicio']) > 2) {
										$inf.=$row['servicio'].'<br>';
									}
									if(strlen($row['servicio2']) > 2){
										$inf.=$row['servicio2'];
									}
								$inf.='</td>';
								$inf.='<td>';
									if (strlen($row['modalidad']) > 2) {
										$inf.=$row['modalidad'].'<br>';
									}
									if(strlen($row['modalidad2']) > 2){
										$inf.=$row['modalidad2'];
									}
								$inf.='</td>';
								$inf.='<td>';
									if (strlen($row['localidad']) > 2) {
										$inf.=$row['localidad'].'<br>';
									}
									if(strlen($row['localidad2']) > 2){
										$inf.=$row['localidad2'];
									}
								$inf.='</td>';
								$inf.='<td>';
									if (strlen($row['indicativo']) > 2) {
										$inf.=$row['indicativo'].'<br>';
									}
									if(strlen($row['indicativo2']) > 2){
										$inf.=$row['indicativo2'];
									}
								$inf.='</td>';
								$inf.='<td>';
									if (strlen($row['bloque']) > 2) {
										$inf.=$row['bloque'].'<br>';
									}
									if(strlen($row['bloque2']) > 2){
										$inf.=$row['bloque2'];
									}
								$inf.='</td>';
								$inf.='<td>';
									if (strlen($row['resolucion']) > 2) {
										$inf.=$row['resolucion'].'<br>';
									}
									if(strlen($row['resolucion2']) > 2){
										$inf.=$row['resolucion2'];
									}
								$inf.='</td>';
								$inf.='<td>';
									if(strlen($reemplazar_por) > 2){
										$inf.='+'.str_replace('$', '', $reemplazar_por).substr($telefono, -2).'<br>';
									}
									if(strlen($reemplazar_por2) > 2){
										$inf.='+'.str_replace('$', '', $reemplazar_por2).substr($telefono, -2);
									}
								$inf.='</td>';
								$inf.='<td>'.$row['ident'].'</td>';
								$inf.='<td>';
									if (strlen($row['fecha']) > 2) {
										$inf.=$row['fecha'].'<br>';
									}
									if(strlen($row['fecha2']) > 2){
										$inf.=$row['fecha2'];
									}
								$inf.='</td>';
								$inf.='<td>';
									if (strlen($row['reemplazar_por']) > 2) {
										$inf.=$row['reemplazar_por'].'<br>';
									}
									if(strlen($row['reemplazar_por2']) > 2){
										$inf.=$row['reemplazar_por2'];
									}
								$inf.='</td>';
								$inf.='<td>';
									if (strlen($row['caracteres']) > 2) {
										$inf.=$row['caracteres'].'<br>';
									}
									if(strlen($row['caracteres2']) > 2){
										$inf.=$row['caracteres2'];
									}
								$inf.='</td>';
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