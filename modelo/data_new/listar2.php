<?php

	/**
	 * 
	 */
	class numeros
	{

		function listar($c1){
			$inf=null;$n=1;
			$inf.='<thead>';
				$inf.='<tr>';
                    $inf.='<th>Identificacion Cliente</th>';
					
					$inf.='<th>url</th>';
	
				$inf.='</tr>';
			$inf.='</thead>';
			$cant=2;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				$sql="SELECT * FROM sms; ";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				

				if ($res) {
					if ($res->num_rows > 0) {
						$contador = 0;
						while ($row = mysqli_fetch_array($res)) {
							require_once('../control/url/link.php');
							
							//echo $row['identificacion'];
							
							
                      $_SESSION['identificacion'][$contador]=$row;
							 $contador++;
							 
							
							
                         $inf.='<tr>';
                         $inf.='<td>'.$row['identificacion'].'</td>';
                        
                         $inf.='<td><a href='.$url_larga.'>'.$url_corta.'</td>';
					
								  
								
								
								
							
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
					
				$inf.='<th>Identificacion Cliente</th>';
				
				$inf.='<th>url</th>';
					
				$inf.='</tr>';
			$inf.='</thead>';
			$cant=15;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				//$sql="SELECT * FROM ".$this->table." ORDER BY id_num DESC; ";
				$sql="SELECT * FROM sms;";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							
							require_once('../control/url/link.php');
							$var =$row['identificacion'];
							$_SESSION["identificacion"]=$row;
							
							

							$inf.='<tr>';
                         $inf.='<td>'.$row['identificacion'].'</td>';
                         
                         $inf.='<td><a href='.$url_larga.'>'.$url_corta.'</td>';

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