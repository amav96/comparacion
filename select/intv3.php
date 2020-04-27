<script type="text/javascript">
    $(document).ready(function(){
        $('#intv3').val(1);
        recargarListaintv3();

        $('#intv3').change(function(){
            recargarListaintv3();
        });
    })
</script>
<script type="text/javascript">
      function recargarListaintv3(){
          $.ajax({
              type:"POST",
              url:"../datos/datosintv3.php",
              data:"fecha=" + $('#intv3').val(),
              success:function(r){
                  $('#intvlista3').html(r);
              }
          });
      }
</script>