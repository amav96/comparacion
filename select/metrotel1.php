<script type="text/javascript">
    $(document).ready(function(){
        $('#metrotel1').val(1);
        recargarListametrotel1();

        $('#metrotel1').change(function(){
            recargarListametrotel1();
        });
    })
</script>
<script type="text/javascript">
      function recargarListametrotel1(){
          $.ajax({
              type:"POST",
              url:"../datos/datosmetrotel1.php",
              data:"fecha=" + $('#metrotel1').val(),
              success:function(r){
                  $('#metrotellista1').html(r);
              }
          });
      }
</script>