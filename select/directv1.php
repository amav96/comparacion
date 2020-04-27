<script type="text/javascript">
	$(document).ready(function(){
		$('#directv1').val(1);
		recargarListadirectv1();

		$('#directv1').change(function(){
			recargarListadirectv1();
		});
	})
</script>
<script type="text/javascript">
	function recargarListadirectv1(){
		$.ajax({
			type:"POST",
			url:"../datos/datosdirectv1.php",
			data:"fecha=" + $('#directv1').val(),
			success:function(r){
				$('#directvlista1').html(r);
			}
		});
	}
</script>


