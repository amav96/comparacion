<?php 
$conexion=mysqli_connect('localhost','root','','numeracion');
$fecha=$_POST['fecha'];

$sql="SELECT id_fecha,fecha_de_ingreso,canal_de_ingreso,administrador FROM tablaiplan2 where id_fecha='$fecha' limit 1";

$resultiplan2=mysqli_query($conexion,$sql);

$cadena="<label>Base Ingresada:</label>
<input type='hidden' id='iplan2' name='iplan2'>";

while ($ver=mysqli_fetch_row($resultiplan2)) {
    $cadena=$cadena.'<p style="width:100;height:10px;">'.utf8_encode($ver[1]).'</p>';

}
echo $cadena.'<br>';

$resultiplan2=mysqli_query($conexion,$sql);

$cadena="<label>Recepcion:</label>
<input type='hidden' id='iplan2' name='iplan2'>";

while ($ver=mysqli_fetch_row($resultiplan2)) {
    $cadena=$cadena.'<p style="width:100;height:10px;">'.utf8_encode($ver[2]).'</p>';

}
echo $cadena.'<br>';

$resultiplan2=mysqli_query($conexion,$sql);

$cadena="<label>Operador:</label>
<input type='hidden' id='iplan2' name='iplan2'>";

while ($ver=mysqli_fetch_row($resultiplan2)) {
    $cadena=$cadena.'<p style="width:100;height:10px;">'.utf8_encode($ver[3]).'</p>';

}
echo $cadena.'<br>';

?>