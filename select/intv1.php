<script type="text/javascript">
	$(document).ready(function(){
		$('#intv1').val(1);
		recargarListaintv1();

		$('#intv1').change(function(){
			recargarListaintv1();
		});
	})
</script>
<script type="text/javascript">
	function recargarListaintv1(){
		$.ajax({
			type:"POST",
			url:"../datos/datosintv1.php",
			data:"fecha=" + $('#intv1').val(),
			success:function(r){
				$('#intvlista1').html(r);
			}
		});
	}
</script>