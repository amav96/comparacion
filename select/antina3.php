<script type="text/javascript">
	$(document).ready(function(){
		$('#antina3').val(1);
		recargarListaantina3();

		$('#antina3').change(function(){
			recargarListaantina3();
		});
	})
</script>
<script type="text/javascript">
	function recargarListaantina3(){
		$.ajax({
			type:"POST",
			url:"../datos/datosantina3.php",
			data:"fecha=" + $('#antina3').val(),
			success:function(r){
				$('#antinalista3').html(r);
			}
		});
	}
</script>