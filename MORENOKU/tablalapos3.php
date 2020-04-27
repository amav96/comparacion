<?php
	/**
	 * 
	 */
	class tablalapos3
	{
		
		//private $tablareferencia2= 'referencia2';

		function listar($c1){
			$inf=null;$n=1;
			$inf.='<thead>';
				$inf.='<tr>';
					//$inf.='<th>N°</th>';
					$inf.='<th>nro_terminal</th>';
					$inf.='<th>modelo</th>';
					$inf.='<th>serv_tecnico</th>';
					$inf.='<th>tipo_inactividad</th>';
					$inf.='<th>tipo_inactividad_establecimiento</th>';
					$inf.='<th>provincia</th>';
					$inf.='<th>localidad</th>';
					$inf.='<th>cp</th>';
					$inf.='<th>acepta_liquidacion</th>';
					$inf.='<th>cdomiciliocalle</th>';
					$inf.='<th>telefono_host</th>';
                    $inf.='<th>telefono_ater</th>';
                    $inf.='<th>bonificada</th>';
                    $inf.='<th>separar_por_segmento</th>';
                    $inf.='<th>cuit</th>';
                    $inf.='<th>deno</th>';
                    $inf.='<th>rsocial</th>';
                    $inf.='<th>fecha_de_ingreso</th>';
                    $inf.='<th>canal_de_ingreso</th>';
                    $inf.='<th>administrador</th>';
                    $inf.='<th>id_fecha</th>';
					
					
					
					
	
				$inf.='</tr>';
			$inf.='</thead>';
			$cant=12;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				$sql="SELECT * FROM tablalapos3; ";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							
							
							$inf.='<tr>';
								//$inf.='<td>'.$n.'</td>';
								$inf.='<td>'.$row['nro_terminal'].'</td>';
								$inf.='<td>'.$row['modelo'].'</td>';
								$inf.='<td>'.$row['serv_tecnico'].'</td>';
								$inf.='<td>'.$row['tipo_inactividad'].'</td>';
								$inf.='<td>'.$row['tipo_inactividad_establecimiento'].'</td>';
								$inf.='<td>'.$row['provincia'].'</td>';
								$inf.='<td>'.$row['localidad'].'</td>';
								$inf.='<td>'.$row['cp'].'</td>';
								$inf.='<td>'.$row['acepta_liquidacion'].'</td>';
								$inf.='<td>'.$row['cdomiciliocalle'].'</td>';
								$inf.='<td>'.$row['telefono_host'].'</td>';
                                $inf.='<td>'.$row['telefono_ater'].'</td>';
                                $inf.='<td>'.$row['bonificada'].'</td>';
                                $inf.='<td>'.$row['separar_por_segmento'].'</td>';
                                $inf.='<td>'.$row['cuit'].'</td>';
                                $inf.='<td>'.$row['deno'].'</td>';
                                $inf.='<td>'.$row['rsocial'].'</td>';
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
            $inf.='<th>nro_terminal</th>';
            $inf.='<th>modelo</th>';
            $inf.='<th>serv_tecnico</th>';
            $inf.='<th>tipo_inactividad</th>';
            $inf.='<th>tipo_inactividad_establecimiento</th>';
            $inf.='<th>provincia</th>';
            $inf.='<th>localidad</th>';
            $inf.='<th>cp</th>';
            $inf.='<th>acepta_liquidacion</th>';
            $inf.='<th>cdomiciliocalle</th>';
            $inf.='<th>telefono_host</th>';
            $inf.='<th>telefono_ater</th>';
            $inf.='<th>bonificada</th>';
            $inf.='<th>separar_por_segmento</th>';
            $inf.='<th>cuit</th>';
            $inf.='<th>deno</th>';
            $inf.='<th>rsocial</th>';
            $inf.='<th>fecha_de_ingreso</th>';
            $inf.='<th>canal_de_ingreso</th>';
            $inf.='<th>administrador</th>';
            $inf.='<th>id_fecha</th>';
				
				$inf.='</tr>';
			$inf.='</thead>';
			$cant=12;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				//$sql="SELECT * FROM ".$this->table." ORDER BY id_num DESC; ";
				$sql="SELECT * from tablalapos3";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							$inf.='<tr>';
							$inf.='<td>'.$row['nro_terminal'].'</td>';
								$inf.='<td>'.$row['modelo'].'</td>';
								$inf.='<td>'.$row['serv_tecnico'].'</td>';
								$inf.='<td>'.$row['tipo_inactividad'].'</td>';
								$inf.='<td>'.$row['tipo_inactividad_establecimiento'].'</td>';
								$inf.='<td>'.$row['provincia'].'</td>';
								$inf.='<td>'.$row['localidad'].'</td>';
								$inf.='<td>'.$row['cp'].'</td>';
								$inf.='<td>'.$row['acepta_liquidacion'].'</td>';
								$inf.='<td>'.$row['cdomiciliocalle'].'</td>';
								$inf.='<td>'.$row['telefono_host'].'</td>';
                                $inf.='<td>'.$row['telefono_ater'].'</td>';
                                $inf.='<td>'.$row['bonificada'].'</td>';
                                $inf.='<td>'.$row['separar_por_segmento'].'</td>';
                                $inf.='<td>'.$row['cuit'].'</td>';
                                $inf.='<td>'.$row['deno'].'</td>';
                                $inf.='<td>'.$row['rsocial'].'</td>';
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