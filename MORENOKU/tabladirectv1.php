<?php
	/**
	 * 
	 */
	class tabladirectv1
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
					$inf.='<th>fecha ingreso tabla</th>';
					$inf.='<th>Canal ingreso tabla</th>';
					$inf.='<th>Operador</th>';
					
					
					
					
				$inf.='</tr>';
			$inf.='</thead>';
			$cant=60;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				$sql="SELECT * FROM tabladirectv1; ";
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
				$inf.='<th>Fecha ingreso tabla</th>';
				$inf.='<th>Canal ingreso tabla</th>';
				$inf.='<th>Operador</th>';
				$inf.='</tr>';
			$inf.='</thead>';
			$cant=60;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				//$sql="SELECT * FROM ".$this->table." ORDER BY id_num DESC; ";
				$sql="SELECT * FROM tabladirectv1; ";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							$inf.='<tr>';
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