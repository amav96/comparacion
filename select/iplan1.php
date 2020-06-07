<script type="text/javascript">
    $(document).ready(function(){
        $('#iplan1').val(1);
        recargarListaiplan1();

        $('#iplan1').change(function(){
            recargarListaiplan1();
        });
    })
</script>
<script type="text/javascript">
      function recargarListaiplan1(){
          $.ajax({
              type:"POST",
              url:"../datos/datosiplan1.php",
              data:"fecha=" + $('#iplan1').val(),
              success:function(r){
                  $('#iplanlista1').html(r);
              }
          });
      }
</script>