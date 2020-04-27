<script type="text/javascript">
	$(document).ready(function(){
		$('#cablevision1').val(1);
		recargarListacablevision1();

		$('#cablevision1').change(function(){
			recargarListacablevision1();
		});
	})
</script>
<script type="text/javascript">
	function recargarListacablevision1(){
		$.ajax({
			type:"POST",
			url:"../datos/datoscablevision1.php",
			data:"fecha=" + $('#cablevision1').val(),
			success:function(r){
				$('#cablevisionlista1').html(r);
			}
		});
	}
</script>