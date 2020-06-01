<?php
	/**
	 * 
	 */
	class numeros
	{

		function listar($c1){
			$inf=null;$n=1;
			$inf.='<thead>';
				$inf.='<tr>';
                    $inf.='<th>nrocliente</th>';
					$inf.='<th>nro</th>';
					$inf.='<th>url</th>';
	
				$inf.='</tr>';
			$inf.='</thead>';
			$cant=2;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				$sql="SELECT * FROM numeros; ";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				echo "pre>"; print_r($_SERVER);

				if ($res) {
					if ($res->num_rows > 0) {
						
						while ($row = mysqli_fetch_array($res)) {
							
							require_once('../control/url/link.php');

							$inf.='<tr>';
                         $inf.='<td>'.$row['identificacion'].'</td>';
                         $inf.='<td>'.$row['numeros'].'</td>';
                         $inf.='<td><a href='.$url_larga.'>'.$url_corta.'</td>';
					
								  
								
								
								
							
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
					
					$inf.='<th>identificacion</th>';
					$inf.='<th>numeros</th>';
					
				$inf.='</tr>';
			$inf.='</thead>';
			$cant=15;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				//$sql="SELECT * FROM ".$this->table." ORDER BY id_num DESC; ";
				$sql="SELECT n.identificacion, n.numeros, r.empresa, r.servicio, r.modalidad,
				 r.localidad, r.indicativo, r.bloque, r.resolucion, r.fecha, r.reemplazar_por,
				  r.caracteres, n.identificacion FROM numeros n LEFT JOIN rcompleta r ON n.numeros LIKE r.sin_15 ORDER BY n.identificacion ASC ; ";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							$inf.='<tr>';
								$inf.='<td>'.$n.'</td>';
								$inf.='<td>'.$row['identificacion'].'</td>';
								$inf.='<td>'.$row['numeros'].'</td>';
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
			$inf.='+'.str_replace('$', '', $row['reemplazar_por']).substr($row['numeros'], -2);
								$inf.='</td>';
								$inf.='<td>'.$row['identificacion'].'</td>';
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