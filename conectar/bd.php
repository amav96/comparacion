<?php
   class conectar{
        private $servidor="localhost";
        private $usuario="root";
        private $bd="reality2_postalmarketing";
        private $password="";
        

        public function conexion(){
             $conexion=mysqli_connect($this->servidor,
                                      $this->usuario,
                                      $this->password,
                                      $this->bd);

          return $conexion;
        }

   }

   $obj = new conectar();
   if ($obj->conexion()){
      
   } else {
       echo "fallo conectar";
   }


?>
