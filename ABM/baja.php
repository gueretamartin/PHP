<html>
<head>
<title>Baja</title>
</head>
<body>
<?php
include ("conexion.inc");
$vLegajo = $_POST ['legajo'];
$vSql = "SELECT * FROM docentes_utn WHERE legajo='$vLegajo' ";
$vResultado = mysql_query($vSql, $link);
if(mysql_num_rows($vResultado) == 0)
 {
 echo ("Usuario Inexistente...!!! <br>");
 echo ("<A href='formBaja.html'>Continuar</A>");
}
else{
 //Arma la instrucción SQL y luego la ejecuta
$vSql= "DELETE FROM docentes_utn WHERE legajo = '$vLegajo' ";
mysql_query($vSql, $link);
 echo("El Usuario fue Borrado<br>");
 echo("<A href='menu.html'>Volver al Menu del ABM</A>");
}
// Liberar conjunto de resultados
mysql_free_result($vResultado);
// Cerrar la conexion
mysql_close($link);
?>
</body>
</html> 