<script type="text/javascript">
	$(document).ready(function(){
		$('#directv3').val(1);
		recargarListadirectv3();

		$('#directv3').change(function(){
			recargarListadirectv3();
		});
	})
</script>
<script type="text/javascript">
	function recargarListadirectv3(){
		$.ajax({
			type:"POST",
			url:"../datos/datosdirectv3.php",
			data:"fecha=" + $('#directv3').val(),
			success:function(r){
				$('#directvlista3').html(r);
			}
		});
	}
</script>