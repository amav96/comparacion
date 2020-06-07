<?php
	/**
	 * 
	 */
	class tablametrotel1
	{
		
		//private $tablareferencia2= 'referencia2';

		function listar($c1){
			$inf=null;$n=1;
			$inf.='<thead>';
				$inf.='<tr>';
					//$inf.='<th>N°</th>';
					$inf.='<th>linea</th>';
					$inf.='<th>empresa</th>';
					$inf.='<th>direccion</th>';
					$inf.='<th>provincia</th>';
					$inf.='<th>partido1</th>';
					$inf.='<th>contacto</th>';
					$inf.='<th>mail</th>';
					$inf.='<th>modelos</th>';
					$inf.='<th>fecha_de_ingreso</th>';
					$inf.='<th>canal_de_ingreso</th>';
					$inf.='<th>administrador</th>';
					$inf.='<th>id_fecha</th>';
					
					
					
	
				$inf.='</tr>';
			$inf.='</thead>';
			$cant=12;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				$sql="SELECT * FROM tablametrotel1; ";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							
							
							$inf.='<tr>';
								//$inf.='<td>'.$n.'</td>';
								$inf.='<td>'.$row['linea'].'</td>';
								$inf.='<td>'.$row['empresa'].'</td>';
								$inf.='<td>'.$row['direccion'].'</td>';
								$inf.='<td>'.$row['provincia'].'</td>';
								$inf.='<td>'.$row['partido1'].'</td>';
								$inf.='<td>'.$row['contacto'].'</td>';
								$inf.='<td>'.$row['mail'].'</td>';
								$inf.='<td>'.$row['modelos'].'</td>';
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
				$inf.='<th>linea</th>';
					$inf.='<th>empresa</th>';
					$inf.='<th>direccion</th>';
					$inf.='<th>provincia</th>';
					$inf.='<th>partido1</th>';
					$inf.='<th>contacto</th>';
					$inf.='<th>mail</th>';
					$inf.='<th>modelos</th>';
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
				$sql="SELECT * from tablametrotel1";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							$inf.='<tr>';
							$inf.='<td>'.$row['linea'].'</td>';
								$inf.='<td>'.$row['empresa'].'</td>';
								$inf.='<td>'.$row['direccion'].'</td>';
								$inf.='<td>'.$row['provincia'].'</td>';
								$inf.='<td>'.$row['partido1'].'</td>';
								$inf.='<td>'.$row['contacto'].'</td>';
								$inf.='<td>'.$row['mail'].'</td>';
								$inf.='<td>'.$row['modelos'].'</td>';
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