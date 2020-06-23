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

											$separados=$buscando;

								if($buscando==='15' || $buscando==='11'){
								$variable=str_replace($separados,'',$value['tel_normal_1']);
								$primeros=substr($variable,0,4);
								// echo "los primeros 2 de $numeros es igual a 15 o 11?? haz esto -> quita el 15 y 11  -> $variable y toma los primeros 4-> $primeros";
								// echo "<br>";

								$consulta_comparativa ="SELECT empresa,reemplazar_por FROM referencia_completa WHERE sin_15 like '$primeros%' OR sin_15='1115$primeros' limit 1";
                                //echo "consulta con 15 o 11";
								//echo "$consulta_comparativa";
								//echo "<br>";

                                $resultado_comparativa = $conexion->prepare($consulta_comparativa);
                                $resultado_comparativa->execute();
								$usuarios_comparativa=$resultado_comparativa->fetchAll(PDO::FETCH_ASSOC);
											
								 foreach($usuarios_comparativa as $buscar_numero){
											$inf.='<td>'.$buscar_numero['reemplazar_por'].'</td>';
                                           // echo "este es el resultado";
											//echo json_encode($buscar_numero);
											//echo "<br>";
										
									
									
					                        $inf.='</tr>';
				                                  
				
										 //tercer iff sie igual a 15 o 11
										        if($numeros){ 
													
													$numeros=$value['tel_normal_1'];

													$buscar_sin=substr($numeros,0,4);

													$separado_sin=$buscar_sin;

													echo "estos son los diferentes -> $separado_sin";
													echo "<br>";

													$consulta_comparativa_sin ="SELECT empresa,reemplazar_por FROM referencia_completa WHERE sin_15 like '$separado_sin%' OR sin_15='1115$separado_sin' limit 1";

													echo "consulta sin 11 o 15";
													echo "<br>";
								                   echo "$consulta_comparativa_sin";
												  
												   
												   $resultado_comparativa_sin = $conexion->prepare($consulta_comparativa_sin);
                                $resultado_comparativa_sin->execute();
								$usuarios_comparativa_sin=$resultado_comparativa_sin->fetchAll(PDO::FETCH_ASSOC);
											
								 foreach($usuarios_comparativa_sin as $buscar_numero_sin){
											$inf.='<td>'.$buscar_numero_sin['reemplazar_por'].'</td>';
											echo "este es el resultado de los que no tienen 15 o 11";
											echo "<br>";
											echo json_encode($buscar_numero_sin);
											
										
									
									
					                        $inf.='</tr>';
				                                  } //para foreach

													


													}
												} //para foreach
											} //ante penultimo if
											else {
												
											}		
				            }//segundo foreach tarjetas >key 

				                           
                       

					   }//seguno if count

			
					} //primer foreach
				}//primer if 
			
	
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