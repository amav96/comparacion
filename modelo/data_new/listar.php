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
					$inf.='<th>Nombre</th>';
					$inf.='<th>tel1</th>';
					$inf.='<th>tel2</th>';
					$inf.='<th>tel3</th>';
					$inf.='<th>Fecha intrusa</th>';
					$inf.='<th>decos</th>';
					$inf.='<th>tarjeta smarts 1</th>';
					
					
					
					
				$inf.='</tr>';
			    $inf.='</thead>';
			    $cant=15;
			    $_SESSION['Cant_Col'] = $cant;
		        $inf.='<tbody>';
			
				
				include_once ('../../conectar/c_Conectar.php');
				$objeto  = new Conexion();
                $conexion = $objeto->Conectar();  
                $consulta ="SELECT * FROM antina; ";
                $resultado = $conexion->prepare($consulta);
                $resultado->execute();
				$usuarios=$resultado->fetchAll(PDO::FETCH_ASSOC);
				 
				 
                                      if ($usuarios){
                                             
                                                 foreach($usuarios as $usuario){
												                                                               
							$inf.='<tr>';
								//$inf.='<td>'.$n.'</td>';
								$tarjetas=explode("/",$usuario['smarts'],3);
								$equipos=explode("/",$usuario['decos'],3);
								$inf.='<td>'.$usuario['nombre_del_abonado'].'</td>';
								$inf.='<td>'.$usuario['tel_normal_1'].'</td>';
								$inf.='<td>'.$usuario['tel_normal_2'].'</td>';
								$inf.='<td>'.$usuario['tel_normal_3'].'</td>';
								$inf.='<td>'.$usuario['fecha'].'</td>';
                                $inf.='<td>'.$equipos[0].'</td>';
								$inf.='<td>'.$tarjetas[0].'</td>';
								$inf.='</tr>';
								  
												 }
												 if ($usuarios){
                                             
													foreach($usuarios as $usuario){
														$inf.='<tr>';
									$tarjetas=explode("/",$usuario['smarts'],3);
									$equipos=explode("/",$usuario['decos'],3);
									$inf.='<td>'.$usuario['nombre_del_abonado'].'</td>';
									$inf.='<td>'.$usuario['tel_normal_1'].'</td>';
								    $inf.='<td>'.$usuario['tel_normal_2'].'</td>';
								    $inf.='<td>'.$usuario['tel_normal_3'].'</td>';
									$inf.='<td>'.$usuario['fecha'].'</td>';
                                    $inf.='<td>'.$equipos[1].'</td>';
									$inf.='<td>'.$tarjetas[1].'</td>';
									$inf.='</tr>';

				
			$inf.='<tbody>';
		}
			mysqli_close($c1);

			return $inf;
		}
	
		function exportar($c1){
			$inf=null;$n=1;
			$inf.='<thead>';
				$inf.='<tr>';
				$inf.='<th>tel1</th>';
				$inf.='<th>tel2</th>';
				$inf.='<th>tel3</th>';
				
					
				$inf.='</tr>';
			$inf.='</thead>';
			$cant=15;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				//$sql="SELECT * FROM ".$this->table." ORDER BY id_num DESC; ";
				$sql="SELECT * FROM antina; ";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							$inf.='<tr>';
							$inf.='<td>'.$row['tel_normal_1'].'</td>';
							$inf.='<td>'.$row['tel_normal_2'].'</td>';
							$inf.='<td>'.$row['tel_normal_3'].'</td>';
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
}
	}
?>