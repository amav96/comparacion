<script type="text/javascript">
    $(document).ready(function(){
        $('#metrotel3').val(1);
        recargarListametrotel3();

        $('#metrotel3').change(function(){
            recargarListametrotel3();
        });
    })
</script>
<script type="text/javascript">
      function recargarListametrotel3(){
          $.ajax({
              type:"POST",
              url:"../datos/datosmetrotel3.php",
              data:"fecha=" + $('#metrotel3').val(),
              success:function(r){
                  $('#metrotellista3').html(r);
              }
          });
      }
</script>