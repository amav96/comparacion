<script type="text/javascript">
    $(document).ready(function(){
        $('#metrotel2').val(1);
        recargarListametrotel2();

        $('#metrotel2').change(function(){
            recargarListametrotel2();
        });
    })
</script>
<script type="text/javascript">
      function recargarListametrotel2(){
          $.ajax({
              type:"POST",
              url:"../datos/datosmetrotel2.php",
              data:"fecha=" + $('#metrotel2').val(),
              success:function(r){
                  $('#metrotellista2').html(r);
              }
          });
      }
</script>