<script type="text/javascript">
	$(document).ready(function(){
		$('#directv2').val(1);
		recargarListadirectv2();

		$('#directv2').change(function(){
			recargarListadirectv2();
		});
	})
</script>
<script type="text/javascript">
	function recargarListadirectv2(){
		$.ajax({
			type:"POST",
			url:"../datos/datosdirectv2.php",
			data:"fecha=" + $('#directv2').val(),
			success:function(r){
				$('#directvlista2').html(r);
			}
		});
	}
</script>