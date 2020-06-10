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
					
					$inf.='<th>cod empresa</th>';
					$inf.='<th>tipo</th>';
					$inf.='<th>empresa</th>';
					$inf.='<th>equipo</th>';
					$inf.='<th>tarjeta</th>';
					$inf.='<th>serie</th>';
					$inf.='<th>idd</th>';
					$inf.='<th>id orden</th>';
					$inf.='<th>id_actividad</th>';
					$inf.='<th>nombre cliente</th>';
					$inf.='<th>tel1</th>';
					$inf.='<th>identificacion</th>';
					$inf.='<th>tel2</th>';
					$inf.='<th>tel3</th>';
	
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
				
				 //La Base
                                      if ($usuarios){
                                             
                                                 foreach($usuarios as $usuario => $value){
													$tarjetas=explode("/",$value['smarts']);
													$serie=explode("/",$value['decos']);

								   if(count($tarjetas)>0){
								foreach($tarjetas as $key => $valuekey){
									$inf.='<tr>';
								    $inf.='<td>'.'AN'.'</td>';
							        $inf.='<td>'.'</td>';
								    $inf.='<td>'.'ANTINA'.'</td>';
								$comparacion_equipos=substr($value['decos'],0,2);
		    				    if($comparacion_equipos==30)
								{
									$inf.='<td>'.'OPENTEL'.'</td>';
								}if($comparacion_equipos==20)
								{
									$inf.='<td>'.'KAON'.'</td>';
								}
								if($comparacion_equipos==32)
								{
									$inf.='<td>'.'OPENTEL'.'</td>';
								}if($comparacion_equipos==43)
								{
									$inf.='<td>'.'INTEK'.'</td>';
								}
								
								$inf.='<td>'.$tarjetas[$key].'</td>';
								$inf.='<td>'.$serie[$key].'</td>';				
								$inf.='<td>'.$serie[$key].'@'.$value['abonado'].'</td>';
								$inf.='<td>'.''.'</td>';
								$inf.='<td>'.$value['abonado'].'</td>';
								$inf.='<td>'.'AN.'.$value['abonado'].'</td>';
								$inf.='<td>'.$value['nombre_del_abonado'].'</td>';
								$inf.='<td>'.$value['tel_normal_1'].'</td>';
								$inf.='<td>'.$value['tel_normal_2'].'</td>';
								$inf.='<td>'.$value['tel_normal_3'].'</td>';
								
								$inf.='</tr>';
								
									

												 }
										
						 //si hay mas de 2 = creame otra fila con el mismo cliente
						
			
		
	}
}
									  }
									
$inf.='<tbody>';
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

	
	
?>