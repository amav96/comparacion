<script type="text/javascript">
	$(document).ready(function(){
		$('#cablevision2').val(1);
		recargarListacablevision2();

		$('#cablevision2').change(function(){
			recargarListacablevision2();
		});
	})
</script>
<script type="text/javascript">
	function recargarListacablevision2(){
		$.ajax({
			type:"POST",
			url:"../datos/datoscablevision2.php",
			data:"fecha=" + $('#cablevision2').val(),
			success:function(r){
				$('#cablevisionlista2').html(r);
			}
		});
	}
</script>