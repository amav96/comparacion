<script type="text/javascript">
    $(document).ready(function(){
        $('#iplan3').val(1);
        recargarListaiplan3();

        $('#iplan3').change(function(){
            recargarListaiplan3();
        });
    })
</script>
<script type="text/javascript">
      function recargarListaiplan3(){
          $.ajax({
              type:"POST",
              url:"../datos/datosiplan3.php",
              data:"fecha=" + $('#iplan3').val(),
              success:function(r){
                  $('#iplanlista3').html(r);
              }
          });
      }
</script>