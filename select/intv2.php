<script type="text/javascript">
    $(document).ready(function(){
        $('#intv2').val(1);
        recargarListaintv2();

        $('#intv2').change(function(){
            recargarListaintv2();
        });
    })
</script>
<script type="text/javascript">
      function recargarListaintv2(){
          $.ajax({
              type:"POST",
              url:"../datos/datosintv2.php",
              data:"fecha=" + $('#intv2').val(),
              success:function(r){
                  $('#intvlista2').html(r);
              }
          });
      }
</script>