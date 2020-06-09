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
					$inf.='<th>tel1</th>';
					$inf.='<th>tel2</th>';
					$inf.='<th>tel3</th>';
					$inf.='<th>Fecha intrusa</th>';
					$inf.='<th>Telefonos 1</th>';
					$inf.='<th>Telefonos 2</th>';
					
					
					
				$inf.='</tr>';
			$inf.='</thead>';
			$cant=15;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
			
				$sql="SELECT * FROM antina; ";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							
							$inf.='<tr>';
								//$inf.='<td>'.$n.'</td>';
								$inf.='<td>'.$row['tel_normal_1'].'</td>';
								$inf.='<td>'.$row['tel_normal_2'].'</td>';
								$inf.='<td>'.$row['tel_normal_3'].'</td>';
                                $inf.='<td>'.$row['fecha'].'</td>';
								//$vuelta=0;
                                foreach($row as $key => $value){
									if($key==[21][0]){
									//$inf.='<td>'.$key[0].'</td>';
									//echo $valor["smarts"];
									$resultado=explode("/",$value,3);
									print_r($resultado);
									$inf.='<td>'.$resultado[0].'</td>';
									$inf.='<td>'.$resultado[1].'</td>';
	
								  //var_dump($value);
								  //echo"<pre>";
								  //print_r($resultado[0]);
								  //$vuelta++;
								  
								}
		
							}	
							$inf.='</tr>';
							
							
							$n++;
						}
					}else{
						$inf.='';
					}
				}
			else{
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