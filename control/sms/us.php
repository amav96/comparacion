<?php require_once('../conectar/conexion.php'); 

$iden=$_GET['iden'];

$sql=mysqli_query($con,"SELECT e.identificacion,e.empresa,e.telefono1,
e.telefono2,e.direccion,e.localidad,e.provincia,
e.equipo,e.serie,e.tarjeta,e.codigo_postal,s.email
FROM express e INNER JOIN solocliente s ON e.identificacion=s.identificacion WHERE
e.identificacion='$iden'");

if($iden=$sql)
{
    echo
    
   "        
   <div class='container'> 
              
   <div class='row'>
   
                    <div class='col-sm-6'>
                        <div class='card style='width: 18rem;'>
                            <ul class='list-group list-group-flush'>
                             <li class='list-group-item'>An.123425234</li>
                             <li class='list-group-item'>+54-11-31-366295</li>
                             <li class='list-group-item'>+52-11-32456754</li>
                             <li class='list-group-item'>Lusuciraga@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    
                    
                        <div class='card text-white bg-primary' style='max-width: 18rem;'>
                            <div class='card-header'>Hola Alvaro Aliaga, cliente de Lapos</div>
                                <div class='card-body'>
                                   <h5 class='card-title'></h5>
                                    <p class='card-text'>Es un placer contactarnos con usted para notificarle.</p>
                                </div>
                        </div>
                    
                    </div>
                
                
                <br>
            
              




   <div class='row d-flex justify-content-center'>
   <div class='container'>
   
    <div class='table-responsive'>
        <table class='table table-striped table-hover table-bordered'>
    <thead>
      <tr>
      <th scope='.col-sm-'>Identificacion</th>
      <th scope='.col-sm-'>Empresa</th>
      <th scope='.col-sm-'>Serie</th>
      <th scope='.col-sm-'>Direccion</th>
      <th scope='.col-sm-'>localidad</th>
      <th scope='.col-sm-'>Codigo Postal</th>
      <th scope='.col-sm-'>Tarjeta</th>
    
 
       
    </tr>
    </thead>
  
        ";
  }
  while ($row = mysqli_fetch_array($sql))
  
  {
  echo 
    "
    <tbody>
   <tr>
     <td>".$row['identificacion']."</td> 
     <td>".$row['empresa']."</td>
     <td>".$row['serie']."</td>          
     <td>".$row['direccion']."</td> 
     <td>".$row['localidad']."</td> 
     <td>".$row['codigo_postal']."</td> 
     <td>".$row['tarjeta']."</td>  
     
     
  </tr>
  </tbody>
  
  </div>

  
</div>
  </div>
  </div>
  
  
  
     ";
  }


 
?>
 