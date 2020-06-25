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
											

											$numeros=$value['tel_normal_1'];
											 
											$buscando=substr($numeros,0,2);

											//echo "$buscando";
											//echo "<br>";

											$separados=$buscando;

											$cadena=strlen($numeros);
									//echo "$cadena";
									//echo "<br>";
									if($numeros != ''){
											if ($cadena <= 12){

								if($buscando==='15' || $buscando==='11'){
								//$variable=str_replace($separados,'',$value['tel_normal_1']);
								
								$primeros=substr($numeros,0,6);
								// echo "los primeros 2 de $numeros son iguales a 15 o 11?? haz esto ->";
								// echo "<br>";
								 //echo " toma los primeros 6-> $primeros";
								 //echo "<br>";

								$consulta_comparativa ="SELECT empresa,reemplazar_por FROM referencia_completa WHERE sin_15 like '$primeros%' limit 1";
                                //echo "consulta con 15 o 11--->";
								//echo "$consulta_comparativa";
								//echo "<br>";

                                $resultado_comparativa = $conexion->prepare($consulta_comparativa);
                                $resultado_comparativa->execute();
								$usuarios_comparativa=$resultado_comparativa->fetchAll(PDO::FETCH_ASSOC);
											
								 foreach($usuarios_comparativa as $buscar_numero){
											
                                           //echo "este es el resultado";
										//echo json_encode($buscar_numero);
										//echo "<br>";

										if($buscar_numero){
											$inf.='<td>'.'54'.$value['tel_normal_1'].'</td>';
										}
										
									
									
											$inf.='</tr>';
										} //foreach($usuarios_comparativa as $buscar_numero)
									
									} //if($buscando==='15' || $buscando==='11')
									       $numeros_sin=$value['tel_normal_1'];
											//echo "aqui->$numeros_sin";
											//echo "<br>"; 
											$para_comparar=$numeros_sin;
											$buscando_sin=substr($para_comparar,0,2); 
											$agarro_el_primero=substr($para_comparar,0,1);
											
											$separados_sin=$buscando_sin;
									if($separados_sin != '11' and  $separados_sin !='15' and $agarro_el_primero != '0' ){
										
										//echo "$numeros_sin";
										//echo "<br>";
										
										$agarro_4=substr($para_comparar,0,6);

											
										//echo "LOS DIFERENTES A 15 O 11 ->";	
									//echo "TE LOS MUESTRO COMPLETOS -> $numeros_sin";
									//echo "<br>";

									//echo "agarro los 4 primeros -> $agarro_4";
									//echo "<br>";

									$consulta_comparativa_sin ="SELECT empresa,reemplazar_por FROM referencia_completa WHERE sin_15 like '$agarro_4%'  limit 1 ";

									//echo "consulta sin 11 o 15 ABAJO MEDIO";
									//echo "<br>";
									//echo "$consulta_comparativa_sin";
											  
											   
									$resultado_comparativa_sin = $conexion->prepare($consulta_comparativa_sin);
							$resultado_comparativa_sin->execute();
							$usuarios_comparativa_sin=$resultado_comparativa_sin->fetchAll(PDO::FETCH_ASSOC);
										
							 foreach($usuarios_comparativa_sin as $buscar_numero_sin){
										
										//echo "este es el resultado de los que no tienen 15 o 11";
										//echo "<br>";
										//echo json_encode($buscar_numero_sin);
										
										if($buscar_numero_sin){
                                            $inf.='<td>'.'54'.$value['tel_normal_1'].'</td>';
										}
									
								
								
										$inf.='</tr>';

									}
								
									
										
												
						}//($separados_sin != '11' and  $separados_sin !='15' )

						            $numeros_sin_0=$value['tel_normal_1'];
											//echo "este es el original-->$numeros_sin_0";
											//echo "<br>"; 
											$para_comparar_0=$numeros_sin_0;
											$buscando_sin_0=substr($para_comparar_0,0,1); 
											$separados_sin_0=$buscando_sin_0;

											//echo "aqui agarro el primer caracter---->$separados_sin_0";
											//echo "<br>";
									
						if($separados_sin_0==='0'){
								
							
							$mostrar_todo=substr($para_comparar_0,1);

                        echo "aca muestro todo--->$mostrar_todo";
						echo "<br>";

						$agrupar_mostrar_todo=substr($mostrar_todo,0,6);
						echo "aca agrupo--->$agrupar_mostrar_todo";
						echo "<br>";


							  
							  $consulta_comparativa_sin_0 ="SELECT empresa,reemplazar_por FROM referencia_completa WHERE sin_15 like '$agrupar_mostrar_todo%' limit 1";


							echo "<br>";
							echo "consulta sin 0 ABAJO ABAJO";
							echo "<br>";
							echo "$consulta_comparativa_sin_0";
										
										 
							  $resultado_comparativa_sin_0 = $conexion->prepare($consulta_comparativa_sin_0);
					          $resultado_comparativa_sin_0->execute();
					          $usuarios_comparativa_sin_0=$resultado_comparativa_sin_0->fetchAll(PDO::FETCH_ASSOC);
								  
					   foreach($usuarios_comparativa_sin_0 as $buscar_numero_sin_0){
								  
							echo "este es el resultado de los que no tienen 0";
							echo "<br>";
							echo json_encode($buscar_numero_sin_0);
								  
								  if($buscar_numero_sin_0){
									  $inf.='<td>'.'54'.$mostrar_todo.'</td>';
								  }
							  
						  
						  
								  $inf.='</tr>';

								}
							  



							 
							}

							}
					}

									   
				   

				   }//if(count($tarjetas)>0)

		
				} //foreach($usuarios as $usuario => $value)
			} //FOREACH
  }//if ($usuarios)
		

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