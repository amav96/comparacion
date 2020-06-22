<?php

include_once ('../../conectar/c_Conectar.php');


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
					$inf.='<th>identificacion</th>';
					$inf.='<th>nombre cliente</th>';
					$inf.='<th>direccion</th>';
					$inf.='<th>localidad</th>';
					$inf.='<th>codigo postal</th>';
					$inf.='<th>provincia</th>';
					$inf.='<th>fecha creacion</th>';
					$inf.='<th>telefono 1</th>';
					$inf.='<th>empresa</th>';

				$inf.='</tr>';
			    $inf.='</thead>';
			    $cant=16;
			    $_SESSION['Cant_Col'] = $cant;
		        $inf.='<tbody>';
			
				
				
				$objeto  = new Conexion();
                $conexion = $objeto->Conectar();  
                $consulta ="SELECT nombre_del_abonado,abonado,domicilio,localidad,codigo_postal,fecha,decos,smarts,tel_normal_1,tel_normal_2,tel_normal_3 FROM antina; ";
                $resultado = $conexion->prepare($consulta);
                $resultado->execute();
				$usuarios=$resultado->fetchAll(PDO::FETCH_ASSOC);
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
		    				    switch($comparacion_equipos){
								    case 30: $inf.='<td>'.'OPENTEL'.'</td>';
								break;
									case 20: $inf.='<td>'.'KAON'.'</td>';
								break;	 
									case 32: $inf.='<td>'.'OPENTEL'.'</td>';
								break;	
									case 43: $inf.='<td>'.'INTEK'.'</td>';
								break;
									default: $inf.='<td>'.''.'</td>';
								break;
								 }
								    
								            $inf.='<td>'.$tarjetas[$key].'</td>';
								            $inf.='<td>'.$serie[$key].'</td>';				
								            $inf.='<td>'.$serie[$key].'@'.$value['abonado'].'</td>';
								            $inf.='<td>'.''.'</td>';
								            $inf.='<td>'.$value['abonado'].'</td>';
								            $inf.='<td>'.'AN.'.$value['abonado'].'</td>';
											$inf.='<td>'.$value['nombre_del_abonado'].'</td>';
											$inf.='<td>'.$value['domicilio'].'</td>';
											$inf.='<td>'.$value['localidad'].'</td>';
											$inf.='<td>'.$value['codigo_postal'].'</td>';
											$inf.='<td>'.''.'</td>';
											$inf.='<td>'.$value['fecha'].'</td>';
											$inf.='<td>'.$value['tel_normal_1'].'</td>';

											$numeros=$value['tel_normal_1'];
											
											$buscando=substr($numeros,0,2);

											if($buscando==='15'){
												$variable=str_replace('15','',$value['tel_normal_1']);
												$primeros=substr($variable,0,4);
												
			$consulta_comparativa ="SELECT empresa FROM referencia_completa WHERE sin_15='$primeros' OR sin_15='1115$primeros'";
								echo "$consulta_comparativa";
								echo "<br>";
                                $resultado_comparativa = $conexion->prepare($consulta_comparativa);
                                $resultado_comparativa->execute();
								$usuarios_comparativa=$resultado_comparativa->fetchAll(PDO::FETCH_ASSOC);
											
								
								            foreach($usuarios_comparativa as $buscar_numero){
											$inf.='<td>'.$buscar_numero['empresa'].'</td>';
										
									
									
					$inf.='</tr>';
				}
				}
			
				
			}

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
					
					$inf.='<th>cod empresa</th>';
					$inf.='<th>tipo</th>';
					$inf.='<th>empresa</th>';
					$inf.='<th>equipo</th>';
					$inf.='<th>tarjeta</th>';
					$inf.='<th>serie</th>';
					$inf.='<th>idd</th>';
					$inf.='<th>id orden</th>';
					$inf.='<th>id_actividad</th>';
					$inf.='<th>identificacion</th>';
					$inf.='<th>nombre cliente</th>';
					$inf.='<th>direccion</th>';
					$inf.='<th>localidad</th>';
					$inf.='<th>codigo postal</th>';
					$inf.='<th>provincia</th>';
					$inf.='<th>fecha creacion</th>';
					$inf.='<th>telefono 1</th>';
					$inf.='<th>empresa</th>';

				$inf.='</tr>';
			    $inf.='</thead>';
			    $cant=16;
			    $_SESSION['Cant_Col'] = $cant;
		        $inf.='<tbody>';
				//$sql="SELECT * FROM ".$this->table." ORDER BY id_num DESC; ";
				
				$objeto  = new Conexion();
                $conexion = $objeto->Conectar();  
                $consulta ="SELECT nombre_del_abonado,abonado,domicilio,localidad,codigo_postal,fecha,decos,smarts,tel_normal_1,tel_normal_2,tel_normal_3 FROM antina; ";
                $resultado = $conexion->prepare($consulta);
                $resultado->execute();
				$usuarios=$resultado->fetchAll(PDO::FETCH_ASSOC);
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
		    				    switch($comparacion_equipos){
								    case 30: $inf.='<td>'.'OPENTEL'.'</td>';
								break;
									case 20: $inf.='<td>'.'KAON'.'</td>';
								break;	 
									case 32: $inf.='<td>'.'OPENTEL'.'</td>';
								break;	
									case 43: $inf.='<td>'.'INTEK'.'</td>';
								break;
									default: $inf.='<td>'.''.'</td>';
								break;
								 }
								    
								            $inf.='<td>'.$tarjetas[$key].'</td>';
								            $inf.='<td>'.$serie[$key].'</td>';				
								            $inf.='<td>'.$serie[$key].'@'.$value['abonado'].'</td>';
								            $inf.='<td>'.''.'</td>';
								            $inf.='<td>'.$value['abonado'].'</td>';
								            $inf.='<td>'.'AN.'.$value['abonado'].'</td>';
											$inf.='<td>'.$value['nombre_del_abonado'].'</td>';
											$inf.='<td>'.$value['domicilio'].'</td>';
											$inf.='<td>'.$value['localidad'].'</td>';
											$inf.='<td>'.$value['codigo_postal'].'</td>';
											$inf.='<td>'.''.'</td>';
											$inf.='<td>'.$value['fecha'].'</td>';
											$inf.='<td>'.$value['tel_normal_1'].'</td>';

											$numeros=$value['tel_normal_1'];
											
											if($numeros==='0'){
												$inf.='<td>'.''.'</td>';
											}else {

											
											
												
								$consulta_comparativa ="SELECT empresa FROM referencia_completa WHERE sin_15='$numeros'; OR sin_15='$numeros'";
								
                                $resultado_comparativa = $conexion->prepare($consulta_comparativa);
                                $resultado_comparativa->execute();
								$usuarios_comparativa=$resultado_comparativa->fetchAll(PDO::FETCH_ASSOC);
											
								
								            foreach($usuarios_comparativa as $buscar_numero){
											$inf.='<td>'.$buscar_numero['empresa'].'</td>';
										
									
									
					$inf.='</tr>';
				}
			
				
			}

				}

	   }
   }
}		
$inf.='<tbody>';
			mysqli_close($c1);

			return $inf;
		}
	}
	
?>