<?php
	/**
	 * 
	 */
	class tablaintv1
	{
		
		//private $tablareferencia2= 'referencia2';

		function listar($c1){
			$inf=null;$n=1;
			$inf.='<thead>';
				$inf.='<tr>';
					//$inf.='<th>N°</th>';
                    $inf.='<th>id_orden</th>';
                    $inf.='<th>tipo</th>';
                    $inf.='<th>estado</th>';
                    $inf.='<th>fecha_solicitud</th>';
                    $inf.='<th>f_agenda</th>';
                    $inf.='<th>f_cumplim</th>';
                    $inf.='<th>cliente</th>';
                    $inf.='<th>codigo_cliente</th>';
                    $inf.='<th>apellido</th>';
                    $inf.='<th>nombre</th>';
                    $inf.='<th>email</th>';
                    $inf.='<th>calle_y_numero</th>';
                    $inf.='<th>observaciones_domicilio</th>';
                    $inf.='<th>area_te_1</th>';
                    $inf.='<th>telef_1</th>';
                    $inf.='<th>area_te_2</th>';
                    $inf.='<th>telef_2</th>';
                    $inf.='<th>promotor</th>';
                    $inf.='<th>localidad</th>';
                    $inf.='<th>provincia</th>';
                    $inf.='<th>agencia_venta</th>';
                    $inf.='<th>agencia_tecnica</th>';
                    $inf.='<th>plan_de_venta</th>';
                    $inf.='<th>motivo_desconexion</th>';
                    $inf.='<th>motivo_anulacion</th>';
                    $inf.='<th>usuario_grab_cumpl</th>';
                    $inf.='<th>observaciones</th>';
                    $inf.='<th>disp_retirado</th>';
					$inf.='<th>disp_instalado</th>';
					$inf.='<th>Fecha de ingreso</th>';
                    $inf.='<th>Canal de ingreso</th>';
                    $inf.='<th>Operador</th>';
                    
					
					
					
					
					
					
				$inf.='</tr>';
			$inf.='</thead>';
			$cant=32;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				$sql="SELECT * FROM tablaintv1; ";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							
							
							$inf.='<tr>';
								//$inf.='<td>'.$n.'</td>';
                                $inf.='<td>'.$row['id_orden'].'</td>';
                                $inf.='<td>'.$row['tipo'].'</td>';
                                $inf.='<td>'.$row['estado'].'</td>';
                                $inf.='<td>'.$row['fecha_solicitud'].'</td>';
                                $inf.='<td>'.$row['f_agenda'].'</td>';
                                $inf.='<td>'.$row['f_cumplim'].'</td>';
                                $inf.='<td>'.$row['cliente'].'</td>';
                                $inf.='<td>'.$row['codigo_cliente'].'</td>';
                                $inf.='<td>'.$row['apellido'].'</td>';
                                $inf.='<td>'.$row['nombre'].'</td>';
                                $inf.='<td>'.$row['email'].'</td>';
                                $inf.='<td>'.$row['calle_y_numero'].'</td>';
                                $inf.='<td>'.$row['observaciones_domicilio'].'</td>';
                                $inf.='<td>'.$row['area_te_1'].'</td>';
                                $inf.='<td>'.$row['telef_1'].'</td>';
                                $inf.='<td>'.$row['area_te_2'].'</td>';
                                $inf.='<td>'.$row['telef_2'].'</td>';
                                $inf.='<td>'.$row['promotor'].'</td>';
                                $inf.='<td>'.$row['localidad'].'</td>';
                                $inf.='<td>'.$row['provincia'].'</td>';
                                $inf.='<td>'.$row['agencia_venta'].'</td>';
                                $inf.='<td>'.$row['agencia_tecnica'].'</td>';
                                $inf.='<td>'.$row['plan_de_venta'].'</td>';
                                $inf.='<td>'.$row['motivo_desconexion'].'</td>';
                                $inf.='<td>'.$row['motivo_anulacion'].'</td>';
                                $inf.='<td>'.$row['usuario_grab_cumpl'].'</td>';
                                $inf.='<td>'.$row['observaciones'].'</td>';
                                $inf.='<td>'.$row['disp_retirado'].'</td>';
								$inf.='<td>'.$row['disp_instalado'].'</td>';
								$inf.='<td>'.$row['fecha_de_ingreso'].'</td>';
                                $inf.='<td>'.$row['canal_de_ingreso'].'</td>';
                                $inf.='<td>'.$row['administrador'].'</td>';
                                

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
                    $inf.='<th>tipo</th>';
                    $inf.='<th>estado</th>';
                    $inf.='<th>fecha_solicitud</th>';
                    $inf.='<th>f_agenda</th>';
                    $inf.='<th>f_cumplim</th>';
                    $inf.='<th>cliente</th>';
                    $inf.='<th>codigo_cliente</th>';
                    $inf.='<th>apellido</th>';
                    $inf.='<th>nombre</th>';
                    $inf.='<th>email</th>';
                    $inf.='<th>calle_y_numero</th>';
                    $inf.='<th>observaciones_domicilio</th>';
                    $inf.='<th>area_te_1</th>';
                    $inf.='<th>telef_1</th>';
                    $inf.='<th>area_te_2</th>';
                    $inf.='<th>telef_2</th>';
                    $inf.='<th>promotor</th>';
                    $inf.='<th>localidad</th>';
                    $inf.='<th>provincia</th>';
                    $inf.='<th>agencia_venta</th>';
                    $inf.='<th>agencia_tecnica</th>';
                    $inf.='<th>plan_de_venta</th>';
                    $inf.='<th>motivo_desconexion</th>';
                    $inf.='<th>motivo_anulacion</th>';
                    $inf.='<th>usuario_grab_cumpl</th>';
                    $inf.='<th>observaciones</th>';
                    $inf.='<th>disp_retirado</th>';
					$inf.='<th>disp_instalado</th>';
					$inf.='<th>Fecha de ingreso</th>';
                    $inf.='<th>Canal de ingreso</th>';
                    $inf.='<th>Operador</th>';
				$inf.='</tr>';
			$inf.='</thead>';
			$cant=32;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				//$sql="SELECT * FROM ".$this->table." ORDER BY id_num DESC; ";
				$sql="SELECT * FROM tablaintv1; ";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							$inf.='<tr>';
							$inf.='<td>'.$row['id_orden'].'</td>';
							$inf.='<td>'.$row['tipo'].'</td>';
							$inf.='<td>'.$row['estado'].'</td>';
							$inf.='<td>'.$row['fecha_solicitud'].'</td>';
							$inf.='<td>'.$row['f_agenda'].'</td>';
							$inf.='<td>'.$row['f_cumplim'].'</td>';
							$inf.='<td>'.$row['cliente'].'</td>';
							$inf.='<td>'.$row['codigo_cliente'].'</td>';
							$inf.='<td>'.$row['apellido'].'</td>';
							$inf.='<td>'.$row['nombre'].'</td>';
							$inf.='<td>'.$row['email'].'</td>';
							$inf.='<td>'.$row['calle_y_numero'].'</td>';
							$inf.='<td>'.$row['observaciones_domicilio'].'</td>';
							$inf.='<td>'.$row['area_te_1'].'</td>';
							$inf.='<td>'.$row['telef_1'].'</td>';
							$inf.='<td>'.$row['area_te_2'].'</td>';
							$inf.='<td>'.$row['telef_2'].'</td>';
							$inf.='<td>'.$row['promotor'].'</td>';
							$inf.='<td>'.$row['localidad'].'</td>';
							$inf.='<td>'.$row['provincia'].'</td>';
							$inf.='<td>'.$row['agencia_venta'].'</td>';
							$inf.='<td>'.$row['agencia_tecnica'].'</td>';
							$inf.='<td>'.$row['plan_de_venta'].'</td>';
							$inf.='<td>'.$row['motivo_desconexion'].'</td>';
							$inf.='<td>'.$row['motivo_anulacion'].'</td>';
							$inf.='<td>'.$row['usuario_grab_cumpl'].'</td>';
							$inf.='<td>'.$row['observaciones'].'</td>';
							$inf.='<td>'.$row['disp_retirado'].'</td>';
							$inf.='<td>'.$row['disp_instalado'].'</td>';
							$inf.='<td>'.$row['fecha_de_ingreso'].'</td>';
							$inf.='<td>'.$row['canal_de_ingreso'].'</td>';
							$inf.='<td>'.$row['administrador'].'</td>';
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