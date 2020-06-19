<<?php  
	function conect01(){
		$con1 = mysqli_connect("192.99.46.110","postalmarketing","Samsung5#");
	    mysqli_select_db($con1,"reality2_postalmarketing");
	    return($con1);
	}
?>