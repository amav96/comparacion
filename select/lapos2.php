<script type="text/javascript">
    $(document).ready(function(){
        $('#lapos2').val(1);
        recargarListalapos2();

        $('#lapos2').change(function(){
            recargarListalapos2();
        });
    })
</script>
<script type="text/javascript">
      function recargarListalapos2(){
          $.ajax({
              type:"POST",
              url:"../datos/datoslapos2.php",
              data:"fecha=" + $('#lapos2').val(),
              success:function(r){
                  $('#laposlista2').html(r);
              }
          });
      }
</script>