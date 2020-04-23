<?php
	/**
	 * 
	 */
	class numeros
	{
		
		//private $tablareferencia2= 'referencia2';

		function listar($c1){
			$inf=null;$n=1;
			$inf.='<thead>';
				$inf.='<tr>';
					//$inf.='<th>N°</th>';
					$inf.='<th>nrocliente</th>';
					$inf.='<th>nrowo</th>';
					$inf.='<th>wotype</th>';
					$inf.='<th>razoncreacion</th>';
					$inf.='<th>servicecreacion</th>';
					$inf.='<th>subtype</th>';
					$inf.='<th>clasificacion</th>';
					$inf.='<th>ird_modem</th>';
					$inf.='<th>codinstalador</th>';
					$inf.='<th>nombreinstalador</th>';
					$inf.='<th>codinstaladorpadre</th>';
					$inf.='<th>nombreinstaladorpadre</th>';
					$inf.='<th>coddealer</th>';
					$inf.='<th>nombredealer</th>';
					$inf.='<th>codigodealerpadre</th>';
					$inf.='<th>dealerpadre</th>';
					$inf.='<th>estadowo</th>';
					$inf.='<th>fechacreacionwo</th>';
					$inf.='<th>fechacumplimiento</th>';
					$inf.='<th>fechaultimoagendamiento</th>';
					$inf.='<th>fechaultimaasignacion</th>';
					$inf.='<th>textbox16</th>';
					$inf.='<th>atraso_ct_wo</th>';
					$inf.='<th>atraso_ct_sp</th>';
					$inf.='<th>acciontomada</th>';
					$inf.='<th>fecha_1_pasaje_terminada</th>';
					$inf.='<th>estadocliente</th>';
					$inf.='<th>tipocliente</th>';
					$inf.='<th>apellidonombre</th>';
					$inf.='<th>direccionins</th>';
					$inf.='<th>extrains</th>';
					$inf.='<th>x</th>';
					$inf.='<th>y</th>';
					$inf.='<th>t</th>';
					$inf.='<th>cpins</th>';
					$inf.='<th>localidadins</th>';
					$inf.='<th>provinciains</th>';
					$inf.='<th>telefonoparticularins</th>';
					$inf.='<th>telefonolaboralins</th>';
					$inf.='<th>faxinstalacion</th>';
					$inf.='<th>fax2instalacion</th>';
					$inf.='<th>email_inst</th>';
					$inf.='<th>direccionfac</th>';
					$inf.='<th>extrafac</th>';
					$inf.='<th>cpfac</th>';
					$inf.='<th>localidadfact</th>';
					$inf.='<th>provinciafac</th>';
					$inf.='<th>telefonoparticularfac</th>';
					$inf.='<th>telefonolaboralfac</th>';
					$inf.='<th>faxfac</th>';
					$inf.='<th>fax2fac</th>';
					$inf.='<th>email_fact</th>';
					$inf.='<th>zona</th>';
					$inf.='<th>observacion</th>';
					$inf.='<th>modelo</th>';
					$inf.='<th>nroserie</th>';
					$inf.='<th>nrosc</th>';
					
					
					
					
				$inf.='</tr>';
			$inf.='</thead>';
			$cant=57;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				$sql="SELECT * FROM numeros; ";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							
							
							$inf.='<tr>';
								//$inf.='<td>'.$n.'</td>';
								$inf.='<td>'.$row['nrocliente'].'</td>';
								$inf.='<td>'.$row['nrowo'].'</td>';
								$inf.='<td>'.$row['wotype'].'</td>';
								$inf.='<td>'.$row['razoncreacion'].'</td>';
								$inf.='<td>'.$row['servicecreacion'].'</td>';
								$inf.='<td>'.$row['subtype'].'</td>';
								$inf.='<td>'.$row['clasificacion'].'</td>';
								$inf.='<td>'.$row['ird_modem'].'</td>';
								$inf.='<td>'.$row['codinstalador'].'</td>';
								$inf.='<td>'.$row['nombreinstalador'].'</td>';
								$inf.='<td>'.$row['codinstaladorpadre'].'</td>';
								$inf.='<td>'.$row['nombreinstaladorpadre'].'</td>';
								$inf.='<td>'.$row['coddealer'].'</td>';
								$inf.='<td>'.$row['nombredealer'].'</td>';
								$inf.='<td>'.$row['codigodealerpadre'].'</td>';
								$inf.='<td>'.$row['dealerpadre'].'</td>';
								$inf.='<td>'.$row['estadowo'].'</td>';
								$inf.='<td>'.$row['fechacreacionwo'].'</td>';
								$inf.='<td>'.$row['fechacumplimiento'].'</td>';
								$inf.='<td>'.$row['fechaultimoagendamiento'].'</td>';
								$inf.='<td>'.$row['fechaultimaasignacion'].'</td>';
								$inf.='<td>'.$row['textbox16'].'</td>';
								$inf.='<td>'.$row['atraso_ct_wo'].'</td>';
								$inf.='<td>'.$row['atraso_ct_sp'].'</td>';
								$inf.='<td>'.$row['acciontomada'].'</td>';
								$inf.='<td>'.$row['fecha_1_pasaje_terminada'].'</td>';
								$inf.='<td>'.$row['estadocliente'].'</td>';
								$inf.='<td>'.$row['tipocliente'].'</td>';
								$inf.='<td>'.$row['apellidonombre'].'</td>';
								$inf.='<td>'.$row['direccionins'].'</td>';
								$inf.='<td>'.$row['extrains'].'</td>';
								$inf.='<td>'.$row['x'].'</td>';
								$inf.='<td>'.$row['y'].'</td>';
								$inf.='<td>'.$row['t'].'</td>';
								$inf.='<td>'.$row['cpins'].'</td>';
								$inf.='<td>'.$row['localidadins'].'</td>';
								$inf.='<td>'.$row['provinciains'].'</td>';
								$inf.='<td>'.$row['telefonoparticularins'].'</td>';
								$inf.='<td>'.$row['telefonolaboralins'].'</td>';
								$inf.='<td>'.$row['faxinstalacion'].'</td>';
								$inf.='<td>'.$row['fax2instalacion'].'</td>';
								$inf.='<td>'.$row['email_inst'].'</td>';
								$inf.='<td>'.$row['direccionfac'].'</td>';
								$inf.='<td>'.$row['extrafac'].'</td>';
								$inf.='<td>'.$row['cpfac'].'</td>';
								$inf.='<td>'.$row['localidadfact'].'</td>';
								$inf.='<td>'.$row['provinciafac'].'</td>';
								$inf.='<td>'.$row['telefonoparticularfac'].'</td>';
								$inf.='<td>'.$row['telefonolaboralfac'].'</td>';
								$inf.='<td>'.$row['faxfac'].'</td>';
								$inf.='<td>'.$row['fax2fac'].'</td>';
								$inf.='<td>'.$row['email_fact'].'</td>';
								$inf.='<td>'.$row['zona'].'</td>';
								$inf.='<td>'.$row['observacion'].'</td>';
								$inf.='<td>'.$row['modelo'].'</td>';
								$inf.='<td>'.$row['nroserie'].'</td>';
								$inf.='<td>'.$row['nrosc'].'</td>';
								
								
							
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
                 r.bloque, r.resolucion, r.fecha, r.reemplazar_por, r.caracteres, n.ident FROM ".$this->aprocesar." n
                  INNER JOIN ".$this->tablareferencia2." r ON n.buscar_dos LIKE r.sin_15 ORDER BY n.id_num ASC ; ";
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