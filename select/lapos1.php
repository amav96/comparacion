<script type="text/javascript">
    $(document).ready(function(){
        $('#lapos1').val(1);
        recargarListalapos1();

        $('#lapos1').change(function(){
            recargarListalapos1();
        });
    })
</script>
<script type="text/javascript">
      function recargarListalapos1(){
          $.ajax({
              type:"POST",
              url:"../datos/datoslapos1.php",
              data:"fecha=" + $('#lapos1').val(),
              success:function(r){
                  $('#laposlista1').html(r);
              }
          });
      }
</script>