<script type="text/javascript">
    $(document).ready(function(){
        $('#lapos3').val(1);
        recargarListalapos3();

        $('#lapos3').change(function(){
            recargarListalapos3();
        });
    })
</script>
<script type="text/javascript">
      function recargarListalapos3(){
          $.ajax({
              type:"POST",
              url:"../datos/datoslapos3.php",
              data:"fecha=" + $('#lapos3').val(),
              success:function(r){
                  $('#laposlista3').html(r);
              }
          });
      }
</script>