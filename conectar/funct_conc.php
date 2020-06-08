<<?php  
	function conect01(){
	    $con1 = mysqli_connect("localhost","root","");
<<<<<<< HEAD:conectar/funct_conc.php
	    mysqli_select_db($con1,"reality2_postalmarketing");
=======
		mysqli_select_db($con1,"formulario");
		$con1->query("SET NAMES 'utf8'");
>>>>>>> 828e0f81539f44bdf93df135622c67b56665c5ae:MORENOKU/funct_conc.php
	    return($con1);
	}
?>