<?php
	/**
	 * 
	 */
	class tablaantina3
	{
		
		//private $tablareferencia2= 'referencia2';

		function listar($c1){
			$inf=null;$n=1;
			$inf.='<thead>';
				$inf.='<tr>';
					//$inf.='<th>N°</th>';
					$inf.='<th>fecha</th>';
				$inf.='<th>abonado</th>';
				$inf.='<th>contrato</th>';
				$inf.='<th>nombre del abonado</th>';
				$inf.='<th>tdoc</th>';
				$inf.='<th>documento</th>';
				$inf.='<th>domicilio</th>';
				$inf.='<th>detalle zona</th>';
				$inf.='<th>cod pos</th>';
				$inf.='<th>localidad</th>';
				$inf.='<th>fijo1</th>';
				$inf.='<th>fijo2</th>';
				$inf.='<th>celular3</th>';
				$inf.='<th>celular2</th>';
				$inf.='<th>celular1</th>';
				$inf.='<th>estado</th>';
				$inf.='<th>decos1</th>';
				$inf.='<th>motivo de pendiente</th>';
				$inf.='<th>asignado a</th>';
				$inf.='<th>fec asig desasig</th>';
				$inf.='<th>asignacion gsc</th>';
				$inf.='<th>deuda</th>';
				$inf.='<th>fecinst</th>';
				$inf.='<th>decos2</th>';
				$inf.='<th>tipo</th>';
				$inf.='<th>smarts</th>';
				$inf.='<th>correo electronico</th>';
				$inf.='<th>tec ins</th>';
				$inf.='<th>des tec_ins</th>';
				$inf.='<th>emp ins</th>';
				$inf.='<th>des emp_ins</th>';
				$inf.='<th>mot baja</th>';
				$inf.='<th>des mot baja</th>';
				$inf.='<th>Fecha de ingreso</th>';
				$inf.='<th>Canal de ingreso</th>';
				$inf.='<th>Operador</th>';
                    
					
					
					
					
				$inf.='</tr>';
			$inf.='</thead>';
			$cant=36;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				$sql="SELECT * FROM tablaantina1; ";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							
							
							$inf.='<tr>';
								//$inf.='<td>'.$n.'</td>';
								$inf.='<td>'.$row['fecha'].'</td>';
							$inf.='<td>'.$row['abonado'].'</td>';
							$inf.='<td>'.$row['contrato'].'</td>';
							$inf.='<td>'.$row['nombre_del_abonado'].'</td>';
							$inf.='<td>'.$row['tdoc'].'</td>';
							$inf.='<td>'.$row['documento'].'</td>';
							$inf.='<td>'.$row['domicilio'].'</td>';
							$inf.='<td>'.$row['detalle_zona'].'</td>';
							$inf.='<td>'.$row['cod_pos'].'</td>';
							$inf.='<td>'.$row['localidad'].'</td>';
							$inf.='<td>'.$row['fijo1'].'</td>';
							$inf.='<td>'.$row['fijo2'].'</td>';
							$inf.='<td>'.$row['celular3'].'</td>';
							$inf.='<td>'.$row['celular2'].'</td>';
							$inf.='<td>'.$row['celular1'].'</td>';
							$inf.='<td>'.$row['estado'].'</td>';
							$inf.='<td>'.$row['decos1'].'</td>';
							$inf.='<td>'.$row['motivo_de_pendiente'].'</td>';
							$inf.='<td>'.$row['asignado_a'].'</td>';
							$inf.='<td>'.$row['fec_asig_desasig'].'</td>';
							$inf.='<td>'.$row['asignacion_gsc'].'</td>';
							$inf.='<td>'.$row['deuda'].'</td>';
							$inf.='<td>'.$row['fecinst'].'</td>';
							$inf.='<td>'.$row['decos2'].'</td>';
							$inf.='<td>'.$row['tipo'].'</td>';
							$inf.='<td>'.$row['smarts'].'</td>';
							$inf.='<td>'.$row['correo_electronico'].'</td>';
							$inf.='<td>'.$row['tec_ins'].'</td>';
							$inf.='<td>'.$row['des_tec_ins'].'</td>';
							$inf.='<td>'.$row['emp_ins'].'</td>';
							$inf.='<td>'.$row['des_emp_ins'].'</td>';
							$inf.='<td>'.$row['mot_baja'].'</td>';
							$inf.='<td>'.$row['des_mot_baja'].'</td>';
							$inf.='<td>'.$row['canal_de_ingreso'].'</td>';
							$inf.='<td>'.$row['fecha_de_ingreso'].'</td>';
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
				$inf.='<th>fecha</th>';
				$inf.='<th>abonado</th>';
				$inf.='<th>contrato</th>';
				$inf.='<th>nombre_del_abonado</th>';
				$inf.='<th>tdoc</th>';
				$inf.='<th>documento</th>';
				$inf.='<th>domicilio</th>';
				$inf.='<th>detalle_zona</th>';
				$inf.='<th>cod_pos</th>';
				$inf.='<th>localidad</th>';
				$inf.='<th>fijo1</th>';
				$inf.='<th>fijo2</th>';
				$inf.='<th>celular3</th>';
				$inf.='<th>celular2</th>';
				$inf.='<th>celular1</th>';
				$inf.='<th>estado</th>';
				$inf.='<th>decos1</th>';
				$inf.='<th>motivo_de_pendiente</th>';
				$inf.='<th>asignado_a</th>';
				$inf.='<th>fec_asig_desasig</th>';
				$inf.='<th>asignacion_gsc</th>';
				$inf.='<th>deuda</th>';
				$inf.='<th>fecinst</th>';
				$inf.='<th>decos2</th>';
				$inf.='<th>tipo</th>';
				$inf.='<th>smarts</th>';
				$inf.='<th>correo_electronico</th>';
				$inf.='<th>tec_ins</th>';
				$inf.='<th>des_tec ins</th>';
				$inf.='<th>emp_ins</th>';
				$inf.='<th>des_emp ins</th>';
				$inf.='<th>mot_baja</th>';
				$inf.='<th>des_mot_baja</th>';
				$inf.='<th>Fecha de ingreso</th>';
				$inf.='<th>Canal de ingreso</th>';
				$inf.='<th>Operador</th>';
				
			$inf.='</thead>';
			$cant=36;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				//$sql="SELECT * FROM ".$this->table." ORDER BY id_num DESC; ";
				$sql="SELECT * FROM tablaantina1; ";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							$inf.='<tr>';
							$inf.='<td>'.$row['fecha'].'</td>';
							$inf.='<td>'.$row['abonado'].'</td>';
							$inf.='<td>'.$row['contrato'].'</td>';
							$inf.='<td>'.$row['nombre_del_abonado'].'</td>';
							$inf.='<td>'.$row['tdoc'].'</td>';
							$inf.='<td>'.$row['documento'].'</td>';
							$inf.='<td>'.$row['domicilio'].'</td>';
							$inf.='<td>'.$row['detalle_zona'].'</td>';
							$inf.='<td>'.$row['cod_pos'].'</td>';
							$inf.='<td>'.$row['localidad'].'</td>';
							$inf.='<td>'.$row['fijo1'].'</td>';
							$inf.='<td>'.$row['fijo2'].'</td>';
							$inf.='<td>'.$row['celular3'].'</td>';
							$inf.='<td>'.$row['celular2'].'</td>';
							$inf.='<td>'.$row['celular1'].'</td>';
							$inf.='<td>'.$row['estado'].'</td>';
							$inf.='<td>'.$row['decos1'].'</td>';
							$inf.='<td>'.$row['motivo_de_pendiente'].'</td>';
							$inf.='<td>'.$row['asignado_a'].'</td>';
							$inf.='<td>'.$row['fec_asig_desasig'].'</td>';
							$inf.='<td>'.$row['asignacion_gsc'].'</td>';
							$inf.='<td>'.$row['deuda'].'</td>';
							$inf.='<td>'.$row['fecinst'].'</td>';
							$inf.='<td>'.$row['decos2'].'</td>';
							$inf.='<td>'.$row['tipo'].'</td>';
							$inf.='<td>'.$row['smarts'].'</td>';
							$inf.='<td>'.$row['correo_electronico'].'</td>';
							$inf.='<td>'.$row['tec_ins'].'</td>';
							$inf.='<td>'.$row['des_tec_ins'].'</td>';
							$inf.='<td>'.$row['emp_ins'].'</td>';
							$inf.='<td>'.$row['des_emp_ins'].'</td>';
							$inf.='<td>'.$row['mot_baja'].'</td>';
							$inf.='<td>'.$row['des_mot_baja'].'</td>';
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