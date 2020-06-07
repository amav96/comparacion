<script type="text/javascript">
	$(document).ready(function(){
		$('#antina2').val(1);
		recargarListaantina2();

		$('#antina2').change(function(){
			recargarListaantina2();
		});
	})
</script>
<script type="text/javascript">
	function recargarListaantina2(){
		$.ajax({
			type:"POST",
			url:"../datos/datosantina2.php",
			data:"fecha=" + $('#antina2').val(),
			success:function(r){
				$('#antinalista2').html(r);
			}
		});
	}
</script>