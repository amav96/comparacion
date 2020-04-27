<script type="text/javascript">
	$(document).ready(function(){
		$('#antina1').val(1);
		recargarListaantina1();

		$('#antina1').change(function(){
			recargarListaantina1();
		});
	})
</script>
<script type="text/javascript">
	function recargarListaantina1(){
		$.ajax({
			type:"POST",
			url:"../datos/datosantina1.php",
			data:"fecha=" + $('#antina1').val(),
			success:function(r){
				$('#antinalista1').html(r);
			}
		});
	}
</script>