<script type="text/javascript">
	$(document).ready(function(){
		$('#cablevision3').val(1);
		recargarListacablevision3();

		$('#cablevision3').change(function(){
			recargarListacablevision3();
		});
	})
</script>
<script type="text/javascript">
	function recargarListacablevision3(){
		$.ajax({
			type:"POST",
			url:"../datos/datoscablevision3.php",
			data:"fecha=" + $('#cablevision3').val(),
			success:function(r){
				$('#cablevisionlista3').html(r);
			}
		});
	}
</script>