<script type="text/javascript">
    $(document).ready(function(){
        $('#iplan2').val(1);
        recargarListaiplan2();

        $('#iplan2').change(function(){
            recargarListaiplan2();
        });
    })
</script>
<script type="text/javascript">
      function recargarListaiplan2(){
          $.ajax({
              type:"POST",
              url:"../datos/datosiplan2.php",
              data:"fecha=" + $('#iplan2').val(),
              success:function(r){
                  $('#iplanlista2').html(r);
              }
          });
      }
</script>