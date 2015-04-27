<head>
<title>Modificacion</title>
</head>
<body>
<?php
include ("conexion.inc");
//Captura datos desde el Form anterior
$vNombre = $_POST['nombre'];
$vApellido = $_POST['apellido'];
$vLegajo = $_POST['legajo'];

//Arma la instrucción SQL y luego la ejecuta
$vSql = "UPDATE docentes_utn set nombre='$vNombre', apellido='$vApellido', legajo='$vLegajo' where legajo='$vLegajo'";
mysql_query($vSql, $link) or die (mysql_error());
echo("El Usuario fue Modificado<br>");
echo("<A href= 'menu.html'>Volver al Menu del ABM</A>");
// Cerrar la conexion
mysql_close($link);
?>
</body>
</html> 